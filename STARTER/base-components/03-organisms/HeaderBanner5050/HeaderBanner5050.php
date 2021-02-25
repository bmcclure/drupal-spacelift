<?php
/**
 * HeaderBanner5050
 */

$headline = 'Pipe Markers H1 Headline';
$body     = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis suspendisse urna nibh viverra non semper.';
$image    = 'assets/images/placeholder-thumbnail-two.jpg';
?>

<header class="HeaderBanner5050"
        style="background: url(<?= $image ?>) no-repeat center; background-size: cover;">
    <div class="grid-x">
        <div class="HeaderBanner5050-text cell medium-6">
            <div class="HeaderBanner5050-textWrap">
                <h1 itemprop="headline" class="HeaderBanner5050-title"><?= $headline ?></h1>
                <p class="large"><?= $body ?></p>
            </div>
        </div>
    </div>
</header>
