<?php
/**
 * ProductHeadlineIntro
 */

$headline = "Example Product";
$intro    = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
<p>Please note, if you would like to add a graphic, this will need to be uploaded in the Checkout page.</p>";


$actual_link = urlencode( ( isset( $_SERVER['HTTPS'] )
                            && $_SERVER['HTTPS'] === 'on' ? "https" : "http" )
                          . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" );
$title       = $headline;// auto get the title
?>

<header class="ProductHeadlineIntro">
    <div class="grid-x grid-margin-x">
        <div class="ProductHeadlineIntro-share cell medium-order-2 medium-shrink">
			<?php
			// @todo this will need to be refactored when merging. This variation should NOT stick.
			// Begin copy-paste without sticky feature of SocialShareTo
			?>

            <div id="SocialShareTo"
                 class="SocialShareTo"
            >
                <ul class="SocialShareTo-menu Socials-row">
                    <li>
                        <a data-open="socialModal" class="Socials-button"><i class="fa fa-share fa-stack"></i></a>
                    </li>
                    <li>
<!--                        <a href="#"-->
<!--                           class="Socials-button"-->
<!--                           data-open="ForwardToAFriend"-->
<!--                           title="Forward --><?//= $title ?><!-- to a friend.">-->
<!--                            <i class="fas fa-envelope fa-stack"></i></a>-->
                        <a href="mailto:?subject=<?= $title ?>&body=Check out this product from Marking Services: <?= $actual_link; ?>"
                           class="Socials-button"
                           rel="noopener nofollow"
                           title="<?= $title ?>"
                           target="_blank">
                            <i class="fas fa-envelope fa-stack"></i></a>
                    </li>
                    <li>
                        <a href="javascript:window.print()"
                           class="Socials-button">
                            <i class="fas fa-print"></i>
                        </a>
                    </li>
                </ul>

                <div class="reveal" id="socialModal" data-reveal>
                    <span class="h6 SocialShareTo-label subtitle">Share This Product</span>
                    <h2 class="title"><?= $title; ?></h2>
                    <div class="SocialShareTo-row Socials-row">
                        <a href="https://www.facebook.com/sharer.php?u=<?= $actual_link; ?>"
                           class="SocialShareTo-button Socials-button"
                           ref="noopener nofollow" target="_blank"><span class="fab fa-facebook-f"></span>
                        </a>
                        <a href="https://twitter.com/share?text=<?= $title; ?>&url=<?= $actual_link; ?>"
                           class="SocialShareTo-button Socials-button" ref="noopener nofollow"
                           target="_blank"><span class="fab fa-twitter"></span>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?= $actual_link; ?>"
                           class="SocialShareTo-button Socials-button" ref="noopener nofollow"
                           target="_blank"><span class="fab fa-linkedin-in"></span>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url=<?= $actual_link; ?>&description=<?= $title; ?>"
                           class="SocialShareTo-button Socials-button" ref="noopener nofollow" target="_blank">
                            <span class="fab fa-pinterest-p"></span>
                        </a>
                    </div>

                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            </div>

			<?php // END copy paste
			?>
        </div>
        <h1 class="ProductHeadlineIntro-headline title cell medium-order-1 medium-auto"
            itemprop="headline"><?= $headline ?></h1>
    </div>
    <div class="ProductHeadlineIntro-intro"><?= $intro ?></div>
</header>
