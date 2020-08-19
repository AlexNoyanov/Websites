<!DOCTYPE html>
<html lang="ru-ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "How it works?"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "How it works?"); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta property="og:image" content="<?php echo htmlspecialchars(($seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20200813103743" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20200813103743" rel="stylesheet" type="text/css" id="wb-site-stylesheet" />
	<link href="css/common.css?ts=1597406077" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1597406077" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
</script>
	
	<link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css" />	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body class="site <?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php if (isset($wbLandingPage) && $wbLandingPage) echo ' data-landing-page="'.$wbLandingPage.'"'; ?>><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance66" class="wb_element wb_text_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle">3D printer telegram bot</h5>
</div><div id="wb_element_instance67" class="wb_element wb-menu"><ul class="hmenu"><li><a href="" target="_self">Main</a></li><li><a href="About-us/" target="_self">About us</a></li><li class="active"><a href="How-it-works/" target="_self">How it works?</a></li><li><a href="Contacts/" target="_self">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance68" class="wb_element wb_element_picture" title=""><img alt="gallery/Снимок экрана 2020-08-09 в 2.00.56" src="gallery_gen/af44886e9ac650106e4b88dc64526eb2_408x420.png"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance80" class="wb_element wb_text_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">Let's take a look a little bit closer </h2>

<p class="wb-stl-normal" style="text-align: center;"> </p>

<p class="wb-stl-normal" style="text-align: center;">Describing main parts of this project </p>
</div><div id="wb_element_instance81" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><font color="#ffffff"><span style="caret-color: rgb(255, 255, 255);">Improving your printer with TBot</span></font></h1>
</div><div id="wb_element_instance82" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance83" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-custom15" style="text-align: center;">Survailance</h3>

<p> </p>

<p class="wb-stl-custom16" style="text-align: center;">Watching printing process through the network using Raspberry PI</p>

<p class="wb-stl-custom16" style="text-align: center;">and USB camera  </p>
</div><div id="wb_element_instance84" class="wb_element wb_element_shape"><a class="wb_shp"></a></div><div id="wb_element_instance85" class="wb_element"><a class="wb_button" href="https://pimylifeup.com/raspberry-pi-webcam-server/"><span>Learn more how to build it</span></a></div><div id="wb_element_instance86" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance87" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-custom15" style="text-align: center;">Parts design</h3>

<p> </p>

<p class="wb-stl-custom17">        Using Autocad to design main parts. This dual channel relay cover model is available on Thingiverse like other models</p>
</div><div id="wb_element_instance88" class="wb_element wb_element_shape"><a class="wb_shp"></a></div><div id="wb_element_instance89" class="wb_element"><a class="wb_button" href="https://www.thingiverse.com/thing:4567584"><span>Get models</span></a></div><div id="wb_element_instance90" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance91" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-custom15" style="text-align: center;">TBot code</h3>

<p> </p>

<p class="wb-stl-custom17" style="text-align: center;">I used Java to write this Telegram bot. </p>

<p class="wb-stl-custom17" style="text-align: center;">All code is available on GitHub now. Still working to imporove some parts</p>
</div><div id="wb_element_instance92" class="wb_element wb_element_shape"><a class="wb_shp"></a></div><div id="wb_element_instance93" class="wb_element"><a class="wb_button" href="https://github.com/AlexNoyanov/Telegram_PrinterBot"><span>Get code on GitHub</span></a></div><div id="wb_element_instance94" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-custom17">The bot is a Java-based application wich can responde for user messages and button actions. I used Java because it fits perfectly for this type of projects due to its cross-platforming ability. Every class is created for its specific role here. Also it improved my skills in object-oriented programming and git.  </p>
</div><div id="wb_element_instance95" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-custom17">Using knowledge in modeling from the course of Autocad hepled me to create some parts of this project. Using relay cover box to mount dual-channel relay module on 3D printer 2020 T-slot profile.</p>
</div><div id="wb_element_instance96" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-custom17">Monitoring printing process with camera is a great feature becouse it makes it much safer. It helps not just watch prints but also an amoun of plastic and area around the printer. </p>
</div><div id="wb_element_instance97" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance98" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-custom15" style="text-align: center;">MySQL Database</h3>

<p> </p>

<p class="wb-stl-custom17" style="text-align: center;">Saving all messages from the users and bot response with MySQL server. Database design is one of the most important parts of this project </p>
</div><div id="wb_element_instance99" class="wb_element wb_element_shape"><a class="wb_shp"></a></div><div id="wb_element_instance100" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance101" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-custom15" style="text-align: center;">Raspberry PI + Apache</h3>

<p> </p>

<p class="wb-stl-custom17" style="text-align: center;">Using Raspberry PI module with web server and Python scripts to control 3D printer.</p>

<p class="wb-stl-custom17" style="text-align: center;">Next step idto move the whole database and TBot here. Still working on this </p>
</div><div id="wb_element_instance102" class="wb_element wb_element_shape"><a class="wb_shp"></a></div></div><div class="wb_cont_outer"><div id="wb_element_instance103" class="wb_element wb_element_shape"><a class="wb_shp"></a></div><div id="wb_element_instance104" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance105" class="wb_element wb_element_shape"><a class="wb_shp"></a></div><div id="wb_element_instance106" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance107" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 207px;"><div id="wb_element_instance69" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2020 <a href="http://alex.noyanov.ru">alex.noyanov.ru</a></p></div><div id="wb_element_instance70" class="wb_element wb_element_picture" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот"><a href="https://webhost1.ru" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" target="_blank"><img alt="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" src="gallery_gen/114f88744f67f572ad7b728493aa11d9.png"></a></div><div id="wb_element_instance71" class="wb_element wb_element_picture" title=""><a href="https://www.facebook.com/alexander.noyanov.9"><i class="fa fa-facebook-f" style="color:#39475d"></i></a></div><div id="wb_element_instance72" class="wb_element wb_element_picture" title=""><a href="https://twitter.com/AlexNoyanov"><i class="fa fa-twitter" style="color:#39475d"></i></a></div><div id="wb_element_instance73" class="wb_element wb_element_picture" title=""><a href="https://www.instagram.com/alex_noyanov/"><i class="fa fa-instagram" style="color:#39475d"></i></a></div><div id="wb_element_instance74" class="wb_element wb_element_picture" title=""><a href="https://www.youtube.com/channel/UCOGZE6EVi-R_Oxc_jXjQohQ?view_as=subscriber"><i class="fa fa-youtube" style="color:#39475d"></i></a></div><div id="wb_element_instance75" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3">3D Printer Telegram Bot</h3>

<p> </p>

<p class="wb-stl-footer">Created by Alexander Noyanov using Java, Python, Raspberry PI and some </p>

<p class="wb-stl-footer">other things </p>
</div><div id="wb_element_instance76" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3">Join on social</h3>
</div><div id="wb_element_instance77" class="wb_element wb_element_picture" title=""><a href="https://www.thingiverse.com/alexnoyanov/designs"><img alt="gallery/thingiverse-555149" src="gallery_gen/7c31121ae8a9dc34bf77388ef7ebd13c_124x124.png"></a></div><div id="wb_element_instance78" class="wb_element wb_element_picture" title=""><a href="https://twitter.com/twitter"><i class="fa fa-envelope" style="color:#39475d"></i></a></div><div id="wb_element_instance79" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-custom14">tbot@alex.noyanov.ru</p>
</div><div id="wb_element_instance108" class="wb_element wb_element_picture" title=""><a href="https://github.com/AlexNoyanov"><img alt="gallery/19507010" src="gallery_gen/e61cd843acdf8bfc54b7b3e22e49e388_124x124.png"></a></div><div id="wb_element_instance109" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
