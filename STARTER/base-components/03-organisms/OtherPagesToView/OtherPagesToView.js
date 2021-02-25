import $ from 'jquery';
import 'slick-carousel';
import AOS from "aos";
import lozad from 'lozad';
//
$(function () {
    'use strict';

    $('.OtherPagesToView .OtherPagesToView-slider').on('init', function (event, slick) {
        // console.log("initialized");
        AOS.init();
        const observer = lozad(); // lazy loads elements with default selector as ".lozad"
        observer.observe();
    });

    $('.OtherPagesToView .OtherPagesToView-slider').slick({
        arrows: true,
        infinite: true,
        // fade: true,
        // cssEase: 'linear',
        // speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        // adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,

                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,

                }
            }
        ]

    });

});

