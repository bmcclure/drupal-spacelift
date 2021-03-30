import $ from 'jquery';

$(function () {
    'use strict';

    function updateFontSize(legendLine, CustomTagText) {
        legendLine.on('keyup', function () {
            var textLength = $(this).val().length;
            if (textLength > 30) {
                CustomTagText.css('font-size', '.75rem');
            } else if (textLength > 11) {
                CustomTagText.css('font-size', '1rem');
            } else if (textLength < 10) {
                CustomTagText.css('font-size', '1.5rem');
            }

        });
    };

    updateFontSize($('.legendLineOne'),  $('.CustomTag-textOne'));
    updateFontSize($('.legendLineTwo'),  $('.CustomTag-textTwo'));

    // this has been moved to AddtoCart.js because it depends on the UpdatePrice function

});


