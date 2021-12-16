var passengerTyreType = 1;

var SearchPassengerService = {
    SetupSizeSearchControls: function() {

        $ddlSectionWidth.change(function() {
            showMask("#searchSizeDiv");

            var value = $(this).val();

            if (isEmpty(value)) {
                emptyDropDownList("Profile", $ddlAspectRatio);
                emptyDropDownList("Rim", $ddlRimDiameter);
                HideMask();
            } else {
                var params = {
                    tyreType: passengerTyreType,
                    sectionWidth: value,
                    callback: bindAspectRatio
                };
                SendGoogleAnalytics("send", "event", "SearchBySize", "Width", value);
                tyresalesapi.getTyreAspectRatios(params);
            }
        });

        $ddlAspectRatio.change(function() {
            showMask("#searchSizeDiv");

            var value = $(this).val();

            if (value === "Profile") {
                emptyDropDownList("Rim", $ddlRimDiameter);
                HideMask();
            } else {
                var params = {
                    tyreType: passengerTyreType,
                    sectionWidth: $ddlSectionWidth.val(),
                    aspectRatio: value,
                    callback: bindRimDiameter
                };
                SendGoogleAnalytics("send", "event", "SearchBySize", "Profile", value);
                tyresalesapi.getTyreRimDiameters(params);

            }
        });

        $ddlRimDiameter.change(function () {
            SendGoogleAnalytics("send", "event", "SearchBySize", "RimDiameter", $(this).val());
        });

        $ddlLoadIndex.change(function() {
            SendGoogleAnalytics("send", "event", "SearchBySize", "LoadIndex", $(this).val());
        });

        $ddlSpeedIndex.change(function() {
            SendGoogleAnalytics("send", "event", "SearchBySize", "SpeedIndex", $(this).val());
        });

        $(".chkRunFlat").change(function() {
            var $this = $(this);

            if ($this.is(":checked")) {
                SendGoogleAnalytics("send", "event", "SearchBySize", "RunFlat", "Yes");
            } else {
                SendGoogleAnalytics("send", "event", "SearchBySize", "RunFlat", "No");
            }

            if ($this.data("isinternal")) {
                $("#sizeHomeSearchButton").click();
            }
        });
    },
    SetupBrandSearchControls: function () {

        $ddlBrand.change(function() {
            showMask("#searchBrandDiv");

            var value = $(this).val();

            if (isEmpty(value)) {

                $("#brandHomeSearchButton").addClass("disabled");
                $ddlBrandModel.find("option").remove();
                emptyDropDownList("Pattern", $ddlBrandModel);
                HideMask();
            } else {
                $("#brandHomeSearchButton").removeClass("disabled");
                var params = {
                    brand: value,
                    tyreType: passengerTyreType,
                    callback: bindBrandModels
                };

                SendGoogleAnalytics("send", "event", "SearchByBrand", "Brand", $(this).val());
                tyresalesapi.getPatterns(params);
            }

        });

        $(".ddlBrandSectionWidth").change(function () {
            showMask("#searchBrandDiv");

            var value = $(this).val();

            if (isEmpty(value)) {
                emptyDropDownList("Profile", $ddlBrandAspectRatio);
                emptyDropDownList("Rim", $ddlBrandRimDiameter);
                HideMask();
            } else {
                var params = {
                    tyreType: passengerTyreType,
                    sectionWidth: value,
                    callback: bindBrandAspectRatio
                };
                SendGoogleAnalytics("send", "event", "SearchByBrand", "Width", value);
                tyresalesapi.getTyreAspectRatios(params);
            }
        });

        $(".ddlBrandAspectRatio").change(function () {
            showMask("#searchBrandDiv");

            var value = $(this).val();

            if (value === "Profile") {
                emptyDropDownList("Rim", $ddlBrandRimDiameter);
                HideMask();
            } else {

                var sectionWidthValue = $ddlBrandSectionWidth.val();

                if (isEmpty(sectionWidthValue)) {
                    SendGoogleAnalytics("send", "event", "SearchByBrand", "Profile", value);
                    
                } else {
                    var params = {
                        tyreType: passengerTyreType,
                        sectionWidth: sectionWidthValue,
                        aspectRatio: value,
                        callback: bindBrandRimDiameter
                    };
                    SendGoogleAnalytics("send", "event", "SearchByBrand", "Profile", value);
                    tyresalesapi.getTyreRimDiameters(params);
                }

                HideMask();
            }
        });

        $(".ddlBrandRimDiameter").change(function() {
            SendGoogleAnalytics("send", "event", "SearchByBrand", "RimDiameter", $(this).val());
        });

        $(".ddlBrandLoadIndex").change(function() {
            SendGoogleAnalytics("send", "event", "SearchByBrand", "LoadIndex", $(this).val());
        });

        $(".ddlBrandSpeedIndex").change(function() {
            SendGoogleAnalytics("send", "event", "SearchByBrand", "SpeedIndex", $(this).val());
        });

        $(".chkBrandRunFlat").change(function() {
            if ($(this).is(":checked")) {
                SendGoogleAnalytics("send", "event", "SearchByBrand", "RunFlat", "Yes");
            } else {
                SendGoogleAnalytics("send", "event", "SearchByBrand", "RunFlat", "No");
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
    SetupVehicleControls: function () {

        SearchPassengerService.UpdateEnabledState();

        $ddlYear.change(function () {
            disableSearch();
            var value = $(this).getSetSSValue();
            var params = {
                year: value,
                callback: bindMakes
            };

            SendGoogleAnalytics("send", "event", "SearchByVehicle", "Year", value);
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

            SendGoogleAnalytics("send", "event", "SearchByVehicle", "Make", value);
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

            SendGoogleAnalytics("send", "event", "SearchByVehicle", "Model", value);


            tyresalesapi.getVehicleSeries(params);
        });

        $ddlSeries.change(function () {
            $('#vehicleHomeSearchButton').removeAttr('disabled');
            SearchPassengerService.UpdateEnableStateBasedOn($vehicleSearchButton, $ddlSeries);

            SetRadioButtonFalse();
        });
    },
    SetupTyrePanelViewTyreButton: function () {
        $(".productButton").click(function (e) {
            e.preventDefault();

            var link = this;

            var tyretypeid = link.getAttribute("data-tyretypeid");
            var brand = link.getAttribute("data-brand");
            var pattern = link.getAttribute("data-pattern");
            var tyreSize = link.getAttribute("data-tyresize");
            var id = link.getAttribute("data-id");

            var quantity = $("#quantity_" + id);

            if (typeof SendGoogleAnalytics === "function") {

                var TyreTypeGAString = "";
                switch (tyretypeid) {
                    case 1:
                        TyreTypeGAString = "BuyPassenger";
                        break;
                    case 2:
                        TyreTypeGAString = "BuyTruck";
                        break;
                    case 3:
                        TyreTypeGAString = "BuyOtr";
                        break;
                    default:
                        TyreTypeGAString = "";
                        break;
                }

                SendGoogleAnalytics("send", "event", TyreTypeGAString, "BuyPassengerMoreInfo", id);
            }

            function redir() {
                window.location.href =
                    quantity.val() === 4
                        ? link.href
                        : replaceParameterByNameReturnUrl("q", quantity.val(), link.href, true);
            }

            if (typeof SendGoogleTagManager === "function") {
                var clickEvent = $(link).closest('.tyrePanel[data-gtm-event-body]').data('gtm-event-body');

                SendGoogleTagManager(clickEvent, function () {
                    // GWE-1261:  Just putting my changes around existing code to leave truck / otr alone for now
                    if (configurationType === "Production") {
                        // Google Ecommerce Analytics
                        ga("ec:addImpression",
                            {
                                // Provide product details in an impressionFieldObject.
                                'id': id, // Product ID (string).
                                'name': brand + " " + pattern + " " + tyreSize, // Product name (string).
                                'category': pattern, // Product category (string).
                                'brand': brand, // Product brand (string).
                                'variant': tyreSize, // Product variant (string).
                                'list': "View Tyres", // Product list (string).
                                'position': 1, // Product position (number).
                                'dimension1': "Member" // Custom dimension (string).
                            });

                        ga("ec:setAction", "detail");
                        ga("send", "pageview"); // Send product impressions with initial pageview.
                    }

                    redir();
                });

            } else {
                redir();
            }
        });
    },
    SubmitForm: function(e) {
        e.preventDefault();

        confirmSubmit($(".tabNavigation li .selected").html().toLowerCase());

        $form.submit();
    },
    SetupFormSubmitButtons: function () {
        $("html").on("click", ".pageButton", SearchPassengerService.SubmitForm);
    },
    ResetForm: function(e) {
        e.preventDefault();

        $form.find("select option:selected").removeAttr("selected");
        $form.find("input:radio, input:checkbox").removeAttr("checked");

        SearchPassengerService.UpdateEnabledState();
    },
    SetupFormResetButtons: function () {
        $("html").on("click", "#resetFormSize", SearchPassengerService.ResetForm);
        $("html").on("click", "#resetFormBrand", SearchPassengerService.ResetForm);
        $("html").on("click", "#resetFormVehicle", SearchPassengerService.ResetForm);
    },
    SetupFormDropDownLists: function () {
        $("html").on("change", "#ddlToDeliveryLocation", SearchPassengerService.SubmitForm);
        $("html").on("change", "#orderResults", SearchPassengerService.SubmitForm);
    },
    GetActiveTabSeachType: function() {
        return $(".tabNavigation li .selected").html().toLowerCase();
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

function bindAspectRatio(data) {
    $ddlAspectRatio.find("option").remove();
    $ddlAspectRatio.append(BuildDropDownListValueDisplay(data, "Profile").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};

function bindRimDiameter(data) {
    $ddlRimDiameter.find("option").remove();
    $ddlRimDiameter.append(BuildDropDownListValueDisplay(data, "Rim").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};

function bindBrandAspectRatio(data) {
    $ddlBrandAspectRatio.find("option").remove();
    $ddlBrandAspectRatio.append(BuildDropDownListValueDisplay(data, "Profile").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};

function bindBrandRimDiameter(data) {
    $ddlBrandRimDiameter.find("option").remove();
    $ddlBrandRimDiameter.append(BuildDropDownListValueDisplay(data, "Rim").join(""));

    SearchPassengerService.UpdateEnabledState();
    HideMask();
};


function bindBrandModels(data) {
    $ddlBrandModel.find("option").remove();
    var items = [];

    items.push(("<option value=\"\">Model</option>"));

    jQuery.each(data, function () {
        items.push("<option value=\"" + this.Value + "\">" + this.Display + "</option>");
    });

    $ddlBrandModel.append(items.join(""));

    if (hasCustomDropdowns()) {
        $ddlBrandModel.resetSS();
    }

    SearchPassengerService.UpdateEnabledState();
    HideMask();
}

function bindMakes(data) {
    $ddlMake.find("option").remove();
    $ddlMake.append(BuildDropDownListValueDisplay(data, "Make").join(""));
    $ddlModel.find("option").not(":first").remove();
    $ddlSeries.find("option").not(":first").remove();

    if (hasCustomDropdowns()) {
        $ddlMake.resetSS();
        $ddlModel.resetSS();
        $ddlSeries.resetSS();
    }

    SearchPassengerService.UpdateEnabledState();
    HideMask();
}

function bindModels(data) {
    $ddlModel.find("option").remove();
    $ddlModel.append(BuildDropDownListValueDisplay(data, "Model").join(""));
    $ddlSeries.find("option").not(":first").remove();

    if (hasCustomDropdowns()) {
        $ddlModel.resetSS();
        $ddlSeries.resetSS();
    }

    SearchPassengerService.UpdateEnabledState();
    HideMask();
}

function bindSeries(data) {
    $ddlSeries.find("option").remove();
    $ddlSeries.append(BuildDropDownListValueDisplay(data, "Series").join(""));

    if (hasCustomDropdowns()) {
        $ddlSeries.resetSS();
    }

    SetRadioButtonFalse();

    SearchPassengerService.UpdateEnabledState();
    HideMask();
}

function SetRadioButtonFalse() {
    var listofVehicleRadioBoxes = $("form").find("input:radio");

    for (var indexRadio = 0; indexRadio < listofVehicleRadioBoxes.length; ++indexRadio) {

        listofVehicleRadioBoxes[indexRadio].checked = false;
    }
}