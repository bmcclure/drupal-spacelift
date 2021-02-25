<?php
/**
 * H1 Intro Banner
 */

$headline     = 'AIM Mobile Technology H1 Headline Goes Here';
$intro        = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. Phasellus ultrices nulla quis nibh.';
$button_title = 'Contact Us Today';
$button_link  = '';

?>
<header class="HeadlineIntroBanner section bg-dark-blue">
    <div class="grid-container">
		<?php include "components/01-atoms/Line/Line.php"; ?>

        <div class="grid-x grid-margin-x">
            <div class="title cell large-5">
                <h1 itemprop="headline" class="white title"><?= $headline ?></h1>
                <a href="<?= $button_link ?>" class="button" title="<?= $button_title ?>"><?= $button_title ?> <span
                            class="fas fa-caret-right"></span></a>
            </div>
            <div class="cell large-7">
                <p><?= $intro ?></p>
            </div>
        </div>
    </div>
</header>
