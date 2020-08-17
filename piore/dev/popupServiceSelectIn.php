<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:index.php");
	}else{
		require_once('/copaki/www/piore/dev/process/connection.php');

		$sql="
		SELECT
			mom.name, service.name, gender.name, service.dayin, mom.phone,
			service.id
			FROM n_service AS service
			LEFT JOIN n_mom AS mom ON mom.id = service.mom_id
			LEFT JOIN n_select AS gender ON gender.id = service.sexual
			WHERE service.progress = 10
		";

		$result=mysqli_query($conn, $sql);
		$trow = "";
		while($row = mysqli_fetch_array($result)){

			$phone = substr($row[4], 0, 3).'-'.substr($row[4], 3, 4).'-'.substr($row[4], 7);

			$trow .= "<tr>";
			$trow .='
				<td><a href="#" onclick="updateRoomStatusIn('. $_GET['roomNo'] .', '. $row[5] .');">'. $row[0] .'</a></td>
				<td>'. $row[1] .'</td>
				<td>'. $row[2] .'</td>
				<td>'. $row[3] .'</td>
				<td>'. $phone .'</td>
			</tr>
			';
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

<body style="padding-top:0px;">
	<!--============= start main area -->

	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
	  <div class="wrap">
			<section class="app-content">
				<!-- <input type="hidden" name="" value=""> -->
				<table id="default-datatable" data-plugin="DataTable" class="table table-bordered m-t-lg" cellspacing="0" width="100%">
					<colgroup>
						<col class="col-xs-2">
						<col class="col-xs-4">
						<col class="col-xs-2">
						<col class="col-xs-2">
						<col class="col-xs-2">
					</colgroup>
					<thead>
						<tr>
							<th>산모명</th>
							<th>신생아명</th>
							<th>성별</th>
							<th>입실일</th>
							<th>연락처</th>
						</tr>
					</thead>
					<tbody>
						<?= $trow ?>
					</tbody>
				</table>
			</section><!-- .app-content -->
		</div><!-- .wrap -->
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
		function updateRoomStatusIn(roomNo, service){
			window.location.href = './process/update-process-room.php?in=&service=' + service + '&room=' + roomNo;
		}
	</script>
</body>
</html>
