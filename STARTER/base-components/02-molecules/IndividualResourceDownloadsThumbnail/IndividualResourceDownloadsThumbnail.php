<?php
/** Thumbnail Version of Individual Resource Downloads
 * Applies to:
 * Catalogs
 * Service Brochures
 * Standards Documents
 * Specifications Documents
 * Product Sell Sheets
 * Tip Sheets
 * Technical Data Sheets
 */

$title         = 'AIM Forms Mobile Technology'; // should pull title automatically
$type          = 'Service Brochures';
$teaser_copy   = 'Lorem ipsum dolor sit amet, cecte tuer adipiscing elit donec odio nec justo quisque volutpat mattis.';
$pdf_thumbnail = '/components/02-molecules/IndividualResourceDownloadsThumbnail/pdf_thumbnail_placeholder.png';
$url           = "#placeholder";
?>

<div class="IndividualResourceDownloadsThumbnail">
    <div class="IndividualResourceDownloadsThumbnail-image">
        <a href="<?= $url ?>">
            <img class="lozad" data-src="<?= $pdf_thumbnail ?>" src="assets/images/placeholder.png" alt="<?= $title ?>">
        </a>
    </div>
    <div class="IndividualResourceDownloadsThumbnail-text">
        <h3 class="HeaderFont--regular">
            <a href="<?= $url ?>">
				<?= $title ?>
            </a>
        </h3>
        <p class="h6 uppercase"><?= $type ?></p>
        <p><?= $teaser_copy ?></p>
    </div>
</div>
