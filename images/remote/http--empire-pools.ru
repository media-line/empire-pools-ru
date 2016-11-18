<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-ru" lang="ru-ru" dir="ltr" >
<head>
			  <base href="http://empire-pools.ru/" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Super User" />
  <title>Бассейны</title>
  <link href="/templates/waterpoll/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="/components/com_k2/css/k2.css" type="text/css" />
  <link rel="stylesheet" href="/modules/mod_bassein/assets/css/style.css" type="text/css" />
  <link rel="stylesheet" href="/media/system/css/modal.css" type="text/css" />
  <script src="/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/media/system/js/core.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
  <script src="/components/com_k2/js/k2.js?v2.6.6&amp;sitepath=/" type="text/javascript"></script>
  <script src="/media/system/js/caption.js" type="text/javascript"></script>
  <script src="/modules/mod_bassein/assets/js/script.js" type="text/javascript"></script>
  <script src="/media/system/js/modal.js" type="text/javascript"></script>
  <script type="text/javascript">
window.addEvent('load', function() {
				new JCaption('img.caption');
			});
		window.addEvent('domready', function() {

			SqueezeBox.initialize({ handler: 'ajax'});
			SqueezeBox.assign($$('a.modal'), {
				parse: 'rel'
			});
		});
  </script>

	<link rel="stylesheet" href="/templates/waterpoll/css/template.css" type="text/css" />
	<link rel="stylesheet" href="/templates/waterpoll/js/fancy_box/style.css" type="text/css" media="screen" />
		
	<script src="/templates/waterpoll/js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/templates/waterpoll/js/fancy_box/jquery.fancybox-1.2.1.pack.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/templates/waterpoll/js/shadowbox/shadowbox.css">
	<script type="text/javascript" src="/templates/waterpoll/js/shadowbox/shadowbox.js"></script>
	
	<script type="text/javascript">jQuery.noConflict();</script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
		
			jQuery("a.no_click").each(function(){
				jQuery(this).attr('href','javascript:void(0)');
			});
		var li_item_114_a = jQuery('li.item-114 a')
		//li_item_114_a.prop('rel','{handler: "iframe", size: {x: 865, y: 423}, onClose: function() {}}');
		var href_ = li_item_114_a.prop('href');
		li_item_114_a.prop('href',href_+'?tmpl=component')
		
		jQuery("a.fansybox").fancybox(
		{						
		//"padding" : 2, // отступ контента от краев окна
		//"imageScale" : false, // Принимает значение true - контент(изображения) масштабируется по размеру окна, или false - окно вытягивается по размеру контента. По умолчанию - TRUE
		//"zoomOpacity" : false,	// изменение прозрачности контента во время анимации (по умолчанию false)
		//"zoomSpeedIn" : 1000,	// скорость анимации в мс при увеличении фото (по умолчанию 0)
		//"zoomSpeedOut" : 1000,	// скорость анимации в мс при уменьшении фото (по умолчанию 0)
		//"zoomSpeedChange" : 1000, // скорость анимации в мс при смене фото (по умолчанию 0)
		"margin" : 300,	 // ширина окна, px (425px - по умолчанию)
		"frameWidth" : 865,	 // ширина окна, px (425px - по умолчанию)
		"frameHeight" : 423, // высота окна, px(355px - по умолчанию)
		"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
		"overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
		"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
		"centerOnScroll" : false // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
		});
		jQuery("a.loginform").fancybox(
		{						
			"frameWidth" : 470,	 // ширина окна, px (425px - по умолчанию)
			"frameHeight" : 210, // высота окна, px(355px - по умолчанию)
			"overlayShow" : true, // если true затеняят страницу под всплывающим окном. (по умолчанию true). Цвет задается в jquery.fancybox.css - div#fancy_overlay 
			"overlayOpacity" : 0.8,	 // Прозрачность затенения 	(0.3 по умолчанию)
			"hideOnContentClick" :false, // Если TRUE  закрывает окно по клику по любой его точке (кроме элементов навигации). Поумолчанию TRUE		
			"centerOnScroll" : true // Если TRUE окно центрируется на экране, когда пользователь прокручивает страницу		
		});
			
			var speed=300;
				jQuery('#top_menu li.parent').hover	(   
					function(){
//						jQuery(this).addClass("active");
						jQuery(this).children("ul").stop(true, true).fadeIn(speed);
					},
					function(){
//						jQuery(this).removeClass("active");
						jQuery(this).children("ul").stop(true, true).fadeOut(speed);
					
				})							
		});
		function getBrowserInfo() {
		 var t,v = undefined;
		 if (window.opera) t = 'Opera';
		 else if (document.all) {
		  t = 'IE';
		  var nv = navigator.appVersion;
		  var s = nv.indexOf('MSIE')+5;
		  v = nv.substring(s,s+1);
		 }
		 else if (navigator.appName) t = 'Netscape';
		 return {type:t,version:v};
		}
		
		function bookmark(a){
		 var url = window.document.location;
		 var title = window.document.title;
		 var b = getBrowserInfo();
		 if (b.type == 'IE' && 7 > b.version && b.version >= 4) window.external.AddFavorite(url,title);
		 else if (b.type == 'Opera') {
		  a.href = url;
		  a.rel = "sidebar";
		  a.title = url+','+title;
		  return true;
		 }
		 else if (b.type == "Netscape") window.sidebar.addPanel(title,url,"");
		 else alert("Нажмите CTRL-D, чтобы добавить страницу в закладки.");
		 return false;
		}		
	</script>
	
	<!--[if lte IE 6]>
		<script src="/templates/waterpoll/js/bpfix.js" type="text/javascript"></script>		
		<script type="text/javascript">DD_belatedPNG.fix('*');</script>	
		<link href="/templates/waterpoll/css/ie6.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
		jQuery(document).ready(function(){
		});	
	</script>
		
	<![endif]-->

	
