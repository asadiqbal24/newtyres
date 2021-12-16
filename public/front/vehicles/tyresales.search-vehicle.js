var $ddlYear, $ddlMake, $ddlModel, $ddlSeries, $overlayMask;
var vehicleTyreType = 1;

function vehicleSearch(requestUrl) {

    if ($('#doVehicleSearch').val() === 'true') {
        doVehicleSearch(true);
        setActiveTab(requestUrl);
    }

    

    $ddlYear = $('.ddlYear');
    $ddlMake = $('.ddlMake');
    $ddlModel = $('.ddlModel');
    $ddlSeries = $('.ddlSeries');

    $ddlYear.change(function () {
        disableSearch();
        var value = $(this).getSetSSValue();
        var params = {
            year: value,
            callback: bindMakes
        };

        SendGoogleAnalytics('send', 'event', 'SearchByVehicle', 'Year', value);
        tyresalesapi.getVehicleMakes(params);
    });

    $ddlMake.change(function () {
        disableSearch();
        var value = $(this).val();
        var params = {
            year: $ddlYear.val(),
            make: value,
            callback: bindModels
        };

        SendGoogleAnalytics('send', 'event', 'SearchByVehicle', 'Make', value);
        tyresalesapi.getVehicleModels(params);
    });

    $ddlModel.change(function () {
        disableSearch();
        var value = $(this).val();
        var params = {
            year: $ddlYear.val(),
            make: $ddlMake.val(),
            model: value,
            callback: bindSeries
        };

        SendGoogleAnalytics('send', 'event', 'SearchByVehicle', 'Model', value);


        tyresalesapi.getVehicleSeries(params);
    });

    $ddlSeries.change(function () {
        $('#vehicleHomeSearchButton').removeClass('disabled');
        var $this = $(this);

        if ($this.hasClass('getResults')) {
            var value = $this.val();
            if (value != "noseries") {
                showMask('#searchVehicleDiv');
                var params = {
                    year: $ddlYear.val(),
                    make: $ddlMake.val(),
                    model: $ddlModel.val(),
                    series: value,
                    callback: bindSizes
                };

                SendGoogleAnalytics('send', 'event', 'SearchByVehicle', 'Series', value);
                tyresalesapi.getVehicle(params);
            }
        }
    });

    $("#vehicleHomeSearchButton").click(function () {
        var $this = $(this);

        if (!$this.hasClass('disabled')) {
            if ($this.data('isinternal')) {
                doVehicleSearch(false);
            }
            else {
                var year = $ddlYear.val();

                var make = $ddlMake.val();
                var makeString = '';
                if (make != '' && make != null) {
                    makeString = '&make=' + make;
                }

                var model = $ddlModel.val();
                var modelString = '';
                if (model != '' && model != null) {
                    modelString = '&model=' + model;
                }

                var series = $ddlSeries.val();
                var seriesString = '';
                if (series != '' && series != null) {
                    seriesString = '&series=' + series;
                }

                if ((year != '') && (make) && (model) && (series)) {
                    $("#vehicleHomeSearchButton").attr("href", "/search?search=vehicle&year=" + year + makeString + modelString + seriesString);
                    return true;
                }
            }
        }

        return false;
    });

}

function disableSearch() {
    showMask('#searchVehicleDiv');
    $('#vehicleHomeSearchButton').addClass('disabled');
    var $tyreSizes = $(".tireSizes");
    $tyreSizes.find(".standardSizes").hide().find('.sizeResults').html();
    $tyreSizes.find(".optionalSizes").hide().find('.sizeResults').html();
    $tyreSizes.hide();
    $('.resultsLabel').text('');
}

function bindMakes(data) {
    $ddlMake.find('option').remove();
    $ddlMake.append(BuildDropDownListValueDisplay(data, 'Make').join(''));
    $ddlModel.find('option').not(':first').remove();
    $ddlSeries.find('option').not(':first').remove();

    if (hasCustomDropdowns()) {
        $ddlMake.resetSS();
        $ddlModel.resetSS();
        $ddlSeries.resetSS();
    }

    HideMask();
}

function bindModels(data) {
    $ddlModel.find('option').remove();
    $ddlModel.append(BuildDropDownListValueDisplay(data, 'Model').join(''));
    $ddlSeries.find('option').not(':first').remove();

    if (hasCustomDropdowns()) {
        $ddlModel.resetSS();
        $ddlSeries.resetSS();
    }

    HideMask();
}

