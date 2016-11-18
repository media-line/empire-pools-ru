jQuery(document).ready(function(){

var params = {
		changedEl: "#calc_dostavki select",
		visRows: 15,
		//scrollArrows: true
	}

	cuSel(params);


	jQuery('#coverpool_no').click();
	jQuery('#border_kamen_no').click();
	jQuery('#bez_nal').click();
	jQuery('#peraqva_no').click();
	jQuery('#calc_dostavka_no').click();
	
	jQuery('input[type="submit"]').live("click",function(e){
		var res = true;
		jQuery('.requred').each(function () {

			if(jQuery(this).val() == ''){
				jQuery(this).addClass('error');
				res = false;
			}	else	{
				jQuery(this).removeClass('error');
			}
		});
		
		return res;
	});
	
	
	
	jQuery('#cusel-scroll-bassein_model span').hover(function() {
		showBassein(jQuery(this).text())
	},
	function() {
		hideBassein(jQuery(this).text())
	}
	
	);
	
	function showBassein(name)
	{
		jQuery('.bassein_block_name').each(function(){
			if(jQuery(this).val() == name)	{
				jQuery(this).parent('div').show();
			}
		});
	}
	
	function hideBassein(name)
	{
		jQuery('.bassein_block_name').each(function(){
			if(jQuery(this).val() == name)	{
				jQuery(this).parent('div').hide();
			}
		});
	}
	

});