function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.search);
    if (results == null)
        return "";
    else
        return decodeURIComponent(results[1].replace(/\+/g, " "));
}

function getParameterByNameAndURL(name, URL) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(URL);
    if (results == null)
        return "";
    else
        return decodeURIComponent(results[1].replace(/\+/g, " "));  
}

function replaceParameterByNameReturnUrl(name, newvalue, url, addIfNotExists) {
    var name2 =
        (name || "")
            .replace(/[\[]/, "\\\[")
            .replace(/[\]]/, "\\\]");

    var url2 = url || "";

    var results = new RegExp("[\\?&]" + name2 + "=([^&#]*)").exec(url2);

    if (results === null) {

        if (addIfNotExists) {

            var separator =
                url2.indexOf('?') !== -1
                    ? "&"
                    : "?";

            return url2 + separator + name2 + "=" + newvalue;
        }

        return url2;

    } else {
        return url2.replace(results[0], "?q=" + newvalue);
    }
}

function CreateLead(model) {
    
    //var customerPaymentDetailsViewModel = {
    //    CustomerName: $("[id$=otrZipMoneyFirstname]").val(),
    //    CustomerEmail: $("[id$=otrZipMoneySurname]").val(),
    //    CustomePhone: $("[id$=otrZipMoneyAddress]").val(),
    //    CustomeCompany: $("[id$=otrZipMoneyCity]").val(),
    //    CustomerComments: $("[id$=otrZipMoneyPostcode]").val(),
    //    State: $("[id$=ddlotrZipMoneyState]").val(),
    //    BirthDate: $("[id$=otrZipMoneyBirthDate]").val()
    //};

    $.ajax({
        url: baseUrl + "webapi/lead/createlead",
        type: "POST",
        dataType: "json",
        crossDomain: false,
        data: JSON.stringify(model),
        contentType: "application/json; charset=utf-8",
        //success: ZipMoneySucess,
        //error: ZipMoneyError
    });
    
}

function WebApiCall(type, resource, data, callback, error) {

    var protocol =  window.location.protocol;
    
    $.ajax({
        url: (protocol + webApiBaseUrl + resource).toLowerCase(),
        type: type,
        dataType: 'json',
        crossDomain: false,
        data: data,
        contentType: "application/json; charset=utf-8",
        beforeSend: function (xhr) {
            xhr.setRequestHeader("Authorization", 'Basic VHlyZXNhbGVzOjJCQTlGMUQzLUI0RDAtNDc3Qy1BMkY5LTE3MzJEMEU1MTNEQQ==');
        },
        xhrFields: {
            withCredentials: true
        },
        success: callback,
        error: error
    });
}

//headers: {
//    "Authorization": 'Basic VHlyZXNhbGVzOjJCQTlGMUQzLUI0RDAtNDc3Qy1BMkY5LTE3MzJEMEU1MTNEQQ=='
//},

//beforeSend: function (xhr) {
//    xhr.setRequestHeader("Authorization", 'Basic VHlyZXNhbGVzOjJCQTlGMUQzLUI0RDAtNDc3Qy1BMkY5LTE3MzJEMEU1MTNEQQ==');
//},

function make_base_auth(user, password) {
    var tok = user + ':' + password;
    var hash = $.base64.encode(tok);
    return "Basic " + hash;
}

function pageLoad() {
    $(".removeMyTyre").click(function () {
        decrementTyreCount();
    });
}

function incrementTyreCount() {
    var currentCount = parseInt($("#myTyreCount").html(), 10);
    $("#myTyreCount").html(currentCount + 1);
}

function decrementTyreCount() {
    var currentCount = parseInt($("#myTyreCount").html(), 10);
    if (currentCount != 0)
        $("#myTyreCount").html(currentCount - 1);
}

function hasCustomDropdowns() {
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        //retun false for now as styled dropdowns aren't needed
        return false;
    }
    return false;
}

function isMobile(){
    if($(window).width() <= 640){
        return true;
    }

    return false;
}

function isEmpty(str) {
    return (!str || 0 === str.length);
}

function reformatTyreSizeWithHypen(str) {
    return str.replace("/", "-");
}

function emptyDropDownList(selectText, listobject) {
    var items = [];

    items.push(('<option value="">' + selectText + '</option>'));

    listobject.find('option').remove();
    listobject.append(items.join(''));
}


function setActiveTab(url) {

    var searchType = getParameterByNameAndURL("search", url);

    switch (searchType) {
        case "brand":
            //$('.mainSearch li a').removeClass('selected');
            $('.tabNavigation li a[href=#searchBrandDiv]').click();
            break;

        case "size":
            $('.tabNavigation li a[href=#searchSizeDiv]').click();
            break;

        //case "vehicle":
        //    $('.tabNavigation li a[href=#searchVehicleDiv]').click();
        //    break;
        default:
            $('.tabNavigation li a[href=#searchVehicleDiv]').click();
    }
}

// ga('send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue], [fieldsObject]);
function SendGoogleAnalytics(send, event, eventAction, eventLabel, eventValue) {
    if (configurationType === "Production" && ga) {
        ga(send, event, eventAction, eventLabel, eventValue);
    }
}

function SendGoogleTagManager(event, callback) {
    if (event && window['google_tag_manager'] && dataLayer) {
        event.eventCallback = function (containerId) {
            // Google's newer "gtag" uses a GTM container under the hood, so without this check all eventCallbacks are executed twice
            if (containerId === GlobalGTMContainerId) {
                callback();
            }
        };
        // Never mind the tracking if something is holding up GTM for 2 seconds
        event.eventTimeout = 2000;
        dataLayer.push(event);
    } else {
        // GTM hasn't been loaded, likely because of tracking blockers
        callback();
    }
}


function findBootstrapEnvironment() {
    var envs = ['xs', 'sm', 'md', 'lg'];

    var $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-' + env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env;
        }
    }
}