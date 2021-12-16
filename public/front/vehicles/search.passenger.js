var $ddlBrand;
var $ddlBrandModel;
var $ddlBrandSectionWidth;
var $ddlBrandAspectRatio;
var $ddlBrandRimDiameter;
var $ddlSectionWidth;
var $ddlAspectRatio;
var $ddlRimDiameter;
var $ddlLoadIndex;
var $ddlSpeedIndex;
var $ddlYear;
var $ddlMake;
var $ddlModel;
var $ddlSeries;
var $ddlBrandLoadIndex;
var $ddlBrandSpeedIndex;

var $chkBrandRunFlat;
var $chkRunFlat;

var $vehicleSearchButton;
var $form;

var sizePassengerTyreType = 1;

var searchSourceFrom =
    {
        NORMAL: 1,
        REFINE: 2
    };



SearchPassengerService.SetupFormSubmitButtons();
SearchPassengerService.SetupFormResetButtons();

$(document).ready(function () {
    history.replaceState({ urlPath: document.location.href }, "", document.location.href)

    $ddlSectionWidth = $(".ddlSectionWidth");
    $ddlAspectRatio = $(".ddlAspectRatio");
    $ddlRimDiameter = $(".ddlRimDiameter");
    $ddlLoadIndex = $(".ddlLoadIndex");
    $ddlSpeedIndex = $(".ddlSpeedIndex");
    $ddlBrand = $(".ddlBrand");
    $ddlBrandModel = $(".ddlBrandModel");
    $ddlBrandSectionWidth = $(".ddlBrandSectionWidth");
    $ddlBrandAspectRatio = $(".ddlBrandAspectRatio");
    $ddlBrandRimDiameter = $(".ddlBrandRimDiameter");
    $ddlYear = $(".ddlYear");
    $ddlMake = $(".ddlMake");
    $ddlModel = $(".ddlModel");
    $ddlSeries = $(".ddlSeries");
    $ddlBrandLoadIndex = $(".ddlBrandLoadIndex");
    $ddlBrandSpeedIndex = $(".ddlBrandSpeedIndex");

    $chkRunFlat = $(".chkRunFlat");
    $chkBrandRunFlat = $(".chkBrandRunFlat");

    $vehicleSearchButton = $("#vehicleSearchButton");

    $form = $("form.search-form");

    SearchPassengerService.SetupFormDropDownLists();
    SearchPassengerService.SetupTyrePanelViewTyreButton();
    SearchPassengerService.SetupSizeSearchControls();
    SearchPassengerService.SetupVehicleControls();
    SearchPassengerService.SetupBrandSearchControls();

    var categoryCollapseButton = document.getElementById('categoryCollapseButton');
    var brandsCollapseButton = document.getElementById('brandsCollapseButton');

    if (!isEmpty(categoryCollapseButton) && !isEmpty(brandsCollapseButton)) {
        categoryCollapseButton.addEventListener("click", updateCollapseCategory);
        brandsCollapseButton.addEventListener("click", updateCollapseBrands);
    }

});

function confirmSubmit(searchType) {

    buildSubmitForm(searchType, true, searchSourceFrom.NORMAL);

    return false;
}

