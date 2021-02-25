<?php
/**
 * ProductListingFilter
 * used on the ProductListing template
 */
$number_of_results = 20;
?>
<div class="ProductListingFilter">
    <div class="ProductListingFilter-block ProductListingFilter-header">
        <h2>Filter Results</h2>
        <div class="cell"><?= $number_of_results ?> Results</div>
    </div>
    <div id="ProductListingFilter-blocks" class=""> <!-- just need something to move blocks into -->

    </div>
</div>

<script defer src="/components/03-organisms/ProductListingFilter/dist/ProductListingFilter.js?v=1.0.2"></script>
