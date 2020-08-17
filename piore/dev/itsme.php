<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
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
  <link rel="stylesheet" href="module.css?ver=1">
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
			<section class="app-content ">
        <div class="dayly_page">
          <header class="dayly_header">
          <div class="control">
            <ul>
              <li class="ct_list on">첫 번째</li>
              <li class="ct_list">두 번째</li>
              <li class="ct_list">세 번째</li>
              <li class="ct_list">네 번째</li>
              <li class="ct_list">다섯 번째</li>
              <li class="ct_list">여섯 번째</li>
              <li class="ct_list">일곱 번째</li>
              <li class="ct_list">여덟 번째</li>
              <li class="ct_list">아홉 번째</li>
              <li class="ct_list">열 번째</li>
            </ul>
          </div>
          </header>
					<div class="dayly_content">1</div>
					<div class="dayly_content off">2</div>
					<div class="dayly_content off">3</div>
					<div class="dayly_content off">4</div>
					<div class="dayly_content off">5</div>
					<div class="dayly_content off">6</div>
					<div class="dayly_content off">7</div>
					<div class="dayly_content off">8</div>
					<div class="dayly_content off">9</div>
          <div class="dayly_content off">10</div>
          <div class="dayly_okay">
						<div class="buttons">
            	<button name="button" class="btn btn-info rounded">취소</button>
            	<button name="button" class="btn btn-info rounded">확인</button>
          	</div>
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
	<script src="module.js">

	</script>
</body>
</html>
