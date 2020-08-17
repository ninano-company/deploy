<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else {

		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/formInput.php');

		$ttemp = '';
		$tpulse = '';
		$tresp = '';
		$tablist = '';
		$tabbody = '';
		$xweight = '';
		$tabbodyDescription = '해당 자료를 찾을 수 없습니다.';
		if ( isset( $_GET['updated'] ) ) {
			$activea = '';
			$activeb = '';
		} else {
			$activea = 'class="active"';
			$activeb = 'in active';
		}

		$tablist .= '<li role="presentation" ' . $activea . '><a href="#chartIn" aria-controls="chartIn" role="tab" data-toggle="tab">건강기록부</a></li>';

		$sql = "
		SELECT
			service.bbirth, service.dayin, mom.name, service.name, sexual.name,
			service.hospital, service.gestation, birthform.name, service.weightbirth, service.weightin,
			chartIn.symptoms, bloodF.name, bloodM.name, bloodB.name, chartIn.feedTimeLast,
			chartIn.feedQty, chartIn.feedStoreQty, chartIn.feedExperiance, chartIn.feedTimeAvailable
			FROM n_service AS service
			LEFT JOIN n_mom AS mom ON mom.id = service.mom_id
			LEFT JOIN n_chartIn AS chartIn ON chartIn.service_id = service.id
			LEFT JOIN n_select AS sexual ON sexual.id = service.sexual
			LEFT JOIN n_select AS birthform ON birthform.id = service.birthform
			LEFT JOIN n_select AS bloodF ON bloodF.id = service.bloodTypeF
			LEFT JOIN n_select AS bloodM ON bloodM.id = service.bloodTypeM
			LEFT JOIN n_select AS bloodB ON bloodB.id = service.bloodTypeB
			WHERE service.id = {$_GET['id']}
		";
		$result = mysqli_query( $conn, $sql );
		if ( $rowService = mysqli_fetch_array( $result ) ) {

			$tabbodyDescription = '';
			$birth = new DateTime( $rowService['0'] );
			$dayin = new DateTime( $rowService['1'] );

			$sql = "
			SELECT name, ekind
			FROM n_symptom
			WHERE id IN ({$rowService[10]})
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

			$feedingSum = '<span class="m-r-md">마지막 수유시간 : '.$rowService[14].'</span> / <span class="m-l-md m-r-md">마지막 수유량 : '.$rowService[15].' cc</span><br>'.'<span class="m-r-md">1회 유축량 : '.$rowService[16].' cc</span> / <span class="m-l-md m-r-md">수유 경험  '.$rowService[17].'</span>';

			$bloodTypeSum = '<span class="m-r-md">엄마  '. $rowService[12] .'</span>  <span class="m-l-md m-r-md">아빠  '. $rowService[11] .'</span>  <span class="m-l-md m-r-md">아기  '. $rowService[13] .'</span>';

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
			$tbody .= tableRowSummary2( '수유가능 시간', $rowService[19] );
			$tbody .= '<tr><td colspan="5" class="p-t-lg" style="">위 사항에 틀림이 없을을 확인하고 신생아실 입실에 동의합니다.</td></tr>';
			$tbody .= '<tr><td colspan="5" class="" style="border-top:none; text-align:right">20 &emsp;&emsp;&emsp;&emsp; 년 &emsp;&emsp;&emsp;&emsp; 월 &emsp;&emsp;&emsp;&emsp; 일 <br><br> 산모 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ( 인 ) </td></tr>';

			$tabbodyDescription .= '
			<div class="row">
				<div class="col-md-12">
					<table class="table table-bordered text-center" width="100%">
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
							<td>'. $rowService[1] .'</td>
							<td>'. $rowService[2] .'</td>
							<td>'. $rowService[3] .'</td>
							<td>'. $rowService[4] .'</td>
							<td>'. $rowService[8] .'</td>
						</tr>
						<tr>
							<th>출생일</th>
							<th>출산병원</th>
							<th>재태기간</th>
							<th>분만형태</th>
							<th>입실 시 체중</th>
						</tr>
						<tr>
							<td>'. $rowService[0] .'</td>
							<td>'. $rowService[5] .'</td>
							<td>'. $rowService[6] .'</td>
							<td>'. $rowService[7] .'</td>
							<td>'. $rowService[9] .'</td>
						</tr>
					</table>

					<table class="table" width="100%">
						<colgroup>
							<col class="col-20">
							<col class="col-80">
						</colgroup>
						<tbody>
							'. $tbody .'
						</tbody>
					</table>
				</div>
				<div class="col-md-12 m-h-lg text-center">
					<button type="button" class="btn mw-md btn-warning" onclick="javascript:history.back()">이전</button>
					<button type="submit" class="btn mw-md btn-warning" name="submit">제출</button>
				</div>
			</div><!-- .row -->
			';
		}


		$tabbody .= '
		<div role="tabpanel" class="tab-pane ' . $activeb . ' fade" id="chartIn">
			<div class="widget-body">
				<div class="table-responsive">
					<div class="text-center">
					'.$tabbodyDescription.'
					</div><!-- .row -->
				</div>
			</div><!-- .widget-body -->
		</div><!-- .tab-pane  -->
		';

		$sql = "
		SELECT cord, cord.name, test, test.name, weight, weightvar, tempd, tempe, tempn, pulsed, pulsee, pulsen, respd, respe, respn, created, dailyst.id
			FROM n_dailyst AS dailyst
			LEFT JOIN n_check AS cord ON cord.id = dailyst.cord
			LEFT JOIN n_check AS test ON test.id = dailyst.test
			WHERE service_id = {$_GET['id']}
			ORDER BY dailyst.created
		";

		$result = mysqli_query( $conn, $sql );
		while ( $row = mysqli_fetch_array( $result ) ) {

			$date = new DateTime( $row['created'] );
			$date1 = $date->format('Y-m-d');
			$diff_birth = $date->diff($birth);
			$diff_birth = $diff_birth->days + 1;
			$diff_dayby = $date->diff($dayin);
			$diff_dayby = $diff_dayby->days + 1;

			$activea = '';
			if ( $row['id'] == $_GET['updated'] ) {
				$activea = 'class="active"';
			}

			$tablist .= '<li role="presentation" ' . $activea . '><a href="#num' . $row['id'] . '" aria-controls="num" role="tab" data-toggle="tab">' . $diff_dayby . '일</a></li>';

			if ( $xweight == '' ) {
				$weightvar = 0;
			} else {
				$weightvar = $row['weight'] - $xweight;
			}
			$xweight = $row['weight'];

			$check[1] = '유';
			$check[2] = '무';

			$optioncord = '';
			for ($i=1; $i < 3; $i++) {
				if ( $i == $row['cord'] ) {
					$selected = ' selected';
				} else {
					$selected = '';
				}
				$optioncord .= '<option value="' . $i . '"' . $selected .'>' . $check[$i] . '</option>';
			}

			$optiontest = '';
			for ($i=1; $i < 3; $i++) {
				if ( $i == $row['cord'] ) {
					$selected = ' selected';
				} else {
					$selected = '';
				}
				$optiontest .= '<option value="' . $i . '"' . $selected .'>' . $check[$i] . '</option>';
			}

			$sql2 = "
				SELECT
					created, feeded, feedkind, feed, omit, pee, feces, remarks
					FROM n_dailynd AS dailynd
					WHERE dailynd.service_id = {$_GET['id']} AND dailynd.created >= '{$date1}' AND dailynd.created < '{$date1}' + INTERVAL 1 DAY
			";
			$result2 = mysqli_query( $conn, $sql2 );

			$trow = '';
			$num = 0;

			$feeded = '';
			$omit = '';
			$pee = '';

			while ( $row2 = mysqli_fetch_array( $result2 ) ) {

				if ( $row2['1'] == 1 ) {	$feeded = '<i class="fa fa-circle-o"></i>';	} else {	$feeded = '<i class="fa fa-close"></i>';	}
				if ( $row2['4'] == 1 ) {	$omit = '<i class="fa fa-circle-o"></i>';	} else {	$omit = '<i class="fa fa-close"></i>';	}
				if ( $row2['5'] == 1 ) {	$pee = '<i class="fa fa-circle-o"></i>';	} else {	$pee = '<i class="fa fa-close"></i>';	}

				$created = new DateTime( $row2['0'] );

				$trow .= '<tr>';
				$trow .= '<td>'.$created->format("H:i:s").'</td>';
				$trow .= '<td>'.$feeded.'</td>';
				$trow .= '<td>'.$row2['2'].'</td>';
				$trow .= '<td>'.$row2['3'].'</td>';
				$trow .= '<td>'.$omit.'</td>';
				$trow .= '<td>'.$pee.'</td>';
				$trow .= '<td>'.$row2['6'].'</td>';
				$trow .= '<td>'.$row2['7'].'</td>';
				$trow .= '</tr>';

				if ( $row2['3'] > 0 ) {
					$num++;
				}
			}
			$trow .= '<tr style="height:37px;">';
			$trow .= '<td></td>';
			$trow .= '<td></td>';
			$trow .= '<td></td>';
			$trow .= '<td></td>';
			$trow .= '<td></td>';
			$trow .= '<td></td>';
			$trow .= '<td></td>';
			$trow .= '<td></td>';
			$trow .= '</tr>';

			$activeb = '';
			if ( $row['id'] == $_GET['updated'] ) {
				$activeb = 'in active';
			}

			$row['weight'] = checkData( $row['weight'], 0.00 );
			$row['tempd'] = checkData( $row['tempd'], 37.0 );
			$row['tempe'] = checkData( $row['tempe'], 37.0 );
			$row['tempn'] = checkData( $row['tempn'], 37.0 );
			$row['pulsed'] = checkData( $row['pulsed'], 140 );
			$row['pulsee'] = checkData( $row['pulsee'], 140 );
			$row['pulsen'] = checkData( $row['pulsen'], 140 );
			$row['respd'] = checkData( $row['respd'], 50 );
			$row['respe'] = checkData( $row['respe'], 50 );
			$row['respn'] = checkData( $row['respn'], 50 );

			$tabbody .= '
			<div role="tabpanel" class="tab-pane ' . $activeb . ' fade" id="num' . $row['id'] . '">
				<div class="widget-body">
					<div class="table-responsive">
						<div class="text-center">
						<form action="process/update-process-dailyst.php" class="form-table" method="post" onsubmit=\'return reviseDailystConfirm();\'>

							<div class="m-b-sm">
								<table class="table table-bordered">
									<colgroup>
										<col class="col-xs-3" />
										<col class="col-xs-1" />
										<col class="col-xs-1" />
										<col class="col-xs-1" />
										<col class="col-xs-1" />
										<col class="col-xs-3" />
										<col class="col-xs-2" />
									</colgroup>
									<tr>
										<th>날짜</th>
										<th>Cord</th>
										<th>재원일</th>
										<th>생후일</th>
										<th>Test</th>
										<th>체중</th>
										<th>증감량</th>
									</tr>
									<tr>
									<td style="padding:2px;">' . formTableInputR( 'date', 'date', $date1) . '</td>
										<td style="padding:2px;">
											<select class="form-control" name="cord">
												<option value=""></option>
												' . $optioncord . '
											</select>
										</td>
										<td>' . $diff_dayby . '</td>
										<td>' . $diff_birth . '</td>
										<td style="padding:2px;">
											<select class="form-control" name="test">
												<option value=""></option>
												' . $optiontest . '
											</select>
										</td>
										<td style="padding:2px;">' . formTableInputN( "weight{$row['id']}", $row['weight'], 1.00, 5.0, 0.01, 2, '', "info", "xs" ) . '</td>
										<td>' . $weightvar . '</td>
									</tr>
									</tr>
								</table>
							</div>

							<div class="m-b-sm">
								<table class="table table-bordered">
									<colgroup>
										<col class="col-xs-2" />
										<col class="col-xs-1" />
										<col class="col-xs-3" />
										<col class="col-xs-3" />
										<col class="col-xs-3" />
									</colgroup>
									<tr>
										<th><strong>활력징후</strong></th>
										<th><strong>정상범위</strong></th>
										<th><strong>D</strong></th>
										<th><strong>E</strong></th>
										<th><strong>N</strong></th>
									</tr>
									<tr>
										<td>Temperature</td>
										<td>36.5~37.4</td>
										<td style="padding:2px;">' . formTableInputN( "tempd{$row['id']}", $row['tempd'], 36, 42, 0.1, 1, '', "info", "xs" ) . '</td>
										<td style="padding:2px;">' . formTableInputN( "tempe{$row['id']}", $row['tempe'], 36, 42, 0.1, 1, '', "info", "xs" ) . '</td>
										<td style="padding:2px;">' . formTableInputN( "tempn{$row['id']}", $row['tempn'], 36, 42, 0.1, 1, '', "info", "xs" ) . '</td>
									</tr>
									<tr>
										<td>Pulse</td>
										<td>120~160</td>
										<td style="padding:2px;">' . formTableInputN( "pulsed{$row['id']}", $row['pulsed'], 100, 180, 1, 0, '', "info", "xs" ) . '</td>
										<td style="padding:2px;">' . formTableInputN( "pulsee{$row['id']}", $row['pulsee'], 100, 180, 1, 0, '', "info", "xs" ) . '</td>
										<td style="padding:2px;">' . formTableInputN( "pulsen{$row['id']}", $row['pulsen'], 100, 180, 1, 0, '', "info", "xs" ) . '</td>
									</tr>
									<tr>
										<td>Respiration</td>
										<td>40~60</td>
										<td style="padding:2px;">' . formTableInputN( "respd{$row['id']}", $row['respd'], 20, 80, 1, 0, '', "info", "xs" ) . '</td>
										<td style="padding:2px;">' . formTableInputN( "respe{$row['id']}", $row['respe'], 20, 80, 1, 0, '', "info", "xs" ) . '</td>
										<td style="padding:2px;">' . formTableInputN( "respn{$row['id']}", $row['respn'], 20, 80, 1, 0, '', "info", "xs" ) . '</td>
									</tr>
								</table>
							</div>

							<div>
								<input type="hidden" name="id" value="' . $_GET['id'] . '">
								<input type="hidden" name="stid" value="' . $row['id'] . '">
								<input type="submit" class="btn btn-success mw-md m-b-sm" name="revise" value="저장하기">
								<input type="button" class="btn btn-warning mw-md m-b-sm" name="delete" value="삭제하기" onclick="deleteDailyConfirm( ' . $row['16'] . ', ' . $_GET['id'] . ', \'' . $date1 . '\' );">
							</div>
							</form>

							<div class="m-b-sm">
								<table class="table table-bordered">
									<colgroup>
										<col class="col-xs-2">
										<col class="col-xs-1">
										<col class="col-xs-1">
										<col class="col-xs-2">
										<col class="col-xs-1">
										<col class="col-xs-1">
										<col class="col-xs-1">
										<col class="col-xs-3">
									</colgroup>
									<tr>
										<th><strong>일시</strong></th>
										<th><strong>B.F</strong></th>
										<th><strong>Food</strong></th>
										<th><strong>수유량(cc)</strong></th>
										<th><strong>구토</strong></th>
										<th><strong>소변</strong></th>
										<th><strong>대변</strong></th>
										<th><strong>특이사항</strong></th>
									</tr>
									' . $trow . '
									<tr>
										<td colspan="2">수유횟수</td>
										<td>' . $num . '</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</table>

							</div>
						</div><!-- .row -->
					</div>
				</div><!-- .widget-body -->
			</div><!-- .tab-pane  -->
			';

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
						<div class="mail-toolbar m-b-lg">
							<div class="btn-group" role="group">
								<a href="./process/create-process-dailyst.php?id=<?= $_GET['id'] ?>" class="btn btn-default">일일기록지 생성</i></a>
								<a href="#" class="btn btn-default">활력징후 기록</i></a>
								<a href="charting.php?id=<?= $_GET['id'] ?>" class="btn btn-default">일일경과 기록</i></a>
							</div>
						</div>
					</div>

					<div class="col-md-12">
						<div class="widget">
							<div class="m-b-lg nav-tabs-horizontal">

								<!-- tabs list -->
								<ul class="nav nav-tabs" role="tablist">
									<?= $tablist ?>
								</ul><!-- .nav-tabs -->

								<!-- Tab panes -->
								<div class="tab-content p-md">
									<?= $tabbody ?>
								</div><!-- .tab-content  -->

							</div><!-- .nav-tabs-horizontal -->
						</div><!-- .widget -->
					</div><!-- END column -->
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

	<script>
		function reviseDailystConfirm(){
			if(confirm("현재 내용을 저장하시겠습니까?")){
				return true;
			} else {
				return false;
			}
		}

		function deleteDailyConfirm( del, id, date ){
			if(confirm("기록지의 모든 데이터가 사라지며, 잃어버린 데이터는 복구할 수 없습니다. 정말로 삭제하시겠습니까?")){
				var loc = "./process/delete-process-daily.php?";
				loc = loc.concat( "delete=", del, "&id=", id, "&date=", date );
				location.href=loc;
			}
		}
	</script>
</body>
</html>
