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
<div class="mod-tech-gr default">
    <div class="container">
        <div class="name"><?php echo $params->get('text-name'); ?></div>
        <div class="blocks clearfix">
            <?php for ($i=1; $i <= 4; $i++) { ?>
                <div class="block block<?php echo $i; ?> clearfix">
                    <div class="number"><?php echo $i; ?></div>
                    <div class="text"><?php echo $params->get('text'.$i); ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>