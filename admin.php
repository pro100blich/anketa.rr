<?php
session_start();
header("Content-Type:text/html;charset=utf8");

require ("config.php");
require ("../functions.php");

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
?>
<? include "inc/header.php";?>

	<div id="content">
		<div id="main">
				<form  method='POST' >
					<button type='submit' name="loguot" class="btn btn-primary">Выход</button> 
				</form>
		</div>	
	
<? include "inc/footer.php";?>


