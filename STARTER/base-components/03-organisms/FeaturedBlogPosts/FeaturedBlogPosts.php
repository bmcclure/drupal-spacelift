<?php
/**
 * Featured Blog Posts
 * Used on: General Listing Page
 * Notes: Can this be reused for Related Posts?!
 */

$background_color = 'bg-white'; //bg-white or bg-light
$headline         = 'Headline Goes Right Here';
$button_title     = 'View All Blogs';
$button_link      = '#';

$featured_blogs = [ 1, 2, 3, 4 ];

if ( $featured_blogs ) {
	?>

    <section class="FeaturedBlogPosts <?= $background_color ?>">
        <div class="grid-container">
            <header class="section-header grid-x vertical-center">
                <div class="cell medium-auto"><h2 class="FeaturedBlogPosts-headline"><?= $headline ?></h2></div>
                <div class="cell medium-shrink">
                    <a href="<?= $button_link ?>"
                       class="button"
                       title="<?= $button_title ?>"><?= $button_title ?>
                        <span class="fas fa-caret-right"></span>
                    </a>
                </div>
            </header>
            <div class="FeaturedBlogPosts-slider MSISlider grid-x grid-margin-x grid-margin-y large-up-2 ">
				<?php
				foreach ( $featured_blogs as $featured_blog ) {
					include "components/02-molecules/IndividualPostTeaser/IndividualPostTeaser.php";
				}
				?>
            </div>
        </div>
        <script defer src="/components/03-organisms/FeaturedBlogPosts/dist/FeaturedBlogPosts.js?v=1.0.0"></script>

    </section>

	<?php // BEGIN DELETE ME
	//
	$background_color = 'bg-light' ?>
    <section class="FeaturedBlogPosts <?= $background_color ?>">
        <div class="grid-container">
            <header class="section-header grid-x vertical-center">
                <div class="cell medium-auto"><h2 class="FeaturedBlogPosts-headline"><?= $headline ?></h2></div>
                <div class="cell medium-shrink">
                    <a href="<?= $button_link ?>"
                       class="button"
                       title="<?= $button_title ?>"><?= $button_title ?>
                        <span class="fas fa-caret-right"></span>
                    </a>
                </div>
            </header>
            <div class="FeaturedBlogPosts-slider MSISlider grid-x grid-margin-x grid-margin-y large-up-2 ">
				<?php
				foreach ( $featured_blogs as $featured_blog ) {
					include "components/02-molecules/IndividualPostTeaser/IndividualPostTeaser.php";
				}
				?>
            </div>
        </div>
    </section>

	<?php
	// END DELETE ME
	?>


	<?php
}
