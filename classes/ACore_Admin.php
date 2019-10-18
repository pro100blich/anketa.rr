<?php
abstract class ACore_Admin {
	// http://new1.ru/?option=admin
	protected $db;
	public function __construct() {
		$this->db = @mysql_connect(HOST,USER,PASSWORD);
		if(!$this->db) {
			exit("Ошибка соединения с базой данных".mysql_error());
		}
		if(!mysql_select_db(DB,$this->db)) {
			exit("Нет такой базы данных".mysql_error());
		}
		mysql_query("SET NAMES 'UTF8'");
	}
	protected function get_left_bar() {
	//	echo '<div class="quick-bg">
	//			<div id="spacer" style="margin-bottom:15px;">
	//				<div id="rc-bg">Разделы админки</div>
	//			</div>';

		/*
		*
		*
		 echo"<div class='container'>";
		echo"<div class='quick-links'>
				<a href='?option=admin'>Редактировать базу</a>  <a href='../index.php'>База</a>
					</div>";
		echo "</div>";
		echo "</div>";
		*
		*
		*/
	}
	public function get_body() {
		if($_POST || $_GET['del']) {
			$this->obr();
		}
		$this->get_left_bar();
		$this->get_content();
	}

	//обновить
	protected function get_text_statti($id) {
		$query = "SELECT id,fio,date_of_birth,passport_series_number,passport_extradition,passport_issued_by,passport_unit_code,address_registration,phone,email,ulm_code,international_passport_number,address_actual,age,position,status,cause,experience FROM statti WHERE id='$id'";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}
		$row = array();
		$row = mysql_fetch_array($result,MYSQL_ASSOC);
		return $row;
	}
}

?>