<?php
/**
 * SearchResult
 */

$image               = 'assets/images/placeholder-thumbnail.jpg';
$title               = 'Example Product Title Here';
$teaserCopy          = 'Lorem ipsum dolor <b>XYZ</b> teaser copy here. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$url                 = '#';
$backgroundTreatment = 'cover';
$type                = 'Products';
?>
<article class="SearchResult">
    <div class="grid-x grid-margin-x">
		<?php if ( $image ) { ?>
            <a class="SearchResult-image cell medium-3" href="<?= $url ?>" title="<?= $title ?>">
                <div class="SearchResult-imageBackground lozad"
                     data-background-image="<?= $image ?>"
                     style="background: url(assets/images/placeholder.png) no-repeat center; background-size: <?= $backgroundTreatment ?>; padding-top: 100%;"></div>
            </a>
		<?php } ?>

        <div class="SearchResult-text cell medium-auto">
            <h3><a href="<?= $url ?>" title="<?= $title ?>"><?= $title ?></a></h3>
            <p><?= $teaserCopy ?></p>
            <div class="SearchResult-type bg-light"><?= $type ?></div>
        </div>
    </div>
</article>