</head>


<body class="main_page">

<div id="body_wrap">
	<div id="page">
		<div id="header" class="clearfix">
			<div id="header_wrap" class="clearfix">
				<div id="H_logo">
					<a href="/"><img src="/templates/waterpoll/images/logo.png"></a>
				</div>
			
									<div class="top_pos">		<div class="moduletable_menu">
					
<ul class="menu" id="top_menu">
<li class="item-101 current active deeper parent"><a href="/" ><span>Главная</span></a><ul><li class="item-133"><a href="/main/o-kompanii.html" ><span>О компании</span></a></li><li class="item-134"><a href="/main/kak-stat-dilerom.html" ><span>Как стать дилером</span></a></li><li class="item-130"><a href="/main/news.html" ><span>Новости</span></a></li><li class="item-192"><a href="/main/video.html" ><span>Видео</span></a></li></ul></li><li class="item-135 deeper parent"><a class="no_click" href="/bassein.html" ><span>Бассейн</span></a><ul><li class="item-113"><a href="/bassein/modeli-bassejnov.html" ><span>Модели бассейнов</span></a></li><li class="item-155"><a href="/bassein/cveta-basseinov.html" ><span>Цвета бассейнов</span></a></li><li class="item-114"><a class="fansybox" href="/bassein/konstruktor.html" ><span>Конструктор</span></a></li><li class="item-150"><a href="/bassein/dekor-basseina.html" ><span>Декор бассейна</span></a></li><li class="item-151"><a href="/bassein/bordiurnyi-kamen.html" ><span>Бордюрный камень</span></a></li><li class="item-152"><a href="/bassein/aksessuary.html" ><span>Аксессуары</span></a></li><li class="item-153"><a href="/bassein/pokupka-basseina.html" ><span>Покупка бассейна</span></a></li></ul></li><li class="item-115 deeper parent"><a class="no_click" href="/oborudovanie.html" ><span>Оборудование</span></a><ul><li class="item-136"><a href="/oborudovanie/oborudovanie-dlia-basseinov.html" ><span>Оборудование для бассейнов</span></a></li><li class="item-116"><a href="/oborudovanie/pokrytie-coverpool.html" ><span>Покрытие Coverpool</span></a></li><li class="item-132"><a href="/oborudovanie/otdelka-vokrug-basseinov.html" ><span>Отделка вокруг бассейнов</span></a></li></ul></li><li class="item-117 deeper parent"><a class="no_click" href="/tekhnologiya.html" ><span>Технология</span></a><ul><li class="item-137"><a href="/tekhnologiya/kachestvo.html" ><span>Качество</span></a></li><li class="item-138"><a href="/tekhnologiya/priemushchestvo.html" ><span>Преимущество</span></a></li><li class="item-139"><a href="/tekhnologiya/pochemu-my.html" ><span>Почему мы?</span></a></li><li class="item-193"><a href="/tekhnologiya/stati.html" ><span>Статьи</span></a></li></ul></li><li class="item-118 deeper parent"><a class="no_click" href="/ustanovka.html" ><span>Установка</span></a><ul><li class="item-140"><a href="/ustanovka/varianty-ustanovki.html" ><span>Варианты установки</span></a></li><li class="item-141"><a href="/ustanovka/stroitelstvo-basseina.html" ><span>Строительство бассейна</span></a></li><li class="item-142"><a href="/ustanovka/servis.html" ><span>Сервис</span></a></li><li class="item-154"><a href="/ustanovka/dostavka.html" ><span>Доставка</span></a></li></ul></li><li class="item-119 deeper parent"><a class="no_click" href="/kontakty.html" ><span>Контакты</span></a><ul><li class="item-146"><a href="/kontakty/otdel-prodazh.html" ><span>Отдел продаж</span></a></li><li class="item-149 parent"><a href="/kontakty/kontakty-dilerov.html" ><span>Контакты дилеров</span></a></li><li class="item-194"><a href="/kontakty/vopros-otvet.html" ><span>Вопрос-Ответ</span></a></li></ul></li></ul>
		</div>
			<div class="moduletable">
					

