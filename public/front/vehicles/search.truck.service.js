var truckTyreType = 2;

var SearchTruckService = {
    SetupSizeSearchControls: function() {

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
        });
    },
    SetupBrandSearchControls: function () {

        $ddlTruckBrand.change(function () {
            //showMask('#searchBrandDiv');

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
                    tyreType: truckTyreType,
                    callback: bindTruckBrandModels
                };

                SendGoogleAnalytics('send', 'event', 'SearchByBrand', 'Brand', $(this).val());
                tyresalesapi.getPatterns(params);
            }

        });
     

        $ddlTruckBrandSectionWidth.change(function () {
            showMask("#searchBrandDiv");

            var value = $(this).val();

            if (isEmpty(value)) {
                emptyDropDownList("Profile", $ddlTruckBrandAspectRatio);
                emptyDropDownList("Rim", $ddlTruckBrandRimDiameter);
                HideMask();
            } else {
                var params = {
                    tyreType: passengerTyreType,
                    sectionWidth: value,
                    callback: bindTruckBrandAspectRatio
                };
                SendGoogleAnalytics("send", "event", "SearchByBrand", "Width", value);
                tyresalesapi.getTyreAspectRatios(params);
            }
        });

        $ddlTruckBrandAspectRatio.change(function () {
            showMask("#searchBrandDiv");

            var value = $(this).val();

            if (value === "Profile") {
                emptyDropDownList("Rim", $ddlTruckBrandRimDiameter);
                HideMask();
            } else {

                var sectionWidthValue = $ddlTruckBrandSectionWidth.val();

                if (isEmpty(sectionWidthValue)) {
                    SendGoogleAnalytics("send", "event", "SearchByBrand", "Profile", value);
                    
                } else {
                    var params = {
                        tyreType: passengerTyreType,
                        sectionWidth: sectionWidthValue,
                        aspectRatio: value,
                        callback: bindTruckBrandRimDiameter
                    };
                    SendGoogleAnalytics("send", "event", "SearchByBrand", "Profile", value);
                    tyresalesapi.getTyreRimDiameters(params);
                }

                HideMask();
            }
        });
       
        $ddlTruckBrandRimDiameter.change(function () {
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

function bindTruckAspectRatio(data) {
    $ddlTruckAspectRatio.find("option").remove();
    $ddlTruckAspectRatio.append(BuildDropDownListValueDisplay(data, "Profile").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};

function bindTruckRimDiameter(data) {
    $ddlTruckRimDiameter.find("option").remove();
    $ddlTruckRimDiameter.append(BuildDropDownListValueDisplay(data, "Rim").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};

function bindTruckBrandAspectRatio(data) {
    $ddlTruckBrandAspectRatio.find("option").remove();
    $ddlTruckBrandAspectRatio.append(BuildDropDownListValueDisplay(data, "Profile").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};

function bindTruckBrandRimDiameter(data) {
    $ddlTruckBrandRimDiameter.find("option").remove();
    $ddlTruckBrandRimDiameter.append(BuildDropDownListValueDisplay(data, "Rim").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};


function bindTruckBrandModels(data) {
    $ddlTruckBrandModel.find("option").remove();
    var items = [];

    items.push(("<option value=\"\">Model</option>"));

    jQuery.each(data, function () {
        items.push("<option value=\"" + this.Value + "\">" + this.Display + "</option>");
    });

    $ddlTruckBrandModel.append(items.join(""));

    if (hasCustomDropdowns()) {
        $ddlTruckBrandModel.resetSS();
    }

    SearchPassengerService.UpdateEnabledState();
    HideMask();
}