<?php
/**
 * HalfCalloutStrip
 * used on organisms/DualCalloutStrips
 */

$page_or_download = 'page'; // or download

if ( $page_or_download === 'page' ) {
	$image        = 'components/03-organisms/HeroBanner/images/MSI-View-Products.png';
	$title        = 'Interested In This Service?';
	$body_copy    = 'Lorem ipsum dolor sit amet, coner adipising quisque.';
	$button_title = 'CONTACT US TODAY';
	$url          = '';
} else {
	$choose_service_brochure_download = 1;
}
?>
<div class="HalfCalloutStrip FlexRow-item">
    <div class="HalfCalloutStrip-container bg-blue">
        <div class="IndividualResourceDownloadsThumbnail">
            <div class="IndividualResourceDownloadsThumbnail-image">
                <a href="<?= $url ?>">
                    <img class="lozad" data-src="<?= $image ?>" src="assets/images/placeholder.png" alt="<?= $title ?>">
                </a>
            </div>
            <div class="IndividualResourceDownloadsThumbnail-text">
                <h3 class="HeaderFont--regular">
                    <a href="<?= $url ?>">
						<?= $title ?>
                    </a>
                </h3>
                <p><?= $body_copy ?></p>
                <a href="<?= $url ?>" class="link"><?= $button_title ?> <span class="fas fa-caret-right"></span></a>
            </div>
        </div>
    </div>
</div>
