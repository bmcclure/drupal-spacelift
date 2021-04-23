<?php

/**
 * @file
 * Content 50/50.
 */

// choices: body-content,
// related-downloads,
// featured-video,
// side-by-side-images,
// single-image,
// side-by-side-images-with-content.
$headline = 'Main Headline Highlighting the Different Services Performed';

?>
<section class="Content5050">
  <div class="grid-container">
    <?php if ($headline) { ?>
      <header class="section-header text-center"><h2><?php echo $headline; ?></h2>
      </header>
    <?php } ?>

    <div class="Content5050-row grid-x grid-margin-x grid-margin-y large-up-2">
      <?php
      include "components/03-organisms/BodyContentBlock/BodyContentBlock.php";
      include "components/03-organisms/SideBySideImagesWithContent/SideBySideImagesWithContent.php";
      ?>
    </div>
  </div>
</section>

<!-- JUST EXAMPLES FOR NOW -- THESE WILL NEED TO BE DELETED WHEN MERGING, AND IF STATEMENTS NEED TO TAKE THEIR PLACE FOR WHICH COMPONENTS ARE PULLED IN -->

<section class="Content5050">
  <div class="grid-container">
    <div class="Content5050-row grid-x grid-margin-x grid-margin-y large-up-2">
      <?php
      include "components/02-molecules/SingleImageBlock/SingleImageBlock.php";
      include "components/03-organisms/BodyContentBlock/BodyContentBlock.php";
      ?>
    </div>
  </div>
</section>

<section class="Content5050">
  <div class="grid-container">
    <div class="Content5050-row grid-x grid-margin-x grid-margin-y large-up-2">
      <?php
      include "components/03-organisms/BodyContentBlock/BodyContentBlock.php";
      include "components/03-organisms/FeaturedVideoBlock/FeaturedVideoBlock.php";
      ?>
    </div>
  </div>
</section>

<section class="Content5050">
  <div class="grid-container">
    <div class="Content5050-row grid-x grid-margin-x grid-margin-y large-up-2">
      <?php
      include "components/03-organisms/SideBySideImages/SideBySideImages.php";
      include "components/03-organisms/BodyContentBlock/BodyContentBlock.php";
      ?>
    </div>
  </div>
</section>
<section class="Content5050">
  <div class="grid-container">
    <div class="Content5050-row grid-x grid-margin-x grid-margin-y large-up-2">
      <?php
      include "components/03-organisms/BodyContentBlock/BodyContentBlock.php";
      include "components/03-organisms/RelatedDownloadsBlock/RelatedDownloadsBlock.php";
      ?>
    </div>
  </div>
</section>

<section class="Content5050">
  <div class="grid-container">
    <div class="Content5050-row grid-x grid-margin-x grid-margin-y large-up-2">
      <?php
      include "components/03-organisms/BodyContentBlock/BodyContentBlock.php";
      include "components/02-molecules/SingleImageBlock/SingleImageBlock.php";
      ?>
    </div>
  </div>
</section>
