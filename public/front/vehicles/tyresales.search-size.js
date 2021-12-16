var $ddlSectionWidth, $ddlAspectRatio, $ddlRimDiameter, $ddlLoadIndex, $ddlSpeedIndex, $dllToDeliveryLocation;
var sizePassengerTyreType = 1;

function sizeSearch(requestUrl) {


    //$("#sizeHomeSearchButton").click(function () {
    //    doSizeSearch(null, false, false);
    //});

    if ($('#doSizeSearch').val() === 'true') {
        doSizeSearch(requestUrl, true, true);
        setActiveTab(requestUrl);
    }

    $ddlSectionWidth = $(".ddlSectionWidth");
    $ddlAspectRatio = $(".ddlAspectRatio");
    $ddlRimDiameter = $(".ddlRimDiameter");
    $ddlLoadIndex = $(".ddlLoadIndex");
    $ddlSpeedIndex = $(".ddlSpeedIndex");

    $dllToDeliveryLocation = $('.toDeliveryLocation-dropdown');

    setupSizeSearchButton();

    //setupSizeAdvancedSearchButton();

    if ((getParameterByNameAndURL("search", requestUrl) == "size") && (getParameterByNameAndURL("size", requestUrl) != "")) {
        checkIfPassengerSearchValid();
        $("#sizeHomeSearchButton").click();
    }

    $ddlSectionWidth.change(function () {
        showMask('#searchSizeDiv');

        var value = $(this).val();

        checkIfPassengerSearchValid();

        if (isEmpty(value)) {
            emptyDropDownList('Profile', $ddlAspectRatio);
            emptyDropDownList('Rim', $ddlRimDiameter);
            HideMask();
        } else {
            var params = {
                tyreType: sizePassengerTyreType,
                sectionWidth: value,
                callback: bindAspectRatio
            };
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'Width', value);
            tyresalesapi.getTyreAspectRatios(params);

        }
    });

    $ddlAspectRatio.change(function () {
        showMask('#searchSizeDiv');

        var value = $(this).val();

        checkIfPassengerSearchValid();

        if (value == 'Profile') {
            emptyDropDownList('Rim', $ddlRimDiameter);
            HideMask();
        } else {
            var params = {
                tyreType: sizePassengerTyreType,
                sectionWidth: $ddlSectionWidth.val(),
                aspectRatio: value,
                callback: bindRimDiameter
            };
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'Profile', value);
            tyresalesapi.getTyreRimDiameters(params);

        }
    });

    $ddlRimDiameter.change(function () {
        checkIfPassengerSearchValid();
        
        SendGoogleAnalytics('send', 'event', 'SearchBySize', 'RimDiameter', $(this).val());
    });

    $ddlLoadIndex.change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchBySize', 'LoadIndex', $(this).val());
    });

    $ddlSpeedIndex.change(function () {
        SendGoogleAnalytics('send', 'event', 'SearchBySize', 'SpeedIndex', $(this).val());
    });

    $('.chkRunFlat').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'RunFlat', 'Yes');
        }
        else {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'RunFlat', 'No');
        }

        if ($this.data('isinternal')) {
            $("#sizeHomeSearchButton").click();
        }
    });

    $('.chkEcoFriendly').change(function () {
        var $this = $(this);

        if ($this.is(":checked")) {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'EcoFriendly', 'Yes');
        }
        else {
            SendGoogleAnalytics('send', 'event', 'SearchBySize', 'EcoFriendly', 'No');
        }

        if ($this.data('isinternal')) {
            $("#sizeHomeSearchButton").click();
        }
    });

    if (getParameterByNameAndURL("advanced", window.location.search) == 'true') {

        $('#searchSizeDiv').find('.advancedLink').children('a').click();
    }

};

function checkIfPassengerSearchValid() {
    var $searchBtn = $("#sizeHomeSearchButton");

    if ($ddlSectionWidth.val() === '' || $ddlAspectRatio.val() === 'Profile' || $ddlRimDiameter.val() === '') {
        $searchBtn.addClass('disabled');
    }
    else {
        $searchBtn.removeClass('disabled');
    }
};

function setupSizeSearchButton() {
    $("#sizeHomeSearchButton").click(function (e) {
        e.preventDefault();
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                doSizeSearch('', false, true);
                $(".search-link").hide();
            }
            else {
                var sectionWidth = $(".ddlSectionWidth").val();
                var aspectRatio = $(".ddlAspectRatio").val();
                var rimDiameter = $(".ddlRimDiameter").val();

                var tyreSizeSearch = new TyreSearch();

                tyreSizeSearch.SearchType = "size";
                tyreSizeSearch.TyreType = sizePassengerTyreType;
                tyreSizeSearch.SectionWidth = sectionWidth;
                tyreSizeSearch.AspectRatio = aspectRatio;
                tyreSizeSearch.RimDiameter = rimDiameter;

                var searchUtil = new Search();

                var urlString = searchUtil.searchUrl(tyreSizeSearch);

                window.location = urlString;

                doSizeSearch('', true, false);
            }
        }
        return false;
    });
};


