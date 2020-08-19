<!DOCTYPE html>
<html lang="ru-ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Sensors data"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Sensors data"); ?>" />
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
	<link href="css/common.css?ts=1597792581" rel="stylesheet" type="text/css" />
	<link href="css/2.css?ts=1597792581" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
	
<div class="wb_cont_inner"><div id="wb_element_instance28" class="wb_element wb-menu"><ul class="hmenu"><li><a href="" target="_self">Main</a></li><li class="active"><a href="Sensors-data/" target="_self">Sensors data</a></li><li><a href="Contacts/" target="_self">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance29" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><b>Opendata</b></h1>
</div><div id="wb_element_instance30" class="wb_element wb_text_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle">fast&amp;simple</h5>
</div><div id="wb_element_instance31" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>


<?php include "tempGraph.php" ?>




<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 174px;"><div id="wb_element_instance32" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2020 <a href="http://sensors.noyanov">sensors.noyanov</a></p></div><div id="wb_element_instance33" class="wb_element wb_element_picture" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот"><a href="https://webhost1.ru" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" target="_blank"><img alt="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" src="gallery_gen/114f88744f67f572ad7b728493aa11d9.png"></a></div><div id="wb_element_instance34" class="wb_element wb_element_picture" title=""><a href="http://facebook.com" target="_blank"><img alt="gallery/1435337774_facebook" src="gallery_gen/adf07b99184fb5a01c1138d3607dcb12.png"></a></div><div id="wb_element_instance35" class="wb_element wb_element_picture" title=""><a href="http://twitter.com"><img alt="gallery/1435337799_twitter" src="gallery_gen/221a59be819128aca44e4e7cf02d1786.png"></a></div><div id="wb_element_instance36" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
