<?php
/**
 * used in Search Page only
 */

$keyword = 'XYZ';
?>
<header class="SearchHeader section bg-light">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell medium-10 large-8 medium-offset-1 large-offset-2">
                <h1 class="SearchHeader-title" itemprop="headline">Search Results For: <?= $keyword ?></h1>
                <div class="grid-x grid-margin-x vertical-center">

                    <p class="h4 cell auto ">Not what you're looking for?</p>

                    <div class="cell medium-shrink">
						<?php include "components/03-organisms/SearchBar/SearchBar.php" ?>
                    </div>


                </div>


            </div>
        </div>
</header>
