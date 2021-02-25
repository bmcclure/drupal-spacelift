<?php
/**
 * Icon Info Box
 * used in organisms/IconInfoBoxes
 */

$icon  = file_get_contents( 'assets/images/yellow-icon.svg' );
$title = 'On-Demand 24/7 Access';
$body  = 'Lorem ipsum dolor sit amet, contetuer adipiscing elit donec odio. Quisque volutpat mattis eros. ';

?>
<div class="IconInfoBox FlexRow-item">
    <div class="IconInfoBox-container">
		<?php if ( ! empty( $icon ) ) {
			?>
            <div class="IconInfoBox-icon">
				<?= $icon ?>
            </div>
			<?php
		} ?>
        <div class="IconInfoBox-text">
            <h3 class="h4"><?= $title ?></h3>
            <p><?= $body ?></p>
        </div>
    </div>
</div>
