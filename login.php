<?php
session_start();
header("Content-Type:text/html;charset=utf8");
require "config.php";
require "functions.php";
if (isset($_SESSION['sess']))
{
		if(!check_user()) {
		header("Location:../index.php");
		exit();
	}
	if(isset($_POST['loguot'])) {
		$msg = logout();
		if($msg === TRUE) {
			$_SESSION['msg'] = "Вы вышли из системы";
			header("Location:../index.php");
			exit();
		}
	}
include "inc/header.php";
	print('<div id="content">
			<div id="main">
					<form  method="POST" >
						<button type="submit" name="loguot" class="btn btn-primary">Выход</button>
					</form>
			</div>	');

	include "inc/footer.php";


}
else{

	if(isset($_POST['login']) && isset($_POST['password'])) {
	$msg = login($_POST);
	if($msg === TRUE) {
		header("Location:../index.php");
	}
	else {
		$_SESSION['msg'] = $msg;
		header("Location:".$_SERVER['PHP_SELF']);
	}
	exit();
	}
	include "inc/header.php";
include "inc/style.php";

		$_SESSION['msg'];
		unset($_SESSION['msg']);
		print('<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<form class="form-horizontal"  method="POST">
					<span class="heading">Вход</span>
					<div class="form-group">
						<input type="text" class="form-control" id="inputText" name="login" placeholder="Логин" >
						<i class="fa fa-user"></i>
					</div>
					<div class="form-group help">
						<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Пароль">
						<i class="fa fa-lock"></i>
					</div>
					<div class="form-group help">
						Запомнить:
						<input type="checkbox" name="member" value="1">
						<div class="flex-box">
							<a href="index.php" class="btn btn-secondary">Главная</a>

							<button type="submit" name="loguot" class="btn btn-primary">Вход</button>
						</div>
					</div>
					<a href="registration.php">Регистрация</a> | <a href="returnpas.php">Забыли пароль?</a>
				</form>

			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->');

include "inc/footer.php";
}

?>