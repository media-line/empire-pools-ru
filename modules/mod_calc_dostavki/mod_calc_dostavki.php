<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$document = &JFactory::getDocument();
//$document->addScript('/modules/mod_tgl_slider/assets/js/jqueryui.js');
$document->addScript('/modules/mod_calc_dostavki/assets/js/script.js');
$document->addStyleSheet('/modules/mod_calc_dostavki/assets/css/style.css');

$basseins = modCalcDostavkiHelper::getBasseins($params);
$townsFrom = modCalcDostavkiHelper::getTownsFrom($params);
$townsTo = modCalcDostavkiHelper::getTownsTo($params);
//echo'<pre>';print_r($basseins,0);echo'</pre>';
//$townsFrom = nl2br($params->get('towns_from', ''));

//echo'<pre>';print_r($townsFrom_arr,0);echo'</pre>';
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_calc_dostavki', $params->get('layout', 'default'));
