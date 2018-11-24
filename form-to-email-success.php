<!doctype html>
<html lang="en">

<head>
	<!--
	PARTIAL > Google Tag Manager script
	-->
	<?php echo file_get_contents("assets/partials/google-tag-manager-script.html"); ?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />
	<meta name="robots" content="noindex, nofollow">
	<meta name="pagename" content="Solid Gold Podcast Studios | #BeHeard">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<!--
	PARTIAL > Base URL
		-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>
	<title>Solid Gold Podcast Studios | #BeHeard</title>
	<link rel="icon" href="favicon.png" sizes="32x32 64x64 128x128" type="image/png">

	<!-- 
	LINK > Critical CSS
	-->
	<link rel="stylesheet" href="assets/critical.min.css" />

	<!--
	LINK > Async-load non-critical CSS
	-->
	<link rel="preload" href="/assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="/assets/non-critical.min.css"></noscript>

	<!--
	PARTIAL > Async-load non-critical CSS polyfill script
	-->
	<?php echo file_get_contents("assets/partials/loadcss.html"); ?>

	<!--
	PARTIAL > Cookie notice
	-->
	<?php echo file_get_contents("assets/partials/cookies.html"); ?>

	<!--
	SCRIPT > jQuery CDN
	-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--
	SCRIPT > Combined and deferred
	-->
	<script src="assets/scripts/combined.min.js" defer></script>

</head>

<body class="theme-grey">

	<!--
	PARTIAL > Google Tag Manager body
	-->
	<?php echo file_get_contents("assets/partials/google-tag-manager-body.html"); ?>

	<!--
	PARTIAL > Browse Happy compatibility notice
	-->
	<?php echo file_get_contents("assets/partials/browse-happy.html"); ?>

	<!--
	PARTIAL > Global page leadin with logo and menu
	-->
	<?php echo file_get_contents("assets/partials/page-leadin.html"); ?>

	<!--
	Masthead
	-->
	<header class="pattern-channel-masthead flow-ttb-mob flow-ltr-tab pad-respond-xy-mob theme-dark-grey border-b-mob">

		<!--
		Container
		-->

		<div class="flow-ttb-mob width-100 constrain">

			<!--
			Text
			-->

			<div class="flow-ttb-mob pad-respond-b-mob align-fs-mob">

				<h1 class="text-l-mob">Thanks, your message has been sent.</h1>
				<p class="text-l-mob">We'll get back to you as soon as we can. If it's urgent, you can start a <a href="https://api.whatsapp.com/send?phone=27832271409&text=[SGS]%20Hi%20there" target="_blank" rel="noopener">WhatsApp chat</a>.</span></p>

			</div>

		</div>

	</header>

	<!--
	Map
	-->

	<section class="theme-grey border-b-mob" id="map">

		<!--
		Container
		-->

		<div class="flow-ttb-mob width-100" style="height:300px">

			<!--
			Google map
			-->

			<object data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.496482561411!2d28.0051696147705!3d-26.082707183492023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957485f339318d%3A0x7b624606e9099d33!2s5+Rhodes+St%2C+Kensington+B%2C+Randburg%2C+2194%2C+South+Africa!5e0!3m2!1sen!2sus!4v1540764353767" width="100%" height="100%" frameborder="0" frameborder="0" style="border:0px"></object>

		</div>

	</section>


	<!--
	PARTIAL > Global page footer
	-->
	<?php echo file_get_contents("assets/partials/page-footer.html"); ?>

	<!--
	Preload elements
	-->
	<span class="preload-me"></span>

</body>

</html>
