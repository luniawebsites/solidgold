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

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	SECTION > Use case
	-->

	<section class="pad-respond-xy-mob theme-light-grey-mob" id="section_usecases" aria-labelledby="section_usecases_h1_title">

		<!--
		Container
		-->

		<h1 hidden>Use case</h1>

		<div class="constrain pad-y-mob">

			<article>

			<?php
					@$dir = "assets/use-cases/"; // Use cases directory
					// @$dir_url = "http://localhost:8888/solidgoldstudios/assets/use-cases/";
					@$dir_url = "https://solidgoldstudios.co.za/assets/use-cases/";
					if (isset($_GET['use-case']) && !empty($_GET['use-case'])) {
						// Begin curl
						@$url = $dir_url . $_GET['use-case'];
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

							// Get data from between opening and closing pseudo XML elements
							@$content = $cn;

							// Title data
							@$break_title_c = explode("</title>", $content);
							@$break_title_o = explode("<title>", $break_title_c[0]);

							// Intro data
							@$break_intro_c = explode("</intro>", $content);
							@$break_intro_o = explode("<intro>", $break_intro_c[0]);

							// Body data
							@$break_body_c = explode("</body>", $content);
							@$break_body_o = explode("<body>", $break_body_c[0]);

							// Example data
							@$break_example_c = explode("</example>", $content);
							@$break_example_o = explode("<example>", $break_example_c[0]);

							if (count($break_title_o) > 1) {

								// Define variables
								@$title = $break_title_o[1];
								@$intro = $break_intro_o[1];
								@$body = $break_body_o[1];
								@$example = $break_example_o[1];

								// Write HTML content
								echo "
									<h1 id='section_usecase_h1_title'>". $title . "</h1>
									<p>". $intro . "</p>
									". $body . "
									<div class='flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-mob flexpos-lc-tab spread-mob pad-double-t-mob'>
										<a class='button secondary' href='channel-template.php?channel=" . $example . ".xml' title='See a live example of this use case' id='section_usecases_h2_seeliveexample' aria-labelledby='section_usecases_h2_seeliveexample'><span>See Live Example</span></a>
								</div>
								";
							}
						}
					}
				?>

			</article>

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

</html>