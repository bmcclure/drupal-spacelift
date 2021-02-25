<?php
/**
 * Featured Testimonials
 * used on Flexible template
 *
 * @todo heavy refactoring? only use the single version for the flexible template. the careers listing has the option to turn into a carousel
 */

$background_toggle     = 'bg-light'; // bg-white
$featured_testimonials = [ 1, 2, 3 ];
$count                 = count( $featured_testimonials );
$class                 = '';
if ( $count > 1 ) {
	$class = 'FeaturedTestimonials-slider MSISlider';
}
if ( $featured_testimonials ) {

	?>
    <!-- DELETE ME BEFORE MERGING WITH EMULSIFY -->

	<?php $featured_testimonials = [ 1 ]; ?>

    <section class="FeaturedTestimonials <?= $background_toggle ?>">
        <div class="grid-container">
            <div class="FeaturedTestimonials-row">
				<?php
				$type        = 'customer'; //customer or employee
				$image       = '';
				$testimonial = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis..';
				$citation    = 'John Doe, Engineering Manager';

				?>
                <div class="IndividualTestimonial">
                    <div class="IndividualTestimonial-row">
						<?php if ( ! empty( $image ) ) { ?>
                            <div class="IndividualTestimonial-image lozad" data-background-image="<?= $image ?>"
                                 style="background:url(assets/images/placeholder.png) no-repeat center; background-size: cover;">
                            </div>
							<?php
						} ?>
                        <blockquote class="IndividualTestimonial-quote">
                            <p><?= $testimonial ?></p>
                            <footer><cite><?= $citation ?></cite></footer>
                        </blockquote>
                    </div>
                </div>

            </div>
        </div>
    </section>
<!--	--><?php //$featured_testimonials = [ 1, 2, 3 ];
//	$background_toggle           = 'bg-white';
	?>

    <!-- END DELETE ME -->

<!--    <section class="FeaturedTestimonials --><?//= $background_toggle ?><!--">-->
<!--        <div class="grid-container">-->
<!--            <div class="FeaturedTestimonials-row --><?//= $class ?><!--">-->
<!--				--><?php
//				foreach ( $featured_testimonials as $featured_testimonial ) {
//					include "components/02-molecules/IndividualTestimonial/IndividualTestimonial.php";
//				}
//				?>
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
	<?php
	if ( $count > 1 ) {
		?>
        <script defer src="/components/03-organisms/FeaturedTestimonials/dist/FeaturedTestimonials.js?v=1.0.0"></script>
		<?php
	}
	?>


	<?php

}
