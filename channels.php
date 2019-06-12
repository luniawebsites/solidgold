<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

<!--
PARTIAL > Base URL
-->
<?php echo file_get_contents("assets/partials/base-url.html"); ?>

<!--
PARTIAL > Google Tag Manager script
-->
<?php echo file_get_contents("assets/partials/google-tag-manager-script.html"); ?>

<!-- 
LINK & PARTIAL > Defer load non-critical CSS
-->
<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
<?php echo file_get_contents("assets/partials/loadCSS.html"); ?>

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
PARTIAL & SCRIPT > Inline load modernizer webp detection (defer causes images not to show in IE11)
-->
<script>
	<?php echo file_get_contents("assets/partials/script-modernizr-webp.js"); ?>
</script>

<!--
STYLES > Inline load critical CSS
-->
<style>
	<?php echo file_get_contents("assets/critical.min.css"); ?>
</style>

<!--
PARTIAL > Google Tag Manager body
-->
<?php echo file_get_contents("assets/partials/google-tag-manager-body.html"); ?>

<!--
PARTIAL > Leader with menu
-->
<?php echo file_get_contents("assets/partials/pattern-page-leader.html"); ?>

<!--
PARTIAL > IE10/IE11 notice
-->
<?php echo file_get_contents("assets/partials/detect-ie.html"); ?>

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

		<!--
		HEADER > Channels
		-->

		<header class="pad-respond-xy-mob theme-light-grey-mob" id="header_channels" aria-labelledby="header_channels_h1_podcastchannels">

			<div class="constrain pad-t-mob">

				<h1 id="header_channels_h1_podcastchannels">Podcast channels</h1>

				<form>

					<div class="flexdir-ltr-mob flexpos-lb-mob spread-mob pad-double-t-mob">

						<div class="flexdir-ttb-mob">

							<label for="header_channels_input_filter">Filter channels</label>

							<input type="text" id="header_channels_input_filter">

						</div>

						<button class="primary" id="header_channels_button_showall"><span>Show All</span></button>

					</div>

				</form>

			</div>

		</header>

	<!--
	SECTION > Active
	-->

	<section class="pad-respond-x-mob pad-respond-b-mob theme-light-grey-mob" id="section_active" aria-labelledby="header_channels_h1_podcastchannels">

		<!--
		Container
		-->

		<div class="grid-auto-respond-channel constrain pad-y-mob">

			<!--
			SCRIPT
			-->

			<?php
				@$dir = "assets/channels/active/"; // Channels directory
				@$dir_url = "https://solidgoldstudios.co.za/assets/channels/active/";
				@$sort = 0; // 0 for ascending order and 1 for descending order
				@$channels = scandir($dir, $sort);
				for (@$i=0; $i < count($channels); $i++) {
					if (!is_dir($channels[$i])) {
						// Begin curl
						@$url = $dir_url . $channels[$i];
						@$ch = curl_init($url);
						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
						curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko)' 'Chrome/41.0.2227.1 Safari/537.36");
						@$cn = curl_exec($ch);
						@$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
						// Check response
						if ($status == 200) {
							@$content = $cn;
							// Channel name
							@$break_title_c = explode("</title>", $content);
							@$break_title_o = explode("<title>", $break_title_c[0]);
							// Channel host (e.g. host name)
							@$break_host_c = explode("</host>", $content);
							@$break_host_o = explode("<host>", $break_host_c[0]);
							// Cover image name
							@$break_cover_file_name_c = explode("</coverFileName>", $content);
							@$break_cover_file_name_o = explode("<coverFileName>", $break_cover_file_name_c[0]);
							// Keywords for jQuery filter script
							@$break_filter_keywords_c = explode("</filterKeywords>", $content);
							@$break_filter_keywords_o = explode("<filterKeywords>", $break_filter_keywords_c[0]);
							// Get data
							if (count($break_title_o) > 1) {
								// Define variables
								@$title = $break_title_o[1];
								@$host = $break_host_o[1];
								@$cover_file_name = $break_cover_file_name_o[1];
								@$filter_keywords = $break_filter_keywords_o[1];
								// Styling for channel elements done in CSS instead of using utility classes
								echo "
									<a class='channel__container--active channel-item' data-channel-item='" . $filter_keywords . "' href='channel-template.php?channel=" . $channels[$i] . "' aria-label='" . $title . "'>
										<figure>
											<img src='assets/images/covers/" . $cover_file_name . "' alt='" . $title . " podcast channel artwork' />
											<figcaption>" . $title . "</figcaption>
											<p>" . $host . "</p>
										</figure>
									</a>
								";
							}
						}
					}
				}
			?>

		</div>

	</section>

	<!--
	SECTION > Coming soon
	-->

	<section class="pad-respond-x-mob pad-respond-y-mob theme-light-grey-mob border-t-mob" id="section_comingsoon" aria-labelledby="section_comingsoon_h2_podcastchannelscoming">

		<!--
		HEADER
		-->

		<header class="width-100 constrain">

			<div class="pad-y-mob">

				<h2 id="section_comingsoon_h2_podcastchannelscoming">Podcast channels coming soon</span></h2>

			</div>

		</header>

		<!--
		Container
		-->

		<div class="grid-auto-respond-channel constrain pad-y-mob">

			<!--
			SCRIPT
			-->

			<?php
				@$dir = "assets/channels/coming-soon/"; // Channels directory
				@$dir_url = "https://solidgoldstudios.co.za/assets/channels/coming-soon/";
				@$sort = 0; // 0 for ascending order and 1 for descending order
				@$channels = scandir($dir, $sort);
				for (@$i=0; $i < count($channels); $i++) {
					if (!is_dir($channels[$i])) {
						// Begin curl
						@$url = $dir_url . $channels[$i];
						@$ch = curl_init($url);
						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
						curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko)' 'Chrome/41.0.2227.1 Safari/537.36");
						@$cn = curl_exec($ch);
						@$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
						// Check response
						if ($status == 200) {
							@$content = $cn;
							// Channel name
							@$break_title_c = explode("</title>", $content);
							@$break_title_o = explode("<title>", $break_title_c[0]);
							// Channel host (e.g. host name)
							@$break_host_c = explode("</host>", $content);
							@$break_host_o = explode("<host>", $break_host_c[0]);
							// Cover image name
							@$break_cover_file_name_c = explode("</coverFileName>", $content);
							@$break_cover_file_name_o = explode("<coverFileName>", $break_cover_file_name_c[0]);
							// Keywords for jQuery filter script
							@$break_filter_keywords_c = explode("</filterKeywords>", $content);
							@$break_filter_keywords_o = explode("<filterKeywords>", $break_filter_keywords_c[0]);
							// Get data
							if (count($break_title_o) > 1) {
								// Define variables
								@$title = $break_title_o[1];
								@$host = $break_host_o[1];
								@$cover_file_name = $break_cover_file_name_o[1];
								@$filter_keywords = $break_filter_keywords_o[1];
								// Styling for channel elements done in CSS instead of using utility classes
								echo "
									<div class='channel__container--coming-soon channel-item' data-channel-item='" . $filter_keywords . "' href='channel-template.php?channel=" . $channels[$i] . "' aria-label='" . $title . "'>
										<figure>
											<img src='assets/images/covers/" . $cover_file_name . "' alt='" . $title . " podcast channel artwork' />
											<figcaption>" . $title . "</figcaption>
											<p>" . $host . "</p>
										</figure>
									</div>
								";
							}
						}
					}
				}
			?>

		</div>

	</section>

	<!--
	SECTION > Private
	-->

	<section class="pad-respond-x-mob pad-respond-y-mob theme-light-grey-mob border-t-mob" id="section_private" aria-labelledby="section_private_h2_privatepodcastchannels">

		<!--
		HEADER
		-->

		<header class="width-100 constrain">

			<div class="pad-y-mob">

				<h2 id="section_private_h2_privatepodcastchannels">Private podcast channels</span></h2>

			</div>

		</header>

		<!--
		Container
		-->

		<div class="grid-auto-respond-channel constrain pad-y-mob">

			<!--
			SCRIPT
			-->

			<?php
				@$dir = "assets/channels/private/"; // Channels directory
				@$dir_url = "https://solidgoldstudios.co.za/assets/channels/private/";
				@$sort = 0; // 0 for ascending order and 1 for descending order
				@$channels = scandir($dir, $sort);
				for (@$i=0; $i < count($channels); $i++) {
					if (!is_dir($channels[$i])) {
						// Begin curl
						@$url = $dir_url . $channels[$i];
						@$ch = curl_init($url);
						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
						curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko)' 'Chrome/41.0.2227.1 Safari/537.36");
						@$cn = curl_exec($ch);
						@$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
						// Check response
						if ($status == 200) {
							@$content = $cn;
							// Channel name
							@$break_title_c = explode("</title>", $content);
							@$break_title_o = explode("<title>", $break_title_c[0]);
							// Channel host (e.g. host name)
							@$break_host_c = explode("</host>", $content);
							@$break_host_o = explode("<host>", $break_host_c[0]);
							// Cover image name
							@$break_cover_file_name_c = explode("</coverFileName>", $content);
							@$break_cover_file_name_o = explode("<coverFileName>", $break_cover_file_name_c[0]);
							// Keywords for jQuery filter script
							@$break_filter_keywords_c = explode("</filterKeywords>", $content);
							@$break_filter_keywords_o = explode("<filterKeywords>", $break_filter_keywords_c[0]);
							// Get data
							if (count($break_title_o) > 1) {
								// Define variables
								@$title = $break_title_o[1];
								@$host = $break_host_o[1];
								@$cover_file_name = $break_cover_file_name_o[1];
								@$filter_keywords = $break_filter_keywords_o[1];
								// Styling for channel elements done in CSS instead of using utility classes
								echo "
									<div class='channel__container--private channel-item' data-channel-item='" . $filter_keywords . "' href='channel-template.php?channel=" . $channels[$i] . "' aria-label='" . $title . "'>
										<figure>
											<img src='assets/images/covers/" . $cover_file_name . "' alt='" . $title . " podcast channel artwork' />
											<figcaption>" . $title . "</figcaption>
											<p>" . $host . "</p>
										</figure>
									</div>
								";
							}
						}
					}
				}
			?>

		</div>

	</section>

</div>

<!--
PARTIAL > Page footer
-->
<?php echo file_get_contents("assets/partials/pattern-page-footer.html"); ?>

<!--
SCRIPT > jQuery scripts
-->
<script src="assets/scripts/jquery/jquery.min.js"></script>
<script src="assets/scripts/jquery/pushy.min.js" defer></script>

<!--
SCRIPT > jQuery filter for channel cards
-->
<script>
	/* Filter items using keywords (keywords defined in "keyword"
	pseudo-class in the individual channel HTML pages) */
	$("#header_channels_input_filter").keyup(function(){
		var selectItem = $(this).val().toLowerCase();
		filter(selectItem);
		});
		function filter(e) {
			var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
			$('.channel-item').hide().filter(function () {
					return regex.test($(this).data('channel-item'))
		}).show();
	}
</script>

<!--
SCRIPT > jQuery clear filter input
-->
<script>
	$(document).ready(function () {
		/* Clear data from the filter input when returning
		to the page (all items display on return) */
		$('#header_channels_input_filter').val('');
		/* Clear data from the filter input on button click */
		$("#header_channels_button_showall").click(function(){
			$('#header_channels_input_filter').val('');
		});
	});
</script>

</html>
