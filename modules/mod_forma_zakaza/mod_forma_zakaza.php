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
$document->addScript('/modules/mod_forma_zakaza/assets/js/script.js');
$document->addStyleSheet('/modules/mod_forma_zakaza/assets/css/style.css');

$basseins = modFormaZakazaHelper::getBasseins($params);
$colors = modFormaZakazaHelper::getColors($params);
//$townsTo = modFormaZakazaHelper::getTownsTo($params);
//echo'<pre>';print_r($colors,0);echo'</pre>';
//$townsFrom = nl2br($params->get('towns_from', ''));

//echo'<pre>';print_r($townsFrom_arr,0);echo'</pre>';
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));


$sending_form = JRequest::getVar('sending_form',0);
if($sending_form == 1)	{
	modFormaZakazaHelper::sendForm($params);
}

require JModuleHelper::getLayoutPath('mod_forma_zakaza', $params->get('layout', 'default'));
