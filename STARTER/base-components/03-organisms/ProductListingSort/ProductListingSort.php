<?php

/**
 * @file
 * ProductsListingSort.
 *
 * Used on the ProductListing page.
 */

$showing = '#-## of ##';
?>
<div class="ProductListingSort">
    <div class="ProductListingSort-viewButtons">
        <!-- mobile menu -->
        <div class="ProductListingSort-viewButtonsMobile FlexRow small-up-2 hide-for-xlarge">
            <div class="FlexRow-item hide-for-medium">
                <button class="button dark ProductListingSort-mobileButton" data-toggle="OffcanvasFilter">FILTER</button>
            </div>
            <div class="ProductListingSort-dropdown FlexRow-item">
                <select class="ProductListingSort-select" name="" id="">
                    <option value="">SORT BY</option>
                    <option value="">MOST POPULAR</option>
                    <option value="">NAME: A TO Z</option>
                    <option value="">NAME: Z TO A</option>
                </select>
            </div>
        </div>
        <!-- desktop menu -->
        <div class="ProductListingSort-viewButtonsRow show-for-xlarge">
            <div class="ProductListingSort-viewButtonsTitle">SORT BY</div>
            <div class="ProductListingSort-viewButtonsButton">
                <button class="button white active">MOST POPULAR</button>
            </div>
            <div class="ProductListingSort-viewButtonsButton">
                <button class="button white">NAME: A TO Z</button>
            </div>
            <div class="ProductListingSort-viewButtonsButton">
                <button class="button white">NAME: Z TO A</button>
            </div>
        </div>
    </div>
    <div class="ProductListingSort-showing show-for-medium">
        <?php include "components/02-molecules/Showing/Showing.php"; ?>
    </div>
</div>
