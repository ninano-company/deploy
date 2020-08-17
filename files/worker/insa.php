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
  <link rel="stylesheet" href="module.css?ver=5">
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
        <button type="button" class="btn btn-info create">직원 등록</button>
        <div class="B_page">
          <header class="B_header">
          <div class="control">
            <ul>
              <li class="ct_list on">산후조리사</li>
              <li class="ct_list">PRN</li>
              <li class="ct_list">부서장</li>
              <li class="ct_list">관리자</li>
            </ul>
          </div>
          </header>
					<div class="B_content">
            <div class="content_srch">
              <form>
                <div class="box_left">
                  <label for="srch_Num">Show</label>
                  <select class="selectForm fa-sort-desc" name="srch_Num">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                  entries
                </div>
                <div class="box_right">
                  <label for="srch_name">Search:</label>
                  <input class="input_border" type="text" name="srch_name">
                </div>
              </form>
            </div>
            <div class="content_table">
            <table class="table ">
              <thead>
                <tr>
                  <th>번호</th>
                  <th>이름</th>
                  <th>근태</th>
                  <th>연락처</th>
                  <th>직군</th>
                  <th>입사일</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                </tr>
              </tbody>
            </table>
          </div>
            <div class="content_footer">
              <div class="box_left">
                <span>Showing 0 to 0 of 0 entries</span>
              </div>
              <div class="box_right">
                <button class="btn" type="button" name="prev">Previous</button>
                <span class="content_pageN">1</span>
                <button class="btn" type="button" name="next">Next</button>
              </div>
            </div>
          </div>
					<div class="B_content off grid">
            <div class="content_srch">
              <form>
                <div class="box_left">
                  <label for="srch_Num">Show</label>
                  <select class="selectForm fa-sort-desc" name="srch_Num">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                  entries
                </div>
                <div class="box_right">
                  <label for="srch_name">Search:</label>
                  <input type="text"class="input_border" name="srch_name">
                </div>
              </form>
            </div>
            <div class="content_table">
            <table class="table ">
              <thead>
                <tr>
                  <th>번호</th>
                  <th>이름</th>
                  <th>근태</th>
                  <th>연락처</th>
                  <th>직군</th>
                  <th>입사일</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                </tr>
              </tbody>
            </table>
          </div>
            <div class="content_footer">
              <div class="box_left">
                <span>Showing 0 to 0 of 0 entries</span>
              </div>
              <div class="box_right">
                <button class="btn" type="button" name="prev">Previous</button>
                <span class="content_pageN">1</span>
                <button class="btn" type="button" name="next">Next</button>
              </div>
            </div>
          </div>
					<div class="B_content off">
            <div class="content_srch">
              <form>
                <div class="box_left">
                  <label for="srch_Num">Show</label>
                  <select class="selectForm fa-sort-desc" name="srch_Num">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                  entries
                </div>
                <div class="box_right">
                  <label for="srch_name">Search:</label>
                  <input type="text"class="input_border" name="srch_name">
                </div>
              </form>
            </div>
            <div class="content_table">
            <table class="table ">
              <thead>
                <tr>
                  <th>번호</th>
                  <th>이름</th>
                  <th>근태</th>
                  <th>연락처</th>
                  <th>직군</th>
                  <th>입사일</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                </tr>
              </tbody>
            </table>
          </div>
            <div class="content_footer">
              <div class="box_left">
                <span>Showing 0 to 0 of 0 entries</span>
              </div>
              <div class="box_right">
                <button class="btn" type="button" name="prev">Previous</button>
                <span class="content_pageN">1</span>
                <button class="btn" type="button" name="next">Next</button>
              </div>
            </div>
          </div>
					<div class="B_content off">
            <div class="content_srch">
              <form>
                <div class="box_left">
                  <label for="srch_Num">Show</label>
                  <select class="selectForm fa-sort-desc" name="srch_Num">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select>
                  entries
                </div>
                <div class="box_right">
                  <label for="srch_name">Search:</label>
                  <input type="text" class="input_border" name="srch_name">
                </div>
              </form>
            </div>
            <div class="content_table">
            <table class="table ">
              <thead>
                <tr>
                  <th>번호</th>
                  <th>이름</th>
                  <th>근태</th>
                  <th>연락처</th>
                  <th>직군</th>
                  <th>입사일</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                </tr>
              </tbody>
            </table>
          </div>
            <div class="content_footer">
              <div class="box_left">
                <span>Showing 0 to 0 of 0 entries</span>
              </div>
              <div class="box_right">
                <button class="btn" type="button" name="prev">Previous</button>
                <span class="content_pageN">1</span>
                <button class="btn" type="button" name="next">Next</button>
              </div>
            </div>
          </div>
				</div>
        <div class="B_page enroll worker_info">
          <header class="B_header">
            <h3>직원등록</h3>
          </header>
          <p>산후조리원 내에 함께 일하는 직원들을 등록해주세요.</p>
          <div class="B_content worker_info_list">
            <div class="id">
              <label for="id">아이디</label>
              <input class="input_border"type="text" name="id" placeholder="아이디를 입력해주세요.">
            </div>
            <div class="passwd">
              <label for="passwd">비밀번호</label>
              <input class="input_border"type="text" name="passwd" placeholder="비밀번호를 입력해주세요.">
            </div>
            <div class="passwd_repeat">
              <label for="passwd">비밀번호 확인</label>
              <input class="input_border"type="text" name="passwd" placeholder="비밀번호를 한번 더 입력해주세요.">
            </div>
            <div class="name">
              <label for="name">이름</label>
              <input class="input_border"type="text" name="name" placeholder="이름을 입력해주세요.">
            </div>
            <div class="phone">
              <label for="phone">휴대전화번호</label>
              <input class="input_border"type="number" name="phone" placeholder="'-'를 사용하지 말고 이어서 입력해주세요">
            </div>
            <div class="Email">
              <label for="Email">이메일 주소</label>
              <input class="input_border"type="email" name="Email" placeholder="이메일 주소를 입력해주세요">
            </div>
            <div class="birthday">
              <label for="birthday">생년월일</label>
              <input class="input_border"type="date" name="birthday">
            </div>
            <div class="join_date">
              <label for="join_date">입사일</label>
              <input class="input_border"type="date" name="join_date">
            </div>
            <div class="address">
              <label for="address">주소</label>
              <input class="input_border"type="text" name="address" placeholder="주소를 입력해주세요.">
            </div>
            <div class="rank">
              <label for="rank">직급</label>
              <select class="selectForm"class="rank_list" name="rank">
                <option value="산후조리사">산후조리사</option>
                <option value="PRN">PRN</option>
                <option value="부서장">부서장</option>
                <option value="관리자">관리자</option>
              </select>
            </div>
            <div class="extraInfo">
              <label for="extraInfo">비고</label>
              <textarea class="input_border" name="extraInfo"></textarea>
            </div>
          </div>
          <button class="btn Cancel" type="button" name="button">Cancel</button>
          <input class="input_submit btn btn-primary" type="submit" value="submit">
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
