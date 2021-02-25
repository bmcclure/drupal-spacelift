<?php
/**
 * Case Study Detail Page
 */

include "components/02-molecules/Breadcrumb/Breadcrumb.php";
include "components/02-molecules/HeaderBannerImage/HeaderBannerImage.php";
include "components/03-organisms/BodyCopy/BodyCopy.php";
include "components/03-organisms/FeaturedTestimonials/FeaturedTestimonials.php";
include "components/03-organisms/ShortCalloutStrip/ShortCalloutStrip.php";
include "components/03-organisms/IconInfoBoxes/IconInfoBoxes.php";
include "components/03-organisms/ImageGallery/ImageGallery.php";
include "components/03-organisms/OtherPagesToView/OtherPagesToView.php";
// Uncomment after Emulsify Drupal integration
//include "components/03-organisms/FeaturedCaseStudies/FeaturedCaseStudies.php";


// DELETE ME after Emulsify Drupal Integration
/**
 * Featured Case Studies
 */

$background_toggle = 'bg-light'; // bg-white or bg-light
$headline          = "View Other Case Studies From MSI";

// Limit to 9
$featured_case_studies = [ 1, 2, 3, 4, 5, 6, 7, 8, 9 ];
$count                 = count( $featured_case_studies );

$displayClass = 'FlexRow medium-up-2 large-up-3';

if ( $count > 3 ) {
	$displayClass = 'FeaturedCaseStudies-slider MSISlider';
}

if ( $featured_case_studies ) {
	?>

	<!-- BEGIN DELETE ME VARIATION -->
	<section class="FeaturedCaseStudies bg-white">
		<div class="grid-container">
			<header class="section-header text-center"><h2><?= $headline ?></h2></header>
			<div class=" <?= $displayClass ?>">
				<?php
				foreach ( $featured_case_studies as $featured_case_study ) {
					include 'components/02-molecules/IndividualCaseStudyTeaser/IndividualCaseStudyTeaser.php';
				}
				?>
			</div>
		</div>
		<script defer src="/components/03-organisms/FeaturedCaseStudies/dist/FeaturedCaseStudies.js?v=1.0.0"></script>
	</section>
	<!-- END DELETE ME VARIATION -->

	<section class="FeaturedCaseStudies <?= $background_toggle ?>">
		<div class="grid-container">
			<header class="section-header text-center"><h2><?= $headline ?></h2></header>
			<div class=" <?= $displayClass ?>">
				<?php
				foreach ( $featured_case_studies as $featured_case_study ) {
					include 'components/02-molecules/IndividualCaseStudyTeaser/IndividualCaseStudyTeaser.php';
				}
				?>
			</div>
		</div>
		<script defer src="/components/03-organisms/FeaturedCaseStudies/dist/FeaturedCaseStudies.js?v=1.0.0"></script>
	</section>


	<?php
}


