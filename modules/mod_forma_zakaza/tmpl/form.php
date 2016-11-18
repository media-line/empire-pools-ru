<div id="calc_dostavki">
	<form method="post" name="calc_dostavki">
	<table border="0">
		<tr>
			<td colspan="2">
				<label for="comany_name">Название компании-дилера</label><br />
				<input type="text" id="comany_name" name="comany_name" class="requred" value="" />
			</td>
		</tr>
		<tr>
			<td><label for="town">Город</label></td>
			<td><input type="text" id="town" name="town" class="requred" value="" /></td>
		</tr>
		<tr>
			<td><label for="phone">Телефон</label></td>
			<td><input type="text" id="phone" name="phone" class="requred" value="" /></td>
		</tr>
		<tr>
			<td><label for="bassein_model">Модель бассейна</label></td>
			<td>
				<select name="bassein_model" id="bassein_model">
					<?
						foreach($basseins as $k=>$t)	{
							echo'<option value="'.$t->title.'">'.$t->title.'</option>';
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="bassein_color">Цвет бассейна</label></td>
			<td>
				<select name="bassein_color" id="bassein_color">
					<?
						foreach($colors as $k=>$t)	{
							echo'<option value="'.$t.'">'.$t.'</option>';
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="bassein_category">Категория</label></td>
			<td>
				<select id="bassein_category" name="bassein_category">
					<option value="LUX">LUX</option>
					<option value="DELUX">DELUX</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Опции</td>
			<td>
				<div><input type="checkbox" name="options[]" id="protection_press" value="Protection Press" /><label for="protection_press">Protection Press</label></div>
				<div><input type="checkbox" name="options[]" id="termopool" value="Termopool" /><label for="termopool">Termopool</label></div>
				<div><input type="checkbox" name="options[]" id="pooldamper" value="Pooldamper" /><label for="pooldamper">Pooldamper</label></div>
			</td>
		</tr>
		<tr>
			<td>Включать минимальный комплект<br />оборудования PERAQVA</td>
			<td>
				<div><input type="radio" name="peraqva" id="peraqva_yes" value="Да" /><label for="peraqva_yes">Да</label></div>
				<div><input type="radio" name="peraqva" id="peraqva_no" value="Нет" /><label for="peraqva_no">Нет</label></div>
			</td>
		</tr>
		<tr>
			<td><label for="add_oborud">Дополнительное оборудование</label></td>
			<td><input type="text" id="add_oborud" name="add_oborud" value="" /></td>
		</tr>
		<tr>
			<td>Рассчитать стоимость доставки</td>
			<td>
				<div><input type="radio" name="calc_dostavka" id="calc_dostavka_yes" value="Да" /><label for="calc_dostavka_yes">Да</label></div>
				<div><input type="radio" name="calc_dostavka" id="calc_dostavka_no" value="Нет" /><label for="calc_dostavka_no">Нет</label></div>
			</td>
		</tr>
		<tr>
			<td>Оплата</td>
			<td>
				<div><input type="radio" name="oplata" id="nal" value="Наличными" /><label for="nal">Наличными</label></div>
				<div><input type="radio" name="oplata" id="bez_nal" value="Безналичными" /><label for="bez_nal">Безналичными</label></div>
			</td>
		</tr>
		<tr>
			<td>Декор бассейна</td>
			<td>
				<div><input type="checkbox" name="bassein_decor[]" id="bassein_decor_1" value="Выделение ступеней" /><label for="bassein_decor_1">Выделение ступеней</label></div>
				<div><input type="checkbox" name="bassein_decor[]" id="bassein_decor_2" value="Русалка" /><label for="bassein_decor_2">Русалка</label></div>
				<div><input type="checkbox" name="bassein_decor[]" id="bassein_decor_3" value="Декоративный фриз" /><label for="bassein_decor_3">Декоративный фриз</label></div>
			</td>
		</tr>
		<tr>
			<td>Комплектация<br />бордюрный камень</td>
			<td>
				<div><input type="radio" name="border_kamen" id="border_kamen_yes" value="Да" /><label for="border_kamen_yes">Да</label></div>
				<div><input type="radio" name="border_kamen" id="border_kamen_no" value="Нет" /><label for="border_kamen_no">Нет</label></div>
			</td>
		</tr>
		<tr>
			<td>Покрывало Coverpool</td>
			<td>
				<div><input type="radio" name="coverpool" id="coverpool_yes" value="Да" /><label for="coverpool_yes">Да</label></div>
				<div><input type="radio" name="coverpool" id="coverpool_no" value="Нет" /><label for="coverpool_no">Нет</label></div>
			</td>
		</tr>
		
	</table>
	
	<input type="hidden" name="sending_form" value="1" />
	<input type="submit" value="Отправить" />
	</form>
</div>