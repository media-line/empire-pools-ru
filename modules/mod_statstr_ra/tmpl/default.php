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
<div>
    <div class="cover-pools row col-xs-12 col-sm-12 col-md-12 col-lg-12 statstr">
        <?php for ($i=1; $i<=11; $i++) { ?>
            <?php if ($params->get('text'.$i)) { ?>
                <div class="statstr_ed">
                        <div class="num"><?php echo $params->get('num'.$i); ?></div>
                        <div class="text"><?php echo $params->get('text'.$i); ?></div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>