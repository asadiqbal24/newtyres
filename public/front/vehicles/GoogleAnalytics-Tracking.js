//
// https://developers.google.com/analytics/devguides/collection/analyticsjs/events
//
// ga('send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue], [fieldsObject]);
//
// Field 	        Type 	Required 	Description
// eventCategory 	string 	yes 	    Typically the object that was interacted with (e.g. 'Video')
// eventAction 	    string 	yes 	    The type of interaction (e.g. 'play')
// eventLabel 	    string 	no 	        Useful for categorizing events (e.g. 'Fall Campaign')
// eventValue 	    number 	no 	        A numeric value associated with the event (e.g. 42)
//

var GoogleAnalytics = {
    SearchTrackingTyrePatternName: function (tyretypeid, id, checkoutUrl)
    {
        if (tyretypeid == 1) {
            ga("send", "event", "Search Results - Passenger", "click", "Tyre Pattern Name", id);
        }

        if (tyretypeid == 2) {
            ga("send", "event", "Search Results - Truck", "click", "Tyre Pattern Name", id);
        }

        if (tyretypeid == 3) {
            ga('send', 'event', 'Search Results - Otr', 'click', 'Tyre Pattern Name', id);
        }

        SearchTrackingAddEcommerceImpression(checkoutUrl);
    },
    SearchTrackingTyreThumbnail: function (tyretypeid, id, checkoutUrl)
    {
        if (tyretypeid == 1) {
            ga("send", "event", "Search Results - Passenger", "click", "Tyre Thumbnail", id);
        }

        if (tyretypeid == 2) {
            ga("send", "event", "Search Results - Truck", "click", "Tyre Thumbnail", id);
        }

        if (tyretypeid == 3) {
            ga('send', 'event', 'Search Results - Otr', 'click', 'Tyre Thumbnail', id);
        }

        SearchTrackingAddEcommerceImpression(checkoutUrl);
    },
    SearchTrackingView: function (tyretypeid, id, checkoutUrl)
    {
        if (tyretypeid == 1) {
            ga('send', 'event', 'Search Results - Passenger', 'click', 'View Button', id);
        }

        if (tyretypeid == 2) {
            ga('send', 'event', 'Search Results - Truck', 'click', 'View Button', id);
        }

        if (tyretypeid == 3) {
            ga('send', 'event', 'Search Results - Otr', 'click', 'View Button', id);
        }

        SearchTrackingAddEcommerceImpression(checkoutUrl);
    },
    CheckoutTrackingSearchDealership: function(postCode, vehicleMake, tyreQuantity, checkoutUrl) {

        var lastIndexOf = checkoutUrl.lastIndexOf("/buy/tyre/");

        var checkoutRemovedUrl = checkoutUrl.substring(lastIndexOf, checkoutUrl.length).replace("/buy/tyre/", "");

        var checkoutUrlArray = checkoutRemovedUrl.split("/");

        var brand = checkoutUrlArray[0].replace("/", "");
        var model = checkoutUrlArray[1].replace("/", "");
        var tyreSize = checkoutUrlArray[2].replace("/", "");
        var id = checkoutUrlArray[3].replace("/", "");


        ga('ec:addProduct', { // Provide product details in a productFieldObject.
            'id': id, // Product ID (string).
            'name': brand + " " + model + " " + tyreSize, // Product name (string).
            'category': model, // Product category (string).
            'brand': brand, // Product brand (string).
            'variant': tyreSize, // Product variant (string).
            'position': 1, // Product position (number).
            'dimension1': 'Member' // Custom dimension (string).
        });

        // Detail action

        ga('ec:setAction', 'checkout', {
            'step': 1,
            'option': 'Checkout - Select Dealer'
        });

        ga('send', 'pageview');

        ga('send', 'event', 'Checkout - Fitting Location', 'click', 'Next Button', id);
    },
    CheckoutTrackingDirectShipping: function (postCode)
    {
        ga('send', 'event', 'Checkout', 'Direct Shipping', postCode);
    },
    CheckoutTrackingNextPage: function (postCode, vehicleMake, tyreQuantity, checkoutUrl)
    {
        var lastIndexOf = checkoutUrl.lastIndexOf("/buy/tyre/");

        var checkoutRemovedUrl = checkoutUrl.substring(lastIndexOf, checkoutUrl.length).replace("/buy/tyre/", "");

        var checkoutUrlArray = checkoutRemovedUrl.split("/");

        var brand = checkoutUrlArray[0].replace("/", "");
        var model = checkoutUrlArray[1].replace("/", "");
        var tyreSize = checkoutUrlArray[2].replace("/", "");
        var id = checkoutUrlArray[3].replace("/", "");
        var email = $('#[id$=txtEmail]').val();
        var quantity = $('#[id$=ucCart_ddlQuantity]').val();
        var price = $('#[id$=ucCart_pnlPrice]').text().trim();

        ga('ec:addProduct', {
            'id': id,
            'name': brand + " " + model + " " + tyreSize,
            'category': model,
            'brand': brand,
            'variant': tyreSize,
            'price': price,
            'quantity': quantity
        });

        ga('ec:setAction', 'checkout', {
            'step': 2,
            'option': 'Checkout - Select Purchase'
        });

        ga('send', 'pageview');

        ga('send', 'event', 'Checkout - Fitment Centre Appointment', 'click', 'Next Button', id);

        //ga('send', 'event', 'Checkout', 'Checkout Payment', email);
    },
    CheckoutTrackingBuyNowTab: function () {
        ga('send', 'event', "Checkout Tabs", "click", "Buy Now Tab");
    },
    CheckoutTrackingTyreDetailsTab: function() {
        ga('send', 'event', "Checkout Tabs", "click", "Tyre Details Tab");
    },
    CheckoutTrackingReviewsTab: function() {
        ga('send', 'event', "Checkout Tabs", "click", "Reviews Tab");
    },
    CheckoutTrackingHowItWorksTab: function() {
        ga('send', 'event', "Checkout Tabs", "click", "How It Works Tab");
    },
    CheckoutTrackingNeedHelpTab: function() {
        ga('send', 'event', "Checkout Tabs", "click", "Need Help Tab");
    },
    OptionalExtrasNextPage: function() {
        ga('send', 'event', "Checkout - Optional Extras", "click", "Skip/Next Button");
    },
    PaymentCreditCard: function () {
        ga('ec:setAction', 'Payment');

        ga('send', 'event', "Payment", "click", "Pay Now Button (Credit Card)");

        ga('send', 'pageview');
    },
    PaymentPayPal: function () {
        ga('ec:setAction', 'Payment');
        ga('send', 'event', "Payment", "click", "Pay With PayPal Button");
    },
    PaymentLeaseCompany: function () {
        ga('ec:setAction', 'Payment');

        ga('send', 'event', "Payment", "click", "Complete Transaction Button (Lease Company)");
    },
    PaymentBankTrasfer: function () {
        ga('ec:setAction', 'Payment');

        ga('send', 'event', "Payment", "click", "Complete Transaction Button (Bank Transfer)");
    },
    PaymentAfterPay: function () {
        ga('ec:setAction', 'Payment');

        ga('send', 'event', "Payment", "click", "Place Order Button (After Pay)");
    },
    OrderSummary :function() {
        ga('send', 'pageview');

        ga('send', 'event', "Order Summary", "load", "Order Summary Page");
    }


}

