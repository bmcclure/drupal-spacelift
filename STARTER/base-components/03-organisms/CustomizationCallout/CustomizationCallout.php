<?php
/**
 * used on Homepage
 */


$headline     = 'Customization Services Available (H2)';
$body         = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
$image        = '/components/03-organisms/CustomizationCallout/images/Products-Cluster.png';
$headline_2   = 'Select Your Colors';
$body_2       = 'Lorem ipsum dolor sit amet, consectetuer adingdonec odio quisque volupat mattis eros.';
$headline_3   = 'Customize Your Legend';
$body_3       = 'Lorem ipsum dolor sit amet, consectetuer adingdonec odio quisque volupat mattis eros.';
$button_title = 'All Products';
$button_link  = '#';

?>

<section id="CustomizationCallout" class="CustomizationCallout">
    <div class="CustomizationCallout-top bg-yellow">
        <div class="grid-container">
            <div class="grid-x">
                <div class="CustomizationCallout-top-image cell medium-4">
                    <div class="CustomizationCallout-top-image-container lozad" data-background-image="<?= $image ?>" style="background:url(/assets/images/placeholder.png) no-repeat bottom;background-size: contain;"></div>
                </div>
                <div class="CustomizationCallout-top-text cell medium-8 ">
                    <div class="grid-x grid-margin-x vertical-center">
                        <div class="cell large-8">
                            <h2><?= $headline ?></h2>
                            <p><?= $body ?></p>
                        </div>
                        <div class="cell large-4 large-text-right">
                            <a href="<?= $button_link ?>" class="button"><?= $button_title ?> <span class="fas fa-caret-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="CustomizationCallout-bottom">
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell large-4 show-for-large"></div>
                <div class="CustomizationCallout-bottom-left cell medium-6 large-4">
                    <h3 class="uppercase"><?= $headline_2 ?></h3>
                    <p><?= $body_2 ?></p>
                </div>
                <div class="CustomizationCallout-bottom-right cell medium-6 large-4">
                    <h3 class="uppercase"><?= $headline_3 ?></h3>
                    <p><?= $body_3 ?></p>
                </div>
            </div>
        </div>
    </div>

</section>

