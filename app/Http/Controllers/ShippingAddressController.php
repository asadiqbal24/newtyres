<?php

namespace App\Http\Controllers;

use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use App\Models\Regions;
use App\Models\Country;


class ShippingAddressController extends Controller
{

    public function shipping_address(){


        $page_title = 'Shipping Address';
        $regions = Regions::all();
        $countries = Country::all();        
        $address = ShippingAddress::first();
                  
        return view('admin.shipping_address',compact('page_title','address','regions','countries'));

    }

    public function shipping_address_address(Request $r){

        $address = ShippingAddress::first();

        $state = Regions::where('id',$r->state)->first();
        $country = Country::where('id',$r->country)->first();   

        $geocode=file_get_contents('http://open.mapquestapi.com/geocoding/v1/address?key=SxS9jKDL6miSo2moEazkKgZfD7RCCOOA&location='.$r->city.','.$r->postal_code.','.$state->name.','.$country->name);

        $output= json_decode($geocode);

        $latitude = $output->results[0]->locations[0]->displayLatLng->lat;
        $longitude = $output->results[0]->locations[0]->displayLatLng->lng;


/*dd($latitude.' '.$longitude);        


$latitudeFrom = '33.6844';
$longitudeFrom = '73.0479';
*/
/*$latitudeTo = $latitude;
$longitudeTo = $longitude;*/

//Calculate distance from latitude and longitude
/*$theta = $longitudeFrom - $longitudeTo;
$dist = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
$dist = acos($dist);
$dist = rad2deg($dist);
$miles = $dist * 60 * 1.1515;

echo $distance = ($miles * 1.609344).' km';*/


        // dd('a');

        if(!empty($address)){

            $address->address1  = $r->address1; 
            $address->address2 = $r->address2;  
            $address->city  = $r->city;   
            $address->state  = $r->state;  
            $address->country  = $r->country;
            $address->postal_code  = $r->postal_code;
            $address->latitude = $latitude;
            $address->longitude = $longitude;
            $address->direct_shipment_discount = $r->direct_shipment_discount;
            $address->save();            

        }else{
            $address = new ShippingAddress();
            $address->uid = md5(date('Y-m-d').microtime()); 
            $address->address1  = $r->address1; 
            $address->address2 = $r->address2;  
            $address->city  = $r->city;   
            $address->state  = $r->state;  
            $address->country  = $r->country;
            $address->postal_code  = $r->postal_code;
            $address->latitude = $latitude;
            $address->longitude = $longitude;
            $address->direct_shipment_discount = $r->direct_shipment_discount;
            $address->save();
        }


        alert()->success('Saved...!!!');
        return redirect()->back();

    }

}
