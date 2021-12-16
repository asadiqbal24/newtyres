var $ddlTruckBrand, $ddlTruckBrandModel;
var brandTruckTyreType = 2;

function brandTruckSearch(requestUrl) {

    if ($('#doBrandSearch').val() === 'true') {
        doTruckBrandSearch(true, true);
    }

    setTruckTab(requestUrl);

    $ddlTruckBrand = $(".ddlTruckBrand");
    $ddlTruckBrandModel = $(".ddlTruckBrandModel");

    $ddlTruckBrand.change(function () {
        showMask('#searchBrandDiv');

        var value = $(this).val();

        if (isEmpty(value)) {

            $('#brandTruckSearchButton').addClass('disabled');
            $ddlTruckBrandModel.find('option').remove();
            emptyDropDownList('Model', $ddlTruckBrandModel);
            HideMask();
        }
        else {
            $('#brandTruckSearchButton').removeClass('disabled');
            var params = {
                brand: value,
                tyreType: brandTruckTyreType,
                callback: bindTruckBrandModels
            };

            SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'Brand', $(this).val());
            tyresalesapi.getPatterns(params);
        }

    });

 

    $('.ddlTruckBrandSectionWidth').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'Width', $(this).val());
    });

    $('.ddlTruckBrandAspectRatio').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'Profile', $(this).val());
    });

    $('.ddlTruckBrandRimDiameter').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'RimDiameter', $(this).val());
    });

    $('.ddlTruckBrandLoadIndex').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'LoadIndex', $(this).val());
    });

    $('.ddlTruckBrandSpeedIndex').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'SpeedIndex', $(this).val());
    });

    $('.chkTruckBrandRunFlat').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'RunFlat', 'Yes');
        }
        else {
            SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'RunFlat', 'No');
        }

        /*if ($this.data('isinternal')) {
            $("#brandTruckSearchButton").click();
        }*/
    });

    $('.chkTruckBrandEcoFriendly').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'EcoFriendly', 'Yes');
        }
        else {
            SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'EcoFriendly', 'No');
        }

        if ($this.data('isinternal')) {
            $("#brandTruckSearchButton").click();
        }
    });

    setupTruckBrandSearchButton();

    if (getParameterByNameAndURL("advanced", window.location.search) == 'true') {
        $('#searchBrandDiv').find('.advancedLink').children('a').click();
    }
}

function setTruckTab(requestUrl) {
    var urlContainsSearchParameter = getParameterByNameAndURL("brand", requestUrl);

    if (!isEmpty(urlContainsSearchParameter)) {
        $('.tabNavigation li a[href=#searchSizeDiv]').removeClass('selected');
        $('.tabNavigation li a[href=#searchBrandDiv]').addClass('selected');

        $('#searchSizeDiv').hide();
        $('#searchBrandDiv').show();
    }
}


function bindTruckBrandModels(data) {
    $ddlTruckBrandModel.find('option').remove();
    var items = [];

    items.push(('<option value="">Model</option>'));

    jQuery.each(data, function () {
        items.push('<option value="' + this.Value + '">' + this.Display + '</option>');
    });

    $ddlTruckBrandModel.append(items.join(''));

    if (hasCustomDropdowns()) {
        $ddlTruckBrandModel.resetSS();
    }

    HideMask();
}

function setupTruckBrandSearchButton() {
    $("#brandTruckSearchButton").click(function () {
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                $(".search-link").hide();
                doTruckBrandSearch(false, true);
                $('.')

            }
            else {
                doTruckBrandSearch(false, false);
                return true;
            }
        }
    });
}

function doTruckBrandSearch(isFromUrl, isInternal) {
    $('#brandTruckSearchButton').removeClass('disabled');
    //$('.freeShipping').hide();

    var modelDescription = $(".ddlTruckBrandModel option:selected").text();
    var brandDescription = $(".ddlTruckBrand option:selected").text();

    var brand = $(".ddlTruckBrand").val();
    var model = $(".ddlTruckBrandModel").val();
    var sectionWidth = $(".ddlTruckBrandSectionWidth").val();
    var aspectRatio = $(".ddlTruckBrandAspectRatio").val();
    var rimDiameter = $(".ddlTruckBrandRimDiameter").val();
    var loadIndex = $(".ddlTruckBrandLoadIndex").val();
    var speedIndex = $(".ddlTruckBrandSpeedIndex").val();
    var specification = $(".ddlTruckBrandSpecification").val();
    var runFlat = ($(".chkBrandRunFlat").find("input").is(":checked")) == true ? true : null;
    var ecoFriendly = ($(".chkBrandEcoFriendly").find("input").is(":checked")) == true ? true : null;
    
    var tyreSizeSearch = new TyreSearch();

    tyreSizeSearch.SearchType = "brandtruck";
    tyreSizeSearch.TyreType = brandTruckTyreType;
    tyreSizeSearch.Brand = brand;
    tyreSizeSearch.Pattern = model;
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
    
    var tyreSizeBrand = searchUtil.createTyreSize(sectionWidth, aspectRatio, rimDiameter);

    var paramBrandTruckSize = "";

    if (isInternal) {
        $(".searchResults span").first().html("<img alt='loading' src='/images/loading.gif' width='15px' /> <strong>Loading results</strong>");
        $("[id$=FullDetail]").hide();
        $(".resultsMod").show();

        if (!isFromUrl) {
            //var pageTitle = $(document).find("title").text();
            //History.pushState(null, pageTitle, urlString);
            $('html, body').animate({
                scrollTop: $('.resultsMod').offset().top
            }, 800);
        }

        var dealParams = {
            size: isEmpty(tyreSizeBrand) ? paramBrandTruckSize : tyreSizeBrand,
            load: loadIndex,
            speed: speedIndex,
            brand: brand,
            pattern: model,
            eco: ecoFriendly,
            runflat: runFlat,
            tyreType: brandTruckTyreType,
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
            tyreType: brandTruckTyreType,
            callback: render
        };

        tyresalesapi.searchByBrand(params);

        $("#brandSeoTag").html("<h1 style='font-size:1em; color:#fff;'>" + brand + " " + model + " Tyres</h1>");


        modelDescription = modelDescription === "Model" ? "" : (" " + modelDescription);

        var resultInfoText = brandDescription + modelDescription + "Truck Tyres";

        $('.resultsInfo').text(resultInfoText);

        $(".seobrandtag").hide();

    }
    else {
        if (brand != '') {
            $("#brandTruckSearchButton").attr("href", urlString);
        }
        return true;
    }
}