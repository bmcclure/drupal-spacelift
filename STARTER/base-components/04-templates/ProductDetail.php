<?php

/**
 * @file
 * Product Detail Template.
 */

include "components/02-molecules/Breadcrumb/Breadcrumb.php";
include "components/03-organisms/DualCalloutStrips/DualCalloutStrips.php";
include "components/03-organisms/ProductsTopHalf/ProductsTopHalf.php";
include "components/03-organisms/ProductInformation/ProductInformation.php";
include "components/03-organisms/ProductSpecifications/ProductSpecifications.php";
include "components/03-organisms/ProductComparisons/ProductComparisons.php";
// Include "components/03-organisms/RecommendedProductsCarousel/RecommendedProductsCarousel.php";
// BEGIN DELETE ME -- use include above instead.
$headline = 'Lorem Ipsum Dolor (Recommended Products Carousel)';
$recommended_products = [1, 2, 3, 4, 5];
$count = count($recommended_products);
$class = 'FlexRow justify-center medium-up-3 large-up-4';
if ($count > 3) {
  $class = "RecommendedProductsCarousel-slider Slider";
}

if ($recommended_products) {
  ?>
  <section class="RecommendedProductsCarousel bg-light">
    <div class="grid-container">
      <header class="section-header text-center"><h2><?php echo $headline ?></h2>
      </header>
      <div class="RecommendedProductsCarousel-row <?php echo $class ?>">
        <?php foreach ($recommended_products as $recommended_product) {
          include "components/02-molecules/ProductTeaserBlock/ProductTeaserBlock.php";
        } ?>
      </div>
    </div>
  </section>

  <?php if ($count > 3) {
    ?>
    <script defer
            src="/components/03-organisms/RecommendedProductsCarousel/dist/RecommendedProductsCarousel.js?v=1.1.0"></script>
    <?php
  }
}
// END DELETE ME.
// include "components/03-organisms/OtherPagesToView/OtherPagesToView.php";
// BEGIN DELETE ME VARIATION - use include above instead
// .
// bg-white or bg-blue.
$background_toggle = 'bg-blue';
$headline = "Headline Advertising Other Pages Of Interest";
$featured_pages = [1, 2, 3, 4, 5];

$count = count($featured_pages);
$displayClass = 'FlexRow medium-up-3 large-up-4';

if ($count > 4) {
  $displayClass = 'OtherPagesToView-slider Slider';
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
<script defer
        src="/components/03-organisms/OtherPagesToView/dist/OtherPagesToView.js?v=1.1.0"></script>
