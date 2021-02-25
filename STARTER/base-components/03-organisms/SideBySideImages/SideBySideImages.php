<?php
/**
 * Side by side images, used in Content 5050
 */

$left_image  = '/assets/images/placeholder-thumbnail.jpg';
$right_image = '/assets/images/placeholder-thumbnail-two.jpg';
if ( $left_image && $right_image ) {
	?>
    <div class="SideBySideImages cell">
        <div class="SideBySideImages-row FlexRow small-up-2">
            <div class="FlexRow-item">
                <div class="SideBySideImages-image lozad" data-background-image="<?= $left_image ?>"
                     style="background:url(/assets/images/placeholder.png) no-repeat center;background-size: cover;"></div>
            </div>
            <div class="FlexRow-item">
                <div class="SideBySideImages-image lozad" data-background-image="<?= $right_image ?>"
                     style="background:url(/assets/images/placeholder.png) no-repeat center;background-size: cover;"></div>
            </div>
        </div>
    </div>
	<?php
}
