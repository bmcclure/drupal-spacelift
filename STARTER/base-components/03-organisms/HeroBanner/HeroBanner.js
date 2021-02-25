import $ from 'jquery';

$(document).ready(function ($) {
    if ($(window).width() > 1023) {

        $('.HeroBanner-block').hover(

            function () {
                var image_number = $(this).attr('data-herobanner');
                // console.log(image);
                $('.HeroBanner-background--'+ image_number).addClass('show');
            },
            function () {
                var image_number = $(this).attr('data-herobanner');
                $('.HeroBanner-background--'+ image_number).removeClass('show');
            }
        );
    }

});
