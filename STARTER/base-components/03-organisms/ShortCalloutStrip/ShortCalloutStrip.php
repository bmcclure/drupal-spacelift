<?php
/**
 * ShortCalloutStrip
 * used on templates/CaseStudyDetail.php
 */

$headline     = "Have Questions Or Are Interested In Working With MSI?";
$button_title = 'Contact Us Today';
$button_link  = '#';
?>

<section class="ShortCalloutStrip ReusableCalloutStrip AngledBackground reverse bg-dark-blue" data-aos="SectionFade">
    <div class="AngledBackground-text grid-container">
        <div class="grid-x grid-padding-y text-center large-text-left vertical-center">
            <div class="ReusableCalloutStrip-text cell large-8">
                <div class="ReusableCalloutStrip-text-container">
                    <h2 class="ShortCalloutStrip-title ReusableCalloutStrip-title SectionFade-one"><?= $headline ?></h2>

                </div>
            </div>
            <div class="ReusableCalloutStrip-right cell large-4 large-text-right ">
                <a href="<?= $button_link ?>" class="button SectionFade-three"><?= $button_title ?> <span
                            class="fas fa-caret-right"></span></a>
            </div>
        </div>
    </div>
</section>

