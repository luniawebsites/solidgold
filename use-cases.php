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

<meta name="description" content="Podcast recording examples" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Examples" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Examples" />
<meta property="og:description" content="Podcast recording examples" />
<meta property="og:locale" content="en_ZA" />
<!-- <meta property="og:url" content="https://solidgoldstudios.co.za/studios.php" /> -->
<meta property="og:url" content="https://lunia.co.za/sgsnew/examples.php" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Examples</title>
<!-- <link rel="canonical" href="https://solidgoldstudios.co.za/examples.php" /> -->
<link rel="canonical" href="https://lunia.co.za/sgsnew/examples.php" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
Prerender most likely next page
-->
<link rel="prerender" href="pricing.php">

<!--
PARTIAL & SCRIPT > Inline load modernizer webp detection (defer causes images not to show in IE11)
-->
<script>
	<?php echo file_get_contents("assets/partials/script-modernizr-webp.js"); ?>
</script>

<!--
PARTIAL > Google Tag Manager body
-->
<?php echo file_get_contents("assets/partials/google-tag-manager-body.html"); ?>

<!--
STYLES > Inline load critical CSS
-->
<style>
	<?php echo file_get_contents("assets/critical.min.css"); ?>
</style>

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
	HEADER > Use cases
	-->

	<header class="pad-respond-xy-mob theme-light-grey-mob" id="header_studios" aria-labelledby="header_studios_h1_podcaststudios">

		<!--
		Container
		-->

		<div class="constrain pad-t-mob">

			<h1 id="header_usecases_h1_channelexamples">There must be 50 ways to use a podcast</h1>

			<p>Learn about many of the common, effective and unusual implementations of voice and audio programming being used by people, companies, non-profits, schools and practically anybody with a story to tell.</p>

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
	SECTION > Channel examples
	-->

	<section class="pad-respond-x-mob pad-respond-b-mob theme-light-grey-mob" id="section_???" aria-labelledby="???">

		<!--
		Container
		-->

		<div class="flexdir-ttb-mob constrain pad-b-mob">

			<h2 id="???" hidden>Examples of how podcasts are actually being used</h2>

			<div class="flexdir-ttb-mob spread-mob">

				<!--
				SCRIPT > Display content from use case
				-->

				<?php
					@$dir = "assets/use-cases/"; // Use case directory
					// @$dir_url = "http://localhost:8888/solidgoldstudios/assets/use-cases/";
					@$dir_url = "https://solidgoldstudios.co.za/assets/use-cases/";
					@$sort = 0; // 0 for ascending order and 1 for descending order
					@$per_page = 50; // Number of use cases to display per page
					@$use_cases = scandir($dir, $sort);
					@$total_pages = ceil((count($use_cases) - 2) / $per_page);
					if (!isset($_GET['page']) || $_GET['page'] < 1 || $_GET['page'] > $total_pages) {
						@$page = 1;
					}
					else {
						@$page = $_GET['page'];
					}
					@$page_start = ($page - 1) * $per_page;
					@$page_limit = ($page) * $per_page;
					// Load use cases
					for (@$i=$page_start; $i < $page_limit; $i++) {
						if (array_key_exists($i, $use_cases)) {
						if (!is_dir($use_cases[$i])) {
							if (file_exists($dir . $use_cases[$i])) {
								// Begin curl
								@$url = $dir_url . $use_cases[$i];
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

									// Keywords data
									@$break_keywords_c = explode("</keywords>", $content);
									@$break_keywords_o = explode("<keywords>", $break_keywords_c[0]);

									// Intro data
									@$break_intro_c = explode("</intro>", $content);
									@$break_intro_o = explode("<intro>", $break_intro_c[0]);

									// Example data
									@$break_example_c = explode("</example>", $content);
									@$break_example_o = explode("<example>", $break_example_c[0]);

									// Get file name
									// Get XML file name to use as image name
									$image_file_name = pathinfo( parse_url( $url, PHP_URL_PATH ), PATHINFO_FILENAME );

									// Conditional statement

									if (count($break_title_o) > 1) {

										// Define variables
										@$title = $break_title_o[1];
										@$keywords = $break_keywords_o[1];
										@$intro = $break_intro_o[1];
										@$example = $break_example_o[1];

										// Write HTML content
										echo "
											<figure class='( example-keywords ) flexdir-ttb-mob flexdir-ltr-des pad-xy-mob radius-mob theme-white-mob' data-example-keywords='" . $keywords . "'>

												<div class='width-auto-mob'>
													<picture class='fg-image-use-case-mob'>
														<img class='round-mob border-mob' src='assets/images/use-cases/" . $image_file_name .".jpg' title='" . $title . "' alt='" . $title . "' />
													</picture>
												</div>

												<div class='pad-y-mob pad-xy-tab'>
													<h3>". $title . "</h3>
													<p>" . $intro . "</p>
													<div class='flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-mob flexpos-lc-tab spread-mob pad-double-t-mob'>
														<a class='button secondary' href='use-case-template.php?use-case=" . $use_cases[$i] . "' title='Read use case' id='section_usecases_h2_readusecase' aria-labelledby='section_usecases_h2_readusecase'><span>Read Use Case</span></a>
														<a class='button secondary' href='channel-template.php?channel=" . $example . ".xml' title='See a live example of this use case' id='section_usecases_h2_seeliveexample' aria-labelledby='section_usecases_h2_seeliveexample'><span>See Live Example</span></a>
													</div>

												</div>
						
											</figure>
										";

										}
									}
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
	/* Filter items using keywords (keywords defined in "keyword" pseudo-class in the individual channel HTML pages) */
	$("#header_usecases_input_filter").keyup(function(){
		var selectItem = $(this).val().toLowerCase();
		filter(selectItem);
		});
		function filter(e) {
			var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
			$('.example-keywords').hide().filter(function () {
					return regex.test($(this).data('example-keywords'))
		}).show();
	}
</script>

<!--
SCRIPT > jQuery clear filter input
-->
<script>
	$(document).ready(function () {
		/* Clear data from the filter input when returning to the page (all items display on return) */
		$('#header_usecases_input_filter').val('');
		/* Clear data from the filter input on button click */
		$("#header_usecases_button_showall").click(function(){
			$('#header_usecases_input_filter').val('');
		});
	});
</script>

</html>
