<?php defined('_JEXEC') or die;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<?php $this->setGenerator(null); ?>
	<?php JHTML::_('behavior.modal', 'a.modal', array('handler' => 'ajax'));
	
	
	 
    $doc = JFactory::getDocument();
   
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/libs/font-awesome-4.2.0/css/font-awesome.min.css');
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/libs/fancybox/jquery.fancybox.css');
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/libs/countdown/jquery.countdown.css');
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/libs/magnific-popup/magnific-popup.css');
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/libs/owl-carousel/owl.carousel.css');
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/libs/owl-carousel/owl.theme.css');	
/*	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/libs/owl-carousel1/owl.carousel1.css');*/

	
    $doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/jquery-mousewheel/jquery.mousewheel.min.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/fancybox/jquery.fancybox.pack.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/waypoints/waypoints-1.6.2.min.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/scrollto/jquery.scrollTo.min.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/countdown/jquery.plugin.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/countdown/jquery.countdown.min.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/countdown/jquery.countdown-ru.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/landing-nav/navigation.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/jquery/jquery-1.11.1.min.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/magnific-popup/jquery.magnific-popup.min.js');
	$doc->addScript($this->baseurl.'/templates/'.$this->template.'/libs/owl-carousel/owl.carousel.min.js');
	
	
	 ?>
	<jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/media.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/js/fancy_box/style.css" type="text/css" media="screen" />
	<?php if($this->countModules('left') ):?>
		<style type="text/css">
			#content_block{margin-left:290px;}
		</style>
	<?php endif; ?>
    
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/common.js" type="text/javascript"></script>
	<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/fancy_box/jquery.fancybox-1.2.1.pack.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/shadowbox/shadowbox.css">
	<script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/js/shadowbox/shadowbox.js"></script>
	
	<script type="text/javascript">jQuery.noConflict();</script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
		
			jQuery("a.no_click").each(function(){
				jQuery(this).attr('href','javascript:void(0)');
			});
		var li_item_114_a = jQuery('li.item-114 a');
		//li_item_114_a.prop('rel','{handler: "iframe", size: {x: 865, y: 423}, onClose: function() {}}');
		var href_ = li_item_114_a.prop('href');
		li_item_114_a.prop('href',href_+'?tmpl=component')
		
		/* fanSybox...wtf?! */
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
		
		jQuery("a.fancybox").fancybox({						
		"margin" : 300,	 // ширина окна, px (425px - по умолчанию)
		"frameWidth" : 470,	 // ширина окна, px (425px - по умолчанию)
		"frameHeight" : 1300, // высота окна, px(355px - по умолчанию)
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
		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bpfix.js" type="text/javascript"></script>		
		<script type="text/javascript">DD_belatedPNG.fix('*');</script>	
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie6.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">
		jQuery(document).ready(function(){
		});	
	</script>
		
	<![endif]-->
<meta name="yandex-verification" content="461ae00cdfade51b" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
</head>

<?php //print_r (Jrequest::getVar('Itemid'));?>
<?php $Itemid = Jrequest::getVar('Itemid');?>

<body <?php if($Itemid == 101) echo 'class="main_page"'?>>


<header class="top_header">
	  <div class="container">
        <div class="row">
        <div class="top_header_in">
        
                  <div class="col-md-2">					
                        <div class="logo">       
                         <a href="/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/images/logo.png"></a>                 
                        </div>
                  </div>      
                  <div class="col-md-8">           
                      <div class="top_pos">					
                        <button class="top_pos_button hidden-md hidden-lg"><i class="fa fa-bars"></i></button>
                            <jdoc:include type="modules" name="top_pos" style="xhtml" />
                       </div>	     
                  </div>      
           <div class="col-md-2">               
                       <ul id="additional_top_menu">
                <li>
                    <a href="/" title="Домой"><img alt="" border="0" src="images/ico/home_ico.png" /></a></li>
                <li>
                    <a href="#" onclick="return bookmark(this);" title="В избранное"><img alt="" border="0" src="images/ico/add_to_fav_ico.png" /></a></li>
                <li>
                    <a href="index.php?option=com_search&amp;view=search&amp;searchword=Я%20ищу%20....&amp;Itemid=125" title="Поиск"><img alt="" border="0" src="images/ico/search_ico.png" /></a></li>
                      </ul>           
           </div>
	                
	      </div>
	    </div>
	   </div>
</header>




		<div id="center" class="clearfix <?php if($Itemid == 101) echo 'center_main_page'?>">
			<div class="container">
                 <div class="row"><div id="center_wrap" class="clearfix">
             
                  <div class="col-md-12">
				<?php if($this->countModules('user1') ):?>
					<div id="user1">
						<jdoc:include type="modules" name="user1" style="xhtml" />
					</div>
				<?php endif; ?> 
				</div>
                </div>
	</div>
    
    <div class="container">
                 <div class="row">
                  <div class="col-md-3">
				<?php if($this->countModules('left') ):?>
					<div id="left_block">
                   
                     			<jdoc:include type="modules" name="left" style="xhtml" />
						
                         <div class="ban_min">
                        	<a href="http://cover-pools.ru/">Защитное покрытие</a></p>

<p>
	<a href="http://www.saunahous.ru/">Сауны</a></p>

<p>
	<a href="http://www.garden-hous.ru/">Беседки</a></p>

                         </div>
                        
						<jdoc:include type="modules" name="left1" style="xhtml" />
					</div></div>
				<?php endif; ?>
			 <div class="col-md-9">
				<div id="content_block" <?php if($Itemid == 101) echo 'class="main_page"'?>>

		
		
				
				
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div></div></div>
			<?php if($this->countModules('slider') ):?>
				<div id="slider_block" class="clearfix">
					<div id="slider_block_wrap">
						<jdoc:include type="modules" name="slider" style="xhtml" />
					</div>
				</div>
			<?php endif; ?>
			<jdoc:include type="modules" name="slider" style="xhtml" />
					</div>
				</div>
</div>
</div>
</div>
<noindex>

<div id="footer-wrap">
 <div class="container">
                 <div class="row">
                  
	<div id="footer">
    <div class="col-md-6">
		<div id="copyright"><jdoc:include type="modules" name="copyright" /><!--LiveInternet counter--><script type="text/javascript"><!--
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
</div>
                   <div class="col-md-6">
		<div id="medialine">
			<p><a href="http://www.medialine.by/" target="_blank" <?php if($Itemid != 101) echo 'rel="nofollow"'?>>Разработка сайта</a><span> &mdash; </span><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/ml_logo.png"></p>
		</div>
    		</div>
		<div class="clear"></div>
	</div></div></div>
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

<?
/*
<script type="text/javascript"> _shcp = []; _shcp.push({widget_id : 633836, widget : "Chat"}); (function() { var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true; hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://widget.siteheart.com/apps/js/sh.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hcc, s.nextSibling); })();</script>
*/
?>

<!-- {literal} -->
<script type='text/javascript'>
    window['li'+'v'+'eT'+'e'+'x'] = true,
    window['live'+'TexI'+'D'] = 118065,
    window['liveT'+'ex_ob'+'jec'+'t'] = true;
    (function() {
        var t = document['cre'+'a'+'teElem'+'e'+'nt']('script');
        t.type ='text/javascript';
        t.async = true;
        t.src = '//cs'+'15'+'.l'+'ivete'+'x.'+'ru'+'/js'+'/clie'+'nt.js';
        var c = document['getElemen'+'tsByTag'+'Na'+'me']('script')[0];
        if ( c ) c['p'+'ar'+'en'+'t'+'Nod'+'e']['i'+'nsertB'+'efore'](t, c);
        else document['docume'+'n'+'tElemen'+'t']['firs'+'t'+'Ch'+'ild']['app'+'en'+'dCh'+'ild'](t);
    })();
</script>
<!-- {/literal} -->
</noindex>
</body>
</html>

