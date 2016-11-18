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
<div class="mod_contacts_block_gr">
    <div class="name-block">
        <?php echo JText :: _('MOD_CONTACTS_BLOCK_GR_CONTACTS'); ?>:
    </div>
    <div class="contacts clearfix">
        <?php for ($i=1; $i <= 8; $i++) { ?>
            <?php if ($params->get('contacts-class'.$i)) { ?>
                <div class="<?php echo $params->get('contacts-class'.$i); ?>"><?php echo $params->get('contacts'.$i); ?></div>
            <?php } ?>
        <?php } ?>
    </div>
    <div class="name-block">
        <?php echo JText :: _('MOD_CONTACTS_BLOCK_GR_ADDRESS'); ?>:
    </div>
    <div class="address">
        <?php echo $params->get('address'); ?>
    </div>
</div>