<div class="custom"  >
	<ul id="additional_top_menu">
<li><a title="Домой" href="/"><img src="/images/ico/home_ico.png" alt="" border="0" /></a></li>
<li><a title="В избранное" onclick="return bookmark(this);" href="#"><img src="/images/ico/add_to_fav_ico.png" alt="" border="0" /></a></li>
<li><a title="Поиск" href="/search.html?searchword=Я%20ищу%20...."><img src="/images/ico/search_ico.png" alt="" border="0" /></a></li>
</ul></div>
		</div>
	</div>
							</div>
		</div>

		<div id="center" class="clearfix center_main_page">
			<div id="center_wrap" class="clearfix">
								
							
				<div id="content_block" class="main_page">

		
		
				
				
					
<div id="system-message-container">
</div>
					<div class="item-page">









<div>		<div class="moduletable contacts_main">
					

<div class="custom contacts_main"  >
	<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="/images/Russia.png" alt="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>+7 (911)</span> <span style="color: #000000;" ><b>161-161-5</b></span></td>
  </tr>
  <tr>
    <td><img src="/images/Belarus.png" alt="" />&nbsp;&nbsp;<span>+375 (44)</span> <span style="color: #000000"><b>769-69-69</b></span></td>
  </tr>
</table>
</div>
		</div>
			<div class="moduletable">
					<div id="bassein">
	<div id="oborudovanie" class="block">
		<a href="javascript:void(0)" class="plus"><img src="/modules/mod_bassein/assets/img/plus_ico.png" /></a>
		<div class="popup_block" id="oborudovanie_popup">
			<p class="img"><img src="/modules/mod_bassein/assets/img/oborudovanie.png" /></p>
			<h3>Оборудование</h3>
			<p class="desc">Уникальная технология очистки воды для бассейнов!</p>
			<a href="/oborudovanie/oborudovanie-dlia-basseinov.html" class="green_button"><span>Узнать подробнее</span></a>
		</div>
	</div>
	<div id="technologiya" class="block">
		<a href="javascript:void(0)" class="plus"><img src="/modules/mod_bassein/assets/img/plus_ico.png" /></a>
		<div class="popup_block" id="technologiya_popup">
			<p class="img"><img src="/modules/mod_bassein/assets/img/technologiya.png" /></p>
			<h3>Технология</h3>
			<p class="desc">Наша компания производит бассейны по американской технологии River Pools USA.</p>
			<a href="/tekhnologiya/kachestvo.html" class="green_button"><span>Узнать подробнее</span></a>
		</div>
	</div>
	<div id="cvet_basseina" class="block">
		<a href="javascript:void(0)" class="plus"><img src="/modules/mod_bassein/assets/img/plus_ico.png" /></a>
		<div class="popup_block" id="cvet_basseina_popup">
			<p class="img"><img src="/modules/mod_bassein/assets/img/cvet_basseina.png" /></p>
			<h3>Цвет бассейна</h3>
			<p class="desc">Предлагаем множество вариантов цветов!</p>
			<a href="/bassein/cveta-basseinov.html" class="green_button"><span>Узнать подробнее</span></a>
		</div>
	</div>
	<div id="otdelka" class="block">
		<a href="javascript:void(0)" class="plus"><img src="/modules/mod_bassein/assets/img/plus_ico.png" /></a>
		<div class="popup_block" id="otdelka_popup">
			<p class="img"><img src="/modules/mod_bassein/assets/img/otdelka.png" /></p>
			<h3>Отделка бассейна</h3>
			<p class="desc">Мы предлагаем Вам, сразу сделать плиту с декоративным рисунком из 8 видов.</p>
			<a href="/oborudovanie/otdelka-vokrug-basseinov.html" class="green_button"><span>Узнать подробнее</span></a>
		</div>
	</div>
