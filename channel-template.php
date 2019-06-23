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
	SECTION > Channel template
	-->

	<section class="pad-respond-xy-mob theme-light-grey-mob" id="section_channeltemplate">

		<!--
		Container
		-->

		<div class="flexdir-ttb-mob constrain spread-respond pad-respond-t-mob">

			<!--
			Channel
			-->

			<?php
				@$dir = "assets/channels/active/"; // Channels directory
				// @$dir_url = "http://localhost:8888/solidgoldstudios/assets/channels/active/";
				@$dir_url = "https://solidgoldstudios.co.za/assets/channels/active/";
				if (isset($_GET['channel']) && !empty($_GET['channel'])) {
					// Begin curl
					@$url = $dir_url . $_GET['channel'];
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
						
						// Channel name
						@$break_title_c = explode("</title>", $content);
						@$break_title_o = explode("<title>", $break_title_c[0]);
						
						// Channel host name
						@$break_host_c = explode("</host>", $content);
						@$break_host_o = explode("<host>", $break_host_c[0]);

						// Cover image name
						@$break_cover_file_name_c = explode("</coverFileName>", $content);
						@$break_cover_file_name_o = explode("<coverFileName>", $break_cover_file_name_c[0]);

						// Media usage agreement yes/no
						@$break_agreement_c = explode("</agreement>", $content);
						@$break_agreement_o = explode("<agreement>", $break_agreement_c[0]);

						// Playlist name
						@$break_playlist_url_c = explode("</playlistUrl>", $content);
						@$break_playlist_url_o = explode("<playlistUrl>", $break_playlist_url_c[0]);

						// Description copy
						@$break_description_c = explode("</description>", $content);
						@$break_description_o = explode("<description>", $break_description_c[0]);

						// Website URL
						@$break_website_url_c = explode("</websiteUrl>", $content);
						@$break_website_url_o = explode("<websiteUrl>", $break_website_url_c[0]);

						// Email
						@$break_email_c = explode("</email>", $content);
						@$break_email_o = explode("<email>", $break_email_c[0]);

						// WhatsApp number
						@$break_whatsapp_c = explode("</whatsapp>", $content);
						@$break_whatsapp_o = explode("<whatsapp>", $break_whatsapp_c[0]);

						// Facebook slug
						@$break_facebook_url_c = explode("</facebookUrl>", $content);
						@$break_facebook_url_o = explode("<facebookUrl>", $break_facebook_url_c[0]);

						// Twitter slug
						@$break_twitter_url_c = explode("</twitterUrl>", $content);
						@$break_twitter_url_o = explode("<twitterUrl>", $break_twitter_url_c[0]);

						// LinkedIn slug
						@$break_linkedin_url_c = explode("</linkedinUrl>", $content);
						@$break_linkedin_url_o = explode("<linkedinUrl>", $break_linkedin_url_c[0]);

						// Instagram slug
						@$break_instagram_url_c = explode("</instagramUrl>", $content);
						@$break_instagram_url_o = explode("<instagramUrl>", $break_instagram_url_c[0]);

						// Tumblr slug
						@$break_tumblr_url_c = explode("</tumblrUrl>", $content);
						@$break_tumblr_url_o = explode("<tumblrUrl>", $break_tumblr_url_c[0]);

						// RSS URL
						@$break_rss_url_c = explode("</rssUrl>", $content);
						@$break_rss_url_o = explode("<rssUrl>", $break_rss_url_c[0]);

						// Extra button URL
						@$break_extra_url_c = explode("</extraUrl>", $content);
						@$break_extra_url_o = explode("<extraUrl>", $break_extra_url_c[0]);

						// Extra button label
						@$break_extra_label_c = explode("</extraLabel>", $content);
						@$break_extra_label_o = explode("<extraLabel>", $break_extra_label_c[0]);

						// Define the outputs of the exploded elements as semantic variables
						@$title = $break_title_o[1];
						@$host = $break_host_o[1];
						@$cover_file_name = $break_cover_file_name_o[1];
						@$agreement = $break_agreement_o[1];
						@$playlist_url = $break_playlist_url_o[1];
						@$description = $break_description_o[1];
						@$website_url = $break_website_url_o[1];
						@$email = $break_email_o[1];
						@$whatsapp = $break_whatsapp_o[1];
						@$facebook_url = $break_facebook_url_o[1];
						@$twitter_url = $break_twitter_url_o[1];
						@$linkedin_url = $break_linkedin_url_o[1];
						@$instagram_url = $break_instagram_url_o[1];
						@$tumblr_url = $break_tumblr_url_o[1];
						@$rss_url = $break_rss_url_o[1];
						@$extra_url = $break_extra_url_o[1];
						@$extra_label = $break_extra_label_o[1];

						// Conditional statements

						// If agreement data are present, then set button to display
						if ($agreement == "yes") {
							$button_agreement = "
								<a class='button secondary' href='https://form.myjotform.com/80842486098569' target='_blank' rel='noopener' title='" . $title . " channel playlist' id='section_channel_a_agreement' aria-label='" . $title . " channel playlist'><span>Media Usage Agreement</span></a>
							";
						}
						else {
							$button_agreement = "";
						}

						// If agreement data are present, then set text to display
						if ($agreement == "yes") {
							$text_agreement = "
								<div class='flexdir-ltr-mob flexwrap pad-double-t-mob'>
									<p>Before appearing as a guest, please complete the <a href='https://form.myjotform.com/80842486098569' target='_blank' rel='noopener' title='Media usage agreement' id='section_channel_p_mediausageagreement' aria-label='Media usage agreement'><span>Media Usage Agreement</span></a>. This enables us to publish the podcast and frees you to use it for your own promotional purposes.</p>
								</div>
							";
						}
						else {
							$text_agreement = "";
						}

						// If playlist data are present, then set button to display
						if ($playlist_url == "") {
							$button_playlist == "";
						}
						else {
							$button_playlist = "
								<a class='button primary' href='" . $playlist_url . "' target='_blank' rel='noopener' title='" . $title . " channel playlist' id='section_channel_a_playlist' aria-label='" . $title . " channel playlist'><span>Listen</span></a>
							";
						}

						// If button_extra data are present, then set variable to display button with link
						if ($extra_url == "" or $extra_label == "") {
							$button_extra == "";
						}
						else {
							@$button_extra = "
								<a class='button secondary' href='" . $extra_url . "' target='_blank' rel='noopener' title='" . $extra_label . "' id='section_channel_a_extrabutton' aria-label='" . $extra_label . "'><span>" . $extra_label . "</span></a>
							";
						}

						// If website data are present, then set variable to display icon with link
						if ($website_url == "") {
							"";
						}
						else {
							@$icon_website = "
								<a class='encimage-icon-website effect-grow-hover' href='" . $website_url . "' target='_blank' rel='noopener' title='Visit " . $host . " website' id='section_channel_a_website' aria-label='Visit " . $title . " website'></a>
							";
						}

						// If email data are present, then set variable to display icon with link
						if ($email == "") {
							"";
						}
						else {
							@$icon_email = "
								<a class='encimage-icon-email effect-grow-hover' href='mailto:" . $email . "' target='_blank' rel='noopener' title='Send " . $host . " an email' id='section_channel_a_email' aria-label='Send " . $host . " an email'></a>
							";
						}

						// If WhatsApp data are present, then set variable to display icon with link
						if ($whatsapp == "") {
							"";
						}
						else {
							@$icon_whatsapp = "
								<a class='encimage-icon-whatsapp effect-grow-hover' href='https://api.whatsapp.com/send?phone=" . $whatsapp . "&text=Hi%20there' target='_blank' rel='noopener' title='Send " . $host . " a WhatsApp message' id='section_channel_a_whatsapp' aria-label='Send " . $host . " a WhatsApp message'></a>
							";
						}

						// If Facebook data are present, then set variable to display icon with link
						if ($facebook_url == "") {
							"";
						}
						else {
							@$icon_facebook = "
								<a class='encimage-icon-facebook effect-grow-hover' href='" . $facebook_url . "' target='_blank' rel='noopener' title='Visit " . $host . " Facebook page' id='section_channel_a_facebook' aria-label='Visit " . $host . " Facebook page'></a>
							";
						}

						// If Twitter data are present, then set variable to display icon with link
						if ($twitter_url == "") {
							"";
						}
						else {
							@$icon_twitter = "
								<a class='encimage-icon-twitter effect-grow-hover' href='" . $twitter_url . "' target='_blank' rel='noopener' title='Visit " . $host . " Twitter page' id='section_channel_a_twitter' aria-label='Visit " . $host . " Twitter page'></a>
							";
						}

						// If LinkedIn data are present, then set variable to display icon with link
						if ($linkedin_url == "") {
							"";
						}
						else {
							@$icon_linkedin = "
								<a class='encimage-icon-linkedin effect-grow-hover' href='" . $linkedin_url . "' target='_blank' rel='noopener' title='Visit " . $host . " LinkedIn page' id='section_channel_a_linkedin' aria-label='Visit " . $host . " LinkedIn page'></a>
							";
						}

						// If Instagram data are present, then set variable to display icon with link
						if ($instagram_url == "") {
							"";
						}
						else {
							@$icon_instagram = "
								<a class='encimage-icon-instagram effect-grow-hover' href='" . $instagram_url . "' target='_blank' rel='noopener' title='Visit " . $host . " Instagram page' id='section_channel_a_instagram' aria-label='Visit " . $host . " Instagram page'></a>
							";
						}

						// If Tumblr data are present, then set variable to display icon with link
						if ($tumblr_url == "") {
							"";
						}
						else {
							@$icon_tumblr = "
								<a class='encimage-icon-tumblr effect-grow-hover' href='" . $tumblr_url . "' target='_blank' rel='noopener' title='Visit " . $host . " Tumblr page' id='section_channel_a_tumblr' aria-label='Visit " . $host . " Tumblr page'></a>
							";
						}

						// If RSS data are present, then set variable to display icon with link
						if ($rss_url == "") {
							"";
						}
						else {
							@$icon_rss = "
								<a class='encimage-icon-rss effect-grow-hover' href='" . $rss_url . "' target='_blank' rel='noopener' title='Open " . $host . " channel raw RSS feed' id='section_channel_a_rss' aria-label='Open " . $host . " channel raw RSS feed'></a>
							";
						}

						// Render page HTML

						if (count($break_title_o) > 1) {
							// Styling for channel elements done in CSS instead of using utility classes
							echo "
								<link type='application/rss+xml' rel='alternate' title='" . $title . " with " . $host . "' href='" . $rss_url . "'/>
								<div class='channel-template__container'>
									<img src='assets/images/covers/" . $cover_file_name . "' alt='" . $title . " podcast channel artwork' />
									<div class='channel-template__copy'>
										<h1>" . $title . "</h1>
										<h2>" . $host . "</h2>
										<div>" . $description . "</div>
										<div class='flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-mob flexpos-lc-tab pad-double-t-mob spread-mob'>
											". $button_playlist ."
											". $button_extra ."
											". $button_agreement ."
										</div>
										<div>". $text_agreement ."</div>
										<div class='flexdir-ltr-mob flexwrap pad-double-t-mob'>
											". $icon_website ."
											". $icon_email ."
											". $icon_whatsapp ."
											". $icon_facebook ."
											". $icon_twitter ."
											". $icon_linkedin ."
											". $icon_instagram ."
											". $icon_tumblr ."
											". $icon_rss ."
										</div>
									</div>
								</div>
							";
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

</html>
