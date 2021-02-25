<?php
/**
 * FilterClear
 * used in Product Listing
 */

$filtersOn = [
	'Carrier Pipe Marker',
	'Outdoor',
	'Oil & Gas'
]
?>
<div class="FilterClear">
    <div class="FilterClear-row vertical-center">
        <div class="FilterClear-clearAll">
            <button class="button white small"> CLEAR ALL</button>
        </div>
        <div class="FilterClear-clearIndividually">
            <div class="FlexRow">
				<?php foreach ( $filtersOn as $filter ) { ?>
                    <div class="FilterClear-item FlexRow-item">
                        <button class="LinkButton"><i class="fal fa-times"></i> <?= $filter ?></button>
                    </div>
				<?php } ?>
            </div>
        </div>
    </div>
</div>
