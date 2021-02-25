<?php
/**
 * AddtoCart
 * used on 03-organisms/CompleteOrder
 */

?>

<div class="AddtoCart">
    <div class="AddtoCart-toggle">
        <button id="AddtoCart-minus" class="AddtoCart-minus"><i class="fas fa-minus"></i></button>
        <input id="AddtoCart-input" class="AddtoCart-input" type="number" value="1" min="0"/>
        <button id="AddtoCart-plus" class="AddtoCart-plus"><i class="fas fa-plus"></i></button>
    </div>
    <a href="#" class="AddtoCart-button button" data-open="AddedToCartModal"><i class="fas fa-cart-plus"></i> ADD TO
        CART</a>
</div>

<div class="reveal" id="AddedToCartModal" data-reveal>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    <p class="h3">Item(s) Added To Your Cart...</p>

    <!--	--><?php //include "components/02-molecules/IndividualProductTeaserTinyWithPrice/IndividualProductTeaserTinyWithPrice.php"; ?>
    <!--     BEGIN COPY PASTE - use the include instead when merging-->
	<?php
    // @todo get this data dynamically
	$image    = "assets/images/placeholder-thumbnail.jpg";
	$title    = "Example Product";
	$number   = "#91226";
	$parts    = '<b>Size:</b> Style A: 1.5" - 2.5" <br>
    <b>Legend Line 1:</b> 120 HOT WATER <br>
    <b>Background Color:</b> WHITE <br>
    <b>Text Color:</b> GREEN';
	$quantity = "1";
	$price    = "124.99";
	?>

    <!-- important - the wrapper is a <div> not an <a> tag -->
    <div href="#" class="IndividualProductTeaserTinyWithPrice IndividualProductTeaserTiny IndividualProductTeaserTiny--noHover grid-x">
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
    </div>
    <!-- END COPY PASTE -->
    <hr>
    <div class="text-center">
        <p class="Label">ORDER TOTAL</p>
        <p>$##.##</p>
        <div class="commerce-cart-block--contents__links">
            <a href="#" class="button--iconLeft button keepBrowsing dialog-cancel" data-close><span class="fas fa-times-circle"></span>
                Keep
                Browsing</a>
            <a href="#" class="button--iconLeft button checkout"><span class="fas fa-check-circle"></span> Checkout</a>
        </div>
    </div>
</div>
