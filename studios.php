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
PARTIAL/SCRIPT: Inline load modernizer webp detection (defer causes images not to show in IE11)
-->
<script>
	<?php include("assets/partials/script-modernizr-webp.js"); ?>
</script>

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

<header class="pad-respond-xy-mob theme-white-mob" id="header_studios" aria-labelledby="header_studios_h1_awiderange">

	<!--
	LAYOUT CONTAINER
	-->

	<div class="constrain pad-y-mob">

		<h1 id="header_studios_h1_awiderange">A wide range of podcast studio options</h1>

		<p>All our studios are professionally equipped for <strong>high-quality recording</strong>, and are <strong>air-conditioned and comfortably furnished</strong>.</p>

		<p>We understand and appreciate that to have open, honest and meaningful conversations, hosts and guests need to feel comfortable and at ease. We also understand that our clients' recording, production, editing and hosting needs vary in complexity and budget.</p>

		<p>We've built a number of studios (with six more coming soon) to meet these varying requirements, and we're certain one of them is perfect for you! From a large, high-counter studio designed for group conversations to a DIY studio ideal for hobbyists, we have a space to match your recording needs.</p>

		<em class="theme-light-grey-mob accent-green-mob">All studios can record Zoom, Skype, WhatsApp, <a href="https://squadcast.fm/?ref=gavinkennedy" target="_blank" ref="noopener" id="header_studios_a_squadcastfm" aria-labelledby="header_studios_a_squadcastfm">SquadCast.fm</a> and phone conversations, as well as client sources such as playout from laptops or Echo.</em>

		<p>Our open-plan office space is designed to facilitate and encourage creative interaction during the entire production process. With unlimited coffee, free Wi-Fi, editing workstations, boardroom, couches, indoor workspaces and outdoor chill spots, it's easy to see why so many clients like to work from our offices on recording days!</p>

		<!--
		BUTTON CONTAINER
		-->

		<div class="flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-mob flexpos-lc-tab spread-mob pad-double-t-mob">

			<a class="button primary" href="contact.php" title="Contact us about hiring our studios" id="article_awiderange_a_contactus" aria-labelledby="article_awiderange_a_contactus article_awiderange_h2_awiderange"><span>Contact Us</span></a>

		</div>

	</div>

</header>

