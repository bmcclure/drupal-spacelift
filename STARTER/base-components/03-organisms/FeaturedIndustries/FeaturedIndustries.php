<?php
/**
 * Featured Industries
 */

$headline     = 'Explore Our Featured Industries (H2)';
$body         = 'Lorem ipsum dolor sit amet, consectetuer ading elit. Donec odio quisque volupat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non, semper suscipit.';
$button_title = 'All Industries';
$button_link  = '#';

$icon_teasers = [ 1, 2, 3, 4, 5 ];

?>
<section class="FeaturedIndustries" data-aos="SectionFade">
    <div class="grid-container">
        <div class="grid-x grid-margin-y grid-margin-x ">
            <div class="FeaturedIndustries-text cell medium-5 large-4">
                <h2 class="title SectionFade-one"><?= $headline ?></h2>
                <p class="SectionFade-two"><?= $body ?></p>
                <a href="<?= $button_link ?>" class="button SectionFade-three"><?= $button_title ?>
                    <span class="fas fa-caret-right"></span>
                </a>
            </div>
            <div class="FeaturedIndustries-blocks cell medium-7 large-8">
                <div class="IconTeaserBlocks FlexRow small-up-2 large-up-3">
					<?php foreach ( $icon_teasers as $icon_teaser ) {
						include "components/02-molecules/IconTeaserBlock/IconTeaserBlock.php";
					}

					// DELETE ME WHEN MERGING WITH EMULSIFY -- THIS IS SO MELANIE CAN SEE AN ALTERNATIVE
                    $icon  = file_get_contents( 'assets/images/MSI-View-Products.svg' );
                    $title = 'Oil & Gas';
                    $url   = '#';
                    ?>

                    <div class="IconTeaserBlock FlexRow-item">
                        <a class="IconTeaserBlock-container" href="<?= $url ?>" title="<?= $title ?>">
                            <div class="IconTeaserBlock-icon"><?= $icon ?></div>
                            <div class="IconTeaserBlock-text">
                                <h4 class="IconTeaserBlock-text-title"><?= $title ?> </h4>
                                <span class="fas fa-long-arrow-alt-right"></span>
                            </div>
                        </a>
                    </div>

                    <?php
                    // END DELETE ME
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
