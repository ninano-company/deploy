<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else {
		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/formInput.php');

		$sql ="
		SELECT id, name, image, kind, price
		FROM n_subproduct
		ORDER BY id
		";

		$card_component = '';
		$numbering = 0;

		$result = mysqli_query( $conn, $sql );
		while ( $row = mysqli_fetch_row( $result ) ) {
			if ( $row['4'] >= 1000000 ) {
				$price = substr_replace( $row['4'], ',', -6, 0 );
				$price = substr_replace( $price, ',', -3, 0 );
			} elseif ( $row['4'] >= 1000 ) {
				$price = substr_replace( $row['4'], ',', -3, 0);
			} else {
				$price = $row['4'];
			}
			$card_component .= '
			<div class="col-lg-2 col-md-3 col-sm-4">
				<div class="user-card p-md">
					<div class="media">
						<div class="img-container">
							<img src="../assets/images/subproduct/' . $row['2'] . '" alt="contact image">
						</div>
						<div class="media-body">
							<div class="row">
								<h5 class="media-heading title-color text-center p-h-xs" style="font-size:20px;">' . $row['1'] . '</h5>
								' . formInputH( "hidden", "pid[]", $row['0']) . '
								<div class="col-xs-6" style="display:inline-block; text-align: center; padding: 7px 0 7px 20px; font-size: 18px;">' . $price . ' 원</div>
								<div class="col-xs-6 media-meta m-b-0">' . formTableInputN( "qty[]", 0, 0, 10, 1, 0, '', "dark", "xxs" ) . '</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			';
			$numbering++;
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

<body class="popup">
	<!--============= start main area -->
	<!-- APP MAIN ==========-->
	<main>
	  <div class="wrap" style="padding-top:10px;">
			<section class="app-content">
				<div class="row">
					<div class="col-xs-12">
						<div class="widget">
							<form id="form-order" action="popup.subproduct.check.php?id=<?= $_GET['id'] ?>" method="post">
								<div class="m-b-lg nav-tabs-horizontal">
									<!-- tabs list -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab">First Tab</a></li>
										<li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab">Second Tab</a></li>
										<li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab">Third Tab</a></li>
									</ul><!-- .nav-tabs -->

									<!-- Tab panes -->
									<div class="tab-content p-md">
										<div role="tabpanel" class="tab-pane in active fade" id="tab-1">
											<div class="row">
												<?= $card_component ?>
											</div>
										</div><!-- .tab-pane  -->

										<div role="tabpanel" class="tab-pane fade" id="tab-2">
										</div><!-- .tab-pane  -->

										<div role="tabpanel" class="tab-pane fade" id="tab-3">
										</div><!-- .tab-pane  -->
									</div><!-- .tab-content  -->
								</div><!-- .nav-tabs-horizontal -->
							</form>
						</div><!-- .widget -->
					</div><!-- END column -->
				</div>
			</section><!-- .app-content -->
		</div><!-- .wrap -->
	</main>
	<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	<?php include 'layout/app-customizer-subproduct.php'; ?>
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
