<?php
/**
 * @version $Id: header.php 739 2008-11-16 22:07:19Z elkuku $
 * @package		scatalog_categories
 * @subpackage	
 * @author		EasyJoomla {@link http://www.easy-joomla.org Easy-Joomla.org}
 * @author		Constantine Poltyrev {@link http://www.clubrally.spb.ru}
 * @author		Created on 27-Dec-2008
 */

// no direct access
defined( '_JEXEC' ) or die( ';)' );

// include the template for display

$document = &JFactory::getDocument();
$document->addScript("/modules/mod_vibor_basseina/assets/js/script.js");
$document->addStyleSheet("/modules/mod_vibor_basseina/assets/css/style.css");

require(JModuleHelper::getLayoutPath('mod_vibor_basseina'));