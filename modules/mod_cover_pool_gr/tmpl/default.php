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
<div class="mod_cover_pool_gr default">
    <div class="name"><?php echo JText :: _('MOD_COVER_POOL_GR_NAME'); ?></div>
    <div class="cover-pools row">
        <?php for ($i=1; $i<=4; $i++) { ?>
            <?php if ($params->get('text'.$i)) { ?>
                <div class="cover-pool col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="<?php echo $params->get('url'.$i); ?>">
                        <div class="img" style="background-image: url(<?php echo $params->get('img'.$i); ?>);"></div>
                        <div class="text"><?php echo $params->get('text'.$i); ?></div>
                    </a>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>