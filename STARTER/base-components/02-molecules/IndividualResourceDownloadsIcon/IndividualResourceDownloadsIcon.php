<?php
/** Icon Version of Individual Resource Downloads
 * Applies to:
 * Catalogs
 * Service Brochures
 * Standards Documents
 * Specifications Documents
 * Product Sell Sheets
 * Tip Sheets
 * Technical Data Sheets
 */

$icon          = file_get_contents( 'assets/images/yellow-icon.svg' ); //'<span class="fas fa-file-spreadsheet"></span>';
$title         = 'MS-900 Self Adhesive Pipe Markers'; // should pull title automatically
$type          = 'Product Sell Sheet';
$teaser_copy   = '';
$pdf_thumbnail = '/components/02-molecules/IndividualResourceDownloadsIcon/pdf_thumbnail_placeholder.png';
$url           = "#placeholder";
?>

<div class="IndividualResourceDownloadsIcon">
    <div class="IndividualResourceDownloadsIcon-icon">
        <a href="<?= $url ?>">
			<?= $icon ?>
        </a>
    </div>
    <div class="IndividualResourceDownloadsIcon-text">
        <h5 class="IndividualResourceDownloadsIcon-title HeaderFont--regular">
            <a href="<?= $url ?>">
				<?= $title ?>
            </a>
        </h5>
        <h6 class="IndividualResourceDownloadsIcon-subtitle uppercase"><?= $type ?></h6>
		<?php if ( $teaser_copy ) { ?><p><?= $teaser_copy ?></p><?php } ?>
    </div>
</div>
