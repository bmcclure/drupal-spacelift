import $ from 'jquery';
import 'slick-carousel';
import AOS from "aos";
import lozad from 'lozad';
//
$(function () {
    'use strict';

    var medium = 640;
    var large = 1024;

    $('.FeaturedCaseStudies-slider').on('init', function (event, slick) {
        // console.log("initialized");
        AOS.init();
        const observer = lozad(); // lazy loads elements with default selector as ".lozad"
        observer.observe();
    });

    $('.FeaturedCaseStudies-slider').slick({
        arrows: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: large,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: medium,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});

