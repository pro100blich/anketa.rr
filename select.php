
<div class="form-group">
<select name="position" class="form-control" placeholder="Должность">
<option value="" disabled="">-- Судоводители --</option>
<option value="Капинат" <?if ($text['position'] == 'Капинат'){echo "selected='selected'";}?>>Капинат</option>
<option value="1 Помощник капитана"<?if ($text['position'] == '1 Помощник капитана'){echo "selected='selected'";}?>>1 Помощник капитана</option>
<option value="2 Помощник капитана"<?if ($text['position'] == '2 Помощник капитана'){echo "selected='selected'";}?>>2 Помощник капитана</option>
<option value="3 Помощник капитана"<?if ($text['position'] == '3 Помощник капитана'){echo "selected='selected'";}?>>3 Помощник капитана</option>
<option value="4 Помощник капитана"<?if ($text['position'] == '4 Помощник капитана'){echo "selected='selected'";}?>>4 Помощник капитана</option>
<option value="" disabled="">-- Механики --</option>
<option value="Старший механик"<?if ($text['position'] == 'Старший механик'){echo "selected='selected'";}?>>Старший механик</option>
<option value="2 Механик"<?if ($text['position'] == '2 Механик'){echo "selected='selected'";}?>>2 Механик</option>
<option value="3 Механик"<?if ($text['position'] == '3 Механик'){echo "selected='selected'";}?>>3 Механик</option>
<option value="4 Механик"<?if ($text['position'] == '4 Механик'){echo "selected='selected'";}?>>4 Механик</option>
<option value="Механик ТО"<?if ($text['position'] == 'Механик ТО'){echo "selected='selected'";}?>>Механик ТО</option>
<option value="Слесарь ТО"<?if ($text['position'] == 'Слесарь ТО'){echo "selected='selected'";}?>>Слесарь ТО</option>
<option value="Электромеханик"<?if ($text['position'] == 'Электромеханик'){echo "selected='selected'";}?>>Электромеханик</option>
<option value="Электрик судовой"<?if ($text['position'] == 'Электрик судовой'){echo "selected='selected'";}?>>Электрик судовой</option>
<option value="Трал мастер"<?if ($text['position'] == 'Трал мастер'){echo "selected='selected'";}?>>Трал мастер</option>
<option value="Мастер добычи"<?if ($text['position'] == 'Мастер добычи'){echo "selected='selected'";}?>>Мастер добычи</option>
<option value="Заведующий производством"<?if ($text['position'] == 'Заведующий производством'){echo "selected='selected'";}?>>Заведующий производством</option>
<option value="Мастер производства"<?if ($text['position'] == 'Мастер производства'){echo "selected='selected'";}?>>Мастер производства</option>
<option value="Доктор судовой"<?if ($text['position'] == 'Доктор судовой'){echo "selected='selected'";}?>>Доктор судовой</option>
<option value="Повар квалифицированный"<?if ($text['position'] == 'Повар квалифицированный'){echo "selected='selected'";}?>>Повар квалифицированный</option>
<option value="Повар судовой"<?if ($text['position'] == 'Повар судовой'){echo "selected='selected'";}?>>Повар судовой</option>
<option value="РМУ"<?if ($text['position'] == 'РМУ'){echo "selected='selected'";}?>>РМУ</option>
<option value="Буфетчица"<?if ($text['position'] == 'Буфетчица'){echo "selected='selected'";}?>>Буфетчица</option>
<option value="Дневальный"<?if ($text['position'] == 'Дневальный'){echo "selected='selected'";}?>>Дневальный</option>
<option value="Оператор стиральных машин"<?if ($text['position'] == 'Оператор стиральных машин'){echo "selected='selected'";}?>>Оператор стиральных машин</option>
<option value="Токарь"<?if ($text['position'] == 'Токарь'){echo "selected='selected'";}?>>Токарь</option>
<option value="ГЭС"<?if ($text['position'] == 'ГЭС'){echo "selected='selected'";}?>>ГЭС</option>
<option value="Боцман"<?if ($text['position'] == 'Боцман'){echo "selected='selected'";}?>>Боцман</option>
<option value="Лебедчик"<?if ($text['position'] == 'Лебедчик'){echo "selected='selected'";}?>>Лебедчик</option>
<option value="Стропальщик"<?if ($text['position'] == 'Стропальщик'){echo "selected='selected'";}?>>Стропальщик</option>
<option value="Машинист помповый"<?if ($text['position'] == 'Машинист помповый'){echo "selected='selected'";}?>>Машинист помповый</option>
<option value="Газоэлектросварщик"<?if ($text['position'] == 'Газоэлектросварщик'){echo "selected='selected'";}?>>Газоэлектросварщик</option>
<option value="Водитель электро и автотележка"<?if ($text['position'] == 'Водитель электро и автотележка'){echo "selected='selected'";}?>>Водитель электро и автотележка</option>
<option value="" disabled="">-- Матрос --</option>
<option value="Матрос квалифицированный"<?if ($text['position'] == 'Матрос квалифицированный'){echo "selected='selected'";}?>>Матрос квалифицированный</option>
<option value="Матрос вахтенный"<?if ($text['position'] == 'Матрос вахтенный'){echo "selected='selected'";}?>>Матрос вахтенный</option>
<option value="Матрос судовой"<?if ($text['position'] == 'Матрос судовой'){echo "selected='selected'";}?>>Матрос судовой</option>
<option value="Матрос обработчик"<?if ($text['position'] == 'Матрос обработчик'){echo "selected='selected'";}?>>Матрос обработчик</option>
<option value="" disabled="">-- Моторист --</option>
<option value="Моторист квалифицированный"<?if ($text['position'] == 'Моторист квалифицированный'){echo "selected='selected'";}?>>Моторист квалифицированный</option>
<option value="Моторист вахтенный" <?if ($text['position'] == '>Моторист вахтенный'){echo "selected='selected'";}?>>Моторист вахтенный</option>
<option value="Моторист судовой" <?if ($text['position'] == 'Моторист судовой'){echo "selected='selected'";}?>>Моторист судовой</option>
					</select>
		           <i class="fa fa-user"></i>
		        </div>
				<div class="form-group">
					<select name="status" class="form-control" placeholder="Статус: устроен или не устроен">
						<option value="Не устроен" <?if ($text['status'] == 'Не устроен'){echo "selected='selected'";}?>>Не устроен</option>
						<option value="Устроен" <?if ($text['status'] == 'Устроен'){echo "selected='selected'";}?> >Устроен</option>
					</select>
					<i class="fa fa-user"></i>
				</div>