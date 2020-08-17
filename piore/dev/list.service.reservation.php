<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:index.php");
	}else{
		require_once('/copaki/www/piore/dev/process/connection.php');

		$sql = "
		SELECT
			mom.name, phone, bbirth, consult_date, progress, service.id
				FROM n_mom AS mom
				LEFT JOIN n_service AS service ON service.mom_id = mom.id
				WHERE service.progress = 8 OR service.progress = 9
				ORDER BY service.created";

		$result = mysqli_query( $conn, $sql );

		$trow_reservation = '';
		$trow_ready = '';

		$num_reservation = 1;
		$num_ready = 1;

		while( $row = mysqli_fetch_array($result) ){

			$a = substr($row['1'],0,3);
			$b = substr($row['1'],3,4);
			$c = substr($row['1'],7,4);

			if ( $row['4'] == 8 ) {

				$trow_reservation .= '<tr class="tableBtn" onclick="clickProfileMom('. $row[5] .');">';
				$trow_reservation .= '<td>'.$num_reservation.'</td>';
				$trow_reservation .= '<td>'.$row['0'].'</td>';
				$trow_reservation .= '<td>'.$a.'-'.$b.'-'.$c.'</td>';
				$trow_reservation .= '<td>'.$row['2'].'</td>';
				$trow_reservation .= '<td>'.$row['3'].'</td>';
				$trow_reservation .= '<td><button class="btn btn-warning" style="padding-top:0; padding-bottom:0; height:25px;" name="delete" onclick="deleteMomConfirm('.$row['4'].');">삭제</button></td>';
				$trow_reservation .= '</tr>';
				$num_reservation++;

			} else if ( $row['4'] == 9 ) {

				$trow_ready .= '<tr class="tableBtn" onclick="clickProfileMom('. $row[5] .');">';
				$trow_ready .= '<td>'.$num_ready.'</td>';
				$trow_ready .= '<td>'.$row['0'].'</td>';
				$trow_ready .= '<td>'.$a.'-'.$b.'-'.$c.'</td>';
				$trow_ready .= '<td>'.$row['2'].'</td>';
				$trow_ready .= '<td>'.$row['3'].'</td>';
				$trow_ready .= '<td><button class="btn btn-warning" style="padding-top:0; padding-bottom:0; height:25px;" onclick="deleteEmpConfirm('.$row['4'].');">삭제</button></td>';
				$trow_ready .= '</tr>';
				$num_ready++;

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
	<?php include 'layout/navbar-search.php' ?>
	<!-- .navbar-search -->

	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
	  <div class="wrap">
		<section class="app-content">
			<div class="row">
				<div class="col-md-12">
					<div class="mail-toolbar m-b-lg">
						<div class="btn-group" role="group">
							<a href="create.reservation.php" class="btn btn-default">예약 약식 등록</i></a>
							<a href="create.reservation.detail.php" class="btn btn-default">예약 정식 등록</i></a>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="widget">
						<div class="m-b-lg nav-tabs-horizontal">

							<!-- tabs list -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#reservation" aria-controls="ready" role="tab" data-toggle="tab">예약대기</a></li>
								<li role="presentation"><a href="#ready" aria-controls="reservation" role="tab" data-toggle="tab">상담대기</a></li>
							</ul><!-- .nav-tabs -->

							<!-- Tab panes -->
							<div class="tab-content p-md">
								<div role="tabpanel" class="tab-pane in active fade" id="reservation">
									<div class="widget-body">
										<div class="table-responsive">
											<table id="reservation-datatables" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
												<colgroup>
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-2">
													<col class="col-sm-3">
													<col class="col-sm-3">
													<col class="col-sm-1">
												</colgroup>
												<thead>
													<tr>
														<th></th>
														<th>이름</th>
														<th>연락처</th>
														<th>출산예정일</th>
														<th>상담희망일</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?= $trow_reservation ?>
												</tbody>
											</table>
										</div>
									</div><!-- .widget-body -->
								</div><!-- .tab-pane  -->

								<div role="tabpanel" class="tab-pane fade" id="ready">
									<div class="widget-body">
										<div class="table-responsive">
											<table id="ready-datatables" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
												<colgroup>
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-2">
													<col class="col-sm-3">
													<col class="col-sm-3">
													<col class="col-sm-1">
												</colgroup>
												<thead>
													<tr>
														<th></th>
														<th>이름</th>
														<th>연락처</th>
														<th>출산예정일</th>
														<th>상담확정일</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?= $trow_ready ?>
												</tbody>
											</table>
										</div>
									</div><!-- .widget-body -->
								</div><!-- .tab-pane  -->

							</div><!-- .tab-content  -->
						</div><!-- .nav-tabs-horizontal -->
					</div><!-- .widget -->
				</div><!-- END column -->
			</div>
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
	<script type="text/javascript">
		var isBtnClicked = false;

		function	clickProfileMom(id){
			if ( isBtnClicked ) {
				isBtnClicked = false;
			} else {
				var loc = "./profile.mom.php?";
				loc = loc.concat("id=", id);
				location.href=loc;
			}
		}

		function deleteMomConfirm(id){
			isBtnClicked = true;
			if(confirm("삭제하시겠습니까?")){
				var loc = "process/delete-process-mom.php?";
				loc = loc.concat("id=", id, "&", 'delete');
				location.href=loc;
			}
		}
	</script>
</body>
</html>
