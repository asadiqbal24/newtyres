var $ddlTruckSectionWidth, $ddlTruckAspectRatio, $ddlTruckRimDiameter, $ddlTruckLoadIndex, $ddlTruckSpeedIndex, $ddlTruckPosition;
var sizeTruckTyreType = 2;

function sizeTruckSearch(requestUrl) {
    
    //$("#sizeTruckSearchButton").click(function () {
    //    doTruckSizeSearch(null, false, true);
    //});

    if ($('#doSizeSearch').val() === 'true') {
        doTruckSizeSearch(requestUrl, true, true);
    };

    $ddlTruckSectionWidth = $(".ddlTruckSectionWidth");
    $ddlTruckAspectRatio = $(".ddlTruckAspectRatio");
    $ddlTruckRimDiameter = $(".ddlTruckRimDiameter");
    $ddlTruckLoadIndex = $(".ddlTruckLoadIndex");
    $ddlTruckSpeedIndex = $(".ddlTruckSpeedIndex");
    $ddlTruckPosition = $(".ddlTruckPosition");

    setupTruckSizeSearchButton();

    if ((getParameterByNameAndURL("search", requestUrl) == "sizetruck") && (getParameterByNameAndURL("sizetruck", requestUrl) != "")) {
        checkTruckIfSearchValid();
        $("#sizeTruckSearchButton").click();
    };

    $ddlTruckSectionWidth.change(function () {
        showMask('#searchSizeDiv');

        var value = $(this).val();

        checkTruckIfSearchValid();

        if (isEmpty(value)) {
            emptyDropDownList('Profile', $ddlTruckAspectRatio);
            emptyDropDownList('Rim', $ddlTruckRimDiameter);
            HideMask();
        } else {
            var params = {
                tyreType: sizeTruckTyreType,
                sectionWidth: value,
                callback: bindTruckAspectRatio
            };
            SendGoogleAnalytics('send', 'event', 'SearchTruckBySize', 'Width', value);
            tyresalesapi.getTyreAspectRatios(params);

        }
    });

    $ddlTruckAspectRatio.change(function () {
        showMask('#searchSizeDiv');

        var value = $(this).val();

        checkTruckIfSearchValid();

        if (isEmpty(value)) {
            emptyDropDownList('Rim', $ddlTruckRimDiameter);
            HideMask();
        } else {
            var params = {
                tyreType: sizeTruckTyreType,
                sectionWidth: $ddlTruckSectionWidth.val(),
                aspectRatio: value,
                callback: bindTruckRimDiameter
            };
            SendGoogleAnalytics('send', 'event', 'SearchTruckBySize', 'Profile', value);
            tyresalesapi.getTyreRimDiameters(params);

        }
    });

    $ddlTruckRimDiameter.change(function () {
        checkTruckIfSearchValid();
        SendGoogleAnalytics('send', 'event', 'SearchBySize', 'RimDiameter', $(this).val());
    });

    $ddlTruckLoadIndex.change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchBySize', 'LoadIndex', $(this).val());
    });

    $ddlTruckSpeedIndex.change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchBySize', 'SpeedIndex', $(this).val());
    });

    $ddlTruckPosition.change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchBySize', 'Position', $(this).val());
    });

    $('.chkRunFlat').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'RunFlat', 'Yes');
        }
        else {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'RunFlat', 'No');
        }

        /*if ($this.data('isinternal')) {
            $("#sizeTruckSearchButton").click();
        }*/
    });

    $('.chkEcoFriendly').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'EcoFriendly', 'Yes');
        }
        else {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'EcoFriendly', 'No');
        }

        /*if ($this.data('isinternal')) {
            $("#sizeTruckSearchButton").click();
        }*/
    });

    if (getParameterByNameAndURL("advanced", window.location.search) == 'true') {
        $('#searchSizeDiv').find('.advancedLink').children('a').click();
    };

}

function checkTruckIfSearchValid() {
    var $searchBtn = $("#sizeTruckSearchButton");

    if ($ddlTruckSectionWidth.val() === '' || $ddlTruckAspectRatio.val() === '' || $ddlTruckRimDiameter.val() === '') {
        $searchBtn.addClass('disabled');
    }
    else {
        $searchBtn.removeClass('disabled');
    }
}

function setupTruckSizeSearchButton() {
    $("#sizeTruckSearchButton").click(function (e) {
        
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                doTruckSizeSearch('', false, true);

                $(".search-link").hide();
            }
            else {
                //doTruckSizeSearch('',false, false);
                //return true;

                var sectionWidth = $(".ddlTruckSectionWidth").val();
                var aspectRatio = $(".ddlTruckAspectRatio").val();
                var rimDiameter = $(".ddlTruckRimDiameter").val();
                var position = $(".ddlTruckPosition").val();

                var tyreSizeSearch = new TyreSearch();

                tyreSizeSearch.SearchType = "sizetruck";
                tyreSizeSearch.TyreType = sizeTruckTyreType;
                tyreSizeSearch.SectionWidth = sectionWidth;
                tyreSizeSearch.AspectRatio = aspectRatio;
                tyreSizeSearch.RimDiameter = rimDiameter;
                tyreSizeSearch.Position = position;

                var searchUtil = new Search();

                var urlString = searchUtil.searchUrl(tyreSizeSearch);

                window.location = urlString;

                doTruckSizeSearch('', true, false);
            }
        }
        return false;
    });
}

