<?php
/**
 * ResourceResult
 * used in organisms/ResourceResults
 * @todo when merging with Emulsify, the slight changes could just exist in an "if" statement on the ResourceResult
 * @todo make Video a molecule.
 */


$icon          = "<span class='far fa-play-circle'></span>";
$image         = 'assets/images/placeholder-thumbnail.jpg';
$title         = 'Video Title Lorem Ipsum';
$subtitle      = 'Instructional Video';
$video_caption = 'Caption of video would go here.';
$url           = 'https://www.youtube.com/watch?v=33qflZyEfXE';

?>

<div class="ResourceResultVideo ResourceResult ResourceCategoryIconBlock">
    <a class="ResourceResult-container ResourceCategoryIconBlock-container" href="<?= $url ?>&rel=0"
       title="<?= $title ?>" data-lity>
        <div class="ResourceResultVideo-image FeaturedVideoBlock-image ResourceResult-image lozad"
             data-background-image="<?= $image ?>"
             style="background: url(/assets/images/placeholder.png); background-size: cover;">
            <div class="FeaturedVideoBlock-container">
                <span class="far fa-play-circle"></span>
            </div>
        </div>
        <div class="ResourceResult-icon ResourceCategoryIconBlock-icon"><?= $icon ?></div>
        <div class="ResourceResult-text ResourceCategoryIconBlock-title-container">
            <div class="full-width">
                <h4 class="ResourceResult-title HeaderFont--regular"><?= $title ?></h4>
                <p class="ResourceResult-subtitle"><small><?= $subtitle ?></small></p>
                <p class="ResourceResult-caption"><?= $video_caption ?></p>
            </div>
        </div>
    </a>
</div>
<?php
/**
 * @todo when merging with Emulsify Drupal, we need to make sure the Lity script is only loaded ONCE - it might be loaded from FeaturedVideoBlock, or from here.
 * <script defer src="/components/03-organisms/FeaturedVideoBlock/dist/FeaturedVideoBlock.js?v=1.1.0"></script>
 */
?>

