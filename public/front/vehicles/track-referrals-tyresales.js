/* ---------------------
 * SEO/SEM Tracking Code
 * --------------------- */
// version 1.02 2012-02-16 - For www.carsales.com.au

//Detect if SEM or SEO
var docLoc = document.location;
var loc = location.href;
var urlGet = loc.split('?');
var docRef = document.referrer;
var domain = docRef.split('/');
var trackingType = getURLVariable('trackingType');
var referrerTypes = {none:0,internal:1,external:2};
var socialMediaSites = ['facebook','twitter','youtube'];
var csNetwork = ["bikesales", "boatsales", "caravancampingsales", "carsales", "redbook", "motoring", "trucksales", "carpoint", "bikepoint", "boatpoint", "farmmachinerysales", "constructionsales", "livemarket", "discountnewcars", "carsalesnetwork"];

if(!trackingType) {
	var trackingType = 'other'; // default tracking type if none is found in the URL
};

// debugging
var testref = getURLVariable('testref');
if(testref != "")
{
	docRef = decodeURIComponent(testref);
	domain = docRef.split('/');
};
// end debugging

function isSEO()
{
	var dr = docRef.toLowerCase(),
	    isSeo = false;
	
	if (trackingType == 'SEO') {
		isSeo = true;
	}
	else if(docRef != ''){
		isSeo = (
		   (dr.indexOf('.google.')>0 && (dr.indexOf('&q=')>0 || dr.indexOf('?q=')>0 || dr.indexOf('query=')>0 )) 
		   || (dr.indexOf('.bing.')>0 && dr.indexOf('?q=')>0)
		   || (dr.indexOf('.yahoo.')>0 && dr.indexOf('p=')>0) 
		   || (dr.indexOf('.baidu.')>0 && dr.indexOf('?wd=')>0)
		   || (dr.indexOf('.search.com')>0 && dr.indexOf('?q=')>0)
		   || (dr.indexOf('.aol.')>0 && dr.indexOf('query=')>0)
		   || (dr.indexOf('.ask.')>0 && dr.indexOf('?q=')>0)
		);
	}

	return isSeo;
};

function isSEM()
{
	return (isSEO() && docLoc.search.toLowerCase().indexOf('gclid')>0) || trackingType == 'SEM';
};

function isSocial()
{
	var sm = socialMediaSites;
	var rd = "", rdLower = "";
	
	if(domain.length>=3)
		rd = domain[2];
	else
		return false;
	
	rdLower = rd.toLowerCase();
	for(var i=0, smLength = sm.length; i<smLength; i++)
	{
		if( rdLower.indexOf(sm[i].toLowerCase())>=0 )
			return true;
	}
	return false;
};

function isCarSalesNetwork()
{
   var dr = docRef.toLowerCase();
   
   for(var i = 0, csnl = csNetwork.length; i<csnl; i++)
   {
      if( dr.indexOf(csNetwork[i].toLowerCase())>=0 )
         return true;
   }
   return false;
};

function isBrandRel()
{
   var dr = docRef.toLowerCase(),
       bre = /=(?:www\.)*tyre(?:%20|\+)*sales(?:\.com\.au)*(?:&|$)/i,
       pqre = /pq=(?:www\.)*tyre(?:%20|\+)*sales(?:\.com\.au)*(?:&|$)/i;
   
   return ( bre.test(dr) && !pqre.test(dr) );
};

function getReferralType()
{
	var dr = docRef.toLowerCase();
	
	if( !dr )
		return referrerTypes.none;
	
	else if( dr.indexOf('quicksales.com.au')>0 )
		return referrerTypes.internal;
	
	else if( dr.indexOf('http')>=0 )
		return referrerTypes.external;
	
	else
		return referrerTypes.none;
};

var referralType = getReferralType(),
    isSeo = isSEO(),
    isSem = isSEM(),
    isBrand = isBrandRel(),
    zch = "";

try{
   zch = getZchValFromCookie();

   if( !zch )
{
if( isSeo )
{
   if( isSem && isBrand )
      zch = "Paid search - Brand related";
   
   else if( isSem && !isBrand )
      zch = "Paid search - Non-brand";
   
   else if( !isSem && isBrand )
      zch = "Organic search - Brand related";
   
   else
      zch = "Organic search - Non-brand";
}
else if( isSocial() )
	zch = "Social Media";

else if( isCarSalesNetwork() )
   zch = "Car Sales Network";

   else if( !isSem && (referralType==referrerTypes.none || referralType==referrerTypes.internal) )
	zch = "Direct to site";

else
   zch = "Other";
   };

writeWTMeta(zch);
   setWtSessionCookie(zch); // set a session cookie to flag that the session is active
}
catch(err){}

function getURLVariable(name)
{
	name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
	var regexS = "[\\?&]"+name+"=([^&#]*)";
	var regex = new RegExp( regexS );
	var results = regex.exec( window.location.href );
	if( results == null )
		return "";
	else
		return results[1];
};

function writeWTMeta(val)
{
	if( val ) {
		//document.write('<meta name="WT.tsrc" content="' + val + '" />');
	}
};

function getZchValFromCookie()
{
   var _ucookies = document.cookie.split(";"),
       _cookieVal = "",
       np = [], 
       i = 0, _ucl = _ucookies.length;
   
   for(i = 0; i < _ucl; i++)
   {
      np = _ucookies[i].split("=");
      nc = _trim(np[0]);
		if(nc.toLowerCase() == '_wtsa')
		{
         _cookieVal = decodeURIComponent(_trim(np[1]));
		}
	}
	
   return _cookieVal;
};

function setWtSessionCookie(cVal)
{
   var t = new Date(), cVal = cVal || "1";
   t.setTime(t.getTime()+1800000);
   document.cookie = "_wtsa=" + cVal + ";expires=" + t.toGMTString() + ';path=/';
};

function _trim(val)
{
   return val.replace(/^\s+|\s+$/g, '');
};