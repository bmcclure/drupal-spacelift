<?php
/**
 * LargeLatestCaseStudy
 * used on templates/CaseStudiesListing
 */

$headline    = 'The Latest Case Study';
$latest_post = [ 1 ]; // pull in the latest automatically
?>

<section class="LargeLatestCaseStudy SingleFeaturedCaseStudy">
    <div class="grid-container">
        <h2 class="title"><?= $headline ?></h2>
		<?php include "components/02-molecules/IndividualCaseStudyTeaser/IndividualCaseStudyTeaser.php" ?>
    </div>
</section>