function bindSeries(data) {
    $ddlSeries.find('option').remove();
    $ddlSeries.append(BuildDropDownListValueDisplay(data, 'Series').join(''));

    if (hasCustomDropdowns()) {
        $ddlSeries.resetSS();
    }

    HideMask();
}

function bindSizes(data) {

    
    var ddlYearSelected = $('.ddlYear option:selected');
    var ddlMakeSelected = $('.ddlMake option:selected');
    var ddlModelSelected = $('.ddlModel option:selected');
    var ddlSeriesSelected = $('.ddlSeries option:selected');

    $(".tireSizes").find('.resultsLabel').html('<h1 style="font-size:1em; color:#fff;">' + ddlMakeSelected.text() + ' ' + ddlModelSelected.text() + '  ' + ddlYearSelected.text() + ' Tyres' + '</h1>');

    $('.resultsInfo').text('');
    $('.resultsInfo').text(ddlMakeSelected.text() + ' ' + ddlModelSelected.text() + ' ' + ddlYearSelected.text() + ' tyres that fit your vehicle');

    var standardSizesArray = [];

    if (data.Vehicle.FrontSizeStandard != '') {

        var position = 'Front';

        if (HasSameFrontAndRearSizes(data.Vehicle.FrontSizeStandard, data.Vehicle.RearSizeStandard)) {
            position = '';
        }

        PopulateStandardSize(data.Vehicle.FrontSizeStandard, data.Vehicle.FrontTyreSize, true, position, standardSizesArray);
    }

    if (data.Vehicle.RearSizeStandard != '') {
        if (!HasSameFrontAndRearSizes(data.Vehicle.FrontSizeStandard, data.Vehicle.RearSizeStandard)) {
            PopulateStandardSize(data.Vehicle.RearSizeStandard, data.Vehicle.RearTyreSize, false, 'Rear', standardSizesArray);
        }
    }

    var optionalSizesArray = [];

    populateOptionalSizes(data.Vehicle.OptionalSizes, optionalSizesArray);

    var $tyreSizes = $(".tireSizes");

    $tyreSizes.find(".standardSizes").show().find('.sizeResults').html(standardSizesArray.join(''));
    if (data.Vehicle.OptionalSizes != null) {
        $tyreSizes.find(".optionalSizes").show().find('.sizeResults').html(optionalSizesArray.join(''));
    }
    $tyreSizes.show();

    HideMask();
    doVehicleSearch(false);
}

function HasSameFrontAndRearSizes(FrontSizeStandard, RearSizeStandard) {
    return (FrontSizeStandard == RearSizeStandard);
}

function PopulateStandardSize(standardSize, tyreSize, selected, position, standardSizesArray) {

    if (typeof standardSize === 'undefined' || standardSize == null) {

    } else {

        var standardSize = standardSize.replace(" R ", "R");
        var splitsize = standardSize.split(' ');
        if (splitsize.length > 0) {
            standardSize = splitsize[0];
        }

        if (typeof tyreSize.LoadIndex === 'undefined') {
            tyreSize.LoadIndex = '';
        };

        if (typeof tyreSize.SpeedIndex === 'undefined') {
            tyreSize.SpeedIndex = '';
        }

        var labelName = standardSize + " " + tyreSize.LoadIndex + tyreSize.SpeedIndex + " " + position;
        var clickEvent = "setSelectedSize('" + standardSize + "','" + tyreSize.LoadIndex + "','" + tyreSize.SpeedIndex + "')";

        if (selected) {
            standardSizesArray.push('<input id="rb' + standardSize + '" type="radio" value="' + standardSize + '" name="rbSizes" checked="checked" onclick="' + clickEvent + '"><label for="rb' + standardSize + '">' + labelName + '</label><br/>')

            $('.selectedSizeHidden').val(standardSize);
            if (tyreSize.SpeedIndex != '') {
                $('.selectedSpeedHidden').val(tyreSize.SpeedIndex);
            } else {
                $('.selectedSpeedHidden').val('');
            }


            if (tyreSize.LoadIndex != '')
                $('.selectedLoadHidden').val(tyreSize.LoadIndex);
            else {
                $('.selectedLoadHidden').val('');
            }


        } else {
            standardSizesArray.push('<input id="rb' + standardSize + '" type="radio" value="' + standardSize + '" name="rbSizes" onclick="' + clickEvent + '"><label for="rb' + standardSize + '">' + labelName + '</label><br/>')
        }
    }

}

