<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

<!--
PARTIAL: Base URL
-->
<?php include("assets/partials/base-url.html"); ?>

<!--
LINK/PARTIAL: Defer load non-critical CSS
-->
<link rel="stylesheet" href="assets/non-critical.min.css?ver10" media="print" onload="this.media='all'">

<meta name="description" content="Podcast booking calendar #BeHeard" />
<meta name="robots" content="index, follow" />
<meta name="classification" content="business" />
<meta name="pagename" content="Solid Gold Podcast Studios" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta property="og:title" content="Solid Gold Podcast Studio | #BeHeard" />
<meta property="og:description" content="Podcast booking calendar #BeHeard" />
<meta property="og:locale" content="en_ZA" />
<meta property="og:url" content="https://solidgold.co.za/" />
<meta property="og:image" content="https://solidgold.co.za/assets/images/logo.png" />
<meta property="og:type" content="website" />
<title>Solid Gold Podcast Studios | #BeHeard</title>
<link rel="canonical" href="https://solidgold.co.za/calendar.php" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
<link rel="apple-touch-icon" sizes="512x512" href="apple-touch-icon.png">

<!--
SCRIPT: Inline load modernizer webp detection (defer causes images not to show in IE11)
-->
<script>
    <?php include("assets/scripts/modernizr-webp.js"); ?>
</script>

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

<div role="main"> <!-- This is used instead of the more semantically-correct <main> to ensure CSS auro-grid works -->

    <!--
    ARTICLE: Calendar
    -->

    <article class="pad-respond-xy-des theme-dark-grey-mob">

        <!--
        LAYOUT CONTAINER
        -->

        <div class="flexdir-ttb-mob spread-respond">

            <!--
            LAYOUT CONTAINER
            -->

            <div class="flexdir-ttb-mob pad-b-mob">

                <!--
                CONTENT
                -->

                <iframe src="https://calendar.google.com/calendar/embed?height=800&amp;wkst=2&amp;bgcolor=%23EF6C00&amp;ctz=Africa%2FJohannesburg&amp;src=Y19tdXFqMmZnbmVkNHI2ZGdtdjh2MmI1bDBob0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=bTRtZG92NDYwZ3RuMXMwbDVvbm83OWFzaWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=Y19maHV2YmszZzIwdXBqajYxbzlwc2QwcnNjMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y19uN2tkbDg3dGFjZzE4ZmdlaXN2OWphbm8wNEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23EF6C00&amp;color=%23D50000&amp;color=%23F4511E&amp;color=%23E67C73&amp;title=Solid%20Gold%20Podcasts&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=1&amp;mode=WEEK&amp;hl=en_GB" style="border:solid 1px #777" width="800" height="800" frameborder="0" scrolling="no"></iframe>

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
