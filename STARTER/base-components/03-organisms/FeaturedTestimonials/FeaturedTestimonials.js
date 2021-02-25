import $ from 'jquery';
import 'slick-carousel';
import AOS from "aos";
import lozad from 'lozad';
//
$(function () {
    'use strict';
    $('.FeaturedTestimonials .FeaturedTestimonials-slider').on('init', function (event, slick) {
        // console.log("initialized");
        AOS.init();
        const observer = lozad(); // lazy loads elements with default selector as ".lozad"
        observer.observe();
    });

    $('.FeaturedTestimonials .FeaturedTestimonials-slider').slick({
        arrows: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
    });
});

