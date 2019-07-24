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

<meta name="description" content="Contact podcast recording studios" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Contact" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Contact" />
<meta property="og:description" content="Podcast recording studios contact" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgoldstudios.co.za/contact.php" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Contact Solid Gold Podcast Studios</title>
<link rel="canonical" href="https://solidgoldstudios.co.za/contact.php" />
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
MAIN
-->

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	ARTICLE: Contact
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_contact" aria-labelledby="article_contact_h1_helloimgavin">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-btt-mob flexdir-rtl-tab flexpos-lc-tab constrain spread-respond pad-y-mob">

			<!--
			CONTENT
			-->

			<div>

				<h1 id="article_contact_h1_helloimgavin">Hello, I'm Gavin Kennedy</h1>

				<p>As founder and CEO of Solid Gold Podcast Studios, my vision is to be your Podcast Partner of Choice, and my mission is to help you <strong>share your story</strong> through high-quality, creative podcasts. Please feel free to <a href="https://api.whatsapp.com/send?phone=27832271409&text=[SGS]%20Hello%20Gavin" target="_blank" rel="noopener" title="Start WhatsApp chat" id="article_contact_a_whatsapp" aria-labelledby="article_contact_a_whatsapp article_contact_h1_helloimgavin">WhatsApp</a> or <a href="mailto:gavin@solidgoldstudios.co.za" target="_blank" rel="noopener" title="Email me directly" id="article_contact_a_emailmedirectly" aria-labelledby="article_contact_a_emailmedirectly article_contact_h1_helloimgavin">email me directly</a> if you have any questions about podcasting.</p>

				<p>Are you ready to <strong>#BeHeard</strong>?</p>

			</div>

			<picture class="fg-image-profile">
				<source srcset="assets/images/photos/mobile/gavin-kennedy-profile.webp" media="(max-width: 719px)" type="image/webp">
				<source srcset="assets/images/photos/mobile/gavin-kennedy-profile.jpg" media="(max-width: 719px)" type="image/jpeg">
				<source srcset="assets/images/photos/tablet/gavin-kennedy-profile.webp" media="(min-width: 720px)" type="image/webp">
				<source srcset="assets/images/photos/tablet/gavin-kennedy-profile.jpg" media="(min-width: 720px)" type="image/jpeg">
				<img srcset="assets/images/photos/tablet/gavin-kennedy-profile.jpg" alt="Gavin Kennedy profile photo">
			</picture>

		</div>

	</article>

	<!--
	ARTICLE: Contact
	-->

	<article class="pad-respond-x-mob pad-respond-b-mob theme-light-grey-mob border-b-mob">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="constrain pad-respond-b-mob">

			<!--
			FORM
			-->

			<form accept-charset="UTF-8" action="https://usebasin.com/f/ea7e33ad9af1" method="POST">

				<div class="flexdir-ttb-mob spread-mob">

						<div class="flexdir-ttb-mob flexdir-ltr-tab width-100-mob spread-mob">

							<div class="width-100-mob">

								<div class="text-l-mob theme-light-grey-mob">

									<label for="name">Name</label>
									<input type="text" name="name" id="name" required />

								</div>

							</div>

							<div class="width-100-mob">

								<div class="text-l-mob theme-light-grey-mob">

									<label for="email">Email</label>
									<input type="email" name="email" id="email" required />

								</div>

							</div>

						</div>

						<div class="width-100-mob">

							<div class="text-l-mob">

								<label for="message">Ask us anything about podcasts...</label>
								<textarea name="message" id="message" rows="4" required></textarea>

							</div>

						</div>

						<!--
						BUTTON CONTAINER
						-->

						<div class="flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-mob flexpos-lc-tab spread-mob pad-respond-t-mob">

							<button class="primary" id="article_contact_button_send" type="submit" title="Send message to Lunia" aria-labelledby="article_contact_button_send"><span>Send</span></button>
							
							<span class="text-note">Your information is kept confidential and you are not added to any other mailing lists</span>

						</div>

				</div>

			</form>

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
