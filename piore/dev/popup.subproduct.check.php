<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
	} else {
		require_once('/copaki/www/piore/dev/process/connection.php');
		require_once('/copaki/www/piore/dev/function/formInput.php');
		require_once('/copaki/www/piore/dev/function/makeProcess.php');
		require_once('/copaki/www/piore/dev/function/direct.php');

		$qty = $_POST['qty'];
		$pid = $_POST['pid'];

		$check = false;
		$sumQty = 0;
		$amountSubproduct = 0;
		$amountSubproductAll = 0;
		$arrayLength = 0;
		$arrayId = 0;

		$rowSubproductArray = '';

		$rs2 .= formHorizonSelects( '결제방법', 'book_method' );
		$rs2 .= $optionbook;
		$rs2 .= formHorizonSelecte();

		$selectMethod = formHorizonSelectLists( '결제방법', 'method[]' );
		$selectMethod .= formOption( '1', '카드' );
		$selectMethod .= formOption( '2', '이체' );
		$selectMethod .= formOption( '3', '현금' );
		$selectMethod .= formHorizonSelectListe();

		$selectPaid = formHorizonSelectLists( '납부방법', 'paid[]' );
		$selectPaid .= formOption( '1', '선납' );
		$selectPaid .= formOption( '2', '후납' );
		$selectPaid .= formHorizonSelectListe();

		$sql = "
		SELECT id, name, price, image, description
			FROM n_subproduct
			WHERE
		";

		while ( $arrayLength < count($pid) ) {


			if ( $qty[$arrayLength] > 0) {

				if ( $check  == false ) {
					$sql .= ' id = ' . $pid[$arrayLength];
					$check = true;
				} else {
					$sql .= ' OR id = ' . $pid[$arrayLength];
				}
				$sumQty += $qty[$arrayLength];
			}
			$arrayLength++;
		}

		if ( $sumQty < 1 ) {
			goBack( '선택된 주문이 없습니다.' );
		}

		$result = mysqli_query( $conn, $sql );
		while ( $row = mysqli_fetch_array( $result ) ) {
			for ( $i=0; $i < $arrayLength; $i++ ) {
				if ( $pid[$i] == $row['id'] ) {
					$arrayId = $i;
					break;
				}
			}

			$amountSubproduct = $row['2'] * $qty[$arrayId];
			$amountSubproductAll += $amountSubproduct;

			$amountSubproductCommas = AddCommasFirst( $amountSubproduct );
			$price = AddCommasFirst( $row['2'] );
			$rowSubproductArray .= '
			<tr style="height:50px;">
				<td rowspan="2" class="borderRight"><img class="subproductImg" src="../assets/images/subproduct/' . $row['3'] .'">' . formInputH( "hidden", "pid[]", $pid[$arrayId] ) .'</td><td colspan="1">' . $row['1'] . '</td><td colspan="3" class="borderLeft"> '. $row['4'] .'</td>
			</tr>
			<tr>
				<td colspan="2" class="text-left" style="padding:2px 10px;">
						'. $selectMethod . $selectPaid .'
				</td><td class="borderLeftHalf borderRightHalf"><span id="product'.$row[0].'">' . $price . '</span> 원<br>' . formTableInputListN( "qty[]", $qty[$arrayId], 0, 10, 1, 0, '', "dark", "xxs" ) . '</td><td colspan="1"> <span>' . $amountSubproductCommas . '</span> 원</td>
			</tr>
			';
		}

		$amountSubproductAllCommas = AddCommasFirst( $amountSubproductAll );

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
						<form action="./process/create-process-order.php?id=<?= $_GET['id'] ?>" method="post">
							<input type="hidden" name="save" value="">
							<div class="widget" style="padding:15px;">
								<div class="cellWrap">
									<div class="cellRow" id="cellRowOne">
										<div class="cells" id="cellOneOne">
											<i class="zmdi zmdi-shopping-cart"></i>
										</div>
										<div class="cells" id="cellOneTwo">
											선택 상품 목록
										</div>
									</div>
								</div>
								<table class="table text-center m-h-md">
									<colgroup>
										<col class="col-xs-2">
										<col class="col-xs-2">
										<col class="col-xs-2">
										<col class="col-xs-2">
										<col class="col-xs-2">
										<col class="col-xs-2">
									</colgroup>
									<tr style="height:50px;">
										<th colspan="5">상품정보</th>
									</tr>
									<?= $rowSubproductArray ?>
									<tr>
										<td colspan="5"></td>
									</tr>
								</table>
								<div class="cellWrap">
									<div class="cellRow">
										<div class="cells text-center" id="cellAmount">
											총 금액 <span id="amount"><?= $amountSubproductAllCommas ?></span> 원
										</div>
									</div>
								</div>
								<div class="orderBtn m-t-xl" style="">
									<input type="button" class="btn p-v-xl btn-primary mw-xl btnSave p-h-md" name="save" value="저장하기" onclick="confSubmit(this.form)">
								</div><!-- .widget-body -->
							</div><!-- .widget -->
						</form>
					</div><!-- END column -->
				</div>
			</section><!-- .app-content -->
		</div><!-- .wrap -->
	</main>
	<!--========== END app main -->

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
		function	confSubmit( form ){
			if ( confirm("저장하시겠습니까?") ) {
				form.submit();
			}
		}
	</script>
</body>
</html>
