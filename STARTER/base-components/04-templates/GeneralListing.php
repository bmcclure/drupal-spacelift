<?php
/**
 * General Listing Template
 */

include "components/02-molecules/HeaderBannerImage/HeaderBannerImage.php";
include "components/03-organisms/IntroWithIcons/IntroWithIcons.php";
$headline       = "H2 Headline Goes Here About These Services";
$featured_pages = [ 1, 2 ];
$more_pages     = [ 1, 2, 3 ];
?>

<section class="bg-light">

    <div class="grid-container">
        <header class="section-header text-center"><h2><?= $headline ?></h2></header>

        <div class="FlexRow medium-up-2">
			<?php
			foreach ( $featured_pages as $featured_page ) {
				include "components/02-molecules/PageTeaserBlock/PageTeaserBlock.php";
			} ?>
        </div>

        <div class="FlexRow section medium-up-2 large-up-3">
			<?php
			foreach ( $more_pages as $more_page ) {
				include "components/02-molecules/PageTeaserBlock/PageTeaserBlock.php";
			}
			?>
        </div>
    </div>
</section>

<?php include 'components/03-organisms/ReusableCalloutStrip/ReusableCalloutStrip.php'; ?>
<?php include 'components/03-organisms/RelatedResourceDownloads/RelatedResourceDownloads.php'; ?>
<?php include 'components/03-organisms/FeaturedBlogPosts/FeaturedBlogPosts.php'; ?>
<?php include 'components/03-organisms/FeaturedCaseStudies/FeaturedCaseStudies.php'; ?>
<?php include 'components/03-organisms/OtherPagesToView/OtherPagesToView.php'; ?>
