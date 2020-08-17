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
  <link rel="stylesheet" href="module.css?ver=6">
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
        <button type="button" class="btn btn-info create">예약 약식 등록</button>
        <button type="button" class="btn btn-info create">예약 정식 등록</button>
        <div class="B_page">
          <header class="B_header">
          <div class="control">
            <ul>
              <li class="ct_list on">예약 대기</li>
              <li class="ct_list">상담 대기</li>
              <li class="ct_list">내원 대기</li>
              <li class="ct_list">내실</li>
            </ul>
          </div>
          </header>
					<div class="B_content reservation_waiting">
            <div class="content_srch">
              <form>
                <div class="box_left">
                  <label for="srch_Num">Show</label>
                  <select class="selectForm" name="srch_Num">
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
                  <th>이름</th>
                  <th>연락처</th>
                  <th>출산예정일</th>
                  <th>상담희망일</th>
                  <th></th>
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
					<div class="B_content off consulting_waiting">
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
            <table class="table">
              <thead>
                <tr>
                  <th>이름</th>
                  <th>연락처</th>
                  <th>출산예정일</th>
                  <th>상담확정일</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
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
					<div class="B_content off admission_waiting">
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
                  <th>이름</th>
                  <th>연락처</th>
                  <th>아기</th>
                  <th>성별</th>
                  <th>입실예정일</th>
                  <th>납부</th>
                  <th></th>
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
          <div class="B_content off admission">
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
                  <th>호실</th>
                  <th>이름</th>
                  <th>연락처</th>
                  <th>아기</th>
                  <th>입실일</th>
                  <th>퇴실예정일</th>
                  <th>납부</th>
                  <th></th>
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
        <div class="B_page enroll cst-rsvt">
            <header class="B_header">
              <h3>상담 예약 등록</h3>
            </header>
            <p>산모님을 등록해주세요.</p>
            <div class="B_content cst-rsvt-list">
              <div class="name">
                <label for="name">이름</label>
                <input class="input_border"type="text" name="name" placeholder="이름을 입력해주세요.">
              </div>
              <div class="phone">
                <label for="phone">연락처</label>
                <input class="input_border"type="number" name="phone" placeholder="'-'를 사용하지 말고 이어서 입력해주세요">
              </div>
              <div class="birth_eptday">
                <label for="birthday">출산예정일</label>
                <input class="input_border"type="date" name="birthday">
              </div>
              <div class="cst_eptday">
                <label for="join_date">상담희망일</label>
                <input class="input_border"type="date" name="join_date">
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
