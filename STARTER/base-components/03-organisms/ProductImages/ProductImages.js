import $ from 'jquery';

$(function () {
    'use strict';
    const mobileProductImages = $('#ProductImages-container');
    const desktopProductImages = $('#ProductsTopHalf-imageContainer');
    const movingProductImages = $('#ProductImages');

    const movingProductImagesBreakpoint = 1024;

    function moveProductImagesToDesktop() {
        movingProductImages.appendTo(desktopProductImages);
    }

    function moveProductImagesToMobile() {
        movingProductImages.appendTo(mobileProductImages);
    }

    let screenSize = $(document).width();

    if (screenSize > movingProductImagesBreakpoint) {
        moveProductImagesToDesktop();
    }

    $(window).resize(function () {
        let screenSize = $(document).width();
        let desktopHeight = desktopProductImages.height();
        let mobileHeight = mobileProductImages.height();

        if ((screenSize > movingProductImagesBreakpoint) && (desktopHeight < 1)) {
            moveProductImagesToDesktop();
        } else if ((screenSize < 641) && (mobileHeight < 1)) {
            moveProductImagesToMobile();
        }
    });
});