function setupPassengerSizeSearchButton() {
    $("#passengerSizeSearchButton").click(function (e) {
        //e.preventDefault();
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            //if ($this.data('isinternal')) {
            //    doSizeSearch('', false, true);
            //}
            //else {
            var sectionWidth = $(".ddlSectionWidth").val();
            var aspectRatio = $(".ddlAspectRatio").val();
            var rimDiameter = $(".ddlRimDiameter").val();

            var tyreSizeSearch = new TyreSearch();

            tyreSizeSearch.SearchType = "size";
            tyreSizeSearch.TyreType = sizePassengerTyreType;
            tyreSizeSearch.SectionWidth = sectionWidth;
            tyreSizeSearch.AspectRatio = aspectRatio;
            tyreSizeSearch.RimDiameter = rimDiameter;

            var searchUtil = new Search();

            var urlString = searchUtil.searchUrl(tyreSizeSearch);

            window.location = urlString;

            return true;
            //    doSizeSearch('', true, false);
            //}
        }
        //return false;
        return true;
    });
};


function setupSizeAdvancedSearchButton() {
    $(".advancedSearchLink").click(function (e) {
        e.preventDefault();
        var $this = $(this);
        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                doSizeSearch('', false, true);
            }
            else {
                var sectionWidth = $(".ddlSectionWidth").val();
                var aspectRatio = $(".ddlAspectRatio").val();
                var rimDiameter = $(".ddlRimDiameter").val();

                var tyreSizeSearch = new TyreSearch();

                tyreSizeSearch.SearchType = "size";
                tyreSizeSearch.TyreType = sizePassengerTyreType;
                tyreSizeSearch.SectionWidth = sectionWidth;
                tyreSizeSearch.AspectRatio = aspectRatio;
                tyreSizeSearch.RimDiameter = rimDiameter;

                var searchUtil = new Search();

                var urlString = searchUtil.searchUrl(tyreSizeSearch) + '&advanced=true';

                window.location = urlString;

                doSizeSearch('', true, false);
            }
        }
        return false;
    });
};

function doSizeSearch(url, isFromUrl, isInternal) {

    var toDeliveryLocation = $('.toDeliveryLocation-dropdown').val();
    var sectionWidth = isFromUrl == true ? getParameterByNameAndURL("width", url) : $(".ddlSectionWidth").val();
    var aspectRatio = isFromUrl == true ? getParameterByNameAndURL("aspect", url) : $(".ddlAspectRatio").val();
    var rimDiameter = isFromUrl == true ? getParameterByNameAndURL("rim", url) : $(".ddlRimDiameter").val();
    var loadIndex = $(".ddlLoadIndex").val();
    var speedIndex = $(".ddlSpeedIndex").val();
    var specification = $(".ddlBrandSpecification").val();
    var runFlat = ($(".chkRunFlat").find("input").is(":checked")) == true ? true : null;
    var ecoFriendly = ($(".chkEcoFriendly").find("input").is(":checked")) == true ? true : null;

    var tyreSizeSearch = new TyreSearch();

    tyreSizeSearch.SearchType = "size";
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
        $("#sizeHomeSearchButton").removeClass('disabled');
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


        // To deal with size searches coming in from tyredetails address with only a size parameter
        if ((getParameterByNameAndURL("search", url) == "size") && (getParameterByNameAndURL("size", url) != "")) {
            var paramSize = getParameterByNameAndURL("size", url);
        }


        var dealParams = {
            size: isEmpty(tyreSize) ? paramSize: tyreSize,
            load: loadIndex,
            speed: speedIndex,
            eco: ecoFriendly,
            runflat: runFlat,
            sizeSearch: true,
            toDelivery: toDeliveryLocation,
            tyreType: sizePassengerTyreType,
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
            toDelivery: toDeliveryLocation,
            tyreType: sizePassengerTyreType,
            callback: render
        };
        tyresalesapi.searchBySize(params);

        if (sectionWidth != '') {
            var searchTitle;
            if (aspectRatio == 0) {
                searchTitle = sectionWidth + "R" + rimDiameter + " " + loadIndex + speedIndex + " Tyres";
            }
            else {
                searchTitle = sectionWidth + "/" + aspectRatio + "R" + rimDiameter + " " + loadIndex + speedIndex + " Tyres";
            }
            $("#sizeSeoTag").html("<h1 style='font-size:1em; color:#fff;'>" + searchTitle + "</h1>");
            $('.resultsInfo').text(searchTitle);
            //document.title = searchTitle;
            $(".seosizetag").hide();
        }

    }
    else {
        if (sectionWidth != '') {
            $("#sizeHomeSearchButton").attr("href", urlString);
        }

    }
};

function bindAspectRatio(data) {

    $ddlAspectRatio.find('option').remove();
    //$ddlRimDiameter.find('option').remove();
    $ddlAspectRatio.append(BuildDropDownListValueDisplay(data, 'Profile').join(''));
    //$ddlSectionWidth.find('option').not(':first').remove();

    HideMask();
};


function bindRimDiameter(data) {

    $ddlRimDiameter.find('option').remove();
    $ddlRimDiameter.append(BuildDropDownListValueDisplay(data, 'Rim').join(''));
    //$ddlSectionWidth.find('option').not(':first').remove();

    HideMask();
};





