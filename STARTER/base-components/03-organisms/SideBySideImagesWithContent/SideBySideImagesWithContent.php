<?php
/**
 * SideBySideImagesWithContent
 * Used in Content 5050
 */

?>
<div class="SideBySideImagesWithContent cell">
    <div class="FlexRow medium-up-2">
		<?php
		/** USE 02-molecules/Card.php */

		$image = "/components/03-organisms/FeaturedServices/images/MSI_1211.jpg";
		$title = "Subheadline Here";
		$body  = "Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.";

		?>
        <div class="Card Card--tight-space FlexRow-item">
            <div class="Zoom">
                <div class="Card-image Zoom-image lozad" data-background-image=" <?= $image ?>"
                     style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
            </div>
            <div class="Card-text" data-aos="SectionFade">
                <h3 class="HeaderFont--regular SectionFade-one"><?= $title ?></h3>
                <p class="SectionFade-two"><?= $body ?></p>
            </div>
        </div>
        <div class="Card Card--tight-space FlexRow-item">
            <div class="Zoom">
                <div class="Card-image Zoom-image lozad" data-background-image=" <?= $image ?>"
                     style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
            </div>
            <div class="Card-text" data-aos="SectionFade">
                <h3 class="HeaderFont--regular SectionFade-one"><?= $title ?></h3>
                <p class="SectionFade-two"><?= $body ?></p>
            </div>
        </div>
    </div>
</div>
