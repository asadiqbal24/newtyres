var $ddlOtrRimDiameter, $ddlOtrSectionWidth, $ddlOtrTraCode, $ddlOtrSpecification, $overlayMask, $currencySelectedId;
var otrSizeTyreType = 3;

function sizeOtrSearch(requestUrl) {

    if ($('#doSizeSearch').val() === 'true') {
        doOtrSizeSearch(requestUrl,true, true);
    }
    $ddlOtrSectionWidth = $(".ddlOtrSectionWidth");
    $ddlOtrRimDiameter = $(".ddlOtrRimDiameter");
    $ddlOtrTraCode = $(".ddlOtrTraCode");
    $ddlOtrSpecification = $(".ddlOtrSpecification");

    setupSizeOtrSearchButton();

    if ((getParameterByNameAndURL("searchotr", requestUrl) == "sizeotr") && (getParameterByNameAndURL("sizeotr", requestUrl) != "")) {
        checkIfOtrSearchValid();
        $("#sizeOtrSearchButton").click();
    }


    $currencySelectedId = $('[id$=ddlCurrency] option:selected').val();

    


    $ddlOtrSectionWidth.change(function () {
        showMask('#searchSizeDiv');

        var value = $(this).val();

        checkIfOtrSearchValid();

        if (isEmpty(value)) {
            emptyDropDownList('Rim', $ddlTruckRimDiameter);
            HideMask();
        } else {
            var params = {
                tyreType: otrSizeTyreType,
                sectionWidth: value,
                aspectRatio: "",
                callback: bindOtrRimDiameter
            };
            SendGoogleAnalytics('send', 'event', 'SearchTruckBySize', 'Width', value);
            tyresalesapi.getTyreRimDiameters(params);

        }
    });

    $ddlOtrRimDiameter.change(function () {
        showMask('#searchSizeDiv');

        var value = $(this).val();
        checkIfOtrSearchValid();
        if (isEmpty(value)) {
            emptyDropDownList('Width', $ddlOtrSectionWidth);
            emptyDropDownList('TRA Code', $ddlOtrTraCode);
            HideMask();

        } else {
            var params = {
                sectionWidth: $ddlOtrSectionWidth.val(),
                rimDiameter: value,
                tyreType: otrSizeTyreType,
                callback: bindTraCode
            };
            SendGoogleAnalytics('send', 'event', 'SearchOTRBySize', 'RimDiameter', value);
            tyresalesapi.getOtrTraCode(params);
        }

    });

    $ddlOtrTraCode.change(function () {
        checkIfOtrSearchValid();
        SendGoogleAnalytics('send', 'event', 'SearchOTRBySize', 'TraCode', $(this).val());
    });

    if (getParameterByNameAndURL("advanced", window.location.search) == 'true') {
        $('#searchSizeDiv').find('.advancedLink').children('a').click();
    }

}

function checkIfOtrSearchValid() {
    var $searchBtn = $("#sizeOtrSearchButton");

    if ($ddlOtrSectionWidth.val() === '' || $ddlOtrRimDiameter.val() === '') {
        $searchBtn.addClass('disabled');
    }
    else {
        $searchBtn.removeClass('disabled');
    }
}

function setupSizeOtrSearchButton() {
    $("#sizeOtrSearchButton").click(function () {
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                $(".search-link").hide();
                doOtrSizeSearch('', false, true);

            }
            else {
                doOtrSizeSearch('',false, false);
                return true;
            }
        }
        return false;
    });
}

