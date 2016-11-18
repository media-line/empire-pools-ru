	jQuery(document).ready(function(){
		var speed=300;
		//jQuery('#bassein .plus').hover	(   
		jQuery('#bassein .block').hover	(   
			function(){
				//jQuery(this).next(".popup_block").stop(true, true).fadeIn(speed);
				jQuery(this).find(".popup_block").stop(true, true).fadeIn(speed);
			},
			function(){
				//jQuery(this).next(".popup_block").stop(true, true).fadeOut(speed);
				jQuery(this).find(".popup_block").stop(true, true).fadeOut(speed);
			
		})							
	
	});
