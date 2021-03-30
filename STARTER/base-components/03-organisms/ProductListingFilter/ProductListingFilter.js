import $ from 'jquery';

$(function () {
    'use strict';
    const mobileFilter = $('#ProductFilter-mobile');
    const desktopFilter = $('#ProductListingFilter-blocks');
    const movingFilter = $('#ProductFilters-wrapper');

    function moveFilterToDesktop() {
        movingFilter.appendTo(desktopFilter);
    }

    function moveFilterToMobile() {
        movingFilter.appendTo(mobileFilter);
    }

    let screenSize = $(document).width();

    if (screenSize > 640) {
        moveFilterToDesktop();
    }

    $(window).resize(function () {
        let screenSize = $(document).width();
        let desktopHeight = desktopFilter.height();
        let mobileHeight = mobileFilter.height();

        if ((screenSize > 640) && (desktopHeight < 1)) {
            moveFilterToDesktop();
        } else if ((screenSize < 641) && (mobileHeight < 1)) {
            moveFilterToMobile();
        }
    });
});

