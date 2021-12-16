<?php

namespace App\Http\Controllers;

use App\Models\SelectedFitmentCenter;
use App\Models\FitmentLocationsAreaCenters;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\CustomerDetail;
use App\Models\HomeDelivery;

use App\Models\FitmentLocations;
use App\Models\FitmentLocationsAreas;
use App\Models\Regions;
use App\Models\CheckoutCart;
use App\Models\Vehicles;

class SelectedFitmentCenterController extends Controller
{

    public function select_fitment_center(Request $r){

        dd($r);
        $ce = FitmentLocationsAreaCenters::where('id',$r->val)->with('fitment_locations')->first();
        $area = FitmentLocationsAreas::where('id',$ce->area_id)->first();
        $fitmnt = FitmentLocations::where('id',$ce->fitment_location_id)->first();
        $reg = Regions::where('id',$ce->state_id)->first();
        $session_id = Session::getId();

        $ch = SelectedFitmentCenter::where('session_id',$session_id)->first();
        $home = HomeDelivery::where('session_id',$session_id)->first();
        $cu = CheckoutCart::where('session_id',$session_id)->first();
        if(!empty($ch)){

            $ch->cart_id = $cu->id;        
            $ch->fitment_center_id = $r->val;
            $ch->vehicle_id = $r->vehicle_id;        
            $ch->post_code = $r->Step1Postcode;
            $ch->save();            

        }else{  
            $new = new SelectedFitmentCenter();            
            $new->session_id = $session_id;
            if(!Auth::check()){
                        $new->session_id = $session_id;
                    }else{
                        $new->user_id = Auth::user()->id;
                        $new->session_id = $session_id;
                    }
            $new->cart_id = $cu->id;        
            $new->fitment_center_id = $r->val;
            $new->vehicle_id = $r->vehicle_id;        
            $new->post_code = $r->Step1Postcode;
            $new->save();
        }


        if(!empty($home)){

            $home->first_name = $ce->name;        
            $home->last_name = $ce->name;

            $home->address_1 = $ce->address;        
            $home->supurb = $fitmnt->name . ' ' .$area->name;

            $home->state = $reg->name;        
            $home->postcode = $fitmnt->post_code;

            $home->save();            

        }else{  
            $newh = new HomeDelivery();            
            $newh->session_id = $session_id;
            if(!Auth::check()){
                        $newh->session_id = $session_id;
                    }else{
                        $newh->user_id = Auth::user()->id;
                        $newh->session_id = $session_id;
                    }
            $newh->first_name = $ce->name;        
            $newh->last_name = $ce->name;

            $newh->address_1 = $ce->address;        
            $newh->supurb = $fitmnt->name . ' ' .$area->name;

            $newh->state = $reg->name;        
            $newh->postcode = $fitmnt->post_code;

            $newh->save();     
        }


        $my = getIp();
        $mlat = $my->latitude;
        $mlong = $my->longitude;        

        $geocode=file_get_contents('http://open.mapquestapi.com/geocoding/v1/address?key=SxS9jKDL6miSo2moEazkKgZfD7RCCOOA&location='.$ce->address);

        $output= json_decode($geocode);

        $alatitude = $output->results[0]->locations[0]->displayLatLng->lat;
        $alongitude = $output->results[0]->locations[0]->displayLatLng->lng;

        $theta = $mlong - $alongitude;
        $dist = sin(deg2rad($mlat)) * sin(deg2rad($alatitude)) +  cos(deg2rad($mlat)) * cos(deg2rad($alatitude)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        $distance = ($miles * 1.609344).' km';
        $distance = round($distance);
        return view('extras.selected_fitment_center',compact('ce','distance'));

    }


    public function save_appoinment_time(Request $r){
        $date_now = date("Y-m-d"); // this format is string comparable
        if($date_now > $r->selected_date){

            return -1;

        }else{
                
        $session_id = Session::getId();        
        $ch = SelectedFitmentCenter::where('session_id',$session_id)->first();
        $ch->date = $r->selected_date;
        $ch->appointmentTime = $r->appointmentTime;
        $ch->save();

        $dayOfWeek = date("l F d Y", strtotime($r->selected_date));

        return $dayOfWeek;


        }

    }

    public function get_fitment_center(Request $r){
        $ce = FitmentLocationsAreaCenters::where('id',$r->val)->with('fitment_locations')->first();
        return $ce;

    }


    public function find_fitment_centers(Request $r){
        

        $v = $r->vehicle_id;
        $f = FitmentLocations::where('post_code',$r->Step1Postcode)->first();

        if(!empty($f)){

        $areas = FitmentLocationsAreaCenters::where('fitment_location_id',$f->id)->get();

        $area_id = array();

        foreach($areas as $a){
            $center = $a->deals_in;
            $cen = unserialize($center);
            if(in_array($v, $cen)){ 
                array_push($area_id, $a->id);

            }
        }
        


        $area_center = FitmentLocationsAreaCenters::whereIn('id',$area_id)->with('fitment_locations')->where('id','6')->get();



        $areaf = [];

        $my = getIp();
        $mlat = $my->latitude;
        $mlong = $my->longitude;        
        $current_d = 15;

        foreach($area_center as $a){    



        $geocode=file_get_contents('http://open.mapquestapi.com/geocoding/v1/address?key=SxS9jKDL6miSo2moEazkKgZfD7RCCOOA&location='.$a->address);


        $output= json_decode($geocode);

        $alatitude = $output->results[0]->locations[0]->displayLatLng->lat;
        $alongitude = $output->results[0]->locations[0]->displayLatLng->lng;

        $theta = $mlong - $alongitude;
        $dist = sin(deg2rad($mlat)) * sin(deg2rad($alatitude)) +  cos(deg2rad($mlat)) * cos(deg2rad($alatitude)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        $distance = ($miles * 1.609344);
        $a->distance = round($distance);

            if($current_d >= $distance){
                array_push($areaf, $a);

            }

        }

        }else{
            $areaf = [];
            $current_d = 15;

        }




        $page_title = 'Fitment Centres';
        $vehicles = Vehicles::all();

        return view('home.find_fitment_centres',compact('page_title','vehicles','areaf','current_d'));
    }


}
