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
  <link rel="stylesheet" href="module.css?ver=48">
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
        <div class="B_page">
          <header class="B_header">
          	<div class="control">
          		<ul>
          		  <li class="ct_list on">고객 정보</li>
          		  <li class="ct_list">결제 정보</li>
          		</ul>
    				</div>
      		</header>
					<div class="B_content customer-info">
						<div class="imgWrap">
							<div class="avatar avatar-xxl avatar-circle"><img class="img-responsive" src="../assets/images/mom/blank.jpg" alt="/"></div>
						</div>
						<div class="mother-infoWrap">
							<h4>산모 정보</h4>
							<div class="mother-info">
								<div class="w30">
									<label for="name">이름</label>
									<input class="input_border"type="text" name="name" placeholder="이름을 입력해주세요.">
								</div>
								<div class="w30">
									<label for="phone">휴대전화번호</label>
									<input class="input_border"type="number" name="phone" placeholder="'-'를 사용하지 말고 이어서 입력해주세요">
								</div>
								<div class="w30">
									<label for="Email">이메일 주소</label>
									<input class="input_border"type="email" name="Email" placeholder="이메일 주소를 입력해주세요">
								</div>
								<div class="w30">
									<label for="birthday">생년월일</label>
									<input class="input_border"type="date" name="birthday">
								</div>
								<div class="w50">
									<label for="address">주소</label>
									<input class="input_border"type="text" name="address" placeholder="주소를 입력해주세요.">
								</div>
								<div class="w30">
									<label for="in_date">입원일</label>
									<input class="input_border"type="date" name="join_date">
								</div>
								<div class="w30">
									<label for="out_date">퇴원일</label>
									<input class="input_border"type="date" name="join_date">
								</div>
								<div class="w30">
									<label for="day_reservation">예약신청날짜</label>
									<input class="input_border" type="text" name="day_reservation" disabled>
								</div>
							</div>
						</div>
						<div class="baby-infoWrap">
							<h4>신생아 정보</h4>
							<div class="baby_info">
								<div class="w30 p_btn">
									<label for="name">아기이름</label>
									<input class="input_border"type="text" name="name" placeholder="아기 이름을 입력해주세요.">
									<a href="#none" class="baby-medical btn btn-primary" title="아기정보"><i class="fa fa-book"></i></a>
								</div>
								<div class="w30">
									<label for="sex">아기성별</label>
									<input class="input_border"type="text" name="sex" placeholder="아기 성별을 입력해주세요.">
								</div>
								<div class="w30">
									<label for="birthday">아기생일</label>
									<input class="input_border"type="date" name="birthday">
								</div>
								<div class="w30">
									<label for="birth-hospital">출산병원</label>
									<input class="input_border"type="text" name="birth-hospital" placeholder="주소를 입력해주세요.">
								</div>
								<div class="w30">
            	  	<label for="birth-how">분만형태</label>
            	  	<select class="selectForm" name="birth-how">
            	  	  <option value="자연분만">자연분만</option>
            	  	  <option value="제왕절개">제왕절개</option>
            	  	  <option value="무통분만">무통분만</option>
            	  	  <option value="수중분만">수중분만</option>
            	  	</select>
            		</div>
								<div class="w30">
									<label for="date_inside">재태기간</label>
									<input class="input_border"type="text" name="date_inside" placeholder="재태기간을 입력해주세요.">
								</div>
								<div class="w30">
									<label for="weight_birth">출생체중</label>
									<input class="input_border"type="number" name="weight_birth" placeholder="출생체중을 입력해주세요.">
								</div>
								<div class="w30">
									<label for="weight_join">입실체중</label>
									<input class="input_border"type="number" name="weight_join" placeholder="입실체중을  입력해주세요.">
								</div>
								<div class="w30">
            	  	<label for="service_progress">진행상태</label>
            	  	<select class="selectForm" name="service_progress">
            	  	  <option value="예약요청">예약요청</option>
            	  	  <option value="상담대기">상담대기</option>
            	  	  <option value="내원대기">내원대기</option>
            	  	  <option value="내원">내원</option>
            	  	  <option value="퇴원">퇴원</option>
            	  	  <option value="중도퇴원">중도퇴원</option>
            	  	</select>
            		</div>
							</div>
						</div>
						<div class="buttons">
							<button class="btn btn-warning">저장</button>
							<button class="btn btn-info">수정</button>
						</div>
					</div>
					<div class="B_content payment_info off">
						<h4>조리원 상품정보</h4>
						<section class="prd_info">

								<article>
									<div class="w30 p_btn">
										<label for="serv_name">상품명</label>
										<input class="input_border"type="text" name="serv_name" placeholder="이름을 입력해주세요.">
										<a href="#none" class="serv-list btn btn-primary" title="아기정보"><i class="fa fa-book"></i></a>
									</div>
									<div class="w30">
										<label for="how_long">기간(일)</label>
										<input type="text" disabled class="input_border" name="how_long">
									</div>
									<div class="w30">
										<label for="price">금액</label>
										<input type="text" disabled class="input_border" name="price">
									</div>
								</article>
								<article>
									<div class="w30">
										<label for="down_payment">계약금</label>
										<input type="text" class="input_border" name="down_payment">
									</div>
									<div class="w30">
										<label for="down_payment_way">결제방법</label>
										<select class="input_border" name="down_payment_way">
											<option value="현금">현금</option>
											<option value="카드">카드</option>
											<option value="이체">이체</option>
										</select>
									</div>
									<div class="w30">
										<label for="down_payment_day">결제일</label>
										<input type="text" class="input_border" name="down_payment_day">
									</div>
								</article>
								<article>
									<div class="w30">
										<label for="last_payment">잔금</label>
										<input type="text" class="input_border" name="last_payment">
									</div>
									<div class="w30">
										<label for="last_payment_way">결제방법</label>
										<select class="input_border" name="last_payment_way">
											<option value="현금">현금</option>
											<option value="카드">카드</option>
											<option value="이체">이체</option>
										</select>
									</div>
									<div class="w30">
										<label for="last_payment_day">결제일</label>
										<input type="text" class="input_border" name="last_payment_day">
									</div>
								</article>
						</section>
						<section class="p_pay">
							<h4>추가 결제내역</h4>
							<div class="price_total">
								<label for="price_total">결제액</label>
								<input type="text" class="input_border" name="price_total">
							</div>
							<div class="pay_price">
								<label for="pay_price">총금액</label>
								<input type="text" class="input_border" name="pay_price">
							</div>
							<div class="pay_price_not">
								<label for="pay_price_not">미결제액</label>
								<input type="text" class="input_border" name="pay_price_not">
							</div>
						</section>
						<section class="pay_table">
							<div class="serv_srch">
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
							<div class="service_table">
            		<table class="table ">
            		  <thead>
            		    <tr>
            		      <th>주문번호</th>
            		      <th>분휴</th>
            		      <th>제품명</th>
            		      <th>수량</th>
            		      <th>결제금액</th>
            		      <th>납부</th>
            		      <th>결제일</th>
            		    </tr>
            		  </thead>
            		  <tbody>
            		    <tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
										<tr>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
											<td>그냥 채우기용 입니다.</td>
            		    </tr>
            		  </tbody>
            		</table>
          		</div>
						</section>
						<div class="buttons">
							<button class="btn btn-warning">저장</button>
							<button class="btn btn-info">수정</button>
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
	<script src="module.js">

	</script>
</body>
</html>
