<?php

namespace App\Http\Controllers;

use App\Models\FitmentLocations;
use App\Models\FitmentLocationsAreas;
use App\Models\FitmentLocationsAreaCenters;
use App\Models\Vehicles;
use Illuminate\Http\Request;
use App\Models\Regions;
class FitmentLocationsController extends Controller
{


    public function fitment_locations(){
        $page_title = 'Fitment Locations';
        $regions = Regions::with('fitment_areas.fitment_locations')->get();
        return view('home.fitment_locations',compact('page_title','regions'));
    }

    public function fitment_locations_areas($state,$slug){
        $page_title = 'Fitment Locations';
    	$locations = FitmentLocations::where('url',$slug)->first();
        $fitment_area = FitmentLocationsAreas::where('fitment_location_id',$locations->id)->with('fitment_areas_center')->get()->chunk(4);
        return view('home.fitment_locations_centers',compact('page_title','locations','fitment_area','state'));
    }


    public function fitment_locations_areas_center($state,$slug,$area_slug){
        return redirect()->back();
    }

    public function admin_fitment_centers(){

        $page_title = 'Fitment Locations';
        $reg_name = NULL;
        $regions_d = Regions::with('fitment_areas.fitment_locations')->get();
        return view('admin.fitment_locations',compact('page_title','regions_d','reg_name'));


    }


    public function admin_fitment_area($url){
        
        $page_title = 'Fitment Locations';
        $reg = Regions::where('url',$url)->first();        
        $reg_name = $reg->name;
        $regions_d = FitmentLocations::where('state_id',$reg->id)->get();
        return view('admin.fitment_locations',compact('page_title','regions_d','reg_name','reg'));        

    }

    public function admin_fitment_center($slug,$url){
    

        $page_title = 'Fitment Locations';
        $reg = Regions::where('url',$slug)->first();        
        $reg_name = $reg->name;
        $ft = FitmentLocations::where('url',$url)->first();
        $fit_area = $ft->name; 

        $regions_d = FitmentLocationsAreas::where('fitment_location_id',$ft->id)->with('fitment_areas_center')->get();        
        return view('admin.fitment_centers',compact('page_title','regions_d','reg_name','reg','fit_area','ft'));        

    }

    public function admin_fitments_center($slug,$url,$area_slug){


        $page_title = 'Fitment Locations';
        $reg = Regions::where('url',$slug)->first();        
        $reg_name = $reg->name;
        $ft = FitmentLocations::where('url',$url)->first();
        $fit_area = $ft->name; 

        $ftc = FitmentLocationsAreas::where('url',$area_slug)->first();
        $fit_areac = $ftc->name; 

        $vehicles = Vehicles::all();
        $regions_d = FitmentLocationsAreaCenters::where('area_id',$ftc->id)->get();        
        return view('admin.fitment_centers',compact('page_title','regions_d','reg_name','reg','fit_area','ft','ftc','fit_areac','vehicles'));        



    }

    public function admin_fitment_loc_save(Request $r){

        $chk = FitmentLocations::where('name',$r->name)->where('state_id',$r->region_name)->first();
        if(!empty($chk)){

            alert()->warning('Exist...!!!');
            return redirect()->back();

        }else{


            $new = new FitmentLocations();  
            $new->name = $r->name;
            $new->state_id = $r->region_name;
            $url = str_replace(' ','-',$r->name);
            $new->url = strtolower($url);
            $new->description = $r->desc;
            $new->post_code = $r->post_code;
            $new->save();

            alert()->success('Added...!!!');
            return redirect()->back();            
        }

    }

    public function admin_fitment_loc_update(Request $r){

        $chk = FitmentLocations::where('id','!=',$r->fitment_id)->where('name',$r->name)->where('state_id',$r->region_name)->first();
        if(!empty($chk)){

            alert()->warning('Exist...!!!');
            return redirect()->back();

        }else{


            $new = FitmentLocations::where('id',$r->fitment_id)->first();  
            $new->name = $r->name;
            $new->state_id = $r->region_name;
            $url = str_replace(' ','-',$r->name);
            $new->url = strtolower($url);
            $new->description = $r->desc;
            $new->post_code = $r->post_code;
            $new->save();

            alert()->success('Saved...!!!');
            return redirect()->back();            
        }

    }



