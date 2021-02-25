<?php
/**
 * Used on the Offcanvas Cart
 */

$image    = "assets/images/placeholder-thumbnail.jpg";
$title    = "MS-900 Adhesive";
$number   = "#91226";
$parts    = '<b>Pipe Diameter:</b> Style A: 1.5" - 2.5" <br>
            <b>Legend Line 1:</b> 120 HOT WATER <br>
            <b>Background Color:</b> WHITE <br>
            <b>Text Color:</b> GREEN';
$quantity = "1";
$price    = "124.99";
?>

<a href="#" class="IndividualProductTeaserTinyWithPrice IndividualProductTeaserTiny grid-x">
    <div class="IndividualProductTeaserTiny-wrapper cell small-3">
        <div class="IndividualProductTeaserTiny-image"
             style="background: url(<?= $image ?>) no-repeat center; background-size: cover; padding-top: 100%;"></div>
    </div>
    <div class="IndividualProductTeaserTiny-text cell small-6">
        <div class="IndividualProductTeaserTiny-title">
			<?= $title ?>
        </div>
        <div class="IndividualProductTeaserTiny-teaser">
            <p>
				<?= $parts ?><br>
                <b>QTY:</b> <?= $quantity ?>
            </p>
        </div>
    </div>
    <div class="IndividualProductTeaserTiny-price cell small-3 text-right">
        <p class="full-width"><b><?= $price ?></b></p>
    </div>
</a>
