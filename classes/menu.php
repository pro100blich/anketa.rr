<?php
class menu extends ACore {
	public function get_content() {
		echo '<div id="main">';
				if(!$_GET['id_menu']) {
			echo 'Не правильные данные для вывода меню';
		}
		else {
			$id_menu = (int)$_GET['id_menu'];
			if(!$id_menu) {
				echo 'Не правильные данные для вывода меню';
			}
			else {
				$query = "SELECT id_menu,name_menu,text_menu FROM menu WHERE id_menu='$id_menu'";
				$result = mysql_query($query);
				if(!$result) {
					exit(mysql_error());
				}
				$row = mysql_fetch_array($result,MYSQL_ASSOC);
				printf("<div class='container'><p style='font-size:18px'>%s</p>
						<p>%s</p></div>"
						,$row['name_menu'],$row['text_menu']);
			}
		}
		echo '</div>
			</div>';
	}
}
?>