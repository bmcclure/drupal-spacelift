<?php
/**
 * Products Header Banner
 */

$h1_headline   = 'Products H1 Headline Goes Here';
$h3_headline   = 'Secondary Supporting Headline Goes Here';
$default_image = '/components/03-organisms/HeroBanner/images/default.jpg';
$buttons       = [
	[
		'title' => 'VIEW BY CATEGORY',
		'url'   => '#category',
	],
	[
		'title' => 'VIEW BY TYPE',
		'url'   => '#CustomFacetDisplay', // SWAP THIS OUT WHEN MERGING
	],
	[
		'title' => 'VIEW BY INDUSTRY',
		'url'   => '#industry',
	]
];
$view_all      =
	[
		'title' => 'VIEW ALL PRODUCTS',
		'url'   => '#products',
	]

?>
<header id="ProductsHeaderBanner" class="ProductsHeaderBanner section"
        style="background:url(<?= $default_image ?>) no-repeat center; background-size: cover;">
    <div class="ProductsHeaderBanner-overlay"></div>
    <div class="grid-container text-center">
        <div class="ProductsHeaderBanner-headlines">
            <h1 class="ProductsHeaderBanner-headline title" itemprop="headline"><?= $h1_headline ?></h1>
            <h3 class="ProductsHeaderBanner-subheadline HeaderFont--regular"><?= $h3_headline ?></h3>
        </div>
    </div>
    <div id="ProductsHeaderBanner-buttons-container" class="ProductsHeaderBanner-buttons-container" data-sticky-container>
        <div class="sticky" data-sticky
             data-margin-top="0"
             data-top-anchor="ProductsHeaderBanner-buttons-container"
             data-btm-anchor="endofProductCategoryListing:bottom">
            <div class="grid-container">
                <div class="ProductsHeaderBanner-buttons">
					<?php foreach ( $buttons as $button ) {
						?>
                        <a href="<?= $button['url']; ?>"
                           class=" button outline"
                           data-smooth-scroll
                           data-offset="100">
							<?= $button['title']; ?>
                            <span class="fas fa-caret-circle-down"></span>
                        </a>

						<?php
					} ?>

                    <a href="<?= $view_all['url'] ?>" class=" button"><?= $view_all['title']; ?> <span
                                class="fas fa-caret-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</header>
