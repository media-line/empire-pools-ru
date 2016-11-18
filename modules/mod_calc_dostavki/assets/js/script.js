jQuery(document).ready(function(){
	var townFrom = 1;
	var townTo = 0;
	var koef = 0.9;
	var dostavka = 0;
	var span_town_from = jQuery('#town_from');
	var span_town_to = jQuery('#town_to');
	var span_bassein = jQuery('#bassein');
	
	span_town_from.html(jQuery('select[name="townFrom"] option:selected').text());
	span_town_to.html(jQuery('select[name="townTo"] option:selected').text());
	span_bassein.html(jQuery('select[name="Bassein"] option:selected').text());
	
	calc_dostavka();
	
	jQuery('#print_res').live("click",function(e){
		printBlock(jQuery(this));
	});
	
	jQuery('select[name="townFrom"]').live("change",function(e){
		townFrom = jQuery(this).val();
		span_town_from.html(jQuery(this).children('option:selected').text());
		calc_dostavka();
	});
	
	jQuery('select[name="townTo"]').live("change",function(e){
		townTo = jQuery(this).val();
		span_town_to.html(jQuery(this).children('option:selected').text());
		calc_dostavka();
	});
	
	jQuery('select[name="Bassein"]').live("change",function(e){
		var val = jQuery(this).val();
		if (val == '3' || val == '10')	{
			koef = 0.8;
			jQuery('#tarif').text(koef);
		}	else	{
			koef = 0.9;
			jQuery('#tarif').text(koef);
		}
		span_bassein.html(jQuery(this).children('option:selected').text());
		calc_dostavka();
	});
	
	function calc_dostavka()
	{
		dostavka = koef * jQuery('input[name="km_'+townFrom+'_'+townTo+'"]').val();
		jQuery('#summa_dostavki').text(dostavka+'$');
		//console.log(jQuery('input[name="km_'+townFrom+'_'+townTo+'"]').val());
	}
	
	function printBlock(printLink)
	{
		jQuery('#calc_dostavki table td span.hidden').show();
		jQuery('#calc_dostavki table td select').hide();
		productDesc = jQuery(printLink).parents('#calc_dostavki').html();//забираем контент нужного нам блока (в моем случае ссылка на печать находится внути его)
		jQuery('body').addClass('printSelected');//добавляем класс к body
		jQuery('body').append('<div class="printSelection">' + productDesc + '</div>');//создаем новый блок внутри body
		window.print();//печатаем
	   
		window.setTimeout(pageCleaner, 0); //очищаем нашу страницу от "мусора"
	   
		return false;//баним переход по ссылке, чтобы она не пыталась перейти по адресу, указанному внутри аттрибута href
	}	
	
	function pageCleaner()
	{
		jQuery('#calc_dostavki table td span.hidden').hide();
		jQuery('#calc_dostavki table td select').show();		
		jQuery('body').removeClass('printSelected');//убираем класс у body
		jQuery('.printSelection').remove();//убиваем наш только что созданный блок для печати
	}	
});