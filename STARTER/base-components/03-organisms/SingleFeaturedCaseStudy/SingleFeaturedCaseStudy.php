<?php
/**
 * Single Featured Case Study
 * used on Flexible Template
 */

$background_toggle   = 'bg-light'; // bg-light, bg-blue
$headline            = 'Related Featured Case Study Headline Here';
$button_title        = 'ALL CASE STUDIES';
$url                 = '#placeholder';
$featured_case_study = 1; // entity reference
if ( $featured_case_study ) {
	?>
    <section class="SingleFeaturedCaseStudy <?= $background_toggle ?>">
        <div class="grid-container">
            <header class="title grid-x grid-margin-x vertical-center">
                <div class="cell medium-auto">
                    <h2><?= $headline ?></h2>
                </div>
                <div class="cell medium-shrink medium-text-right">
                    <a href="<?= $url ?>" class="button" title="<?= $button_title ?>"><?= $button_title ?> <span
                                class="fas fa-caret-right"></span></a>
                </div>
            </header>
			<?php include "components/02-molecules/IndividualCaseStudyTeaser/IndividualCaseStudyTeaser.php" ?>
        </div>
    </section>
    <!-- DELETE ME VARIATION -->
    <section class="SingleFeaturedCaseStudy bg-blue">
        <div class="grid-container">
            <header class="title grid-x grid-margin-x vertical-center">
                <div class="cell medium-auto">
                    <h2><?= $headline ?></h2>
                </div>
                <div class="cell medium-shrink medium-text-right">
                    <a href="<?= $url ?>" class="button" title="ALL CASE STUDIES">ALL CASE STUDIES <span
                                class="fas fa-caret-right"></span></a>
                </div>
            </header>
			<?php include "components/02-molecules/IndividualCaseStudyTeaser/IndividualCaseStudyTeaser.php" ?>
        </div>
    </section>
    <!-- END DELETE ME -->
	<?php
}
