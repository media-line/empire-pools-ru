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
<div class="mod-review-gr default">
    <div class="container">
        <div class="name-1"><?php echo $params->get('text-name1'); ?></div>
        <div class="name-2"><?php echo $params->get('text-name2'); ?></div>
        <div class="review-slider">
        <?php for ($i=1; $i <= 8; $i++) { ?>
            <?php if ($params->get('img'.$i)) { ?>
                <div class="review">
                    <div class="top">
                        <div class="img" style="background-image: url('<?php echo $params->get('img'.$i); ?>'); "></div>
                        <div class="info">
                            <div class="name"><?php echo $params->get('fio'.$i); ?></div>
                            <div class="prof"><?php echo $params->get('prof'.$i); ?></div>
                            <div class="rate">
                                <div class="rate-text">
                                    <?php echo JText :: _('MOD_REVIEW_GR_RATE'); ?>:
                                </div>
                                <div class="rate-star">
                                    <?php echo $params->get('rate'.$i); ?> <?php echo JText :: _('MOD_REVIEW_GR_RATE_FROM'); ?> <span style="width: <?php echo $params->get('rate'.$i)*22 ?>px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="rev-text">
                            <div><?php echo JText :: _('MOD_REVIEW_GR_REVIEW'); ?>:</div>
                            <?php echo $params->get('review'.$i); ?>
                        </div>
                        <div class="photos clearfix">
                            <?php for ($j=1; $j <= 3; $j++) { ?>
                                <?php if ($params->get('photo'.$i.'-'.$j)) { ?>
                                    <div class="photo-wrapper">
                                        <div class="photo" style="background-image: url('<?php echo $params->get('photo'.$i.'-'.$j); ?>');" data-toggle="modal" data-target="#photo<?php echo $i; ?>-<?php echo $j; ?>">
                                            
                                        </div>
                                    </div>    
                                <?php } ?>                                
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <? } ?>
        </div>
    </div>
                    <?php for ($i=1; $i <= 8; $i++) { ?>
                        <?php if ($params->get('img'.$i)) { ?>
                            <?php for ($j=1; $j <= 3; $j++) { ?>
                                <div class="modal fade" id="photo<?php echo $i; ?>-<?php echo $j; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                      <span class="close" aria-hidden="true" data-dismiss="modal" aria-label="Close">&times;</span></button>
                                        <img src="<?php echo $params->get('photo'.$i.'-'.$j); ?>" alt="">
                                      </div>
                                    </div>
                                  </div>
                                </div>  
                            <?php } ?>     
                         <?php } ?>
                    <? } ?>
</div>