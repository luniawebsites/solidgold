<?php

// =============================================================================
// Get all JSON files from this folder
// =============================================================================

$folder = glob('assets/data/blog-posts/json/*.json');


// =============================================================================
// Check for and get the "title" query string
// =============================================================================

if(isset($_GET['title']))
{
    // Get and sanitise the query string
    $query = htmlspecialchars($_GET['title']);

    // Add the file name to the folder path so we can get the JSON file
    $path = 'assets/data/blog-posts/json/' . $query . '.json';

    // =========================================================================
    // Check the query string exists as a file in the folder
    // =========================================================================

    if(!in_array($path, $folder))
    {
        // Sort array
        rsort($folder);

        // Get the last JSON file from the folder
        $path = reset($folder);
    }
}

else
{
    // Sort array
    rsort($folder);

    // Get the last JSON file from the folder
    $path = reset($folder);
};


// =============================================================================
// Get the contents of the JSON file, decode the string, and get the file name
// =============================================================================

$data = file_get_contents($path);
$data = json_decode($data);


// =============================================================================
// Create anonymous function for blog post previews
// =============================================================================

$postList = function() use($files)
{
    // =========================================================================
    // Use glob to get all JSON files from the designated folder
    // =========================================================================

    // Designate the folder that contains the JSON files
    $folder = 'assets/data/blog-posts/json/';

    // Create empty array
    $files = array();

    // Add all JSON files in the designated folder to the array
    foreach (glob('' . $folder . '*.json') as $file)
    {
        // Push each file name to the array
        $files[] = $file;
    };

    // Sort array
    rsort($files);

    // =========================================================================
    // Create a separate instance of each JSON file's string
    // =========================================================================

    foreach ($files as $file)
    {
        // =====================================================================
        // Get the contents of the JSON file, decode the string, and get the file
        // name
        // =====================================================================

        $data = file_get_contents($file);
        $data = json_decode($data);
        $file_name = basename($file, '.json');


        // =====================================================================
        // Construct links to be used in the final HTML
        // =====================================================================

        // Construct the link to the template and add the JSON file name
        $file_url = 'blog.php?title=' . $file_name . '';


        // =====================================================================
        // Display final HTML
        // =====================================================================

        require 'assets/partials/blog-post-preview-template.php';
    }
}

?>

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
LINK & PARTIAL: Defer load non-critical CSS
-->
<link rel="stylesheet" href="assets/non-critical.min.css" media="print" onload="this.media='all'">

<meta name="description" content="Podcast recording blog" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios | Blog" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studios | Blog" />
<meta property="og:description" content="Podcast recording blog" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgoldstudios.co.za/blog.php" />
<meta property="og:image" content="https://solidgoldstudios.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | Blog</title>
<link rel="canonical" href="https://solidgoldstudios.co.za/blog.php" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

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

<header class="pad-respond-x-mob pad-respond-t-mob theme-light-grey-mob" id="header_blog" aria-labelledby="header_blog_h1_blog">

    <!--
    LAYOUT CONTAINER
    -->

    <div class="constrain pad-t-mob pad-double-b-mob">

        <!--
        LATEST BLOG POST
        -->

        <?php require 'assets/partials/blog-post-template.php' ?>

    </div>

</header>

<!--
MAIN
-->

<div role="main"> <!-- This is used instead of <main> to ensure CSS grid works -->

    <!--
    ARTICLE
    -->

    <article class="pad-respond-x-mob pad-t-tab pad-respond-b-mob theme-light-grey-mob">

        <!--
        LAYOUT CONTAINER
        -->

        <div class="constrain pad-respond-b-mob">

            <!--
            LAYOUT CONTAINER
            -->

            <div class="grid-auto-respond-16">

                <!--
                BLOG POST PREVIEWS
                -->

                <?= $postList() ?>

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

<!--
SCRIPT: Preload links on hover
-->
<script src="assets/scripts/js/instant-page.min.js" defer></script>

</html>
