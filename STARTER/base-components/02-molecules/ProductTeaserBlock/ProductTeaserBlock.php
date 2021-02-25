<?php
/**
 * ProductTeaserBlock
 * used in RecommendedProductsCarousel
 */

$title        = 'Economy MS-900 Markers';
$image        = 'assets/images/placeholder-thumbnail.jpg';
$body         = 'Lorem ipsum dolor sit amet, cectetuer adipiscing elit donec odio nec justo quisque volutpat mattis.';
$button_title = 'CHOOSE OPTIONS';
$url          = '#placeholder';

?>
<div class="ProductTeaserBlock FlexRow-item text-center">
    <div class="ProductTeaserBlock-container">
        <div class="ProductTeaserBlock-title bg-dark-blue">
            <h3 class="h4 HeaderFont--regular"><a href="<?= $url ?>" title="<?= $title ?>"><?= $title ?></a></h3>
        </div>
        <a href="<?= $url ?>" title="<?= $title ?>" class="ProductTeaserBlock-image lozad"
           data-background-image="<?= $image ?>"
           style="background:url(assets/images/placeholder.png) no-repeat center; background-size: contain;"></a>
        <div class="ProductTeaserBlock-text">
            <p><?= $body ?></p>
            <a href="<?= $url ?>" class="button" title="<?= $title ?>"><?= $button_title ?>&nbsp;&nbsp;<span
                        class="fas fa-caret-right"></span></a>
        </div>
    </div>
</div>
