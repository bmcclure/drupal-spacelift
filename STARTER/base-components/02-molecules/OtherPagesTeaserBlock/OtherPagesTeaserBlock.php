<?php
/**
 * Other Pages Teaser Block
 * Used in organism/OtherPagesToView, among others
 *
 * Uses common "PageTeaserBlock" styling - this is shared with other molecules.
 */

$image        = "/components/03-organisms/FeaturedServices/images/MSI_1211.jpg";
$title        = "Material Take Off";
$body         = "Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.";
$button_title = "Service Details";
$url          = "#";

?>
<div class="OtherPagesTeaserBlock Card Card--tight-space FlexRow-item">
	<a href="<?= $url ?>" title="<?= $title ?>">
		<div class="Zoom">
			<div class="Card-image Zoom-image lozad" data-background-image=" <?= $image ?>"
			     style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
		</div>
		<div class="Card-text" data-aos="SectionFade">
			<h3 class="HeaderFont--regular SectionFade-one"><?= $title ?></h3>
			<p class="SectionFade-two"><?= $body ?></p>
		</div>
	</a>
</div>
