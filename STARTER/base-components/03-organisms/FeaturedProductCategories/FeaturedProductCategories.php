<?php
/**
 * used on Homepage
 */


$headline     = 'Featured Product Categories (H2)';
$body         = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
$button_title = 'All Categories';
$button_link  = '#';

$featured_categories = [ 1, 2 ];

if ( $featured_categories ) {
	?>

    <section id="FeaturedProductCategories" class="FeaturedProductCategories">
        <div class="grid-container">
            <header class=" grid-x grid-margin-x">
                <div class="cell medium-8"><h2><?= $headline ?></h2></div>
                <div class="cell medium-4 medium-text-right"><a href="<?= $button_link ?>"
                                                                class="button"><?= $button_title ?> <span
                                class="fas fa-caret-right"></span></a></div>
            </header>
            <div class="FlexRow medium-up-2 text-center">
				<?php
				foreach ( $featured_categories as $featured_category ) {
					include "components/02-molecules/ProductCategoryTeaserBlock/ProductCategoryTeaserBlock.php";
				} ?>
            </div>
        </div>
    </section>
	<?php
}