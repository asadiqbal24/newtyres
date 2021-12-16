var $ddlBrand, $ddlBrandModel, $dllToDeliveryLocation;
var brandPassengerTyreType = 1;

function brandSearch(requestUrl) {

    if ($('#doBrandSearch').val() === 'true') {
        doBrandSearch(requestUrl, true, true);
        setActiveTab(requestUrl);
    }

    $ddlBrand = $(".ddlBrand");
    $ddlBrandModel = $(".ddlBrandModel");

    $ddlBrand.change(function () {
        showMask('#searchBrandDiv');

        var value = $(this).val();

        if (isEmpty(value)) {

            $('#brandHomeSearchButton').addClass('disabled');
            $ddlBrandModel.find('option').remove();
            emptyDropDownList('Model', $ddlBrandModel);
            HideMask();
        }
        else {
            $('#brandHomeSearchButton').removeClass('disabled');
            var params = {
                brand: value,
                tyreType: brandPassengerTyreType,
                callback: bindBrandModels
            };

            ga('send', 'event', 'SearchByBrand', 'Brand', $(this).val());
            tyresalesapi.getPatterns(params);
        }

    });

    $('.ddlBrandSectionWidth').change(function () {
        ga('send', 'event', 'SearchByBrand', 'Width', $(this).val());
    });

    $('.ddlBrandAspectRatio').change(function () {
        ga('send', 'event', 'SearchByBrand', 'Profile', $(this).val());
    });

    $('.ddlBrandRimDiameter').change(function () {
        ga('send', 'event', 'SearchByBrand', 'RimDiameter', $(this).val());
    });

    $('.ddlBrandLoadIndex').change(function () {
        ga('send', 'event', 'SearchByBrand', 'LoadIndex', $(this).val());
    });

    $('.ddlBrandSpeedIndex').change(function () {
        ga('send', 'event', 'SearchByBrand', 'SpeedIndex', $(this).val());
    });

    $('.chkBrandRunFlat').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            ga('send', 'event', 'SearchByBrand', 'RunFlat', 'Yes');
        }
        else {
            ga('send', 'event', 'SearchByBrand', 'RunFlat', 'No');
        }

        /*if ($this.data('isinternal')) {
            $("#brandSearchButton").click();
        }*/
    });

    $('.chkBrandEcoFriendly').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            ga('send', 'event', 'SearchByBrand', 'EcoFriendly', 'Yes');
        }
        else {
            ga('send', 'event', 'SearchByBrand', 'EcoFriendly', 'No');
        }

        if ($this.data('isinternal')) {
            $("#brandHomeSearchButton").click();
        }
    });

    

    setupBrandSearchButton();

    if (getParameterByNameAndURL("advanced", window.location.search) == 'true') {
        $('#searchBrandDiv').find('.advancedLink').children('a').click();
    }
}


function bindBrandModels(data) {
    $ddlBrandModel.find('option').remove();
    var items = [];

    items.push(('<option value="">Model</option>'));

    jQuery.each(data, function () {
        items.push('<option value="' + this.Value + '">' + this.Display + '</option>');
    });

    $ddlBrandModel.append(items.join(''));

    if (hasCustomDropdowns()) {
        $ddlBrandModel.resetSS();
    }

    HideMask();
}

function setupBrandSearchButton() {
    $("#brandHomeSearchButton").click(function () {
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                doBrandSearch('', false, true);

            }
            else {
                doBrandSearch('', false, false);
                return true;
            }
        }
    });
}

function doBrandSearch(url, isFromUrl, isInternal) {
    $('#brandHomeSearchButton').removeClass('disabled');

    var toDeliveryLocation = $('.toDeliveryLocation-dropdown').val();
    var brand = isFromUrl == true ? getParameterByNameAndURL("brand", url) : $(".ddlBrand").val();
    var model = isFromUrl == true ? getParameterByNameAndURL("model", url) || getParameterByNameAndURL("pattern", url) : $(".ddlBrandModel").val();

    var brandDescription = $(".ddlBrand option:selected").text();
    var modelDescription = $(".ddlBrandModel option:selected").text();

    var sectionWidth = isFromUrl == true ? getParameterByNameAndURL("width", url) : $(".ddlBrandSectionWidth").val();
    var aspectRatio = isFromUrl == true ? getParameterByNameAndURL("aspect", url) : $(".ddlBrandAspectRatio").val();
    var rimDiameter = isFromUrl == true ? getParameterByNameAndURL("rim", url) : $(".ddlBrandRimDiameter").val();
    var loadIndex = $(".ddlBrandLoadIndex").val();
    var speedIndex = $(".ddlBrandSpeedIndex").val();
    var specification = $(".ddlBrandSpecification").val();
    var runFlat = ($(".chkBrandRunFlat").find("input").is(":checked")) == true ? true : null;
    var ecoFriendly = ($(".chkBrandEcoFriendly").find("input").is(":checked")) == true ? true : null;

    var tyreSizeSearch = new TyreSearch();

    tyreSizeSearch.SearchType = "brand";
    tyreSizeSearch.Brand = brand;
    tyreSizeSearch.Pattern = model;
    tyreSizeSearch.TyreType = sizePassengerTyreType;
    tyreSizeSearch.SectionWidth = sectionWidth;
    tyreSizeSearch.AspectRatio = aspectRatio;
    tyreSizeSearch.RimDiameter = rimDiameter;
    tyreSizeSearch.LoadIndex = loadIndex;
    tyreSizeSearch.SpeedIndex = speedIndex;
    tyreSizeSearch.Runflat = runFlat;
    tyreSizeSearch.Eco = ecoFriendly;
    tyreSizeSearch.Specification = specification;

    var searchUtil = new Search();
    var urlString = searchUtil.searchUrl(tyreSizeSearch);

    if (isInternal) {
        $(".searchResults span").first().html("<img alt='loading' src='/images/loading.gif' width='15px' /> <strong>Loading results</strong>");
        $("[id$=FullDetail]").hide();
        $(".resultsMod").show();

        if (!isFromUrl) {
            var pageTitle = $(document).find("title").text();
            History.pushState(null, pageTitle, urlString);
            $('html, body').animate({
                scrollTop: $('.resultsMod').offset().top
            }, 800);
        }

        var dealParams = {
            size: sectionWidth + "/" + aspectRatio + "R" + rimDiameter,
            load: loadIndex,
            speed: speedIndex,
            brand: brand,
            pattern: model,
            eco: ecoFriendly,
            runflat: runFlat,
            toDelivery: toDeliveryLocation,
            tyreType: brandPassengerTyreType,
            callback: renderDealOfTheDay
        }
        tyresalesapi.findDealOfTheDay(dealParams);

        var params = {
            brand: brand,
            pattern: model,
            width: sectionWidth,
            aspect: aspectRatio,
            rim: rimDiameter,
            speed: speedIndex,
            load: loadIndex,
            runflat: runFlat,
            eco: ecoFriendly,
            toDelivery: toDeliveryLocation,
            tyreType: brandPassengerTyreType,
            callback: render
        };

        tyresalesapi.searchByBrand(params);

        var modelText = isEmpty(model) ? "" : modelDescription;

        $("#brandSeoTag").html("<h1 style='font-size:1em; color:#fff;'>" + brand + " " + modelText + " Tyres</h1>");
        $('.resultsInfo').text(brandDescription + " " + modelText + " Tyres");
        $(".seobrandtag").hide();

    }
    else {
        if (brand != '') {
            $("#brandHomeSearchButton").attr("href", urlString);
        }
        return true;
    }
}