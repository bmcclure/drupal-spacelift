<?php
/**
 * Related Resource Downloads
 */

$headline           = 'Related Resource Downloads Headline';
$body_copy          = 'Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.';
$button_title       = 'VIEW ALL RESOURCES';
$button_link        = '';
$featured_downloads = [ 1, 2, 3, 4, ];

if ( $featured_downloads ) {

	?>

    <section class="RelatedResourceDownloads bg-light">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell medium-5 large-4">
                    <h2 class="title"><?= $headline ?></h2>
                    <p><?= $body_copy ?></p>
                    <a href="<?= $button_link ?>" class="button"><?= $button_title ?> <span
                                class="fas fa-caret-right"></span></a>
                </div>
                <div class="cell medium-7 large-8">
                    <div class="grid-x grid-margin-x large-up-2">

						<?php foreach ( $featured_downloads as $featured_download ) {
							echo "<div class='cell'>";
							include "components/02-molecules/IndividualResourceDownloadsThumbnail/IndividualResourceDownloadsThumbnail.php";
							echo "</div>";
						} ?>

                    </div>
                </div>
            </div>
        </div>

    </section>
	<?php

}
