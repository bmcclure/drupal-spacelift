<?php

/**
 * @file
 * ProductsImages.
 *
 * Used for Preset Products???
 */
?>
<div id="ProductImages-container" class="ProductImages-container">
  <div id="ProductImages" class="ProductImages">
    <?php
    // PLEASE NOTE: do NOT lazy load initial images that appear above the fold.
    $image_url = 'components/03-organisms/ProductImages/inc/placeholder-product.png';
    $width = '';
    $height = '';
    // Product Title.
    $alt = '';

    ?>
    <div id="ProductImages-presets" data-toggler=".hide">
      <img class="ProductImages-image"
           src="<?php echo $image_url ?>"
           width="<?php echo $width ?>"
           height="<?php echo $height ?>"
           alt="<?php echo $alt ?>"
      />
    </div>

  </div>
</div>
<!-- not deferred. I want this early so that the layout shift happens earlier -->
<script
  src="/components/03-organisms/ProductImages/dist/ProductImages.js?v=1.0.2"></script>
