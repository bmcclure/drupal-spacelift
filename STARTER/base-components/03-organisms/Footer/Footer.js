// this is sitewide

import $ from 'jquery';

$(document).ready(function ($) {

    function adjustFooterAccordion() {
        var width = $(window).width();
        var footerMenu = $('#FooterAccordionMenu');

        if (width > 640) {
            footerMenu.foundation('_destroy');
        } else {
        }
    }

    adjustFooterAccordion(); // run on screen load

    $(window).resize(function () { // run when resized
        adjustFooterAccordion();
    });
});

