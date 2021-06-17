import $ from 'jquery';

$(() => {
  'use strict';

  const mobileFilter = $('#ProductFilter-mobile');
  const desktopFilter = $('#ProductListingFilter-blocks');
  const movingFilter = $('#ProductFilters-wrapper');

  function moveFilterToDesktop() {
    movingFilter.appendTo(desktopFilter);
  }

  function moveFilterToMobile() {
    movingFilter.appendTo(mobileFilter);
  }

  if ($(document).width() > 640) {
    moveFilterToDesktop();
  }

  $(window).resize(() => {
    const screenSize = $(document).width();
    const desktopHeight = desktopFilter.height();
    const mobileHeight = mobileFilter.height();

    if (screenSize > 640 && desktopHeight < 1) {
      moveFilterToDesktop();
    } else if (screenSize < 641 && mobileHeight < 1) {
      moveFilterToMobile();
    }
  });
});
