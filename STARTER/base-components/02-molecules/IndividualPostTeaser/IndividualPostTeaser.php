<?php
/**
 * Individual Post Teasers
 * Used on: Featured Blog Posts, LargeLatestPost, others too I think
 */

$title     = 'Blog Title About A Specific MSI Service Goes Here'; // should pull automatically from main title field
$body_copy = 'Lorem ipsum dolor sit amet, cecte tuer adipiscing elit donec odio nec justo quisque volutpat mattis.';
$image     = "/components/03-organisms/FeaturedServices/images/MSI_1211.jpg";
$date      = 'Jan 26, 2020'; // should pull automatically from posted date
$url       = '#'; //should pull automatically

?>
<article class="IndividualPostTeaser cell">
    <div class="grid-x grid-margin-x">
        <a href="<?= $url ?>" class="IndividualPostTeaser-imageWrapper cell medium-4">
            <div class="Zoom">
                <div class="IndividualPostTeaser-image Zoom-image lozad" data-background-image=" <?= $image ?>"
                     style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover;"></div>
            </div>
        </a>
        <div class="IndividualPostTeaser-textWrapper cell medium-8">
            <h3 class="HeaderFont--regular"><a href="<?= $url ?>" title="<?= $title ?>"><?= $title ?></a></h3>
            <p class="IndividualPostTeaser-date h6 uppercase"><?= $date ?></p>
            <p><?= $body_copy ?></p>
        </div>
    </div>
</article>
