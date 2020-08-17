<?php
	session_start();
	if( !isset( $_SESSION['User'] ) ){
		header("Location:index.php");
	}else {
		require_once('/copaki/www/piore/dev/process/connection.php');
		$sql = "
		SELECT mom.id, mom.name, mom.phone, service.dayin, service.dayout, service.name, service.id
			FROM n_mom AS mom
			LEFT JOIN n_service AS service ON service.mom_id = mom.id
			ORDER BY service.dayin DESC
			LIMIT 100";
		$result = mysqli_query( $conn, $sql );
		$card = '';
		while( $row = mysqli_fetch_array( $result ) ){
			$card .= '
			<div class="col-lg-4 col-xl-3 col-md-6">
				<div class="user-card contact-item p-md">
					<div class="media">
						<div class="media-left">
							<div class="avatar avatar-hxl avatar-circle">
							<img src="../assets/images/mom/' . $row['0'] . '.jpg" alt="contact image">
							</div>
						</div>
						<div class="media-body">
							<h5 class="media-heading title-color">' . $row['1'] . '</h5>
							<p class="media-meta m-b-0">' . $row['5'] . '</p>
							<p class="media-meta m-b-0">' . $row['2'] . '</p>
							<p class="media-meta m-b-0">입실일 : ' . $row['3'] . '</p>
							<p class="media-meta m-b-0">퇴실일 : ' . $row['4'] . '</p>
						</div>
					</div>
					<div class="items">
						<div class="dropdown">
						<a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php?id=' . $row['6'] . '"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php?id=' . $row['6'] . '"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#" onclick="selectWindow(\'popup.subproduct.php?id=' . $row['6'] .'\')"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php?id=' . $row['6'] . '"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
					</div><!-- .items -->
				</div><!-- user-card -->
			</div>';
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
				<div id="gallery" class="gallery m-b-lg">
					<div class="row">
					<div class="col-md-12">
						<div class="mail-toolbar m-b-lg">
							<div class="btn-group" role="group">
								<a href="#" class="btn btn-default">Media Grid</a>
							</div>

							<div class="btn-group" role="group">
								<a href="#" class="btn btn-default"><i class="fa fa-trash"></i></a>
								<a href="#" class="btn btn-default"><i class="fa fa-exclamation-circle"></i></a>
							</div>
							<a href="#" class="btn btn-default"><i class="fa fa-refresh"></i></a>

							<div class="btn-group pull-right" role="group">
								<a href="#" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>
								<a href="#" class="btn btn-default"><i class="fa fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
				</div>
					<div class="row">
						<?= $card ?>
					</div>
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

		var windowObj;

		function selectWindow( redirect ){
			var settings ='toolbar=0,directories=0,status=no,menubar=0,scrollbars=no,resizable=no,height=800,width=1150,left=0,top=0';
			windowObj = window.open(redirect,"Select Service",settings);
		}

		function	confSubmit( form ){
			if ( confirm("수정하시겠습니까?") ) {
				form.submit();
			}
		}
	</script>
</body>
</html>
