jQuery(document).ready(function(){
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
	

});