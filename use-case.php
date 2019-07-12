<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

<!--
PARTIAL: Base URL
-->
<?php include("assets/partials/base-url.html"); ?>

<!--
PARTIAL: Google Tag Manager script
-->
<?php include("assets/partials/google-tag-manager-script.html"); ?>

<!-- 
LINK/PARTIAL: Defer load non-critical CSS
-->
<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
<?php include("assets/partials/loadCSS.html"); ?>

<meta name="description" content="Podcast recording studios use case" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Use Case" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Use Case" />
<meta property="og:description" content="Podcast recording studios use case" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Use Case</title>
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
STYLES: Inline load critical CSS
-->
<style>
	<?php include("assets/critical.min.css"); ?>
</style>

<!--
PARTIAL: Google Tag Manager body
-->
<?php include("assets/partials/google-tag-manager-body.html"); ?>

<!--
PARTIAL: Leader with menu
-->
<?php include("assets/partials/pattern-page-leader.html"); ?>

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

		<h1 hidden>Use case</h1> <!-- For accessiblity audit only, Google does not recognise PHP script's H1 -->

		<!--
		LAYOUT CONTAINER
		-->

		<div class="constrain pad-y-mob">

			<!--
			SCRIPT
			-->

			<?php

				/* This script gets the url file_name name (the part after "=" in the browser address bar), fetches the json file based on the file name (if it exists, otherwise it redirects to a 404 error page), decodes the json string, constructs some html links and components, inserts the data into the html template below, then displays it in html */

				// Construct a link to the relevant json file
				// ----------------------------------------------------------------------------------------------------

				// Get the file name from the url so we know which json file to insert into the template
				$file_name = end(explode('=', $_SERVER['REQUEST_URI']));

				// add the file name to the folder path so we can get the json file
				$file = 'assets/data/use-cases/json/'.$file_name.'.json';

				// Check if the json file exists, otherwise redirect to the 404 error page
				// ----------------------------------------------------------------------------------------------------

				if (file_exists($file)) {
					// Get the contents of the json file and decode the string into readable text
					$json_data = file_get_contents($file);
					$data = json_decode($json_data);
				}
				else {
					// Redirect to 404 error page
					echo '
						<script>
							window.location = "https://solidgoldstudios.co.za/errors/404.php
						</script>
					';
					exit();
				};

				// Get the json file name
				// ----------------------------------------------------------------------------------------------------

				// Get the json file name and construct the full url
				$file_name = basename($file, '.json');

				// Construct HTML components to be used in the final HTML
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
				';

			?>

		</div>

	</article>

</div>

<!--
PARTIAL: Page footer
-->
<?php include("assets/partials/pattern-page-footer.html"); ?>

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