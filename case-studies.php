<!doctype html>
<html lang="en">

<head>
	<!--
	PARTIAL > Google Tag Manager script
	-->
	<?php echo file_get_contents("assets/partials/google-tag-manager-script.html"); ?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />
	<meta name="keywords" content="podcast, channel, client, recording, studio, broadcast, radio, corporate communication, #BeHeard" />
	<meta name="description" content="Podcast case studies #BeHeard" />
	<meta name="robots" content="index, follow">
	<meta name="pagename" content="Solid Gold Podcast Case Studies | #BeHeard">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<!--
	PARTIAL > Base URL
		-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>
	<meta property="og:title" content="Solid Gold Podcast Studios | #BeHeard" />
	<meta property="og:description" content="Podcast case studies #BeHeard" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://solidgoldstudios.co.za/case-studies.php" />
	<meta property="og:image" content="http://www.solidgoldstudios.co.za/assets/images/logo.png" />
	<meta property="og:type" content="website" />
	<title>Solid Gold Podcast Case Studies | #BeHeard</title>
	<link rel="icon" href="favicon.png" sizes="32x32 64x64 128x128" type="image/png">
	<link rel="dns-prefetch" href="https://solidgoldstudios.co.za/">

	<!-- 
	LINK > Critical CSS
	-->
	<link rel="stylesheet" href="assets/critical.min.css" />

	<!--
	LINK > Async-load non-critical CSS
	-->
	<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>

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
	<header class="pattern-masthead flow-ttb-mob pad-respond-xy-mob theme-dark-grey border-b-mob">

		<!--
		Container
		-->

		<div class="width-100 constrain">

			<div>
				<div class="pad-respond-y-mob">

					<h1 class="text-l-mob">Case studies</span></h1>

				</div>
				<div class="pad-respond-b-mob pad-t-mob">

					<label for="filter">
						<span>Filter Case Studies</span>
						<input type="text" id="filter">
					</label>

				</div>

			</div>

		</div>

	</header>

	<main>

		<!--
		SECTION > Podcast channels
		-->

		<section class="pattern-item-text pad-respond-xy-mob pad-respond-t-mob theme-grey border-b-mob">

			<!--
			Container
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond">

				<!--
				Case Studies
				-->

				<a href="booyah.php" class="flow-ttb-mob width-100 radius-mob border-mob" data-pattern-channel-item="radio show archives">
					<h2>Radio Show Archives</h2>
					<p>Carmen Murray</p>
				</a>

			</div>

		</section>

	</main>

	<!--
	PARTIAL > Global page footer
	-->
	<?php echo file_get_contents("assets/partials/page-footer.html"); ?>

	<!--
	HTML > Preload elements
	-->
	<span class="preload-me"></span>

	<!--
	SCRIPT > Filter
	-->
	<script>
		$("#filter").keyup(function(){
			var selectItem = $(this).val();
			filter(selectItem);
			});
			function filter(e) {
				var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
				$('.pattern-channel-item').hide().filter(function () {
						return regex.test($(this).data('pattern-channel-item'))
			}).show();
		}
	</script>

</body>

</html>
