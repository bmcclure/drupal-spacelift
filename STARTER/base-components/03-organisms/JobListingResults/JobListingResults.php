<?php
/**
 * JobListingResults
 * used on the Careers Listing Page
 */


$headline = 'Apply For An Open Position Headline (H2)';
$posts    = [ 1, 2, 3, 4 ];

$footer_text = "Don't see your position, but really want to work for MSI?";
$cta         = "Contact Us";
$url         = "#placeholder";
?>
<section class="JobListingResults bg-light">
    <div class="grid-container">
        <header class="JobListingResults-header text-center">
            <h2><?= $headline ?></h2>
        </header>
        <section class="JobListingResults-posts FlexRow medium-up-2">
			<?php
			foreach ( $posts as $post ) {
				include 'components/02-molecules/JobPostTeaser/JobPostTeaser.php';
			}
			?>
        </section>
        <footer class="wysiwyg text-center">
            <p><?= $footer_text ?> <a href="<?= $url ?>"><b><?= $cta ?></b></a></p>
        </footer>
    </div>
</section>
