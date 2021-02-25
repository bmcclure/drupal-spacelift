<?php
/**
 * Featured Resource Categories
 * Used on the Homepage, Producdt Category Listing Page
 */

$headline            = 'Reference Our Resource Downloads (H2)';
$body                = 'Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.';
$button_title        = 'All Resources';
$button_link         = '#';
$featured_categories = [ 1, 2, 3, 4, 5, 6, 7, 8 ]; // this will ALL be changed out for twig.
$background_radio    = 'bg-blue'; // this will be a radio button
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
