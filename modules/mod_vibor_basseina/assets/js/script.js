jQuery(document).ready(function(){
	var speed = 300;

	
	jQuery('#border').click(
		function(){
			var border_popup = jQuery("#border_popup");
			if (border_popup.hasClass('active')){
				border_popup.stop(true, true).fadeOut(speed);
				border_popup.removeClass('active');
			}	else	{
				jQuery("#water_popup").fadeOut(speed);
				jQuery("#water_popup").removeClass('active');
				border_popup.stop(true, true).fadeIn(speed);
				border_popup.addClass('active');
			}
			
		});
		
	jQuery('#water').click(
		function(){
			var watep_popup = jQuery("#water_popup");
			if (watep_popup.hasClass('active')){
				watep_popup.stop(true, true).fadeOut(speed);
				watep_popup.removeClass('active');
			}	else	{
				jQuery("#border_popup").fadeOut(speed);
				jQuery("#border_popup").removeClass('active');
				watep_popup.stop(true, true).fadeIn(speed);
				watep_popup.addClass('active');
			}
			
		});


	var pItems = jQuery("#water_popup td span.btn");
	var iLength = pItems.length;
	var onclick_ = '';
	var name_ = '';
	//console.log(iLength);
	if(iLength > 0)	{
		for(i = 0; i < iLength; i++)	{
			onclick_ = jQuery(pItems[i]).attr('onclick');
			name_ = jQuery(pItems[i]).text();
			onclick_ = onclick_.replace("name",name_);
			jQuery(pItems[i]).attr('onclick',onclick_);
			jQuery(pItems[i]).parent('td').prev('td').children('img').attr('onclick',onclick_);
		}
	}

	//jQuery("#water_popup").hide();

	
	var border_jcarousel_ul = jQuery('.border_jcarousel ul');
	var border_step = 192;
	var border_left = 0;
	var border_count_items = border_jcarousel_ul.children('li').length;
	var border_current_item = 1;
		
	jQuery('.prev_border').hide();
	jQuery('.next_border').click(function(){
		border_left = parseInt(border_jcarousel_ul.css("left")) - border_step;
		///console.log(left);
		border_jcarousel_ul.css("left",border_left);
		jQuery('.prev_border').show();
		border_current_item ++;
		if(border_current_item == border_count_items)	jQuery('.next_border').hide();
	});
	
	jQuery('.prev_border').click(function(){
		border_left = parseInt(border_jcarousel_ul.css("left")) + border_step;
		border_jcarousel_ul.css("left",border_left);
		jQuery('.next_border').show();
		border_current_item --;
		if(border_current_item == 1)	jQuery('.prev_border').hide();
		
	});						


	var border_popup = jQuery("#border_popup");
	border_popup.hide();
	border_popup.css('margin-top',0);
	
	var water_jcarousel_ul = jQuery('.water_jcarousel ul');
	var water_step = 192;
	var water_left = 0;
	var water_count_items = water_jcarousel_ul.children('li').length;
	var water_current_item = 1;
		
	jQuery('.prev_water').hide();
	jQuery('.next_water').click(function(){
		water_left = parseInt(water_jcarousel_ul.css("left")) - water_step;
		water_jcarousel_ul.css("left",water_left);
		jQuery('.prev_water').show();
		water_current_item ++;
		if(water_current_item == water_count_items)	jQuery('.next_water').hide();
	});
	
	jQuery('.prev_water').click(function(){
		water_left = parseInt(water_jcarousel_ul.css("left")) + water_step;
		water_jcarousel_ul.css("left",water_left);
		jQuery('.next_water').show();
		water_current_item --;
		if(water_current_item == 1)	jQuery('.prev_water').hide();
		
	});						

	//jQuery(".border_jcarousel");

	var water_popup = jQuery("#water_popup");
	water_popup.hide();
	water_popup.css('margin-top',0);
		

});

var src_ = "";

function set_border(val_,elem)
{
	jQuery('input[name="selected_border"]').val(val_);
	//jQuery('#border_name').html(jQuery(elem).html());
	jQuery('#border_name').html(elem);
	jQuery('#border_img img').attr('src',"/modules/mod_vibor_basseina/assets/img/border/"+val_+".png");
	update_result();
	jQuery("#border_popup").fadeOut(300);
	jQuery("#border_popup").removeClass('active');
	
}

function set_water(val_,elem)
{
	jQuery('input[name="selected_water"]').val(val_);
	//jQuery('#water_name').html(jQuery(elem).html());
	jQuery('#water_name').html(elem);
	jQuery('#water_img img').attr('src',"/modules/mod_vibor_basseina/assets/img/water/"+val_+".png");
	update_result();
	jQuery("#water_popup").fadeOut(300);
	jQuery("#water_popup").removeClass('active');
}

function update_result()
{
	var src_ = "/modules/mod_vibor_basseina/assets/img/bassein/bassein_"+jQuery('input[name="selected_border"]').val()+"_"+jQuery('input[name="selected_water"]').val()+".jpg";
	jQuery('#result img').attr('src',src_);
}

