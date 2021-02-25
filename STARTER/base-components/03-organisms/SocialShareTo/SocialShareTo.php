<?php
/**
 * Component: Social Share
 * Developed for: CQL
 * By: Sophia Zey
 * Version: 1.0
 *
 * Requires:
 *
 * SETUP Instructions: add the ID #sticky-container on a div that wraps around this component.
 */


$actual_link = urlencode( ( isset( $_SERVER['HTTPS'] )
                            && $_SERVER['HTTPS'] === 'on' ? "https" : "http" )
                          . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" );
$title       = 'Title of Article Goes Here';// auto get the title
?>

<div id="SocialShareTo"
     class="SocialShareTo sticky"
     data-sticky
     data-sticky-on="large"
     data-margin-top="5"
     data-anchor="sticky-container"
     data-margin-bottom="1"
>
    <ul class="SocialShareTo-menu Socials-row">
        <li>
            <a data-open="socialModal" class="Socials-button"><i class="fa fa-share fa-stack"></i></a>
        </li>
        <li>
            <a href="mailto:?subject=<?= $title ?>&body=Check out this article: <?= $actual_link; ?>"
               class="Socials-button"
               rel="noopener nofollow"
               title="<?= $title ?>"
               target="_blank">
                <i class="fas fa-envelope fa-stack"></i></a>
        </li>
    </ul>

    <div class="reveal" id="socialModal" data-reveal>
        <span class="h6 SocialShareTo-label subtitle">Share This Post</span>
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
