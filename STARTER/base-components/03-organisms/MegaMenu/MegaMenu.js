import $ from 'jquery';
//
$(function () {
    'use strict';

    const allMenus = $('.is-MegaMenu');
    $(".is-MegaMenu").each(function () {
        let parent = $(this);
        $(this).children('a').on("click", function (e) {
            e.preventDefault();

            if (parent.hasClass('show-MegaMenu')) {
                parent.removeClass('show-MegaMenu');
            } else {
                allMenus.removeClass('show-MegaMenu');
                parent.addClass('show-MegaMenu');
            }

        });
    });

    // Hide the Menus if you click outside of it
    $(document).on("click", function (event) {
        // If the target is not the container or a child of the container, then process
        // the click event for outside of the container.
        if ($(event.target).closest("#Header-mainNav").length === 0) {
            allMenus.removeClass('show-MegaMenu');
        }
    });
});


