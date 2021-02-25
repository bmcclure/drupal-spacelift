<?php
/**
 * Other Pages To View
 * Used on the Category Listing Page
 */

$background_toggle = 'bg-white'; // bg-white or bg-blue
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
