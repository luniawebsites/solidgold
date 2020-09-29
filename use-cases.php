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
LINK & PARTIAL: Defer load non-critical CSS
-->
<link rel="stylesheet" href="assets/non-critical.min.css" media="print" onload="this.media='all'">

<meta name="description" content="Podcast recording use cases" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Use Cases" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Use Cases" />
<meta property="og:description" content="Podcast recording use cases" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgold.co.za/use-cases.php" />
<meta property="og:image" content="https://solidgold.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Use Cases</title>
<link rel="canonical" href="https://solidgold.co.za/use-cases.php" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
Prerender most likely next page
-->
<link rel="prerender" href="use-case-template.php">

<!--
PARTIAL: Google Tag Manager body
-->
<?php include("assets/partials/google-tag-manager-body.html"); ?>

<!--
STYLES: Inline load critical CSS
-->
<style>
	<?php include("assets/critical.min.css"); ?>
</style>

<!--
PARTIAL: Leader with menu
-->
<?php include("assets/partials/pattern-page-leader.html"); ?>

<!--
PARTIAL: IE10/IE11 notice
-->
<?php include("assets/partials/detect-ie.html"); ?>

<!--
HEADER
-->

<header class="pad-respond-x-mob pad-respond-t-mob theme-light-grey-mob" id="header_usecases" aria-labelledby="header_usecases_h1_theremustbe">

	<!--
	LAYOUT CONTAINER
	-->

	<div class="constrain pad-t-mob pad-double-b-mob">

		<h1 id="header_usecases_h1_theremustbe">There must be 50 ways* to use a podcast</h1>

		<p>Below we share with you some of the many useful, interesting and creative ways podcasts are used to share stories. Podcasting’s biggest value-add, after the ability to be listened to any time, everywhere, is that it doesn't compete for time with other activities. Podcasts are listened to <strong>while</strong> doing something else, and <strong>not instead</strong> of doing something else—usually while commuting, exercising or even cooking dinner. This makes podcasting uniquely capable of communicating both simple and complex ideas in both short and long forms.</p>
		<p><strong>*</strong> There are far more applications (as you can see in this article on the <a href="https://en.m.wikipedia.org/wiki/Uses_of_podcasting" target="_blank" rel="noopener" id="header_usecases_a_usesofpodcasting" aria-labelledby="header_usecases_a_usesofpodcasting">uses of podcasting</a>), but we liked the musical ring of 50.

		<!--
		FORM
		-->

		<form>

			<div class="flexdir-ltr-mob flexpos-lb-mob spread-mob pad-double-t-mob">

				<div class="flexdir-ttb-mob">

					<label for="header_usecases_input_filter">Filter use cases</label>

					<input type="text" id="header_usecases_input_filter">

				</div>

				<button class="primary" id="header_usecases_button_showall"><span>Show All</span></button>

			</div>

		</form>

	</div>

</header>

<!--
MAIN
-->

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	ARTICLE
	-->

	<article class="pad-respond-x-mob pad-respond-b-mob theme-light-grey-mob">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="constrain pad-respond-b-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="grid-auto-respond-16">

				<!--
				SCRIPT
				-->

				<?php

					// Use glob to get all JSON files from the designated folder
					// ----------------------------------------------------------------------------------------------------

					// Designate the folder that contains the json files
					$json_folder = 'assets/data/use-cases/json/';

					// Create file array
					$files = array();

					// Get all json files in the designated folder
					foreach (glob(''.$json_folder.'*.json') as $file) {
						$files[] = $file;
					};

					// Create a separate instance of each JSON file's string
					// ----------------------------------------------------------------------------------------------------

					foreach ($files as $file) {

						// Get the contents of the json file, decode the string, then get the file name
						$json_data = file_get_contents($file);
						$data = json_decode($json_data);
						$file_name = basename($file, '.json');

						// Construct links to be used in the final HTML
						// ----------------------------------------------------------------------------------------------------

						// Construct the link to the template and add the json file name
						$file_url = 'use-case.php?title='.$file_name.'';

						// Construct the link to the main image
						$main_image_url = 'assets/images/use-cases/'.$file_name.'.jpg';

						// Display final html
						// ----------------------------------------------------------------------------------------------------

						echo '
							<a class="( use-case keywords ) flexdir-ttb-mob pad-xy-mob radius-mob theme-white-mob" href="'.$file_url.'" title="Read '.$data->title.' use case" aria-label="'.$data->title.'" data-keywords="'.$data->filterKeywords.'">
								<picture class="pad-b-mob fg-image-use-case-mob">
									<img class="radius-mob border-mob" src="'.$main_image_url.'" title="'.$data->title.'" alt="'.$data->title.'" />
								</picture>
								<h3>'.$data->title.'</h3>
								<p>'.$data->introText.'</p>
							</a>
						';

					};

				?>

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

<!--
SCRIPT: Preload links on hover
-->
<script src="assets/scripts/js/instant-page.min.js" defer></script>

<!--
SCRIPT: jQuery filter for channel cards
-->
<script>

	// Filter items using keywords
	$("#header_usecases_input_filter").keyup(function(){
		var selectItem = $(this).val().toLowerCase();
		filter(selectItem);
		});
		function filter(e) {
			var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
			$('.keywords').hide().filter(function () {
					return regex.test($(this).data('keywords'))
		}).show();
	}
	// Disable return key (return refreshes page)
	$("#header_usecases_input_filter").keypress(function(e) {
		// Enter key
		if (e.which == 13) {
			return false;
		}
	});
</script>

</html>
