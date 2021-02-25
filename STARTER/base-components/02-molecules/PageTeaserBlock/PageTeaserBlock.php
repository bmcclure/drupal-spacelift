<?php
/**
 * Page Teaser Block
 * Used in organism/FeaturedServices, among others
 */

$image        = "/components/03-organisms/FeaturedServices/images/MSI_1211.jpg";
$title        = "Material Take Off";
$body         = "Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.";
$button_title = "Service Details";
$url          = "#";

// SHARES CARD CLASS
?>
<div class="PageTeaserBlock Card FlexRow-item">
    <a href="<?= $url ?>" title="<?= $title ?>">
        <div class="Zoom">
            <div class="Card-image Zoom-image lozad" data-background-image=" <?= $image ?>"
                 style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
        </div>
        <div class="Card-text" data-aos="SectionFade">
            <h3 class="HeaderFont--regular SectionFade-one"><?= $title ?></h3>
            <p class="SectionFade-two"><?= $body ?></p>
            <span class="link SectionFade-three"><?= $button_title ?> <span class="fas fa-caret-right"></span></span>
        </div>
    </a>
</div>
