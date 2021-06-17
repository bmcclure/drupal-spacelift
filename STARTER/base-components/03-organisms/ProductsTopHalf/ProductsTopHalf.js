import $ from 'jquery';

$(() => {
  'use strict';

  const getPriceforEach = $('#PriceForEach').html();
  const PriceForEach = parseFloat(getPriceforEach);
  // console.log(PriceForEach);
  const $TotalPrice = $('#TotalPrice');
  const $AddToCartMinus = $('#AddToCart-minus');
  const $AddToCartPlus = $('#AddToCart-plus');
  const $AddToCartInput = $('#AddToCart-input');
  const $QuantityLabel = $('#QuantityLabel');

  function UpdatePrice() {
    const NewAddtoCartInputVal = parseInt($AddToCartInput.val(), 10);

    if (NewAddtoCartInputVal < 0) {
      $AddToCartInput.val(1);
    }

    const NewTotal = ($AddToCartInput.val() * PriceForEach).toFixed(2);
    $TotalPrice.html(NewTotal);
  }

  function AddToCart(integer) {
    const AddtoCartInputValue = parseInt($AddToCartInput.val(), 10);

    if (integer < 0) {
      if (AddtoCartInputValue > 1) {
        $AddToCartInput.val(AddtoCartInputValue + integer);
        UpdatePrice();
      }
    } else {
      $AddToCartInput.val(AddtoCartInputValue + integer);
      UpdatePrice();
    }
  }

  $AddToCartMinus.click(() => {
    AddToCart(-1);
  });

  $AddToCartPlus.click(() => {
    AddToCart(1);
  });

  function delay(fn, ms) {
    let timer = 0;

    return (...args) => {
      clearTimeout(timer);
      timer = setTimeout(fn.bind(this, ...args), ms || 0);
    };
  }

  $AddToCartInput.keyup(
    delay(() => {
      if (parseInt($AddToCartInput.val(), 10) > 0) {
        UpdatePrice();
      } else {
        $AddToCartInput.val(1);
      }
    }, 800),
  );

  const $endingNumber = $('#endingNumber');
  const $startingNumber = $('#legendNumber');

  function updateQuantity() {
    const endingNumberVal = parseInt($endingNumber.val(), 10);
    const startingNumberVal = parseInt($startingNumber.val(), 10);

    if (endingNumberVal > startingNumberVal) {
      const totalQuantity = endingNumberVal - startingNumberVal + 1;
      $AddToCartInput.val(totalQuantity);
      UpdatePrice();
    } else {
      $endingNumber.val(startingNumberVal);
      const endingNumberVal2 = $endingNumber.val();
      const totalQuantity = endingNumberVal2 - startingNumberVal + 1;
      $AddToCartInput.val(totalQuantity);
      UpdatePrice();
    }
  }

  // Begin Sequential/ Non sequential, also Presets/ Custom toggle logic
  const $EndingNumberWrapper = $('#EndingNumberWrapper');
  const $NumberingSequentialStarting = $('#NumberingSequential-starting');
  const $NumberingNonSequentialUnique = $('#NumberingNonSequential-unique');

  function ifSequential() {
    // calculate the quantity
    $endingNumber.keyup(
      delay(() => {
        updateQuantity();
      }, 1500),
    );

    $startingNumber.keyup(
      delay(() => {
        updateQuantity();
      }, 1500),
    );

    // disable the add/ minus buttons
    $AddToCartInput.prop('disabled', true);
    $AddToCartMinus.prop('disabled', true).css({
      cursor: 'not-allowed',
      background: '#9fa1a4',
    });
    $AddToCartPlus.prop('disabled', true).css({
      cursor: 'not-allowed',
      background: '#9fa1a4',
    });

    // show the sequential inputs and totals info
    $EndingNumberWrapper.removeClass('hide');
    $NumberingSequentialStarting.removeClass('hide');
    $NumberingNonSequentialUnique.addClass('hide');
    $QuantityLabel.removeClass('hide');
  }

  function ifNonSequential() {
    // don't disable the manual add/subtract input
    $('#AddtoCart-input').prop('disabled', false);
    $('#AddtoCart-minus').prop('disabled', false).css({
      cursor: 'pointer',
      background: '#003d4c',
    });
    $('#AddtoCart-plus').prop('disabled', false).css({
      cursor: 'pointer',
      background: '#003d4c',
    });

    // hide sequential inputs and info
    $EndingNumberWrapper.addClass('hide');
    $NumberingSequentialStarting.addClass('hide');
    $NumberingNonSequentialUnique.removeClass('hide');
    $QuantityLabel.addClass('hide');
  }

  // If someone switches the ProductToggle between "Presets" and "Custom"
  $('input[type=radio][name=ProductType]').change(() => {
    const CustomOrStock = $(this).val();
    const $ProductPresetOptions = $('#ProductPresetOptions');
    const $ProductCustomVariableOptions = $('#ProductCustomVariableOptions');
    const $CSRCallout = $('#CSRCallout');

    if (CustomOrStock === 'custom') {
      $ProductPresetOptions.addClass('hide');
      $ProductCustomVariableOptions.removeClass('hide');
      $CSRCallout.removeClass('hide');
      ifSequential();
    } else {
      $ProductPresetOptions.removeClass('hide');
      $ProductCustomVariableOptions.addClass('hide');
      $CSRCallout.addClass('hide');
      ifNonSequential();
      $startingNumber.val('');
      $endingNumber.val('');
      $AddToCartInput.val(1);
      UpdatePrice();
    }
  });

  // If someone switches between "Sequential" and "non Sequential"
  $('input[type=radio][name=Numbering]').change(() => {
    $AddToCartInput.val(1); // Reset quantity to 1
    $startingNumber.val(''); // Reset quantity to 1
    $endingNumber.val(''); // Reset quantity to 1
    UpdatePrice(); // Update the price

    const NumberingSystemValue = $(this).val();

    if (NumberingSystemValue === 'Sequential') {
      ifSequential();
    } else {
      ifNonSequential();
    }
  });
});
