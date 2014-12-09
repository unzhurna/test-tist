<!DOCTYPE html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie linen"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie linen" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie linen" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie9 linen" lang="en"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)]><!--><html class="no-js linen" lang="en"><!--<![endif]-->


<!-- Mirrored from www.display-inline.fr/demo/developr/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Dec 2014 03:39:38 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Developr</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- http://davidbcalhoun.com/2010/viewport-metatag -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ and http://darkforge.blogspot.fr/2010/05/customize-android-browser-scaling-with.html -->
	<meta name="viewport" content="user-scalable=0, initial-scale=1.0, target-densitydpi=115">

	<!-- For all browsers -->
	<link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/reset3860.css?v=1">
	<link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/style3860.css?v=1">
	<link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/colors3860.css?v=1">
	<link rel="stylesheet" media="print" href="<?php echo config_item('assets'); ?>css/print3860.css?v=1">
	<!-- For progressively larger displays -->
	<link rel="stylesheet" media="only all and (min-width: 480px)" href="<?php echo config_item('assets'); ?>css/4803860.css?v=1">
	<link rel="stylesheet" media="only all and (min-width: 768px)" href="<?php echo config_item('assets'); ?>css/7683860.css?v=1">
	<link rel="stylesheet" media="only all and (min-width: 992px)" href="<?php echo config_item('assets'); ?>css/9923860.css?v=1">
	<link rel="stylesheet" media="only all and (min-width: 1200px)" href="<?php echo config_item('assets'); ?>css/12003860.css?v=1">
	<!-- For Retina displays -->
	<link rel="stylesheet" media="only all and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="css/2x3860.css?v=1">

	<!-- Additional styles -->
	<link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/styles/form3860.css?v=1">
	<link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/styles/switches3860.css?v=1">

	<!-- Login pages styles -->
	<link rel="stylesheet" media="screen" href="<?php echo config_item('assets'); ?>css/login3860.css?v=1">

	<!-- JavaScript at bottom except for Modernizr -->
	<script src="<?php echo config_item('assets'); ?>js/libs/modernizr.custom.js"></script>

	<!-- For Modern Browsers -->
	<link rel="shortcut icon" href="<?php echo config_item('assets'); ?>img/favicons/favicon.png">
	<!-- For everything else -->
	<link rel="shortcut icon" href="<?php echo config_item('assets'); ?>img/favicons/favicon.ico">

	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- iPhone ICON -->
	<link rel="apple-touch-icon" href="<?php echo config_item('assets'); ?>img/favicons/apple-touch-icon.png" sizes="57x57">
	<!-- iPad ICON -->
	<link rel="apple-touch-icon" href="<?php echo config_item('assets'); ?>img/favicons/apple-touch-icon-ipad.png" sizes="72x72">
	<!-- iPhone (Retina) ICON -->
	<link rel="apple-touch-icon" href="<?php echo config_item('assets'); ?>img/favicons/apple-touch-icon-retina.png" sizes="114x114">
	<!-- iPad (Retina) ICON -->
	<link rel="apple-touch-icon" href="<?php echo config_item('assets'); ?>img/favicons/apple-touch-icon-ipad-retina.png" sizes="144x144">

	<!-- iPhone SPLASHSCREEN (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo config_item('assets'); ?>img/splash/iphone.png" media="(device-width: 320px)">
	<!-- iPhone (Retina) SPLASHSCREEN (640x960) -->
	<link rel="apple-touch-startup-image" href="<?php echo config_item('assets'); ?>img/splash/iphone-retina.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
	<!-- iPhone 5 SPLASHSCREEN (640×1096) -->
	<link rel="apple-touch-startup-image" href="<?php echo config_item('assets'); ?>img/splash/iphone5.png" media="(device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
	<!-- iPad (portrait) SPLASHSCREEN (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo config_item('assets'); ?>img/splash/ipad-portrait.png" media="(device-width: 768px) and (orientation: portrait)">
	<!-- iPad (landscape) SPLASHSCREEN (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo config_item('assets'); ?>img/splash/ipad-landscape.png" media="(device-width: 768px) and (orientation: landscape)">
	<!-- iPad (Retina, portrait) SPLASHSCREEN (2048x1496) -->
	<link rel="apple-touch-startup-image" href="<?php echo config_item('assets'); ?>img/splash/ipad-portrait-retina.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2)">
	<!-- iPad (Retina, landscape) SPLASHSCREEN (1536x2008) -->
	<link rel="apple-touch-startup-image" href="<?php echo config_item('assets'); ?>img/splash/ipad-landscape-retina.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 2)">

	<!-- Microsoft clear type rendering -->
	<meta http-equiv="cleartype" content="on">
</head>

<body>

	<div id="container">

		<hgroup id="login-title" class="large-margin-bottom">
			<h1 class="login-title-image">Developr</h1>
			<h5>&copy; Your Company</h5>
		</hgroup>

		<form method="post" action="#" id="form-login">
			<ul class="inputs black-input large">
				<!-- The autocomplete="off" attributes is the only way to prevent webkit browsers from filling the inputs with yellow -->
				<li><span class="icon-user mid-margin-right"></span><input type="text" name="login" id="login" value="" class="input-unstyled" placeholder="Login" autocomplete="off"></li>
				<li><span class="icon-lock mid-margin-right"></span><input type="password" name="pass" id="pass" value="" class="input-unstyled" placeholder="Password" autocomplete="off"></li>
			</ul>
			<button type="submit" class="button glossy full-width huge">Login</button>
		</form>

	</div>

	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Scripts -->
	<script src="<?php echo config_item('assets'); ?>js/libs/jquery-1.10.2.min.js"></script>
	<script src="<?php echo config_item('assets'); ?>js/setup.js"></script>

	<!-- Template functions -->
	<script src="<?php echo config_item('assets'); ?>js/developr.input.js"></script>
	<script src="<?php echo config_item('assets'); ?>js/developr.message.js"></script>
	<script src="<?php echo config_item('assets'); ?>js/developr.notify.js"></script>
	<script src="<?php echo config_item('assets'); ?>js/developr.tooltip.js"></script>
	<?php echo (!isset($script)) ? '' : $script; ?>	

</body>
</html>