function populateOptionalSizes(optionalSizes, optionalSizesArray) {

    var currentSize = '';

    if (optionalSizes != null) {
        jQuery.each(optionalSizes, function() {

            if (this.Size != currentSize) {

                var loadIndexString = this.LoadIndex.toString();

                var labelName = this.Size.replace(" R ", "R") + " " + loadIndexString + this.SpeedIndex + " " + FormatPositionForUi(this.Position);
                var clickEvent = "setSelectedSize('" + this.Size + "','" + loadIndexString + "','" + this.SpeedIndex + "');";

                optionalSizesArray.push('<input id="rb' + this.SIZE + '" type="radio" value="' + this.SIZE + '" name="rbSizes" onclick="' + clickEvent + '"><label for="rb' + this.SIZE + '">' + labelName + '</label><br/>');

                currentSize = this.currentSize;
            }

        });
    }

}

function setSelectedSize(size, load, speed) {
    $(".selectedSizeHidden").val(size);
    $(".selectedLoadHidden").val(load);
    $(".selectedSpeedHidden").val(speed);
    // GA Event tracking
    SendGoogleAnalytics('send', 'event', 'ResultsPage', 'OptionalSizes', size + ' ' + load + speed);
    doVehicleSearch(false);
}

function FormatPositionForUi(position) {
    position = position.replace("Option", "");
    position = position.replace("Temp", "");

    if (position != '') {
        position = "(" + position.trim() + ")";
    }

    return position;
}

function doVehicleSearch(isFromUrl) {
    $('#vehicleHomeSearchButton').removeClass('disabled');
    $(".searchResults span").first().html("<img alt='loading' src='/images/loading.gif' width='15px' /> <strong>Loading results</strong>");
    $("[id$=FullDetail]").hide();
    $(".resultsMod").show();
        

    var toDeliveryLocation = $('.toDeliveryLocation-dropdown').val();

    var ddlMakeSelected = $('.ddlMake option:selected');
    var ddlModelSelected = $('.ddlModel option:selected');

    var year = $('.ddlYear').val();
    var make = $('.ddlMake').val();
    var model = $('.ddlModel').val();
    var series = $('.ddlSeries').val();

    var load = $(".selectedLoadHidden").val();
    var speed = $(".selectedSpeedHidden").val();

    var size = $(".selectedSizeHidden").val();
    var sizeString = '';
    if (size != '') {
        sizeString = "&size=" + size;
    }

    if (!isFromUrl) {
        var pageTitle = $(document).find("title").text();
        History.pushState(null, pageTitle, "/search?search=vehicle&make=" + make + "&model=" + model + "&year=" + year + "&series=" + series + sizeString);
        $('html, body').animate({
            scrollTop: $('.resultsMod').offset().top
        }, 800);
    }

    // first do check for deal of the day
    var dealParams = {
        size: size,
        load: load,
        speed: speed,
        make: make,
        model: model,
        year: year,
        tyreType: vehicleTyreType,
        toDelivery: toDeliveryLocation,
        callback: renderDealOfTheDay
    }

    tyresalesapi.findDealOfTheDay(dealParams);


    // vehicle search
    var params = {
        year: year,
        make: make,
        model: model,
        series: series,
        size: size,
        load: load,
        speed: speed,
        toDelivery: toDeliveryLocation,
        tyreType: vehicleTyreType,
        callback: render
    };

    tyresalesapi.searchByVehicle(params);

   
    var searchTitle = year + " " + ddlMakeSelected.text() + " " + ddlModelSelected.text() + " Tyres";
    var searchPageTitle = ddlMakeSelected.text() + " " + ddlModelSelected.text() + " Tyres";
    $("#sizeSeoTag").html("<h1 style='font-size:1em; color:#fff;'>" + searchPageTitle + "</h1>");
    $('.resultsInfo').text(searchTitle);
    //document.title = searchPageTitle;
    $(".seosizetag").hide();
    
}