// Private Functions

SearchTrackingAddEcommerceImpression = function(checkoutUrl) {
    var checkoutRemovedUrl = checkoutUrl.replace("/buy/tyre/", "");

    var checkoutUrlArray = checkoutRemovedUrl.split("/");

    var brand = checkoutUrlArray[0].replace("/", "");
    var model = checkoutUrlArray[1].replace("/", "");
    var tyreSize = checkoutUrlArray[2].replace("/", "");

    ga('ec:addImpression', {            // Provide product details in an impressionFieldObject.
        'id': id,                   // Product ID (string).
        'name': brand + " " + model + " " + tyreSize, // Product name (string).
        'category': model,   // Product category (string).
        'brand': brand,                // Product brand (string).
        'variant': tyreSize,               // Product variant (string).
        'list': 'View Tyres',         // Product list (string).
        'position': 1,                    // Product position (number).
        'dimension1': 'Member'            // Custom dimension (string).
    });

    ga('ec:setAction', 'detail');

    ga('send', 'pageview');              // Send product impressions with initial pageview.
}

$(function () {

    if (configurationType == "Production") {

        var $tyrePanels = $(".resultsMod > .tyrePanels");

        $tyrePanels.on("click", ".tyrePanel > .thumbnail.resultMoreInfo > a", function() {
            var tyretypeid = null;
            var id = /.*\/buy\/tyre\/.*\/.*\/.*\/([0-9]*).*/g.exec($(this).attr("href"))[1];
            var checkoutUrl = this.baseURI;

            var tyretype = /.*\/(tyre|truck|otr)\/size\/.*/g.exec(checkoutUrl)[1];

            switch (tyretype) {
            case "tyre":
                tyretypeid = 1;
                break;
            case "truck":
                tyretypeid = 2;
                break;
            case "otr":
                tyretypeid = 3;
                break;
            }

            GoogleAnalytics.SearchTrackingTyrePatternName(tyretypeid, id, checkoutUrl);
        });

        $tyrePanels.on("click", ".tyrePanel > .thumbnail.resultMoreInfo > a", function() {

            var tyretypeid = null;
            var id = /.*\/buy\/tyre\/.*\/.*\/.*\/([0-9]*).*/g.exec($(this).attr("href"))[1];
            var checkoutUrl = this.baseURI;

            var tyretype = /.*\/(tyre|truck|otr)\/size\/.*/g.exec(checkoutUrl)[1];

            switch (tyretype) {
            case "tyre":
                tyretypeid = 1;
                break;
            case "truck":
                tyretypeid = 2;
                break;
            case "otr":
                tyretypeid = 3;
                break;
            }

            GoogleAnalytics.SearchTrackingTyreThumbnail(tyretypeid, id, checkoutUrl);
        });

        $tyrePanels.on("click", "input", function() {

            var tyretypeid = null;
            var id = /addToQuote_([0-9]*)/g.exec($(this).id)[1];
            var checkoutUrl = this.baseURI;

            var tyretype = /.*\/(tyre|truck|otr)\/size\/.*/g.exec(checkoutUrl)[1];

            switch (tyretype) {
            case "tyre":
                tyretypeid = 1;
                break;
            case "truck":
                tyretypeid = 2;
                break;
            case "otr":
                tyretypeid = 3;
                break;
            }

            GoogleAnalytics.SearchTrackingView(tyretypeid, id, checkoutUrl);
        });

        $('input[id$=btnStep2]').click(function() {
            var postCode = $('.locationStep input[id$=txtPostcode]').val();
            var vehicleMake = $('select[id$=ddlMake]').val();
            var tyreQuantity = $('select[id$=ddlQuantity]').val();
            var checkoutUrl = this.baseURI;

            GoogleAnalytics.CheckoutTrackingSearchDealership(postCode, vehicleMake, tyreQuantity, checkoutUrl);
        });

        $('input[id$=btnNextStep].btnStep3Buy').click(function() {

            var postCode = $('.locationStep input[id$=txtPostcode]').val();
            var vehicleMake = $('select[id$=ddlMake]').val();
            var tyreQuantity = $('select[id$=ddlQuantity]').val();
            var checkoutUrl = this.baseURI;

            GoogleAnalytics.CheckoutTrackingNextPage(postCode, vehicleMake, tyreQuantity, checkoutUrl);
        });

        $('input[id$=btnStep3].btnStep3Buy').click(function() {
            GoogleAnalytics.OptionalExtrasNextPage();
        });

        $("ul.tabNavigation1 a:first").click(function() {
            GoogleAnalytics.CheckoutTrackingBuyNowTab();
        });

        $("ul.tabNavigation1 a:eq(1)").click(function() {
            GoogleAnalytics.CheckoutTrackingTyreDetailsTab();
        });

        $("ul.tabNavigation1 a:eq(2)").click(function() {
            GoogleAnalytics.CheckoutTrackingReviewsTab();
        });

        $("ul.tabNavigation1 a:eq(3)").click(function() {
            GoogleAnalytics.CheckoutTrackingHowItWorksTab();
        });

        $("ul.tabNavigation1 a:last").click(function() {
            GoogleAnalytics.CheckoutTrackingNeedHelpTab();
        });

        $('input[id$=btnPayNow]').click(function() {
            GoogleAnalytics.PaymentCreditCard();
        });

        $('input[id$=PayWithPaypalButton]').click(function() {
            GoogleAnalytics.PaymentPayPal();
        });

        $('input[id$=btnPayWithAfterpayButton]').click(function() {
            GoogleAnalytics.PaymentPayPal();
        });

        $('input[id$=btnBankTransfer]').click(function() {
            GoogleAnalytics.PaymentBankTrasfer();
        });

        $('input[id$=btnFinance]').click(function() {
            GoogleAnalytics.PaymentLeaseCompany();
        });
    }

});


