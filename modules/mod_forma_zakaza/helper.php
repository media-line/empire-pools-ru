<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

abstract class modFormaZakazaHelper
{
	public static function getBasseins(&$params)
	{
		// Get the dbo
		$db = JFactory::getDbo();
		$query = 'select id, title from #__k2_items where catid = 1';
		$db->setQuery($query);
		$rows = $db->loadObjectList();
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
		
		$mailer =& JFactory::getMailer();
		$config =& JFactory::getConfig();
		
		//$sender = array($config->getValue( 'config.mailfrom' ),$config->getValue( 'config.fromname' ));
	  
		//$mailer->setSender($sender);
		$subject = $params->get('subject', 'subject');
		$recipient = $params->get('email', '');
		$mailer->addRecipient($recipient);
		$mailer->setSubject($subject);
		
		$msg ='<table id="zakaz_tbl" border="1">';
		$msg .='<tr><td colspan="2" style="padding:10px;">Название компании-дилера<br />'.JRequest::getVar('comany_name','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Город</td><td style="padding:10px;">'.JRequest::getVar('town','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Телефон</td><td style="padding:10px;">'.JRequest::getVar('phone','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Модель бассейна</td><td style="padding:10px;">'.JRequest::getVar('bassein_model','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Цвет бассейна</td><td style="padding:10px;">'.JRequest::getVar('bassein_color','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Категория</td><td style="padding:10px;">'.JRequest::getVar('bassein_category','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Опции</td><td style="padding:10px;">'.getBasseinOptions().'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Включать минимальный комплект<br />оборудования PERAQVA</td><td style="padding:10px;">'.JRequest::getVar('peraqva','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Дополнительное оборудование</td><td style="padding:10px;">'.JRequest::getVar('add_oborud','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Рассчитать стоимость доставки</td><td style="padding:10px;">'.JRequest::getVar('calc_dostavka','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Оплата</td><td style="padding:10px;">'.JRequest::getVar('oplata','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Декор бассейна</td><td style="padding:10px;">'.getDecorBasseina().'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Комплектация<br />бордюрный камень</td><td style="padding:10px;">'.JRequest::getVar('border_kamen','').'</td></tr>';
		$msg .='<tr><td style="padding:10px;">Покрывало Coverpool</td><td style="padding:10px;">'.JRequest::getVar('coverpool','').'</td></tr>';
		$msg .='</table>';
		$msg .='';
		//echo $msg;
		
		$mailer->setBody($msg);	
		$mailer->IsHTML(true);
		
		$send =& $mailer->Send();
		
		//return $send;
		return $msg;
	}
	
}
