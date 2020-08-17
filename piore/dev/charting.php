<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else {
		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/formInput.php');

		$sql = "
		SELECT feed
			FROM n_dailynd
			WHERE n_dailynd.service_id = {$_GET['id']}
			ORDER BY id";
		$result = mysqli_query( $conn, $sql );

		$feed = 30;

		while ( $row = mysqli_fetch_array( $result ) ) {
			if ( $row['feed'] |= '' ) {
				$feed = $row['feed'];
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
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">신생아 경과 기록지</h4>
							</header><!-- .widget-header -->
							<hr class="widget-separator">
							<div class="widget-body">
								<form action="charting.summary.php?id=<?= $_GET['id'] ?>" class="form-horizontal" method="post">
									<div class="tab-content p-md">

										<div role="tabpanel" class="tab-pane in active fade" id="check">
											<div class="row">
												<div class="form-group">
													<label for="touchspin-demo-2" class="col-sm-5 control-label">수유를 했나요?</label>
													<div class="col-sm-7">
														<button type="button" class="btn mw-md btn-warning" href="#feeding" aria-controls="feeding" role="tab" data-toggle="tab" onclick="sendValue('feeded', 1);">예</button>
														<button type="button" class="btn mw-md btn-warning" href="#bowel" aria-controls="bowel" role="tab" data-toggle="tab" onclick="sendValue('feeded', 2);">아니오</button>
													</div>
												</div>
												<div class="col-md-12 m-t-xl text-center">
												</div>
											</div><!-- .row -->
											<input type="hidden" id="feeded" name="feeded" value="2">
										</div><!-- .tab-pane -->

										<div role="tabpanel" class="tab-pane in fade" id="feeding">
											<div class="row">
												<div class="form-group">
													<label for="touchspin-demo-2" class="col-sm-3 control-label">모유 직수를 했나요?</label>
													<div class="col-sm-9">
														<?= formRadio( 'info', 'yes2', '예', 'breastfeed', '1'); ?>
														<?= formRadio( 'info', 'no2', '아니오', 'breastfeed', '2'); ?>
													</div>
												</div>
												<div class="form-group">
													<label for="touchspin-demo-2" class="col-sm-3 control-label">어떤 유종을 먹었나요?</label>
													<div class="col-sm-9">
														<?= formRadio( 'pink', 'mom', '모유', 'feedkind', '모유'); ?>
														<?= formRadio( 'pink', 'powder', '분유', 'feedkind', '분유'); ?>
														<?= formRadio( 'pink', 'mixed', '혼유', 'feedkind', '혼유'); ?>
													</div>
												</div>
												<div class="form-group">
													<label for="feed" class="col-sm-3 control-label">얼마나 먹었나요?</label>
													<div class="col-sm-6">
														<input id="feed" data-plugin="TouchSpin" class="text-center" data-options="{
															min: 10,
															max: 200,
															initval: <?= $feed ?>,
															step: 10,
															decimals: 0,
															boostat: 10,
															initial: 50,
															maxboostedstep: 10,
															postfix: 'cc',
															buttondown_class: 'btn btn-info mw-sm',
															buttonup_class: 'btn btn-info mw-sm'
														}" type="text" name="feed" value="">
													</div>
												</div>
												<div class="col-md-12 m-t-xl text-center">
													<button type="button" class="btn mw-md btn-warning" href="#check" aria-controls="check" role="tab" data-toggle="tab">이전</button>
													<button type="button" class="btn mw-md btn-warning" href="#bowel" aria-controls="bowel" role="tab" data-toggle="tab">다음</button>
												</div>
											</div><!-- .row -->
										</div><!-- .tab-pane -->

										<div role="tabpanel" class="tab-pane fade" id="bowel">
											<div class="row">
												<div class="form-group">
													<label for="touchspin-demo-2" class="col-sm-3 control-label">구토를 했나요?</label>
													<div class="col-sm-9">
														<?= formRadio( 'info', 'yes3', '예', 'omit', '1'); ?>
														<?= formRadio( 'info', 'no3', '아니오', 'omit', '2'); ?>
													</div>
												</div>
												<div class="form-group">
													<label for="touchspin-demo-2" class="col-sm-3 control-label">소변을 보았나요?</label>
													<div class="col-sm-9">
														<?= formRadio( 'success', 'yes4', '예', 'pee', '1'); ?>
														<?= formRadio( 'success', 'no4', '아니오', 'pee', '2'); ?>
													</div>
												</div>
												<div class="form-group">
													<label for="touchspin-demo-2" class="col-sm-3 control-label">대변은 어떤가요?</label>
													<div class="col-sm-9">
														<?= formRadio( 'info', 'none', '보지않음', 'feces', '-'); ?>
														<?= formRadio( 'info', 'good', '쾌변', 'feces', '쾌변'); ?>
														<?= formRadio( 'info', 'bad', '설사', 'feces', '설사'); ?>
														<?= formRadio( 'info', 'green', '녹변', 'feces', '녹변'); ?>
														<?= formRadio( 'info', 'blood', '혈변', 'feces', '혈변'); ?>
													</div>
												</div>
												<div class="col-md-12 m-t-xl text-center">
													<button type="button" class="btn mw-md btn-warning" href="#check" aria-controls="check" role="tab" data-toggle="tab">이전</button>
													<button type="button" class="btn mw-md btn-warning" href="#remarks" aria-controls="remarks" role="tab" data-toggle="tab">다음</button>
												</div>
											</div><!-- .row -->
										</div><!-- .tab-pane -->

										<div role="tabpanel" class="tab-pane fade" id="remarks">
											<div class="row">
												<div class="col-md-12">
													<label class="col-md-offset-1 m-b-lg">특이사항이 있나요?</label>
													<div class="col-md-offset-1 col-md-10">
														<div class="form-group">
																<?= formCheckBox( 'dark', 'codeoozing', 'Code Oozing', 'remarks[]', 'Code Oozing'); ?>
																<?= formCheckBox( 'dark', 'codecare', 'Code Care', 'remarks[]', 'Code Care'); ?>
																<?= formCheckBox( 'dark', 'lt', 'LT 발목 홍반', 'remarks[]', 'LT 발목 홍반'); ?>
																<?= formCheckBox( 'dark', 'diaperrash', 'Diaper Rash', 'remarks[]', 'Diaper Rash'); ?>
																<?= formCheckBox( 'dark', 'nasalcare', 'Nasal Care', 'remarks[]', 'Nasal Care'); ?>
																<?= formCheckBox( 'dark', 'saline', '생리식염수 점적', 'remarks[]', '생리식염수 점적'); ?>
																<?= formCheckBox( 'dark', 'nose', '콧소리 거침', 'remarks[]', '콧소리 거침'); ?>
																<?= formCheckBox( 'dark', 'eyecare', 'Eye Care', 'remarks[]', 'Eye Care'); ?>
																<?= formCheckBox( 'dark', 'interrogation', '간찰진 Care', 'remarks[]', '간찰진 Care'); ?>
																<?= formCheckBox( 'dark', 'jaundice', '황달', 'remarks[]', '황달'); ?>
																<?= formCheckBox( 'dark', 'cutbreast', '모유 수유 중단', 'remarks[]', '모유 수유 중단'); ?>
														</div>
													</div>
												</div><!-- END column -->
												<div class="col-md-12 m-t-xl text-center">
													<button type="button" class="btn mw-md btn-warning" href="#bowel" aria-controls="bowel" role="tab" data-toggle="tab">이전</button>
													<button type="submit" class="btn mw-md btn-warning">완료</button>
												</div>
											</div><!-- .row -->
										</div><!-- .tab-pane -->

									</div><!-- .tab-content -->
								</form>
							</div><!-- .widget-body -->
						</div><!-- .widget -->
					</div><!-- END column -->

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
		function sendValue( id, value ){
			document.getElementById(id).value = value;
		}
	</script>
</body>
</html>
