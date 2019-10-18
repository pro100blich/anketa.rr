<? include "inc/header.php";include "inc/style.php";?>
<?php
class add_statti extends ACore_Admin {
	protected function obr() {

if(!empty($_FILES['passport_facial']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['passport_facial']['tmp_name'], $path.'/'.$_FILES['passport_facial']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$passport_facial = $path.'/'.$_FILES['passport_facial']['name'];
		}
		if(!empty($_FILES['passport_registration']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['passport_registration']['tmp_name'], $path.'/'.$_FILES['passport_registration']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$passport_registration = $path.'/'.$_FILES['passport_registration']['name'];
		}
		if(!empty($_FILES['international_passport_data']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['international_passport_data']['tmp_name'], $path.'/'.$_FILES['international_passport_data']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$international_passport_data = $path.'/'.$_FILES['international_passport_data']['name'];
		}
		if(!empty($_FILES['marigold_book1']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['marigold_book1']['tmp_name'], $path.'/'.$_FILES['marigold_book1']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book1 = $path.'/'.$_FILES['marigold_book1']['name'];
		}



		if(!empty($_FILES['marigold_book2']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['marigold_book2']['tmp_name'], $path.'/'.$_FILES['marigold_book2']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book2 = $path.'/'.$_FILES['marigold_book2']['name'];
		}



		if(!empty($_FILES['marigold_book3']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['marigold_book3']['tmp_name'], $path.'/'.$_FILES['marigold_book3']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book3 = $path.'/'.$_FILES['marigold_book3']['name'];
		}



		if(!empty($_FILES['marigold_book4']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['marigold_book4']['tmp_name'], $path.'/'.$_FILES['marigold_book4']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book4 = $path.'/'.$_FILES['marigold_book4']['name'];
		}
		if(!empty($_FILES['marigold_book5']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['marigold_book5']['tmp_name'], $path.'/'.$_FILES['marigold_book5']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book5 = $path.'/'.$_FILES['marigold_book5']['name'];
		}
		if(!empty($_FILES['certificate_of_good_conduct']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['certificate_of_good_conduct']['tmp_name'], $path.'/'.$_FILES['certificate_of_good_conduct']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$certificate_of_good_conduct = $path.'/'.$_FILES['certificate_of_good_conduct']['name'];
		}


		if(!empty($_FILES['pzm']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['pzm']['tmp_name'], $path.'/'.$_FILES['pzm']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$pzm = $path.'/'.$_FILES['pzm']['name'];
		}

		if(!empty($_FILES['acb_2']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['acb_2']['tmp_name'], $path.'/'.$_FILES['acb_2']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$acb_2 = $path.'/'.$_FILES['acb_2']['name'];
		}
		if(!empty($_FILES['otpz']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['otpz']['tmp_name'], $path.'/'.$_FILES['otpz']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$otpz = $path.'/'.$_FILES['otpz']['name'];
		}

		if(!empty($_FILES['transport_safety']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['transport_safety']['tmp_name'], $path.'/'.$_FILES['transport_safety']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$transport_safety = $path.'/'.$_FILES['transport_safety']['name'];
		}
		if(!empty($_FILES['bzhs']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['bzhs']['tmp_name'], $path.'/'.$_FILES['bzhs']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$bzhs = $path.'/'.$_FILES['bzhs']['name'];
		}
		if(!empty($_FILES['osps']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['osps']['tmp_name'], $path.'/'.$_FILES['osps']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$osps = $path.'/'.$_FILES['osps']['name'];
		}
		if(!empty($_FILES['special_boats_specialist']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['special_boats_specialist']['tmp_name'], $path.'/'.$_FILES['special_boats_specialist']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$special_boats_specialist = $path.'/'.$_FILES['special_boats_specialist']['name'];
		}
		if(!empty($_FILES['bspprp']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['bspprp']['tmp_name'], $path.'/'.$_FILES['bspprp']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$bspprp = $path.'/'.$_FILES['bspprp']['name'];
		}
		if(!empty($_FILES['first_aid_service']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['first_aid_service']['tmp_name'], $path.'/'.$_FILES['first_aid_service']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$first_aid_service = $path.'/'.$_FILES['first_aid_service']['name'];
		}
		if(!empty($_FILES['first_aid_service_care']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['first_aid_service_care']['tmp_name'], $path.'/'.$_FILES['first_aid_service_care']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$first_aid_service_care = $path.'/'.$_FILES['first_aid_service_care']['name'];
		}


if(!empty($_FILES['initial_training_chemical_tankers']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['initial_training_chemical_tankers']['tmp_name'], $path.'/'.$_FILES['initial_training_chemical_tankers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$initial_training_chemical_tankers = $path.'/'.$_FILES['initial_training_chemical_tankers']['name'];
		}


if(!empty($_FILES['initial_training_gas_tankers']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['initial_training_gas_tankers']['tmp_name'], $path.'/'.$_FILES['initial_training_gas_tankers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$initial_training_gas_tankers = $path.'/'.$_FILES['initial_training_gas_tankers']['name'];
		}


if(!empty($_FILES['advanced_training_on_oil_tankers']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['advanced_training_on_oil_tankers']['tmp_name'], $path.'/'.$_FILES['advanced_training_on_oil_tankers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$advanced_training_on_oil_tankers = $path.'/'.$_FILES['advanced_training_on_oil_tankers']['name'];
		}


if(!empty($_FILES['advanced_training_chemical_carriers']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['advanced_training_chemical_carriers']['tmp_name'], $path.'/'.$_FILES['advanced_training_chemical_carriers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$advanced_training_chemical_carriers = $path.'/'.$_FILES['advanced_training_chemical_carriers']['name'];
		}


if(!empty($_FILES['advanced_training_gas_carriers']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['advanced_training_gas_carriers']['tmp_name'], $path.'/'.$_FILES['advanced_training_gas_carriers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$advanced_training_gas_carriers = $path.'/'.$_FILES['advanced_training_gas_carriers']['name'];
		}


if(!empty($_FILES['transportation_of_hazardous_substances']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['transportation_of_hazardous_substances']['tmp_name'], $path.'/'.$_FILES['transportation_of_hazardous_substances']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$transportation_of_hazardous_substances = $path.'/'.$_FILES['transportation_of_hazardous_substances']['name'];
		}


if(!empty($_FILES['dangerous_goods_transportation']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['dangerous_goods_transportation']['tmp_name'], $path.'/'.$_FILES['dangerous_goods_transportation']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$dangerous_goods_transportation = $path.'/'.$_FILES['dangerous_goods_transportation']['name'];
		}


if(!empty($_FILES['small_boat_master_mchs']['tmp_name'])) {
			if(!move_uploaded_file($_FILES['small_boat_master_mchs']['tmp_name'], $path.'/'.$_FILES['small_boat_master_mchs']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$small_boat_master_mchs = $path.'/'.$_FILES['small_boat_master_mchs']['name'];
		}



    $send_time = date("Y-m-d h:i:s",time());
	$fio = $_POST['fio'];
    $date_of_birth = $_POST['date_of_birth'];
    $passport_series_number = $_POST['passport_series_number'];
    $passport_extradition = $_POST['passport_extradition'];
    $passport_issued_by = $_POST['passport_issued_by'];
    $passport_unit_code = $_POST['passport_unit_code'];
    $address_registration = $_POST['address_registration'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $ulm_code = $_POST['ulm_code'];
    $international_passport_number = $_POST['international_passport_number'];
    $address_actual = $_POST['address_actual'];
    $age = $_POST['age'];
    $position = $_POST['position'];
    $status = $_POST['status'];
    $cause = $_POST['cause'];
    $experience = $_POST['experience'];


		/*if(empty($fio) || empty($name) || empty($middle_name)) {
			exit("Не заполнены обязательные поля");
		}
		*/
		$query = " INSERT INTO statti
						(send_time,fio,date_of_birth,passport_series_number,passport_extradition,passport_issued_by,passport_unit_code,address_registration,phone,email,ulm_code,international_passport_number,address_actual,age,position,status,cause,experience,passport_facial,passport_registration,international_passport_data,marigold_book1,marigold_book2,marigold_book3,marigold_book4,marigold_book5,certificate_of_good_conduct,pzm,acb_2,otpz,transport_safety,bzhs,osps,special_boats_specialist,bspprp,first_aid_service,first_aid_service_care,initial_training_chemical_tankers,initial_training_gas_tankers,advanced_training_on_oil_tankers,advanced_training_chemical_carriers,advanced_training_gas_carriers,transportation_of_hazardous_substances,dangerous_goods_transportation,small_boat_master_mchs)
					VALUES ('$send_time','$fio','$date_of_birth','$passport_series_number','$passport_extradition','$passport_issued_by','$passport_unit_code','$address_registration','$phone','$email','$ulm_code','$international_passport_number','$address_actual','$age','$position','$status','$cause','$experience','$passport_facial','$passport_registration','$international_passport_data','$marigold_book1','$marigold_book2','$marigold_book3','$marigold_book4','$marigold_book5','$certificate_of_good_conduct','$pzm','$acb_2','$otpz','$transport_safety','$bzhs','$osps','$special_boats_specialist','$bspprp','$first_aid_service','$first_aid_service_care','$initial_training_chemical_tankers','$initial_training_gas_tankers','$advanced_training_on_oil_tankers','$advanced_training_chemical_carriers','$advanced_training_gas_carriers','$transportation_of_hazardous_substances','$dangerous_goods_transportation','$small_boat_master_mchs')";
		if(!mysql_query($query)) {
			exit(mysql_error());
		}
		else {
			$_SESSION['res'] = "Чувак добавлен";


		}
	}

	public function get_content() {
		echo "<div id='main'>";
		if($_SESSION['res']) {
			echo $_SESSION['res'];
			unset($_SESSION['res']);
		}
print <<<HEREDOC
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
		    <form class="form-horizontal" enctype='multipart/form-data'  action='' method='POST'>
				<span class="heading">Анкета</span>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="fio" placeholder="ФИО">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					Дата рождения
					<input type="date" class="form-control" id="inputText" name="date_of_birth">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="passport_series_number" placeholder="Серия и номер">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					Дата выдачи
					<input type="date" class="form-control" id="inputText" name="passport_extradition">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="passport_issued_by" placeholder="Кем выдан">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="passport_unit_code" placeholder="Код подразделения">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="address_registration" placeholder="Адрес регистрации">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="inputText" name="phone" placeholder="Тел: +7(000)-000-00-00">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="inputText" name="email" placeholder="E-mail" >
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="number" class="form-control" id="inputText" name="ulm_code" placeholder="Код УЛМ">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="international_passport_number" placeholder="Загранпаспорт номер">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="address_actual" placeholder="Адрес фактический">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="number" class="form-control" id="inputText" name="age" placeholder="Возраст">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<select name="position" class="form-control" placeholder="Должность">
						<option value="">-- Судоводители --</option>
						<option value="Капинат">Капинат</option>
						<option value="1 Помощник капитана">1 Помощник капитана</option>
						<option value="2 Помощник капитана">2 Помощник капитана</option>
						<option value="3 Помощник капитана">3 Помощник капитана</option>
						<option value="4 Помощник капитана">4 Помощник капитана</option>
						<option value="">-- Механики --</option>
						<option value="Старший механик">Старший механик</option>
						<option value="2 Механик">2 Механик</option>
						<option value="3 Механик">3 Механик</option>
						<option value="4 Механик">4 Механик</option>
						<option value="Механик ТО">Механик ТО</option>
						<option value="Слесарь ТО">Слесарь ТО</option>
						<option value="Электромеханик">Электромеханик</option>
						<option value="Электрик судовой">Электрик судовой</option>
						<option value="Трал мастер">Трал мастер</option>
						<option value="Мастер добычи">Мастер добычи</option>
						<option value="Заведующий производством">Заведующий производством</option>
						<option value="Мастер производства">Мастер производства</option>
						<option value="Доктор судовой">Доктор судовой</option>
						<option value="Повар квалифицированный">Повар квалифицированный</option>
						<option value="Повар судовой">Повар судовой</option>
						<option value="РМУ">РМУ</option>
						<option value="Буфетчица">Буфетчица</option>
						<option value="Дневальный">Дневальный</option>
						<option value="Оператор стиральных машин">Оператор стиральных машин</option>
						<option value="Токарь">Токарь</option>
						<option value="ГЭС">ГЭС</option>
						<option value="Боцман">Боцман</option>
						<option value="Лебедчик">Лебедчик</option>
						<option value="Стропальщик">Стропальщик</option>
						<option value="Машинист помповый">Машинист помповый</option>
						<option value="Газоэлектросварщик">Газоэлектросварщик</option>
						<option value="Водитель электро и автотележка">Водитель электро и автотележка</option>
						<option value="">-- Матрос --</option>
						<option value="Матрос квалифицированный">Матрос квалифицированный</option>
						<option value="Матрос вахтенный">Матрос вахтенный</option>
						<option value="Матрос судовой">Матрос судовой</option>
						<option value="Матрос обработчик">Матрос обработчик</option>
						<option value="">-- Моторист --</option>
						<option value="Моторист квалифицированный">Моторист квалифицированный</option>
						<option value="Моторист вахтенный">Моторист вахтенный</option>
						<option value="Моторист судовой">Моторист судовой</option>
					</select>
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<select name="status" class="form-control" placeholder="Статус: устроен или не устроен">
						<option value="Не устроен">Не устроен</option>
						<option value="Устроен">Устроен</option>
					</select>
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="cause" placeholder="Причина, если не устроен">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="inputText" name="experience" placeholder="Общий стаж работы">
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group">
					<div class="flex-box">
						<button type="submit" name="button" class="btn btn-primary">Добавить</button>
					</div>
				</div>
		    </form>
     	</div>
	</div><!-- /.row -->
</div><!-- /.container -->

HEREDOC;
	}
}
?>

<? include "inc/footer.php";?>



<!--

<form enctype='multipart/form-data' action='' method='POST'>
<p>Имя:<br />
<input type='text' name='title' style='width:420px;'>
</p>
<p>Краткое описание:<br />
<textarea name='discription' cols='50' rows='7'></textarea>
</p>
<p>Текст:<br />
<textarea name='text' cols='50' rows='7'></textarea>
</p>

<p>Изображение:<br />
<input type='file' name='img_src'>
</p>
<p>Изображение:<br />
<input type='file' name='img_sr'>
</p>
<p>Изображение:<br />
<input type='file' name='img_s'>
</p>
<input type='submit' name='button' value='Сохранить'>
</from>
-->