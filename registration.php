<?php
 session_start();
header("Content-Type:text/html;charset=utf8");
require "config.php";
require "functions.php";
if(isset($_POST['reg'])) {
	$msg = registration($_POST);
	if($msg === TRUE) {
		$_SESSION['msg'] = "Вы успешно зарегистрировались на сайте. И для подтвержения регистрации  Вам на почту отправлено письмо с инструкциями.";
	}
	else {
		$_SESSION['msg'] = $msg;
	}
	header("Location:".$_SERVER['PHP_SELF']);
	exit();
}
?>
<? include "inc/header.php";?>
<? include "inc/style.php";?>
	<div class="s">
		<?=$_SESSION['msg'];?>
		<? unset($_SESSION['msg']);?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<form class="form-horizontal"  method="POST">
					<span class="heading">РЕГИСТРАЦИЯ</span>
					<div class="form-group">
						<input type="text" class="form-control" id="inputText" name='reg_login' placeholder="Логин" value="<?=$_SESSION['reg']['login'];?>">
						<i class="fa fa-user"></i>
					</div>
					<div class="form-group help">
						<input type="password" class="form-control" id="inputPassword" name='reg_password' placeholder="Пароль">
						<i class="fa fa-lock"></i>
					</div>
					<div class="form-group help">
						<input type="password" class="form-control" id="inputPassword" name='reg_password_confirm' placeholder="Ведите пароль еще раз">
						<i class="fa fa-lock"></i>
					</div>
					<div class="form-group help">
						<input type='text' name='reg_email' class="form-control" placeholder="E-mail" value="<?=$_SESSION['reg']['email'];?>">
						<i class="fa fa-user"></i>
					</div>
					<div class="form-group help">
						<input type='text' name='reg_name'  class="form-control" placeholder="Имя" value="<?=$_SESSION['reg']['name'];?>">
						<i class="fa fa-user"></i>
					</div>
					<div class="form-group">
						<div class="flex-box">
							<a href="../index.php" class="btn btn-secondary">Главная</a>
							<button type="submit" name='reg' class="btn btn-primary">Зарегистрироваться</button>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
<? include "inc/footer.php";?>
<? unset($_SESSION['reg']); ?>
