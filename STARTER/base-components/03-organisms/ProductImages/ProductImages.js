import $ from 'jquery';

$(() => {
  'use strict';

  const mobileProductImages = $('#ProductImages-container');
  const desktopProductImages = $('#ProductsTopHalf-imageContainer');
  const movingProductImages = $('#ProductImages');
  const movingProductImagesBreakpoint = 1024;

  function moveProductImagesToDesktop() {
    movingProductImages.appendTo(desktopProductImages);
  }

  function moveProductImagesToMobile() {
    movingProductImages.appendTo(mobileProductImages);
  }

  if ($(document).width() > movingProductImagesBreakpoint) {
    moveProductImagesToDesktop();
  }

  $(window).resize(() => {
    const screenSize = $(document).width();
    const desktopHeight = desktopProductImages.height();
    const mobileHeight = mobileProductImages.height();

    if (screenSize > movingProductImagesBreakpoint && desktopHeight < 1) {
      moveProductImagesToDesktop();
    } else if (screenSize < 641 && mobileHeight < 1) {
      moveProductImagesToMobile();
    }
  });
});
