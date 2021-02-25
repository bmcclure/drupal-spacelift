<?php
/**
 * Individual Case Study Teaser
 * Used in Featured Case Studies
 *
 * Uses "PageTeaserBlock" classes - shared styling.
 */

$image    = "/components/03-organisms/FeaturedServices/images/MSI_1211.jpg";
$title    = 'Case Study Title Goes Here'; // Pull from main title
$body     = 'Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros.';
$bullet_1 = 'Aliquam tincidunt mauris eu risus';
$bullet_2 = 'Vestibulum auctor dapibus neque';
$bullet_3 = 'Cras ornare tristique elit';
$url      = '#'; // get permalink

$subheadline  = 'CASE STUDY';
$button_title = 'Continue Reading';

$fa_icon = '<i class="far fa-check-square"></i>';
?>

<div class="IndividualCaseStudyTeaser Card FlexRow-item">
    <a class="IndividualCaseStudyTeaser-link" href="<?= $url ?>" title="<?= $title ?>">
        <div class="IndividualCaseStudyTeaser-imageWrapper Zoom">
            <div class="IndividualCaseStudyTeaser-image Card-image Zoom-image lozad" data-background-image=" <?= $image ?>"
                 style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
        </div>
        <div class="IndividualCaseStudyTeaser-text Card-text" data-aos="SectionFade">
            <h3 class="HeaderFont--regular SectionFade-one title"><?= $title ?></h3>
            <p class="h6 SectionFade-two"><?= $subheadline ?></p>
            <p class="SectionFade-three"><?= $body ?></p>
			<?php if ( $bullet_1 ) {
				?>

                <div class="wysiwyg styled-bullets SectionFade-four">
                    <ul class="IndividualCaseStudyTeaser-bullets ">
                        <li><?= $bullet_1 ?></li>
						<?php if ( $bullet_2 ) { ?>
                            <li><?= $bullet_2 ?></li><?php } ?>
						<?php if ( $bullet_3 ) { ?>
                            <li><?= $bullet_3 ?></li><?php } ?>
                    </ul>
                </div>
				<?php
			} ?>
            <span class="link SectionFade-three"><?= $button_title ?> <span class="fas fa-caret-right"></span></span>
        </div>
    </a>
</div>


