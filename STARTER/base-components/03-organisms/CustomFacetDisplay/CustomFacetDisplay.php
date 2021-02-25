<?php
/**
 * CustomFacetDisplay
 * used on ProductCategoryListing
 */

$headline         = 'Product Types H2 Headline Goes Here';
$background_radio = 'bg-light';
$types            = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17 ];
?>

<section id="CustomFacetDisplay" class="CustomFacetDisplay <?= $background_radio ?>">
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
