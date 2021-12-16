
var tyreResults; // global variable to hold current tyre result set
var myTyreList;  // global variable to hold current list of selected tyres
var itemsPerPage = 21;  // number of results to display per paging page
var isGetHelpFormDropDownStyled = false; //get help form stylish combo when vehicle search return zero
var dealOfTheDayId = 0;
// 
// Render returned tyre results to page and setup paging and sorting//
function render(data) {

    if (data == null) {
        return;
    }

    //renderCompetitorPricingTable(data);

    //renderBrandPatternContentSummary(data);

    data = data.Tyres;

    tyreResults = data;

    // display number of records returned
    $(".searchResults span").first().html("<strong>" + data.length + "</strong> tyres found");


    var yearDescription = $('select[id$="_ddlYear"] option:selected').text();
    var makeDescription = $('select[id$="_ddlMake"] option:selected').text();
    var modelDescription = $('select[id$="ddlModel"] option:selected').text();
    var seriesDescription = $('select[id$="_ddlSeries"] option:selected').text();

    //show the help form if no tyre found
    if (data.length == 0) {
        try {
            if ($("[id$='ddlYear']").val() == "" && $("#searchSizeDiv [id$='ddlSectionWidth']").val() == "" && $("[id$='ddlBrand']").val() == "") {
                $(".getHelpForm").hide();
                return;
            }

            if ($("[id$='ddlYear']").val() != "") {
                $("#headerThankyouGetHelpFom").text("Thank you for searching for your " + yearDescription + " " + makeDescription + " " + modelDescription + " " + seriesDescription);
            }

            $(".paginationButtons").hide();
            $(".getHelpForm").show();
            $(".relatedTyres").hide();
            //TODO: If for some reason the TextArea keep displaying undefined when its empty, this is the culprit.
            $('input[id*="txt"], textarea').each(function () {
                this.value = $(this).attr('title');
                $(this).focus(function () {
                    if (this.value == $(this).attr('title')) {
                        this.value = '';
                    }
                });
                $(this).blur(function () {
                    if (this.value == '') {
                        this.value = $(this).attr('title');
                    }
                });
            });
            $('input[id$="_txtYear"]').val(yearDescription);
            $('input[id$="_txtModel"]').val(modelDescription);
            $('input[id$="_txtSeries"]').val(seriesDescription);
            $('select[id$="_ddlMakeHelpForm"]').val($('select[id$="_ddlMake"]').val());

            if (!isGetHelpFormDropDownStyled) {
                //$('.searchFilterGetHelpForm').sSelect();
                isGetHelpFormDropDownStyled = true;
            }

            // GA event tracking for no results
            if ($("[id$='ddlYear']").val() != "")
                SendGoogleAnalytics('send', 'event', 'ResultsPage', 'NoResults', 'SearchByVehicle');

            if ($("#searchSizeDiv [id$='ddlSectionWidth']").val() != "")
                SendGoogleAnalytics('send', 'event', 'ResultsPage', 'NoResults', 'SearchBySize');

            if ($("[id$='ddlBrand']").val() != "")
                SendGoogleAnalytics('send', 'event', 'ResultsPage', 'NoResults', 'SearchByBrand');

        } catch (e) { }
    } else {
        try {
            $("#headerThankyouGetHelpFom").text(''); // this needs to be cleared if there are results
            $(".paginationButtons").show();
            $(".getHelpForm").hide();
        } catch (e) { }
    }
    
    // if deal of the day displayed, remove from results so tyre not displayed twice
    //tyreResults = jLinq.from(tyreResults).not().equals("TyreId", dealOfTheDayId);

    // bind tyre results to template/view and render output
    BindTyreResults(jLinq.from(tyreResults).not().equals("Id", dealOfTheDayId).skipTake(0, itemsPerPage));

    // setup pagination (includes call to binding of data to template)
    initPaging(tyreResults.length);
    
    // bind change event for sort order 
    $("#orderResults").change(function () {
        // determine asc/desc
        var sortField = $("#orderResults").val();

        if (sortField.match(/(-RunFlat|-EcoFriendly|-BrandName|BrandName)$/)) {
            tyreResults = jlinq.from(data).sort("-Transactional", sortField, "Price").select();
        } else {
            tyreResults = jlinq.from(data).sort("-Transactional", sortField).select();
        }

        // re-order results by price value
        
        // initialises page (includes call to bind re-ordered results to template)
        initPaging(tyreResults.length);
    });

}

// Called when the Ratings UI 'x reviews' link is clicked.
// Opens the product detail popup and navigates to the reviews tab
function readReviewsClicked(eventObj) {
    // add querystring value to indicate we want to navigate to the reviews tab
    $(".moredetail_" + eventObj.context.entityId + ":last").attr("href", $(".moredetail_" + eventObj.context.entityId + ":last").attr('href') + "&showreviews=true");
    // open the lightbox
    $(".moredetail_" + eventObj.context.entityId + ":last").click();
    // remove the added querystring value (so that we dont keep going to the review tab when the lightbox opens i.e. using 'more details' link)
    $(".moredetail_" + eventObj.context.entityId + ":last").attr("href", $(".moredetail_" + eventObj.context.entityId + ":last").attr('href').replace("&showreviews=true", ""));
}

