<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	}else{
		require_once('/copaki/www/piore/dev/function/makeRoomCard.php');

		require_once('/copaki/www/piore/dev/process/connection.php');
		$sql = "
		SELECT room.num, room.status_id, room.service_id, mom.name, service.name, service.dayin, service.dayout
			FROM n_room AS room
			LEFT JOIN n_service AS service ON service.id = room.service_id
			LEFT JOIN n_mom AS mom ON mom.id = service.mom_id
			ORDER BY room.num";
		$result = mysqli_query($conn, $sql);

		$content = "";
		while ($row = mysqli_fetch_array($result)) {

			$date1 = new DateTime( $row['5'] );
			$date2 = new DateTime();
			$diff = $date2->diff($date1);
			$diff = $diff->days + 1;
			$content .= makeRoomCard($row['0'], $row['1'], $row['2'], $row['3'], $row['4'], $row['5'], $row['6'], $diff);
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
					<?=$content?>
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
	<script type="text/javascript">

		function selectServiceIn( roomNo ){
			var settings ='toolbar=0,directories=0,status=no,menubar=0,scrollbars=no,resizable=no,height=800,width=1200,left=0,top=0';
			var subject = "popupServiceSelectIn.php?roomNo=" + roomNo;
			windowObj = window.open(subject,"Select Service",settings);
		}

	</script>
</body>
</html>
