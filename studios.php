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

<meta name="description" content="Podcast recording studios" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Studios" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Studios" />
<meta property="og:description" content="Podcast recording studios" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgoldstudios.co.za/studios.php" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios</title>
<link rel="canonical" href="https://solidgoldstudios.co.za/studios.php" />
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

			<h1 id="header_studios_h1_podcaststudios">Podcast studios</h1>

			<p>All our studios are professionally equipped for <strong>high-quality recording</strong>, and are <strong>air-conditioned and comfortably furnished</strong>.</p>

		</div>

	</header>

	<!--
	SECTION > Studio descriptions
	-->

	<section class="pad-respond-x-mob pad-respond-b-mob theme-light-grey-mob" id="section_studiodescriptions" aria-labelledby="section_studiodescriptions_h2studiodescriptions">

		<!--
		Container
		-->

		<div class="constrain pad-b-mob">

			<h2 id="section_studiodescriptions_h2studiodescriptions" hidden>Studio descriptions</h2>

			<div>

				<div class="grid-auto-respond-20 pad-b-mob">

					<!--
					Figure
					-->

					<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

						<picture>
							<source srcset="assets/images/photos/mobile/podcast-studio-1.webp" type="image/webp" />
							<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-1.jpg" title="Podcast studio 1" alt="Podcast studio 1" />
						</picture>

						<div class="pad-xy-mob">

							<figcaption>Large professional and corporate</figcaption>

							<h3 class="pad-t-mob">Studio 1</h3>

							<p>Designed and furnished to facilitate conversation. A solid wood and leather inlay countertop at bar height, with raised leather seating, makes this an ideal setting for in-depth discussions and interviews. This studio easily accommodates larger groups for panel discussions, group interviews and announcements.</p>

							<p class="pad-half-b-mob caption">Hourly Rates with Engineer</p>

							<table>
								<tr>
									<td>First hour</td>
									<td>R950</td> 
								</tr>
								<tr>
									<td>Additional</td>
									<td>R750</td> 
								</tr>
								<tr>
									<td>Full day</td>
									<td>R650</td> 
								</tr>
							</table>

						</div>

					</figure>

					<!--
					Figure
					-->

					<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

						<picture>
							<source srcset="assets/images/photos/mobile/podcast-studio-2.webp" type="image/webp" />
							<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-2.jpg" title="Podcast studio 2" alt="Podcast studio 2" />
						</picture>

						<div class="pad-xy-mob">

							<figcaption>Dry-hire, DIY and hobbyist</figcaption>

							<h3 class="pad-t-mob">Studio 2</h3>

							<p>Perfect for the DIY or hobbyist podcaster with basic skills who needs a high-quality, quiet place to record. Professionally equipped for three people, and available to hire by the hour (without the need for a sound engineer).</p>

							<p class="pad-half-b-mob caption">Hourly DIY Rates (Dry Hire)</p>

							<table>
								<tr>
									<td>First hour</td>
									<td>R250</td> 
								</tr>
								<tr>
									<td>Additional</td>
									<td>R150</td> 
								</tr>
								<tr>
									<td>Full day</td>
									<td>R125</td> 
								</tr>
								<tr>
									<td>Full week (5 days)</td>
									<td>R99</td> 
								</tr>
							</table>

							<p class="pad-t-mob pad-half-b-mob caption">Hourly Rates with Engineer</p>

							<table>
								<tr>
									<td>First hour</td>
									<td>R550</td> 
								</tr>
								<tr>
									<td>Additional</td>
									<td>R350</td> 
								</tr>
								<tr>
									<td>Full day</td>
									<td>R325</td> 
								</tr>
							</table>

						</div>

					</figure>

					<!--
					Figure
					-->

					<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

						<picture>
							<source srcset="assets/images/photos/mobile/podcast-studio-3.webp" type="image/webp" />
							<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-3.jpg" title="Podcast studio 3" alt="Podcast studio 3" />
						</picture>

						<div class="pad-xy-mob">

							<figcaption>Post-production</figcaption>

							<h3 class="pad-t-mob">Studio 3</h3>

							<p>Oriented toward post-production, this studio is familiar to communication and media professionals with its separate soundproof booth and large couch area for directors, producers and clients.  Also used for recording and producing audiobooks, radio commercials and video soundtracks.</p>

							<p class="pad-t-mob pad-half-b-mob caption">Hourly Rates with Engineer</p>

							<table>
								<tr>
									<td>First hour</td>
									<td>R1,150</td> 
								</tr>
								<tr>
									<td>Additional</td>
									<td>R850</td> 
								</tr>
								<tr>
									<td>Full day</td>
									<td>R750</td> 
								</tr>
							</table>

						</div>

					</figure>

					<!--
					Figure
					-->

					<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

						<picture>
							<source srcset="assets/images/photos/mobile/podcast-studio-4.webp" type="image/webp" />
							<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-4.jpg" title="Podcast studio 4" alt="Podcast studio 4" />
						</picture>

						<div class="pad-xy-mob">

							<figcaption>Large TV-like</figcaption>

							<h3 class="pad-t-mob">Studio 4</h3>

							<p>Designed to be very versatile for a vast range of conversations to be recorded, this is more like a television studio than our other studios. Recording configurations include armchair conversations, a boardbook desk layout, a lounge or couch configuration, a library backdrop, a fireside chat, beanbags and many more options that help set the tone for specific recordings. There's also an infinity curve and a green screen for chroma key shoots.</p>

						</div>

					</figure>

					<!--
					Figure
					-->

					<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

						<picture>
							<source srcset="assets/images/photos/mobile/podcast-studio-5.webp" type="image/webp" />
							<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-5.jpg" title="Podcast studio 5" alt="Podcast studio 5" />
						</picture>

						<div class="pad-xy-mob">

							<figcaption>Coming soon!</figcaption>

							<h3 class="pad-t-mob">Studios 5 to 10</h3>

							<p>We're experiencing strong and growing demand for niche studios designed for extended bookings and recordings—particularly author-read audiobooks and training and educational content. We have earmarked space for these studios and will be making them available for daily, weekly and monthly hire in the very near future.</p>

						</div>

					</figure>

				</div>

			</div>

		</section>

		<!--
		SECTION > A wide range
		-->

		<section class="pad-respond-xy-mob theme-white-mob" id="section_awiderange" aria-labelledby="section_awiderange_h2_awiderange">

			<!--
			Container
			-->

			<div class="constrain pad-y-mob">

				<h2 id="section_awiderange_h2_awiderange">A wide range of studio options</h2>

				<p>We understand and appreciate that to have open, honest and meaningful conversations, hosts and guests need to feel comfortable and at ease. We also understand that our clients' recording, production, editing and hosting needs vary in complexity and budget.</p>

				<p>We've built a number of studios (with six more coming soon) to meet these varying requirements, and we're certain one of them is perfect for you! From a large, high-counter studio designed for group conversations to a DIY studio ideal for hobbyists, we have a space to match your recording needs.</p>

				<em class="theme-light-grey-mob accent-green-mob">All studios can record Zoom, Skype, WhatsApp and phone conversations, as well as client sources such as playout from laptops or Echo.</em>

				<p>Our open-plan office space is designed to facilitate and encourage creative interaction during the entire production process. With unlimited coffee, free Wi-Fi, editing workstations, boardroom, couches, indoor workspaces and outdoor chill spots, it's easy to see why so many clients like to work from our offices on recording days!</p>

				<div class="flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-mob flexpos-lc-tab spread-mob pad-double-t-mob">

					<a class="button primary" href="contact.php" title="Contact us about hiring our studios" id="section_awiderange_a_contactus" aria-labelledby="section_awiderange_a_contactus section_awiderange_h2_awiderange"><span>Contact Us</span></a>

				</div>

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

</html>