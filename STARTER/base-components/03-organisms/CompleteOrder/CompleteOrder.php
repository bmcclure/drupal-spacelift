<?php
/**
 * CompleteOrder
 */

?>
<div class="CompleteOrder">
    <h3 class="title">Complete Order</h3>
    <input id="PriceForEach" class="sr-only" value="0.69"/>
    <div class="CompleteOrder-price Label">$<span class="price" id="TotalPrice">0.69</span> (USD)</div>
    <p class="CompleteOrder-caption small">Pricing is subject to change based on location</p>
    <p class="CompleteOrder-part">
        <span class="Label">PART NUMBER:</span> #91226
    </p>
    <div id="CSRCallout" class="CSRCallout hide">
        <p>Want a CSR to check your order?
            <a href="tel:+1800234-0135">
                <span class="fas fa-phone"></span>
                (800) 234-0135
            </a>
        </p>
    </div>

    <div id="QuantityLabel" class="flex-container align-middle hide">
        <label class="flex-child-shrink Label" for="Numbering">
            QUANTITY
        </label>

        <div class="flex-child-auto">
        <span class="Tooltip" data-tooltip tabindex="2" data-position="top" data-allow-html="true"
              title="<div class='title'><b>Quantity</b></div>With Sequential Numbering, the quantity is calculated automatically, including the ending number (Ending - Starting + 1).">
            <i class="fas fa-question-circle"></i>
            <span class="sr-only">More information on Quantity</span>
        </span>
        </div>
    </div>
	<?php include "components/02-molecules/AddtoCart/AddtoCart.php" ?>
    <p class="wysiwyg">Prefer to send us a spreadsheet? &nbsp;<a href="#"><i class="fas fa-table"></i> Bulk Order
            Form</a>
    </p>
</div>
