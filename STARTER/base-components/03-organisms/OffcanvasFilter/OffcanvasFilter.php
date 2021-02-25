<?php
/**
 * OffcanvasFilter
 */

$number_of_results = 20;

?>

<div id="OffcanvasFilter" class="OffcanvasFilter off-canvas position-left" data-off-canvas data-transition="overlap"
     data-auto-focus="false">
    <header class="OffcanvasFilter-header ">
        <div class="grid-container">
            <div class="grid-x vertical-center">
                <h2 class="OffcanvasFilter-title cell shrink">Filter Results</h2>
                <div class="cell auto">
                    <a href="#" class="button white">CLEAR ALL</a>
                </div>
            </div>
        </div>
        <button class="close-button" aria-label="Close menu" type="button" data-close>
            <span aria-hidden="true">&times;</span>
        </button>
    </header>
    <div class="OffcanvasFilter-body">
        <div class="grid-container">
            <div class="ProductListingFilter">
                <div id="ProductFilter-mobile">
                    <div id="ProductFilters-wrapper">
                        <!-- this stuff gets moved on tablet to #ProductListingFilter-blocks -->
						<?php include "components/03-organisms/ProductListingFilter/inc/ProductListingFilter-block.php"; ?>
						<?php include "components/03-organisms/ProductListingFilter/inc/ProductListingFilter-accordion.php"; ?>
						<?php include "components/03-organisms/ProductListingFilter/inc/ProductListingFilter-accordion-material.php"; ?>
						<?php include "components/03-organisms/ProductListingFilter/inc/ProductListingFilter-accordion-outdoor.php"; ?>
						<?php include "components/03-organisms/ProductListingFilter/inc/ProductListingFilter-accordion-industries.php"; ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="OffcanvasMain-buttons">
            <a href="#" class="button OffcanvasMain-button" role="menuitem">VIEW RESULTS</a>
        </div>
    </div>
</div>
