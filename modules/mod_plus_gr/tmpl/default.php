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
<div class="mod-plus-gr">
    <div class="container">
        <div class="text-top"><?php echo JText :: _('MOD_PLUS_GR_TEXT_TOP'); ?></div>
        <div class="block-plus clearfix">
        <?php for ($i=1; $i <= 3; $i++) { ?>
            <div class="plus plus<?php echo $i; ?>">
                <div class="img" style="background-image: url(<?php echo $params->get('img'.$i); ?>);"></div>
                <div class="over"><?php echo $params->get('over-plus'.$i); ?></div>
                <div class="text"><div><?php echo $params->get('plus'.$i); ?></div></div>
                <div class="under"><?php echo $params->get('under-plus'.$i); ?></div>
            </div>
        <? } ?>
        </div>
        <div class="text-bottom"><?php echo JText :: _('MOD_PLUS_GR_TEXT_BOTTOM'); ?></div>
    </div>
</div>