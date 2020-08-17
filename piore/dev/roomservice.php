<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location:login.php");
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
  <link rel="stylesheet" href="module.css">
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
        <div class="roomWrap">
          <div class="room">
            <header class="room_header">
							<p>101호</p>
							<p class="room_condition">비어있음</p>
            </header>
            <section class="room_info">
              <div class="avatar avatar-lg avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
								<a class="m-r-xs theme-color">이름</a>
								<span class="fz-sm">아기이름</span>
						</section>
						<section class="room_info2">
								<div class="pieprogress text-default" data-plugin="circleProgress" data-value=".0" data-thickness="10" data-start-angle="90" data-empty-fill="rgba(204, 204, 204, .3)" data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">
									<strong>0</strong>
								</div>
							<table class="table">
								<thead>
									<tr>
										<th>입실일</th>
										<th>퇴실(예정)일</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>
						</section>
						<footer class="room_footer">
							<ul class="service">
								<li><a href="#none" title="날짜"><i class="fa fa-calendar"></i></a></li>
								<li><a href="#none" title="호출"><i class="fa fa-commenting"></i></a></li>
								<li><a href="#none" title="입실"><i class="fa fa-sign-in"></i></a></li>
								<li><a href="#none" title="퇴실"><i class="fa fa-sign-out"></i></a></li>
								<li><a href="#none" title="설정"><i class="fa fa-cog"></i></a></li>
							</ul>
						</footer>
          </div>
					<div class="room">
            <header class="room_header_ready">
							<p>102호</p>
							<p class="room_condition">준비중</p>
            </header>
            <section class="room_info">
              <div class="avatar avatar-lg avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
								<a class="m-r-xs theme-color">이름</a>
								<span class="fz-sm">아기이름</span>
						</section>
						<section class="room_info2">
								<div class="pieprogress text-warning" data-plugin="circleProgress" data-value=".0" data-thickness="10" data-start-angle="90" data-empty-fill="rgba(249, 200, 81, 0.3)" data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">
									<strong>0</strong>
								</div>
							<table class="table">
								<thead>
									<tr>
										<th>입실일</th>
										<th>퇴실(예정)일</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>
						</section>
						<footer class="room_footer">
							<ul class="service">
								<li><a href="#none" title="날짜"><i class="fa fa-calendar"></i></a></li>
								<li><a href="#none" title="호출"><i class="fa fa-commenting"></i></a></li>
								<li><a href="#none" title="입실"><i class="fa fa-sign-in"></i></a></li>
								<li><a href="#none" title="퇴실"><i class="fa fa-sign-out"></i></a></li>
								<li><a href="#none" title="설정"><i class="fa fa-cog"></i></a></li>
							</ul>
						</footer>
          </div>
					<div class="room">
            <header class="room_header_in">
							<p>103호</p>
							<p class="room_condition">입실중</p>
            </header>
            <section class="room_info">
              <div class="avatar avatar-lg avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
								<a class="m-r-xs theme-color">이름</a>
								<span class="fz-sm">아기이름</span>
						</section>
						<section class="room_info2">
								<div class="pieprogress text-primary" data-plugin="circleProgress" data-value=".0" data-thickness="10" data-start-angle="90" data-empty-fill="rgba(24, 138, 226, .3)" data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">
									<strong>0</strong>
								</div>
							<table class="table">
								<thead>
									<tr>
										<th>입실일</th>
										<th>퇴실(예정)일</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>
						</section>
						<footer class="room_footer">
							<ul class="service">
								<li><a href="#none" title="날짜"><i class="fa fa-calendar"></i></a></li>
								<li><a href="#none" title="호출"><i class="fa fa-commenting"></i></a></li>
								<li><a href="#none" title="입실"><i class="fa fa-sign-in"></i></a></li>
								<li><a href="#none" title="퇴실"><i class="fa fa-sign-out"></i></a></li>
								<li><a href="#none" title="설정"><i class="fa fa-cog"></i></a></li>
							</ul>
						</footer>
          </div>
					<div class="room">
            <header class="room_header_in">
							<p>104호</p>
							<p class="room_condition">입실중</p>
            </header>
            <section class="room_info">
              <div class="avatar avatar-lg avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
								<a class="m-r-xs theme-color">이름</a>
								<span class="fz-sm">아기이름</span>
						</section>
						<section class="room_info2">
								<div class="pieprogress text-primary" data-plugin="circleProgress" data-value=".0" data-thickness="10" data-start-angle="90" data-empty-fill="rgba(24, 138, 226, .3)" data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">
									<strong>0</strong>
								</div>
							<table class="table">
								<thead>
									<tr>
										<th>입실일</th>
										<th>퇴실(예정)일</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>
						</section>
						<footer class="room_footer">
							<ul class="service">
								<li><a href="#none" title="날짜"><i class="fa fa-calendar"></i></a></li>
								<li><a href="#none" title="호출"><i class="fa fa-commenting"></i></a></li>
								<li><a href="#none" title="입실"><i class="fa fa-sign-in"></i></a></li>
								<li><a href="#none" title="퇴실"><i class="fa fa-sign-out"></i></a></li>
								<li><a href="#none" title="설정"><i class="fa fa-cog"></i></a></li>
							</ul>
						</footer>
          </div>
					<div class="room">
            <header class="room_header">
							<p>105호</p>
							<p class="room_condition">비어있음</p>
            </header>
            <section class="room_info">
              <div class="avatar avatar-lg avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
								<a class="m-r-xs theme-color">이름</a>
								<span class="fz-sm">아기이름</span>
						</section>
						<section class="room_info2">
								<div class="pieprogress text-default" data-plugin="circleProgress" data-value=".0" data-thickness="10" data-start-angle="90" data-empty-fill="rgba(204, 204, 204, .3)" data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">
									<strong>0</strong>
								</div>
							<table class="table">
								<thead>
									<tr>
										<th>입실일</th>
										<th>퇴실(예정)일</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>
						</section>
						<footer class="room_footer">
							<ul class="service">
								<li><a href="#none" title="날짜"><i class="fa fa-calendar"></i></a></li>
								<li><a href="#none" title="호출"><i class="fa fa-commenting"></i></a></li>
								<li><a href="#none" title="입실"><i class="fa fa-sign-in"></i></a></li>
								<li><a href="#none" title="퇴실"><i class="fa fa-sign-out"></i></a></li>
								<li><a href="#none" title="설정"><i class="fa fa-cog"></i></a></li>
							</ul>
						</footer>
          </div>
					<div class="room">
            			<header class="room_header_ready">
							<p>106호</p>
							<p class="room_condition">준비중</p>
            			</header>
            			<section class="room_info">
             				<div class="avatar avatar-lg avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
							<a class="m-r-xs theme-color">이름</a>
							<span class="fz-sm">아기이름</span>
						</section>
						<section class="room_info2">
								<div class="pieprogress text-warning" data-plugin="circleProgress" data-value=".0" data-thickness="10" data-start-angle="90" data-empty-fill="rgba(249, 200, 81, 0.3)" data-fill="{&quot;color&quot;: &quot;#188ae2&quot;}">
									<strong>0</strong>
								</div>
							<table class="table">
								<thead>
									<tr>
										<th>입실일</th>
										<th>퇴실(예정)일</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>
						</section>
						<footer class="room_footer">
							<ul class="service">
								<li><a href="#none" title="날짜"><i class="fa fa-calendar"></i></a></li>
								<li><a href="#none" title="호출"><i class="fa fa-commenting"></i></a></li>
								<li><a href="#none" title="입실"><i class="fa fa-sign-in"></i></a></li>
								<li><a href="#none" title="퇴실"><i class="fa fa-sign-out"></i></a></li>
								<li><a href="#none" title="설정"><i class="fa fa-cog"></i></a></li>
							</ul>
						</footer>
          	</div>
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
	<script src="module.js?ver=4">

	</script>
</body>
</html>
