var $ddlTruckBrand;
var $ddlTruckBrandModel;
var $ddlTruckBrandSectionWidth;
var $ddlTruckBrandAspectRatio;
var $ddlTruckBrandRimDiameter;
var $ddlTruckSectionWidth;
var $ddlTruckAspectRatio;
var $ddlTruckRimDiameter;
var $ddlTruckLoadIndex;
var $ddlTruckSpeedIndex;
var $ddlTruckBrandLoadIndex;
var $ddlTruckBrandSpeedIndex;
var $ddlTruckPosition;

var sizeTruckTyreType = 2;

$(document).ready(function () {

    history.replaceState({urlPath: document.location.href },"", document.location.href)

    $ddlTruckBrand = $(".ddlTruckBrand");
    $ddlTruckBrandModel = $(".ddlTruckBrandModel");
    $ddlTruckBrandSectionWidth = $(".ddlTruckBrandSectionWidth");
    $ddlTruckBrandAspectRatio = $(".ddlTruckBrandAspectRatio");
    $ddlTruckBrandRimDiameter = $(".ddlTruckBrandRimDiameter");

    $ddlTruckSectionWidth = $(".ddlTruckSectionWidth");
    $ddlTruckAspectRatio = $(".ddlTruckAspectRatio");
    $ddlTruckRimDiameter = $(".ddlTruckRimDiameter");
   

    $ddlTruckLoadIndex = $(".ddlTruckLoadIndex");
    $ddlTruckSpeedIndex = $(".ddlTruckSpeedIndex");
    $ddlTruckPosition = $(".ddlTruckPosition");

    SearchTruckService.SetupSizeSearchControls();
    SearchTruckService.SetupBrandSearchControls();
});