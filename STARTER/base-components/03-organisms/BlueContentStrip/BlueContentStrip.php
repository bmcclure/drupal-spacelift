<?php
/**
 * Blue 50/50 Content Strip
 * used on Homepage
 */

$headline = "Our Technology Innovations Headline Goes Here (H2)";
$wyisywg  = "<ul>
				<li>Access via QR coded tags</li>
				<li>Flexible to handle different types of forms</li>
				<li>Data automatically directed to client portal</li>
				<li>Immediate notification of completed form</li>
			  </ul>";

$image_1      = "/components/03-organisms/BlueContentStrip/images/MSI_1222.jpg";
$image_2      = "/components/03-organisms/BlueContentStrip/images/MSI_1240.jpg";
$button_title = 'Tech Details';
$button_link  = '#';

?>
<section class="BlueContentStrip AngledBackground bg-dark-blue" data-aos="SectionFade">
    <div class="BlueContentStrip-container AngledBackground-text grid-container">
        <div class="grid-x grid-padding-y large-up-2">
            <div class="BlueContentStrip-text cell">
                <div class="BlueContentStrip-text-container">
                    <?php include "components/01-atoms/Line/Line.php" ?>
                    <h2 class="title SectionFade-one"><?= $headline ?></h2>
                    <div class="styled-bullets SectionFade-two"><?= $wyisywg ?></div>
                    <a href="<?= $button_link ?>" class="button SectionFade-three"><?= $button_title ?> <span
                                class="fas fa-caret-right"></span></a>
                </div>
            </div>
            <div class="BlueContentStrip-images cell ">
                <div class="BlueContentStrip-image lozad" data-background-image="<?= $image_1 ?>"
                     style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
                <div class="BlueContentStrip-image lozad" data-background-image="<?= $image_2 ?>"
                     style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
            </div>
        </div>
    </div>
</section>
