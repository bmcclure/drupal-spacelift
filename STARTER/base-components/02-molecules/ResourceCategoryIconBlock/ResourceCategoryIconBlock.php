<?php
/**
 * Resource Category Icon Block
 */

$icon  = file_get_contents( 'assets/images/MSI-View-Products.svg' ); //'<span class="fas fa-file-spreadsheet"></span>';
$title = 'Specifications Documents';
$url   = '#';

?>

<div class="ResourceCategoryIconBlock">
    <a class="ResourceCategoryIconBlock-container" href="<?= $url ?>" title="<?= $title ?>">
        <div class="ResourceCategoryIconBlock-icon"><?= $icon ?></div>
        <div class="ResourceCategoryIconBlock-title-container">
            <h4 class="ResourceCategoryIconBlock-title"><?= $title ?></h4>
        </div>
    </a>
</div>