<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

<!--
PARTIAL > Base URL
-->
<?php include("assets/partials/base-url.html"); ?>

<!--
PARTIAL > Google Tag Manager script
-->
<?php include("assets/partials/google-tag-manager-script.html"); ?>

<!-- 
LINK & PARTIAL > Defer load non-critical CSS
-->
<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
<?php include("assets/partials/loadCSS.html"); ?>

<meta name="description" content="Podcast recording studios blog post" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Post" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Post" />
<meta property="og:description" content="Podcast recording studios blog post" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Post</title>
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
STYLES > Inline load critical CSS
-->
<style>
	<?php include("assets/critical.min.css"); ?>
</style>

<!--
PARTIAL > Google Tag Manager body
-->
<?php include("assets/partials/google-tag-manager-body.html"); ?>

<!--
PARTIAL > Leader with menu
-->
<?php include("assets/partials/pattern-page-leader.html"); ?>

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

	<!--
	SECTION > Post
	-->

	<section class="pad-respond-xy-mob theme-light-grey-mob" id="section_post" aria-labelledby="section_post_h1_title">

		<!--
		Container
		-->

		<h1 hidden>Blog post</h1> <!-- For accessiblity audit only, Google does not recognise PHP script's H1 -->

		<div class="constrain pad-y-mob">

			<article>

				<?php
					@$dir = "assets/posts/"; // Posts directory
					// @$dir_url = "http://localhost:8888/solidgoldstudios/assets/posts/";
					@$dir_url = "https://solidgoldstudios.co.za/assets/posts/";
					if (isset($_GET['post']) && !empty($_GET['post'])) {
						// Begin curl
						@$url = $dir_url . $_GET['post'];
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

							// Intro data
							@$break_intro_c = explode("</intro>", $content);
							@$break_intro_o = explode("<intro>", $break_intro_c[0]);

							// Body data
							@$break_body_c = explode("</body>", $content);
							@$break_body_o = explode("<body>", $break_body_c[0]);

							if (count($break_title_o) > 1) {

								// Define variables
								@$title = $break_title_o[1];
								@$intro = $break_intro_o[1];
								@$body = $break_body_o[1];

								// Write HTML content
								echo "
									<div aria-hidden='true'><span class='text-heading-badge--light'>Blog Post</span></div>
									<h1 id='section_post_h1_title'>". $title . "</h1>
									<p>". $intro . "</p>
									". $body . "
								";
							}
						}
					}
				?>

			</article>

			<div class="pad-double-t-mob">

				<button class="secondary" title="Go back to home page" onclick='history.back(-1)'> <span>< Home</span></button>

			</div>

		</div>

	</section>

</div>

<!--
PARTIAL > Page footer
-->
<?php include("assets/partials/pattern-page-footer.html"); ?>

<!--
SCRIPT > jQuery scripts
-->
<script src="assets/scripts/jquery/jquery.min.js"></script>
<script src="assets/scripts/jquery/pushy.min.js" defer></script>

</html>