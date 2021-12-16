var $ddlOtrRimDiameter;
var $ddlOtrSectionWidth;
var $ddlOtrTraCode;
var $ddlOtrSpecification;
var $ddlOtrBrand;
var $ddlOtrBrandModel;
var $overlayMask;
var $currencySelectedId;

$(document).ready(function () {

    history.replaceState({urlPath: document.location.href },"", document.location.href)

    $ddlOtrSectionWidth = $(".ddlOtrSectionWidth");
    $ddlOtrRimDiameter = $(".ddlOtrRimDiameter");
    $ddlOtrTraCode = $(".ddlOtrTraCode");
    $ddlOtrSpecification = $(".ddlOtrSpecification");
    $currencySelectedId = $('[id$=ddlCurrency] option:selected').val();
    $ddlOtrBrand = $(".ddlOtrBrand");
    $ddlOtrBrandModel = $(".ddlOtrBrandModel");

    SearchOtrService.SetupSizeSearchControls();
    SearchOtrService.SetupBrandSearchControls();

});

//function confirmSubmit(searchType) {
//    var listofSelected = $form.find("select option:selected");
    
//    for (var index = 0; index < listofSelected.length; ++index) {
//        var elementSelected = listofSelected[index];
//        var elementValue = elementSelected.value;

//        if (isEmpty(elementValue)) {
//            listofSelected[index].disabled = true;
//        }
//    }

//    var categoriesHidden = $('#categories');
//    var categoriesArray = [];

//    var listofFiltersCheckBoxes = $('.search-filter').find("input:checkbox");

//    for (var indexCheck = 0; indexCheck < listofFiltersCheckBoxes.length; ++indexCheck) {

//        var elementCheckSelected = listofFiltersCheckBoxes[indexCheck];
//        var elementCheckValue = elementCheckSelected.checked;
//        var elementCheckData = elementCheckSelected.value;

//        if (isEmpty(elementCheckValue) || elementCheckValue === false) {
//            listofFiltersCheckBoxes[indexCheck].disabled = true;
//        } else {
//            if (elementCheckSelected.checked) {

//                categoriesArray.push(elementCheckData);
//                elementCheckSelected.value = true;
//            }
//        }
//    }

//    if (categoriesArray.length > 0) {
//        categoriesHidden.val(categoriesArray);
//    }

        

    

//    //var listofCheckBoxes = $form.find("input:checkbox");

//    //for (var indexCheck = 0; indexCheck < listofCheckBoxes.length; ++indexCheck) {

//    //    var elementCheckSelected = listofCheckBoxes[indexCheck];
//    //    var elementCheckValue = elementCheckSelected.checked;

//    //    if (isEmpty(elementCheckValue) || elementCheckValue === false) {
//    //        listofCheckBoxes[indexCheck].disabled = true;
//    //    } else {
//    //        if (elementCheckSelected.checked) {
//    //            elementCheckSelected.value = true;
//    //        }
//    //    }
//    //}
    
//    if (searchType.toLowerCase() !== "vehicle") {
//        $ddlYear.attr("disabled", true);
//        $ddlMake.attr("disabled", true);
//        $ddlModel.attr("disabled", true);
//        $ddlSeries.attr("disabled", true);

//        var listofVehicleRadioBoxes = $form.find("input:radio");

//        for (var indexRadio = 0; indexRadio < listofVehicleRadioBoxes.length; ++indexRadio) {
//            listofVehicleRadioBoxes[indexRadio].disabled = true;
//        }
//    }

//    if (searchType.toLowerCase() !== "brand") {
//        $ddlBrand.attr("disabled", true);
//        $ddlBrandModel.attr("disabled", true);
//        $ddlBrandSectionWidth.attr("disabled", true);
//        $ddlBrandAspectRatio.attr("disabled", true);
//        $ddlBrandRimDiameter.attr("disabled", true);

//        $ddlBrandLoadIndex.attr("disabled", true);
//        $ddlBrandSpeedIndex.attr("disabled", true);
//        $chkBrandRunFlat.attr("disabled", true);
//    }

//    if (searchType.toLowerCase() !== "size") {
//        $ddlSectionWidth.attr("disabled", true);
//        $ddlAspectRatio.attr("disabled", true);
//        $ddlRimDiameter.attr("disabled", true);

//        $ddlLoadIndex.attr("disabled", true);
//        $ddlSpeedIndex.attr("disabled", true);
//        $chkRunFlat.attr("disabled", true);
//    }

//    $("#search").val(searchType);

//    return false;
//}

//function vehicleSearchOptionSize(buttonId) {
//    confirmSubmit("vehicle");

//    $form.submit();
//}

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