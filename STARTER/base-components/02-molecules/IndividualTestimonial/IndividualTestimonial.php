<?php
/**
 * Individual Testimonial
 */

$type        = 'customer'; //customer or employee
$image       = 'assets/images/placeholder-thumbnail.jpg';
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
