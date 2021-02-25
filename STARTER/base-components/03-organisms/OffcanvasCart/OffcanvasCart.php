<?php
/**
 * OffcanvasCart
 */

$total    = 6;
$subTotal = "$259.60";
?>

<div id="OffcanvasCart" class="OffcanvasCart off-canvas position-right" data-off-canvas
     data-transition="overlap">
    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="grid-container">
        <div class="OffcanvasCart-top grid-x">
            <div class="cell shrink">
                <b><?= $total ?></b> Items
            </div>
            <div class="cell auto text-center">
                Subtotal: <b><?= $subTotal ?></b>
            </div>
        </div>
        <div class="OffcanvasCart-buttons grid-x">
            <a href="#" class="cell small-6 button"><span class="fas fa-check-circle"></span> CHECKOUT</a>
            <a href="#" class="cell small-6 button"><span class="fas fa-shopping-cart"></span> VIEW CART</a>
        </div>
        <hr>
        <div class="OffcanvasCart-products">
			<?php include "components/02-molecules/IndividualProductTeaserTinyWithPrice/IndividualProductTeaserTinyWithPrice.php"; ?>
			<?php include "components/02-molecules/IndividualProductTeaserTinyWithPrice/IndividualProductTeaserTinyWithPrice.php"; ?>
			<?php include "components/02-molecules/IndividualProductTeaserTinyWithPrice/IndividualProductTeaserTinyWithPrice.php"; ?>
			<?php include "components/02-molecules/IndividualProductTeaserTinyWithPrice/IndividualProductTeaserTinyWithPrice.php"; ?>
			<?php include "components/02-molecules/IndividualProductTeaserTinyWithPrice/IndividualProductTeaserTinyWithPrice.php"; ?>
			<?php include "components/02-molecules/IndividualProductTeaserTinyWithPrice/IndividualProductTeaserTinyWithPrice.php"; ?>
        </div>
    </div>
</div>