function doOtrSizeSearch(url, isFromUrl, isInternal) {

    var searchUtil = new Search();

    $currencySelectedId = $('[id$=ddlCurrency] option:selected').val();

   $('.freeShipping').hide();
    
    var size = getParameterByNameAndURL("size", url);


    var sectionWidth = $(".ddlOtrSectionWidth").val();
    var rimDiameter = $(".ddlOtrRimDiameter").val();
    var traCode = $(".ddlOtrTraCode").val();
   
    var specification = $(".ddlOtrSpecification").val();

    if (!isEmpty(size)) {
        var tyre = searchUtil.getTyreDimensions(size);
        sectionWidth = tyre.SectionWidth;
        aspectRatio = tyre.AspectRatio;
        rimDiameter = tyre.RimDiameter;
    }


    var tyreSizeSearch = new TyreSearch();

    tyreSizeSearch.SearchType = "sizeotr";
    tyreSizeSearch.CurrencyType = 1;
    tyreSizeSearch.TyreType = otrSizeTyreType;
    tyreSizeSearch.SectionWidth = sectionWidth;
    tyreSizeSearch.RimDiameter = rimDiameter;
    tyreSizeSearch.TraCode = traCode;
    tyreSizeSearch.Specification = specification;



    var urlString = searchUtil.searchUrl(tyreSizeSearch);

    if (isInternal) {
        $("#sizeOtrSearchButton").removeClass('disabled');
        $(".searchResults").find("span").first().html("<img alt='loading' src='/images/loading.gif' width='15px' /> <strong>Loading results</strong>");
        $(".resultsMod").show();

        if (!isFromUrl) {
            // grab the current page title for reference in history state change - this is to fix issue with page title changing with page refresh (SEO issue)
            //var pageTitle = $(document).find("title").text();
            //History.pushState(null, pageTitle, urlString);
            $('html, body').animate({
                scrollTop: $('.resultsMod').offset().top
            }, 800);
        }

        var tyreSize = sectionWidth + "R" + rimDiameter;

        var paramOtrSize = "";

        // To deal with size searches coming in from tyredetails address with only a size parameter
        if ((getParameterByNameAndURL("search", url) == "sizetruck") && (getParameterByNameAndURL("sizetruck", url) != "")) {
            paramOtrSize = getParameterByNameAndURL("sizetruck", url);
        }

        var dealParams = {
            currencyType: $currencySelectedId,
            size: isEmpty(tyreSize) ? paramOtrSize : tyreSize,
            traCode: traCode,
            specification: specification,
            load: null,
            speed: null,
            sizeSearch: true,
            tyreType: otrSizeTyreType,
            callback: renderDealOfTheDay
        }
        tyresalesapi.findDealOfTheDay(dealParams);

        var params = {
            currencyType: $currencySelectedId,
            width: sectionWidth,
            aspect: "",
            rim: rimDiameter,
            traCode: traCode,
            specification: specification,
            load: "", //loadIndex,
            speed: "", // speedIndex,
            tyreType: otrSizeTyreType,
            callback: render
        };
        tyresalesapi.searchBySize(params);

        if (sectionWidth != '') {
            var searchTitle;

            searchTitle = sectionWidth + "R" + rimDiameter + " OTR Tyres";
         
            $("#sizeSeoTag").html("<h1 style='font-size:1em; color:#fff;'>" + searchTitle + "</h1>");
            $(".seosizetag").hide();
            $('.resultsInfo').text(searchTitle);
            //document.title = searchTaaitle;
        }

    }
    else {
        if (sectionWidth != '') {
            $("#sizeOtrSearchButton").attr("href", urlString);
        }

    }
}


function bindOtrRimDiameter(data) {

    $ddlOtrRimDiameter.find('option').remove();
    $ddlOtrRimDiameter.append(BuildDropDownListValueDisplay(data, 'Rim').join(''));
    //$ddlTruckSectionWidth.find('option').not(':first').remove();

    HideMask();
};

function bindTraCode(data) {

    $ddlOtrTraCode.find('option').remove();
    $ddlOtrTraCode.append(BuildDropDownListValueDisplay(data, 'TRA Code').join(''));
    //$ddlOtrTraCode.find('option').not(':first').remove();

    if (hasCustomDropdowns()) {
        $ddlOtrRimDiameter.resetSS();
        $ddlOtrTraCode.resetSS();
    }

    HideMask();
}

