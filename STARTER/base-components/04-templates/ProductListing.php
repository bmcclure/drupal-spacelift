<?php

/**
 * @file
 * Product  Listing Template.
 */

include "components/02-molecules/Breadcrumb/Breadcrumb.php";
include 'components/03-organisms/HeaderBanner5050/HeaderBanner5050.php';
include 'components/03-organisms/DualCalloutStrips/DualCalloutStrips.php';

$results = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
?>
    <section>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell medium-4 xlarge-3">
      <?php include "components/03-organisms/ProductListingFilter/ProductListingFilter.php" ?>
                </div>
                <div class="cell medium-8 xlarge-9">
      <?php include "components/03-organisms/ProductListingSort/ProductListingSort.php" ?>
      <?php include "components/03-organisms/FilterClear/FilterClear.php" ?>
                    <div class="ProductListingSort-showing title hide-for-medium">
                        <?php include "components/02-molecules/Showing/Showing.php"; ?>
                    </div>
      <?php
      if ($results) { ?>
                        <div class="FlexRow medium-up-2 xlarge-up-3">
        <?php
        foreach ($results as $result) {
          include "components/02-molecules/ProductTeaserBlock/ProductTeaserBlock.php";
        } ?>
                        </div>
        <?php
      } ?>

                    <hr>
      <?php include "components/03-organisms/Pagination/Pagination.php" ?>
                </div>
            </div>
        </div>
    </section>
<?php

include 'components/03-organisms/RelatedResourceDownloads/RelatedResourceDownloads.php';

// Uncomment this when merging.
// Include 'components/03-organisms/OtherPagesToView/OtherPagesToView.php';
// BEGIN DELETE ME VARIATION.
// bg-white or bg-blue.
$background_toggle = 'bg-blue';
$headline          = "Headline Advertising Other Pages Of Interest";
$featured_pages    = [1, 2, 3, 4, 5];

$count        = count($featured_pages);
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
    <script defer src="/components/03-organisms/OtherPagesToView/dist/OtherPagesToView.js?v=1.1.0"></script>
<?php
