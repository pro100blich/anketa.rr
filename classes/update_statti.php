<?include "inc/header.php";include "inc/style.php";?>
<?php
class update_statti extends ACore_Admin {
// <input type="hidden" name="id" value='$text[passport_facial]'>
	protected function obr() {
		$path='img/'.$_POST['id'].'/';
		if(!empty($_FILES['passport_facial']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['passport_facial']['tmp_name'], $path.'/'.$_FILES['passport_facial']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$passport_facial = $path.'/'.$_FILES['passport_facial']['name'];
		}
		if(!empty($_FILES['passport_registration']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['passport_registration']['tmp_name'], $path.'/'.$_FILES['passport_registration']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$passport_registration = $path.'/'.$_FILES['passport_registration']['name'];
		}
		if(!empty($_FILES['international_passport_data']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['international_passport_data']['tmp_name'], $path.'/'.$_FILES['international_passport_data']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$international_passport_data = $path.'/'.$_FILES['international_passport_data']['name'];
		}
		if(!empty($_FILES['marigold_book1']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['marigold_book1']['tmp_name'], $path.'/'.$_FILES['marigold_book1']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book1 = $path.'/'.$_FILES['marigold_book1']['name'];
		}



		if(!empty($_FILES['marigold_book2']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['marigold_book2']['tmp_name'], $path.'/'.$_FILES['marigold_book2']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book2 = $path.'/'.$_FILES['marigold_book2']['name'];
		}



		if(!empty($_FILES['marigold_book3']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['marigold_book3']['tmp_name'], $path.'/'.$_FILES['marigold_book3']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book3 = $path.'/'.$_FILES['marigold_book3']['name'];
		}



		if(!empty($_FILES['marigold_book4']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['marigold_book4']['tmp_name'], $path.'/'.$_FILES['marigold_book4']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book4 = $path.'/'.$_FILES['marigold_book4']['name'];
		}




				if(!empty($_FILES['marigold_book5']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['marigold_book5']['tmp_name'], $path.'/'.$_FILES['marigold_book5']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$marigold_book5 = $path.'/'.$_FILES['marigold_book5']['name'];
		}


		if(!empty($_FILES['certificate_of_good_conduct']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['certificate_of_good_conduct']['tmp_name'], $path.'/'.$_FILES['certificate_of_good_conduct']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$certificate_of_good_conduct = $path.'/'.$_FILES['certificate_of_good_conduct']['name'];
		}


		if(!empty($_FILES['pzm']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['pzm']['tmp_name'], $path.'/'.$_FILES['pzm']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$pzm = $path.'/'.$_FILES['pzm']['name'];
		}

		if(!empty($_FILES['acb_2']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['acb_2']['tmp_name'], $path.'/'.$_FILES['acb_2']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$acb_2 = $path.'/'.$_FILES['acb_2']['name'];
		}
		if(!empty($_FILES['otpz']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['otpz']['tmp_name'], $path.'/'.$_FILES['otpz']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$otpz = $path.'/'.$_FILES['otpz']['name'];
		}

		if(!empty($_FILES['transport_safety']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['transport_safety']['tmp_name'], $path.'/'.$_FILES['transport_safety']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$transport_safety = $path.'/'.$_FILES['transport_safety']['name'];
		}
		if(!empty($_FILES['bzhs']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['bzhs']['tmp_name'], $path.'/'.$_FILES['bzhs']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$bzhs = $path.'/'.$_FILES['bzhs']['name'];
		}
		if(!empty($_FILES['osps']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['osps']['tmp_name'], $path.'/'.$_FILES['osps']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$osps = $path.'/'.$_FILES['osps']['name'];
		}
		if(!empty($_FILES['special_boats_specialist']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['special_boats_specialist']['tmp_name'], $path.'/'.$_FILES['special_boats_specialist']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$special_boats_specialist = $path.'/'.$_FILES['special_boats_specialist']['name'];
		}
		if(!empty($_FILES['bspprp']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['bspprp']['tmp_name'], $path.'/'.$_FILES['bspprp']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$bspprp = $path.'/'.$_FILES['bspprp']['name'];
		}
		if(!empty($_FILES['first_aid_service']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['first_aid_service']['tmp_name'], $path.'/'.$_FILES['first_aid_service']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$first_aid_service = $path.'/'.$_FILES['first_aid_service']['name'];
		}
		if(!empty($_FILES['first_aid_service_care']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['first_aid_service_care']['tmp_name'], $path.'/'.$_FILES['first_aid_service_care']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$first_aid_service_care = $path.'/'.$_FILES['first_aid_service_care']['name'];
		}


if(!empty($_FILES['initial_training_chemical_tankers']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['initial_training_chemical_tankers']['tmp_name'], $path.'/'.$_FILES['initial_training_chemical_tankers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$initial_training_chemical_tankers = $path.'/'.$_FILES['initial_training_chemical_tankers']['name'];
		}


if(!empty($_FILES['initial_training_gas_tankers']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['initial_training_gas_tankers']['tmp_name'], $path.'/'.$_FILES['initial_training_gas_tankers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$initial_training_gas_tankers = $path.'/'.$_FILES['initial_training_gas_tankers']['name'];
		}


if(!empty($_FILES['advanced_training_on_oil_tankers']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['advanced_training_on_oil_tankers']['tmp_name'], $path.'/'.$_FILES['advanced_training_on_oil_tankers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$advanced_training_on_oil_tankers = $path.'/'.$_FILES['advanced_training_on_oil_tankers']['name'];
		}


if(!empty($_FILES['advanced_training_chemical_carriers']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['advanced_training_chemical_carriers']['tmp_name'], $path.'/'.$_FILES['advanced_training_chemical_carriers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$advanced_training_chemical_carriers = $path.'/'.$_FILES['advanced_training_chemical_carriers']['name'];
		}


if(!empty($_FILES['advanced_training_gas_carriers']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['advanced_training_gas_carriers']['tmp_name'], $path.'/'.$_FILES['advanced_training_gas_carriers']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$advanced_training_gas_carriers = $path.'/'.$_FILES['advanced_training_gas_carriers']['name'];
		}


if(!empty($_FILES['transportation_of_hazardous_substances']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['transportation_of_hazardous_substances']['tmp_name'], $path.'/'.$_FILES['transportation_of_hazardous_substances']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$transportation_of_hazardous_substances = $path.'/'.$_FILES['transportation_of_hazardous_substances']['name'];
		}


if(!empty($_FILES['dangerous_goods_transportation']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['dangerous_goods_transportation']['tmp_name'], $path.'/'.$_FILES['dangerous_goods_transportation']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$dangerous_goods_transportation = $path.'/'.$_FILES['dangerous_goods_transportation']['name'];
		}


if(!empty($_FILES['small_boat_master_mchs']['tmp_name'])) {
			if (!file_exists($path)) {
    		mkdir($path, 0700,true);
			}
			if(!move_uploaded_file($_FILES['small_boat_master_mchs']['tmp_name'], $path.'/'.$_FILES['small_boat_master_mchs']['name'])) {
				exit("Не удалось загрузить изображение");
			}
			$small_boat_master_mchs = $path.'/'.$_FILES['small_boat_master_mchs']['name'];
		}





	$id = $_POST['id'];
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


		if(empty($fio) /*|| empty($text) || empty($discription)*/) {
			exit("Не заполнены обязательные поля");
		}

		$query = "UPDATE  statti SET fio='$fio',date_of_birth='$date_of_birth',passport_series_number='$passport_series_number',passport_extradition='$passport_extradition',passport_issued_by='$passport_issued_by',passport_unit_code='$passport_unit_code',address_registration='$address_registration',phone='$phone',email='$email',ulm_code='$ulm_code',international_passport_number='$international_passport_number',address_actual='$address_actual',age='$age',position='$position',status='$status',cause='$cause',phone='$phone',experience='$experience',passport_facial='$passport_facial',passport_registration='$passport_registration',international_passport_data='$international_passport_data',marigold_book1='$marigold_book1',marigold_book2='$marigold_book2',marigold_book3='$marigold_book3',marigold_book4='$marigold_book4',marigold_book5='$marigold_book5',certificate_of_good_conduct='$certificate_of_good_conduct',pzm='$pzm',acb_2='$acb_2',otpz='$otpz',transport_safety='$transport_safety',bzhs='$bzhs',osps='$osps',special_boats_specialist='$special_boats_specialist',bspprp='$bspprp',first_aid_service='$first_aid_service',first_aid_service_care='$first_aid_service_care',initial_training_chemical_tankers='$initial_training_chemical_tankers',initial_training_gas_tankers='$initial_training_gas_tankers',advanced_training_on_oil_tankers='$advanced_training_on_oil_tankers',advanced_training_chemical_carriers='$advanced_training_chemical_carriers',advanced_training_gas_carriers='$advanced_training_gas_carriers',transportation_of_hazardous_substances='$transportation_of_hazardous_substances',dangerous_goods_transportation='$dangerous_goods_transportation',small_boat_master_mchs='$small_boat_master_mchs' WHERE id='$id'";
		if(!mysql_query($query)) {
			exit(mysql_error());
		}
		else {
			$_SESSION['res'] = "Изменения сохранены";
		echo "<script type='text/javascript'> window.location = '?option=admin'</script>";
			exit;
		}
	}

	public function get_content() {

		if($_GET['id_text']) {
			$id_text = (int)$_GET['id_text'];
		}
		else {
			exit('НЕ правильные данные для этой страницы');
		}

		$text = $this->get_text_statti($id_text);
		echo "<div id='main'>";
		if($_SESSION['res']) {
			echo $_SESSION['res'];
			unset($_SESSION['res']);
		}
print <<<HEREDOC
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
		    <form class="form-horizontal" enctype="multipart/form-data"  action='' method='POST'>
		    <input type='hidden' name='id' value='$text[id]'>
		        <span class="heading">Анкета</span>
		      	<fieldset>

					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name='fio' value='$text[fio]' placeholder="ФИО">
			           <i class="fa fa-user"></i>
			        </div>
			        <div class="form-group">
			        	Дата рождения
			           <input type="date" class="form-control" id="inputText" name="date_of_birth" value='$text[date_of_birth]'>
			           <i class="fa fa-user"></i>
		        	</div>
					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="passport_series_number" value='$text[passport_series_number]' placeholder="Серия и номер">
			           <i class="fa fa-user"></i>
			        </div>
					<div class="form-group">
					Дата выдачи
			           <input type="date" class="form-control" id="inputText" name="passport_extradition" value='$text[passport_extradition]'>
			           <i class="fa fa-user"></i>
			        </div>
					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="passport_issued_by" value='$text[passport_issued_by]' placeholder="Кем выдан">
			           <i class="fa fa-user"></i>
			        </div>
					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="passport_unit_code" value='$text[passport_unit_code]' placeholder="Код подразделения">
			           <i class="fa fa-user"></i>
			        </div>

			         <div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="address_registration" value='$text[address_registration]' placeholder="Адрес регистрации">
			           <i class="fa fa-user"></i>
			        </div>
				</fieldset>
				<div class="form-group">
		           <input type="tel" class="form-control" id="inputText" name="phone" value='$text[phone]' placeholder="Тел: +7(000)-000-00-00">
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="email" class="form-control" id="inputText" name="email" value='$text[email]' placeholder="E-mail" >
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="number" class="form-control" id="inputText" name="ulm_code" value='$text[ulm_code]' placeholder="Код УЛМ">
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="international_passport_number" value='$text[international_passport_number]' placeholder="Загранпаспорт номер">
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="address_actual" value='$text[address_actual]' placeholder="Адрес фактический">
		           <i class="fa fa-user"></i>
		        </div>
		        <div class="form-group">
		           <input type="number" class="form-control" id="inputText" name="age" value='$text[age]' placeholder="Возраст">
		           <i class="fa fa-user"></i>
		        </div>
		        <div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="cause" value='$text[cause]' placeholder="Причина, если не устроен">
		           <i class="fa fa-user"></i>
		        </div>
		        <div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="experience" value='$text[experience]' placeholder="Общий стаж работы">
		           <i class="fa fa-user"></i>
		        </div>

 				<div class="form-group">
		          <p>Паспорт лицевая</p>
		           <input type='file' class="form-control" id="inputText" name='passport_facial' >
		        </div>
		        <div class="form-group">
		          <p>Паспорт прописка</p>
		           <input type='file' class="form-control" id="inputText" name='passport_registration' >
		        </div>
				<div class="form-group">
		          <p>Загранпаспорт лицевая</p>
		           <input type='file' class="form-control" id="inputText" name='international_passport_data' >
		        </div>
				<div class="form-group">
		          <p>Мариходная книжка ст 1</p>
		           <input type='file' class="form-control" id="inputText" name='marigold_book1' >
		        </div>
		        <div class="form-group">
		          <p>Мариходная книжка ст 2</p>
		           <input type='file' class="form-control" id="inputText" name='marigold_book2' >
		        </div>
		        <div class="form-group">
		          <p>Мариходная книжка ст 3</p>
		           <input type='file' class="form-control" id="inputText" name='marigold_book3' >
		        </div>
		        <div class="form-group">
		          <p>Мариходная книжка ст 4</p>
		           <input type='file' class="form-control" id="inputText" name='marigold_book4' >
		        </div>
		        <div class="form-group">
		          <p>Мариходная книжка ст 5</p>
		           <input type='file' class="form-control" id="inputText" name='marigold_book5' >
		        </div>
		        <div class="form-group">
		          <p>Справка о несудимости</p>
		           <input type='file' class="form-control" id="inputText" name='certificate_of_good_conduct' >
		        </div>
		        <div class="form-group">
		          <p>ПЗМ</p>
		           <input type='file' class="form-control" id="inputText" name='pzm' >
		        </div>
		        <div class="form-group">
		          <p>АСВ-2</p>
		           <input type='file' class="form-control" id="inputText" name='acb_2' >
		        </div>
		        <div class="form-group">
		          <p>Охрана труда и проверка знайний</p>
		           <input type='file' class="form-control" id="inputText" name='otpz' >
		        </div>
		        <div class="form-group">
		          <p>Транспортная безопасность</p>
		           <input type='file' class="form-control" id="inputText" name='transport_safety' >
		        </div>
		        <div class="form-group">
		          <p>БЖС</p>
		           <input type='file' class="form-control" id="inputText" name='bzhs' >
		        </div>
		        <div class="form-group">
		          <p>ОСПС</p>
		           <input type='file' class="form-control" id="inputText" name='osps' >
		        </div>
		        <div class="form-group">
		          <p>Специалист по специальным шлюпкам</p>
		           <input type='file' class="form-control" id="inputText" name='special_boats_specialist' >
		        </div>
		        <div class="form-group">
		          <p>Борьба с пажаром по расширенной программе</p>
		           <input type='file' class="form-control" id="inputText" name='bspprp' >
		        </div>
		        <div class="form-group">
		          <p>Оказание первой медецинской помощи</p>
		           <input type='file' class="form-control" id="inputText" name='first_aid_service' >
		        </div>
		        <div class="form-group">
		          <p>Оказание первой медецинской помощи и медицинский уход</p>
		           <input type='file' class="form-control" id="inputText" name='first_aid_service_care' >
		        </div>
		        <div class="form-group">
		          <p>Начальная подготовка для работы на нефтяных танкерах и танкерах-химовозах</p>
		           <input type='file' class="form-control" id="inputText" name='initial_training_chemical_tankers' >
		        </div>
		       <div class="form-group">
		          <p>Начальная подготовка для работы ны танкерах-газовозах</p>
		           <input type='file' class="form-control" id="inputText" name='initial_training_gas_tankers' >
		        </div>
		        <div class="form-group">
		          <p>Подготовка по расширенной программе на нефтяных танкерах</p>
		           <input type='file' class="form-control" id="inputText" name='advanced_training_on_oil_tankers' >
		        </div>
		        <div class="form-group">
		          <p>Подготовка по расширенной программе на нефтяных химовозах</p>
		           <input type='file' class="form-control" id="inputText" name='advanced_training_chemical_carriers'>
		        </div>
		        <div class="form-group">
		          <p>Подготовка по расширенной программе на нефтяных газовозах</p>
		           <input type='file' class="form-control" id="inputText" name='advanced_training_gas_carriers' >
		        </div>
		        <div class="form-group">
		          <p>Перевозка опасных веществ на судах</p>
		           <input type='file' class="form-control" id="inputText" name='transportation_of_hazardous_substances' >
		        </div>
		        <div class="form-group">
		          <p>Транспортировка опасных грузов</p>
		           <input type='file' class="form-control" id="inputText" name='dangerous_goods_transportation' >
		        </div>
				<div class="form-group">
		          <p>Судоводитель маломерных судов, поднадзорных ГИМС МЧС России</p>
		           <input type='file' class="form-control" id="inputText"  name='small_boat_master_mchs'>
		        </div>
HEREDOC;
include "select.php";
echo "
		        <div class='form-group'>
		         <div class='flex-box'>
		           <input type='submit' class='btn btn-success' name='button' value='Сохранить'>
		           </div>
		        </div>
		    </form>
     	</div>
	</div><!-- /.row -->
</div><!-- /.container -->
";



	}
}
?>
<? include "inc/footer.php";?>