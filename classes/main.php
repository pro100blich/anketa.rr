<? include "inc/header.php";?>
<?php
class main extends ACore {

	public function get_content() {
		$query = "SELECT id,fio,send_time,passport_facial FROM statti ORDER BY send_time DESC";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}

		echo '<div class="container">';
		$row = array();
		for($i = 0; $i < mysql_num_rows($result);$i++) {
			$row = mysql_fetch_array($result,MYSQL_ASSOC);
			printf("<div style='margin:2px;border-bottom:2px solid #c2c2c2; padding-top: 10px;'>
						<p style='font-size:20px;'>Номер: %s || %s %s</p>

						<p><img class='mr-3' style='margin-right:5px' width='70px'  align='left' src='%s'></p>
						<p style='color:red'><a href='?option=view&id_text=%s'>Читать далее...</a></p>
					<br><br><br><br><br>
					</div>
					",$row['id'],$row['fio'],$row['send_time'],$row['passport_facial'],$row['id']);
		}
		echo '</div>';
	}
}
?>
<? include "inc/footer.php";?>