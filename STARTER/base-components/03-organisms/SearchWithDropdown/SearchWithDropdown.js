// this is sitewide

import $ from 'jquery';

$(document).ready(function ($) {

    // Begin Search Dropdown display
    // Timer function lets you wait a little before displaying the dropdown
    function delay(callback, ms) {
        var timer = 0;
        return function () {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    var dropdownContainer = $('.SearchWithDropdown-container');

    dropdownContainer.each(function () {
        const input = $(this).find('.SearchWithDropdown-input');
        const searchBox = $(this).find('.SearchWithDropdown-dropdown');
        /// Show the searchBox after 500ms of the start of typing
        input.keyup(delay(function (e) {
            // console.log('Time elapsed!', this.value);
            searchBox.show();
        }, 500));
        // Hide the searchbox if you click outside of it
        $(document).on('click', function (e) {
            if (e.target.id === 'SearchWithDropdown-dropdown') {
                // nothing
            } else {
                searchBox.hide();
            }
        })

    })


    var input2 = $('#offcanvas-search');
    var searchBox2 = $('#OffcanvasSearchWithDropdown');

    /// Show the searchBox after 500ms of the start of typing
    input2.keyup(delay(function (e) {
        // console.log('Time elapsed!', this.value);
        searchBox2.show();
    }, 500));

    // Hide the searchbox if you click outside of it
    $(document).on('click', function (e) {
        if (e.target.id === 'OffcanvasSearchWithDropdown') {
            // nothing
        } else {
            searchBox2.hide();
        }
    })


});