function buildSubmitForm(searchType, resetFilters, searchFrom) {

    var listofSelected = $form.find("select option:selected");

    for (var index = 0; index < listofSelected.length; ++index) {
        var elementSelected = listofSelected[index];
        var elementValue = elementSelected.value;

        if (isEmpty(elementValue)) {
            listofSelected[index].disabled = true;
        }
    }

    // Category Filter
    var categoriesHidden = $('#categories');
    var brandFiltersHidden = $('#brands');
    var designedForVehicleMakeFilterHidden = $("#designedforvehiclemakes");
    // Price Filter
    var priceFromHidden = $('#pricefrom');
    var priceToHidden = $('#priceto');
    var selectedPriceFrom = $('#SelectedPriceFrom');
    var selectedPriceTo = $('#SelectedPriceTo');
    var promotionHasHidden = $('#promotion');
    var selectedPromotion = $('#SelectedHasPromotion');
    var runFlatHasHidden = $('#runflat');
    var selectedRunFlat = $('#SelectedHasRunFlat');
    //var $chkRunFlat = $("#chkBrandRunFlat");
    var promoHiddenField = $("#p");
    var promoId = $('#PromoId');
    if (promoId.prop('checked')) {
        promoHiddenField.val(promoId.val());
    } else {
        promoHiddenField.val('');
    }

    if (resetFilters == true) {

        categoriesHidden.attr("disabled", true);
        priceFromHidden.attr("disabled", true);
        priceToHidden.attr("disabled", true);
        promotionHasHidden.attr("disabled", true);
        if (searchFrom == searchSourceFrom.NORMAL) {
            if (searchType == 'size') {
                if ($chkRunFlat.is(':checked')) {
                    $chkRunFlat.val(true);
                    runFlatHasHidden.val(true);
                } else {
                    $chkRunFlat.val(false);
                    runFlatHasHidden.val(false);
                    $chkRunFlat.attr("disabled", true);
                }
            }

            if (searchType == 'brand') {
                if ($chkBrandRunFlat.is(':checked')) {
                    $chkBrandRunFlat.val(true);
                    runFlatHasHidden.val(true);
                } else {
                    $chkBrandRunFlat.val(false);
                    runFlatHasHidden.val(false);
                    $chkBrandRunFlat.attr("disabled", true);
                }
            }
        } else {
            runFlatHasHidden.attr("disabled", true);
        }
        brandFiltersHidden.attr("disabled", true);
        designedForVehicleMakeFilterHidden.attr("disabled", true);
        selectedPriceFrom.val(null);
        selectedPriceTo.val(null);

    } else {

        // Category Filter
        var listCategoryFiltersCheckBoxes = $('.filter-categories').find("input:checkbox");

        var categoriesArray = GetArrayOfCheckBoxes(listCategoryFiltersCheckBoxes);

        if (categoriesArray.length > 0) {
            categoriesHidden.val(categoriesArray);
        } else {
            categoriesHidden.attr("disabled", true);
        }

        // designed for vehicle make Filter
        // Category Filter
        var listDesignedForVehicleMakeFiltersCheckBoxes = $('.filter-designedForVehicleMake').find("input:checkbox");

        var designedForVehicleMakeArray = GetArrayOfCheckBoxes(listDesignedForVehicleMakeFiltersCheckBoxes);

        if (designedForVehicleMakeArray.length > 0) {
            designedForVehicleMakeFilterHidden.val(designedForVehicleMakeArray);
        } else {
            designedForVehicleMakeFilterHidden.attr("disabled", true);
        }

        // Price Filter
        priceFromHidden.val(selectedPriceFrom.val());
        priceToHidden.val(selectedPriceTo.val());

        if (isEmpty(selectedPriceFrom.val()) || selectedPriceFrom.val() == "null") {
            priceFromHidden.attr("disabled", true);
        }

        if (isEmpty(selectedPriceTo.val()) || selectedPriceTo.val() == "null") {
            priceToHidden.attr("disabled", true);
        }

        // Promotion Filter
        var selectedPromotionValue = selectedPromotion.is(':checked');
        //var selectedPromotionData = selectedPromotion.value;

        if (isEmpty(selectedPromotionValue)) {
            promotionHasHidden.attr("disabled", true);
        } else {
            promotionHasHidden.val(selectedPromotionValue);
        }


        if (searchFrom == searchSourceFrom.NORMAL) {

            if ($chkRunFlat.is(':checked')) {
                $chkRunFlat.val(true);
                runFlatHasHidden.val(true);
            } else {
                $chkRunFlat.attr("disabled", true);
                runFlatHasHidden.attr("disabled", true);
            }

            if ($chkBrandRunFlat.is(':checked')) {
                $chkBrandRunFlat.val(true);
                runFlatHasHidden.val(true);
            } else {
                $chkBrandRunFlat.attr("disabled", true);
                runFlatHasHidden.attr("disabled", true);
            }

        } else {
            var selectedRunFlatValue = selectedRunFlat.is(':checked');
            if (isEmpty(selectedRunFlatValue)) {
                runFlatHasHidden.attr("disabled", true);
                $chkRunFlat.val(false);
                $chkBrandRunFlat.val(false);
            } else {
                runFlatHasHidden.val(selectedRunFlatValue);
                $chkRunFlat.val(selectedRunFlatValue);
                $chkBrandRunFlat.val(selectedRunFlatValue);
            }
        }

        // Brand Filters
        var listBrandFiltersCheckBoxes = $('.filter-brands').find("input:checkbox");

        var brandsArray = GetArrayOfCheckBoxes(listBrandFiltersCheckBoxes);

        if (brandsArray.length > 0) {
            brandFiltersHidden.val(brandsArray);
        } else {
            brandFiltersHidden.attr("disabled", true);
        }

    }

    if (searchType.toLowerCase() !== "vehicle") {
        $ddlYear.attr("disabled", true);
        $ddlMake.attr("disabled", true);
        $ddlModel.attr("disabled", true);
        $ddlSeries.attr("disabled", true);

        var listofVehicleRadioBoxes = $form.find("input:radio");

        for (var indexRadio = 0; indexRadio < listofVehicleRadioBoxes.length; ++indexRadio) {
            listofVehicleRadioBoxes[indexRadio].disabled = true;
        }
    }

    if (searchType.toLowerCase() !== "brand") {
        $ddlBrand.attr("disabled", true);
        $ddlBrandModel.attr("disabled", true);
        $ddlBrandSectionWidth.attr("disabled", true);
        $ddlBrandAspectRatio.attr("disabled", true);
        $ddlBrandRimDiameter.attr("disabled", true);
        $chkRunFlat.attr("disabled", true);
        $ddlBrandLoadIndex.attr("disabled", true);
        $ddlBrandSpeedIndex.attr("disabled", true);
        $chkBrandRunFlat.attr("disabled", true);
    }

    if (searchType.toLowerCase() !== "size") {
        $ddlSectionWidth.attr("disabled", true);
        $ddlAspectRatio.attr("disabled", true);
        $ddlRimDiameter.attr("disabled", true);
        $chkBrandRunFlat.attr("disabled", true);
        $ddlLoadIndex.attr("disabled", true);
        $ddlSpeedIndex.attr("disabled", true);
        $chkRunFlat.attr("disabled", true);
    }

    $("#search").val(searchType);
}


