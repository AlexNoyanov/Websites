<!DOCTYPE html>
<html lang="ru-ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Main"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Main"); ?>" />
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
	<link href="css/common.css?ts=1597791712" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1597791712" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element wb-menu"><ul class="hmenu"><li class="active"><a href="" target="_self">Main</a></li><li><a href="Sensors-data/" target="_self">Sensors data</a></li><li><a href="Contacts/" target="_self">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance1" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><b>Opendata</b></h1>
</div><div id="wb_element_instance2" class="wb_element wb_text_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle">fast&amp;simple</h5>
</div><div id="wb_element_instance3" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance8" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3">THE WAY OF FURTHER DEVELOPMENT</h3>
</div><div id="wb_element_instance9" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance10" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><b>esp8266 wi-fi module+mysql</b></h1>
</div><div id="wb_element_instance11" class="wb_element wb_text_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: center;">Open data from sensors</h4>
</div><div id="wb_element_instance12" class="wb_element wb_text_element" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;">All code for this project</h2>
</div><div id="wb_element_instance13" class="wb_element wb_text_element" style=" line-height: normal;"><p><font color="#ffffff" face="Open Sans, sans-serif"><span style="caret-color: rgb(255, 255, 255); font-size: 28px; text-transform: uppercase;"><b>Available on github now</b></span></font></p>
</div><div id="wb_element_instance14" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance15" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-normal">After understanding of working concept with one single sensor connected to one module it will be possible to create the entire system with many different sensors and devices in the network. Increasing number of devices with sensors is one way of developing for this project.</p>
</div><div id="wb_element_instance16" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance17" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance18" class="wb_element wb_text_element" style=" line-height: normal;"><p><font color="#ffffff" face="Open Sans, sans-serif"><span style="caret-color: rgb(255, 255, 255); font-size: 28px; text-transform: uppercase;"><b>idea</b></span></font></p>
</div><div id="wb_element_instance19" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3">AND WHAT THIS DATA FOR?</h3>
</div><div id="wb_element_instance20" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-normal">Understanding the whole process of saving data from sensor to database can help  </p>
</div><div id="wb_element_instance21" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-normal">The idea of this project is to save data from remote sensors to MySQL</p>

<p class="wb-stl-normal">database and watch on the website. Using WI-FI module ESP8266  </p>
</div><div id="wb_element_instance22" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-normal">This project is open-source and everybody can use it! Link to GitHub is here: </p>
</div><div id="wb_element_instance23" class="wb_element wb_element_picture" title=""><img alt="gallery/gears-153639_640" src="gallery_gen/4cba3c3d86428593f3545936f5bbabbf_637x637.png"></div><div id="wb_element_instance24" class="wb_element wb_element_picture" title=""><img alt="gallery/6254fc90f12b05946dfdab75c27824116766e5e0" src="gallery_gen/b26dfb4416cb9065b19e8fc429e7d663_279x188.65714285714.jpg"></div><div id="wb_element_instance25" class="wb_element wb_element_picture" title=""><img alt="gallery/2000px-Database-mysql.svg_-2" src="gallery_gen/406df6e8f4f46744397fe05690eace66_590.33333333332x836.png"></div><div id="wb_element_instance26" class="wb_element wb_element_picture" title=""><img alt="gallery/plus-304947_960_720" src="gallery_gen/9cfbdcddb8dbf286ddbd43da3b8babfc_316x320.png"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 174px;"><div id="wb_element_instance4" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2020 <a href="http://sensors.noyanov">sensors.noyanov</a></p></div><div id="wb_element_instance5" class="wb_element wb_element_picture" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот"><a href="https://webhost1.ru" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" target="_blank"><img alt="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" src="gallery_gen/114f88744f67f572ad7b728493aa11d9.png"></a></div><div id="wb_element_instance6" class="wb_element wb_element_picture" title=""><a href="http://facebook.com" target="_blank"><img alt="gallery/1435337774_facebook" src="gallery_gen/adf07b99184fb5a01c1138d3607dcb12.png"></a></div><div id="wb_element_instance7" class="wb_element wb_element_picture" title=""><a href="http://twitter.com"><img alt="gallery/1435337799_twitter" src="gallery_gen/221a59be819128aca44e4e7cf02d1786.png"></a></div><div id="wb_element_instance27" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
