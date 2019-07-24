<?php

	// Construct a link to the relevant json file referenced in the address bar
	// ----------------------------------------------------------------------------------------------------

	// Get the file name from the url so we know which json file to insert into the template
	$file_name = end(explode('=', $_SERVER['REQUEST_URI']));

	// add the file name to the folder path so we can get the json file
	$file = 'assets/data/use-cases/json/'.$file_name.'.json';

	// Check if the json file exists, otherwise redirect and exit script
	// ----------------------------------------------------------------------------------------------------

	if (!file_exists($file)) {
		// Redirect to 404 error page
		echo '
		<!DOCTYPE html>
		<html lang="en">
		<meta charset="utf-8">
		<script>
			window.location = "https://solidgoldstudios.co.za/errors/404.php"
		</script>
		</html>
		';
		exit();
	};

	// Get the contents of the json file and decode the string into readable text
	$json_data = file_get_contents($file);
	$data = json_decode($json_data);

	// Get the json file name
	// ----------------------------------------------------------------------------------------------------

	// Get the json file name and construct the full url
	$file_name = basename($file, '.json');

	// Construct html components to be used in the final html output
	// ----------------------------------------------------------------------------------------------------

	// If image 1 caption data are *not* present, then nullify image 1 variable
	if ($data->asideImage1Caption == '') {
		$aside_image1 = null;

	}
	else {

		// If image 1 caption data *are* present, then construct the link to the image
		$aside_image1_url = 'assets/images/use-cases/'.$file_name.'-1.jpg';

		// If image 1 caption data *are* present, then construct the figure element
		$aside_image1 = '
			<figure class="( use-case__xml-photo )">
				<figcaption>'.$data->asideImage1Caption.'</figcaption>
				<img src="'.$aside_image1_url.'" title="'.$data->asideImage1Caption.'" title="'.$data->asideImage1Caption.'" data-action="zoom">
			</figure>
		';

	};

	// If image 2 caption data are *not* present, then nullify image 2 variable
	if ($data->asideImage2Caption == '') {
		$aside_image2 = null;

	}
	else {

		// If image 2 caption data *are* present, then construct the link to the image
		$aside_image2_url = 'assets/images/use-cases/'.$file_name.'-2.jpg';

		// If image 1 caption data *are* present, then construct the figure element
		$aside_image2 = '
			<figure class="( use-case__xml-photo )">
				<figcaption>'.$data->asideImage2Caption.'</figcaption>
				<img src="'.$aside_image2_url.'" title="'.$data->asideImage2Caption.'" title="'.$data->asideImage2Caption.'" data-action="zoom">
			</figure>
		';

	};

	// If image 3 caption data are *not* present, then nullify image 3 variable
	if ($data->asideImage3Caption == '') {
		$aside_image3 = null;

	}
	else {

		// If image 3 caption data *are* present, then construct the link to the image
		$aside_image3_url = 'assets/images/use-cases/'.$file_name.'-3.jpg';

		// If image 1 caption data *are* present, then construct the figure element
		$aside_image3 = '
			<figure class="( use-case__xml-photo )">
				<figcaption>'.$data->asideImage3Caption.'</figcaption>
				<img src="'.$aside_image3_url.'" title="'.$data->asideImage3Caption.'" title="'.$data->asideImage3Caption.'" data-action="zoom">
			</figure>
		';

	};

	// Display the final html
	// ----------------------------------------------------------------------------------------------------

	echo '

		<!DOCTYPE html>
		<html lang="en">
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />
		<link type="application/rss+xml" rel="alternate" title="'.$data->title.' with '.$data->host.'" href="'.$data->rssUrl.'"/>

		<!--
		PARTIAL: Base URL
		-->

	';

	// Include base url
	include("assets/partials/base-url.html");

	echo '
		
		<!--
		PARTIAL: Google Tag Manager script
		-->

	';

	// Include Google tag manager script
	include("assets/partials/google-tag-manager-script.html");

	echo '
		
		<!-- 
		LINK/PARTIAL: Defer load non-critical CSS
		-->
		<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'" />
		<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>

	';

	// Include Filament Group's loadCSS script to defer non-critial css
	include("assets/partials/loadCSS.html");

	echo '
		
		<meta name="description" content="'.$data->title.' podcast use case from Solid Gold Podcast Studios" />
		<meta name="robots" content="index, follow" />
		<meta name="classification" content="business" />
		<meta name="pagename" content="Solid Gold Podcast Studios | '.$data->title.'" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="MobileOptimized" content="320" />
		<meta property="og:title" content="Solid Gold Podcast Studios | '.$data->title.'" />
		<meta property="og:description" content="'.$data->title.' podcast use case from Solid Gold Podcast Studios" />
		<meta property="og:locale" content="en_ZA" />
		<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
		<meta property="og:type" content="website" />
		<title>Solid Gold Podcast Studios | '.$data->title.'</title>
		<link rel="canonical" href="https://solidgoldstudios.co.za/use-case.php?title='.$file_name.'" />
		<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
		<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">
		
	';

	// Include Google tag manager body
	include("assets/partials/google-tag-manager-body.html");

	echo '
		
		<!--
		STYLES: Inline load critical CSS
		-->
		<style>

	';

	// Inline load critical CSS
	include("assets/critical.min.css");

	echo '

		</style>

	';

	// Include page leader with menu
	include("assets/partials/pattern-page-leader.html");

	echo '

		<!--
		MAIN
		-->
		
		<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->
		
			<!--
			ARTICLE: Use case
			-->
		
			<article class="pad-respond-xy-mob theme-light-grey-mob" id="section_usecase" aria-labelledby="section_usecase_h1_title">
		
				<!--
				LAYOUT CONTAINER
				-->
		
				<h1 hidden>Use case</h1> <!-- For accessiblity audit only -->
		
				<!--
				LAYOUT CONTAINER
				-->
		
				<div class="constrain pad-y-mob">

					<div aria-hidden="true"><span class="text-heading-badge--light">Use Case</span></div>
					<div class="flexdir-ttb-mob flexdir-ltr-tab">
						<div class="pad-respond-r-tab">
							<h1 id="section_usecase_h1_title">'.$data->title.'</h1>
							<p>'.$data->introText.'</p>
							'.$data->bodyHtml.'
						</div>
						<div class="( use-case__xml ) width-auto-tab pad-respond-l-tab border-l-tab">
							'.$aside_image1.'
							'.$aside_image2.'
							'.$aside_image3.'
						</div>
					</div>

				</div>

			</article>
			
		</div>
		
		<!--
		PARTIAL: Page footer
		-->

	';

		// Include page footer
		include("assets/partials/pattern-page-footer.html");

	echo '
		
		<!--
		SCRIPT: jQuery scripts
		-->
		<script src="assets/scripts/jquery/jquery.min.js"></script>
		<script src="assets/scripts/jquery/pushy.min.js" defer></script>
		
		<!--
		SCRIPT: jQuery scripts: zoom images
		-->
		<script src="assets/scripts/jquery/zoom.min.js" defer></script>
		<script src="assets/scripts/jquery/transition.min.js" defer></script>
		
	</html>

';