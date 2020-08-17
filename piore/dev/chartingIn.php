<?php
	session_start();
	if ( !isset( $_SESSION['User'] ) ) {

		header("Location:login.php");

	} else if ( !isset( $_GET['id'] ) ) {

		require_once('/copaki/www/piore/dev/function/direct.php');
		goBack('올바른 경로가 아닙니다.');

	} else {

		require_once('/copaki/www/piore/dev/function/direct.php');
		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/formInput.php');

		$CheckSymptoms = 0;
		$feedLast = '';
		$feedQtyLast = 0;
		$holdMilk = 0;
		$experianceFeed = 0;
		$timeStart = '';
		$timeEnd = '';

		$sql="
		SELECT id, symptoms, feedTimeLast, feedQty, feedStoreQty, feedExperiance, feedTimeAvailable
		FROM n_chartIn
		WHERE service_id = {$_GET['id']}
		";
		$result = mysqli_query( $conn, $sql );
		if ( $row = mysqli_fetch_array($result) ) {
			$CheckSymptoms = 1;
			$symptomsArray = explode( ',', $row[1] );
			if ( $row[2] != NULL ) {
				$feedLast = str_replace( ' ', 'T', $row[2] );
			} else {
				$feedLast = '';
			}
			$feedQtyLast = $row[3];
			$holdMilk = $row[4];
			$experianceFeed = $row[5];
			$feedTimeAvailable1 = $row[6];
			if ( $row[6] == '' ) {
				$timeStart = '';
				$timeEnd = '';
			} else {
				$timeStart = substr( $row[6], 0, 5 );
				$timeEnd = substr( $row[6], 8 );
			}
		}

		$formFirst = '';
		$formSecond = '';
		$formThird = '';

		$sql = "
		SELECT
		service.dayin, mom.name, service.name, service.sexual, service.bbirth,
		service.hospital, service.gestation, service.birthform, service.weightbirth, service.weightin,
		service.bloodTypeF, service.bloodTypeM, service.bloodTypeB
		FROM n_service AS service
		LEFT JOIN n_mom AS mom ON mom.id = service.mom_id
		WHERE service.id = {$_GET['id']}
		";
		$result = mysqli_query( $conn, $sql );

		if ( $row = mysqli_fetch_array( $result ) ) {

			$sql = "
			SELECT id, name, cate
			FROM n_select
			WHERE cate IN ('sex', 'birthform', 'bloodType')
			";
			$result = mysqli_query( $conn, $sql );
			$optionGender = '';
			$optionBirthform = '';
			$optionbloodTypeF = '';
			$optionbloodTypeM = '';
			$optionbloodTypeB = '';

			while( $rowOption = mysqli_fetch_array($result) ){
				if ($rowOption['2'] == 'sex') {
					if ( $row['3'] === $rowOption['id'] ) {
						$optionGender .= formOptions( $rowOption['id'], $rowOption['name'] );
					}else{
						$optionGender .= formOption( $rowOption['id'], $rowOption['name'] );
					}
				} else if ($rowOption['2'] == 'birthform') {
					if ( $row['7'] === $rowOption['id'] ) {
						$optionBirthform .= formOptions( $rowOption['id'], $rowOption['name'] );
					}else{
						$optionBirthform .= formOption( $rowOption['id'], $rowOption['name'] );
					}
				} else if ($rowOption['2'] == 'bloodType') {
					if ( $row['10'] === $rowOption['id'] ) {
						$optionBloodTypeF .= formOptions( $rowOption['id'], $rowOption['name'] );
					}else{
						$optionBloodTypeF .= formOption( $rowOption['id'], $rowOption['name'] );
					}
					if ( $row['11'] === $rowOption['id'] ) {
						$optionBloodTypeM .= formOptions( $rowOption['id'], $rowOption['name'] );
					}else{
						$optionBloodTypeM .= formOption( $rowOption['id'], $rowOption['name'] );
					}
					if ( $row['12'] === $rowOption['id'] ) {
						$optionBloodTypeB .= formOptions( $rowOption['id'], $rowOption['name'] );
					}else{
						$optionBloodTypeB .= formOption( $rowOption['id'], $rowOption['name'] );
					}
				}
			}

			if ( $row[6] === NULL ) {
				$gestation = 40;
			} else {
				$gestation = $row[6];
			}

			if ( $row['8'] === NULL ) {
				$weightBirth = 2.6;
			} else {
				$weightBirth = $row['8'];
			}
			if ( $row['9'] === NULL) {
				$weightIn = 2.6;
			} else {
				$weightIn = $row['9'];
			}

			$formFirst .= formInputHorizonOne( 'date', 'dayin', '입실일', $row['0'] );
			$formFirst .= formInputHorizonOne( 'text', 'mname', '산모이름', $row['1'] );
			$formFirst .= formInputHorizonOne( 'text', 'bname', '태명', $row['2'] );
			$formFirst .= formHorizonSelectOnes( '성별', 'gender' );
			$formFirst .= $optionGender;
			$formFirst .= formHorizonSelecte();
			$formFirst .= formInputHorizonOne( 'date', 'bbirth', '출생일', $row['4'] );
			$formFirst .= formInputHorizonOne( 'text', 'hospital', '출산병원', $row['5'] );
			$formFirst .= formInputHorizonOneN( 'gestation', '재태기간', $gestation, 30, 45, 1, 0, '', 'info', 'sm' );
			$formFirst .= formHorizonSelectOnes( '분만형태', 'birthform' );
			$formFirst .= $optionBirthform;
			$formFirst .= formHorizonSelecte();
			$formFirst .= formInputHorizonOneN( 'weightbirth', '출생 시 체중', $weightBirth, 1.5, 6, 0.01, 2, '', 'info', 'sm' );
			$formFirst .= formInputHorizonOneN( 'weightin', '입실 시 체중', $weightIn, 1.5, 6, 0.01, 2, '', 'info', 'sm' );

			$sql = "
			SELECT id, name, kind, ekind
			FROM n_symptom
			ORDER BY kind;
			";
			$result = mysqli_query( $conn, $sql );
			$symptoms = array('','','','','','','','','','','','','');
			$checked = '';
			$countStart = 0;
			while( $rowSymptoms = mysqli_fetch_array($result) ){
				if ( $rowSymptoms['2'] == '머리' ) {
					$headerChecker = 0;
				} else if ( $rowSymptoms['2'] == '얼굴' ) {
					$headerChecker = 1;
				}	else if ( $rowSymptoms['2'] == '구강' ) {
					$headerChecker = 2;
				}	else if ( $rowSymptoms['2'] == '가슴' ) {
					$headerChecker = 3;
				}	else if ( $rowSymptoms['2'] == '배꼽' ) {
					$headerChecker = 4;
				}	else if ( $rowSymptoms['2'] == '엉덩이' ) {
					$headerChecker = 5;
				}	else if ( $rowSymptoms['2'] == '비뇨기' ) {
					$headerChecker = 6;
				}	else if ( $rowSymptoms['2'] == '팔, 다리' ) {
					$headerChecker = 7;
				}	else if ( $rowSymptoms['2'] == '손' ) {
					$headerChecker = 8;
				}	else if ( $rowSymptoms['2'] == '피부' ) {
					$headerChecker = 9;
				}	else if ( $rowSymptoms['2'] == '대변상태' ) {
					$headerChecker = 10;
				}	else if ( $rowSymptoms['2'] == '예방접종' ) {
					$headerChecker = 11;
				}	else if ( $rowSymptoms['2'] == '기타' ) {
					$headerChecker = 12;
				}

				if ( $CheckSymptoms == 1 ) {
					for ( $countSymptoms = 0; $countSymptoms < count($symptomsArray); $countSymptoms++ ) {
						if ( $rowSymptoms[0] == $symptomsArray[$countSymptoms] ) {
							$checked = 'checked';
							break;
						} else {
							$checked = '';
						}
					}
				}
				$symptoms[$headerChecker] .= formCheckBoxSize( 'dark', 'symptoms'.$rowSymptoms['0'], $rowSymptoms['1'], 'symptoms[]', $rowSymptoms['0'], 'sm', $checked);
			}
			$symptomsBloodType .= formHorizonSelectChartin( '아빠', 'bloodTypeF' );
			$symptomsBloodType .= $optionBloodTypeF;
			$symptomsBloodType .= formHorizonSelecte();
			$symptomsBloodType .= formHorizonSelectChartin( '산모', 'bloodTypeM' );
			$symptomsBloodType .= $optionBloodTypeM;
			$symptomsBloodType .= formHorizonSelecte();
			$symptomsBloodType .= formHorizonSelectChartin( '아기', 'bloodTypeB' );
			$symptomsBloodType .= $optionBloodTypeB;
			$symptomsBloodType .= formHorizonSelecte();

			$formSecond .= tableRow2( '혈액형', $symptomsBloodType );
			$formSecond .= tableRow2( '머리', $symptoms[0] );
			$formSecond .= tableRow2( '얼굴', $symptoms[1] );
			$formSecond .= tableRow2( '구강', $symptoms[2] );
			$formSecond .= tableRow2( '가슴', $symptoms[3] );
			$formSecond .= tableRow2( '배꼽', $symptoms[4] );
			$formSecond .= tableRow2( '엉덩이', $symptoms[5] );
			$formSecond .= tableRow2( '비뇨기', $symptoms[6] );
			$formSecond .= tableRow2( '팔, 다리', $symptoms[7] );
			$formSecond .= tableRow2( '손', $symptoms[8] );
			$formSecond .= tableRow2( '피부', $symptoms[9] );
			$formSecond .= tableRow2( '대변상태', $symptoms[10] );
			$formSecond .= tableRow2( '예방접종', $symptoms[11] );
			$formSecond .= tableRow2( '기타', $symptoms[12] );


			$formThird .= formInputHorizonOne( 'datetime-local', 'feedLast', '마지막 수유시간', $feedLast );
			$formThird .= formInputHorizonOneN( 'feedQtyLast', '마지막 수유량', $feedQtyLast, 0, 200, 10, 0, '', 'info', 'sm' );
			$formThird .= formInputHorizonOneN( 'holdMilk', '1회 유축량', $holdMilk, 0, 200, 10, 0, '', 'info', 'sm' );
			$formThird .= formInputHorizonOneN( 'experianceFeed', '수유 경험', $experianceFeed, 0, 100, 1, 0, '', 'info', 'sm' );
			$formThird .= formInputHorizonTimeDuring( 'time', 'timeCheck', 'timeStart', 'timeEnd', '수유 가능 시간', $timeStart, $timeEnd );

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
					<div class="col-lg-offset-2 col-lg-8 col-xs-12">
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">입실 시 신생아 건강기록부</h4>
							</header><!-- .widget-header -->
							<hr class="widget-separator">
							<div class="widget-body">
								<form action="chartingIn.summary.php?id=<?= $_GET['id'] ?>" class="form-horizontal" method="post">
									<div class="tab-content p-md">

										<div role="tabpanel" class="tab-pane in active fade" id="inspect">
											<div class="row">
												<div class="col-lg-offset-0 col-lg-12 col-xs-offset-2 col-xs-8">
													<?= $formFirst ?>
												</div>
												<div class="col-md-12 m-t-xl text-center">
													<button type="button" class="btn mw-md btn-warning" href="#symptoms" aria-controls="symptoms" role="tab" data-toggle="tab">다음</button>
												</div>
											</div><!-- .row -->
										</div><!-- .tab-pane -->

										<div role="tabpanel" class="tab-pane fade" id="symptoms">
											<div class="row text-center">

												<table class="col-lg-12 col-xs-offset-2 col-xs-10">
													<colgroup>
														<col class="col-lg-2 col-xs-offset-3 col-xs-1">
														<col class="col-lg-10 col-xs-4">
													</colgroup>
													<tbody>
														<?= $formSecond ?>
													</tbody>
												</table>


												<div class="col-md-12 m-t-xl text-center">
													<button type="button" class="btn mw-md btn-warning" href="#inspect" aria-controls="inspect" role="tab" data-toggle="tab">이전</button>
													<button type="button" class="btn mw-md btn-warning" href="#dataForMom" aria-controls="dataForMom" role="tab" data-toggle="tab">다음</button>
												</div>
											</div><!-- .row -->
										</div><!-- .tab-pane -->

										<div role="tabpanel" class="tab-pane fade" id="dataForMom">
											<div class="row text-center">

												<table class="col-lg-12 col-xs-offset-2 col-xs-10">
													<colgroup>
														<col class="col-lg-2 col-xs-offset-3 col-xs-1">
														<col class="col-lg-10 col-xs-4">
													</colgroup>
													<tbody>
														<?= $formThird ?>
													</tbody>
												</table>

												<div class="col-md-12 m-t-xl text-center">
													<button type="button" class="btn mw-md btn-warning" href="#symptoms" aria-controls="symptoms" role="tab" data-toggle="tab">이전</button>
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
