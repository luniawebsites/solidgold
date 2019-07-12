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

<meta name="description" content="Podcast recording studios #BeHeard" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | #BeHeard" />
<meta property="og:description" content="Podcast recording studios #BeHeard" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgoldstudios.co.za/" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | #BeHeard</title>
<link rel="canonical" href="https://solidgoldstudios.co.za/index.php" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
Prerender most likely next page
-->
<link rel="prerender" href="use-cases.php">

<!--
SCRIPT: Inline load modernizer webp detection (defer causes images not to show in IE11)
-->
<script>
	<?php include("assets/scripts/modernizr-webp.js"); ?>
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
HEADER: Hero
-->

<header class="pad-respond-xy-mob theme-white-mob" id="header_hero" aria-labelledby="header_hero_h1_beingheardis">

	<!--
	LAYOUT CONTAINER
	-->

	<div class="flexdir-ttb-mob flexdir-rtl-tab flexpos-lc-tab constrain spread-respond pad-y-mob">

		<!--
		IMAGE
		-->

		<div class="width-40-tab width-50-des margin-b-mob-only encimage-sketch-group-on-phones"></div>

		<!--
		LAYOUT CONTAINER
		-->

		<div class="width-60-tab width-50-des">

			<!--
			CONTENT
			-->

			<h1 class="margin-t-mob-only" id="header_hero_h1_beingheardis">Being heard is one of our greatest human needs. #BeHeard</h1>

			<p>We are the podcast professionals and will help you plan, produce and publish your podcasts so you can share your story with the world.</p>

			<p>We are the first South African network on Castbox.</p>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ltr-mob spread-mob pad-t-mob">

				<!--
				IMAGES
				-->

				<a class="encimage-brand-iab-member" href="https://iabsa.net/?utm_source=Solid%20Gold%20Podcast%20Studios" target="_blank" rel="noopener" title="IAB logo" id="header_hero_a_iab" aria-label="IAB logo"></a>

				<a class="encimage-brand-castbox-first-network" href="https://castbox.fm/networks/Solid%20Gold%20Studios-486?country=za&utm_source=Solid%20Gold%20Podcast%20Studios" target="_blank" rel="noopener" title="Castbox logo" id="header_hero_a_castbox" aria-label="Castbox logo"></a>

			</div>

			<!--
			BUTTON CONTAINER
			-->

			<div class="flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-mob flexpos-lc-tab spread-mob pad-double-t-mob">

				<a class="button primary" href="use-cases.php" title="There must be 50 ways to use a podcast" id="header_hero_a_howpodcastsare" aria-labelledby="header_hero_a_howpodcastsare header_hero_h1_beingheardis"><span>How Podcasts Are Used</span></a>

				<a class="button secondary" href="channels.php" title="See the Solid Gold Podcast Studios podcast channels" id="header_hero_a_podcastchannels" aria-labelledby="header_hero_a_podcastchannels header_hero_h1_beingheardis"><span>Podcast Channels</span></a>

			</div>

		</div>

	</div>

</header>

<!--
MAIN
-->

