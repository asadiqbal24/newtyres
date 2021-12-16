var otrTyreType = 3;

var SearchOtrService = {
    SetupSizeSearchControls: function() {

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
       
    },
    SetupBrandSearchControls: function () {

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
       
    },
    UpdateEnabledState: function () {
        SearchPassengerService.UpdateEnableStateBasedOn($ddlBrandModel, $ddlBrand);
        SearchPassengerService.UpdateEnableStateBasedOn($ddlBrandAspectRatio, $ddlBrandSectionWidth);
        SearchPassengerService.UpdateEnableStateBasedOn($ddlBrandRimDiameter, $ddlBrandAspectRatio);

        SearchPassengerService.UpdateEnableStateBasedOn($ddlAspectRatio, $ddlSectionWidth);
        SearchPassengerService.UpdateEnableStateBasedOn($ddlRimDiameter, $ddlAspectRatio);

        SearchPassengerService.UpdateEnableStateBasedOn($ddlMake, $ddlYear);
        SearchPassengerService.UpdateEnableStateBasedOn($ddlModel, $ddlMake);
        SearchPassengerService.UpdateEnableStateBasedOn($ddlSeries, $ddlModel);
        SearchPassengerService.UpdateEnableStateBasedOn($vehicleSearchButton, $ddlSeries);
    },
    UpdateEnableStateBasedOn: function ($elementToUpdate, $elementToValidate)
    {
        if (typeof $elementToUpdate === "undefined" ||
            typeof $elementToValidate === "undefined" ||
            $elementToUpdate === null ||
            $elementToValidate === null
        ) {
            return;
        }

        if ($elementToValidate.val() === "") {
            $elementToUpdate
                .attr("disabled", true)
                .addClass("disabled");
        } else {
            $elementToUpdate
                .attr("disabled", null)
                .removeClass("disabled");
        }
    }
};


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
