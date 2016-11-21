<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_footer
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die; 

require JModuleHelper::getLayoutPath('mod_runstr_ra', $params->get('layout', 'default'));

$document = JFactory::getDocument();
$document->addStyleSheet("/modules/mod_runstr_ra/mod_runstr_ra.css",'text/css',"screen");

?>
