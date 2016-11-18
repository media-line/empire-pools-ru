<?php
/**
 * @version		$Id: default.php 1251 2011-10-19 17:50:13Z joomlaworks $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.gr
 * @copyright	Copyright (c) 2006 - 2011 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<script type="text/javascript" src="/modules/mod_k2_content/assets/jcarousellite_1.0.1.pack.js"></script>
<script type="text/javascript">
jQuery(function(){
jQuery(".jcarousel").jCarouselLite({
		visible: 1,
		auto: 38000,
		speed: 1000,
		btnNext: ".next",
		btnPrev: ".prev"
	});
});
</script>
<div id="k2ModuleBox<?php echo $module->id; ?>" class="k2ItemsBlock<?php if($params->get('moduleclass_sfx')) echo ' '.$params->get('moduleclass_sfx'); ?>">

	<?php if($params->get('itemPreText')): ?>
	<p class="modulePretext"><?php echo $params->get('itemPreText'); ?></p>
	<?php endif; ?>

	<?php if(count($items)): ?>
	<div class="jcarousel">
  <ul>
    <?php foreach ($items as $key=>$item):	?>
    <li>
		<div class="moduleItemIntrotext">
			<?php if($params->get('itemTitle')): ?>
				<a class="moduleItemTitle" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
			<?php endif; ?>

			<?php if($params->get('itemIntroText')): ?>
				<?php echo $item->introtext; ?>
			<?php endif; ?>
			<?php if($params->get('itemReadMore') && $item->fulltext): ?>
				<a class="moduleItemReadMore" href="<?php echo $item->link; ?>">Далее</a>
			<?php endif; ?>
		</div>


      <?php if($params->get('itemDateCreated')): ?>
      <span class="moduleItemDateCreated"><?php echo JText::_('K2_WRITTEN_ON') ; ?> <?php echo JHTML::_('date', $item->created, JText::_('K2_DATE_FORMAT_LC2')); ?></span>
      <?php endif; ?>
    </li>
    <?php endforeach; ?>
  </ul>
  </div>
  	<div class="div-readmore">
		<a class="all-readmore" href="<?php echo JRoute::_('index.php?Itemid=130');?>">Читать всё</a>
	</div>

	<a href="#" class="prev">Назад</a>
	<a href="#" class="next">Вперёд</a>	
  <div class="clr"></div>
  <?php endif; ?>
</div>