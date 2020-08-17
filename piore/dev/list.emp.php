<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:index.php");
	}else{
		require_once('/copaki/www/piore/dev/process/connection.php');

		$sql = "
		SELECT
			user.name, user.phone, n_select.name, user.joined, user.id, n_select.id
				FROM n_user AS user
				LEFT JOIN n_select ON n_select.id = user.class";
		$result = mysqli_query( $conn, $sql );

		$trow_emp = '';
		$trow_prn = '';
		$trow_subadmin = '';
		$trow_admin = '';

		$num_emp = 1;
		$num_prn = 1;
		$num_subadmin = 1;
		$num_admin = 1;

		while( $row = mysqli_fetch_array($result) ){

			$a = substr($row['1'],0,3);
			$b = substr($row['1'],3,4);
			$c = substr($row['1'],7,4);

			if ( $row[5] == 4 ) {

				$trow_emp .= '<tr class="tableBtn" onClick=" clickProfileUser('. $row[4] .');">';
				$trow_emp .= '<td>'.$num_emp.'</td>';
				$trow_emp .= '<td>'.$row['0'].'</td>';
				$trow_emp .= '<td>업무 중</td>';
				$trow_emp .= '<td>'.$a.'-'.$b.'-'.$c.'</td>';
				$trow_emp .= '<td>'.$row['2'].'</td>';
				$trow_emp .= '<td>'.$row['3'].'</td>';
				$trow_emp .= '<td><button class="btn btn-warning" style="padding-top:0; padding-bottom:0; height:25px;" name="delete" onclick="deleteEmpConfirm('.$row['4'].');">삭제</button></td>';
				$trow_emp .= '</tr>';
				$num_emp++;

			} else if ( $row[5] == 5 ) {

				$trow_prn .= '<tr class="tableBtn" onClick=" clickProfileUser('. $row[4] .');">';
				$trow_prn .= '<td>'.$num_prn.'</td>';
				$trow_prn .= '<td>'.$row['0'].'</td>';
				$trow_prn .= '<td>업무 중</td>';
				$trow_prn .= '<td>'.$a.'-'.$b.'-'.$c.'</td>';
				$trow_prn .= '<td>'.$row['2'].'</td>';
				$trow_prn .= '<td>'.$row['3'].'</td>';
				$trow_prn .= '<td><button class="btn btn-warning" style="padding-top:0; padding-bottom:0; height:25px;" onclick="deleteEmpConfirm('.$row['4'].');">삭제</button></td>';
				$trow_prn .= '</tr>';
				$num_prn++;

			} else if ( $row[5] == 6 ) {

				$trow_subadmin .= '<tr class="tableBtn" onClick=" clickProfileUser('. $row[4] .');">';
				$trow_subadmin .= '<td>'.$num_subadmin.'</td>';
				$trow_subadmin .= '<td>'.$row['0'].'</td>';
				$trow_subadmin .= '<td>업무 중</td>';
				$trow_subadmin .= '<td>'.$a.'-'.$b.'-'.$c.'</td>';
				$trow_subadmin .= '<td>'.$row['2'].'</td>';
				$trow_subadmin .= '<td>'.$row['3'].'</td>';
				$trow_subadmin .= '<td><button class="btn btn-warning" style="padding-top:0; padding-bottom:0; height:25px;" onclick="deleteEmpConfirm('.$row['4'].');">삭제</button></td>';
				$trow_subadmin .= '</tr>';
				$num_subadmin++;

			} else if ( $row[5] == 7 ) {

				$trow_admin .= '<tr class="tableBtn" onClick=" clickProfileUser('. $row[4] .');">';
				$trow_admin .= '<td>'.$num_admin.'</td>';
				$trow_admin .= '<td>'.$row['0'].'</td>';
				$trow_admin .= '<td>업무 중</td>';
				$trow_admin .= '<td>'.$a.'-'.$b.'-'.$c.'</td>';
				$trow_admin .= '<td>'.$row['2'].'</td>';
				$trow_admin .= '<td>'.$row['3'].'</td>';
				$trow_admin .= '<td><button class="btn btn-warning" style="padding-top:0; padding-bottom:0; height:25px;" onclick="deleteEmpConfirm('.$row['4'].');">삭제</button></td>';
				$trow_admin .= '</tr>';
				$num_admin++;

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
	<?php include 'layout/navbar-search.php' ?>
	<!-- .navbar-search -->

	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
	  <div class="wrap">
		<section class="app-content">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="mail-toolbar m-b-lg">
						<div class="btn-group" role="group">
							<p class="btn btn-default">직원 목록</p>
						</div>
						<div class="btn-group" role="group">
							<a href="create.emp.php?id=4" class="btn btn-default">산후조리사 등록</i></a>
							<a href="create.emp.php?id=5" class="btn btn-default">PRN 등록</a>
							<a href="create.emp.php?id=6" class="btn btn-default">부서장 등록</a>
							<a href="create.emp.php?id=7" class="btn btn-default">관리자 등록</a>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="widget">
						<div class="m-b-lg nav-tabs-horizontal">

							<!-- tabs list -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#emp" aria-controls="admin" role="tab" data-toggle="tab">산후조리사</a></li>
								<li role="presentation"><a href="#prn" aria-controls="emp" role="tab" data-toggle="tab">PRN</a></li>
								<li role="presentation"><a href="#subadmin" aria-controls="prn" role="tab" data-toggle="tab">부서장</a></li>
								<li role="presentation"><a href="#admin" aria-controls="subadmin" role="tab" data-toggle="tab">관리자</a></li>
							</ul><!-- .nav-tabs -->

							<!-- Tab panes -->
							<div class="tab-content p-md">
								<div role="tabpanel" class="tab-pane in active fade" id="emp">
									<div class="widget-body">
										<div class="table-responsive">
											<table id="emp-datatables" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
												<colgroup>
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
												</colgroup>
												<thead>
													<tr>
														<th>번호</th>
														<th>이름</th>
														<th>근태</th>
														<th>연락처</th>
														<th>직군</th>
														<th>입사일</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?= $trow_emp ?>
												</tbody>
											</table>
										</div>
									</div><!-- .widget-body -->
								</div><!-- .tab-pane  -->

								<div role="tabpanel" class="tab-pane fade" id="prn">
									<div class="widget-body">
										<div class="table-responsive">
											<table id="prn-datatables" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
												<colgroup>
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
												</colgroup>
												<thead>
													<tr>
														<th>번호</th>
														<th>이름</th>
														<th>근태</th>
														<th>연락처</th>
														<th>직군</th>
														<th>입사일</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?= $trow_prn ?>
												</tbody>
											</table>
										</div>
									</div><!-- .widget-body -->
								</div><!-- .tab-pane  -->

								<div role="tabpanel" class="tab-pane fade" id="subadmin">
									<div class="widget-body">
										<div class="table-responsive">
											<table id="subadmin-datatables" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
												<colgroup>
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
												</colgroup>
												<thead>
													<tr>
														<th>번호</th>
														<th>이름</th>
														<th>근태</th>
														<th>연락처</th>
														<th>직군</th>
														<th>입사일</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?= $trow_subadmin ?>
												</tbody>
											</table>
										</div>
									</div><!-- .widget-body -->
								</div><!-- .tab-pane  -->

								<div role="tabpanel" class="tab-pane fade" id="admin">
									<div class="widget-body">
										<div class="table-responsive">
											<table id="admin-datatables" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
												<colgroup>
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
													<col class="col-sm-2">
													<col class="col-sm-1">
												</colgroup>
												<thead>
													<tr>
														<th>번호</th>
														<th>이름</th>
														<th>근태</th>
														<th>연락처</th>
														<th>직군</th>
														<th>입사일</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<?= $trow_admin ?>
												</tbody>
											</table>
										</div>
									</div><!-- .widget-body -->
								</div><!-- .tab-pane  -->
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
	<script type="text/javascript">

		var isBtnClicked = false;

		function	clickProfileUser(id){
			if ( isBtnClicked ) {
				isBtnClicked = false;
				return;
			} else {
				var loc = "./profileUser.php?";
				loc = loc.concat("id=", id);
				location.href=loc;
			}
		}

		function deleteEmpConfirm(id){
			isBtnClicked = true;
			if(confirm("삭제하시겠습니까?")){
				var loc = "./process/delete-process-emp.php?";
				loc = loc.concat("id=", id, "&", 'delete');
				location.href=loc;
			}
		}
	</script>
</body>
</html>