<div role="main"> <!-- This is used instead of the more semantically-correct <main> to ensure CSS auro-grid works -->

	<!--
	ARTICLE: Tell the world your story
	-->

	<article class="pad-respond-xy-mob theme-dark-grey-mob" id="article_telltheworld" aria-labelledby="article_telltheworld_h2_telltheworld">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob constrain spread-respond pad-respond-y-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob pad-b-mob">

				<!--
				CONTENT
				-->

				<h2 class="text-c-mob" id="article_telltheworld_h2_telltheworld">Tell the world <span class="no-break text-yellow-mob">your story</span>.</h2>

				<p class="text-c-mob">This short, powerful podcast clip from Petro Du Pisani's channel <a href="channel-template.php?channel=on-change.xml" id="article_telltheworld_a_onchange" aria-labelledby="article_telltheworld_a_onchange">On Change</a> gives you a demonstration of the effect of sincere and motivated story-telling. Telling your origin story is possibly the most effective way to share how your personal or business values were shaped.</p>

			</div>

			<!--
			FIGURE: Corrie Petzer's Origin Story
			-->

			<figure>

				<!--
				LAYOUT CONTAINER
				-->

				<div class="flexdir-ttb-mob flexpos-ct-mob">

					<!--
					CONTENT
					-->

					<h3 class="text-c-mob">Corrie Petzer's Origin Story</h3>

					<audio class="pad-t-mob" preload="none" controls>
						<source src="https://chtbl.com/track/podcaststudios.co.za/audio/solidgoldstudios/solid-gold-studios-sample-storytelling-corrie.mp3" type="audio/mpeg">
					</audio>

					<figcaption class="pad-t-mob text-c-mob">Duration 2:21</figcaption>

				</div>

			</figure>

		</div>

	</article>

	<!--
	ARTICLE: Blog posts
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="article_blogposts" aria-labelledby="section_featuredblogpost_h2_title">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob constrain pad-respond-y-mob">

			<!--
			ARIA HIDDEN LABEL
			-->

			<div aria-hidden="true"><span class="text-heading-badge--light">Blog Posts</span></div>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob flexdir-ltr-tab constrain spread-double-mob">

				<!--
				SECTION CONTAINER
				-->

				<section class="flexdir-ttb-mob width-60-tab constrain pad-respond-r-mob border-r-tab" id="section_featuredblogpost_h2_title">

					<!--
					SCRIPT: Display featured blog post
					-->

					<?php

						// Create a custom function
						// ----------------------------------------------------------------------

						function featuredBlogPost() {

							// Get all json files from this folder
							$folder = glob('assets/data/blog-posts/json/*.json');

							// Get the last json file from the folder
							$file = array_slice($folder, 1);
								foreach ($folder as $file) {
							};

							// Get the contents of the json file
							$contents = file_get_contents($file);

							// Decode the contents of the json file
							$data = json_decode($contents);

							// Construct the file name
							$file_name = basename($file, '.json');

							// Construct the link to the php template and add the file name as a referrer
							$file_url = 'blog-post.php?title='.$file_name.'';

							// Combine and display all the html for this function
							echo '
								<h2 id="section_featuredblogpost_h2_title" aria-labelledby="section_featuredblogpost_h2_title"><a href="'.$file_url.'" title="'.$data->title.'" aria-labelledby="section_featuredblogpost_h2_title">'.$data->title.'</h2>
								<p class="pad-t-mob">'.$data->introText.'</p>
								<div class="flexdir-ttb-mob flexpos-lc-mob pad-double-t-mob">
									<a class="button primary" href="'.$file_url.'" title="Read post" id="section_featuredblogpost_a_readmore" aria-labelledby="section_featuredblogpost_a_readmore section_featuredblogpost_h2_title"><span>Read Post</span></a>
								</div>
							';

						};

						// Display the function's final html
						// ----------------------------------------------------------------------

						echo '
							'.featuredBlogPost().'
						';

					?>

				</section>

				<!--
				SECTION CONTAINER
				-->

				<section class="flexdir-ttb-mob flexpos-lc-mob width-40-tab" id="section_previousblogposts_h2_title">

					<!--
					HIDDEN HEADING (needed for semantic validation)
					-->
	
					<h2 id="section_previousblogposts_h2_title" hidden>Previous Blog Posts</h2>

					<!--
					SCRIPT: Display content from previous blog posts
					-->

					<?php

						// Create a custom function
						// ----------------------------------------------------------------------

						function previousBlogPosts() {

							// Designate the folder that contains the json files
							$folder = 'assets/data/blog-posts/json/';

							// Get all json files from the designated folder
							foreach (glob(''.$folder.'*.json') as $file) {
								$files[] = $file;
							};

							// Sort the array of json files in descending order so we get the latest file first
							rsort($files);

							$filter = array_slice($files, 1, 3);

							// Create a separate instance of each json file's string
							// ----------------------------------------------------------------------

							foreach ($filter as $file) {

								// Get the contents of the json file, decode the string, then get the file name
								$json_data = file_get_contents($file);
								$data = json_decode($json_data);
								$file_name = basename($file, '.json');

								// Construct the link to the php template and add the file name as a referrer
								$file_url = 'blog-post.php?title='.$file_name.'';

								// Combine and display all the html for this function
								echo '
									<a class="previous-blog-post-heading" href="'.$file_url.'" id="section_previousblogposts_a_title" aria-labelledby="section_previousblogposts_a_title section_previousblogposts_h2_title">
										'.$data->title.'
									</a>
								';

							};

							// Break the reference with the last element
							unset($file);

						};

						// Display the function's final html
						// ----------------------------------------------------------------------

						echo '
							'.previousBlogPosts().'
						';

					?>

				</section>

			</div>

		</div>

	</article>

	<!--
	ARTICLE: What are podcasts?
	-->

	<article class="pattern-section-item pad-respond-x-mob pad-respond-t-mob theme-white-mob" id="section_whatarepodcasts" aria-label="section_whatarepodcasts_h2_podcastsanythingeverywhere">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-btt-mob flexdir-ltr-tab flexpos-lb-mob flexpos-cb-tab constrain pad-respond-t-mob">

			<!--
			FIGURE
			-->

			<figure class="flexdir-ltr-tab flexpos-cb-tab width-80-tab width-70-des pad-t-mob">

				<!--
				IMAGE
				-->

				<div class="image-castbox-screenshot-on-iphonex bgpos-lb-mob bgpos-cb-tab"></div>

			</figure>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="margin-b-mob pad-respond-b-mob">

				<!--
				ARIA HIDDEN LABEL
				-->

				<div aria-hidden="true"><span class="text-heading-badge--light">What Are Podcasts?</span></div>

				<!--
				CONTENT
				-->

				<h2 id="section_whatarepodcasts_h2_podcastsanythingeverywhere">Podcasts: <span class="no-break">Anything! Everywhere!</span></h2>

				<p><strong>Like radio, but better.</strong> Podcasts are episodes of audio content that are pre-recorded and published in channels. Episodes range from a few minutes to several hours in length. Anyone can start their own podcast channel.</p>

				<p><strong>Podcasts educate, inform or entertain,</strong> and are often a combination of these three objectives. For example, a fun gameshow that's really teaching history or science. From poetry to arts and drama, advice on how to grow your business to growing your own vegetables—if you can imagine it, you can podcast it.</p>
				
				<p>Use a free app such as <a href="https://itunes.apple.com/us/app/apple-podcasts/id525463029?mt=8" target="_blank" rel="noopener" id="section_whatarepodcasts_a_applepodcasts" aria-labelledby="section_whatarepodcasts_a_applepodcasts">Apple Podcasts</a>, <a href="https://castbox.fm/download" target="_blank" rel="noopener" id="section_whatarepodcasts_a_castbox" aria-labelledby="section_whatarepodcasts_a_castbox">Castbox</a>, <a href="https://www.stitcher.com/download" target="_blank" rel="noopener" id="section_whatarepodcasts_a_stitcher" aria-labelledby="section_whatarepodcasts_a_stitcher">Stitcher</a> or <a href="https://www.spotify.com/download" target="_blank" rel="noopener" id="section_whatarepodcasts_a_spotify" aria-labelledby="section_whatarepodcasts_a_spotify">Spotify</a> to follow podcast channels of your choice. The app can even download new episodes for you automatically.</p>

			</div>

		</div>

	</article>

	<!--
	ARTICLE: Why podcast?
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="section_whypodcast" aria-labelledby="section_whypodcast_h2_youhavea">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob flexdir-rtl-tab flexpos-lb-tab constrain spread-respond pad-y-mob">

			<!--
			FIGURE
			-->

			<figure class="flexdir-ttb-mob flexdir-ttb-tab theme-dark-grey">

				<!--
				IMAGE
				-->

				<div class="margin-b-mob-only encimage-sketch-woman-on-couch"></div>

			</figure>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob theme-light-grey-mob">

				<!--
				ARIA HIDDEN LABEL
				-->

				<div aria-hidden="true"><span class="text-heading-badge--light">Why Podcast?</span></div>

				<!--
				CONTENT
				-->

				<h2 id="section_whypodcast_h2_youhavea">You have a captive audience.</h2>

				<p>Your audience <strong>chooses to listen to you</strong>, and is likely to do so while driving around. This is something they can't do with a video or a brochure. It's like your customers asking you to send a sales representative to drive around with them explaining a case study.</p>

			</div>

		</div>

		<!--
		LAYOUT CONTAINER: Genuine engagement/always available
		-->

		<div class="flexdir-ttb-mob constrain pad-y-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob flexdir-ltr-tab spread-respond">

				<!--
				FIGURE: Genuine engagement
				-->

				<figure class="flexdir-ttb-mob flexpos-cc-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="encimage-sketch-woman-phone-love" title="Woman holding cell phone with hearts"></div>

					<h3 class="pad-t-mob text-c-mob">Genuine engagement</h3>

					<p class="text-c-mob">Podcasts dive deeply into your content and help build trust between you and your audience.</p>

				</figure>

				<!--
				FIGURE: Always available
				-->

				<figure class="flexdir-ttb-mob flexpos-cc-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="encimage-sketch-swinging-on-tree" title="Woman looking at device while swinging on tree"></div>

					<h3 class="pad-t-mob text-c-mob">Always available</h3>

					<p class="text-c-mob">Podcasts are a great companion to daily life and turn an activity into an informative experience.</p>

				</figure>

			</div>

		</div>

	</article>

	<!--
	ARTICLE: Statistics
	-->

	<article class="pad-respond-xy-mob theme-white-mob" id="section_statistics" aria-labelledby="section_statistics_h2_podcastingisbig">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-btt-mob flexdir-rtl-tab flexpos-cc-tab constrain spread-respond pad-respond-y-mob">

			<!--
			FIGURE
			-->

			<figure class="flexdir-ttb-mob flexdir-ttb-tab flexpos-lc-mob flexpos-cc-tab">

				<!--
				CONTENT
				-->

				<figcaption class="pad-double-b-mob">US population that listens to podcasts each month</figcaption>

				<div class="image-chart"></div>

			</figure>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="pad-b-mob-only">

				<!--
				ARIA HIDDEN LABEL
				-->

				<div aria-hidden="true"><span class="text-heading-badge--light">Statistics</span></div>

				<!--
				CONTENT
				-->

				<h2 id="section_statistics_h2_podcastingisbig">Podcasting is big. <span class="no-break">Really big.</span> <span class="no-break">And growing fast.</span></h2>

				<p class="text-l-mob"><strong>32% of the US population</strong> listened to a podcast last month. There are more than 700,000 active podcast shows and more than 20-million episodes listed on Apple Podcasts alone. These staggering numbers are part of the reason we're so excited to provide you with an end-to-end podcast service.</p>

				<p class="text-l-mob"><small>Source: <a href="https://www.podcastinsights.com/podcast-statistics/" target="_blank" rel="noopener" id="section_statistics_a_podcastinsightstats" aria-labelledby="section_statistics_a_podcastinsightstats">Podcast Insight Stats</a> (from Edison Research <span class="no-break">and Nielsen, 2019</span>)</small></p>
						
			</div>

		</div>

	</article>

	<!--
	ARTICLE: Your listeners are everywhere
	-->

	<article class="pad-respond-xy-mob theme-white-mob border-t-mob" id="section_yourlistenersare" aria-labelledby="section_yourlistenersare_h2_yourlistenersare">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-btt-mob flexdir-ltr-tab flexpos-lc-tab constrain spread-respond pad-respond-y-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="width-60-des">

				<!--
				FIGURE
				-->

				<figure class="flexdir-ttb-mob flexpos-rc-mob pad-xy-mob theme-light-grey-mob border-mob">

					<!--
					CONTENT
					-->

					<p class="pad-b-mob caption">US podcast listeners by location</p>

					<table>

						<tr>
							<td>Home</td>
							<td class="text-r-mob">49%</td>
						</tr>

						<tr>
							<td>Driving</td>
							<td class="text-r-mob">22%</td>
						</tr>

						<tr>
							<td>Work</td>
							<td class="text-r-mob">11%</td>
						</tr>

						<tr>
							<td>Exercising</td>
							<td class="text-r-mob">4%</td>
						</tr>

						<tr>
							<td>Walking around</td>
							<td class="text-r-mob">3%</td>
						</tr>

					</table>

				</figure>

			</div>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob pad-b-mob-only">

				<!--
				CONTENT
				-->

				<h2 id="section_yourlistenersare_h2_yourlistenersare">Your listeners are everywhere.</h2>

				<p>Nearly one in three podcast listeners are engaged while <strong>driving, exercising or walking around</strong>. Time that was once spent listening to radio or music is now being used productively.</p>

				<p class="text-l-mob"><small>Source: <a href="https://www.podcastinsights.com/podcast-statistics/" target="_blank" rel="noopener" id="section_yourlistenersare_a_podcastinsightstats" aria-labelledby="section_yourlistenersare_a_podcastinsightstats">Podcast Insight Stats</a> (from Edison Research <span class="no-break">and Nielsen, 2019</span>)</small></p>

			</div>

		</div>

	</article>

	<!--
	ARTICLE: Services
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="section_services" aria-labelledby="section_services_h2_weofferan">

		<!--
		HEADER
		-->

		<header class="flexdir-ttb-mob flexdir-rtl-tab flexpos-lc-tab constrain pad-respond-y-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob theme-light-grey-mob">

				<!--
				ARIA HIDDEN LABEL
				-->

				<div aria-hidden="true"><span class="text-heading-badge--light">Services</span></div>

				<!--
				CONTENT
				-->

				<h2 id="section_services_h2_weofferan">We offer an end-to-end podcast service.</h2>

				<p>We are so much more than a podcast recording studio. Our full service offering guides you right from the start through the entire process. Whether you're an <strong>absolute beginner or a seasoned professional</strong>, we ensure everything gets done right—including concept, production, publishing and even hosting.</p>

			</div>

		</header>

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob constrain pad-y-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="grid-auto-respond-16">

				<!--
				SECTION: Personality design
				-->

				<section class="flexdir-ttb-mob flexpos-lt-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="icon-hand-paintbrush" title="Hand holding paintbrush"></div>

					<h3 class="pad-t-mob">Personality design</h3>

					<p>We help you explore how your show will look, sound and feel. What does the introduction sound like? Is it loud and brash, or soft and intellectual? Is your cover art bright red or subdued blue?</p>

				</section>

				<!--
				SECTION: Studio recording
				-->

				<section class="flexdir-ttb-mob flexpos-lt-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="icon-guests" title="Three excited people"></div>

					<h3 class="pad-t-mob">Studio recording</h3>

					<p>This is the fun bit, where you're now in one of our professional recording studios, chatting to guests and asking your questions. This is the meat and potatoes of the entire show.</p>

				</section>

				<!--
				SECTION: Editing
				-->

				<section class="flexdir-ttb-mob flexpos-lt-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="icon-scissors" title="Pair of scissors"></div>

					<h3 class="pad-t-mob">Editing</h3>

					<p>One of our experienced editors dives in and makes everything sound better. Unwanted "ums and ahs" are removed, misspoken sentences are taken out, the content is cleaned up and bed music is laid down.</p>

				</section>

				<!--
				SECTION: Editing
				-->

				<section class="flexdir-ttb-mob flexpos-lt-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="icon-website-stars" title="Web browser page with stars"></div>

					<h3 class="pad-t-mob">Hosting</h3>

					<p>We host all your podcasts and provide you with a dedicated web page for sharing show notes, additional information about each episode, pictures, links to guests and other resources.</p>

				</section>

				<!--
				SECTION: Publishing
				-->

				<section class="flexdir-ttb-mob flexpos-lt-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="icon-publishing" title="Web browser page with play button"></div>

					<h3 class="pad-t-mob">Publishing</h3>

					<p>We take care of getting your show to the widest possible audience using the largest, most trusted networks and aggregators, including Apple Podcasts, Spotify, Google Play, Stitcher, Castbox and TuneIn.</p>

				</section>

				<!--
				SECTION: Promotion
				-->

				<section class="flexdir-ttb-mob flexpos-lt-mob pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					CONTENT
					-->

					<div class="icon-rocket" title="Rocket lifting off"></div>

					<h3 class="pad-t-mob">Promotion</h3>

					<p>We promote your episodes on our website blog and social media platforms. If you choose our <a href="pricing.php" id="section_services_a_businesspackage" aria-label="section_services_a_businesspackage">business package</a> (or higher), you can embed the episode on your own website.</p>

				</section>

			</div>

		</div>

	</article>

	<!--
	ARTICLE: Guest training
	-->

	<article class="pad-respond-xy-mob theme-light-grey-mob" id="section_guesttraining" aria-labelledby="section_guesttraining_h2_guidelinesonhow">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob flexdir-ltr-tab flexpos-lc-tab constrain spread-respond pad-respond-b-mob">

			<!--
			FIGURE
			-->

			<figure class="flexdir-ttb-mob flexdir-ttb-tab flexpos-lc-mob flexpos-cc-tab theme-dark-grey">

				<!--
				CONTENT
				-->

				<div class="margin-y-mob encimage-sketch-podcast-training" title="Guest sitting at table with microphone"></div>

			</figure>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob theme-light-grey-mob">

				<!--
				ARIA HIDDEN LABEL
				-->

				<div aria-hidden="true"><span class="text-heading-badge--light">Guest Training</span></div>

				<!--
				CONTENT
				-->

				<h2 id="section_guesttraining_h2_guidelinesonhow">Guidelines on how to be an effective podcast guest.</h2>

				<p>Ensuring that your message is heard is our highest priority. To help you with this, we've put together a free <a href="https://fanlink.to/sgsgreen/" target="_blank" rel="noopener" id="section_guesttraining_a_podcastguest101" aria-labelledby="section_guesttraining_a_podcastguest101">Podcast Guest 101 Course</a> which you can listen to as a podcast.</p>
				
				<p>Get hints, tips and guidelines on how to be an effective podcast guest and get your message across. You should keep a pen and paper handy to take notes.</p>

				<p>If you're going to be a guest on more podcasts in future—and given the explosive growth in this space, that's highly likely—then join us on our Podcast Guest Master Class. Drop us an email to <a href="mailto:training@solidgoldstudios.co.za?subject=Podcast%20Guest%20Master%20Class%20Query" target="_blank" rel="noopener" id="section_guesttraining_a_mailtotraining" aria-labelledby="section_guesttraining_a_mailtotraining">book your space on our next Master Class</a>.</p>

			</div>

		</div>

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob constrain pad-y-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob flexdir-ltr-tab spread-respond">

				<!--
				FIGURE: Intro to our Podcast Guest 101 series
				-->

				<figure class="pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					LAYOUT CONTAINER
					-->

					<div class="flexdir-ttb-mob flexpos-ct-mob">

						<!--
						CONTENT
						-->

						<h3 class="text-c-mob">Introduction</h3>

						<audio class="pad-t-mob" preload="none" controls>
							<source src="https://chtbl.com/track/podcaststudios.co.za/audio/solidgoldstudios/sgs-podcast-guest-101-v2-part-01.mp3" type="audio/mpeg">
						</audio>

						<figcaption class="pad-t-mob text-c-mob">Duration 2:08</figcaption>

					</div>

				</figure>

				<!--
				FIGURE: Episode 1: Getting Settled
				-->

				<figure class="pad-respond-xy-mob radius-mob theme-white-mob">

					<!--
					LAYOUT CONTAINER
					-->

					<div class="flexdir-ttb-mob flexpos-ct-mob">

						<!--
						CONTENT
						-->

						<h3 class="text-c-mob">Episode 1: Getting Settled</h3>

						<audio class="pad-t-mob" preload="none" controls>
							<source src="https://chtbl.com/track/podcaststudios.co.za/audio/solidgoldstudios/sgs-podcast-guest-101-v2-part-02.mp3" type="audio/mpeg">
						</audio>

						<figcaption class="pad-t-mob text-c-mob">Duration 1:59</figcaption>

					</div>

				</figure>

			</div>

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob flexdir-ltr-tab flexpos-cc-mob spread-mob pad-double-t-mob">

				<!--
				BUTTON CONTAINER
				-->

				<a class="button primary" href="https://fanlink.to/sgsgreen/" target="_blank" rel="noopener" title="Listen to more free training episodes" id="section_guesttraining_a_listentomore" aria-labelledby="section_guesttraining_a_listentomore"><span>Listen to More Episodes</span></a>

				<a class="button secondary" href="mailto:training@solidgoldstudios.co.za?subject=Podcast%20Guest%20Master%20Class%20Query" target="_blank" rel="noopener" title="Email us to book your space on our next Master Class" id="section_guesttraining_a_bookmasterclass" aria-labelledby="section_guesttraining_a_bookmasterclass"><span>Book Master Class</span></a>

			</div>

		</div>

	</article>

	<!--
	ARTICLE: Not yet convinced, but still interested?
	-->

	<article class="pad-respond-xy-mob theme-dark-grey-mob" id="section_notyetconvinced" aria-labelledby="section_notyetconvinced_h2_notyetconvinced">

		<!--
		LAYOUT CONTAINER
		-->

		<div class="flexdir-ttb-mob constrain spread-respond pad-respond-y-mob">

			<!--
			LAYOUT CONTAINER
			-->

			<div class="flexdir-ttb-mob">

				<!--
				CONTENT
				-->

				<h2 class="text-c-mob" id="section_notyetconvinced_h2_notyetconvinced">Not yet convinced, but still interested?</h2>

				<p class="text-c-mob">Download a podcast player for your phone from the App Store or on Google Play. Start exploring and trying episodes you might like. Once you've listened to a few and experienced this phenomenon for yourself, <a href="contact.php" id="section_notyetconvinced_a_getintouch" aria-labelledby="section_notyetconvinced_a_getintouch">get in touch with us</a> and we can discuss how we can help you tell your story and <i>#BeHeard</i>.</p>

				<!--
				LAYOUT CONTAINER
				-->

				<div class="flexdir-ttb-mob flexdir-ltr-tab flexpos-cc-mob spread-mob">

						<!--
						CONTENT
						-->

						<a class="badge-app-store" href="https://www.apple.com/ios/app-store/" target="_blank" rel="noopener" title="App Store" id="section_notyetconvinced_a_appstore" aria-label="App Store"></a>

						<a class="badge-google-play" href="https://play.google.com/store/search?q=podcast&c=apps&hl=en"  target="_blank" rel="noopener" title="Google Play" id="section_notyetconvinced_a_googleplay" aria-label="Google Play"></a>

					</div>

			</div>

		</div>

	</article>

</div>

<!--
PARTIAL: Page footer
-->
<?php include("assets/partials/pattern-page-footer.html"); ?>

<!--
PARTIAL: Schema
-->
<?php include("assets/partials/schema.html"); ?>

<!--
SCRIPT: jQuery scripts
-->
<script src="assets/scripts/jquery/jquery.min.js"></script>
<script src="assets/scripts/jquery/pushy.min.js" defer></script>

<!--
SCRIPT: Preload links on hover
-->
<script src="assets/scripts/js/instant-page.min.js" defer></script>

</html>
