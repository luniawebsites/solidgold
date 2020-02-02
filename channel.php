<?php

	// Construct a link to the relevant json file referenced in the address bar
	// ----------------------------------------------------------------------------------------------------

	// Get the file name from the url so we know which json file to use
	$file_name = end(explode('=', $_SERVER['REQUEST_URI']));

	// Add the file name to the folder path so we can get the json file
	$file = 'assets/data/channels/json/'.$file_name.'.json';

	// Get the contents of the json file and decode the string into readable text
	$json_data = file_get_contents($file);
	$data = json_decode($json_data);

	// Construct html components to be used in the final html output
	// ----------------------------------------------------------------------------------------------------

	// Get json cover image name, construct the full url, then display the html
	$cover_url = 'assets/images/covers/'.$data->coverFileName.'';
	$cover_image = '
		<div class="( channel-template__image-container )">
			<img src="'.$cover_url.' alt="'.$data->title.' podcast channel artwork" />
		</div>
	';

    // If donate data are present, then display the link
    if ($data->donateLink == '') {
        $text_donate = '';
    }
    else {
        $text_donate = '
            <p class="pad-t-mob">
                <a href="'.$data->donateLink.'" target="_blank" rel="payment">Support this podcast</a>.
            </p>
        ';
    };

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
	if ($data->agreement == 'yes' && (!empty($data->emailAgreement))) {
		$button_agreement = '
			<a class="button secondary" href="https://form.myjotform.com/80842486098569?hostEmail='.$data->emailAgreement.'&whichShow='.$data->title.'" target="_blank" rel="noopener" title="Media Usage Agreement" id="article_channel_a_agreement" aria-label="Media Usage Agreement"><span>Media Usage Agreement</span></a>
		';
	}
	elseif ($data->agreement == 'yes' && $data->emailAgreement !== '') {
		$button_agreement = '
			<a class="button secondary" href="https://form.myjotform.com/80842486098569?whichShow='.$data->title.'" target="_blank" rel="noopener" title="Media Usage Agreement" id="article_channel_a_agreement" aria-label="Media Usage Agreement"><span>Media Usage Agreement</span></a>
		';
	}
	else {
		$button_agreement = '';
	};

	// If agreement data are present, then display the paragraph
	if ($data->agreement == 'Yes' || $data->agreement == 'yes') {
		$text_agreement = '
			<div class="flexdir-ltr-mob flexwrap pad-double-t-mob">
				<p>Before appearing as a guest, please complete the Media Usage Agreement. This enables us to publish the podcast and frees you to use it for your own promotional purposes.</p>
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

	// If buy button data 1 are present, then display the button
	if ($data->buyLink1Label == '') {
		$button_buyButton1 == '';
	}
	else {
		$button_buyButton1 = '
			<a class="button secondary" href="'.$data->buyLink1Url.'" target="_blank" rel="noopener" title="'.$data->buyLink1Label.'" id="article_channel_a_buylink1" aria-label="'.$data->buyLink1Label.'"><span>'.$data->buyLink1Label.'</span></a>
		';
	};

	// If buy button data 2 are present, then display the button
	if ($data->buyLink2Label == '') {
		$button_buyButton2 == '';
	}
	else {
		$button_buyButton2 = '
			<a class="button secondary" href="'.$data->buyLink2Url.'" target="_blank" rel="noopener" title="'.$data->buyLink2Label.'" id="article_channel_a_buylink2" aria-label="'.$data->buyLink2Label.'"><span>'.$data->buyLink2Label.'</span></a>
		';
	};

	// If buy button data 3 are present, then display the button
	if ($data->buyLink3Label == '') {
		$button_buyButton3 == '';
	}
	else {
		$button_buyButton3 = '
			<a class="button secondary" href="'.$data->buyLink3Url.'" target="_blank" rel="noopener" title="'.$data->buyLink3Label.'" id="article_channel_a_buylink3" aria-label="'.$data->buyLink3Label.'"><span>'.$data->buyLink3Label.'</span></a>
		';
	};

	// If website data are present, then display the icon
	if ($data->websiteUrl == '') {
		$icon_website == '';
	}
	else {
		$icon_website = '
			<a class="encimage-icon-website effect-grow-hover" href="'.$data->websiteUrl.'?utm_source=Solid%20Gold%20Podcast%20Studios" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s website" id="article_channel_a_website" aria-label="Visit '.$data->host.'\'s website"></a>
		';
	};

	// If email data are present, then display the icon
	if ($data->email == '') {
		$icon_email == '';
	}
	else {
		$icon_email = '
			<a class="encimage-icon-email effect-grow-hover" href="mailto:'.$data->email.'?subject='.$data->title.'%20Podcast%20Query" target="_blank" rel="noopener" title="Email '.$data->host.'" id="article_channel_a_email" aria-label="Email '.$data->host.'"></a>
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

    // If youtube data are present, then display the icon
	if ($data->youtubeUrl == '') {
		$icon_youtube == '';
	}
	else {
		$icon_youtube = '
			<a class="encimage-icon-youtube effect-grow-hover" href="'.$data->youtubeUrl.'" target="_blank" rel="noopener" title="Visit '.$data->host.'\'s YouTube page" id="article_channel_a_youtube" aria-label="Visit '.$data->host.'\'s YouTube page"></a>
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

	// Display the final html
	// ----------------------------------------------------------------------------------------------------

	echo '

		<!DOCTYPE html>
		<html lang="en">

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />
		<link type="application/rss+xml" rel="alternate" title="'.$data->title.' with '.$data->host.'" href="'.$data->rssUrl.'"/>

		<!--
		PARTIAL: Base URL
		-->

	';

	// Include base url
	include("assets/partials/base-url.html");

	echo '

		<!--
		PARTIAL: Google Tag Manager script
		-->

	';

	// Include Google tag manager script
	include("assets/partials/google-tag-manager-script.html");

	echo '

		<!--
		LINK/PARTIAL: Defer load non-critical CSS
		-->
		<link rel="stylesheet" href="assets/non-critical.min.css" media="print" onload="this.media=\'all\'">

		<meta name="description" content="'.$data->title.' podcast channel from Solid Gold Podcast Studios" />
		<meta name="robots" content="index, follow" />
		<meta name="classification" content="business" />
		<meta name="pagename" content="Solid Gold Podcast Studios | '.$data->title.'" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="MobileOptimized" content="320" />
		<meta property="og:title" content="Solid Gold Podcast Studios | '.$data->title.'" />
		<meta property="og:description" content="'.$data->title.' podcast channel from Solid Gold Podcast Studios" />
		<meta property="og:locale" content="en_ZA" />
		<meta property="og:image" content="https://solidgoldstudios.co.za/'.$cover_url.'" />
		<meta property="og:type" content="website" />
		<title>Solid Gold Podcast Studios | '.$data->title.'</title>
		<link rel="canonical" href="https://solidgoldstudios.co.za/channel.php?title='.$file_name.'" />
		<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
		<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

	';

	// Include Google tag manager body
	include("assets/partials/google-tag-manager-body.html");

	echo '

		<!--
		STYLES: Inline load critical CSS
		-->
		<style>

	';

	// Inline load critical CSS
	include("assets/critical.min.css");

	echo '

		</style>

	';

	// Include page leader with menu
	include("assets/partials/pattern-page-leader.html");

	echo '

		<!--
		MAIN
		-->

		<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

			<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_channel">

				<div class="flexdir-ttb-mob constrain pad-t-mob">

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
                                '.$button_extraButton.'
								'.$button_agreement.'
								'.$button_buyButton1.'
								'.$button_buyButton2.'
								'.$button_buyButton3.'
							</div>
							<div>'.$text_agreement.'</div>
                            <div>'.$text_donate.'</div>
							<div class="flexdir-ltr-mob flexwrap pad-double-t-mob">
								'.$icon_website.'
								'.$icon_email.'
								'.$icon_whatsapp.'
								'.$icon_facebook.'
								'.$icon_twitter.'
								'.$icon_linkedin.'
								'.$icon_instagram.'
                                '.$icon_youtube.'
								'.$icon_tumblr.'
								'.$icon_rss.'
							</div>
						</div>
					</div>

				</div>

			</article>

		</div>

	';

	// Include page footer
	include("assets/partials/pattern-page-footer.html");

	echo '

		<script src="assets/scripts/jquery/jquery.min.js"></script>
		<script src="assets/scripts/jquery/pushy.min.js" defer></script>

		</html>

	';

?>
