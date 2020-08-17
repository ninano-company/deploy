<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else {
		require_once('/copaki/www/piore/dev/function/formInput.php');

		$datetime = new DateTime();
		$date = $datetime->format("Y-m-d");
		$time = $datetime->format("H:i");

		$breastfeed = '';
		$feedkind = $_POST['feedkind'];
		$feed = $_POST['feed'];
		$omit = '';
		$pee = '';
		$remarks = '';

		if ( $_POST['feeded'] == 1) {
		} else {
			$feed = 0;
		}

		if ( $_POST['breastfeed'] == 1){
			$breastfeed = '<i class="fa fa-circle-o"></i>';
		} else {
			$breastfeed = '<i class="fa fa-close"></i>';
		}
		if ( $_POST['omit'] == 1){
			$omit = '<i class="fa fa-circle-o"></i>';
		} else {
			$omit = '<i class="fa fa-close"></i>';
		}
		if ( $_POST['pee'] == 1){
			$pee = '<i class="fa fa-circle-o"></i>';
		} else {
			$pee = '<i class="fa fa-close"></i>';
		}

		for( $i = 0; $i < count( $_POST['remarks'] ); $i++ ){
			if ($i == 0) {
			} else {
				$remarks .= ',';
			}
			$remarks .= $_POST['remarks'][$i];
		}
		$remark = str_replace(",", ", ", $remarks);

		$hidden = '';
		$hidden .= formInputH( 'hidden', 'feeded', $_POST['feeded'] );
		$hidden .= formInputH( 'hidden', 'breastfeed', $_POST['breastfeed'] );
		$hidden .= formInputH( 'hidden', 'feedkind', $_POST['feedkind'] );
		$hidden .= formInputH( 'hidden', 'feed', $_POST['feed'] );
		$hidden .= formInputH( 'hidden', 'omit', $_POST['omit'] );
		$hidden .= formInputH( 'hidden', 'pee', $_POST['pee'] );
		$hidden .= formInputH( 'hidden', 'feces', $_POST['feces'] );
		$hidden .= formInputH( 'hidden', 'remarks', $remarks );

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
								<form action="process/create-process-dailychart.php?id=<?= $_GET['id'] ?>" class="form-horizontal" method="post">
									<div class="tab-content p-md">

											<div class="row">
												<div class="col-md-12">
													<table class="table table-bordered text-center">
														<colgroup>
															<col class="col-md-2"/>
															<col class="col-md-2"/>
															<col class="col-md-1"/>
															<col class="col-md-1"/>
															<col class="col-md-1"/>
															<col class="col-md-1"/>
															<col class="col-md-1"/>
															<col class="col-md-1"/>
															<col class="col-md-2"/>
														</colgroup>
														<tr>
															<td>날짜</td>
															<td>시간</td>
															<td>직접 수유</td>
															<td>유종</td>
															<td>수유량(cc)</td>
															<td>구토</td>
															<td>소변</td>
															<td>대변</td>
															<td>특이사항</td>
														</tr>
														<tr>
															<td><?= formTableInput('date', 'date', $date) ?></td>
															<td><?= formTableInput('time', 'time', $time)?></td>
															<td><?= $breastfeed ?></td>
															<td><?= $feedkind ?></td>
															<td><?= $feed ?></td>
															<td><?= $omit ?></td>
															<td><?= $pee ?></td>
															<td><?= $_POST['feces'] ?></td>
															<td><?= $remark ?></td>
														</tr>
													</table>
												</div>
												<div class="col-md-12 m-h-lg text-center">
													<button type="button" class="btn mw-md btn-warning" onclick="javascript:history.back()">이전</button>
													<button type="submit" class="btn mw-md btn-warning" name="submit">제출</button>
												</div>
												<?= $hidden ?>
											</div><!-- .row -->
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
</body>
</html>
