<?php
/**
 * DualCalloutStrips
 * used on Flexible Layout
 */

$left_featured_strip  = 1;
$right_featured_strip = 1;
if ( $left_featured_strip && $right_featured_strip ) {
	// @todo when merging with Emulsify, THIS NEEDS TO BE REWRITTEN WITH ACTUALLY GETTING THE HALF CALLOUT STRIP
    // @todo POTENTIALLY NEEDS TO BE REFACTORED DUE TO SHARE STYLING WITH THE DOWNLOADS THUMBNAIL MOLECULE
	?>
    <section class="DualCalloutStrips FlexRow medium-up-2">
        <!-- THIS WILL BE REMOVED AND REPLACED WITH HALF CALLOUT STRIP -->
        <div class="HalfCalloutStrip FlexRow-item">
            <div class="HalfCalloutStrip-container bg-blue"><?php include "components/02-molecules/IndividualResourceDownloadsThumbnail/IndividualResourceDownloadsThumbnail.php"; ?></div>
        </div>
        <!-- END HARDCODED CONTENT -->
		<?php include "components/02-molecules/HalfCalloutStrip/HalfCalloutStrip.php"; ?>
    </section>
	<?php
}
