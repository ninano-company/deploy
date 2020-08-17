<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else{
		require_once('/copaki/www/piore/dev/process/connection.php');

		$sql = "
		SELECT
			bed.name, service.name, mom.name, emp.name, daily.feed, daily.feedkind, service.dayin, daily.created, service.id, mom.id
			FROM n_bed AS bed
      LEFT JOIN n_service AS service ON service.id = bed.service_id
			LEFT JOIN n_mom AS mom ON mom.id = service.mom_id
			LEFT JOIN n_user AS emp ON emp.id = service.emp_id
			LEFT JOIN ( SELECT a.id, a.feed, a.feedkind, a.created, a.service_id FROM n_dailynd AS a
				INNER JOIN (SELECT service_id, max(created) AS created FROM n_dailynd GROUP BY service_id) AS b ON a.service_id = b.service_id AND a.created = b.created ) AS daily ON daily.service_id = service.id
			ORDER BY bed.name
		";
		$result = mysqli_query( $conn, $sql );
		if ( $result === false) {
			die();
		} else {

			$trow = '';

			while( $row = mysqli_fetch_array( $result ) ){

				$dayin = new DateTime( $row['dayin'] );
				$date = new DateTime();
				$diff = $date->diff($dayin);
				$diff = $diff->days + 1;

				$trow .= '<tbody><tr>';
				$trow .= '<td>' . $row['0'] . '</td>';
				$trow .= '<td><a href="daily.chart.php?id=' . $row['8'] . '">' . $row['1'] . '</a></td>';
				$trow .= '<td><a href="profile.mom.php?id=' . $row['9'] . '">' . $row['2'] . '</a></td>';
				$trow .= '<td>' . $row['4'] . '</td>';
				$trow .= '<td>' . $row['5'] . '</td>';
				if ( $row['6'] |= NULL ) {
					$trow .= '<td>' . $diff . '일차</td>';
				} else {
					$trow .= '<td>'.'</td>';
				}
				$trow .= '<td>' . $row['7'] . '</td>';
				$trow .= '<td>' . $row['3'] . '</td>';
				$trow .= '</tr></tbody>';

			}
		}
	}
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'layout/head.php'; ?>
	<script>
		Breakpoints();
	</script>
	<?php include 'layout/style.php'; ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
	<!--============= start main area -->

	<!-- APP NAVBAR ==========-->
	<?php include 'layout/navbar.php'; ?>
	<!--========== END app navbar -->

	<!-- APP ASIDE ==========-->
	<?php include 'layout/aside.php'; ?>
	<!--========== END app aside -->

	<!-- navbar search -->
	<?php include 'layout/navbar-search.php'; ?>
	<!-- .navbar-search -->

	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
	  <div class="wrap">
			<section class="app-content">
				<div class="row">
					<div class="col-md-12">
						<div class="widget p-lg">
							<header class="widget-header">
								<h4 class="widget-title">신생아 관리 목록</h4>
							</header>
							<hr class="widget-separator">
							<div class="widget-body">
							<div class="table-responsive">
								<table id="list-baby"
									data-plugin="DataTable"
									class="table table-hover"
									cellspacing="0"
									width="100%">
									<colgroup>
										<col class="col-xs-1">
										<col class="col-xs-2">
										<col class="col-xs-2">
										<col class="col-xs-1">
										<col class="col-xs-2">
										<col class="col-xs-1">
										<col class="col-xs-2">
										<col class="col-xs-1">
									</colgroup>
									<thead>
										<tr>
											<th>배시넷</th>
											<th>신생아명</th>
											<th>산모</th>
											<th>수유량(cc)</th>
											<th>수유형태</th>
											<th>재원일</th>
											<th>수유일자</th>
											<th>산후조리사</th>
										</tr>
									</thead>
									<?= $trow ?>
								</table>
							</div>	<!-- End table responsive -->
							</div> 	<!-- End widget body -->
						</div> <!-- End widget -->
					</div> <!-- End column -->
				</div><!-- .row -->
			</section><!-- .app-content -->
		</div><!-- .wrap -->

		<!-- APP FOOTER -->
		<?php include 'layout/footer.php'; ?>
		<!-- /#app-footer -->
	</main>
	<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	<?php include 'layout/app-customizer.php'; ?>
	<!-- #app-customizer -->

	<!-- build:js ../assets/js/core.min.js -->
	<script src="../libs/bower/jquery/dist/jquery.js"></script>
	<script src="../libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="../libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="../libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="../libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="../libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->
	<script src="../assets/js/library.js"></script>
	<script src="../assets/js/plugins.js"></script>
	<script src="../assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="../libs/bower/moment/moment.js"></script>
	<script src="../libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="../assets/js/fullcalendar.js"></script>
</body>
</html>
