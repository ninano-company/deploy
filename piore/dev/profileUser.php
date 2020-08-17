<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else {
		require_once('/copaki/www/piore/dev/function/formInput.php');
		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/javascript.php');
		$r1 = "";
		$r2 = "";
		$r3 = "";
		$r4 = "";

		$sql = "
		SELECT
			user.id, user.name, user.phone, user.status, user.email,
			user.address, user.birth, user.joined, user.class, user.career,
			user.uname, user.pass, user.note, user.image
			FROM n_user AS user
			WHERE user.id = {$_GET['id']}
		";
		$result = mysqli_query( $conn, $sql );
		if( $row = mysqli_fetch_array($result) ){

			$sql = "
			SELECT id, name, cate
			FROM n_select
			WHERE cate IN ('class', 'status')
			";
			$result = mysqli_query( $conn, $sql );
			$optionStatus = '';
			$optionClass = '';

			while( $rowOption = mysqli_fetch_array($result) ){
				if ($rowOption['2'] == 'status') {
					if ( $row[3] === $rowOption['id'] ) {
						$optionStatus .= formOptions( $rowOption['id'], $rowOption['name'] );
					}else{
						$optionStatus .= formOption( $rowOption['id'], $rowOption['name'] );
					}
				} else if ($rowOption['2'] == 'class') {
					if ( $row[8] === $rowOption['id'] ) {
						$optionClass .= formOptions( $rowOption['id'], $rowOption['name'] );
					}else{
						$optionClass .= formOption( $rowOption['id'], $rowOption['name'] );
					}
				}
			}

			$phone = substr($row[2], 0, 3).'-'.substr($row[2], 3, 4).'-'.substr($row[2], 7);

			$r1 .= formInputHorizon( 'text', 'name', '이름', $row[1]);
			$r1 .= formInputHorizon( 'tel', 'phone', '연락처', $phone );
			$r1 .= formHorizonSelects( '근태', 'status' );
			$r1 .= $optionStatus;
			$r1 .= formHorizonSelecte();
			$r2 .= formInputHorizon( 'date', 'birth', '생년월일', $row[6] );
			$r2 .= formInputHorizon( 'date', 'joined', '입사일', $row[7] );
			$r2 .= formHorizonSelects( '직급', 'class' );
			$r2 .= $optionClass;
			$r2 .= formHorizonSelecte();
			$r3 .= formInputHorizon( 'email', 'email', '메일주소', $row[4] );
			$r3 .= formInputHorizonL( 'text', 'address', '주소', $row[5] );
			$r4 .= formInputHorizon( 'text', 'uname', '아이디', $row[10] );
			$r4 .= formInputHorizonL( 'pass', 'pass', '비밀번호', '' );
			$hidden .= formInputH( 'hidden', 'pid', $row[0]);

		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '/copaki/www/piore/dev/layout/head.php'; ?>
	<script>
	Breakpoints();
	</script>
	<?php include '/copaki/www/piore/dev/layout/style.php'; ?>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
	<!--============= start main area -->

	<!-- APP NAVBAR ==========-->
	<?php include '/copaki/www/piore/dev/layout/navbar.php'; ?>
	<!--========== END app navbar -->

	<!-- APP ASIDE ==========-->
	<?php include '/copaki/www/piore/dev/layout/aside.php'; ?>
	<!--========== END app aside -->

	<!-- navbar search -->
	<?php include '/copaki/www/piore/dev/layout/navbar-search.php'; ?>
	<!-- .navbar-search -->

	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
		<div class="wrap">
			<section class="app-content">
				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">직원 정보</h4>
							</header>
							<hr class="widget-separator"/>
							<div class="widget-body">
								<div class="row">
									<form class="form-horizontal" action="process/update-process-user.php?id=<?=$_GET['id']?>" method="post">
										<div class="col-md-12 text-center">
											<div class="avatar avatar-xxxl avatar-circle">
												<img src="../assets/images/user/<?= $row['image'] ?>" alt="contact image">
											</div>
										</div>
										<div class="col-md-12">
											<div class="widget-body">
												<div class="row">
													<?= $r1 ?>
													<?= $r2 ?>
													<?= $r3 ?>
													<?= $r4 ?>
												</div>
											</div>
										</div>
										<div class="form-group text-center m-b-0">
											<input type="button" class="btn mw-smd btn-warning" style="color:white;" value="저장" onclick="confSubmit(this.form)">
										</div>
									</form>
								</div>
							</div>
						</div><!-- .widget -->
					</div><!-- END column -->
					<div class="col-md-12">
						<form action="/piore/dev/process/update-process-note.php?id=<?=$_GET['id']?>&update=user" method="post">
							<div class="panel" id="status-update-panel">
								<div class="panel-body">
									<textarea name="note" id="status-update-content" cols="30" rows="10"><?=$row['note']?></textarea>
								</div>
								<div class="panel-footer">
									<p class="text-center m-b-0">
										<input type="button" class="btn mw-smd btn-primary" value="수정" onclick="confSubmit(this.form)">
									</p>
								</div>
							</div><!-- #status-update-panel -->
						</form>
					</div>
				</div>

			</section><!-- #dash-content -->
		</div><!-- .row -->



		<!-- APP FOOTER -->
		<?php include '/copaki/www/piore/dev/layout/footer.php'; ?>
		<!-- /#app-footer -->
	</main>
	<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	<?php include '/copaki/www/piore/dev/layout/app-customizer.php'; ?>
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

		function	confSubmit( form ){
			if ( confirm("수정하시겠습니까?") ) {
				form.submit();
			}
		}
	</script>
</body>
</html>
