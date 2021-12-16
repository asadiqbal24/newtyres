var TyreSales = {
    load: function () {
        $.vividCore({
            navigationToggle: true,
            navigationContainerSelector: "#m-navigationContainer"
        });

        $(".stepNavigation ul li:first-child").css({ margin: 0 });

        var tabContainers = $("div.tabs > div");
        $("div.tabs ul.tabNavigation a").click(function () {
            tabContainers.hide();
            tabContainers.filter(this.hash).show();
            $("div.tabs ul.tabNavigation a").removeClass("selected");

            
            
            var $this = $(this);
            $this.addClass("selected");
            
            var $homeContainer = $(".homeSearchContainer");
            if ($homeContainer.length > 0) {
                $homeContainer.css("background-image", "url(../images/homebg" + $this.data("id") + ".jpg?q=100)");
            }

            $(".showForPassengerOnly").hide();
            $(".showForTruckOnly").hide();
            $(".showForOTROnly").hide();

            if ($this.data("id") == 1) {
                //$('.homeContent').show();
                $(".howItWorks").show();
                $("#tabSize").click();
                $(".showForPassengerOnly").show();
                $("#homepageSearchContainer").removeClass("homeSearchContainer-whitebackground");
            }

            if ($this.data("id") == 2) {
                //$('.homeContent').hide();
                $(".howItWorks").hide();
                $("#tabTruckSize").click();
                $(".showForTruckOnly").show();
                $("#homepageSearchContainer").addClass("homeSearchContainer-whitebackground");
                //$('.freeShipping').hide();
            }

            if ($this.data("id") === 3) {
                //$('.homeContent').hide();
                $(".howItWorks").hide();
                $("#tabOtrSize").click();
                $(".showForOTROnly").show();
                $("#homepageSearchContainer").addClass("homeSearchContainer-whitebackground");
                $(".freeShipping").hide();
            }

            return false;
        });
        
        $("div.subTabs ul.tabSubNavigation a").click(function () {
            //tabSubContainers.hide();
            //tabSubContainers.filter(this.hash).show();
            $("div.subTabs ul.tabSubNavigation a").removeClass("selected");

            var currentAttrValue = jQuery(this).attr("href");
            var subTabContainers = $("div.subTabs .subPanel");

            subTabContainers.each(function () {
                $(this).hide();
            });

            $("div.subTabs .subPanel" + currentAttrValue).show();

            var $this = $(this);
            $this.addClass("selected");

            return false;
        });

        $("#overlayClose").click(function () {
            $(".footerOverlay").hide();
        });

        $("#linkHelpFindTyreForm").colorbox({ iframe: true, width: "500px", height: "570px", scrolling: false });
        $(".linkHelpFindTyreForm").colorbox({ iframe: true, width: "500px", height: "570px", scrolling: false });
        $("#fitmentCentres").colorbox({ iframe: true, width: "500px", height: "408px", scrolling: false });
        $("#moneybackterms").colorbox({ iframe: true, width: "500px", height: "478px", scrolling: false });
        $(".concierge").colorbox({ iframe: true, width: "667px", height: "640px", scrolling: false });

        if (top !== self) {
            // hide relevant page elements
            $(".quicksales").hide();
            // set breadcrumb home button to /search page if on quicksales
            $(".breadcrumbhomelink").attr("href", "/search");
            // remove the background image (black border across top)
            $("body").css({ backgroundImage: "url()" });
            // remove padding on left
            $("#content").attr("class", "content iframe feedback");
        }

        // add minified class to deal in footer
        $(".columnDeal .dealOfTheDay").addClass("minified");

        //tyresalesapi.getQuoteList(function (data) {
        //    // set global list of tyres currently in users mini cart
        //    myTyreList = data.Tyres;
        //});

        $("a.toggleSEOFooter").unbind("click").click(function (e) {
            e.preventDefault();
            var $this = $(this);
            $(".enhancedSEOFooter").toggle();

            if ($this.html() === "more") {
                $this.html("less").toggleClass("less");
            }
            else {
                $this.html("more").toggleClass("less");
            }

            return false;
        });

        var $tagAnchors = $(".tags > li > a")
            .click(function () {
                var currentClass = "current";

                $tagAnchors.removeClass(currentClass);
                $(".tabPanelContent").children("div").hide();

                $(this).addClass(currentClass);
                $(this.hash).show();

                return false;
            });
        //$(".tabPanelContent").hide();
        
        // new link on homepage search
        /*$("#vehicleDetails").click(function () {
            var $tabLinks = $('ul.tabNavigation').find('li');
            $tabLinks.eq(1).children('a').click();
        });

        $("#sizeDetails").click(function () {
            var $tabLinks = $('ul.tabNavigation').find('li');
            $tabLinks.eq(0).children('a').click();
        });*/

        $(".vehicleSearchLinkBack").click(function () {
            $("#tabVehicle").click();
        });
        $(".sizeSearchLinkBack").click(function () {
            $("#tabSize").click();
        });
        $(".regoSearchLinkBack").click(function () {
            $("#tabRego").click();
        });
        $(".brandSearchLinkBack").click(function () {
            $("#tabBrand").click();
        });

        // .buyPanel > .buyNow,.checkout-main-people-button > .buyNow,.promotion-layout-inner-2.padding-left-15,.dealOfTheDay .dealOffer .greyBg > .buyNow,.payment-option-promotion .promotion-details .action-link

        //$(document).on("click", ".afterPayPanelPopup", function (e) {
        //    e.preventDefault();
        //    var $afterpayPanel = $(
        //        "<div id=\"popUpDiv\" class=\"afterPayPanel whatsIncludedPanel\">" +
        //                "<img src=\"/images/afterpay-lightbox_v3.png\">" +
        //            "<a href=\"javascript:void(0);\" class=\"close-panel\">×</a>" +
        //        "</div>"
        //    ).appendTo("body");

        //    $afterpayPanel.click(function () {
        //        $afterpayPanel.remove();
        //        $afterpayPanel = null;
        //    });
        //});

        $(document).on("click", ".zipMoneyPanelPopup, .find-out-more-lightbox", function (e) {
            e.preventDefault();
            var $zipMoneyPanel = $(
                "<div id=\"popUpDiv\" class=\"afterPayPanel whatsIncludedPanel\">" +
                        "<img alt=\"zipmoney\" src=\"/images/zipmoney-lightbox_v1.png\">" +
                    "<a href=\"javascript:void(0);\" class=\"close-panel\">×</a>" +
                "</div>"
            ).appendTo("body");

            $zipMoneyPanel.click(function () {
                $zipMoneyPanel.remove();
                $zipMoneyPanel = null;
            });
        });

        $(document).on("click", ".tyreplacardDisclaimer, .find-out-more-lightbox", function (e) {
            e.preventDefault();
            var $zipMoneyPanel = $(
                
                "<div id=\"popUpDiv\" class=\"afterPayPanel whatsIncludedPanel\">" +
                "<a href=\"javascript:void(0);\" class=\"close-panel\">×</a>" +
                        "<img alt=\"Tyresales tyre\" src=\"/images/TyresalesTyrePlacard.jpg\">" +
                "</div>"
            ).appendTo("body");

            $zipMoneyPanel.click(function () {
                $zipMoneyPanel.remove();
                $zipMoneyPanel = null;
            });
        });

        $(document).on("click", ".productSpecImage", function () {
            $(
                "<div class=\"productSpecImagePopUp\">" +
                        "<img alt=\"Tyre spec\" src=\"" + $('[id$=ProductSpecTableImage]').attr("src") + "\">" +
                    "<a href=\"javascript:void(0);\" class=\"close-panel\">x</a>" +
                "</div>"
            ).appendTo("body");

            $(".productSpecImagePopUp").click(function () {
                $(".productSpecImagePopUp").remove();
            });
        });

        $(document).on("click", ".price-match-competitor-more-info", function (e) {
                $(
                    "<div id=\"popUpDiv\" class=\"whatsIncludedPanel lowestPriceGuaranteePanel content\">" +
                    "<p><strong>LOWEST PRICE MATCH GUARANTEE</strong></p>" +
                    "<p>Tyresales.com.au examines the online tyre industry to ensure we are as competitive as possible on price.</p>" +
                    "<p>Competitor published prices are on a like for like basis. That is; all inclusive of fitting, balancing, new tubeless valves and old tyre disposal.</p>" +
                    "<p>Tyresales.com.au do not warrant that we provide all prices from all competitors. We publish competitor prices where we are confident that we are cheaper on a specific, locally-stocked tyre.</p>" +
                    "<p>These competitor quoted prices were last checked " + $(this).data("update-date")  + ".</p>" +
                    "<a href=\"javascript:void(0);\" class=\"close-panel\">×</a>" +
                "</div>"
            ).appendTo("body");

            $(".lowestPriceGuaranteePanel").click(function (e) {
                if ($(e.target).is(":not(a)")) {
                    $(".lowestPriceGuaranteePanel").remove();
                }
            });

            $(".lowestPriceGuaranteePanel .close-panel").click(function (e) {
                $(".lowestPriceGuaranteePanel").remove();
            });
        });

        
        

        $(document).on("click", ".lowestPriceGuarantee", function (e) {
            $(
                "<div id=\"popUpDiv\" class=\"whatsIncludedPanel lowestPriceGuaranteePanel content\">" +
                        "<p><strong>Lowest Price Guarantee</strong></p>" +
                        "<p>We believe in giving you one, all-inclusive price which includes fitting, balancing, new tubeless valves and tyre disposal. You will not be charged anything extra, and there are no hidden fees or surprise costs.</p>" +
                        "<p>If you find an identical, locally stocked, fully fitted tyre for less at any of our competitors, <a href=\"mailto:chris@tyresales.com.au?subject=Price Match: " + $(this).data("tyre") + "\">contact us to price match</a>.</p>" +
                        "<ul>" +
                            "<li>Proof of competitor advertisement or current written quote required</li>" +
                            "<li>Private buyers only</li>" +
                            "<li>Not valid with any other promotional offers or cash back</li>" +
                            "<li>Excludes competitor liquidation & aged stock sales</li>" +
                            "<li>Not valid after purchase of tyres</li>" +
                            "<li>Only valid for 1 order per customer within a 30 day period</li>" +
                    "<a href=\"javascript:void(0);\" class=\"close-panel\">×</a>" +
                "</div>"
            ).appendTo("body");
            
            $(".lowestPriceGuaranteePanel").click(function (e) {
                if ($(e.target).is(":not(a)")) {
                    $(".lowestPriceGuaranteePanel").remove();
                }
            });

            $(".lowestPriceGuaranteePanel .close-panel").click(function (e) {
                $(".lowestPriceGuaranteePanel").remove();
            });
        });

        $(".gtm-event-target").each(function (index, target) {
            var element = $(target);

            var eventNonce = element.data("gtm-event-nonce");
            if (eventNonce && sessionStorage) {
                var gtmNonces = sessionStorage.getItem('gtmNonces') || '';
                if (gtmNonces.indexOf(eventNonce) !== -1) {
                    return;
                }
                gtmNonces += ',' + eventNonce;
                sessionStorage.setItem('gtmNonces', gtmNonces);
            }

            var triggerType = element.data("gtm-event-trigger");
            var eventBody = element.data("gtm-event-body");
            if (triggerType === "PageView") {
                dataLayer.push(eventBody);
            }
            else if (triggerType === "Click") {
                element.click(function () {
                    dataLayer.push(eventBody);
                });
            }
        });
    },
    search: {
        init: function (requestUrl) {

            $(".advancedLink").children().click(function(e) {
                var $this = $(this);
                
                $this.toggleClass("closeAdvanced");

                if ($this.hasClass("closeAdvanced")) {
                    $this.text("Close");
                    $(".advancedHidden." + $this.data("id")).show();
                } else {
                    $this.text("Advanced");
                    $(".advancedHidden." + $this.data("id")).hide();
                }

                e.preventDefault();
            });

            if (typeof setupSearchTabs === "function") {
                setupSearchTabs(requestUrl);
            }

            $("#helpfindtyre").colorbox({ iframe: true, width: "500px", height: "480px", scrolling: false });

            var urlContainsSearchParameter = "";
            var urlContainsSearchTruckParameter = "";
            var searchtyreType = 0;

            if (typeof getParameterByNameAndURL === "function") {
                urlContainsSearchParameter = getParameterByNameAndURL("search", requestUrl);
                urlContainsSearchTruckParameter = getParameterByNameAndURL("searchtruck", requestUrl);
            }

            if (typeof Search !== "undefined") {
                var searchUtil = new Search();

                // 1 for passenger 2 for truck (Make better at some point)
                searchtyreType = searchUtil.searchTyreType(urlContainsSearchParameter);
            }

            // Test if Homepage
            if (typeof isEmpty === "function" && isEmpty(urlContainsSearchParameter) && isEmpty(urlContainsSearchTruckParameter)) {

                if (typeof vehicleSearch === "function")
                {
                    vehicleSearch(requestUrl);
                }

                if (typeof sizeSearch === "function")
                {
                    sizeSearch(requestUrl);
                }

                if (typeof brandSearch === "function")
                {
                    brandSearch(requestUrl);
                }

                if (typeof sizeTruckSearch === "function") {
                    sizeTruckSearch(requestUrl);
                }

                if (typeof brandTruckSearch === "function") {
                    brandTruckSearch(requestUrl);
                }
                if (typeof sizeOtrSearch === "function") {
                    sizeOtrSearch(requestUrl);
                }
                if (typeof brandOtrSearch === "function") {
                    brandOtrSearch(requestUrl);
                }
            } else {
                // Test if passenger search page
                if (searchtyreType === 1 /* passenger */) {

                    vehicleSearch();

                    if (typeof sizeSearch === "function")
                    {
                        sizeSearch(requestUrl);
                    }

                    if (typeof brandSearch === "function") {
                        brandSearch(requestUrl);
                    }
                }

                // Test if truck search page
                if (searchtyreType === 2 /* truck */) {
                    sizeTruckSearch(requestUrl);
                    brandTruckSearch(requestUrl);
                }

                if (searchtyreType === 3 /* otr */) {
                    sizeOtrSearch(requestUrl);
                    brandOtrSearch(requestUrl);
                }
            }
        }
    }
};

function addPar(url, param, value) {

    var hash = url.indexOf("#");

    if (hash === -1) {
        hash = url.length;
    }

    return url.substring(0, hash) + "&" + param + "=" + value + url.substring(hash, url.length);
}

$(document).ready(function () {

    TyreSales.load();

    $("ul.tabWidgetNavigation.passengerSearchWidget").find("li").children("a").click(function () {

        var links = $("ul.tabWidgetNavigation.passengerSearchWidget").find("li");

        var $tabpassengerSearchWidgetContainers = $(".tab");
        $tabpassengerSearchWidgetContainers.hide();
        $tabpassengerSearchWidgetContainers.filter(this.hash).show();

        links.children("a").removeClass("selected");

        var $this = $(this);
        $this.addClass("selected");

        return false;
    });
});

$(window).load(function () {
    if ($("#doVehicleSearch").val() === "true" || $("#doSizeSearch").val() === "true" || $("#doBrandSearch").val() === "true") {
        if (isMobile()) {
            setTimeout(function () {

                var offset = $(".resultsMod").offset();

                if (typeof offset === "undefined" || offset === null) {
                    return;
                }

                $("html, body").animate({
                    scrollTop: offset.top
                }, 800);
            }, 500);
        }
    }
});