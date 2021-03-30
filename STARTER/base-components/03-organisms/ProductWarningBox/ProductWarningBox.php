<?php
/**
 * Warning LightBox and Warning Callout -- used on Product Detail page for custom products
 */
?>
<div class="ProductWarningBox text-center"><i class="fas fa-exclamation-triangle"></i> <b>WARNING:</b> Your selections
    might not meet regulations
    <span class="link" data-open="WarningLightbox">MORE INFO</span>
</div>

<div class="ProductWarningBox-reveal reveal" id="WarningLightbox" data-reveal>
    <h4 class="title">WARNING: Your Selections Might Not Meet Regulations</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut
        aliquip ex ea commodo consequat. </p>

	<?php include "components/02-molecules/IndividualResourceDownloadsIcon/IndividualResourceDownloadsIcon.php" ?>

    <div class="grid-x grid-margin-x vertical-center">
        <div class="cell medium-shrink">
            <a href="#" class="button">CONTACT US <span class="fas fa-caret-right"></span></a>
        </div>
        <div class="cell medium-auto">
            <p>Speak with a CSR:
                <a href="tel:+1800234-0135">
                    <span class="fas fa-phone"></span>
                    (800) 234-0135
                </a>
            </p>
        </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
