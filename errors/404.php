<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

<!--
PARTIAL: Base URL
-->
<?php include("../assets/partials/base-url.html"); ?>

<!--
PARTIAL: Google Tag Manager script
-->
<?php include("../assets/partials/google-tag-manager-script.html"); ?>

<!-- 
LINK/PARTIAL: Defer load non-critical CSS
-->
<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
<?php include("../assets/partials/loadCSS.html"); ?>

<meta name="description" content="Error" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Error" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Error" />
<meta property="og:description" content="Podcast recording studios error page" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgold.co.za/error.php" />
<meta property="og:image" content="https://solidgold.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Error</title>
<link rel="canonical" href="https://solidgold.co.za/error.php" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
Prerender most likely next page
-->
<link rel="prerender" href="contact-success.php" rel="nofollow">

<!--
STYLES: Inline load critical CSS
-->
<style>
	<?php include("../assets/critical.min.css"); ?>
</style>

<!--
PARTIAL: Google Tag Manager body
-->
<?php include("../assets/partials/google-tag-manager-body.html"); ?>

<!--
PARTIAL: Leader with menu
-->
<?php include("../assets/partials/pattern-page-leader.html"); ?>

<!--
MAIN
-->

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	ARTICLE: Error
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_???" aria-labelledby="a???">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-btt-mob flexdir-rtl-tab flexpos-lc-tab constrain spread-respond pad-y-mob">

			<!--
			CONTENT
			-->

			<div>

				<div aria-hidden="true"><span class="text-heading-badge--light">404 Error</div>

				<h1>Whoa, how did you end up here?</h1>

				<p>The page you tried doesn't exist. Would you like to <a href="index.php" title="" id="" aria-labelledby="">visit our home page</a> instead?</p>

			</div>

		</div>

	</article>

</div>

<!--
PARTIAL: Page footer
-->
<?php include("../assets/partials/pattern-page-footer.html"); ?>

<!--
SCRIPT: jQuery scripts
-->
<script src="assets/scripts/jquery/jquery.min.js"></script>
<script src="assets/scripts/jquery/pushy.min.js" defer></script>

</html>
