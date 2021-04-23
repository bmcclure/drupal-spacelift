<?php

/**
 * @file
 * Careers Listing Template.
 */

include "components/02-molecules/HeaderBannerImage/HeaderBannerImage.php";
include "components/03-organisms/IntroWithIcons/IntroWithIcons.php";
include "components/03-organisms/JobListingResults/JobListingResults.php";
// UNCOMMENT THIS INCLUDE AFTER MERGE WITH DRUPAL
// include "components/03-organisms/IconInfoBoxes/IconInfoBoxes.php";
// BEGIN DELETE ME AFTER MERGE WITH DRUPAL.
/**
 * Icon Info Boxes.
 */

// Or bg-white.
$background_toggle = "bg-white";
// boxes-light.
$box_background_toggle = 'boxes-white';
$headline              = 'Benefits & Advantages Of This Service H2 Headline';
$icon_boxes            = [1, 2, 3, 4, 5, 6];

if ($icon_boxes) {
  ?>
    <section class="IconInfoBoxes <?php echo $background_toggle ?>">
        <div class="grid-container">
            <header class="section-header text-center">
                <h2><?php echo $headline ?></h2>
            </header>
            <div class="IconInfoBoxes-row FlexRow medium-up-2 large-up-3 <?php echo $box_background_toggle ?>">
                <?php
                foreach ($icon_boxes as $icon_box) {
                  include "components/02-molecules/IconInfoBox/IconInfoBox.php";
                }
                ?>
            </div>
        </div>
    </section>
  <?php
}

// END DELETE ME.
?>
<section>
    <div class="grid-container short">
        <?php
        include "components/03-organisms/FeaturedVideoBlock/FeaturedVideoBlock.php";
        ?>
    </div>
</section>

<?php
// INCLUDE THIS WHEN MERGING WITH DRUPAL:
// "components/03-organisms/FeaturedTestimonials/FeaturedTestimonials.php";
// DELETE THIS after merging.
$featured_testimonials = [1, 2, 3];
$count                 = count($featured_testimonials);
$class                 = '';
if ($count > 1) {
  $class = 'FeaturedTestimonials-slider MSISlider';
}
$background_toggle = 'bg-white';
?>
<section class="FeaturedTestimonials <?php echo $background_toggle ?>">
    <div class="grid-container">
        <div class="FeaturedTestimonials-row <?php echo $class ?>">
    <?php
    foreach ($featured_testimonials as $featured_testimonial) {
      include "components/02-molecules/IndividualTestimonial/IndividualTestimonial.php";
    }
    ?>
        </div>
    </div>
</section>
<?php
if ($count > 1) {
  ?>
    <script defer src="/components/03-organisms/FeaturedTestimonials/dist/FeaturedTestimonials.js?v=1.0.0"></script>
  <?php
}


?>
<!-- BEGIN DELETE ME -->
<?php
// @todo when merging with Drupal Emulsify, use the include
// include "components/03-organisms/OtherPagesToView/OtherPagesToView.php";
/**
 * Other Pages To View - Used on the Category Listing Page.
 */

// bg-white or bg-blue.
$background_toggle = 'bg-blue';
$headline          = "Headline Advertising Other Pages Of Interest";
$featured_pages    = [1, 2, 3, 4, 5];

$count        = count($featured_pages);
$displayClass = 'FlexRow medium-up-3 large-up-4';

if ($count > 4) {
  $displayClass = 'OtherPagesToView-slider MSISlider';
}
?>

<section class="OtherPagesToView <?php echo $background_toggle ?>">
    <div class="grid-container">
        <header class="section-header text-center">
            <h2><?php echo $headline ?></h2>
        </header>
        <div class=" <?php echo $displayClass ?>">
    <?php
    foreach ($featured_pages as $featured_page) {
      include 'components/02-molecules/OtherPagesTeaserBlock/OtherPagesTeaserBlock.php';
    }
    ?>
        </div>
    </div>
</section>
<script defer src="/components/03-organisms/OtherPagesToView/dist/OtherPagesToView.js?v=1.1.0"></script>
<!-- end DELETE ME -->
