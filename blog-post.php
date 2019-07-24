<?php

	// Construct a link to the relevant json file referenced in the address bar
	// ----------------------------------------------------------------------------------------------------

	// Get the file name from the url so we know which json file to use
	$file_name = end(explode('=', $_SERVER['REQUEST_URI']));

	// Add the file name to the folder path so we can get the json file
	$file = 'assets/data/blog-posts/json/'.$file_name.'.json';

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

	// Construct html components to be used in the final html output
	// ----------------------------------------------------------------------------------------------------

	echo '

		<!DOCTYPE html>
		<html lang="en">
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

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
		<link rel="stylesheet" href="assets/non-critical.min.css" media="print" onload="this.media=\'all\'">
		
		<meta name="description" content="'.$data->title.' blog post from Solid Gold Podcast Studios" />
		<meta name="robots" content="index, follow" />
		<meta name="classification" content="business" />
		<meta name="pagename" content="Solid Gold Podcast Studios | '.$data->title.'" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="MobileOptimized" content="320" />
		<meta property="og:title" content="Solid Gold Podcast Studios | '.$data->title.'" />
		<meta property="og:description" content="'.$data->title.' blog post from Solid Gold Podcast Studios" />
		<meta property="og:locale" content="en_ZA" />
		<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
		<meta property="og:type" content="website" />
		<meta property="article:published_time" content="'.$data->publishDate.'" />
		<meta property="article:author" content="Solid Gold Podcast Studios" />
		<title>Solid Gold Podcast Studios | '.$data->title.'</title>
		<link rel="canonical" href="https://solidgoldstudios.co.za/blog-post.php?title='.$file_name.'" />
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
			ARTICLE: Post
			-->
		
			<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_blogpost" aria-labelledby="section_blogpost_h1_title">
		
				<!--
				LAYOUT CONTAINER
				-->
		
				<div class="constrain pad-y-mob">

					<section>
						<div aria-hidden="true"><span class="text-heading-badge--light">Published <time datetime="'.$data->publishDate.'">'.$data->publishDate.'</time></span></div>
						<h1 id="section_blogpost_h1_title" aria-labelledby="section_blogpost_h1_title">'.$data->title.'</h1>
						<p>'.$data->introText.'</p>
						'.$data->bodyHtml.'
					</section>


					<!--
					BUTTON CONTAINER
					-->
		
					<div class="pad-double-t-mob">
		
						<button class="secondary" title="Go back to home page" onclick=\'history.back(-1)\'> <span>< Home</span></button>
		
					</div>
		
				</div>
		
			</article>
		
		</div>
		
		<!--
		PARTIAL: Page footer
		-->

		';

		include("assets/partials/pattern-page-footer.html");

		echo '
		
		<!--
		SCRIPT: jQuery scripts
		-->
		<script src="assets/scripts/jquery/jquery.min.js"></script>
		<script src="assets/scripts/jquery/pushy.min.js" defer></script>
		
		</html>

	';