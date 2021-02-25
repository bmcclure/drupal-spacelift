<?php
/**
 * Product Category Teaser Block
 * Used in organisms/FeaturedProductCategories
 */

$title = "Pipe Markers";
$body  = "Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis.";
$image = "/components/03-organisms/FeaturedProductCategories/images/MSI_1223.jpg";
$url   = "#";

?>
<a href="<?= $url ?>" title="<?= $title ?>" class="ProductCategoryTeaserBlock FlexRow-item">
    <div class="ProductCategoryTeaserBlock-image-wrapper Zoom">
        <div class="ProductCategoryTeaserBlock-image Zoom-image lozad"
             data-background-image="<?= $image ?>"
             style="background: url(/assets/images/placeholder.png) no-repeat center; background-size: cover; padding-top: 66.6667%;">
        </div>
    </div>
    <div class="ProductCategoryTeaserBlock-text " data-aos="SectionFade">
        <h3 class="ProductCategoryTeaserBlock-title HeaderFont--regular SectionFade-one"><?= $title ?></h3>
        <p class="SectionFade-two"><?= $body ?></p>
    </div>
</a>