    public function fitment_area_save(Request $r){


        $reg = FitmentLocations::where('id',$r->region_name)->first();        
        $chk = FitmentLocationsAreas::where('name',$r->name)->where('fitment_location_id',$r->region_name)->first();
        if(!empty($chk)){

            alert()->warning('Exist...!!!');
            return redirect()->back();

        }else{


            $new = new FitmentLocationsAreas();  
            $new->name = $r->name;
            $new->fitment_location_id = $r->region_name;
            $new->state_id = $reg->state_id;
            $url = str_replace(' ','-',$r->name);
            $new->url = strtolower($url);
            $new->save();

            alert()->success('Added...!!!');
            return redirect()->back();            
        }

    }


    public function fitment_area_update(Request $r){

        $reg = FitmentLocations::where('id',$r->region_name)->first();        
        $chk = FitmentLocationsAreas::where('id','!=',$r->area_id)->where('name',$r->name)->where('fitment_location_id',$r->region_name)->first();
        if(!empty($chk)){

            alert()->warning('Exist...!!!');
            return redirect()->back();

        }else{


            $new = FitmentLocationsAreas::where('id',$r->area_id)->first();  
            $new->name = $r->name;
            $new->fitment_location_id = $r->region_name;
            $new->state_id = $reg->state_id;
            $url = str_replace(' ','-',$r->name);
            $new->url = strtolower($url);
            $new->save();

            alert()->success('Saved...!!!');
            return redirect()->back();            
        }

    }    

    public function fitment_area_delete($id){

        FitmentLocationsAreas::where('id',$id)->delete();
        FitmentLocationsAreaCenters::where('area_id',$id)->delete();
        alert()->warning('Deleted...!!!');
            return redirect()->back();
    }

    public function fitment_center_save(Request $r){

        $area = FitmentLocationsAreas::where('id',$r->region_name)->first();        
        $chk = FitmentLocationsAreaCenters::where('name',$r->name)->where('area_id',$r->region_name)->first();
        if(!empty($chk)){

            alert()->warning('Exist...!!!');
            return redirect()->back();

        }else{  


            $dealsin = serialize($r->deals_in);

            $new = new FitmentLocationsAreaCenters();  
            $new->name = $r->name;
            $new->fitment_location_id = $area->fitment_location_id;
            $new->state_id = $area->state_id;
            $new->area_id = $area->id;
            $new->address = $r->address;
            $new->deals_in = $dealsin;
            $url = str_replace(' ','-',$r->name);
            $new->url = strtolower($url);
            $new->save();

            alert()->success('Added...!!!');
            return redirect()->back();            
        }

    }
    

    public function fitment_center_update(Request $r){

            $dealsin = serialize($r->deals_in);            
            $new = FitmentLocationsAreaCenters::where('id',$r->fitment_id)->first();  
            $new->name = $r->name;
            $new->deals_in = $dealsin;            
            $new->address = $r->address;
            $url = str_replace(' ','-',$r->name);
            $new->url = strtolower($url);
            $new->save();

            alert()->success('Saved...!!!');
            return redirect()->back();            
    }    
    
    public function admin_fitment_loc_delete($id){
        
        FitmentLocations::where('id',$id)->delete();
        FitmentLocationsAreas::where('fitment_location_id',$id)->delete();
        FitmentLocationsAreaCenters::where('fitment_location_id',$id)->delete(); 
        
        alert()->warning('Deleted...!!!');
            return redirect()->back();          

     }
    public function fitment_center_delete($id){
        

        FitmentLocationsAreaCenters::where('id',$id)->delete(); 
        
        alert()->warning('Deleted...!!!');
            return redirect()->back();          

     }

     public function fitment_center_edit($id){

        $fit = FitmentLocationsAreaCenters::where('id',$id)->first(); 
        $page_title = $fit->name.' Fitment Center';
        $vehicles = Vehicles::all();      
        $deals = unserialize($fit->deals_in); 

        return view('admin.edit_fitment_center',compact('page_title','fit','vehicles','deals'));

     }


     public function find_fitment_center(Request $r){

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
    
        $area_center = FitmentLocationsAreaCenters::whereIn('id',$area_id)->with('fitment_locations')->get();        

        $my = getIp();
        $mlat = $my->latitude;
        $mlong = $my->longitude;        

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

        $distance = ($miles * 1.609344).' km';
        $a->distance = round($distance);


        }
                return $area_center;
    }else{
        return -1;
    }



     }

}
