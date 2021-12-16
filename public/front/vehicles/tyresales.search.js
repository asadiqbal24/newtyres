var Search = function() {
    
};

Search.prototype = function() {

    searchUrl = function(tyreSizeSearch) {
        return searchUrlParameter(tyreSizeSearch.SearchType, tyreSizeSearch.TyreType, tyreSizeSearch.Brand, tyreSizeSearch.Pattern, tyreSizeSearch.SectionWidth, tyreSizeSearch.AspectRatio, tyreSizeSearch.RimDiameter, tyreSizeSearch.LoadIndex, tyreSizeSearch.SpeedIndex, tyreSizeSearch.Dimension, tyreSizeSearch.TraCode, tyreSizeSearch.Runflat, tyreSizeSearch.Eco, tyreSizeSearch.Specification, tyreSizeSearch.Position);
        },
    searchUrlParameter = function(searchType, tyreType, brand, pattern, sectionWidth, aspectRatio, rimDiameter, loadIndex, speedIndex, dimension, traCode, runflat, eco, specification,position) {

        var brandParameter = '';
        var patternParameter = '';
        var sectionWithParameter = '';
        var aspectRatioParameter = '';
        var rimDiameterParameter = '';
        var loadIndexParameter = '';
        var speedIndexParameter = '';
        var dimensionParameter = '';
        var traCodeParameter = '';
        var runflatParameter = '';
        var ecoParameter = '';
        var specificationParameter = '';
        var positionParameter = '';

        if (!isEmpty(brand)) {
                brandParameter = "&brand=" + brand;
        }
        if (!isEmpty(pattern)) {
            patternParameter = "&pattern=" + pattern;
        }
        if (!isEmpty(sectionWidth)) {
            sectionWithParameter = "&width=" + sectionWidth;
        }
        if (!isEmpty(aspectRatio)) {
            aspectRatioParameter = "&aspect=" + aspectRatio;
        }
        if (!isEmpty(rimDiameter)) {
            rimDiameterParameter = "&rim=" + rimDiameter;
        }
        if (!isEmpty(loadIndex)) {
            loadIndexParameter = '&load=' + loadIndex;
        }
        if (!isEmpty(speedIndex)) {
            speedIndexParameter = '&speed=' + speedIndex;
        }
        if (!isEmpty(dimension)) {
            dimensionParameter = "&dim=" + reformatTyreSizeWithHypen(dimension);
        }
        if (!isEmpty(traCode)) {
            traCodeParameter = "&tra=" + traCode;
        }
        if (!isEmpty(specification)) {
            specificationParameter = "&spec=" + specification;
        }
        if (!isEmpty(runflat)) {
            runflatParameter = '&runflat=true';
        }
        if (!isEmpty(eco)) {
            ecoParameter = '&eco=true';
        }
        if (!isEmpty(position)) {
            positionParameter = '&position=' + position;
        }

        var urlString = searchTypeParameter(searchType) + brandParameter + patternParameter + sectionWithParameter + aspectRatioParameter + rimDiameterParameter + loadIndexParameter + speedIndexParameter + dimensionParameter + traCodeParameter + runflatParameter + ecoParameter + specificationParameter + positionParameter;

        return urlString.toLowerCase();

        },
        searchTypeParameter = function(searchParameter) {
            var result = null;
            switch (searchParameter) {
            case "size":
                result = "/search?search=size";
                break;
            case "brand":
                result = "/search?search=brand";
                break;
            case "vehicle":
                result = "/search?search=vehicle";
                break;
            case "rego":
                result = "/search?search=rego";
                break;
            case "sizeotr":
                result = "/otr?search=sizeotr";
                break;
            case "brandotr":
                result = "/otr?search=brandotr";
                break;
            case "vehicleotr":
                result = "/otr?search=vehicleotr";
                break;
            case "sizetruck":
                result = "/truck?search=sizetruck";
                break;
            case "brandtruck":
                result = "/truck?search=brandtruck";
                break;
            case "vehicletruck":
                result = "/truck?search=vehicletruck";
                break;
            };
            return result;
        },
        searchTyreType = function (searchParameter) {
            var result = null;
            switch (searchParameter) {
                case "size":
                    result = 1;
                    break;
                case "brand":
                    result = 1;
                    break;
                case "vehicle":
                    result = 1;
                    break;
                case "rego":
                    result = 1;
                    break;
                case "sizeotr":
                    result = 3;
                    break;
                case "brandotr":
                    result = 3;
                    break;
                case "vehicleotr":
                    result = 3;
                    break;
                case "sizetruck":
                    result = 2;
                    break;
                case "brandtruck":
                    result = 2;
                    break;
                case "vehicletruck":
                    result = 2;
                    break;
            };
            return result;
        },


        replaceHyphenWithDash = function (text) {

            if (!isEmpty(text)) {
                return text.replace('/', '-');
            }
        }
        getTyreDimensions = function(size) {

            var tyre = new TyreSearch();

            size.replace('/', '-');

            var firstsplit = size.split('-');
            // Testing for if aspect ratio exists
            if (firstsplit.length == 2) {
                tyre.SectionWidth = firstsplit[0];
                var secondresult = firstsplit[1];

                if (!isEmpty(secondresult)) {

                    var secondsplit = secondresult.toLowerCase().split('r');

                    if (secondsplit.length == 2) {
                        tyre.AspectRatio = secondsplit[0];
                        tyre.RimDiameter = secondsplit[1];
                    }
                }
            } else {

                if (!isEmpty(size)) {

                    var thridsplit = size.toLowerCase().split('r');

                    if (thridsplit.length == 2) {
                        tyre.SectionWidth = thridsplit[0];
                        tyre.AspectRatio = "";
                        tyre.RimDiameter = thridsplit[1];
                    }
                }
            }

            return tyre;
        }
        createTyreSize = function (sectionWdith, aspectRatio, rimDiameter) {

            var stringSectionWidth = isEmpty(sectionWdith) ? '' : sectionWdith;
            var stringAspsectRatio = isEmpty(aspectRatio) ? '' : '/' + aspectRatio;
            var stringRimDiameter = isEmpty(rimDiameter) ? '' : 'R' + rimDiameter;

             var size = stringSectionWidth + stringAspsectRatio + stringRimDiameter;

             return size;
        };

    return{
        searchUrl: searchUrl,
        createTyreSize: createTyreSize,
        searchTyreType: searchTyreType,
        getTyreDimensions: getTyreDimensions
    };
}();

function TyreSearch() {
    this.SearchType = null;
    this.TyreType = null;
    this.CurrencyType = null;
    this.Brand = null;
    this.Pattern = null;
    this.SectionWidth = null;
    this.AspectRatio = null;
    this.RimDiameter = null;
    this.LoadIndex = null;
    this.SpeedIndex = null;
    this.Dimension = null;
    this.TraCode = null;
    this.Runflat = null;
    this.Eco = null;
    this.Specification = null;
    this.Position = null;
}


