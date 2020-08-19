<!DOCTYPE html>
<html lang="ru-ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Contacts"); ?></title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="<?php echo htmlspecialchars(($seoDescription !== "") ? $seoDescription : ""); ?>" />
	<meta name="keywords" content="<?php echo htmlspecialchars(($seoKeywords !== "") ? $seoKeywords : ""); ?>" />
		<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php echo htmlspecialchars(($seoTitle !== "") ? $seoTitle : "Contacts"); ?>" />
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
	<link href="css/common.css?ts=1597791713" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1597791713" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
	
<div class="wb_cont_inner"><div id="wb_element_instance41" class="wb_element wb-menu"><ul class="hmenu"><li><a href="" target="_self">Main</a></li><li><a href="Sensors-data/" target="_self">Sensors data</a></li><li class="active"><a href="Contacts/" target="_self">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance42" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1"><b>Opendata</b></h1>
</div><div id="wb_element_instance43" class="wb_element wb_text_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle">fast&amp;simple</h5>
</div><div id="wb_element_instance44" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance49" class="wb_element wb_text_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">Hi, I'm Alexander Noyanov</h2>
</div><div id="wb_element_instance50" class="wb_element"><form class="wb_form" method="post" enctype="multipart/form-data"><input type="hidden" name="wb_form_id" value="d9272a3f"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th class="wb-stl-normal">Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th class="wb-stl-normal">Email&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="Email"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr class="area-row"><th class="wb-stl-normal">Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2" required="required"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Send!</button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "d9272a3f") { ?>
				<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("d9272a3f", formValues, formErrors);
				<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
					<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode"))) { ?>
					if (window !== window.parent && window.parent.postMessage) {
						var data = {
							event: "wb_contact_form_sent",
							data: {
								state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
								type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
							}
						};
						window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
					}
					<?php } else { ?>
					wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
					<?php } ?>
					<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
				<?php } ?>
			<?php } ?>
			</script></div><div id="wb_element_instance51" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3">Write something! </h3>
</div><div id="wb_element_instance52" class="wb_element wb_element_shape"><div class="wb_shp"></div></div><div id="wb_element_instance53" class="wb_element wb_element_picture" title=""><img alt="gallery/ava" src="gallery_gen/7fb9947599aa79268081c4233ca67fb2_752x770.86738351254.jpg"></div><div id="wb_element_instance54" class="wb_element"><a class="wb_button" href="https://alex.noyanov.ru/Contacts/"><span>Telegram Bot for 3D printer</span></a></div><div id="wb_element_instance55" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-custom5">Other projects:</h1>
</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 174px;"><div id="wb_element_instance45" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2020 <a href="http://sensors.noyanov">sensors.noyanov</a></p></div><div id="wb_element_instance46" class="wb_element wb_element_picture" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот"><a href="https://webhost1.ru" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" target="_blank"><img alt="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" src="gallery_gen/114f88744f67f572ad7b728493aa11d9.png"></a></div><div id="wb_element_instance47" class="wb_element wb_element_picture" title=""><a href="http://facebook.com" target="_blank"><img alt="gallery/1435337774_facebook" src="gallery_gen/adf07b99184fb5a01c1138d3607dcb12.png"></a></div><div id="wb_element_instance48" class="wb_element wb_element_picture" title=""><a href="http://twitter.com"><img alt="gallery/1435337799_twitter" src="gallery_gen/221a59be819128aca44e4e7cf02d1786.png"></a></div><div id="wb_element_instance56" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
