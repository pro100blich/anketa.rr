<?php
abstract class ACore {

	// http://new1.ru/?option=main
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

protected function menu_array() {
		$query = "SELECT id_menu,name_menu FROM menu";

		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}

		$row = array();

		for($i = 0;$i < mysql_num_rows($result); $i++) {
			$row[] = mysql_fetch_array($result, MYSQL_ASSOC);
		}
		return $row;
	}
	public function get_body() {

		$this->get_content();

	}
	abstract function get_content();

}

?>