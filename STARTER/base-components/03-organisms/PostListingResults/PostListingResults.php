<?php

/**
 * @file
 * PostListingResults.
 *
 * Used on Post Listing template only.
 * I DON'T THINK WE NEED THIS ONE - Sophia.
 */

$posts = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>
<section class="PostListingResults">
  <div class="grid-container">

    <?php include "components/03-organisms/ResourcesHeader/ResourcesHeader.php" ?>

    <section class="PostListingResults-posts grid-x grid-margin-x large-up-2">
      <?php
      foreach ($posts as $post) {
        include 'components/02-molecules/IndividualPostTeaser/IndividualPostTeaser.php';
      }
      ?>
    </section>
    <hr class="ResourceResults-line">

    <?php include "components/03-organisms/Pagination/Pagination.php" ?>

  </div>
</section>
