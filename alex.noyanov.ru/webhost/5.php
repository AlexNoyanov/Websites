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
	<link href="css/common.css?ts=1597406077" rel="stylesheet" type="text/css" />
	<link href="css/5.css?ts=1597406077" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
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
	
<div class="wb_cont_inner"><div id="wb_element_instance110" class="wb_element wb_text_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle">3D printer telegram bot</h5>
</div><div id="wb_element_instance111" class="wb_element wb-menu"><ul class="hmenu"><li><a href="" target="_self">Main</a></li><li><a href="About-us/" target="_self">About us</a></li><li><a href="How-it-works/" target="_self">How it works?</a></li><li class="active"><a href="Contacts/" target="_self">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance112" class="wb_element wb_element_picture" title=""><img alt="gallery/Снимок экрана 2020-08-09 в 2.00.56" src="gallery_gen/af44886e9ac650106e4b88dc64526eb2_408x420.png"></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance124" class="wb_element wb_text_element" style=" line-height: normal;"></div><div id="wb_element_instance125" class="wb_element"><form class="wb_form" method="post" enctype="multipart/form-data"><input type="hidden" name="wb_form_id" value="842be0c2"><textarea name="message" rows="3" cols="20" class="hpc" autocomplete="off"></textarea><table><tr><th class="wb-stl-normal">Your Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Your Name"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th class="wb-stl-normal">Email&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="Email"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr><th class="wb-stl-normal">Country&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Country"><input class="form-control form-field" type="text" value="" name="wb_input_2" required="required"></td></tr><tr class="area-row"><th class="wb-stl-normal">Your message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_3" value="Your message"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_3" required="required"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Send!</button></td></tr></table><?php if (isset($wbPopupMode) && $wbPopupMode): ?><input type="hidden" name="wb_popup_mode" value="1" /><?php endif; ?></form><script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "842be0c2") { ?>
				<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("842be0c2", formValues, formErrors);
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
			</script></div><div id="wb_element_instance126" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-normal"><b>Your reply means a lot, Thank you! Everybody can help to improve this project </b></p>
</div><div id="wb_element_instance127" class="wb_element wb_text_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Write something here</h1>
</div><div id="wb_element_instance128" class="wb_element wb_text_element" style=" line-height: normal;"></div><div id="wb_element_instance129" class="wb_element wb_text_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">open for everybody</h4>
</div></div><div class="wb_cont_outer"><div id="wb_element_instance130" class="wb_element wb_element_shape"><a class="wb_shp"></a></div></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 207px;"><div id="wb_element_instance113" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2020 <a href="http://alex.noyanov.ru">alex.noyanov.ru</a></p></div><div id="wb_element_instance114" class="wb_element wb_element_picture" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот"><a href="https://webhost1.ru" title="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" target="_blank"><img alt="Дешевый SSD хостинг, VDS сервера, выделенный сервер без забот" src="gallery_gen/114f88744f67f572ad7b728493aa11d9.png"></a></div><div id="wb_element_instance115" class="wb_element wb_element_picture" title=""><a href="https://www.facebook.com/alexander.noyanov.9"><i class="fa fa-facebook-f" style="color:#39475d"></i></a></div><div id="wb_element_instance116" class="wb_element wb_element_picture" title=""><a href="https://twitter.com/AlexNoyanov"><i class="fa fa-twitter" style="color:#39475d"></i></a></div><div id="wb_element_instance117" class="wb_element wb_element_picture" title=""><a href="https://www.instagram.com/alex_noyanov/"><i class="fa fa-instagram" style="color:#39475d"></i></a></div><div id="wb_element_instance118" class="wb_element wb_element_picture" title=""><a href="https://www.youtube.com/channel/UCOGZE6EVi-R_Oxc_jXjQohQ?view_as=subscriber"><i class="fa fa-youtube" style="color:#39475d"></i></a></div><div id="wb_element_instance119" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3">3D Printer Telegram Bot</h3>

<p> </p>

<p class="wb-stl-footer">Created by Alexander Noyanov using Java, Python, Raspberry PI and some </p>

<p class="wb-stl-footer">other things </p>
</div><div id="wb_element_instance120" class="wb_element wb_text_element" style=" line-height: normal;"><h3 class="wb-stl-heading3">Join on social</h3>
</div><div id="wb_element_instance121" class="wb_element wb_element_picture" title=""><a href="https://www.thingiverse.com/alexnoyanov/designs"><img alt="gallery/thingiverse-555149" src="gallery_gen/7c31121ae8a9dc34bf77388ef7ebd13c_124x124.png"></a></div><div id="wb_element_instance122" class="wb_element wb_element_picture" title=""><a href="https://twitter.com/twitter"><i class="fa fa-envelope" style="color:#39475d"></i></a></div><div id="wb_element_instance123" class="wb_element wb_text_element" style=" line-height: normal;"><p class="wb-stl-custom14">tbot@alex.noyanov.ru</p>
</div><div id="wb_element_instance131" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
