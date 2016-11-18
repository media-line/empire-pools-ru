<?php

/**
* @package Joomla.Razzo
* @subpackage Countdown
* @version 1.0.0
* @author: Razzo.Org
* @website: http://razzo.org 
*
* @copyright Copyright (C) 2014 Razzo.Org. All rights reserved.
* @license GNU General Public License version 2 or later; see http://www.gnu.org/licenses/gpl-2.0.html
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
* Countdown plugin class.
*
* @since 3.0
*/
class PlgContentRazzoOrgCountdown extends JPlugin {
	
	/**
	 * Load the language file on instantiation. Note this is only available in Joomla 3.1 and higher.
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;
        
        // define the regular expression for the bot
        const regex = "#{countdown(.*?)}#is";
        
        // define the global counter for the bot.
        // each countdown must have different var name
        //protected counter;
	
	/**
	 * Plugin that cloaks all emails in content from spambots via Javascript.
	 *
	 * @param   string   $context  The context of the content being passed to the plugin.
	 * @param   mixed    &$row     An object with a "text" property or the string to be cloaked.
	 * @param   mixed    &$params  Additional parameters. See {@see PlgContentEmailcloak()}.
	 * @param   integer  $page     Optional page number. Unused. Defaults to zero.
	 *
	 * @return  boolean	True on success.
	 */
	public function onContentPrepare($context, &$article, &$params, $page = 0) {
                
                // if there's a countdown include the countdown JS 
                if (preg_match(self::regex, $article->text)) {      //Non utilizzare la funzione preg_match() se si desidera controllare se una stringa è contenuta in un'altra. Piuttosto utilizzare strpos() oppure strstr() che sono più veloci. 
                        $document = JFactory::getDocument();
                        $document->addScript("plugins/content/razzoorgcountdown/countdown.js");
                        
                        if (is_object($article)) {
                                return $this->_processCountdown($article->text, $params);
                        }

                        return $this->_processCountdown($article, $params);
                }
                
                return true;
		
	}

	/**
	 * Cloak all emails in text from spambots via Javascript.
	 *
	 * @param   string  &$text    The string to be cloaked.
	 * @param   mixed   &$params  Additional parameters. Parameter "mode" (integer, default 1)
	 *                             replaces addresses with "mailto:" links if nonzero.
	 *
	 * @return  boolean  True on success.
	 */
	protected function _processCountdown(&$text, &$params) {
		/*
		 * Check for presence of {emailcloak=off} which is explicits disables this
		 * bot for the item.
		 */
                function _scriptCreator($subText) {
                    
                        $paramText = $subText[0];
                        
                        $cut = array(' ', '}', 'time=', 'date=', 'width=', 'style=');
                        
                        static $id = 0;
                        $id++;

                        $script = '<script>var countdown'.$id.' = new Countdown( {';
                        preg_match("#time=(.*?)( |})#", $paramText, $time);
                        if (!is_null($time[1])) {
                                $script .= 'time       : '.$time[1];
                        }
                        preg_match("#date=(.*?)( (.*?))?( |})#", $paramText, $date);
                        if (!is_null($date[1])) {
                        		$script_date = "";
                        		if (strpos($date[1], "/") !== false) {
                        				$day = explode("/", $date[1]);
                        		}
                        		if (strpos($date[2], "/") !== false) {
                        				$day = explode("/", $date[2]);
                        		}
                        		if (!is_null($day)) {
		                        		//$script_date .= ', year: '.$day[2];
		                        		$script_date .= (!is_null($day[2])) ? ', year: '.$day[2] : '';
		                        		//$script_date .= ', month: '.$day[1];
		                        		$script_date .= (!is_null($day[1])) ? ', month: '.$day[1] : '';
		                        		//$script_date .= ', day: '.$day[0];
		                        		$script_date .= (!is_null($day[0])) ? ', day: '.$day[0] : '';
		                        }
		                        if (strpos($date[1], ":") !== false) {
                        				$hour = explode(":", $date[1]);
                        		}
                        		if (strpos($date[2], ":") !== false) {
                        				$hour = explode(":", $date[2]);
                        		}
                        		if (!is_null($hour)) {
		                        		$script_date .= (!is_null($hour[0])) ? ', hour: '.$hour[0] : ', hour: 0';
		                        		$script_date .= (!is_null($hour[1])) ? ', minute: '.$hour[1] : ', minute: 0';
		                        		$script_date .= (!is_null($hour[2])) ? ', second: '.$hour[2] : ', second: 0';
		                        }
                        		$script .= preg_replace("#, #", "", $script_date, 1);
                        }
                        if (preg_match("hideLabels", $paramText)) {
                                $script .= ', hideLabels : true';
                        }
                        preg_match("#width=(.*?)( |})#", $paramText, $width);
                        if (!is_null($width[1])) {
                                $script .= ', width      : '.$width[1];
                                $script .= ', height     : '.((int)($width[1]*30/200));
                                //$script .= ', height     : 100';
                        }
                        preg_match("#style=(.*?)( |})#", $paramText, $style);
                        if (!is_null($style[1])) {
                                if ($style[1] == 'flip') {
                                        $script .= ', style      : "flip"';
                                } elseif ($style[1] == 'orange') {
                                        $script .= ', hideLine: 1';
                                        $script .= ', numbers	: {';
                                        $script .= '                color   : "#FFFFFF",    bkgd    : "#ff8f00"';
                                        $script .= '}';
                                        $script .= ', labels	: {';
                                        $script .= '                color   : "#a8a8a8",    font    : "Georgia",   textScale  : 0.9';
                                        $script .= '}';
                                } elseif ($style[1] == 'blue') {
                                        $script .= ', numbers	: {';
                                        $script .= '                color   : "#FFFFFF",    bkgd    : "#2F4A7C",    font    : "Georgia"';
                                        $script .= '}';
                                } elseif ($style[1] == 'joomlafestival') {
                                        $script .= ', hideLine: 1';
                                        $script .= ', numbers   : {';
                                        $script .= '                color   : "#005180",    bkgd    : "#5FADE1",    font    : "Open Sans"';
                                        $script .= '}';
                                        $script .= ', labels    : {';
                                        $script .= '                color   : "#BD232F",    font    : "Open Sans",  textScale  : 0.8';
                                        $script .= '}';
                                }
                        }
                        $script .= '} );</script>';

                        return $script;
                }
            
            
                if(isset($text)){
                        $text = preg_replace_callback(self::regex, '_scriptCreator', $text);
                }else{
                        $text = '';
                }

		return $text;
                //return true;
		
        }
       
}

?>