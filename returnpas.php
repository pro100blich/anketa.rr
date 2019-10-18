<?php
session_start();
header("Content-Type:text/html;charset=utf8");
require "config.php";
require "functions.php";	
if(isset($_POST['email'])) {
	$msg = get_password($_POST['email']);
	if($msg === TRUE) {
		$_SESSION['msg'] = "Новый пароль выслан Вам на почту";
		header("Location:login.php");
	}
	else {
		$_SESSION['msg'] = $msg;
		header("Location:".$_SERVER['PHP_SELF']);
	}
	exit();
}
?>
<? include "inc/header.php";?>
	<h1>Введите свой почтовый адресс</h1>
	<div class="s">
		<?=$_SESSION['msg']?>
		<?unset($_SESSION['msg'])?>
	</div>
	<form method='POST'>
		<label>
			EMAIL<br>
			<input type='text' name='email'>
		</label><br>
		<input style="float:left" type='submit' value='Вход'>
	</form>	
<? include "inc/footer.php";?>	
