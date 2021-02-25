<?php
/**
 * CaseStudiesListingResults
 * used on Case Studies Listing template only
 */

$posts                = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
?>
<section class="CaseStudiesListingResults bg-light">
    <div class="grid-container">

	    <?php include "components/03-organisms/ResourcesHeader/ResourcesHeader.php" ?>

        <section class="PostListingResults-posts FlexRow medium-up-2 large-up-3">
			<?php
			foreach ( $posts as $post ) {
				include 'components/02-molecules/IndividualCaseStudyTeaser/IndividualCaseStudyTeaser.php';
			}
			?>
        </section>
        <hr class="ResourceResults-line">
        <?php include "components/03-organisms/Pagination/Pagination.php" ?>

    </div>
</section>
