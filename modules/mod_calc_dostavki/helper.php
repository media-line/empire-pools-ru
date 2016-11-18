<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

abstract class modCalcDostavkiHelper
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
	
	public static function getTownsFrom(&$params)
	{
		$townsFrom_ = explode(PHP_EOL,($params->get('towns_from', '')));
		$townsFrom = array();
		foreach($townsFrom_ as $t){
			$t = str_replace(array("\r","\n"),"",$t);
			$town_arr = explode('|',$t);
			$townsFrom[$town_arr[1]] = $town_arr[0];
		}
		return $townsFrom;
	}
	
	public static function getTownsTo(&$params)
	{
		$towns_ = explode(PHP_EOL,($params->get('towns_to', '')));
		sort($towns_, SORT_LOCALE_STRING); 
		$towns = array();
		foreach($towns_ as $k=>$t){
			$t = str_replace(array("\r","\n"),"",$t);
			$town_arr = explode('|',$t);
			//echo'<pre>';print_r($town_arr,0);echo'</pre>';
			$towns[] = array('name' => $town_arr[0], 1 => $town_arr[1], 2 => $town_arr[2], 3 => $town_arr[3]);
		}
		return $towns;
	}
}
