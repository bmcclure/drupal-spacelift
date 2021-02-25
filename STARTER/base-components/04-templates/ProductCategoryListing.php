<?php
/**
 * Product Category Listing Template
 */

$featured_categories = [ 1, 2 ];
$more_categories     = [ 1, 2, 3, 4, 5, 6, 7, 8, 9 ];

include 'components/03-organisms/ProductsHeaderBanner/ProductsHeaderBanner.php';
include 'components/03-organisms/CustomizationCalloutVariation/CustomizationCalloutVariation.php';
?>
    <section id="category">
		<?php include 'components/02-molecules/IntroSection/IntroSection.php'; ?>

        <div class="grid-container">
            <div class="FlexRow medium-up-2">
				<?php
				foreach ( $featured_categories as $featured_category ) {
					include "components/02-molecules/ProductCategoryTeaserBlock/ProductCategoryTeaserBlock.php";
				} ?>
            </div>

            <div class="FlexRow medium-up-2 large-up-3">
				<?php
				foreach ( $more_categories as $more_category ) {
					include "components/02-molecules/ProductCategoryTeaserBlock/ProductCategoryTeaserBlock.php";
				}
				?>
            </div>
        </div>
    </section>

<?php

include 'components/03-organisms/CustomFacetDisplay/CustomFacetDisplay.php';

// START -- COPY OF Custom Facet Display with different setting
// REMOVE THIS WHEN WE CHANGE OVER TO TWIG

/**
 * CustomFacetDisplay
 * used on ProductCategoryListing
 */

$headline         = 'Industries H2 Headline Goes Here';
$background_radio = 'bg-white';
$types            = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
?>

<section id="industry" class="CustomFacetDisplay <?= $background_radio ?>">
    <div class="grid-container">
        <header class="section-header text-center"><h2><?= $headline ?></h2></header>
        <div class="FlexRow small-up-2 medium-up-3 large-up-4">
			<?php
			foreach ( $types as $type ) {
				include "components/02-molecules/IconTeaserBlock/IconTeaserBlock.php";
			}
			?>
        </div>
    </div>
</section>
<?php
// END REDUNDANT COPIED CUSTOM FACET DISPLAY

    // BEGIN FEATUREDRESOURCECATEGORY COPY

/**
 * Featured Resource Categories
 * Used on the Homepage, Producdt Category Listing Page
 */

$headline            = 'Reference Our Resource Downloads (H2)';
$body                = 'Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.';
$button_title        = 'All Resources';
$button_link         = '#';
$featured_categories = [ 1, 2, 3, 4, 5, 6, 7, 8 ]; // this will ALL be changed out for twig.
$background_radio    = 'bg-light'; // this will be a radio button
?>
<section class="FeaturedResourceCategories <?= $background_radio ?>">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y">
            <div class="cell medium-5 large-4">
                <h2 class="title"><?= $headline ?></h2>
                <p><?= $body ?></p>
                <a href="<?= $button_link ?>" class="button SectionFade-three"><?= $button_title ?>
                    <span class="fas fa-caret-right"></span>
                </a>
            </div>
            <div class="cell medium-7 large-8">
                <div class="FeaturedResourceCategories-row">
					<?php foreach ( $featured_categories as $featured_category ) {
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
