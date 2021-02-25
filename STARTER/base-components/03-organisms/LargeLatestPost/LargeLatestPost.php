<?php
/**
 * LargeLatestPost
 * used on templates/post-listing
 */

$headline    = 'The Latest Blog Post';
$latest_post = [ 1 ]; // pull in the latest automatically
?>

<section class="LargeLatestPost bg-light">
    <div class="grid-container short">
        <h2 class="title"><?= $headline ?></h2>
		<?php include "components/02-molecules/IndividualPostTeaser/IndividualPostTeaser.php" ?>
    </div>
</section>