//
//  bind tyre results to template/view and render output
//
function BindTyreResults(data) {

    //Remove div for otr promotion

    var otrpromo = $('.otr-searchpage-promotion');

    if(!isEmpty(otrpromo)) {
        otrpromo.hide();
    }

    // bind result set to template
    var output = $("#tyreResults").parseTemplate(data);
    $(".tyrePanels").html(output);

    // binding of various buttons/elements for each search result
    $.each(data, function () {
        var id = this.Id;
        var checkoutUrl = this.DetailPageUrl;
        var transactional = this.Transactional;
        var tyretypeid = this.TyreTypeId;
        var currencyType = this.CurrentCurrency.CurrencyType.Id;

        if (id != dealOfTheDayId) {
            
        }

        // change text of button if tyre is transactional
        if (transactional) {
            $("#addToQuote_" + id).attr("value", "View");
        }


        $("#moreinfo_" + id).click(function() {

            if (tyretypeid == 1) {
                SendGoogleAnalytics('send', 'event', 'BuyPassenger', 'BuyPassengerMoreInfo', id);
            }

            if (tyretypeid == 2) {
                SendGoogleAnalytics('send', 'event', 'BuyTruck', 'BuyPassengerMoreInfo', id);
            }

            if (tyretypeid == 3) {
                SendGoogleAnalytics('send', 'event', 'BuyOtr', 'BuyPassengerMoreInfo', id);
            }
        });



        // bind 'add to quote' button
        $("#addToQuote_" + id).click(function () {

            var checkoutRemovedUrl = checkoutUrl.replace("/buy/tyre/", "");

            var checkoutUrlArray = checkoutRemovedUrl.split("/");

            var brand = checkoutUrlArray[0].replace("/", "");
            var model = checkoutUrlArray[1].replace("/", "");
            var tyreSize = checkoutUrlArray[2].replace("/", "");

            if (configurationType == "Production") {

                ga('ec:addImpression', {
                    // Provide product details in an impressionFieldObject.
                    'id': id, // Product ID (string).
                    'name': brand + " " + model + " " + tyreSize, // Product name (string).
                    'category': model, // Product category (string).
                    'brand': brand, // Product brand (string).
                    'variant': tyreSize, // Product variant (string).
                    'list': 'View Tyres', // Product list (string).
                    'position': 1, // Product position (number).
                    'dimension1': 'Member' // Custom dimension (string).
                });

                ga('ec:setAction', 'detail');

                ga('send', 'pageview'); // Send product impressions with initial pageview.

            }

            if (tyretypeid == 1) {
                SendGoogleAnalytics('send', 'event', 'BuyPassenger', 'BuyPassenger', id);
            }

            if (tyretypeid == 2) {
                SendGoogleAnalytics('send', 'event', 'BuyTruck', 'BuyPassenger', id);
            }

            if (tyretypeid == 3) {
                SendGoogleAnalytics('send', 'event', 'BuyOtr', 'BuyPassenger', id);
            }

            if (transactional) {
                // redirect to checkout page if transactional tyre
                // secureBaseUrl : is defined in base.master
                //document.location = secureBaseUrl + "checkout?t=" + id + "&q=" + $("#quantity_" + id).val();
                document.location = baseUrl.slice(0, -1) + checkoutUrl + "?q=" + $("#quantity_" + id).val() + "&c=" + currencyType;
                $("#addToQuote_" + id).attr("value", "View");
            } else {

                $("#tyrePanel_" + id).csnAnimation("animateLinearPath", $(".miniCart"));
                var params =
                {
                    context: { patternId: id },
                    tyreId: id,
                    quantity: $("#quantity_" + id).val(),
                    onTyreAdded: TyreAddedToQuote
                };
                tyresalesapi.addToQuote(params);
                tyresalesapi.getQuoteList(function (data) { myTyreList = data.Tyres; RefreshMiniCart(); });
            }
        });

        // if tyre being rendered is currently in users 'my tyre' list, then change
        // the styling of the button to 'selected' and disable it
        if (myTyreList != undefined) {
            var found = jlinq.from(myTyreList).equals("TyreId", id).select();
            if (found.length != 0) {
                SetToSelected(id);
            }
        }

    });

    // Radar pink ribbon lightbox
    $(".ribbon a").colorbox({ iframe: true, width: "549px", height: "515px" });

}


// Event handler that updates the UI after a tyre has been added to users quote list
function TyreAddedToQuote(context) {
    SetToSelected(context.patternId);
}

