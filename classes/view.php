<? include "inc/header.php";?>
<?php
class view extends ACore {

	public function get_content() {

		echo '<div class="container">';

		if(!$_GET['id_text']) {
			echo 'Не правильные данные для вывода статьи';
		}
		else {
			$id_text = (int)$_GET['id_text'];
			if(!$id_text) {
				echo 'Не правильные данные для вывода статьи';
			}
			else {
				$query = "SELECT send_time,fio,date_of_birth,passport_series_number,passport_extradition,passport_issued_by,passport_unit_code,address_registration,phone,email,ulm_code,international_passport_number,address_actual,age,position,status,cause,experience,passport_facial,passport_registration,international_passport_data,marigold_book1,marigold_book2,marigold_book3,marigold_book4,marigold_book5,certificate_of_good_conduct,pzm,acb_2,otpz,transport_safety,bzhs,osps,special_boats_specialist,bspprp,first_aid_service,first_aid_service_care,initial_training_chemical_tankers,initial_training_gas_tankers,advanced_training_on_oil_tankers,advanced_training_chemical_carriers,advanced_training_gas_carriers,transportation_of_hazardous_substances,dangerous_goods_transportation,small_boat_master_mchs FROM statti WHERE id='$id_text'";
				$result = mysql_query($query);
				if(!$result) {
					exit(mysql_error());
				}
				$row = mysql_fetch_array($result,MYSQL_ASSOC);
				printf("<p style='font-size:20px'>%s %s</p>

						<p><img class='mr-3' style='margin-right:5px' width='150px' align='left' src='%s'></p>
						<p>Дата рождения: %s</p>
						<p>Серия и номер паспорта:%s</p>
						<p>Дата выдачи: %s</p>
						<p>Кем выдан: %s</p>
						<p>Код подразделения :%s</p>
						<p>Адрес регистрации: %s</p>
						<p>Телефон: %s</p>
						<p>E-mail: %s</p>
						<p>Код УЛМ: %s</p>
						<p>Номер загранпаспорта: %s</p>
						<p>Адрес фактический: %s</p>
						<p>Возраст: %s</p>
						<p>Должость: %s</p>
						<p>Устроен или нет: %s</p>
						<p>Причинае если не устроен: %s</p>
						<p>Общий стаж работы: %s </p>
						<p>Паспорт прописка:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Загранпаспорт лицевая:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Мариходная книжка ст 1:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Мариходная книжка ст 2:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Мариходная книжка ст 3:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Мариходная книжка ст 4:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Мариходная книжка ст 5:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Справка о несудимости:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>ПЗМ:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>АСВ-2:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Охрана труда и проверка знайний:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Транспортная безопасность:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>БЖС:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>ОСПС:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Специалист по специальным шлюпкам:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Борьба с пажаром по расширенной программе:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Оказание первой медецинской помощи:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Оказание первой медецинской помощи и медицинский уход:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Начальная подготовка для работы ны танкерах-газовозах:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Подготовка по расширенной программе на нефтяных танкерах:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Подготовка по расширенной программе на нефтяных химовозах:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Подготовка по расширенной программе на нефтяных газовозах:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Перевозка опасных веществ на судах:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Транспортировка опасных грузов:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>
						<p>Судоводитель маломерных судов, поднадзорных ГИМС МЧС России:<img class='mr-3' style='margin-right:5px' width='150px' src='%s'></p>"
						,$row['fio'],$row['send_time'],$row['passport_facial'],$row['date_of_birth'],$row['passport_series_number'],$row['passport_extradition'],$row['passport_issued_by'],$row['passport_unit_code'],$row['address_registration'],$row['phone'],$row['email'],$row['ulm_code'],$row['international_passport_number'],$row['address_actual'],$row['age'],$row['position'],$row['status'],$row['cause'],$row['experience'],$row['passport_registration'],$row['international_passport_data'],$row['marigold_book1'],$row['marigold_book2'],$row['marigold_book3'],$row['marigold_book4'],$row['marigold_book5'],$row['certificate_of_good_conduct'],$row['pzm'],$row['acb_2'],$row['otpz'],$row['transport_safety'],$row['bzhs'],$row['osps'],$row['special_boats_specialist'],$row['bspprp'],$row['first_aid_service'],$row['first_aid_service_care'],$row['initial_training_chemical_tankers'],$row['initial_training_gas_tankers'],$row['advanced_training_on_oil_tankers'],$row['advanced_training_chemical_carriers'],$row['advanced_training_gas_carriers'],$row['transportation_of_hazardous_substances'],$row['dangerous_goods_transportation'],$row['small_boat_master_mchs']);
			}
		}
		echo '</div>';
	}
}
include "inc/footer.php";?>