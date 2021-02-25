<?php
/**
 * Red Header Banner
 */

$title    = 'Big Headline Here'; // get the page title
$headline = 'H1 Headline About XYZ Would Go Here'; // this is the H1 headline
$body     = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.';
$image    = 'assets/images/placeholder-thumbnail.jpg';

?>
<header class="RedHeaderBanner">
    <div class="RedHeaderBanner-image"
         style="background: url(<?= $image ?>) no-repeat center; background-size: cover;"></div>
    <div class="grid-container">
        <div class="RedHeaderBanner-text">
            <p class="RedHeaderBanner-super HeaderFont headline oversize"><?= $title ?></p>
            <h1 class="RedHeaderBanner-title title" itemprop="headline"><?= $headline ?></h1>
            <p class="large"><?= $body ?></p>
        </div>
    </div>
</header>
