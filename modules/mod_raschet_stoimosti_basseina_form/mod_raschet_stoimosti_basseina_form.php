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
//$document->addScript('/modules/mod_raschet_stoimosti_basseina_form/assets/js/jquery-1.6.1.js');
$document->addScript('/modules/mod_raschet_stoimosti_basseina_form/assets/js/cusel.js');
$document->addScript('/modules/mod_raschet_stoimosti_basseina_form/assets/js/script.js');
$document->addScript('/modules/mod_raschet_stoimosti_basseina_form/assets/js/jScrollPane.js');
$document->addScript('/modules/mod_raschet_stoimosti_basseina_form/assets/js/jquery.mousewheel.js');

$document->addStyleSheet('/modules/mod_raschet_stoimosti_basseina_form/assets/css/style.css');
$document->addStyleSheet('/modules/mod_raschet_stoimosti_basseina_form/assets/css/cusel.css');

$basseins = modRaschetStoimostiBasseinaForm::getBasseins($params);
$colors = modRaschetStoimostiBasseinaForm::getColors($params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$sending_form = JRequest::getVar('sending_form',0);

if($sending_form == 1)	{
	modRaschetStoimostiBasseinaForm::sendForm($params);
}

require JModuleHelper::getLayoutPath('mod_raschet_stoimosti_basseina_form', $params->get('layout', 'default'));
