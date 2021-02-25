<?php
/**
 * SingleFeaturedBlogPost
 * used on Flexible Layout
 */

$background_toggle = 'bg-white'; // bg-light, bg-blue
$headline          = 'Related Featured Blog Headline Here';
$button_title      = 'ALL MSI BLOGS';
$url               = '#placeholder';
$related_blog_post = 1; // entity reference

if ( $related_blog_post ) {
	?>
    <section class="SingleFeaturedBlogPost <?= $background_toggle ?>">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y ">
                <div class="cell medium-4">
                    <h2 class="title"><?= $headline ?></h2>
                    <a href="<?= $url ?>" class="button"><?= $button_title ?>
                        <span class="fas fa-caret-right"></span></a>
                </div>
                <div class="cell medium-8">
					<?php include "components/02-molecules/IndividualPostTeaser/IndividualPostTeaser.php"; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- BEGIN DELETE ME FOR VARIATIONS -->
    <section class="SingleFeaturedBlogPost bg-light">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y ">
                <div class="cell medium-4">
                    <h2 class="title"><?= $headline ?></h2>
                    <a href="<?= $url ?>" class="button"><?= $button_title ?>
                        <span class="fas fa-caret-right"></span></a>
                </div>
                <div class="cell medium-8">
					<?php include "components/02-molecules/IndividualPostTeaser/IndividualPostTeaser.php"; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="SingleFeaturedBlogPost bg-blue">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y ">
                <div class="cell medium-4">
                    <h2 class="title"><?= $headline ?></h2>
                    <a href="<?= $url ?>" class="button"><?= $button_title ?>
                        <span class="fas fa-caret-right"></span></a>
                </div>
                <div class="cell medium-8">
					<?php include "components/02-molecules/IndividualPostTeaser/IndividualPostTeaser.php"; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END DELETE ME -->
	<?php
}
