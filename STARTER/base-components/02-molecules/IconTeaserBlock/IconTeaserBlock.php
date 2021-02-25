<?php
/**
 * Icon Teaser Block
 * Used in organism/FeaturedIndustries/
 */

$icon  = file_get_contents( 'assets/images/MSI-View-Products.svg' );
$title = 'Power Generation';
$url   = '#';
?>

<div class="IconTeaserBlock FlexRow-item">
    <a class="IconTeaserBlock-container" href="<?= $url ?>" title="<?= $title ?>">
        <div class="IconTeaserBlock-icon"><?= $icon ?></div>
        <div class="IconTeaserBlock-text">
            <h4 class="IconTeaserBlock-text-title"><?= $title ?> </h4>
            <span class="fas fa-long-arrow-alt-right"></span>
        </div>
    </a>
</div>
