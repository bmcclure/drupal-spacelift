<?php
/**
 * used on Homepage
 */


$headline = 'Customization Services Available H2 Headline Here';
$body     = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit quisque volutpat mattis eros.';
$image    = '/components/03-organisms/CustomizationCallout/images/Products-Cluster.png';


?>

<section id="CustomizationCalloutVariation" class="CustomizationCallout CustomizationCalloutVariation" >
    <div class="CustomizationCallout-top bg-yellow">
        <div class="grid-container">
            <div class="grid-x vertical-center">
                <div class="CustomizationCallout-top-image cell medium-4">
                    <div class="CustomizationCallout-top-image-container lozad" data-background-image="<?= $image ?>"
                         style="background:url(/assets/images/placeholder.png) no-repeat bottom; background-size: contain;"></div>
                </div>
                <div class="CustomizationCallout-top-text cell medium-8">
                    <h2><?= $headline ?></h2>
                    <p><?= $body ?></p>
                </div>
            </div>
        </div>
    </div>

</section>