</div>		</div>
	</div> 
	
</div>

				</div>
			</div>
							<div id="slider_block" class="clearfix">
					<div id="slider_block_wrap">
								<div class="moduletable dealers  News_Slider">
					<h3>Дилерская сеть</h3>
					

<div class="custom dealers  News_Slider"  >
	<p>
	<a href="/kontakty/kontakty-dilerov.html"><img alt="map" height="150" src="/images/map_main.jpg" style="display: block; margin-left: auto; margin-right: auto;" width="223" /></a></p>

<p>
	<a class="shadbx" href="javascript:void(0)">Киев</a></p>

<p>
	<a class="shadbx" href="javascript:void(0)">Минск</a></p>

<p>
	<a class="shadbx" href="javascript:void(0)">Москва</a></p></div>
		</div>
			<div class="moduletable basseins_slider">
					<script type="text/javascript" src="/modules/mod_k2_content/assets/jcarousellite_1.0.1.pack.js"></script>
<script type="text/javascript">
jQuery(function(){
jQuery(".jcarousel_prod").jCarouselLite({
		visible: 3,
		auto: 38000,
		speed: 1000,
		btnNext: ".next_prod",
		btnPrev: ".prev_prod"
	});
});
</script>
<div id="k2ModuleBox110" class="k2ItemsBlock  basseins_slider">

	
		<a href="#" class="prev_prod">&nbsp;</a>
	<a href="#" class="next_prod">&nbsp;</a>	
	<div class="jcarousel_prod">
  <ul>
        <li>
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td class="img">
									
				</td>
			</tr>
			<tr>
				<td>
					<div class="moduleItemIntrotext">
													<a class="moduleItemTitle" href="/bassein/modeli-bassejnov/item/13-florentciia.html">Флоренция</a>
						
													<p>
	<img alt="florencia" src="/images/florentciia_obrezan.png" /></p>

<p>
	Длинна - 7,2 м<br />
	Ширина - 3,2 м<br />
	Глубина - 1,75 м</p>

																			<a class="moduleItemReadMore" href="/bassein/modeli-bassejnov/item/13-florentciia.html"><span>Далее</span></a>
												
					</div>
				</td>
			
			</tr>
		</table>

      <!-- Plugins: BeforeDisplay -->
      
      <!-- K2 Plugins: K2BeforeDisplay -->
      
      

      
      <!-- Plugins: AfterDisplayTitle -->
      
      <!-- K2 Plugins: K2AfterDisplayTitle -->
      
      <!-- Plugins: BeforeDisplayContent -->
      
      <!-- K2 Plugins: K2BeforeDisplayContent -->
      
            
      
      <div class="clr"></div>

      
      <div class="clr"></div>

      <!-- Plugins: AfterDisplayContent -->
      
      <!-- K2 Plugins: K2AfterDisplayContent -->
      
      
      
      
      
			
			

      <!-- Plugins: AfterDisplay -->
      
      <!-- K2 Plugins: K2AfterDisplay -->
      
      <div class="clr"></div>
    </li>
        <li>
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td class="img">
									
				</td>
			</tr>
			<tr>
				<td>
					<div class="moduleItemIntrotext">
													<a class="moduleItemTitle" href="/bassein/modeli-bassejnov/item/12-hilton.html">Хилтон</a>
						
													<p>
	<img alt="florencia" src="/images/hilton_obrezan.png" /></p>

