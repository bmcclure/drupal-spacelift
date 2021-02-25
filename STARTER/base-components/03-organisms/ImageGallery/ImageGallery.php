<?php
/**
 * ImageGallery
 * used in templates/CaseStudyDetail
 */

$headline     = 'Gallery of Images Headline';
$images       = [ 1, 2, 3, 4 ]; // should be max of 8
$count        = count( $images );
$displayClass = 'FlexRow medium-up-2 justify-center';

if ( $count > 2 ) {
	$displayClass = 'ImageGallery-slider MSISlider';
}

if ( $images ) {

	?>

    <section class="ImageGallery">
        <div class="grid-container">
            <header class="section-header text-center">
                <h2><?= $headline ?></h2>
            </header>
            <div class="<?= $displayClass ?>">
				<?php
				foreach ( $images as $image ) {
					$image_url = '/assets/images/placeholder-thumbnail.jpg'; // swap out for real image
					$caption   = 'Title of Image';
					?>
                    <div class="FlexRow-item ImageGallery-block text-center">
                        <div class="ImageGallery-image lozad" data-background-image="<?= $image_url ?>"
                             style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
						<?php if ( $caption ) { ?>
                            <div class="ImageGallery-caption h3"><?= $caption ?></div>
						<?php } ?>
                    </div>
					<?php
				}
				?>
            </div>
        </div>
        <script defer src="/components/03-organisms/ImageGallery/dist/ImageGallery.js?v=1.1.0"></script>

    </section>
	<?php

}
