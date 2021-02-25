<?php
/**
 * Icon Info Boxes
 */

$background_toggle     = "bg-light"; // or bg-white
$box_background_toggle = 'boxes-white'; // boxes-light
$headline              = 'Benefits & Advantages Of This Service H2 Headline';
$icon_boxes            = [ 1, 2, 3, 4, 5, 6 ];

if ( $icon_boxes ) {
	?>
    <section class="IconInfoBoxes <?= $background_toggle ?>">
        <div class="grid-container">
            <header class="section-header text-center">
                <h2><?= $headline ?></h2>
            </header>
            <div class="IconInfoBoxes-row FlexRow medium-up-2 large-up-3 <?= $box_background_toggle ?>">
				<?php
				foreach ( $icon_boxes as $icon_box ) {
					include "components/02-molecules/IconInfoBox/IconInfoBox.php";
				}
				?>
            </div>
        </div>
    </section>
	<?php
}
