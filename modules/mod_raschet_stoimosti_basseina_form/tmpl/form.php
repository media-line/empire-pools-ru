<div id="calc_dostavki">
	<?
	// empire-pools@mail.ru
	//echo'<pre>';print_r($colors);echo'</pre>';
	?>
	<form method="post" name="calc_dostavki">
	<table border="0">
		<tr>
			<td><label for="bassein_model">Модель бассейна</label></td>
			<td style="position:relative;">
				<select name="bassein_model" id="bassein_model">
					<?
						foreach($basseins as $k=>$t)	{
							echo'<option value="'.$t->title.'">'.$t->title.'</option>';
						}
					?>
				</select>
				<div class="images_bassein">
					<?
						foreach($basseins as $k=>$t)	{
							echo '<div class="bassein_item">';
							/*echo'<img id="image_'.$k.'" src="'.$t->image.'" />';*/
							echo $t->introtext;
							/*$extraFields = json_decode($t->extra_fields);
							if ($extraFields[1]->value) {
								echo '<img src="'.$extraFields[1]->value.'" alt="">';
							}*/
							echo '<input type="hidden" class="bassein_block_name" value="'.$t->title.'" />';
							echo '</div>';
						}
					?>					
				</div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Где будет установлен бассейн:</td>
			<td class="td_value">
				<div><input type="radio" name="bassin_location" id="bassin_location_1" value="На улице" /><label for="bassin_location_1">На улице</label></div>
				<div><input type="radio" name="bassin_location" id="bassin_location_2" value="Внутри" /><label for="bassin_location_2">Внутри</label></div>
			</td>
		</tr>

		<tr>
			<td class="td_name">Какое оборудование Вы хотите установить:</td>
			<td class="td_value">
				<div><input type="radio" name="komplekt_oborud" id="komplekt_oborud_ekonom" value="КИТАЙ (эконом)" /><label for="komplekt_oborud_ekonom">КИТАЙ (эконом)</label></div>
				<div><input type="radio" name="komplekt_oborud" id="komplekt_oborud_optima" value="ИСПАНИЯ (оптимально)" /><label for="komplekt_oborud_optima">ИСПАНИЯ (оптимально)</label></div>
				<div><input type="radio" name="komplekt_oborud" id="komplekt_oborud_lux" value="АВСТРИЯ (люкс)" /><label for="komplekt_oborud_lux">АВСТРИЯ (люкс)</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Освещение в бассейне:</td>
			<td class="td_value">
				<div><input type="radio" name="osveschenie" id="osveschenie_lux" value="Да" /><label for="osveschenie_lux">Да</label></div>
				<div><input type="radio" name="osveschenie" id="osveschenie_delux" value="Нет" /><label for="osveschenie_delux">Нет</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Подогрев воды:</td>
			<td class="td_value">
				<div><input type="radio" name="obogrev" id="obogrev_otoplenie" value="От котла" /><label for="obogrev_otoplenie">От котла</label></div>
				<div><input type="radio" name="obogrev" id="obogrev_elektro" value="От электроэнергии" /><label for="obogrev_elektro">От электроэнергии</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Противоток:</td>
			<td class="td_value">
				<div><input type="radio" name="protivotechenie" id="protivotechenie_econom" value="Устанавливаем" /><label for="protivotechenie_econom">Устанавливаем</label></div>
				<div><input type="radio" name="protivotechenie" id="protivotechenie_optima" value="Нет" /><label for="protivotechenie_optima">Нет</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Дизинфекция воды:</td>
			<td class="td_value">
				<div><input type="radio" name="dezinfektsiya" id="dezinfektsiya_econom" value="Ультрафиолетовая лампа эконом" /><label for="dezinfektsiya_econom">Ультрафиолетовая лампа эконом</label></div>
				<div><input type="radio" name="dezinfektsiya" id="dezinfektsiya_optima" value="Автоматическая станция дозирования" /><label for="dezinfektsiya_optima">Автоматическая станция дозирования</label></div>
				<div><input type="radio" name="dezinfektsiya" id="dezinfektsiya_premium" value="Ионизатор воды де люкс" /><label for="dezinfektsiya_premium">Ионизатор воды де люкс</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Нужен бокс для хранения оборудования:</td>
			<td class="td_value">
				<div><input type="radio" name="box_oborud" id="box_oborud_yes" value="Да" /><label for="box_oborud_yes">Да</label></div>
				<div><input type="radio" name="box_oborud" id="box_oborud_no" value="Нет" /><label for="box_oborud_no">Нет</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Наличие у Вас:</td>
			<td class="td_value">
				<div><input type="radio" name="nalichie" id="nalichie_220" value="220В" /><label for="nalichie_220">220В</label></div>
				<div><input type="radio" name="nalichie" id="nalichie_220_380" value="380В" /><label for="nalichie_220_380">380В</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Утепление бассейна:</td>
			<td class="td_value">
				<div><input type="radio" name="utelenie" id="utelenie_1" value="Самостоятельно" /><label for="utelenie_1">Самостоятельно</label></div>
				<div><input type="radio" name="utelenie" id="utelenie_2" value="У нас на заводе" /><label for="utelenie_2">У нас на заводе</label></div>
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
			<td class="td_name"><label for="town">Ваш город:</label></td>
			<td class="td_value"><input type="text" id="town" name="town" class="requred" value="" /></td>
		</tr>
		
		<tr>
			<td class="td_name">Установка бассейна:</td>
			<td class="td_value">
				<div><input type="radio" name="ustanovka" id="ustanovka_1" value="Самостоятельно" /><label for="ustanovka_1">Самостоятельно</label></div>
				<div><input type="radio" name="ustanovka" id="ustanovka_chastichno" value="Частично" /><label for="ustanovka_chastichno">Частично</label></div>				
				<div><input type="radio" name="ustanovka" id="ustanovka_pod_klych" value="Под ключ" /><label for="ustanovka_pod_klych">Под ключ</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name"><label for="complited_time">Когда Вы хотите, чтобы бассейн был установлен и работал:</label></td>
			<td class="td_value"><input type="text" id="complited_time" name="complited_time" value="" /></td>
		</tr>
		
