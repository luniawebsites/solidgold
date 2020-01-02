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
<link rel="stylesheet" href="assets/non-critical.min.css" media="print" onload="this.media='all'">

<meta name="description" content="Podcast recording studios channels" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Channels" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Channels" />
<meta property="og:description" content="Podcast recording studios channels" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgoldstudios.co.za/channels.php" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Channels</title>
<link rel="canonical" href="https://solidgoldstudios.co.za/channels.php" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
Prerender most likely next page
-->
<link rel="prerender" href="channel-template.php">

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
PARTIAL: IE10/IE11 notice
-->
<?php include("assets/partials/detect-ie.html"); ?>

<!--
HEADER
-->

<header class="pad-respond-xy-mob theme-light-grey-mob" id="header_channels" aria-labelledby="header_channels_h1_podcastchannels">

	<!--
	LAYOUT CONTAINER
	-->

	<div class="constrain pad-t-mob">

		<h1 id="header_channels_h1_podcastchannels">Podcast channels</h1>

		<p>"It doesn't matter how many people you reach, but that you reach the people who matter." - Gavin Kennedy</p>
		<p>We use <a href="https://chartable.com/?utm_source=Solid%20Gold%20Podcast%20Studios" target="_blank" rel="noopener" id="header_channels_a_chartable" aria-labelledby="header_channels_a_chartable"> Chartable.com</a> and <a href="https://cloudtower.co.za/?utm_source=Solid%20Gold%20Podcast%20Studios" target="_blank" rel="noopener" id="header_channels_a_cloudtower" aria-labelledby="header_channels_a_cloudtower"> CloudTower.co.za</a> to track usage. You can view the<a href="https://chartable.com/privacy?utm_source=Solid%20Gold%20Podcast%20Studios" target="_blank" rel="noopener" id="header_channels_a_chartableprivacypolicy" aria-labelledby="header_channels_a_chartableprivacypolicy"> CCPA/GDPR/Etc Privacy Policy</a>.</p>

		<!--
		FORM
		-->

		<form>

			<div class="flexdir-ltr-mob flexpos-lb-mob spread-mob pad-double-t-mob">

				<div class="flexdir-ttb-mob">

					<label for="header_channels_input_filter">Filter channels (simply start typing)</label>

					<input type="text" id="header_channels_input_filter">

				</div>

				<button class="primary" id="header_channels_button_showall"><span>Show All</span></button>

			</div>

		</form>

	</div>

</header>

<!--
MAIN
-->

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	ARTICLE: Channels
	-->

	<article class="pad-respond-x-mob pad-respond-b-mob theme-light-grey-mob" id="article_channels" aria-labelledby="article_channels_h2_podcastchannels">

		<!--
		HEADER
		-->

		<header class="width-100 constrain">

			<div class="pad-t-mob">

				<!--
				HIDDEN HEADING (needed for semantic validation)
				-->

				<h2 id="article_channels_h2_podcastchannels" hidden>Podcast channels</span></h2>

			</div>

		</header>

		<!--
		LAYOUT CONTAINER
		-->

		<div class="grid-auto-respond-channel constrain pad-b-mob">

			<!--
			SCRIPT
			-->

			<?php

				// Use glob to get all json files from the designated folder
				// ----------------------------------------------------------------------------------------------------

				// Designate the folder that contains the json files
				$json_folder = 'assets/data/channels/json/';

				// create file array
				$files = array();

				// get all json files in the designated folder
				foreach (glob(''.$json_folder.'*.json') as $file) {
					$files[] = $file;
				};

				// Create a separate instance of each json file's string
				// ----------------------------------------------------------------------------------------------------

				foreach ($files as $file) {

					// get the contents of the json file, decode the string, then get the file name
					$json_data = file_get_contents($file);
					$data = json_decode($json_data);
					$file_name = basename($file, '.json');

					// Construct status classes
					// ----------------------------------------------------------------------------------------------------

					// search the json file for this keyword, then assign status icon class and status link
					if(strpos($data->status, 'private') == 'private') {
						$status_icon = 'channel__status--private';
						$status_link = 'href="channel.php?title='.$file_name.'"';
					};

					// search the json file for this keyword, then assign status icon class and status link
					if(strpos($data->status, 'public') == 'public') {
						$status_icon = 'channel__status--public';
						$status_link = 'href="channel.php?title='.$file_name.'"';
					};

					// search the json file for this keyword, then assign status icon class and status link
					if(strpos($data->status, 'comingSoon') == 'comingSoon') {
						$status_icon = 'channel__status--coming-soon';
						$status_link = 'href="channel.php?title='.$file_name.'"';
					};

					// Display final html
					// ----------------------------------------------------------------------------------------------------

					echo '
						<a class="( channel__container keywords '.$status_container.' )" '.$status_link.' aria-label="'.$data->title.'" data-keywords="'.$data->filterKeywords.'">
							<div class="( '.$status_icon.' )"></div>
							<figure>
								<img src="assets/images/covers/'.$data->coverFileName.'" alt="'.$data->title.' podcast channel artwork" />
								<figcaption>'.$data->title.'</figcaption>
								<p>'.$data->host.'</p>
							</figure>
						</a>
					';

				};

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
SCRIPT: Preload links on hover
-->
<script src="assets/scripts/js/instant-page.min.js" defer></script>

<!--
SCRIPT: jQuery filter for channel cards
-->
<script>
	/* Filter items using keywords (keywords defined in "keyword" in the individual JSON files) */
	$("#header_channels_input_filter").keyup(function(){
		var selectItem = $(this).val().toLowerCase();
		filter(selectItem);
		});
		function filter(e) {
			var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
			$('.keywords').hide().filter(function () {
					return regex.test($(this).data('keywords'))
		}).show();
	}
</script>

<!--
SCRIPT: jQuery clear filter input
-->
<script>
	$(document).ready(function () {
		/* Clear data from the filter input when returning to the page (all items display on return) */
		$('#header_channels_input_filter').val('');
		/* Clear data from the filter input on button click */
		$("#header_channels_button_showall").click(function(){
			$('#header_channels_input_filter').val('');
		});
	});
</script>

</html>
