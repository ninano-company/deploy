<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:index.php");
	}else{
		require_once('/copaki/www/piore/dev/process/connection.php');

		$sql = "
		SELECT
			mom.name, mom.phone, service.name, room.num, service.dayin, service.dayout, checked.name, service.id
				FROM n_mom AS mom
				LEFT JOIN n_service AS service ON service.mom_id = mom.id
				LEFT JOIN n_select AS checked ON checked.id = service.checked
				LEFT JOIN n_room AS room ON room.service_id = service.id
				WHERE service.progress = 11
				ORDER BY service.dayin DESC";

		$result = mysqli_query( $conn, $sql );

		$trow = '';
		$num = 1;

		while( $row = mysqli_fetch_array($result) ){

			$a = substr($row['1'],0,3);
			$b = substr($row['1'],3,4);
			$c = substr($row['1'],7,4);

			if( $row['3'] |= 0 ){
				$row['3'] .= "호";
			} else {
				$row['3'] = "-";
			}

			$trow .= '<tr class="tableBtn" onclick="clickProfileMom('. $row[7] .');">';
			$trow .= '<td>'.$num.'</td>';
			$trow .= '<td>'.$row['3'].'</td>';
			$trow .= '<td>'.$row['0'].'</td>';
			$trow .= '<td>'.$a.'-'.$b.'-'.$c.'</td>';
			$trow .= '<td>'.$row['2'].'</td>';
			$trow .= '<td>'.$row['4'].'</td>';
			$trow .= '<td>'.$row['5'].'</td>';
			$trow .= '<td>'.$row['6'].'</td>';
			$trow .= '<td><button class="btn btn-warning" style="padding-top:0; padding-bottom:0; height:25px;" name="delete" onclick="deleteMomConfirm('.$row['4'].');">삭제</button></td>';
			$trow .= '</tr>';
			$num++;

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

									<div class="widget-body">
										<div class="table-responsive">
											<table id="ready-datatables" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
												<colgroup>
													<col class="col-sm-1">
													<col class="col-sm-1">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-1">
												</colgroup>
												<thead>
													<tr>
														<th></th>
														<th>호실</th>
														<th>이름</th>
														<th>연락처</th>
														<th>아기</th>
														<th>입실일</th>
														<th>퇴실예정일</th>
														<th>납부</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?= $trow ?>
												</tbody>
											</table>
										</div>
									</div><!-- .widget-body -->

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
