// dependency: /scripts/ajax.request.js

// Collection of methods used for accessing tyresales web api calls via javascript

var tyresalesapi = {

    // params.tyreId : ID of the tyre to be added to quote
    // params.quantity : quantity of tyre to add
    // params.context : object containing any values that need to be passed back to the callback function
    // params.onTyreAdded : event which is fired once tyre has been successfully added
    //addToQuote: function (params) {

    //    var sessionid = tyresalesapi.Session();

    //    // construct payload for web api call
    //    var payload = "{\"TyreId\":" + params.tyreId + ", \"Quantity\":" + params.quantity + "}";

    //    // add selected tyre to users tyre list via tyresales web api
    //    WebApiCall('POST', "/session/" + sessionid + "/mytyres", payload, params.onTyreAdded(params.context));
    //},

    //getQuoteList: function (callback) {

    //    var sessionid = tyresalesapi.Session();

    //    WebApiCall('GET', "/session/" + sessionid + "/mytyres?format=json", null, callback);
    //},

    //createNewSession: function () {
    //    var sessionid = null;
    //    // this call does not seem to be returning correctly ... works fine from browser though ..
    //    WebApiCall('GET', '/session', null, function (data) {
    //        $.cookie('ts-sessionid', data);
    //        sessionid = data;
    //    });
    //    return sessionid;
    //},

    //Session: function () {
    //    var sessionid = $.cookie('ts-sessionid');
    //    // ensure we have a session setup, if not, create one
    //    if (sessionid == null) {
    //        sessionid = this.createNewSession();
    //    }
    //    return sessionid;
    //},

    //// params.tyreId : ID of the tyre to be removed from quote
    //// params.quantity : quantity of tyre *THIS param IS IGNORED*
    //// params.context : object containing any values that need to be passed back to the callback function
    //// params.onTyreAdded : event which is fired once tyre has been successfully removed
    //deleteFromQuoteList: function (params) {

    //    var sessionid = tyresalesapi.Session();

    //    // construct payload for web api call
    //    var payload = "{\"TyreId\":" + params.tyreId + ", \"Quantity\":0}";

    //    // add selected tyre to users tyre list via tyresales web api
    //    WebApiCall('DELETE', "/session/" + sessionid + "/mytyres", payload, params.onTyreRemoved(params.context));
    //},

    // Search for tyres. 
    // Use searchType to specify what to search by (brand, size, vehicle)
    search: function (params) {

        switch (params.searchType) {
            case "brand":
                tyresalesapi.searchByBrand(params);
                break;
            case "size":
                tyresalesapi.searchBySize(params);
                break;
            case "vehicle":
                tyresalesapi.searchByVehicle(params);
                break;
            //case "hotdeal":
            //    tyresalesapi.searchByHotdeal(params);
            //    break;
        }
    },

    searchByBrand: function (params) {
        
        // need to at least have brandname defined to do this search
        if (params.brand == "")            
            return;

        var toDelivery = '';
        if (!isEmpty(params.toDelivery)) {
            toDelivery = '&toDelivery=' + params.toDelivery;
        }

        var searchUtil = new Search();
        var size = searchUtil.createTyreSize(params.width, params.aspect, params.rim);
        
        // only include eco and runflat if values have been specified
        var runflat = '';
        var eco = '';
        var loadIndex = '';
        var speedIndex = '';
        var specification = '';
        var traCode = '';
        var currencyType = '';

        if (!isEmpty(params.currencyType)) {
            currencyType = '&currencyType=' + params.currencyType;
        }

        if (params.runflat != '' && params.runflat != undefined) {
            runflat = '&RunFlat=' + params.runflat;
        }

        if (params.eco != '' && params.eco != undefined) {
            eco = '&Eco=' + params.eco;
        }

        if (!isEmpty(params.load)) {
            loadIndex = "&LoadIndex=" + params.load;
        }

        if (!isEmpty(params.speed)) {
            speedIndex = "&SpeedIndex=" + params.speed;
        }

        if (params.tyreType == 3) {
            if (!isEmpty(params.specification)) {
                specification = "&specification=" + params.specification;
            }
            if (!isEmpty(params.traCode)) {
                traCode = "&traCode=" + params.traCode;
            }
        }



        //WebApiCall('GET', "/brands/" + params.brand + "/" + encodeURIComponent(params.pattern) + "/tyres?Size=" + size + "&SpeedIndex=" + params.speed + "&LoadIndex=" + params.load + runflat + eco + "&format=json", null, params.callback);
        WebApiCall('GET', "/tyres?tyreType=" + params.tyreType + "&brandname=" + params.brand + "&patternname=" + encodeURIComponent(params.pattern) + "&Size=" + size + speedIndex + loadIndex + runflat + eco + traCode + specification + currencyType + toDelivery + "&format=json", null, params.callback);
    },

    searchBySize: function (params) {

        // only include eco and runflat if values have been specified
        var runflat = '';
        var eco = '';
        var specification = '';
        var traCode = '';
        var position = '';
        var loadIndex = '';
        var speedIndex = '';
        var currencyType = '';
        var toDelivery = '';

        if (!isEmpty(params.toDelivery)) {
            toDelivery = '&toDelivery=' + params.toDelivery;
        }


        if (!isEmpty(params.currencyType)) {
            currencyType = '&currencyType=' + params.currencyType;
        }


        if (params.runflat != '' && params.runflat != undefined) {
            runflat = '&RunFlat=' + params.runflat;
        }

        if (params.eco != '' && params.eco != undefined) {
            eco = '&Eco=' + params.eco;
        }

        var size = '';

        if (params.tyreType == 3) {
            if (!isEmpty(params.specification)) {
                specification = "&specification=" + params.specification;
            }
            if (!isEmpty(params.traCode)) {
                traCode = "&traCode=" + params.traCode;
            }
        }
        else if (params.tyreType == 2) {
            if (!isEmpty(params.position)) {
                position = "&position=" + params.position;
            }
        }

        if (!isEmpty(params.load)) {
            loadIndex = "&LoadIndex=" + params.load;
        }

        if (!isEmpty(params.speed)) {
            speedIndex = "&SpeedIndex=" + params.speed;
        }
        

        var searchUtil = new Search();
        var tyreSize = searchUtil.createTyreSize(params.width, params.aspect, params.rim);
        size = tyreSize;
        
        WebApiCall('GET', "/tyres?tyreType=" + params.tyreType + "&size=" + size.toLowerCase() + speedIndex + loadIndex + runflat + eco + traCode + specification + position + currencyType + toDelivery + "&format=json", null, params.callback);
    },

    searchByVehicle: function (params) {

        var toDelivery = '';

        if (!isEmpty(params.toDelivery)) {
            toDelivery = '&toDelivery=' + params.toDelivery;
        }

        //WebApiCall('GET', "/vehicles/" + params.make + "/" + encodeURIComponent(params.model) + "/" + params.year + "/" + encodeURIComponent(params.series) + "/tyres?Size=" + params.size + "&SpeedIndex=" + params.speed + "&LoadIndex=" + params.load + "&format=json", null, params.callback);
        WebApiCall('GET', "/tyres?Make=" + params.make + "&Model=" + encodeURIComponent(params.model) + "&Year=" + params.year + "&Series=" + encodeURIComponent(params.series) + "&Size=" + params.size.toLowerCase() + "&SpeedIndex=" + params.speed + "&LoadIndex=" + params.load + toDelivery + "&format=json", null, params.callback);
    },

    //searchByHotdeal: function (params) {
    //    WebApiCall('GET', "/hotdeals/" + params.hotdeal + "/tyres?format=json", null, params.callback);
    //},

    //findRelatedTyres: function (params) {
    //    WebApiCall('GET', "/tyres/" + params.tyreId + "/related?format=json", null, params.callback);
    //},

    getVehicleYears: function (params) {
        WebApiCall('GET', "/vehicle/years/list?format=json", null, params.callback);
    },

    getVehicleMakes: function (params) {
        WebApiCall('GET', "/vehicle/" + params.year + "/makes/list?format=json", null, params.callback);
    },

    getVehicleModels: function (params) {
        WebApiCall('GET', "/vehicle/" + params.year + "/" + params.make + "/models/list?format=json", null, params.callback);
    },

    getVehicleSeries: function (params) {
        WebApiCall('GET', "/vehicle/" + params.year + "/" + encodeURIComponent(params.make) + "/" + encodeURIComponent(params.model) + "/series/list?format=json", null, params.callback);
    },

    getVehicle: function (params) {
        WebApiCall('GET', "/vehicles?year=" + params.year + "&make=" + params.make + "&model=" + encodeURIComponent(params.model) + "&series=" + encodeURIComponent(params.series) + "&format=json", null, params.callback);
    },

    getVehicleByRego: function (params) {
        WebApiCall('GET', "/vehicles/" + params.state + "/" + params.rego + "?format=json", null, params.callback, params.onerror);
    },

    getTyreWidths: function (params) {
        WebApiCall('GET', "/tyres/width/" + params.tyreType + "/list?format=json", null, params.callback);
    },

    getTyreAspectRatios: function (params) {
        WebApiCall('GET', "/tyres/aspectratio/" + params.tyreType + "/" + params.sectionWidth + "/list?format=json", null, params.callback);
    },

    getTyreRimDiameters: function (params) {
        WebApiCall('GET', "/tyres/rimdiameter/ " + params.tyreType + "/" + params.sectionWidth + "/" + params.aspectRatio + "/list?format=json", null, params.callback);
    },

    getTyreLoadIndexes: function (params) {
        WebApiCall('GET', "/tyres/loadindex/" + params.tyreType + "/list?format=json", null, params.callback);
    },

    getTyreSpeedIndexes: function (params) {
        WebApiCall('GET', "/tyres/speedindex/" + params.tyreType + "/list?format=json", null, params.callback);
    },

    getBrands: function (params) {
        WebApiCall('GET', "/brands/" + params.tyreType + " ?format=json", null, params.callback);
    },

    getPatterns: function (params) {
        WebApiCall('GET', "/brands/" + params.tyreType + "/" + params.brand + "/patterns/list?format=json", null, params.callback);
    },

    getOtrTyreDimensions: function (params) {
        WebApiCall('GET', "/tyresotr/dimensions/" + params.tyreType + "/" + params.rimDiameter + "/list?format=json", null, params.callback);
    },

    getOtrTraCode: function (params) {
        WebApiCall('GET', "/tyresotr/tracode/" + params.tyreType + "/" + params.sectionWidth + "/" + params.rimDiameter + "/list?format=json", null, params.callback);
    },

    // params:
    // size - expected format <width>/<aspect>R<rim>
    // load - load index
    // speed - speed index
    // callback - function to call once GET call completes
    findDealOfTheDay: function (params) {

        var currencyType = '';
        var toDelivery = '';

        if (!isEmpty(params.currencyType)) {
            currencyType = '&currencyType=' + params.currencyType;
        }

        if (!isEmpty(params.toDelivery)) {
            toDelivery = '&toDelivery=' + params.toDelivery;
        }

        if (params.load == "")
            params.load = "";
        if (params.speed == "")
            params.speed = "";

        if (params.make == undefined)
            params.make = "";
        if (params.model == undefined)
            params.model = "";
        if (params.year == undefined)
            params.year = "";
        if (params.brand == undefined)
            params.brand = "";
        if (params.pattern == undefined)
            params.pattern = "";

        if (params.sizeSearch == undefined)
            params.sizeSearch = false;

        if (params.tyreType == undefined)
            params.tyreType = null;

        var runflat = '';
        var eco = '';
        if (params.runflat != '' && params.runflat != undefined) {
            runflat = '&RunFlat=' + params.runflat;
        }

        if (params.eco != '' && params.eco != undefined) {
            eco = '&Eco=' + params.eco;
        }

        var specification = '';
        var traCode = '';
        var position = '';

        if (params.tyreType == 3) {
            if (!isEmpty(params.specification)) {
                specification = "&specification=" + params.specification;
            }
            if (!isEmpty(params.traCode)) {
                traCode = "&traCode=" + params.traCode;
            }
        }
        else if (params.tyreType == 2) {
            if (!isEmpty(params.position)) {
                position = "&position=" + params.position;
            }
        }

 	   
        var dealofthesize = isEmpty(params.size) ? '' : params.size.toLowerCase();

        WebApiCall('GET', "/tyres/dealofday?tyreType=" + params.tyreType + "&size=" + dealofthesize + "&loadindex=" + params.load + "&speedindex=" + params.speed + "&make=" + params.make + "&model=" + params.model + "&year=" + params.year + "&sizeSearch=" + params.sizeSearch + "&brand=" + params.brand + "&pattern=" + encodeURIComponent(params.pattern) + eco + runflat + traCode + specification + position + currencyType + toDelivery + "&format=json", null, params.callback);
    }

};


