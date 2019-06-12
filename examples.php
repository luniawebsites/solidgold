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
	HEADER > Studios
	-->

	<header class="pad-respond-xy-mob theme-light-grey-mob" id="header_studios" aria-labelledby="header_studios_h1_podcaststudios">

		<!--
		Container
		-->

		<div class="constrain pad-t-mob">

			<h1 id="header_examples_h1_channelexamples">There must be 50 ways to use a podcast</h1>

			<p>Podcasts are extremely versatile, covering practically unlimited topics.</p>

			<form>

				<div class="flexdir-ltr-mob flexpos-lb-mob spread-mob pad-double-t-mob">

					<div class="flexdir-ttb-mob">

						<label for="header_examples_input_filter">Filter examples</label>

						<input type="text" id="header_examples_input_filter">

					</div>

					<button class="primary" id="header_examples_button_showall"><span>Show All</span></button>

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

		<div class="constrain pad-b-mob">

			<h2 id="???" hidden>Channel examples</h2>

			<div>

				<div class="grid-auto-respond-20 pad-b-mob">

					<!--
					Figure
					-->

					<figure class="flexdir-ttb-mob radius-mob theme-white-mob example-item" data-example-item="deep dive conversations">

						<picture>
							<source srcset="assets/images/photos/mobile/example-01.webp" type="image/webp" />
							<img class="fg-image-card-mob border-mob" src="assets/images/photos/example-01.jpg" title="???" alt="???" />
						</picture>

						<div class="pad-xy-mob">

							<h3>Deep dive conversations</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

							<div class="flexdir-ttb-mob flexpos-lc-mob pad-double-t-mob">

								<a class="button secondary" href="channel-template.php?channel=eduthink.xml" title="???" id="???" aria-labelledby="???"><span>See Example</span></a>

							</div>

						</div>

					</figure>

					<!--
					Figure
					-->

					<figure class="flexdir-ttb-mob radius-mob theme-white-mob example-item" data-example-item="strategic communication">

						<picture>
							<source srcset="assets/images/photos/mobile/example-02.webp" type="image/webp" />
							<img class="fg-image-card-mob border-mob" src="assets/images/photos/example-02.jpg" title="???" alt="???" />
						</picture>

						<div class="pad-xy-mob">

							<h3>Strategic communication</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

							<div class="flexdir-ttb-mob flexpos-lc-mob pad-double-t-mob">

								<a class="button secondary" href="channel-template.php?channel=the-carmen-murray-show.xml" title="???" id="???" aria-labelledby="???"><span>See Example</span></a>

							</div>

						</div>

					</figure>

				</div>

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
	$("#header_examples_input_filter").keyup(function(){
		var selectItem = $(this).val().toLowerCase();
		filter(selectItem);
		});
		function filter(e) {
			var regex = new RegExp('\\b\\w*' + e + '\\w*\\b');
			$('.example-item').hide().filter(function () {
					return regex.test($(this).data('example-item'))
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
		$('#header_examples_input_filter').val('');
		/* Clear data from the filter input on button click */
		$("#header_examples_button_showall").click(function(){
			$('#header_examples_input_filter').val('');
		});
	});
</script>

</html>