<?php
 session_start();
header("Content-Type:text/html;charset=utf8");
require "config.php";
require "functions.php";
if($_GET['hash']) {
	
	$confirm = confirm();
	
	if($confirm === TRUE) {
		$confirm = "Ваша учетная запись активирована. Можете авторизироваться на сайте.";
	}
}
else {
	$error = "Неверная ссылка";
}
?>
<? include "inc/header.php";?>
			<?=$error;?>
			<?=$confirm;?>	
<? include "inc/footer.php";?>