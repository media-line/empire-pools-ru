<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_popular
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$counter = 0;
for ($i=1; $i <= 16; $i++) {
    if ($params->get('img'.$i)) {
        $counter++;
    }
}

?>

<div class="mod_pool_gallery_gr">
    <div class='responsiveSlides'>
        <?php for ($i=1; $i <= 16; $i++) { ?>
            <?php if ($params->get('img'.$i)) { ?>
                <?php if ($i==1 || $i%4==1) { ?>
                    <div class="imgs item">
                <?php } ?>
                    <a rel="group" class="img fancy-img" href="#img-full-<?php echo $i; ?>" style="background-image: url(<?php echo $params->get('img'.$i); ?>)">
                    </a>
                    <div id="img-full-<?php echo $i; ?>" class="img-modal">
                        <img src="<?php echo $params->get('img'.$i); ?>" alt="">
                    </div>
                <?php if ($i%4==0 || $i == $counter) { ?>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    </div>
</div>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".responsiveSlides").responsiveSlides({
                auto: false,            
                pager: false,           
                nav: true,            
                random: false,   
                prevText: "<i class='icon-back'></i>",   
                nextText: "<i class='icon-next'></i>",              
            });
        });
    </script> 
