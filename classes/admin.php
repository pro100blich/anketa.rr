<? include "inc/header.php";?>
<?php
class admin extends ACore_Admin {
	// Вывод статьи
		public function get_content() {
		$query = "SELECT id,fio,send_time FROM statti";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}


		echo "<div class='container'>";
		if($_SESSION['res']) {
			echo $_SESSION['res'];
			unset($_SESSION['res']);
		}
		$row = array();
		for($i = 0; $i < mysql_num_rows($result);$i++) {
			$row = mysql_fetch_array($result,MYSQL_ASSOC);
			printf("
				<div style='display: inline-block;margin:20px 0;'>
					<div style='float:left;width:550px;'>
						ID = %s || %s %s
					</div>
					<div style='float:right'>
						<a  class='btn btn-primary' href='?option=update_statti&id_text=%s'>Редактировать</a> <a class='btn btn-danger' href='?option=delete_statti&del=%s'>Удалить</a>
					</div>
				<div>
				<hr>
				",$row['id'],$row['fio'],$row['send_time'],$row['id'],$row['id']);

		}
		echo '</div>';
	}
}
?>
<?php include "inc/footer.php";?>