//$(document).ready(function () {
    
////    1)	Remove tracking on Staging website and local dev


////    2)	Search Page
//    //    a.	Click Image (MORE INFO / TYRE DETAILS tab)  


////    b.	Click VIEW (BUY NOW tab)
////c.	Future reference: When we have our TP reviews Summary Widget, link the “3 reviews” to the “REVUEWS” tab in checkout, and track this.

////    3)	Checkout Page:
////        a.	Click on Next to search for Dealership (btnStep2)
////        b.	Click on Next to go to next page (goto Optional Extras screen … or Payments screen if OE is bypassed)
////        c.	TYRE DETAILS tab click
////        d.	REVIEWS tab click
////        e.	HOW IT WORKS tab click
////        f.	NEED HELP tab click


////        4)	Optional Extras Page
////        a.	SKIP/NEXT button


////        5)	Payment screen:
////        a.	Track Credit Card
////    b.	Track PayPal
////    c.	Track Bank Transfer
////    d.	Track Lease Company
////    e.	Track Pay Now button

////    6)	Order Summary screen
////    a.	On Page Load track

//    // ga('send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue], [fieldsObject]);

//    // if navigating from a tyre listing 'more info' link, then show tyre details tab by default
//    if (window.location.hash.indexOf("moreinfo") != -1) {
//        $('div.checkout-tabs ul.tabNavigation a.tyreDetailsTab').click();
//        // GA event tracking
//        ga('send', 'event', 'ResultsPage', 'MoreInfo', 'Yes');
//    }

