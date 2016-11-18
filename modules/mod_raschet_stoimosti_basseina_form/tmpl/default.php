<?php
// no direct access
defined('_JEXEC') or die;


//echo'<pre>';print_r($_POST,0);echo'</pre>';
//echo'<pre>';print_r($townsFrom,0);echo'</pre>';
//echo'<pre>';print_r($townsTo,0);echo'</pre>';

if($sending_form == 1)	{
	include('sended.php');
}
include('form.php');
?>