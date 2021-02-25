<?php
/**
 * Related Downloads Block
 * Used in Content5050
 */

$headline                    = 'Related Downloads';
$featured_resource_downloads = [ 1, 2 ];

?>
<article class="RelatedDownloadsBlock cell">
    <header>
		<?php include "components/01-atoms/Line/Line.php"; ?>
        <h2 class="title"><?= $headline ?></h2>
    </header>
	<?php foreach ( $featured_resource_downloads as $featured_resource_download ) {
		include "components/02-molecules/IndividualResourceDownloadsThumbnail/IndividualResourceDownloadsThumbnail.php";
	} ?>
</article>
