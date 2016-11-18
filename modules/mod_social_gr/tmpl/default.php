<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="mod-social-gr hidden-xs">
	<?php for ($i=0; $i <= 8; $i++) { ?>
        <?php if ($params->get('social'.$i)) { ?>
            <a class="social <?php echo $params->get('social-class'.$i); ?>" href="<?php echo $params->get('social'.$i); ?>">
                
            </a>
        <?php } ?>
	<? } ?>
</div>