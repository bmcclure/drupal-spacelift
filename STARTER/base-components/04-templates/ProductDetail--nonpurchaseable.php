<?php
/**
 * Product  Detail Template -- non purchaseable
 * THIS IS A COMPLETE CLONE OF PRODUCTDETAIL MINUS THE PRODUCTTOPHALF
 */

include "components/02-molecules/Breadcrumb/Breadcrumb.php";
include "components/03-organisms/DualCalloutStrips/DualCalloutStrips.php";
//include "components/03-organisms/ProductsTopHalf/ProductsTopHalf.php";

// @todo when merging, make this variation a part of ProductsTopHalf, instead of separate
?>

<section class="ProductsTopHalf">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y large-up-2">
            <div id="ProductsTopHalf-imageContainer" class="ProductsTopHalf-imageContainer cell">
            </div>
            <div class="cell">
				<?php include "components/02-molecules/ProductHeadlineIntro/ProductHeadlineIntro.php" ?>
				<?php include "components/03-organisms/ProductImages/ProductImages-static.php" ?>
				<?php include "components/03-organisms/ContactUsBox/ContactUsBox.php"; ?>
            </div>
        </div>
    </div>
</section>

<script defer src="/components/03-organisms/ProductsTopHalf/dist/ProductsTopHalf.js?v=1.0.0"></script>
<?php

include "components/03-organisms/ProductInformation/ProductInformation.php";
include "components/03-organisms/ProductSpecifications/ProductSpecifications.php";
include "components/03-organisms/ProductComparisons/ProductComparisons.php";
//include "components/03-organisms/RecommendedProductsCarousel/RecommendedProductsCarousel.php";
// BEGIN DELETE ME -- use include above instead
$headline             = 'Lorem Ipsum Dolor (Recommended Products Carousel)';
$recommended_products = [ 1, 2, 3, 4, 5 ];
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
        <script defer
                src="/components/03-organisms/RecommendedProductsCarousel/dist/RecommendedProductsCarousel.js?v=1.1.0"></script>
		<?php
	}
}
// END DELETE ME


//include "components/03-organisms/OtherPagesToView/OtherPagesToView.php";
// BEGIN DELETE ME VARIATION - use include above instead
//

$background_toggle = 'bg-blue'; // bg-white or bg-blue
$headline          = "Headline Advertising Other Pages Of Interest";
$featured_pages    = [ 1, 2, 3, 4, 5 ];

$count        = count( $featured_pages );
$displayClass = 'FlexRow medium-up-3 large-up-4';

if ( $count > 4 ) {
	$displayClass = 'OtherPagesToView-slider MSISlider';
}
?>

<section class="OtherPagesToView <?= $background_toggle ?>">
    <div class="grid-container">
        <header class="section-header text-center">
            <h2><?= $headline ?></h2>
        </header>
        <div class=" <?= $displayClass ?>">
			<?php
			foreach ( $featured_pages as $featured_page ) {
				include 'components/02-molecules/OtherPagesTeaserBlock/OtherPagesTeaserBlock.php';
			}
			?>
        </div>
    </div>
</section>
<script defer src="/components/03-organisms/OtherPagesToView/dist/OtherPagesToView.js?v=1.1.0"></script>
