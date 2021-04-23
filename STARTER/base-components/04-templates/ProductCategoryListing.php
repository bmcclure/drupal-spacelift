<?php

/**
 * @file
 * Product Category Listing Template.
 */

$featured_categories = [1, 2];
$more_categories     = [1, 2, 3, 4, 5, 6, 7, 8, 9];

include 'components/03-organisms/ProductsHeaderBanner/ProductsHeaderBanner.php';
include 'components/03-organisms/CustomizationCalloutVariation/CustomizationCalloutVariation.php';
?>
    <section id="category">
        <?php include 'components/02-molecules/IntroSection/IntroSection.php'; ?>

        <div class="grid-container">
            <div class="FlexRow medium-up-2">
                <?php
                foreach ($featured_categories as $featured_category) {
                  include "components/02-molecules/ProductCategoryTeaserBlock/ProductCategoryTeaserBlock.php";
                } ?>
            </div>

            <div class="FlexRow medium-up-2 large-up-3">
                <?php
                foreach ($more_categories as $more_category) {
                  include "components/02-molecules/ProductCategoryTeaserBlock/ProductCategoryTeaserBlock.php";
                }
                ?>
            </div>
        </div>
    </section>

<?php

include 'components/03-organisms/CustomFacetDisplay/CustomFacetDisplay.php';

/**
 * CustomFacetDisplay - used on ProductCategoryListing.
 */

$headline         = 'Industries H2 Headline Goes Here';
$background_radio = 'bg-white';
$types            = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
?>

<section id="industry" class="CustomFacetDisplay <?php echo $background_radio ?>">
    <div class="grid-container">
        <header class="section-header text-center"><h2><?php echo $headline ?></h2></header>
        <div class="FlexRow small-up-2 medium-up-3 large-up-4">
    <?php
    foreach ($types as $type) {
      include "components/02-molecules/IconTeaserBlock/IconTeaserBlock.php";
    }
    ?>
        </div>
    </div>
</section>
<?php

/**
 * Featured Resource Categories.
 *
 * Used on the Homepage, Product Category Listing Page.
 */

$headline     = 'Reference Our Resource Downloads (H2)';
$body         = 'Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.';
$button_title = 'All Resources';
$button_link  = '#';
// This will ALL be changed out for twig.
$featured_categories = [1, 2, 3, 4, 5, 6, 7, 8];
// This will be a radio button.
$background_radio = 'bg-light';
?>
<section class="FeaturedResourceCategories <?php echo $background_radio ?>">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y">
            <div class="cell medium-5 large-4">
                <h2 class="title"><?php echo $headline ?></h2>
                <p><?php echo $body ?></p>
                <a href="<?php echo $button_link ?>" class="button SectionFade-three"><?php echo $button_title ?>
                    <span class="fas fa-caret-right"></span>
                </a>
            </div>
            <div class="cell medium-7 large-8">
                <div class="FeaturedResourceCategories-row">
      <?php foreach ($featured_categories as $featured_category) {
        include "components/02-molecules/ResourceCategoryIconBlock/ResourceCategoryIconBlock.php";
      } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'components/03-organisms/OtherPagesToView/OtherPagesToView.php'; ?>
<?php include 'components/03-organisms/ReusableCalloutStrip/ReusableCalloutStrip.php'; ?>

<div id="endofProductCategoryListing"></div>
