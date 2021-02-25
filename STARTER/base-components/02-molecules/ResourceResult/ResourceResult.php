<?php
/**
 * ResourceResult
 * used in organisms/ResourceResults
 */

$icon     = file_get_contents( 'assets/images/MSI-View-Products.svg' ); //'<span class="fas fa-file-spreadsheet"></span>';
$image    = 'components/02-molecules/ResourceResult/placeholder.png';
$title    = 'Accident Prevention Tags';
$subtitle = 'Technical Data Sheet';
$caption  = ''; // if there is one, show it! Will show for documents, videos, but NOT downloads
$url      = '#';

?>

<div class="ResourceResult ResourceCategoryIconBlock">
    <a class="ResourceResult-container ResourceCategoryIconBlock-container" href="<?= $url ?>" title="<?= $title ?>">
        <div class="ResourceResult-image lozad" data-background-image="<?= $image ?>"
             style="background: url(assets/images/placeholder.png) no-repeat bottom left; background-size: contain;"></div>
        <div class="ResourceResult-icon ResourceCategoryIconBlock-icon"><?= $icon ?></div>
        <div class="ResourceResult-text ResourceCategoryIconBlock-title-container">
            <div class="full-width">
                <h4 class="ResourceResult-title HeaderFont--regular"><?= $title ?></h4>
                <p class="ResourceResult-subtitle"><small><?= $subtitle ?></small></p>
				<?php if ( ! empty( $caption ) ) {
					?>
                    <p class="ResourceResult-caption"><?= $caption ?></p>
				<?php } ?>
            </div>
        </div>
    </a>
</div>
