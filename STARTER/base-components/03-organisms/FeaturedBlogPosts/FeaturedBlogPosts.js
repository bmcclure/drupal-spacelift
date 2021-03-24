import $ from 'jquery';
import 'slick-carousel';
import AOS from "aos";
import lozad from 'lozad';
//
$(function () {
    'use strict';

    var medium = 640;

    function initFeaturedBlogSlider() {
        $('.FeaturedBlogPosts-slider').on('init', function (event, slick) {
            // console.log("initialized");
            AOS.init();
            const observer = lozad(); // lazy loads elements with default selector as ".lozad"
            observer.observe();
        });

        $('.FeaturedBlogPosts-slider').slick({
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }

    if (window.innerWidth < medium) {
        if (!$('.slider').hasClass('slick-initialized')) {
            initFeaturedBlogSlider();
        }

    }
    $(window).resize(function (e) {
        if (window.innerWidth < medium) {
            if (!$('.slider').hasClass('slick-initialized')) {
                initFeaturedBlogSlider();
            }

        } else {
            if ($('.FeaturedBlogPosts-slider').hasClass('slick-initialized')) {
                $('.FeaturedBlogPosts-slider').slick('unslick');
            }
        }
    });

});

