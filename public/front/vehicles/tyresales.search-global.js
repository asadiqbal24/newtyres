function setupSearchTabs(requestUrl) {

    var $tabContainers = $('.tab');
    var $tabLinks = $('ul.tabNavigation.mainSearch').find('li');

    $tabLinks.children('a').click(function () {
        $tabContainers.hide();
        $tabContainers.filter(this.hash).show();

        $tabLinks.children('a').removeClass('selected');

        var $this = $(this);
        $this.addClass('selected');

        return false;
    });

    if (hasCustomDropdowns()) {
        $tabContainers.find('select').sSelect();
    }

    var searchParam = getParameterByName("search");

    switch (searchParam) {
        case "size":
        case "rego":
            /*$tabLinks.eq(1).children('a').click();*/
            $('#tabSize').click();
            break;
        case "brand":
            /*$tabLinks.eq(3).children('a').click();*/
            $('#tabBrand').click();
            break;
        case "vehicle":
            /*$tabLinks.eq(2).children('a').click();*/
            $('#tabVehicle').click();
            break;
        case "sizeotr":
            $tabLinks.eq(1).children('a').click();
            break;
        case "brandotr":
            $tabLinks.eq(2).children('a').click();
            break;
        case "vehicleotr":
            $tabLinks.eq(2).children('a').click();
            break;
        case "sizetruck":
            $tabLinks.eq(1).children('a').click();
            break;
        case "brandtruck":
            $tabLinks.eq(2).children('a').click();
            break;
        case "vehicletruck":
            $tabLinks.eq(2).children('a').click();
            break;
    };

    //if (searchParam == "") {
    //    var URL = requestUrl;
    //    var nameValue = getParameterByNameAndURL("make", URL);
    //    if (nameValue != "") {
    //        /*$tabLinks.eq(2).children('a').click();*/
    //        $('#tabVehicle').click();
    //    } else {
    //        nameValue = getParameterByNameAndURL("brand", URL);
    //        if (nameValue != "") {
    //            /*$tabLinks.eq(3).children('a').click();*/
    //            $('#tabBrand').click();
    //        } else {
    //            nameValue = getParameterByNameAndURL("rim", URL);

    //            if (nameValue != "") {
    //                /*$tabLinks.eq(1).children('a').click();*/
    //                $('#tabSize').click();
    //            } else {
    //                nameValue = getParameterByNameAndURL("size", URL);
    //                /*$tabLinks.eq(1).children('a').click();*/
    //                $('#tabSize').click();
    //            }
    //        }
    //    }
    //}

}

function BuildDropDownList(data, selectText) {
    var items = [];

    items.push(('<option value="">' + selectText + '</option>'));

    jQuery.each(data.Result, function (index, itemData) {
        if (itemData !== '') {
            items.push('<option value="' + this + '">' + this + '</option>');
        }
    });

    return items;
}

function BuildDropDownListValueDisplay(data, selectText) {
    var items = [];

    items.push(('<option value="">' + selectText + '</option>'));

    if (!isEmpty(data)) {
        jQuery.each(data.Result, function(index, itemData) {
            if (itemData !== '') {
                items.push('<option value="' + this.Value + '">' + this.Display + '</option>');
            }
        });
    }
    return items;
}


function showMask(searchDiv) { 

    if ($overlayMask == undefined) {
        if ($(searchDiv).length > 0) {
            $(searchDiv).prepend('<div class="overlay-mask"></div>');
        }
        else {
            $('.searchOptions').find('.tab').prepend('<div class="overlay-mask"></div>');
        }

        $overlayMask = $('.overlay-mask');
    }
    else {
        $overlayMask.show();
    }
}

function HideMask() {

    if ($overlayMask != undefined) {
        $overlayMask.hide();
    }
}

