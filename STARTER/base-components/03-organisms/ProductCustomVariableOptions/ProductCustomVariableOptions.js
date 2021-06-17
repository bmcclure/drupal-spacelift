import $ from 'jquery';

$(() => {
  'use strict';

  function updateFontSize(legendLine, CustomTagText) {
    legendLine.on('keyup', (e) => {
      const textLength = $(e.currentTarget).val().length;

      if (textLength > 30) {
        CustomTagText.css('font-size', '0.75rem');
      } else if (textLength > 11) {
        CustomTagText.css('font-size', '1rem');
      } else if (textLength < 10) {
        CustomTagText.css('font-size', '1.5rem');
      }
    });
  }

  updateFontSize($('.legendLineOne'), $('.CustomTag-textOne'));
  updateFontSize($('.legendLineTwo'), $('.CustomTag-textTwo'));
});
