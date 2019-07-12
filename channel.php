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
<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
<?php include("assets/partials/loadCSS.html"); ?>

<meta name="description" content="Podcast recording studios channel" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Channel" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Channel" />
<meta property="og:description" content="Podcast recording studios channel" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Channel</title>
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

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
MAIN
-->

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	ARTICLE: Channel template
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_channel">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob constrain pad-t-mob">

			<!--
			SCRIPT
			-->

			<?php

				// Construct a link to the relevant json file
				// ----------------------------------------------------------------------------------------------------

				// Get the file name from the url so we know which json file to insert into the template
				$file_name = end(explode('=', $_SERVER['REQUEST_URI']));

				// add the file name to the folder path so we can get the json file
				$file = 'assets/data/channels/json/'.$file_name.'.json';

				// Check if the json file exists, otherwise redirect to the 404 error page
				// ----------------------------------------------------------------------------------------------------

				if (file_exists($file)) {
					// get the contents of the json file and decode the string into readable text
					$json_data = file_get_contents($file);
					$data = json_decode($json_data);
				}
				else {
					// Redirect to 404 error page
					echo '
						<script>
							window.location = "https://solidgoldstudios.co.za/errors/404.php
						</script>
					';
				};

				// Construct html components to be used in the final html output
				// ----------------------------------------------------------------------------------------------------

				// Get json cover image name, construct the full url, then display the html
				$cover_url = 'assets/images/covers/'.$data->coverFileName.'';
				$cover_image = '
					<div class="( channel-template__image-container )">
						<img src="'.$cover_url.' alt="'.$data->title.' podcast channel artwork" />
					</div>
				';

				// If playlist data are present, then display the button
				if ($data->playlistUrl == '') {
					$button_playlistUrl == '';
				}
				else {
					$button_playlistUrl = '
						<a class="button primary" href="'.$data->playlistUrl.'" target="_blank" rel="noopener" title="'.$data->title.' channel playlist" id="article_channel_a_playlist" aria-label="'.$data->title.' channel playlist"><span>Listen</span></a>
					';
				};

				// If agreement data are present, then display the button
				if ($data->agreement == 'yes') {
					$button_agreement = '
						<a class="button secondary" href="https://form.myjotform.com/80842486098569" target="_blank" rel="noopener" title="Media Usage Agreement" id="article_channel_a_agreement" aria-label="Media Usage Agreement"><span>Media Usage Agreement</span></a>
					';
				}
				else {
					$button_agreement = '';
				};

				// If agreement data are present, then display the paragraph
				if ($data->agreement == 'Yes' || $data->agreement == 'yes') {
					$text_agreement = '
						<div class="flexdir-ltr-mob flexwrap pad-double-t-mob">
							<p>Before appearing as a guest, please complete the <a href="https://form.myjotform.com/80842486098569" target="_blank" rel="noopener" title="Media Usage Agreement" id="article_channel_p_mediausageagreement" aria-label="Media Usage Agreement"><span>Media Usage Agreement</span></a>. This enables us to publish the podcast and frees you to use it for your own promotional purposes.</p>
						</div>
					';
				}
				else {
					$text_agreement = '';
				};

				// If extra button data are present, then display the button
				if ($data->extraButtonLabel == '') {
					$button_extraButton == '';
				}
				else {
					$button_extraButton = '
						<a class="button secondary" href="'.$data->extraButtonUrl.'" target="_blank" rel="noopener" title="'.$data->extraButtonLabel.'" id="article_channel_a_extrabutton" aria-label="'.$data->extraButtonLabel.'"><span>'.$data->extraButtonLabel.'</span></a>
					';
				};

				// If website data are present, then display the icon
				if ($data->websiteUrl == '') {
					$icon_website == '';
				}
				else {
					$icon_website = '
						<a class="encimage-icon-website effect-grow-hover" href="'.$data->websiteUrl.'" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s website" id="article_channel_a_website" aria-label="Visit '.$data->host.'\'s website"></a>
					';
				};

				// If email data are present, then display the icon
				if ($data->email == '') {
					$icon_email == '';
				}
				else {
					$icon_email = '
						<a class="encimage-icon-email effect-grow-hover" href="mailto:'.$data->email.'" target="_blank" rel="noopener" title="Email '.$data->host.'" id="article_channel_a_email" aria-label="Email '.$data->host.'"></a>
					';
				};

				// If whatsapp number data are present, then display the icon
				if ($data->whatsappNumber == '') {
					$icon_whatsapp == '';
				}
				else {
					$icon_whatsapp = '
						<a class="encimage-icon-whatsapp effect-grow-hover" href="https://api.whatsapp.com/send?phone='.$data->whatsappNumber.'&text=Hi%20there" target="_blank" rel="noopener" title="Send '.$data->host.' a WhatsApp message" id="article_channel_a_whatsapp" aria-label="Send '.$data->host.' a WhatsApp message"></a>
					';
				};

				// If facebook number data are present, then display the icon
				if ($data->facebookUrl == '') {
					$icon_facebook == '';
				}
				else {
					$icon_facebook = '
						<a class="encimage-icon-facebook effect-grow-hover" href="'.$data->facebookUrl.'" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s Facebook page" id="article_channel_a_facebook" aria-label="Visit '.$host.'\'s Facebook page"></a>
					';
				};

				// If twitter data are present, then display the icon
				if ($data->twitterUrl == '') {
					$icon_twitter == '';
				}
				else {
					$icon_twitter = '
						<a class="encimage-icon-twitter effect-grow-hover" href="'.$data->twitterUrl.'" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s Twitter page" id="article_channel_a_twitter" aria-label="Visit '.$data->host.'\'s Twitter page"></a>
					';
				};

				// If linkedin data are present, then display the icon
				if ($data->linkedinUrl == '') {
					$icon_linkedin == '';
				}
				else {
					$icon_linkedin = '
						<a class="encimage-icon-linkedin effect-grow-hover" href="'.$data->linkedinUrl.'" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s LinkedIn page" id="article_channel_a_linkedin" aria-label="Visit '. $data->host.'\'s LinkedIn page"></a>
					';
				};

				// If instagram data are present, then display the icon
				if ($data->instagramUrl == '') {
					$icon_instagram == '';
				}
				else {
					$icon_instagram = '
						<a class="encimage-icon-instagram effect-grow-hover" href="'.$data->instagramUrl.'" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s Instagram page" id="article_channel_a_instagram" aria-label="Visit '.$data->host.'\'s Instagram page"></a>
					';
				};

				// If tumblr data are present, then display the icon
				if ($data->tumblrUrl == '') {
					$icon_tumblr == '';
				}
				else {
					$icon_tumblr = '
						<a class="encimage-icon-tumblr effect-grow-hover" href="'.$data->tumblrUrl.'" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s Tumblr page" id="article_channel_a_tumblr" aria-label="Visit '.$data->host.'\'s Tumblr page"></a>
					';
				};

				// If rss data are present, then display the icon
				if ($data->rssUrl == '') {
					$icon_rss == '';
				}
				else {
					$icon_rss = '
						<a class="encimage-icon-rss effect-grow-hover" href=" '.$data->rssUrl.'" target="_blank" rel="noopener" title="Open '.$data->title.' raw RSS feed" id="article_channel_a_rss" aria-label="Open '.$data->title.' raw RSS feed"></a>
					';
				};

				// Meta link for Google
				// ----------------------------------------------------------------------------------------------------

				echo '
					<link type="application/rss+xml" rel="alternate" title="'.$data->title.' with '.$data->host.' href="'.$data->rssUrl.'"/>
				';

				// Display the final html
				// ----------------------------------------------------------------------------------------------------

				echo '
					<div class="flexdir-ttb-mob flexdir-ltr-tab">
						<div class="( channel-template__image-container )">
							<img src="'.$cover_url.'" alt="'.$data->title.' podcast channel artwork" />
						</div>
						<div>
							<h1 class="pad-t-mob">'.$data->title.'</h1>
							<h2>'.$data->host.'</h2>
							<div>'.$data->description.'</div>
							<div class="flexdir-ttb-mob flexdir-ltr-des flexpos-lc-mob flexpos-lc-des pad-double-t-mob spread-mob">
								'.$button_playlistUrl.'
								'.$button_agreement.'
								'.$button_extraButton.'
							</div>
							<div>'.$text_agreement.'</div>
							<div class="flexdir-ltr-mob flexwrap pad-double-t-mob">
								'.$icon_website.'
								'.$icon_email.'
								'.$icon_whatsapp.'
								'.$icon_facebook.'
								'.$icon_twitter.'
								'.$icon_linkedin.'
								'.$icon_instagram.'
								'.$icon_tumblr.'
								'.$icon_rss.'
							</div>
						</div>
					</div>
				';

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

</html>