<p>
	Длинна - 11,4 м<br />
	Ширина - 4,10 м<br />
	Глубина - 1,6 м</p>

																			<a class="moduleItemReadMore" href="/bassein/modeli-bassejnov/item/12-hilton.html"><span>Далее</span></a>
												
					</div>
				</td>
			
			</tr>
		</table>

      <!-- Plugins: BeforeDisplay -->
      
      <!-- K2 Plugins: K2BeforeDisplay -->
      
      

      
      <!-- Plugins: AfterDisplayTitle -->
      
      <!-- K2 Plugins: K2AfterDisplayTitle -->
      
      <!-- Plugins: BeforeDisplayContent -->
      
      <!-- K2 Plugins: K2BeforeDisplayContent -->
      
            
      
      <div class="clr"></div>

      
      <div class="clr"></div>

      <!-- Plugins: AfterDisplayContent -->
      
      <!-- K2 Plugins: K2AfterDisplayContent -->
      
      
      
      
      
			
			

      <!-- Plugins: AfterDisplay -->
      
      <!-- K2 Plugins: K2AfterDisplay -->
      
      <div class="clr"></div>
    </li>
        <li>
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td class="img">
									
				</td>
			</tr>
			<tr>
				<td>
					<div class="moduleItemIntrotext">
													<a class="moduleItemTitle" href="/bassein/modeli-bassejnov/item/11-kontinent.html">Континент</a>
						
													<p>
	<img alt="florencia" src="/images/kontinent_obrezan.png" /></p>

<p>
	Длинна - 10,7 м<br />
	Ширина - 5,5 м<br />
	Глубина - 1/1,85 м</p>

																			<a class="moduleItemReadMore" href="/bassein/modeli-bassejnov/item/11-kontinent.html"><span>Далее</span></a>
												
					</div>
				</td>
			
			</tr>
		</table>

      <!-- Plugins: BeforeDisplay -->
      
      <!-- K2 Plugins: K2BeforeDisplay -->
      
      

      
      <!-- Plugins: AfterDisplayTitle -->
      
      <!-- K2 Plugins: K2AfterDisplayTitle -->
      
      <!-- Plugins: BeforeDisplayContent -->
      
      <!-- K2 Plugins: K2BeforeDisplayContent -->
      
            
      
      <div class="clr"></div>

      
      <div class="clr"></div>

      <!-- Plugins: AfterDisplayContent -->
      
      <!-- K2 Plugins: K2AfterDisplayContent -->
      
      
      
      
      
			
			

      <!-- Plugins: AfterDisplay -->
      
      <!-- K2 Plugins: K2AfterDisplay -->
      
      <div class="clr"></div>
    </li>
      </ul>
  </div>
  <div class="clr"></div>
  	
	
	
	
</div>		</div>
	
					</div>
				</div>
					</div>
	</div>
</div>

<div id="footer-wrap">
	<div id="footer">
		<div id="copyright"><div class="footer1">&#169; 2014 Запрещено использование любых материалов, находящихся на<br />этом сайте, без нашего согласия.</div>
<noindex><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t26.2;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число посетителей за"+
" сегодня' "+
"border='0' width='88' height='15'><\/a>")
//--></script><!--/LiveInternet--></noindex></div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24427085 = new Ya.Metrika({id:24427085,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/24427085" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

		<div id="medialine">
			<p><a href="http://www.medialine.by/" target="_blank" >Разработка сайта</a><span> &mdash; </span><img src="/templates/waterpoll/images/ml_logo.png"></p>
		</div>
		<div class="clear"></div>
	</div>
</div>

<script type="text/javascript">
	Shadowbox.init({
		skipSetup: true
	});

	jQuery('.shadbx').click(function () {

		// open a welcome message as soon as the window loads
		Shadowbox.open({
			content:    '<div class="popupShd"><p>Информацию о дилерах Вашего региона можно узнать по тел.: <br /> +7 (911) 161-161-5 <br /> +375 (44) 769-69-69</p><p><a href="http://empire-pools.ru/bassein/pokupka-basseina.html">Купить бассейн</a></p></div>',
			player:     "html",
			title:      "Информация",
			height:     190,
			width:      700
		});

	});
</script>

<script type="text/javascript"> _shcp = []; _shcp.push({widget_id : 633836, widget : "Chat"}); (function() { var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true; hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://widget.siteheart.com/apps/js/sh.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hcc, s.nextSibling); })();</script>
</html>

