<?php
session_start();
$_SESSION['status'] = isset($_POST['status']) ? $_POST['status'] : $_SESSION['status'];

?>
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
		    <form class="form-horizontal" enctype="multipart/form-data"  action='' method='POST'>
			    <input type='hidden' name='id' value='$text[id]'>
				<span class="heading">Анкета</span>
		      	<fieldset>
					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name='fio' value='<?php echo @$text["fio"];?>' placeholder="ФИО">
			           <i class="fa fa-user"></i>
			        </div>
			        <div class="form-group">
			        	Дата рождения
			           <input type="date" class="form-control" id="inputText" name="date_of_birth" value='<?php echo @$text["date_of_birth"];?>'>
			           <i class="fa fa-user"></i>
		        	</div>
					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="passport_series_number" value='<?php echo @$text["passport_series_number"];?>' placeholder="Серия и номер">
			           <i class="fa fa-user"></i>
			        </div>
					<div class="form-group">
					Дата выдачи
			           <input type="date" class="form-control" id="inputText" name="passport_extradition" value='<?php echo @$text["passport_extradition"];?>'>
			           <i class="fa fa-user"></i>
			        </div>
					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="passport_issued_by" value='<?php echo @$text["passport_issued_by"];?>' placeholder="Кем выдан">
			           <i class="fa fa-user"></i>
			        </div>
					<div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="passport_unit_code" value='<?php echo @$text["passport_unit_code"];?>' placeholder="Код подразделения">
			           <i class="fa fa-user"></i>
			        </div>

			         <div class="form-group">
			           <input type="text" class="form-control" id="inputText" name="address_registration" value='<?php echo @$text["address_registration"];?>' placeholder="Адрес регистрации">
			           <i class="fa fa-user"></i>
			        </div>
				</fieldset>
				<div class="form-group">
		           <input type="tel" class="form-control" id="inputText" name="phone" value='<?php echo @$text["phone"];?>' placeholder="Тел: +7(000)-000-00-00">
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="email" class="form-control" id="inputText" name="email" value='<?php echo @$text["email"];?>' placeholder="E-mail" >
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="number" class="form-control" id="inputText" name="ulm_code" value='<?php echo @$text["ulm_code"];?>' placeholder="Код УЛМ">
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="international_passport_number" value='<?php echo @$text["international_passport_number"];?>' placeholder="Загранпаспорт номер">
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="address_actual" value="<?php echo @$text["address_actual"];?>" placeholder="Адрес фактический">
		           <i class="fa fa-user"></i>
		        </div>
		        <div class="form-group">
		           <input type="number" class="form-control" id="inputText" name="age" value='<?php echo @$text["age"];?>' placeholder="Возраст">
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
		           <select name="position" class="form-control" placeholder="Должность" >
						<option value="" disabled>-- Судоводители --</option>
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
		        	<select name="status"  class="form-control" id="inputText"  placeholder="Статус: устроен или не устроен" >
						<option>!!!!</option>
						<option value="1" <?php if ($_SESSION['status'] == '1')
{echo "selected='selected'";}?>>Не устроен</option>
						<option value="2" <?php if ($_SESSION['status'] == '2')
{echo "selected='selected'";}?>>Устроен</option>
					</select>
		            <i class="fa fa-user"></i>
		        </div>
			    <div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="cause" value='<?php echo @$text["cause"];?>' placeholder="Причина, если не устроен">
		           <i class="fa fa-user"></i>
		        </div>
		        <div class="form-group">
		           <input type="text" class="form-control" id="inputText" name="experience" value='<?php echo @$text["experience"];?> ' placeholder="Общий стаж работы">
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
		          <p>борьба с пажаром по расширенной программе</p>
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
		           <input type='file' class="form-control" id="inputText" name='small_boat_master_mchs'>
		        </div>

				<div class="form-group">
		         <div class="flex-box">
		           <input type='submit' class="btn btn-success" name='button' value='Сохранить'>
		           </div>
		        </div>
		    </form>
     	</div>
	</div><!-- /.row -->
</div><!-- /.container -->