function doTruckSizeSearch(url, isFromUrl, isInternal) {

    //$('.freeShipping').hide();

    var searchUtil = new Search();

    var size = getParameterByNameAndURL("size", url);

    var sectionWidth = isFromUrl == true ? getParameterByNameAndURL("width", url) : $(".ddlTruckSectionWidth").val();
    var aspectRatio = isFromUrl == true ? getParameterByNameAndURL("aspect", url) : $(".ddlTruckAspectRatio").val();
    var rimDiameter = isFromUrl == true ? getParameterByNameAndURL("rim", url) : $(".ddlTruckRimDiameter").val();
    var position = isFromUrl == true ? getParameterByNameAndURL("position", url) : $(".ddlTruckPosition").val();
    var loadIndex = $(".ddlTruckLoadIndex").val();
    var speedIndex = $(".ddlTruckSpeedIndex").val();
    var runFlat = ($(".chkTruckRunFlat").find("input").is(":checked")) == true ? true : null;
    var ecoFriendly = ($(".chkTruckEcoFriendly").find("input").is(":checked")) == true ? true : null;


    if (!isEmpty(size)) {
        var tyre = searchUtil.getTyreDimensions(size);
        sectionWidth = tyre.SectionWidth;
        aspectRatio = tyre.AspectRatio;
        rimDiameter = tyre.RimDiameter;
    }


    var tyreSizeSearch = new TyreSearch();

    tyreSizeSearch.SearchType = "sizetruck";
    tyreSizeSearch.TyreType = sizeTruckTyreType;
    tyreSizeSearch.SectionWidth = sectionWidth;
    tyreSizeSearch.AspectRatio = aspectRatio;
    tyreSizeSearch.RimDiameter = rimDiameter;
    tyreSizeSearch.LoadIndex = loadIndex;
    tyreSizeSearch.SpeedIndex = speedIndex;
    tyreSizeSearch.Runflat = runFlat;
    tyreSizeSearch.Eco = ecoFriendly;
    tyreSizeSearch.Position = position;

    
    var urlString = searchUtil.searchUrl(tyreSizeSearch);

    if (isInternal) {
        $("#sizeTruckSearchButton").removeClass('disabled');
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


        var tyreSize = searchUtil.createTyreSize(sectionWidth, aspectRatio, rimDiameter);

        var paramTruckSize = "";

        // To deal with size searches coming in from tyredetails address with only a size parameter
        if ((getParameterByNameAndURL("search", url) == "sizetruck") && (getParameterByNameAndURL("sizetruck", url) != "")) {
            paramTruckSize = getParameterByNameAndURL("sizetruck", url);
        }


        var dealParams = {
            size: isEmpty(tyreSize) ? paramTruckSize : tyreSize,
            load: loadIndex,
            speed: speedIndex,
            eco: ecoFriendly,
            runflat: runFlat,
            position: position,
            sizeSearch: true,
            tyreType: sizeTruckTyreType,
            callback: renderDealOfTheDay
        }
        tyresalesapi.findDealOfTheDay(dealParams);

        var params = {
            width: sectionWidth,
            aspect: aspectRatio,
            rim: rimDiameter,
            speed: speedIndex,
            load: loadIndex,
            runflat: runFlat,
            eco: ecoFriendly,
            position:position,
            tyreType: sizeTruckTyreType,
            callback: render
        };
        tyresalesapi.searchBySize(params);

        if (sectionWidth != '') {
            var searchTitle;
            if (aspectRatio == 0) {
                searchTitle = sectionWidth + "R" + rimDiameter + " " + loadIndex + speedIndex + " Truck Tyres";
            }
            else {
                searchTitle = sectionWidth + "/" + aspectRatio + "R" + rimDiameter + " " + loadIndex + speedIndex + " Truck Tyres";
            }
            $("#sizeSeoTag").html("<h1 style='font-size:1em; color:#fff;'>" + searchTitle + "</h1>");
            $(".seosizetag").hide();
            $('.resultsInfo').text(searchTitle);
            //document.title = searchTitle;
        }

    }
    else {
        if (sectionWidth != '') {
            $("#sizeTruckSearchButton").attr("href", urlString);
        }

    }
}

function bindTruckAspectRatio(data) {

    $ddlTruckAspectRatio.find('option').remove();
    //$ddlTruckRimDiameter.find('option').remove();
    $ddlTruckAspectRatio.append(BuildDropDownListValueDisplay(data, 'Profile').join(''));
    //$ddlTruckSectionWidth.find('option').not(':first').remove();

    HideMask();
};


function bindTruckRimDiameter(data) {

    $ddlTruckRimDiameter.find('option').remove();
    $ddlTruckRimDiameter.append(BuildDropDownListValueDisplay(data, 'Rim').join(''));
    //$ddlTruckSectionWidth.find('option').not(':first').remove();

    HideMask();
};
