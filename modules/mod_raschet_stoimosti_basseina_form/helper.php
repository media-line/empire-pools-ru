<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
	
abstract class modRaschetStoimostiBasseinaForm
{
	public static function getBasseins(&$params)
	{
		// Get the dbo
		$db = JFactory::getDbo();
		$query = 'select `id`, `title`, `introtext`,`fulltext`, `extra_fields` from #__k2_items WHERE `catid` = 1 ORDER BY `ordering` DESC';
		$db->setQuery($query);
		$rows = $db->loadObjectList();
		foreach($rows as $row)	{
		
			//убираем содержимое блока first_info в переменную $first_info
			$txt = $row->fulltext;
			$re = '/<div class=\"first_info\">(.*?)<\\/div>/si';
			//echo $match[1];
			preg_match($re, $txt, $matches);
			$first_info = $matches[0];
			$row->fulltext = preg_replace($re, '', $row->fulltext);

			//убираем содержимое блока add_info в переменную $add_info
			$txt = $row->fulltext;
			$re = '/<div class=\"add_info\">(.*?)<\\/div>/si';
			//echo $match[1];
			preg_match($re, $txt, $matches);
			$add_info = $matches[0];
			$row->fulltext = preg_replace($re, '', $row->fulltext);
		
		
			//берем картинку из описания и вырезаем ее из текста
			$img_arr = array();
			preg_match('/<img[^>]+>/i', $row->fulltext, $img_arr);
			
			//echo'<pre>';print_r($img_arr);echo'</pre>';
			//echo'<pre>';print_r($row->fulltext);echo'</pre>';
			$matches = null;
			// Вырезает из текста только src, т.е. только ссылку на изображение
			preg_match_all('/<img[^>]+src=([\'"])?((?(1).+?|[^\s>]+))(?(1)\1)/', 
			$img_arr[0], $matches);
			$additional_img_src = $matches[2][0];
			
			$row->image = $additional_img_src;
			
			//echo'<pre>';print_r($row->image);echo'</pre>';
			
		}
		
		return $rows;
	}
	
	public static function getColors(&$params)
	{
		$colors_ = explode(PHP_EOL,($params->get('bassein_colors', '')));
		/*
		echo'<pre>';print_r($colors_,0);echo'</pre>';
		$colors = array();
		*/
		foreach($colors_ as &$t){
			$t = str_replace(array("\r","\n"),"",$t);			
			//$colors_arr = explode('|',$t);
			//$colors[$colors_arr[1]] = $colors_arr[0];
		}
		return $colors_;
	}
	
	public static function sendForm(&$params)
	{
		function getBasseinOptions()
		{
			$res = '';
			$bassein_options = JRequest::getVar('options', array());
			if(count($bassein_options) > 0){
				$res = implode(', ', $bassein_options);
			}
			return $res;
		}
		function getDecorBasseina()
		{
			$res = '';
			$bassein_decor = JRequest::getVar('bassein_decor', array());
			if(count($bassein_decor) > 0){
				$res = implode(', ', $bassein_decor);
			}
			return $res;
		}
		
		function getAvtomatizOptions()
		{
			$res = '';
			$AvtomatizOptions = JRequest::getVar('avtomatizatciya', array());
			if(count($AvtomatizOptions) > 0){
				$res = implode(', ', $AvtomatizOptions);
			}
			return $res;
		}
		
		$mailer =& JFactory::getMailer();
		$config =& JFactory::getConfig();
		
		$sender = array($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ));
	  
		$mailer->setSender($sender);
		$subject = $params->get('subject', 'subject');
		$recipient = $params->get('email', $config->getValue( 'config.mailfrom' ));
		$mailer->addRecipient($recipient);
		$mailer->setSubject($subject);
		
		$msg ='<table id="zakaz_tbl" border="1">';
		$msg .='<tr><td style="padding:10px;">Модель бассейна</td><td style="padding:10px;">'.JRequest::getVar('bassein_model','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Где будет установлен бассейн:</td><td style="padding:10px;">'.JRequest::getVar('bassin_location','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Какое оборудование Вы хотите установить:</td><td style="padding:10px;">'.JRequest::getVar('komplekt_oborud','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Освещение в бассейне:</td><td style="padding:10px;">'.JRequest::getVar('osveschenie','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Подогрев воды:</td><td style="padding:10px;">'.JRequest::getVar('obogrev','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Противоток:</td><td style="padding:10px;">'.JRequest::getVar('protivotechenie','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Дизинфекция:</td><td style="padding:10px;">'.JRequest::getVar('dezinfektsiya','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Нужен бокс для хранения оборудования:</td><td style="padding:10px;">'.JRequest::getVar('box_oborud','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Наличие у Вас:</td><td style="padding:10px;">'.JRequest::getVar('nalichie','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Утепление бассейна:</td><td style="padding:10px;">'.JRequest::getVar('utelenie','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Цвет бассейна:</td><td style="padding:10px;">'.JRequest::getVar('bassein_color','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Доставка в город:</td><td style="padding:10px;">'.JRequest::getVar('town','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Установка бассейна:</td><td style="padding:10px;">'.JRequest::getVar('ustanovka','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Когда Вы хотите, чтобы бассейн был установлен и работал:</td><td style="padding:10px;">'.JRequest::getVar('complited_time','').'</td></tr>';
		
		/*
		$msg .='<tr><td colspan="2" class="td_name" align="center"><h2>Опции</h2></td></tr>';		
		$msg .='<tr><td style="padding:10px;">Обогрев бассейна:</td><td style="padding:10px;">'.JRequest::getVar('obogrev','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Пылесос:</td><td style="padding:10px;">'.JRequest::getVar('pilesos','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Автоматизация:</td><td style="padding:10px;">'.getAvtomatizOptions().'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Возникший вопрос:</td><td style="padding:10px;">'.JRequest::getVar('question_text','').'</td></tr>';
		*/
		
		$msg .='<tr><td colspan="2" class="td_name" align="center"><h2>Контактные данные</h2></td></tr>';
		$msg .='<tr><td style="padding:10px;">Имя:</td><td style="padding:10px;">'.JRequest::getVar('name','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Телефон:</td><td style="padding:10px;">'.JRequest::getVar('phone','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">E-mail:</td><td style="padding:10px;">'.JRequest::getVar('email','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Комментарий:</td><td style="padding:10px;">'.JRequest::getVar('comment_text','').'</td></tr>';
		//$msg .='<tr><td style="padding:10px;">Город</td><td style="padding:10px;">'.JRequest::getVar('town','').'</td></tr>';
		
		
		
		$msg .='</table>';
		$msg .='';
		//echo $msg;
		
		$mailer->setBody($msg);	
		$mailer->IsHTML(true);
		
		$send =& $mailer->Send();
		//echo'<pre>';print_r($mailer);echo'</pre>';
		//echo'<pre>';var_dump($send);echo'</pre>';
		
		//return $send;
		return $msg;
	}
	
}