function GetArrayOfCheckBoxes(listOfCheckBoxes) {

    var checkBoxArray = [];

    for (var indexCheck = 0; indexCheck < listOfCheckBoxes.length; ++indexCheck) {

        var elementCheckSelected = listOfCheckBoxes[indexCheck];
        var elementCheckValue = elementCheckSelected.checked;
        var elementCheckData = elementCheckSelected.value;

        if (isEmpty(elementCheckValue) || elementCheckValue === false) {
            listOfCheckBoxes[indexCheck].disabled = true;
        } else {
            if (elementCheckSelected.checked) {

                checkBoxArray.push(elementCheckData);
                elementCheckSelected.value = true;
            }
        }
    }

    return checkBoxArray;
}

function searchFilter() {

    buildSubmitForm(SearchPassengerService.GetActiveTabSeachType(), false, searchSourceFrom.REFINE);

    $form.submit();
}

function resetFilter() {
    buildSubmitForm(SearchPassengerService.GetActiveTabSeachType(), true);

    $form.submit();
}

function vehicleSearchOptionSize(buttonId) {
    confirmSubmit("vehicle");

    $form.submit();
}



function updateCollapseCategory() {

    var buttonId = '#categoryCollapseButton';
    var collapseId = '#tyrecategorycollapse';

    var iconClass = $(buttonId).find('.glyphicon');

    if ($(collapseId).css('display') == 'none') {
        iconClass.removeClass('glyphicon-chevron-down');
        iconClass.addClass('glyphicon-chevron-up');
    } else {
        iconClass.removeClass('glyphicon-chevron-up');
        iconClass.addClass('glyphicon-chevron-down');

    }
}

function updateCollapseBrands() {

    var buttonId = '#brandsCollapseButton';
    var collapseId = '#brandscollapse';

    var iconClass = $(buttonId).find('.glyphicon');

    if ($(collapseId).css('display') == 'none') {
        iconClass.removeClass('glyphicon-chevron-down');
        iconClass.addClass('glyphicon-chevron-up');
    } else {
        iconClass.removeClass('glyphicon-chevron-up');
        iconClass.addClass('glyphicon-chevron-down');

    }
}


//var makeRadiosDeselectableByName = function (name) {

//    var $inputByName = $("input[name=" + name + "]");

//    $inputByName.click(function () {

//        var $this = $(this);

//        if ($this.attr("previousValue") === "true") {
//            $this.attr("checked", false);
//        } else {
//            $inputByName.attr("previousValue", false);
//        }

//        $this.attr("previousValue", $this.attr("checked"));
//    });
//};