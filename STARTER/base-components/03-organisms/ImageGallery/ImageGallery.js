import $ from 'jquery';
import 'slick-carousel';
import AOS from "aos";
import lozad from 'lozad';
//
$(function () {
    'use strict';
//
//     // Slick sliders
//
    $('.ImageGallery .ImageGallery-slider').on('init', function (event, slick) {
        // console.log("initialized");
        AOS.init();
        const observer = lozad(); // lazy loads elements with default selector as ".lozad"
        observer.observe();
    });

    $('.ImageGallery .ImageGallery-slider').slick({
        arrows: true,
        infinite: true,
        // fade: true,
        // cssEase: 'linear',
        // speed: 500,
        slidesToShow: 2,
        slidesToScroll: 1,
        // adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,

                }
            }
        ]

    });

});