//    // wire up click event for 'buy now' button on tyre detail tab
//    $("#buyNowButton, .btn-purchase").click(function (e) {
//        $('div.checkout-tabs ul.tabNavigation a.buyNowTab').click();
//        $('html, body').animate({
//            scrollTop: $('.checkout-tabs').offset().top
//        }, 800);
//        $('.postcodeInput').focus();
//        e.preventDefault();
//    });
    

//    $('#[id$=btnStep2]').click(function () {


//        var postCode = $('#[id$=txtPostcode]').val();
//        var vehicleMake = $('#[id$=ddlMake]').val();
//        var tyreQuantity = $('#[id$=ucCart_ddlQuantity]').val();

//        var checkoutUrl = this.baseURI;

//        var lastIndexOf = checkoutUrl.lastIndexOf("/buy/tyre/");

//        var checkoutRemovedUrl = checkoutUrl.substring(lastIndexOf, checkoutUrl.length).replace("/buy/tyre/", "");

//        var checkoutUrlArray = checkoutRemovedUrl.split("/");

//        var brand = checkoutUrlArray[0].replace("/", "");
//        var model = checkoutUrlArray[1].replace("/", "");
//        var tyreSize = checkoutUrlArray[2].replace("/", "");
//        var id = checkoutUrlArray[3].replace("/", "");


//        ga('ec:addProduct', { // Provide product details in a productFieldObject.
//            'id': id, // Product ID (string).
//            'name': brand + " " + model + " " + tyreSize, // Product name (string).
//            'category': model, // Product category (string).
//            'brand': brand, // Product brand (string).
//            'variant': tyreSize, // Product variant (string).
//            'position': 1, // Product position (number).
//            'dimension1': 'Member' // Custom dimension (string).
//        });

//        // Detail action

//        ga('ec:setAction', 'checkout', {
//            'step': 1,
//            'option': 'Checkout - Select Dealer'
//        });

//        ga('send', 'pageview');


//        ga('send', 'event', 'Checkout', 'Delivery Information', postCode);

//    });

//    $('#[id$=btnStep3]').click(function () {

//        var postCode = $('#[id$=txtPostcode]').val();
//        var vehicleMake = $('#[id$=ddlMake]').val();
//        var tyreQuantity = $('#[id$=ucCart_ddlQuantity]').val();

//        var checkoutUrl = this.baseURI;

//        var lastIndexOf = checkoutUrl.lastIndexOf("/buy/tyre/");

//        var checkoutRemovedUrl = checkoutUrl.substring(lastIndexOf, checkoutUrl.length).replace("/buy/tyre/", "");

//        var checkoutUrlArray = checkoutRemovedUrl.split("/");

//        var brand = checkoutUrlArray[0].replace("/", "");
//        var model = checkoutUrlArray[1].replace("/", "");
//        var tyreSize = checkoutUrlArray[2].replace("/", "");
//        var id = checkoutUrlArray[3].replace("/", "");
//        var email = $('#[id$=txtEmail]').val();
//        var quantity = $('#[id$=ucCart_ddlQuantity]').val();
//        var price = $('#[id$=ucCart_pnlPrice]').text().trim();

//        ga('ec:addProduct', {
//            'id': id,
//            'name': brand + " " + model + " " + tyreSize,
//            'category': model,
//            'brand': brand,
//            'variant': tyreSize,
//            'price': price,
//            'quantity': quantity
//        });

//        ga('ec:setAction', 'checkout', {
//            'step': 2,
//            'option': 'Checkout - Select Purchase'
//        });


//        ga('send', 'pageview');

//        ga('send', 'event', 'Checkout', 'Checkout Payment', email);
//    });


//    $('#[id$=ServiceCentresList]').click(function (e) {
//        if (e.target.value == 0) {

//            ga('send', 'event', 'Checkout', 'Reserve Tyres', 'Call me to discuss other fitment centres in my area');

//        } else if (e.target.value == -1) {
//            ga('send', 'event', 'Checkout', 'Reserve Tyres', 'Let me choose where to send my tyres');
//        } else {
//            ga('send', 'event', 'Checkout', 'Reserve Tyres', e.target.value);
//        }
//    });


//    $('#[id$=btnPayNow]').click(function (e) {
//        ga('ec:setAction', 'Payment');

//        ga('send', 'pageview');

//    });

//});

