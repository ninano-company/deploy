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
			<section class="app-content ">
        <div class="serv_srch">
          <form>
            <div class="box_left">
              <label for="srch_Num">Show</label>
              <select class="selectForm fa-sort-desc" name="srch_Num">
                <option value="8">8</option>
                <option value="12" selected>12</option>
                <option value="24">24</option>
                <option value="all">all</option>
              </select>
              entries
            </div>
            <div class="box_right">
              <label for="srch_name">Search:</label>
              <input class="input_border" type="text" name="srch_name">
            </div>
          </form>
        </div>
        <div class="mother_listWrap">
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
          </div>
          <div class="m_list">
						<div class="avatar avatar-hxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
            <div class="m_info">
              <p class="name">엄마이름</p>
              <p class="baby_name">애기이름</p>
              <p class="phone">01008101031</p>
              <p class="in-date">입실일 : 2020-08-07</p>
              <p class="out-date">퇴실일 : 2020-08-09</p>
            </div>
            <div class="dropdown">
						  <a href="javascript:void(0)" class="btn btn-success w-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
		          <ul class="dropdown-menu animated flipInY">
		            <li><a href="profile.mom.php"><i class="zmdi m-r-md zmdi-hc-lg zmdi-account-box"></i>산모정보</a></li>
								<li><a href="daily.chart.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-book"></i>신생아정보</a></li>
		            <li><a href="#none"><i class="zmdi m-r-md zmdi-hc-lg zmdi-balance-wallet"></i>구매</a></li>
		            <li><a href="chartingIn.php"><i class="glyphicon m-r-md glyphicon-hc-lg glyphicon-pencil"></i>입실 기록<span class="label label-primary"></span></a></li>
		            <li><a href="javascript:void(0)"><i class="fa m-r-md zmdi-hc-lg fa-trash"></i>삭제하기</a></li>
		          </ul>
		        </div>
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
	<script src="module.js?ver=1">

	</script>
</body>
</html>
