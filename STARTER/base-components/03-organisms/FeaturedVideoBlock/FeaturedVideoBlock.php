<?php
/**
 * Featured Video
 */

$featured_video = 'id'; // get the featured video, then get the video, image, and caption
$title          = 'Title of Video';
$url            = 'https://www.youtube.com/watch?v=AJocFniwbTA';
$image          = '/assets/images/placeholder-thumbnail.jpg';
$caption        = 'A caption is optional';

?>
<div class="FeaturedVideoBlock cell">
    <div class="FeaturedVideoBlock-image  lozad" data-background-image="<?= $image ?>"
         style="background: url(/assets/images/placeholder.png); background-size: cover;">
        <a class="FeaturedVideoBlock-container" href="<?= $url ?>&rel=0" title="<?= $url ?>" data-lity>
            <span class="far fa-play-circle"></span>
        </a>
    </div>
	<?php if ( $caption ) { ?>
        <div class="FeaturedVideoBlock-caption">
            <p class="h3 HeaderFont--regular"><?= $caption ?></p>
        </div>
	<?php } ?>
</div>
<script defer src="/components/03-organisms/FeaturedVideoBlock/dist/FeaturedVideoBlock.js?v=1.1.0"></script>

