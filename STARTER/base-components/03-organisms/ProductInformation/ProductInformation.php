<?php
/**
 * ProductInformation
 */

$headline = "Product Information";
$title1   = "Product Overview";
$wysiwyg1 = "<p>Our self-adhesive pipe markers are made from durable vinyl material suitable for line marking identification and system color coding. Why spend hours fiddling with tape and typing each system into a small label maker to print markers one at a time? Our MS-900 Self-Adhesive Pipe Markers comply with ASME (ANSI) standards, have industrial grade adhesive and are easy to install. Simply clean and dry the pipe, remove the marker from the coated paper backing and place in the desired location.</p>";
$title2   = "Benefits / Features";
$wysiwyg2 = '<div>
                <ul>
                    <li>Highly visible color-coded pipe markers make it easy to differentiate between systems</li>
                    <li>Complies with the ASME A13.1 “Scheme for the Identification of Piping Systems" when coupled ith arrow tape</li>
                    <li>Printed on premium-quality, fade-resistant vinyl with durable, industrial grade adhesive</li>
                    <li>Adheres well to pipe and insulation with only limited surface preparation</li>
                    <li>Legend markers can be used with arrow tape or separate arrow markers to indicate flow direction</li>
                </ul>
            </div>
';

$title3 = "Product Downloads";

?>
<section class="ProductInformation">
    <div class="grid-container">
        <header class="ProductInformation-header">
            <h2 class="title-bar"><?= $headline ?></h2>
        </header>
        <div class="ProductInformation-body">
            <div class="grid-x grid-margin-x grid-margin-y grid-padding-x large-up-3">
                <div class="cell">
                    <div class="Line"></div>
                    <h2 class="title"><?= $title1 ?></h2>
                    <div class="wysiwyg"><?= $wysiwyg1 ?></div>
                </div>
                <div class="cell">
                    <div class="Line"></div>
                    <h2 class="title"><?= $title2 ?></h2>
                    <div class="wysiwyg"><?= $wysiwyg2 ?></div>

                </div>
                <div class="cell">
                    <div class="Line"></div>
                    <h2 class="title"><?= $title3 ?></h2>

                    <div class="IndividualResourceDownloadsIcon-list">
						<?php include "components/02-molecules/IndividualResourceDownloadsIcon/IndividualResourceDownloadsIcon.php" ?>
						<?php

						// BEGIN DELETE ME VARIATIONS


						$icon          = file_get_contents( 'assets/images/yellow-icon.svg' ); //'<span class="fas fa-file-spreadsheet"></span>';
						$title         = '22 05 53 Identification for Plumbing Piping and Equipment'; // should pull title automatically
						$type          = 'Specification Document';
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

						<?php
						$icon          = file_get_contents( 'assets/images/yellow-icon.svg' ); //'<span class="fas fa-file-spreadsheet"></span>';
						$title         = 'ANSI/ASME Standard for Pipe Identification'; // should pull title automatically
						$type          = 'Standards Document';
						$teaser_copy   = 'Lorem ipsum dolor sit amet, cecte tuer adipiscing elit donec odio nec justo quisque volutpat mattis.';
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
						<?php
						// END DELETE ME VARIATIONS

						?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
