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

<meta name="description" content="Podcast recording studios blog post" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Post" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Post" />
<meta property="og:description" content="Podcast recording studios blog post" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Post</title>
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
	ARTICLE: Post
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_blogpost" aria-labelledby="section_blogpost_h1_title">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="constrain pad-y-mob">

			<!--
			SCRIPT
			-->

			<?php

				/* This script gets the url file_name name (the part after "=" in the browser address bar), fetches the json file based on the file name (if it exists, otherwise it redirects to a 404 error page), decodes the json string, constructs some html links and components, inserts the data into the html template below, then displays it in html */

				// Construct a link to the relevant JSON file
				// ----------------------------------------------------------------------------------------------------

				// get the file name from the url so we know which json file to insert into the template
				$file_name = end(explode('=', $_SERVER['REQUEST_URI']));

				// add the file name to the folder path so we can get the json file
				$file = 'assets/data/blog-posts/json/'.$file_name.'.json';

				// Check if the JSON file exists, otherwise redirect to the 404 error page
				// ----------------------------------------------------------------------------------------------------

				if (file_exists($file)) {
					// get the contents of the json file and decode the string into readable text
					$json_data = file_get_contents($file);
					$data = json_decode($json_data);
				}
				else {
					// redirect to 404 error page
					echo '
						<script>
							window.location = "https://solidgoldstudios.co.za/errors/404.php
						</script>
					';
					exit();
				};

				// Display the final HTML
				// ----------------------------------------------------------------------------------------------------

				echo '
					<section>
						<div aria-hidden="true"><span class="text-heading-badge--light">Published <time datetime="'.$data->publishDate.'">'.$data->publishDate.'</time></span></div>
						<h1 id="section_blogpost_h1_title" aria-labelledby="section_blogpost_h1_title">'.$data->title.'</h1>
						<p>'.$data->introText.'</p>
						'.$data->bodyHtml.'
					</section>
				';

			?>

			<!--
			BUTTON CONTAINER
			-->

			<div class="pad-double-t-mob">

				<button class="secondary" title="Go back to home page" onclick='history.back(-1)'> <span>< Home</span></button>

			</div>

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

</html>