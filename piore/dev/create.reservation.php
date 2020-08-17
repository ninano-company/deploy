<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	}else{
		require('/copaki/www/piore/dev/function/formInput.php');

		$form = "";
		$form .= formInputp( 'text', '이름', 'name', '이름을 입력해주세요.', 'required' );
		$form .= formInputm( 'tel', '연락처', 'phone', '\'-\'를 사용하지 말고 이어서 입력해주세요.', 11, 'required' );
		$form .= formInput( 'date', '출산예정일', 'bbirth' );
		$form .= formInput( 'date', '상담희망일', 'rdate' );
		$form .= formTextarea( '비고', 'note', 4 );
		$form .= formInputH( 'hidden', 'progress', 9);
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
				<div class="row">\
					<div class="col-md-offset-3 col-md-6">
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">상담 예약 등록</h4>
							</header><!-- .widget-header -->
							<hr class="widget-separator">
							<div class="widget-body">
								<div class="m-b-lg">
									<small>
										산모님의 예약 정보를 등록해주세요.
									</small>
								</div>
								<form action="process/create-process-reservation.php" method="POST">
									<?= $form ?>
									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-md" name="create">Submit</button>
									</div>
								</form>
							</div><!-- .widget-body -->
						</div><!-- .widget -->
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
</body>
</html>
