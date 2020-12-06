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

<meta name="robots" content="noindex, nofollow" />
<meta name="pagename" content="" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<title>Your Message Has Been Sent</title>
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
	ARTICLE: Contact success
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-btt-mob flexdir-rtl-tab flexpos-lc-tab constrain spread-respond pad-y-mob">

			<!--
			CONTENT
			-->

			<div>

				<h1>Thank you, your message has <span class="no-break">been sent</span></h1>

				<p>We'll get back to you as soon as we can.</p>

				<p>If it's a <strong>podcast emergency</strong> you can <a href="https://api.whatsapp.com/send?phone=27832271409&text=[SGS]%20Hello%20Gavin..." target="_blank" rel="noopener" id="reach_us_on_whatsapp" aria-labelledby="reach_us_on_whatsapp"><abbr title="Reach us on WhatsApp">reach us on WhatsApp</abbr></a> too.</p>

				<p>#BeHeard</p>

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