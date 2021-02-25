<?php
/**
 * Intro with Icons
 *
 */

$headline     = "H1 Headline About Lorem Ipsum Dolor";
$intro_copy   = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.";
$button_title = "Contact Us";
$button_link  = "#";
$icons        = [ 1, 2, 3, 4, 5, 6 ];

?>

<header class="IntroWithIcons bg-light">
    <div class="grid-container">
        <div class="IntroWithIcons-container grid-x">
            <div class="IntroWithIcons-text cell large-5">
                <h1 itemprop="headline" class="title"><?= $headline ?></h1>
                <p class="large"><?= $intro_copy ?></p>
                <a href="<?= $button_link ?>" class="button SectionFade-three"><?= $button_title ?>
                    <span class="fas fa-caret-right"></span>
                </a>
            </div>
            <div class="IntroWithIcons-blocks cell large-7">
                <div class="grid-x small-up-2 large-up-3">
					<?php foreach ( $icons as $icon ) { ?>
                        <div class="cell IntroWithIcons-block">
                            <div class="IntroWithIcons-block-icon">
								<?= file_get_contents( 'assets/images/placeholder.svg' ); ?>
                            </div>
                            <div class="IntroWithIcons-block-title">
                                No minimum order
                                Requirements
                            </div>

                        </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>
