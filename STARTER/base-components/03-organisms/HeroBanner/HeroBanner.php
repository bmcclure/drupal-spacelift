<?php
/**
 * used on Homepage
 */


$h1            = 'We’re The Last Step On The Job H1 Headline Here';
$body          = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis suspendisse urna nibh viverra non semper.';
$default_image = '/components/03-organisms/HeroBanner/images/default.jpg';

$image_1 = '/components/03-organisms/HeroBanner/images/products.jpg';
$icon_1  = '/components/03-organisms/HeroBanner/images/MSI-View-Products.png';
$title_1 = "View Products";
$intro_1 = 'Testing 2: Lorem ipsum dolor sit amet consect adipiscing elit donec odio quisque.';
$cta_1   = 'Products Overview';
$url_1   = '#';

$image_2 = '/components/03-organisms/HeroBanner/images/owners.jpg';
$icon_2  = '/components/03-organisms/HeroBanner/images/MSI-View-Products.png';
$title_2 = 'Owner Services';
$intro_2 = 'Lorem ipsum dolor sit amet consect adipiscing elit donec odio quisque.';
$cta_2   = 'Services Overview';
$url_2   = '#';

?>

<!-- INLINE STYLING so that I can get the PHP variable. Anyone have ideas on how to do this in a better way? -->
<style>
    .HeroBanner-blockIcon {
        max-width: 114px;
        margin: auto;
    }

    @media screen and (min-width: 640px) {
        .HeroBanner-blockIcon {
            margin: auto auto 1rem;
        }
    }

    @media screen and (max-width: 1023px) {
        .HeroBanner-openBlock, .HeroBanner-block--two, .HeroBanner-block--three {
            background-size: cover;
        }

        .HeroBanner-openBlock {
            background: url(<?= $default_image ?>) no-repeat center;
        }

        .HeroBanner-block--two {
            background: url(<?= $image_1 ?>) no-repeat center;
        }

        .HeroBanner-block--three {
            background: url(<?= $image_2 ?>) no-repeat center;
        }
    }

    @media screen and (min-width: 1024px) {
        .HeroBanner {
            position: relative;
        }

        .HeroBanner-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            opacity: 0;
            transition: all 400ms linear;
        }

        .HeroBanner-background.show {
            opacity: 1;
        }

        .HeroBanner-background--one {
            background: url(<?= $default_image ?>) no-repeat center;
        }

        .HeroBanner-background--two {
            background: url(<?= $image_1?>) no-repeat center;
        }

        .HeroBanner-background--three {
            background: url(<?= $image_2?>) no-repeat center;
        }

    }


</style>

<header id="HeroBanner" class="HeroBanner">
    <div class="HeroBanner-backgrounds">
        <div class="HeroBanner-background HeroBanner-background--one show"></div>
        <div class="HeroBanner-background HeroBanner-background--two"></div>
        <div class="HeroBanner-background HeroBanner-background--three"></div>
    </div>
    <div class="HeroBanner-container grid-x">
        <div class="HeroBanner-openBlock cell large-6">
            <div class="HeroBanner-openBlockOverlay"></div>
            <div class="HeroBanner-openBlockTextwrap">
				<?php include "components/01-atoms/Line/Line.php"; ?>
                <h1 class="white" itemprop="headline"><?= $h1 ?></h1>
                <p class="large"><?= $body ?></p>
            </div>
        </div>
        <a id="HeroBanner-block--two" href="<?= $url_1 ?>"
           class="HeroBanner-block HeroBanner-block--two cell medium-6 large-3"
           data-herobanner="two">
            <div class="HeroBanner-blockOverlay"></div>
            <div class="HeroBanner-blockContainer medium-text-center">
                <div class="HeroBanner-blockIcon">
                    <div class="HeroBanner-blockIconContainer"
                         style="background: url(<?= $icon_1 ?>) no-repeat center; background-size: cover; padding-top: 100%;"></div>
                </div>
                <div class="HeroBanner-blockText">
                    <h3 class="uppercase white"><?= $title_1 ?></h3>
                    <div class="HeroBanner-blockHidden">
                        <p class="HeroBanner-blockBody"><?= $intro_1 ?></p>
                        <span class="link"><?= $cta_1 ?> <span class="fas fa-caret-right"></span></span>
                    </div>
                </div>
            </div>
        </a>
        <a id="HeroBanner-block--three" href="<?= $url_2 ?>"
           class="HeroBanner-block HeroBanner-block--three cell medium-6 large-3"
           data-herobanner="three">
            <div class="HeroBanner-blockOverlay"></div>
            <div class="HeroBanner-blockContainer medium-text-center">
                <div class="HeroBanner-blockIcon">
                    <div class="HeroBanner-blockIconContainer"
                         style="background: url(<?= $icon_2 ?>) no-repeat center; background-size: cover; padding-top: 100%;"></div>
                </div>
                <div class="HeroBanner-blockText">
                    <h3 class="uppercase white"><?= $title_2 ?></h3>
                    <div class="HeroBanner-blockHidden">
                        <p class="HeroBanner-blockBody"><?= $intro_2 ?></p>
                        <span class="link"><?= $cta_2 ?> <span class="fas fa-caret-right"></span></span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</header>
<!--<script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
<script defer src="/components/03-organisms/HeroBanner/dist/HeroBanner.js?v=1.1.0"></script>