<!--
MAIN
-->

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	ARTICLE: Studios
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_studios" aria-labelledby="article_studios_h2_studiodescriptions">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="constrain pad-b-mob">

			<h2 id="article_studios_h2_studiodescriptions" hidden>Studio descriptions</h2>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="grid-auto-respond-20">

				<!--
				FIGURE
				-->

				<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

					<picture>
						<source srcset="assets/images/photos/mobile/podcast-studio-1.webp" type="image/webp" />
						<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-1.jpg" title="Podcast studio 1" alt="Podcast studio 1" />
					</picture>

					<div class="pad-xy-mob">

						<h3>Studio 1</h3>

						<h4>Large professional and corporate</h4>

						<p>Designed and furnished to facilitate conversation. A solid wood and leather inlay countertop at bar height, with raised leather seating, makes this an ideal setting for in-depth discussions and interviews. This studio easily accommodates larger groups for panel discussions, group interviews and announcements.</p>

						<h4 class="pad-half-b-mob">Maximum 8 people</h4>

						<table class="margin-b-mob">
							<tr>
								<td class="no-break">Engineer</td>
								<td>
									<span class="encimage-studioicon-engineer" title="Engineer"></span>
								</td> 
							</tr>
							<tr>
								<td class="no-break">Host</td>
								<td>
									<span class="encimage-studioicon-host" title="Host"></span>
								</td> 
							</tr>
							<tr>
								<td class="no-break">Guests</td>
								<td>
									<span class="encimage-studioicon-guest" title="Guest"></span><span class="encimage-studioicon-guest" title="Guest"></span><span class="encimage-studioicon-guest" title="Guest"></span><span class="encimage-studioicon-guest" title="Guest"></span><span class="encimage-studioicon-guest" title="Guest"></span><span class="encimage-studioicon-guest" title="Guest"></span>
								</td> 
							</tr>
						</table>

						<h4>Inputs</h4>

						<div class="flexdir-ltr-mob spread-half-mob margin-double-b-mob">
							<span class="encimage-studioicon-skype" title="Skype calls are available during your recording"></span>
							<span class="encimage-studioicon-whatsapp" title="WhatsApp calls are available during your recording"></span>
							<span class="encimage-studioicon-bluetooth" title="Bluetooth input is available during your recording"></span>
							<span class="encimage-studioicon-laptop" title="Laptop input is available during your recording"></span>
						</div>

						<h4 class="pad-half-b-mob">Hourly rates with Engineer</h4>

						<table>
							<tr>
								<td class="no-break">First hour</td>
								<td>R950</td> 
							</tr>
							<tr>
								<td class="no-break">Additional hour(s)</td>
								<td>R750</td> 
							</tr>
							<tr>
								<td class="no-break">Full day</td>
								<td>R650</td> 
							</tr>
						</table>

					</div>

				</figure>

				<!--
				FIGURE
				-->

				<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

					<picture>
						<source srcset="assets/images/photos/mobile/podcast-studio-2.webp" type="image/webp" />
						<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-2.jpg" title="Podcast studio 2" alt="Podcast studio 2" />
					</picture>

					<div class="pad-xy-mob">

						<h3>Studio 2</h3>

						<h4>Dry-hire, DIY and hobbyist</h4>

						<p>Perfect for the DIY or hobbyist podcaster with basic skills who needs a high-quality, quiet place to record. Professionally equipped for three people, and available to hire by the hour (without the need for a sound engineer).</p>

						<h4 class="pad-half-b-mob">Maximum 3 people</h4>

						<table class="margin-b-mob">
							<tr>
								<td class="no-break">Host</td>
								<td>
									<span class="encimage-studioicon-host" title="Host"></span>
								</td> 
							</tr>
							<tr>
								<td class="no-break">Guests</td>
								<td>
									<span class="encimage-studioicon-guest" title="Guest"></span><span class="encimage-studioicon-guest" title="Guest"></span>
								</td> 
							</tr>
						</table>

						<h4>Inputs</h4>

						<div class="flexdir-ltr-mob spread-half-mob margin-double-b-mob">
							<span class="encimage-studioicon-skype" title="Skype calls are available during your recording"></span>
							<span class="encimage-studioicon-whatsapp" title="WhatsApp calls are available during your recording"></span>
							<span class="encimage-studioicon-bluetooth" title="Bluetooth input is available during your recording"></span>
							<span class="encimage-studioicon-laptop" title="Laptop input is available during your recording"></span>
						</div>

						<h4 class="pad-half-b-mob">Hourly DIY rates (dry hire)</h4>

						<table>
							<tr>
								<td class="no-break">First hour</td>
								<td>R250</td> 
							</tr>
							<tr>
								<td class="no-break">Additional hour(s)</td>
								<td>R150</td> 
							</tr>
							<tr>
								<td class="no-break">Full day (10 hours)</td>
								<td>R125</td> 
							</tr>
							<tr>
								<td class="no-break">Full week (5 days)</td>
								<td>R99</td> 
							</tr>
						</table>

						<h4 class="pad-t-mob pad-half-b-mob">Hourly rates with Engineer</h4>

						<table>
							<tr>
								<td class="no-break">First hour</td>
								<td>R550</td> 
							</tr>
							<tr>
								<td class="no-break">Additional hours</td>
								<td>R350</td> 
							</tr>
							<tr>
								<td class="no-break">Full day (10 hours)</td>
								<td>R325</td> 
							</tr>
						</table>

					</div>

				</figure>

				<!--
				FIGURE
				-->

				<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

					<picture>
						<source srcset="assets/images/photos/mobile/podcast-studio-3.webp" type="image/webp" />
						<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-3.jpg" title="Podcast studio 3" alt="Podcast studio 3" />
					</picture>

					<div class="pad-xy-mob">

						<h3>Studio 3</h3>

						<h4>Post-production</h4>

						<p>Oriented toward post-production, this studio is familiar to communication and media professionals with its separate soundproof booth and large couch area for directors, producers and clients.  Also used for recording and producing audiobooks, radio commercials and video soundtracks.</p>

						<h4 class="pad-half-b-mob">Maximum 10 people</h4>

						<table class="margin-b-mob">
							<tr>
								<td class="no-break">Engineer</td>
								<td>
									<span class="encimage-studioicon-engineer" title="Engineer"></span>
								</td> 
							</tr>
							<tr>
								<td class="no-break">Producers/Clients</td>
								<td>
									<span class="encimage-studioicon-client" title="Client"></span><span class="encimage-studioicon-client" title="Client"></span><span class="encimage-studioicon-client" title="Client"></span><span class="encimage-studioicon-client" title="Client"></span><span class="encimage-studioicon-client" title="Client"></span><span class="encimage-studioicon-client" title="Client"></span>
								</td> 
							</tr>
							<tr>
								<td class="no-break">Voice Artists</td>
								<td>
									<span class="encimage-studioicon-guest" title="Voice Artist"></span><span class="encimage-studioicon-guest" title="Voice Artist"></span><span class="encimage-studioicon-guest" title="Voice Artist"></span>
								</td> 
							</tr>
						</table>

						<h4>Inputs</h4>

						<div class="flexdir-ltr-mob spread-half-mob margin-double-b-mob">
							<span class="encimage-studioicon-skype" title="Skype calls are available during your recording"></span>
							<span class="encimage-studioicon-whatsapp" title="WhatsApp calls are available during your recording"></span>
							<span class="encimage-studioicon-laptop" title="Bluetooth input is available during your recording"></span>
						</div>

						<h4 class="pad-half-b-mob">Hourly rates with Engineer</h4>

						<table>
							<tr>
								<td class="no-break">First hour</td>
								<td>R1,150</td> 
							</tr>
							<tr>
								<td class="no-break">Additional</td>
								<td>R850</td> 
							</tr>
							<tr>
								<td class="no-break">Full day (10 hrs)</td>
								<td>R750</td> 
							</tr>
						</table>

					</div>

				</figure>

				<!--
				FIGURE
				-->

				<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

					<picture>
						<source srcset="assets/images/photos/mobile/podcast-studio-4.webp" type="image/webp" />
						<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-4.jpg" title="Podcast studio 4" alt="Podcast studio 4" />
					</picture>

					<div class="pad-xy-mob">

						<h3>Studio 4</h3>

						<h4>Large TV-like</h4>

						<p>We believe that the setting for a conversation often has a great influence on the content. For example, a conversation at a desk or in a studio will sound very different from one held between two people in armchairs with a coffee table and potplant alongside. Similarly, a round-table discussion works best, well, around a table. For this reason we created the magical 50m<sup>2</sup> set-dressed studio where you can set the scene for the conversation you want to have.</p>

						<p>Whether it's couches, beanbags or a fireside chat with a library backdrop—hey, even a <i>Wayne's World Bedroom</i> is possible—you can let your imagination run wild.</p>

						<p>This studio lends itself to simultaneous recording of your YouTube channel, with the added bonus of an infinity curve and green screen for chroma key shoots.</p>


						<h4 class="pad-half-b-mob">DIY rates (dry hire)</h4>

						<table class="margin-b-mob">
							<tr>
								<td class="no-break">First hour</td>
								<td>R750</td> 
							</tr>

							<tr>
								<td class="no-break">Additional hour(s)</td>
								<td>R350</td> 
							</tr>
							<tr>
								<td class="no-break">Full day (10 hours)</td>
								<td>R325</td> 
							</tr>
						</table>

						<p>Sound reduced with basic lighting, some furniture (and unlimited coffee) included. Additional equipment, crew and set dressing POA.</p>

						<h4 class="pad-half-b-mob">Options</h4>

						<table class="margin-b-mob">
							<tr>
								<td>Chroma key</td> 
							</tr>
							<tr>
								<td>Set dressing</td> 
							</tr>
						</table>

					</div>

				</figure>

				<!--
				FIGURE
				-->

				<figure class="flexdir-ttb-mob radius-mob theme-white-mob">

					<picture>
						<source srcset="assets/images/photos/mobile/podcast-studio-5.webp" type="image/webp" />
						<img class="fg-image-card-mob border-mob" src="assets/images/photos/podcast-studio-5.jpg" title="Podcast studio 5" alt="Podcast studio 5" />
					</picture>

					<div class="pad-xy-mob">

						<h3>Studio 5</h3>

						<h4>On location</h4>

						<p>We come to your office or boardroom, or out in the field, with a <a href="https://www.zoom-na.com/products/field-video-recording/field-recording/h6-handy-recorder" target="_blank" rel="external noopener" id="article_studios_a_zoomh6" aria-labelledby="article_studios_a_zoomh6">Zoom H6</a> and professional microphones. We record your story for post-production and publishing back at the studios.</p>
						<p>Think about how the location of a recording could add value to the conversation, or be a more efficient use of your time. For example, an interview with a busy Exec while they are driving to the airport, or at a conference, or even in the factory where your products are manufactured. Be creative!</p>

					</div>

				</figure>

			</div>

		</article>

</div>

<!-- MailerLite Universal -->
<script>
(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

var ml_account = ml('accounts', '1075222', 'a1x7q3p3t9', 'load');
</script>
<!-- End MailerLite Universal -->

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