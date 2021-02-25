import $ from 'jquery';
import AOS from "aos";
import lozad from 'lozad';

$(function () {
    'use strict';

    var GridButton = $("#GridView");
    var ListButton = $("#ListView");
    var View = $("#ResourceResultsView");

    const observer = lozad(); // lazy loads elements with default selector as ".lozad"


    GridButton.click(function () {
        GridButton.addClass('active');
        ListButton.removeClass('active');
        View.addClass('ResourceResults-gridView');
        View.removeClass('ResourceResults-listView');

        AOS.init();
        observer.observe();
    })
    ListButton.click(function () {
        ListButton.addClass('active');
        GridButton.removeClass('active');
        View.addClass('ResourceResults-listView');
        View.removeClass('ResourceResults-gridView');

        AOS.init();
        observer.observe();

    })

    // BEGIN DELETE ME VIDEO VARIATION

    var GridButton2 = $("#GridView2");
    var ListButton2 = $("#ListView2");
    var View2 = $("#ResourceResultsView2");

    GridButton2.click(function () {
        GridButton2.addClass('active');
        ListButton2.removeClass('active');
        View2.addClass('ResourceResults-gridView');
        View2.removeClass('ResourceResults-listView');

        observer.observe();

    })
    ListButton2.click(function () {
        ListButton2.addClass('active');
        GridButton2.removeClass('active');
        View2.addClass('ResourceResults-listView');
        View2.removeClass('ResourceResults-gridView');

        observer.observe();

    })

    // END DELETE ME
});

