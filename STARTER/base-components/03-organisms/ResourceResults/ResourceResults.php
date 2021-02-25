<?php
/**
 * ResourceResults
 *
 * used on Resources Secondary Listing Page
 */

$title   = 'Downloads';
$results = '20'; // this will need to pull automatically
$showing = '#-## of ##'; // this will need to pull automatically

$resources = [ 1, 2, 3, 4, 5, 6];
?>
<section class="ResourceResults bg-light">
    <div class="grid-container">
        <header class="ResourceResults-header">
            <div class="ResourceResults-title">
                <h2><?= $title ?></h2>
                <div><?= $results ?> Results</div>
            </div>
            <div class="ResourceResults-viewButtons">
                <div class="ResourceResults-viewButtonsRow">
                    <div class="ResourceResults-viewButtonsTitle">VIEW BY</div>
                    <div class="ResourceResults-viewButtonsButton">
                        <button id="ListView" class="button white active"><span class="fas fa-list"></span> LIST VIEW
                        </button>
                    </div>
                    <div class="ResourceResults-viewButtonsButton">
                        <button id="GridView" class="button white"><span class="fal fa-th-large"></span> GRID VIEW
                        </button>
                    </div>
                </div>
            </div>
            <div class="ResourceResults-showing">
                <span class="ResourceResults-showingTitle">SHOWING:</span> <?= $showing ?>
            </div>

        </header>
        <div id="ResourceResultsView" class="ResourceResults-view ResourceResults-listView">
            <h3 class="ResourceResults-sectionTitle cell">Markers</h3>
			<?php
			foreach ( $resources as $resource ) {
				include "components/02-molecules/ResourceResult/ResourceResult.php";
			}
			?>
            <h3 class="ResourceResults-sectionTitle cell">Tags</h3>
	        <?php
	        foreach ( $resources as $resource ) {
		        include "components/02-molecules/ResourceResult/ResourceResult.php";
	        }
	        ?>
        </div>

        <hr class="ResourceResults-line">
		<?php include "components/03-organisms/Pagination/Pagination.php"; ?>

    </div>
    <script defer src="/components/03-organisms/ResourceResults/dist/ResourceResults.js?v=1.1.0"></script>

</section>

<!-- begin DELETE ME variation-->
<?php
$videos = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 ];
?>
<section class="ResourceResults bg-light">
    <div class="grid-container">
        <header class="ResourceResults-header">
            <div class="ResourceResults-title">
                <h2>Videos</h2>
                <div><?= $results ?> Results</div>
            </div>
            <div class="ResourceResults-viewButtons">
                <div class="ResourceResults-viewButtonsRow">
                    <div class="ResourceResults-viewButtonsTitle">VIEW BY</div>
                    <div class="ResourceResults-viewButtonsButton">
                        <button id="ListView2" class="button white active"><span class="fas fa-list"></span> LIST VIEW
                        </button>
                    </div>
                    <div class="ResourceResults-viewButtonsButton">
                        <button id="GridView2" class="button white"><span class="fal fa-th-large"></span> GRID VIEW
                        </button>
                    </div>
                </div>
            </div>
            <div class="ResourceResults-showing">
                <span class="ResourceResults-showingTitle">SHOWING:</span> <?= $showing ?>
            </div>

        </header>
        <div id="ResourceResultsView2" class="ResourceResults-view ResourceResults-listView">
			<?php
			foreach ( $videos as $video ) {
				include "components/02-molecules/ResourceResultVideo/ResourceResultVideo.php";
			}
			?>
        </div>
    </div>

</section>
<!-- end DELETE ME -->
