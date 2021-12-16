var $ddlOtrBrand, $ddlOtrBrandModel, $currencySelectedId;
var otrBrandTyreType = 3;

function brandOtrSearch(requestUrl) {

    if ($('#doBrandSearch').val() === 'true') {
        doOtrBrandSearch(true, true);
    }

    $currencySelectedId = $('[id$=ddlCurrency] option:selected').val();

    $ddlOtrBrand = $(".ddlOtrBrand");
    $ddlOtrBrandModel = $(".ddlOtrBrandModel");

    $ddlOtrBrand.change(function () {
        showMask('#searchBrandDiv');

        var value = $(this).val();

        if (isEmpty(value)) {
            $('#brandOtrSearchButton').addClass('disabled');
            $ddlOtrBrandModel.find('option').remove();
            emptyDropDownList('Model', $ddlOtrBrandModel);
            HideMask();
        }
        else {
            $('#brandOtrSearchButton').removeClass('disabled');
            var params = {
                brand: value,
                tyreType: otrBrandTyreType,
                callback: bindOtrBrandModels
            };

            SendGoogleAnalytics('send', 'event', 'SearchOtrByBrand', 'Brand', $(this).val());
            tyresalesapi.getPatterns(params);
        }
    });

    $('.ddlOtrBrandRimDiameter').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchOtrByBrand', 'RimDiameter', $(this).val());
    });

    $('.ddlOtrBrandDimension').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchOtrByBrand', 'Dimension', $(this).val());
    });

    $('.ddlOtrBrandTraCode').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchOtrByBrand', 'TraCode', $(this).val());
    });

    $('.ddlOtrBrandLoadIndex').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchOtrByBrand', 'LoadIndex', $(this).val());
    });

    $('.ddlOtrBrandSpeedIndex').change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchOtrByBrand', 'SpeedIndex', $(this).val());
    });

    setupOtrBrandSearchButton();

    if (getParameterByNameAndURL("advanced", window.location.search) == 'true') {
        $('#searchBrandDiv').find('.advancedLink').children('a').click();
    }
}


function bindOtrBrandModels(data) {
    $ddlOtrBrandModel.find('option').remove();
    var items = [];

    items.push(('<option value="">Model</option>'));

    jQuery.each(data, function () {
        items.push('<option value="' + this.Value + '">' + this.Display + '</option>');
    });

    $ddlOtrBrandModel.append(items.join(''));

    if (hasCustomDropdowns()) {
        $ddlOtrBrandModel.resetSS();
    }

    HideMask();
}

function setupOtrBrandSearchButton() {
    $("#brandOtrSearchButton").click(function () {
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                doOtrBrandSearch(false, true);
                $(".search-link").hide();
            }
            else {
                doOtrBrandSearch(false, false);
                return true;
            }
        }
    });
}

function doOtrBrandSearch(isFromUrl, isInternal) {
    $('#brandOtrSearchButton').removeClass('disabled');

    $currencySelectedId = $('[id$=ddlCurrency] option:selected').val();

    $('.freeShipping').hide();
   
    var modelDescription = $(".ddlOtrBrandModel option:selected").text();
    var brandDescription = $(".ddlOtrBrand option:selected").text();

    var brand = $(".ddlOtrBrand").val();
    var model = $(".ddlOtrBrandModel").val();
    var sectionWidth = $(".ddlOtrBrandSectionWidth").val();
    var rimDiameter = $(".ddlOtrBrandRimDiameter").val();
    var traCode = $(".ddlOtrBrandTraCode").val();
    var loadIndex = $(".ddlOtrBrandLoadIndex").val();
    var speedIndex = $(".ddlOtrBrandSpeedIndex").val();
    var specification = $(".ddlOtrBrandSpecification").val();

    var tyreSizeSearch = new TyreSearch();

    tyreSizeSearch.SearchType = "brandotr";
    tyreSizeSearch.CurrencyType = 1;
    tyreSizeSearch.TyreType = otrBrandTyreType;
    tyreSizeSearch.Brand = brand;
    tyreSizeSearch.Pattern = model;
    tyreSizeSearch.SectionWidth = sectionWidth;
    tyreSizeSearch.RimDiameter = rimDiameter;
    tyreSizeSearch.LoadIndex = loadIndex;
    tyreSizeSearch.SpeedIndex = speedIndex;
    tyreSizeSearch.TraCode = traCode;
    tyreSizeSearch.Specification = specification;

    var searchUtil = new Search();

    var urlString = searchUtil.searchUrl(tyreSizeSearch);

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
            currencyType: $currencySelectedId,
            size: sectionWidth + "R" + rimDiameter,
            load: null,
            speed: null,
            brand: brand,
            pattern: model,
            eco: null,
            runflat: null,
            traCode: traCode,
            tyreType: otrBrandTyreType,
            callback: renderDealOfTheDay
        }
        tyresalesapi.findDealOfTheDay(dealParams);

        var params = {
            currencyType: $currencySelectedId,
            brand: brand,
            pattern: model,
            width: sectionWidth,
            aspect: null,
            rim: rimDiameter,
            traCode: traCode,
            speed: speedIndex,
            load: loadIndex,
            runflat: null,
            eco: null,
            tyreType: otrBrandTyreType,
            callback: render
        };

        tyresalesapi.searchByBrand(params);

        $("#brandSeoTag").html("<h1 style='font-size:1em; color:#fff;'>" + brand + " " + model + " Tyres</h1>");

        modelDescription = modelDescription === "Model" ? "" : (" " + modelDescription);

        var resultInfoText = brandDescription + modelDescription + " OTR Tyres";

        $('.resultsInfo').text(resultInfoText);
        $(".seobrandtag").hide();

    }
    else {
        if (brand != '') {
            $("#brandOtrSearchButton").attr("href", urlString);
        }
        return true;
    }
}