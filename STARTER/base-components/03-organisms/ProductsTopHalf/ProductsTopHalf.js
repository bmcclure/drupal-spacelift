import $ from 'jquery';

$(function () {
    'use strict';
    let getPriceforEach = $('#PriceForEach').html();
    let PriceForEach = parseFloat(getPriceforEach);
    console.log(PriceForEach);
    let TotalPrice = $('#TotalPrice');
    const AddtoCartMinus = $('#AddtoCart-minus');
    const AddtoCartPlus = $('#AddtoCart-plus');
    const AddtoCartInput = $('#AddtoCart-input');

    function UpdatePrice() {
        let NewAddtoCartInputVal = parseInt(AddtoCartInput.val());
        if (NewAddtoCartInputVal < 0) {
            AddtoCartInput.val(1);
        }
        let NewTotal = (AddtoCartInput.val() * PriceForEach).toFixed(2);
        TotalPrice.html(NewTotal);
    }

    function AddToCart(integer) {
        let AddtoCartInputValue = parseInt(AddtoCartInput.val());
        if (integer < 0) {
            if (AddtoCartInputValue > 1) {
                AddtoCartInput.val(AddtoCartInputValue + integer);
                UpdatePrice();
            }
        } else {
            AddtoCartInput.val(AddtoCartInputValue + integer);
            UpdatePrice();
        }
    }

    AddtoCartMinus.click(function () {
        AddToCart(-1);
    });
    AddtoCartPlus.click(function () {
        AddToCart(1);
    });

    function delay(fn, ms) {
        let timer = 0
        return function (...args) {
            clearTimeout(timer)
            timer = setTimeout(fn.bind(this, ...args), ms || 0)
        }
    }

    AddtoCartInput.keyup(delay(function (e) {
        if (parseInt(AddtoCartInput.val()) > 0) {
            UpdatePrice();
        } else {
            AddtoCartInput.val(1);
        }
    }, 800));

    let endingNumber = $('#endingNumber');
    let startingNumber = $('#legendNumber');

    function updateQuantity() {

        let endingNumberVal = parseInt(endingNumber.val());
        let startingNumberVal = parseInt(startingNumber.val());
        if (endingNumberVal > startingNumberVal) {
            let totalQuantity = endingNumberVal - startingNumberVal + 1;
            $('#AddtoCart-input').val(totalQuantity);
            UpdatePrice();
        } else {
            endingNumber.val(startingNumberVal);
            let endingNumberVal2 = endingNumber.val();
            let totalQuantity = endingNumberVal2 - startingNumberVal + 1;
            $('#AddtoCart-input').val(totalQuantity);
            UpdatePrice();
        }
    }

    // Begin Sequential/ Non sequential, also Presets/ Custom toggle logic

    const EndingNumberWrapper = $('#EndingNumberWrapper');
    const NumberingSequentialStarting = $('#NumberingSequential-starting');
    const NumberingNonSequentialUnique = $('#NumberingNonSequential-unique');


    function ifSequential() {

        // calculate the quantity
        endingNumber.keyup(delay(function () {
            updateQuantity();
        }, 1500));

        startingNumber.keyup(delay(function () {
            updateQuantity();
        }, 1500));

        // disable the add/ minus buttons
        $('#AddtoCart-input').prop('disabled', true)
        $('#AddtoCart-minus').prop('disabled', true).css({'cursor': "not-allowed", 'background': '#9fa1a4'});
        $('#AddtoCart-plus').prop('disabled', true).css({'cursor': "not-allowed", 'background': '#9fa1a4'});

        // show the sequential inputs and totals info
        EndingNumberWrapper.removeClass('hide');
        NumberingSequentialStarting.removeClass('hide');
        NumberingNonSequentialUnique.addClass('hide');
        QuantityLabel.removeClass('hide');
    }

    function ifNonSequential() {

        // don't disable the manual add/subtract input
        $('#AddtoCart-input').prop('disabled', false);
        $('#AddtoCart-minus').prop('disabled', false).css({'cursor': "pointer", 'background': '#003d4c'});
        $('#AddtoCart-plus').prop('disabled', false).css({'cursor': "pointer", 'background': '#003d4c'});

        // hide sequential inputs and info
        EndingNumberWrapper.addClass('hide');
        NumberingSequentialStarting.addClass('hide');
        NumberingNonSequentialUnique.removeClass('hide');
        QuantityLabel.addClass('hide');
    }

    const QuantityLabel = $('#QuantityLabel');

    // If someone switches the ProductToggle between "Presets" and "Custom"
    $('input[type=radio][name=ProductType]').change(function () {
        let CustomOrStock = $(this).val();
        const ProductPresetOptions = $('#ProductPresetOptions');
        const ProductCustomVariableOptions = $('#ProductCustomVariableOptions');
        const CSRCallout = $('#CSRCallout');
        if (CustomOrStock === 'custom') {
            ProductPresetOptions.addClass('hide');
            ProductCustomVariableOptions.removeClass('hide');
            CSRCallout.removeClass('hide');
            ifSequential();
        } else {
            ProductPresetOptions.removeClass('hide');
            ProductCustomVariableOptions.addClass('hide');
            CSRCallout.addClass('hide');
            ifNonSequential();
            startingNumber.val('');
            endingNumber.val('');
            AddtoCartInput.val(1);
            UpdatePrice();
        }
    });

    // If someone switches between "Sequential" and "non Sequential"
    $('input[type=radio][name=Numbering]').change(function () {
        $('#AddtoCart-input').val(1); // Reset quantity to 1
        startingNumber.val('');// Reset quantity to 1
        endingNumber.val('');// Reset quantity to 1

        UpdatePrice(); // update the price

        let NumberingSystemValue = $(this).val();
        if (NumberingSystemValue === 'Sequential') {
            ifSequential();
        } else {
            ifNonSequential();
        }
    });

});

