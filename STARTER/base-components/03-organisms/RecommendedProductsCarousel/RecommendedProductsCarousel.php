<?php
/**
 * RecommendedProductsCarousel
 * used on Flexible Layout
 *
 */

$headline             = 'Lorem Ipsum Dolor (Recommended Products Carousel)';
$recommended_products = [ 1, 2, 3, 4 ];
$count                = count( $recommended_products );
$class                = 'FlexRow justify-center medium-up-3 large-up-4';
if ( $count > 3 ) {
	$class = "RecommendedProductsCarousel-slider MSISlider";
}

if ( $recommended_products ) {
	?>
    <section class="RecommendedProductsCarousel bg-light">
        <div class="grid-container">
            <header class="section-header text-center"><h2><?= $headline ?></h2></header>
            <div class="RecommendedProductsCarousel-row <?= $class ?>">
				<?php foreach ( $recommended_products as $recommended_product ) {
					include "components/02-molecules/ProductTeaserBlock/ProductTeaserBlock.php";
				} ?>
            </div>
        </div>
    </section>

	<?php if ( $count > 3 ) {
		?>
        <script defer src="/components/03-organisms/RecommendedProductsCarousel/dist/RecommendedProductsCarousel.js?v=1.1.0"></script>
		<?php
	}
}
