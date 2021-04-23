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
        <div id="ProductImages-custom" class="ProductImages-custom canvas">
    <?php include "components/03-organisms/CustomTag/CustomTag.php" ?>
        </div>
        <p class="ProductImages-disclaimer text-center small"><em>May not be exact product representation. For reference only.</em></p>
    </div>
</div>
<!-- not deferred. I want this early so that the layout shift happens earlier -->
<script src="/components/03-organisms/ProductImages/dist/ProductImages.js?v=1.0.2"></script>
