<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	}else {
		require_once('/copaki/www/piore/dev/function/formInput.php');
		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/javascript.php');

		$sql = "
		SELECT
			mom.name, mom.phone, mom.birth, mom.email, mom.address,
			service.created, service.dayin, service.dayout, service.created, service.amount,
			service.book_dep, service.book_date, service.ext_date, service.progress, progress.name,
			service.name, service.bbirth, sexual.name, service.birthform, mom.id,
			sexual.id, service.note, service.hospital, service.birthform, service.gestation,
			service.weightbirth, service.weightin, service.id, product.name, product.period,
			product.price, service.book_method, book.name, service.ext_method, ext.name,
			product.id
			FROM n_service AS service
			LEFT JOIN n_mom AS mom ON service.mom_id = mom.id
			LEFT JOIN n_select AS progress ON progress.id = service.progress
      LEFT JOIN n_select AS sexual ON sexual.id = service.sexual
			LEFT JOIN n_product AS product ON product.id = service.product
			LEFT JOIN n_method AS book ON book.id = service.book_method
			LEFT JOIN n_method AS ext ON ext.id = service.ext_method
			WHERE service.id = {$_GET['id']};
			";
		$result = mysqli_query( $conn, $sql );

		$r1 = "";
		$r2 = "";
		$r3 = "";
		$r4 = "";
		$r5 = "";
		$r6 = "";

		$rs1 = '';
		$rs2 = '';
		$rs3 = '';

		$rhidden = '';

		if( $row = mysqli_fetch_array($result) ){

			$sql = "
			SELECT id, name, cate
				FROM n_select
				WHERE cate='sex' OR cate='birthform' OR cate='progress'
				";
			$result = mysqli_query( $conn, $sql );
			$optionsex = '';
			$optionbirthform = '';
			$optionprogress = '';
			while( $rowo = mysqli_fetch_array($result) ){
				if ( $row['20'] === $rowo['id'] ) {
					$optionsex .= formOptions( $rowo['id'], $rowo['name'] );
				}else{
					$optionsex .= formOption( $rowo['id'], $rowo['name'] );
				}
			}

			$sql = "
			SELECT id, name
				FROM n_select
				WHERE cate='birthform'
				";
			$result = mysqli_query( $conn, $sql );
			while( $rowo = mysqli_fetch_array($result) ){
				if ( $row['18'] === $rowo['id'] ) {
					$optionbirthform .= formOptions( $rowo['id'], $rowo['name'] );
				}else{
					$optionbirthform .= formOption( $rowo['id'], $rowo['name'] );
				}
			}

			$sql = "
			SELECT id, name
				FROM n_select
				WHERE cate='progress'
				";
			$result = mysqli_query( $conn, $sql );
			while( $rowo = mysqli_fetch_array($result) ){
				if ( $row['13'] === $rowo['id'] ) {
					$optionprogress .= formOptions( $rowo['id'], $rowo['name'] );
				}else{
					$optionprogress .= formOption( $rowo['id'], $rowo['name'] );
				}
			}

			$sql = "
			SELECT id, name
				FROM n_method
				";
			$result = mysqli_query( $conn, $sql );
			$optionbook = '';
			while( $rowo = mysqli_fetch_array($result) ){
				if ( $row['31'] === $rowo['id'] ) {
					$optionbook .= formOptions( $rowo['id'], $rowo['name'] );
				}else{
					$optionbook .= formOption( $rowo['id'], $rowo['name'] );
				}
			}

			$sql = "
			SELECT id, name
				FROM n_method
				";
			$result = mysqli_query( $conn, $sql );
			$optionext = '';
			while( $rowo = mysqli_fetch_array($result) ){
				if ( $row['33'] === $rowo['id'] ) {
					$optionext .= formOptions( $rowo['id'], $rowo['name'] );
				}else{
					$optionext .= formOption( $rowo['id'], $rowo['name'] );
				}
			}

			$a = substr($row['1'],0,3);
			$b = substr($row['1'],3,4);
			$c = substr($row['1'],7,4);
			$d = $a.'-'.$b.'-'.$c;

			$ext_dep = $row['30'] - $row['10'];

			$r1 .= formInputHorizon( 'text', 'name', '이름', $row['0']);
			$r1 .= formInputHorizon( 'tel', 'phone', '연락처', $d );
			$r1 .= formInputHorizon( 'date', 'birth', '생년월일', $row['2'] );
			$r2 .= formInputHorizonLink( 'text', 'bname', '아기이름', $row['15'], 'daily.chart.php?id='.$row['27'], '<i class="fa fa-book" aria-hidden="true"></i>' );
			$r2 .= formHorizonSelects( '아기성별', 'bsex' );
			$r2 .= $optionsex;
			$r2 .= formHorizonSelecte();
			$r2 .= formInputHorizon( 'date', 'bbirth', '아기생일', $row['16'] );
			$r3 .= formInputHorizon( 'email', 'email', '메일주소', $row['3'] );
			$r3 .= formInputHorizonL( 'text', 'address', '주소', $row['4'] );
			$r4 .= formInputHorizon( 'date', 'dayin', '입원일', $row['6'] );
			$r4 .= formInputHorizon( 'date', 'dayout', '퇴원일', $row['7'] );
			$r4 .= formInputHorizonDis( 'text', 'created', '예약신청', $row['5'], 'disabled' );
			$r4 .= formInputH( 'hidden', 'mid', $row['19']);
			$r5 .= formInputHorizon( 'text', 'hospital', '출산병원', $row['hospital'] );
			$r5 .= formHorizonSelects( '분만형태', 'birthform' );
			$r5 .= $optionbirthform;
			$r5 .= formHorizonSelecte();
			$r5 .= formInputHorizon( 'text', 'gestation', '재태기간', $row['gestation'] );
			$r6 .= formInputHorizon( 'number', 'weightbirth', '출생체중', $row['weightbirth'] );
			$r6 .= formInputHorizon( 'number', 'weightin', '입실체중', $row['weightin'] );
			$r6 .= formHorizonSelects( '진행상태', 'progress' );
			$r6 .= $optionprogress;
			$r6 .= formHorizonSelecte();

			$rs1 .= formInputHorizonOnClick( 'text', 'pname', '상품명', $row['28'], 'selectServiceWindow()', '<i class="fa fa-book" aria-hidden="true"></i>' );
			$rs1 .= formInputHorizonDis( 'text', 'period', '기간(일)', $row['29'], 'disabled');
			$rs1 .= formInputHorizonDis( 'text', 'price', '금액', $row['30'], 'disabled');
			$rs2 .= formInputHorizonAdd( 'text', 'book_dep', '계약금', $row['10'], 'onkeyup="numberWithCommas( this.value, \'#book_dep\', \'price\' )"');
			$rs2 .= formHorizonSelects( '결제방법', 'book_method' );
			$rs2 .= $optionbook;
			$rs2 .= formHorizonSelecte();
			$rs2 .= formInputHorizon( 'date', 'book_date', '결제일', $row['11']);
			$rs3 .= formInputHorizonDis( 'text', 'ext_dep', '잔금', $ext_dep, 'disabled');
			$rs3 .= formHorizonSelects( '결제방법', 'ext_method' );
			$rs3 .= $optionext;
			$rs3 .= formHorizonSelecte();
			$rs3 .= formInputHorizon( 'date', 'ext_date', '결제일', $row['12']);
			$rhidden .= formInputH( 'hidden', 'pid', $row['35']);
		}

		if ( $_GET['updated'] == 2 ) {
			$activeli1 = '';
			$activeli2 = 'class="active"';
			$activetab1 = '';
			$activetab2 = 'in active';
		} else {
			$activeli1 = 'class="active"';
			$activeli2 = '';
			$activetab1 = 'in active';
			$activetab2 = '';
		}

		$sql = "
		SELECT
			ordered.id, ordered.subproduct, subproduct.name, subproduct.price, subproduct.kind,
			ordered.quantity, ordered.paid, paid.name, ordered.created
			FROM n_ordered AS ordered
			LEFT JOIN n_subproduct AS subproduct ON subproduct.id = ordered.subproduct
			LEFT JOIN n_paid AS paid ON paid.id = ordered.paid
			WHERE ordered.service_id = {$_GET['id']}
			ORDER BY ordered.created
		";
		$result = mysqli_query( $conn, $sql );

		$rt = "";
		$amt = 0;
		$billed = 0;
		$nbilled = 0;

		while ( $rowt = mysqli_fetch_row( $result ) ) {


			$date = new DateTime($rowt['8']);
			$priceSubproduct = $rowt[3] * $rowt[5];
			$amt += $priceSubproduct;
			if ( $rowt['6'] == 1 ) {
				$billed += $priceSubproduct;
			} else {
				$nbilled += $priceSubproduct;
			}

			$rt .= "<tr>";
			$rt .= "<td>{$rowt['0']}</td>";
			$rt .= "<td>{$rowt['4']}</td>";
			$rt .= "<td>{$rowt['2']}</td>";
			$rt .= "<td>{$rowt['5']}</td>";
			$rt .= "<td>{$priceSubproduct}</td>";
			$rt .= "<td>{$rowt['7']}</td>";
			$rt .= "<td>{$date->format("Y-m-d")}</td>";
			$rt .= "</tr>";
		}

		$rs4 .= formInputHorizonDis( 'text', 'amount', '총금액', $amt, 'disabled');
		$rs4 .= formInputHorizonDis( 'text', 'billed', '결제액', $billed, 'disabled');
		$rs4 .= formInputHorizonDis( 'text', 'nbilled', '미결제액', $nbilled, 'disabled');
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
							<div class="m-b-lg nav-tabs-horizontal">
								<!-- tabs list -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" <?= $activeli1 ?>><a href="#tab-1" role="tab" data-toggle="tab">고객정보</a></li>
									<li role="presentation" <?= $activeli2 ?>><a href="#tab-2" role="tab" data-toggle="tab">결제정보</a></li>
								</ul><!-- .nav-tabs -->

								<!-- Tab panes -->
								<div class="tab-content p-md">
									<div role="tabpanel" class="tab-pane <?= $activetab1 ?> fade" id="tab-1">
										<div class="profile-header">
												<div class="row">
													<form class="form-horizontal" action="process/update-process-mom.php?id=<?=$_GET['id']?>" method="post">
														<div class="col-xl-2 text-center m-t-xl-md">
															<div class="avatar avatar-xxxl avatar-circle profileMomImage">
																<img src="../assets/images/mom/<?=$row['19']?>.jpg" alt="contact image">
															</div>
														</div>
														<div class="col-xl-10">
															<div class="widget-body">
																<div class="row">
																	<h4 class="m-l-lg p-b-md">산모 정보</h4>
																	<?= $r1 ?>
																	<?= $r3 ?>
																	<?= $r4 ?>
																</div>
															</div>
															<div class="widget-body">
																<div class="row">
																	<h4 class="m-l-lg p-b-md">신생아 정보</h4>
																	<?= $r2 ?>
																	<?= $r5 ?>
																	<?= $r6 ?>
																</div>
															</div><!-- .widget-body -->
														</div>
														<div class="form-group text-center m-b-0">
															<input type="button" class="btn mw-smd btn-warning" style="color:white;" value="저장" onclick="confSubmit(this.form)">
														</div>
													</form>
												</div>
										</div><!-- .profile-header -->
									</div><!-- .tab-pane  -->

									<div role="tabpanel" class="tab-pane <?= $activetab2 ?> fade" id="tab-2">
										<div class="profile-header">
												<div class="row">

													<div class="col-md-12">
														<form class="form-horizontal" action="process/update-process-payment.php?id=<?=$_GET['id']?>" method="post">
															<div class="widget-body">
																<div class="row">
																	<h4 class="m-l-lg">조리원 상품 정보</h4>
																	<?= $rs1 ?>
																	<?= $rs2 ?>
																	<?= $rs3 ?>
																	<div class="form-group text-center m-b-0">
																		<input type="button" class="btn mw-smd btn-warning" style="color:white;" value="저장" onclick="confSubmit(this.form)">
																	</div>
																</div>
															</div><!-- .widget-body -->
															<?= $rhidden ?>
														</form>
														<form class="form-horizontal" action="#" method="post">
															<div class="widget-body p-b-xs">
																<div class="row">
																	<h4 class="m-l-lg">추가 결제 내역</h4>
																	<?= $rs4 ?>
																</div>
															</div><!-- .widget-body -->
														</form>

														<div class="widget p-h-sm p-l-md p-r-md">
															<table id="default-datatable" data-plugin="DataTable" class="table table-bordered m-t-lg" cellspacing="0" width="100%">
																<colgroup>
																	<col class="col-xs-2">
																	<col class="col-xs-1">
																	<col class="col-xs-3">
																	<col class="col-xs-1">
																	<col class="col-xs-2">
																	<col class="col-xs-1">
																	<col class="col-xs-2">
																</colgroup>
																<thead>
																	<tr>
																		<th>주문번호</th>
																		<th>분류</th>
																		<th>제품명</th>
																		<th>수량</th>
																		<th>결제금액</th>
																		<th>납부</th>
																		<th>결제일</th>
																	</tr>
																</thead>
																<tbody>
																	<?= $rt ?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
										</div><!-- .profile-header -->
									</div><!-- .tab-pane  -->

								</div><!-- .tab-content  -->
							</div><!-- .nav-tabs-horizontal -->
						</div><!-- .widget -->
					</div><!-- END column -->
				</div><!-- .row -->

				<form action="process/update-process-note.php?id=<?=$_GET['id']?>&update=service" method="post">
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

			</section><!-- #dash-content -->
		</div><!-- .row -->



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

		<?= AddCommas( 'book_dep' ) ?>
		<?= AddCommas( 'price' ) ?>
		<?= AddCommas( 'ext_dep' ) ?>

		function numberWithCommas( x, id, amount ) {
		  x = x.replace(/[^0-9]/g,'');   // 입력값이 숫자가 아니면 공백
		  x = x.replace(/,/g,'');          // ,값 공백처리
		  $(id).val(x.replace(/\B(?=(\d{3})+(?!\d))/g, ",")); // 정규식을 이용해서 3자리 마다 , 추가
			y = document.getElementById(amount).value;
			y = y.replace(/,/g,'');
			z = y-x;
			$("#ext_dep").val(z);
			<?= AddCommas( 'ext_dep' ) ?>
		}

		var windowObj;

		function selectServiceWindow(){
			var settings ='toolbar=0,directories=0,status=no,menubar=0,scrollbars=no,resizable=no,height=800,width=1200,left=0,top=0';
			windowObj = window.open("popup-service-select.php","Select Service",settings);
		}

		function	confSubmit( form ){
			if ( confirm("수정하시겠습니까?") ) {
				form.submit();
			}
		}
	</script>
</body>
</html>