<?
/*	
		<tr>
			<td colspan="2" class="td_name"><h2>Опции:</h2></td>
		</tr>
		
		<tr>
			<td class="td_name">Пылесос:</td>
			<td class="td_value">
				<div><input type="radio" name="pilesos" id="pilesos_ruchnoi" value="Ручной" /><label for="pilesos_ruchnoi">Ручной</label></div>
				<div><input type="radio" name="pilesos" id="pilesos_polu_avto" value="Полуавтоматический" /><label for="pilesos_polu_avto">Полуавтоматический</label></div>
				<div><input type="radio" name="pilesos" id="pilesos_avto" value="Автоматический " /><label for="pilesos_avto">Автоматический</label></div>
			</td>
		</tr>
		
		<tr>
			<td class="td_name">Автоматизация:</td>
			<td class="td_value">
				<div><input type="checkbox" name="avtomatizatciya[]" id="avtomatizatciya_block" value="Блок управления" /><label for="avtomatizatciya_block">Блок управления</label></div>
				<div><input type="checkbox" name="avtomatizatciya[]" id="avtomatizatciya_prolivka" value="Автоматическая проливка фильтра" /><label for="avtomatizatciya_prolivka">Автоматическая промывка фильтра</label></div>
				<div><input type="checkbox" name="avtomatizatciya[]" id="avtomatizatciya_control" value="Контроль уровня воды" /><label for="avtomatizatciya_control">Контроль уровня воды</label></div>
				
			</td>
		</tr>
		
		<tr>
			<td class="td_name">У вас возник вопрос, напишите:</td>
			<td class="td_value">
				<textarea name="question_text"> </textarea>
			</td>
		</tr>
*/
?>
		
		<tr>
			<td colspan="2" class="td_name"><h2>Контактные данные:</h2></td>
		</tr>
		
		
		
		<tr>
			<td><label for="name">*Имя:</label></td>
			<td><input type="text" id="name" name="name" class="requred" value="" /></td>
		</tr>
		<tr>
			<td><label for="phone">*Телефон:</label></td>
			<td><input type="text" id="phone" name="phone" class="requred" value="" /></td>
		</tr>
		
		<tr>
			<td><label for="email">E-mail:</label></td>
			<td><input type="text" id="email" name="email" value="" /></td>
		</tr>
		
		<tr>
			<td class="td_name">Комментарий:</td>
			<td class="td_value">
				<textarea name="comment_text"> </textarea>
			</td>
		</tr>
		<tr>
			<td class="td_name">
				<input type="hidden" name="sending_form" value="1" />
				<input type="submit" value="Отправить запрос" class="send_button" />		
			</td>
			<td class="td_value"></td>
		</tr>
	</table>

	<br /><br />
	<p>Если у Вас возникли вопросы, вы можете связаться с нами по телефону:<br />+7 (911) 161-16-15 (звонок по России бесплатный), + 375(44) 769-69-69</p>
	</form>
</div>