//
// Changes the styling of the 'add to quote' button to 'selected' and disables the click event
//
function SetToSelected(id) {
    $("#tyrePanel_" + id).addClass("selected");
    $("#addToQuote_" + id).removeClass("add");
    $("#addToQuote_" + id).addClass("selected");
    $("#addToQuote_" + id).val("Selected");
    $("#addToQuote_" + id).unbind("click");

    if ($(".relatedTyres").length > 0) {
        $(".relatedTyres #tyrePanel_" + id).addClass("selected");
        $(".relatedTyres #addToQuote_" + id).removeClass("add");
        $(".relatedTyres #addToQuote_" + id).addClass("selected");
        $(".relatedTyres #addToQuote_" + id).val("Selected");
        $(".relatedTyres #addToQuote_" + id).unbind("click");
    }
}

// Called when an item is removed from the shopping cart. Puts the item listed in the tyre results back
// in an unselected state by adding back appropriate styles and re-enabling events for adding to cart
function UnselectResultItem(id) {
    $("#tyrePanel_" + id).removeClass("selected");
    $("#addToQuote_" + id).addClass("add");
    $("#addToQuote_" + id).removeClass("selected");
    $("#addToQuote_" + id).val("Add To Quote");
    $("#addToQuote_" + id).click(function () {
        $("#tyrePanel_" + id).csnAnimation("animateLinearPath", $(".miniCart"));
        var params =
            {
                context: { patternId: id },
                tyreId: id,
                quantity: $("#quantity_" + id).val(),
                onTyreAdded: TyreAddedToQuote
            };
        tyresalesapi.addToQuote(params);
        tyresalesapi.getQuoteList(function (data) { myTyreList = data.Tyres; RefreshMiniCart(); });
    });

    if ($(".relatedTyres").length > 0) {
        $(".relatedTyres #tyrePanel_" + id).removeClass("selected");
        $(".relatedTyres #addToQuote_" + id).addClass("add");
        $(".relatedTyres #addToQuote_" + id).removeClass("selected");
        $(".relatedTyres #addToQuote_" + id).val("Add To Quote");
        $(".relatedTyres #addToQuote_" + id).click(function () {
            $(".relatedTyres #tyrePanel_" + id).csnAnimation("animateLinearPath", $(".miniCart"));
            var params =
            {
                context: { patternId: id },
                tyreId: id,
                quantity: $("#quantity_" + id).val(),
                onTyreAdded: TyreAddedToQuote
            };
            tyresalesapi.addToQuote(params);
            tyresalesapi.getQuoteList(function (data) { myTyreList = data.Tyres; RefreshMiniCart(); });
        });
    }
}

// Renders the "deal of the day" tyre above the search results
function renderDealOfTheDay(data) {

    var deal = data; //DealOfDay;

    // check if null and bind to widget template
    if (deal != null) {

        if (deal.DealOfDay != null) {
            $(".dealOfTheDayContainer").html(deal.Html);
            $(".dealOfTheDayContainer").show();
            $('.resultsMod').removeClass('noDeal');
            
            // store the id of the deal so it can be checked later to make sure it doesnt also appear as part of the search results
            dealOfTheDayId = deal.DealOfDay.Id;
            // reduce paging size to accomodate deal tile
            itemsPerPage = 19;

        } else {
            $(".dealOfTheDayContainer").hide();
            $('.resultsMod').addClass('noDeal');

            itemsPerPage = 21;
        }

    } else {
        $("#dealOfDayHeadingAboveResults").hide();
        $(".dealOfTheDayContainer").hide();
        $('.resultsMod').addClass('noDeal');
    }
}

function renderCompetitorPricingTable(data) {

    $("#competitorPricing").html(data.CompetitorPricingTable);
    $("#competitorPricing").show();

    // alter styles depending on if 1 or 2 columns have been rendered
    if ($('.compare-competitors').children().length == 1) {
        $('.compare-competitors').addClass('single-competitor');
    }
}

function renderBrandPatternContentSummary(data) {

    $("#contentSummary").html(data.ContentSummary);
    $("#contentSummary").show();
}

//Gets called every time the user clicks on a pagination link.
function pageselectCallback(page_index, jq) {

    var data = jLinq.from(tyreResults).not().equals("Id", dealOfTheDayId).skipTake(page_index * itemsPerPage, itemsPerPage);

    BindTyreResults(data);

    if (page_index !== 0) {
        $('html, body').animate({
            scrollTop: $('.resultsMod').offset().top
        }, 800);
    }

    return false;
}

// Create content inside pagination element
function initPaging(resultCount) {
    $(".paginationButtons").pagination(resultCount, {
        callback: pageselectCallback,
        items_per_page: itemsPerPage
    });
}

function firstToUpperCase(str) {
    return str.substr(0, 1).toUpperCase() + str.substr(1);
}
