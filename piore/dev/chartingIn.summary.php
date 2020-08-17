<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else {
		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/formInput.php');

		$sql = "
		SELECT id, name, cate
			FROM n_select
			WHERE cate IN ('sex', 'birthform', 'bloodType')
			";
		$result = mysqli_query( $conn, $sql );
		while ( $row = mysqli_fetch_array( $result ) ) {
			if ( $row['2'] === 'sex' ) {
				if ( $_POST['gender'] === $row['0'] ) {
					$nameGender = $row['1'];
				}
			} else if ( $row['2'] === 'birthform' ) {
				if ( $_POST['birthform'] === $row['0'] ) {
					$nameBirthform = $row['1'];
				}
			} else if ( $row['2'] === 'bloodType' ) {
				if ( $_POST['bloodTypeF'] === $row['0'] ) {
					$nameBloodTypeF = $row['1'];
				}
				if ( $_POST['bloodTypeM'] === $row['0'] ) {
					$nameBloodTypeM = $row['1'];
				}
				if ( $_POST['bloodTypeB'] === $row['0'] ) {
					$nameBloodTypeB = $row['1'];
				}
			}
		}

		$symptoms = '';
		for ($countSymptom = 0; $countSymptom < count($_POST['symptoms']); $countSymptom++) {
			if ( $symptoms == '' ) {
				$symptoms = $_POST['symptoms'][$countSymptom];
			} else {
				$symptoms .= ','.$_POST['symptoms'][$countSymptom];
			}
		}

		$sql = "
		SELECT name, ekind
		FROM n_symptom
		WHERE id IN ({$symptoms})
		";
		$symptomArray = array('','','','','','','','','','','','','');
		$result = mysqli_query( $conn, $sql );
		while ( $row = mysqli_fetch_array($result) ) {
			if ( $row['1'] == 'head') {
				$symptomArray[0] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'face') {
				$symptomArray[1] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'oral') {
				$symptomArray[2] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'chest') {
				$symptomArray[3] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'code') {
				$symptomArray[4] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'hip') {
				$symptomArray[5] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'urology') {
				$symptomArray[6] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'armleg') {
				$symptomArray[7] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'hand') {
				$symptomArray[8] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'skin') {
				$symptomArray[9] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'feces') {
				$symptomArray[10] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'etc') {
				$symptomArray[11] .= '<span class="m-r-md">'.$row['0'].'</span>';
			} else if ( $row['1'] == 'vaccination') {
				$symptomArray[12] .= '<span class="m-r-md">'.$row['0'].'</span>';
			}
		}

		$bloodTypeSum = '<span class="m-r-md">엄마  '.$nameBloodTypeM.'</span>  <span class="m-l-md m-r-md">아빠  '.$nameBloodTypeF.'</span>  <span class="m-l-md m-r-md">아기  '.$nameBloodTypeB.'</span>';

		if ( $_POST['feedQtyLast'] == 0 ) {
			$feedQtyLast = '';
		} else {
			$feedQtyLast = $_POST['feedQtyLast'];
		}

		if ( $_POST['feedLast'] == '' ) {
			$feedLast = '';
		} else {
			// $feedLast = new DateTime($_POST['feedLast']);
			// $feedLast = $feedLast->format("Y-m-d H:m:s");
			$feedLast = str_replace( 'T', ' ', $_POST['feedLast'] );
		}
		if ( $_POST['timeStart'] != '' OR $_POST['timeEnd'] != '' ) {
			$feedTimeAvailable = $_POST['timeStart'].' ~ '.$_POST['timeEnd'];
		} else {
			$feedTimeAvailable = '';
		}

		$feedingSum = '<span class="m-r-md">마지막 수유시간 : '.$feedLast.'</span> / <span class="m-l-md m-r-md">마지막 수유량 : '.$feedQtyLast.' cc</span><br>'.'<span class="m-r-md">1회 유축량 : '.$_POST['holdMilk'].' cc</span> / <span class="m-l-md m-r-md">수유 경험  '.$_POST['experianceFeed'].'</span>';

		$tbody = '';
		$tbody .= tableRowSummary2( '머리', $symptomArray[0] );
		$tbody .= tableRowSummary2( '얼굴', $symptomArray[1] );
		$tbody .= tableRowSummary2( '구강', $symptomArray[2] );
		$tbody .= tableRowSummary2( '가슴', $symptomArray[3] );
		$tbody .= tableRowSummary2( '배꼽', $symptomArray[4] );
		$tbody .= tableRowSummary2( '엉덩이', $symptomArray[5] );
		$tbody .= tableRowSummary2( '비뇨기', $symptomArray[6] );
		$tbody .= tableRowSummary2( '팔, 다리', $symptomArray[7] );
		$tbody .= tableRowSummary2( '손', $symptomArray[8] );
		$tbody .= tableRowSummary2( '피부', $symptomArray[9] );
		$tbody .= tableRowSummary2( '대변상태', $symptomArray[10] );
		$tbody .= tableRowSummary2( '기타', $symptomArray[11] );
		$tbody .= tableRowSummary2( '예방접종', $symptomArray[12] );
		$tbody .= tableRowSummary2( '혈액형', $bloodTypeSum );
		$tbody .= tableRowSummary2( '수유', $feedingSum );
		$tbody .= tableRowSummary2( '수유가능 시간', $feedTimeAvailable );
		$tbody .= '<tr><td colspan="5" class="p-t-lg" style="">위 사항에 틀림이 없을을 확인하고 신생아실 입실에 동의합니다.</td></tr>';
		$tbody .= '<tr><td colspan="5" class="" style="border-top:none; text-align:right">20 &emsp;&emsp;&emsp;&emsp; 년 &emsp;&emsp;&emsp;&emsp; 월 &emsp;&emsp;&emsp;&emsp; 일 <br><br> 산모 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ( 인 ) </td></tr>';

		$hidden = '';
		$hidden .= formInputH( 'hidden', 'dayin', $_POST['dayin'] );
		$hidden .= formInputH( 'hidden', 'bbirth', $_POST['bbirth'] );
		$hidden .= formInputH( 'hidden', 'mname', $_POST['mname'] );
		$hidden .= formInputH( 'hidden', 'bname', $_POST['bname'] );
		$hidden .= formInputH( 'hidden', 'gender', $_POST['gender'] );
		$hidden .= formInputH( 'hidden', 'hospital', $_POST['hospital'] );
		$hidden .= formInputH( 'hidden', 'gestation', $_POST['gestation'] );
		$hidden .= formInputH( 'hidden', 'birthform', $_POST['birthform'] );
		$hidden .= formInputH( 'hidden', 'weightbirth', $_POST['weightbirth'] );
		$hidden .= formInputH( 'hidden', 'weightin', $_POST['weightin'] );
		$hidden .= formInputH( 'hidden', 'bloodTypeF', $_POST['bloodTypeF'] );
		$hidden .= formInputH( 'hidden', 'bloodTypeM', $_POST['bloodTypeM'] );
		$hidden .= formInputH( 'hidden', 'bloodTypeB', $_POST['bloodTypeB'] );
		$hidden .= formInputH( 'hidden', 'symptoms', $symptoms );
		if ( $feedLast == '' ) {
			$hidden .= formInputH( 'hidden', 'feedLast', $feedLast );
		} else {
			$hidden .= formInputH( 'hidden', 'feedLast', $feedLast );
		}
		$hidden .= formInputH( 'hidden', 'feedQtyLast', $feedQtyLast );
		$hidden .= formInputH( 'hidden', 'holdMilk', $_POST['holdMilk'] );
		$hidden .= formInputH( 'hidden', 'experianceFeed', $_POST['experianceFeed'] );
		$hidden .= formInputH( 'hidden', 'feedTime', $feedTimeAvailable );

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
								<h4 class="widget-title">입실 시 신생아 건강기록부</h4>
							</header><!-- .widget-header -->
							<hr class="widget-separator">
							<div class="widget-body">
								<form action="process/create-process-chartingIn.php?id=<?= $_GET['id'] ?>" class="form-horizontal" method="post">
									<div class="tab-content p-md">

										<div class="row">
											<div class="col-md-12">
												<table class="table table-bordered text-center">
													<colgroup>
														<col class="col-20"/>
														<col class="col-20"/>
														<col class="col-20"/>
														<col class="col-20"/>
														<col class="col-20"/>
													</colgroup>
													<tr>
														<th>입실일</th>
														<th>산모명</th>
														<th>신생아명</th>
														<th>성별</th>
														<th>출생 시 체중</th>
													</tr>
													<tr>
														<td><?= $_POST['dayin'] ?></td>
														<td><?= $_POST['mname'] ?></td>
														<td><?= $_POST['bname'] ?></td>
														<td><?= $nameGender ?></td>
														<td><?= $_POST['weightbirth'] ?></td>
													</tr>
													<tr>
														<th>출생일</th>
														<th>출산병원</th>
														<th>재태기간</th>
														<th>분만형태</th>
														<th>입실 시 체중</th>
													</tr>
													<tr>
														<td><?= $_POST['bbirth'] ?></td>
														<td><?= $_POST['hospital'] ?></td>
														<td><?= $_POST['gestation'] ?></td>
														<td><?= $nameBirthform ?></td>
														<td><?= $_POST['weightin'] ?></td>
													</tr>
												</table>

												<table class="table" width="100%">
													<colgroup>
														<col class="col-20">
														<col class="col-80">
													</colgroup>
													<tbody>
														<?= $tbody ?>
													</tbody>
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
