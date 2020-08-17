<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'layout/head.php'; ?>
	<script>
		Breakpoints();
	</script>
</head>

<body class="simple-page">
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.php">
				<span><i class="fa fa-gg"></i></span>
				<span>Trinity</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
			<form action="process/process-login.php" method="POST">
				<?php
					if($_GET['Empty']==true){
				?>
				<p class="text-muted text-center m-b-sm"><?=$_GET['Empty']?></p>
				<?php
					}else if($_GET['Invalid']==true){
				?>
				<p class="text-muted text-center m-b-sm"><?=$_GET['Invalid']?></p>
				<?php
					}
				?>
				<div class="form-group">
					<label for="sign-in-uname">아이디</label>
					<input id="sign-in-uname" type="text" name="uname" class="form-control" placeholder="아이디" autofocus>
				</div>

				<div class="form-group">
					<label for="sign-in-password">비밀번호</label>
					<input id="sign-in-password" type="password" name="password" class="form-control" placeholder="비밀번호">
				</div>

				<div class="form-group m-b-xl">
					<div class="checkbox checkbox-primary">
						<input type="checkbox" id="keep_me_logged_in"/>
						<label for="keep_me_logged_in">로그인 유지</label>
					</div>
				</div>
				<input type="submit" class="btn btn-primary" name="Login" value="로그인">
			</form>
		</div><!-- #login-form -->
	</div><!-- .simple-page-wrap -->
</body>
</html>
