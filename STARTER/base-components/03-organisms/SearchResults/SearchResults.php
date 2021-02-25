<?php
/**
 * SearchResults
 */

?>
<section class="SearchResults">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell medium-10 large-8 medium-offset-1 large-offset-2">
                <div class="SearchResults-dropdown">
                    <label for="searchType" class="sr-only">Filter Your Search Results</label>
                    <select class="SearchHeader-filter" name="searchType" id="searchType">
                        <option value="">- Filter Results -</option>
                        <option value="">Products</option>
                        <option value="">Pages</option>
                        <option value="">News</option>
                        <option value="">Blogs</option>
                        <option value="">Case Studies</option>
                        <option value="">Resource Downloads</option>
                    </select>
                </div>

				<?php include "components/02-molecules/SearchResult/SearchResult.php" ?>
                <!-- BEGIN DELETE ME VARIATIONS -->
				<?php include "components/02-molecules/SearchResult/SearchResult.php" ?>

				<?php include "components/02-molecules/SearchResult/SearchResult.php" ?>

				<?php
				/**
				 * SearchResult
				 */
				$image               = '';
				$title               = '<b>XYZ</b> Page Title Here';
				$teaserCopy          = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit <b>XYZ</b>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
				$url                 = '#';
				$backgroundTreatment = 'cover';
				$type                = 'Pages';
				?>
                <article class="SearchResult">
                    <div class="grid-x grid-margin-x">
						<?php if ( $image ) { ?>
                            <a href="<?= $url ?>" title="<?= $title ?>" data-background-image="<?= $image ?>"
                               class="SearchResult-image lozad cell medium-3"
                               style="background: url(assets/images/placeholder.png) no-repeat center; background-size: <?= $backgroundTreatment ?>;">
                            </a>
						<?php } ?>

                        <div class="SearchResult-text cell medium-auto">
                            <h3><a href="<?= $url ?>" title="<?= $title ?>"><?= $title ?></a></h3>
                            <p><?= $teaserCopy ?></p>
                            <div class="SearchResult-type bg-light"><?= $type ?></div>
                        </div>
                    </div>
                </article>
				<?php
				/**
				 * SearchResult - DOWNLOAD VARIATION
				 */

				$image               = 'components/02-molecules/IndividualResourceDownloadsThumbnail/pdf_thumbnail_placeholder.png';
				$title               = 'Example Download Title Here';
				$teaserCopy          = 'Lorem ipsum dolor <b>XYZ</b> teaser copy here. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
				$url                 = '#';
				$backgroundTreatment = 'contain';
				$type                = 'Resource Download';
				?>
                <article class="SearchResult SearchResult--download">
                    <div class="grid-x grid-margin-x">
						<?php if ( $image ) { ?>
                            <a class="SearchResult-image cell medium-3" href="<?= $url ?>" title="<?= $title ?>">
                                <div class="SearchResult-imageBackground lozad"
                                     data-background-image="<?= $image ?>"
                                     style="background: url(assets/images/placeholder.png) no-repeat left; background-size: <?= $backgroundTreatment ?>; padding-top: 100%;"></div>
                            </a>
						<?php } ?>

                        <div class="SearchResult-text cell medium-auto">
                            <h3><a href="<?= $url ?>" title="<?= $title ?>"><?= $title ?></a></h3>
                            <p><?= $teaserCopy ?></p>
                            <div class="SearchResult-type bg-light"><?= $type ?></div>
                        </div>
                    </div>
                </article>

	            <?php
	            /**
	             * SearchResult : VIDEO VARIATION - SEE URL field ADD 'text-center'
	             */
	            $icon          = "<span class='far fa-play-circle'></span>";

	            $image               = 'assets/images/placeholder-thumbnail.jpg';
	            $title               = 'Example Video Title Here';
	            $teaserCopy          = 'Lorem ipsum dolor <b>XYZ</b> teaser copy here. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
	            $url                 = 'https://www.youtube.com/watch?v=33qflZyEfXE';
	            $backgroundTreatment = 'cover';
	            $type                = 'Video';
	            ?>
                <article class="SearchResult">
                    <div class="grid-x grid-margin-x">
			            <?php if ( $image ) { ?>
                            <a class="SearchResult-image cell medium-3" data-lity href="<?= $url ?>" title="<?= $title ?>">
                                <div class="FeaturedVideoBlock-image SearchResult-imageBackground lozad text-center"
                                     data-background-image="<?= $image ?>"
                                     style="background: url(assets/images/placeholder.png) no-repeat center; background-size: <?= $backgroundTreatment ?>;">
                                    <div class="FeaturedVideoBlock-container">
                                        <span class="far fa-play-circle"></span>
                                    </div>
                                </div>
                            </a>
			            <?php } ?>

                        <div class="SearchResult-text cell medium-auto">
                            <h3><a href="<?= $url ?>" title="<?= $title ?>"><?= $title ?></a></h3>
                            <p><?= $teaserCopy ?></p>
                            <div class="SearchResult-type bg-light"><?= $type ?></div>
                        </div>
                    </div>
                </article>

                <!-- END DELETE ME -->
            </div>
        </div>
    </div>
</section>

<!-- This is the lity stuff from Featurd Video Block, which is needed for displaying video results -->
<script defer src="/components/03-organisms/FeaturedVideoBlock/dist/FeaturedVideoBlock.js?v=1.1.0"></script>

