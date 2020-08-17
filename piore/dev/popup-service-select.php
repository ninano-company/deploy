<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:index.php");
	}else{
		require_once('/copaki/www/piore/dev/process/connection.php');

		$sql="
		SELECT
			id, name, kind, period, price
			FROM n_product as product
		";

		$result=mysqli_query($conn, $sql);
		$trow = "";
		while($row = mysqli_fetch_array($result)){
			$trow .= "<tr>";
			$trow .= "<td>{$row['0']}</td>
								<td><a href=\"\" onclick=\"sendToParent('{$row['1']}', '{$row['0']}');\">{$row['1']}</a></td>
								<td>{$row['2']}</td>
								<td>{$row['3']}</td>
								<td>{$row['4']}</td>
								</tr>";
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

<body style="padding-top:0px;">
	<!--============= start main area -->

	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
	  <div class="wrap">
			<section class="app-content">
				<!-- <input type="hidden" name="" value=""> -->
				<table id="default-datatable" data-plugin="DataTable" class="table table-bordered m-t-lg" cellspacing="0" width="100%">
					<colgroup>
						<col class="col-xs-2">
						<col class="col-xs-4">
						<col class="col-xs-2">
						<col class="col-xs-2">
						<col class="col-xs-2">
					</colgroup>
					<thead>
						<tr>
							<th>제품번호</th>
							<th>제품명</th>
							<th>종류</th>
							<th>기간</th>
							<th>가격</th>
						</tr>
					</thead>
					<tbody>
						<?= $trow ?>
					</tbody>
				</table>
			</section><!-- .app-content -->
		</div><!-- .wrap -->
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
		function sendToParent(name, id){
			opener.document.getElementById("pname").value = name;
			opener.document.getElementById("pid").value = id;
			window.close();
		}
	</script>
</body>
</html>
