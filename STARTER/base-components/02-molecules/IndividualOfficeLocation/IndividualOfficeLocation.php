<?php
/**
 * IndividualOfficeLocations
 * uses the "Horizontal Card" styling
 */

$image    = "components/02-molecules/IndividualOfficeLocation/Wisconsin-icon.png"; //this will need to use "contain" do NOT hard crop
$name     = 'Corporate Headquarters';
$subtitle = 'UNITED STATES';
$phone    = '(800) 234-0135';
$mobile   = '(262) 123-4567';
$fax      = '(414) 973-1331';

$wysiwyg_address = "<p><a href='https://goo.gl/maps/u25u4qBbkgv91v4n6' target='_blank'>8265 N Faulkner Rd,<br/>Milwaukee, WI 53224</a></p>";


?>
<div class="IndividualOfficeLocation HorizontalCard FlexRow-item">
    <div class="HorizontalCard-container">
        <div class="HorizontalCard-header bg-dark-blue grid-x vertical-center">
            <div class="IndividualOfficeLocation-image HorizontalCard-image cell shrink lozad" data-background-image="<?= $image ?>"
                 style="background: url(assets/images/placeholder.png) no-repeat center; background-size: contain;"></div>
            <div class="HorizontalCard-title cell auto">
                <h3 class="HeaderFont--regular"><?= $name ?></h3>
                <h6 class="white"><?= $subtitle ?></h6>
            </div>
        </div>
        <div class="HorizontalCard-body grid-x large-up-2">
            <div class="cell">
                <h4>Contact</h4>
                <ul class="HorizontalCard-list no-bullet">
					<?php
					if ( $phone ) {
						echo "<li><a href='tel:+1$phone'><span class='fas fa-phone'></span> $phone</a></li>";
					}

					if ( $mobile ) {
						echo "<li><a href='tel:+1$mobile'><span class='fas fa-mobile-alt'></span> $mobile</a></li>";
					}
					if ( $fax ) {
						echo "<li><span class='fas fa-fax'></span> $fax</li>";
					}

					?>
                </ul>
            </div>
            <div class="IndividualOfficeLocation-address cell">
                <h4>Address</h4>
				<?= $wysiwyg_address ?>
            </div>
        </div>
    </div>
</div>
