<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use App\Models\AboutUs;
use App\Models\Settings;
use App\Models\OurTeam;
use App\Models\Sliders;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\FitmentLocations;
use App\Models\FitmentLocationsAreas;
use App\Models\FitmentLocationsAreaCenters;


class RegionsController extends Controller
{


    public function regions(){

       $page_title = 'Admin-Regions';
       //$areas=Area::with('country_name')->select('id','region','country')->groupBy('region')->get(); 
       $regions = Regions::with('country_name')->get();
       $countries=Country::all();        
       return view('admin.regions',compact('page_title','regions','countries'));

    }


    public function region_save(Request $r){

           $regions = Regions::where('name',$r->name)->where('country_id',$r->country)->first();
           if(!empty($regions)){

            alert()->warning('Exists...!!!');

           }else{   

                $newR = new Regions;
                $newR->name = $r->name;
                $newR->country_id = $r->country;
                $newR->status = $r->active;
                $newR->url = str_replace(' ', '-', $r->name);
                $newR->nick = str_replace(' ', '-', $r->name);
                $newR->save(); 
                alert()->success('Saved..!!!');
           }


           return redirect()->back();
    }


    public function region_copy(Request $r){

        $about = AboutUs::where('area_id',$r->area)->get();
        
        foreach($about as $ab){

            $are_ch = AboutUs::where('area_id',$r->selected_id)->where('key_term',$ab->key_term)->first();
            if(empty($are_ch)){

                    $new = new AboutUs;
                    $new->area_id = $r->selected_id;
                    $new->key_term = $ab->key_term;
                    $new->value = $ab->value;
                    $new->save();

            }else{

                    $are_ch->key_term = $ab->key_term;
                    $are_ch->value = $ab->value;
                    $are_ch->save();

            }

        }


        $setting = Settings::where('area_id',$r->area)->get();        
        $set_ch = Settings::where('area_id',$r->selected_id)->delete();

        foreach($setting as $set){

            $new = new Settings;
            $new->area_id = $r->selected_id;
            $new->key_term = $set->key_term;
            $new->value = $set->value;
            $new->save();


/*            $set_ch = Settings::where('area_id',$r->selected_id)->where('key_term',$set->key_term)->first();
            if(empty($set_ch)){

                    $new = new Settings;
                    $new->area_id = $r->selected_id;
                    $new->key_term = $ab->key_term;
                    $new->value = $ab->value;
                    $new->save();

            }else{

                    $set_ch->key_term = $ab->key_term;
                    $set_ch->value = $ab->value;
                    $set_ch->save();

            }*/



        }   

        $team = OurTeam::where('area_id',$r->area)->get();                


        OurTeam::where('area_id',$r->selected_id)->delete();

        foreach($team as $t){

            $new = new OurTeam;
            $new->area_id = $r->selected_id;
            $new->name = $t->name;
            $new->designation = $t->designation;
            $new->about = $t->about;
            $new->image = $t->image;
            $new->save();

    }


            $slider = Sliders::where('area_id',$r->area)->get();                


        Sliders::where('area_id',$r->selected_id)->delete();

        foreach($slider as $s){

            $new = new Sliders;
            $new->area_id = $r->selected_id;
            $new->file = $s->file;
            $new->save();

    }




            $products = Products::where('area_id',$r->area)->get();                


        Products::where('area_id',$r->selected_id)->delete();

        foreach($products as $p){

            $new = new Products;
            $new->area_id = $r->selected_id;
            $new->name = $p->name;
            $new->description = $p->description;
            $new->image = $p->image;
            $new->datasheet = $p->datasheet;
            $new->active = $p->active;
            $new->save();

    }



        alert()->success('Saved');
        return redirect()->back();

  }


    public function region_active($id){

        $re = Regions::where('id',$id)->first();
            if($re->status==1){
                $re->status=0;
            }else{
                $re->status=1;                
            }

        $re->save();

         alert()->success('Saved');
        return redirect()->back();

  }



    public function region_update(Request $r){

    $regions = Regions::where('name',$r->edit_name)->where('id','!=',$r->id)->first();
           if(!empty($regions)){

            alert()->warning('Exists...!!!');

           }else{   

                $newR = Regions::where('id',$r->id)->first();
                $newR->name = $r->edit_name;
                $newR->country_id = $r->edit_country;
                $newR->status = $r->edit_active;
                $newR->url = str_replace(' ', '-', $r->name);
                                $newR->nick = str_replace(' ', '-', $r->name);
                $newR->save(); 
                alert()->success('Saved..!!!');
           }


           return redirect()->back();

  }

  public function region_delete($id){

    Regions::where('id',$id)->delete();

    FitmentLocations::where('state_id',$id)->delete();
    FitmentLocationsAreas::where('state_id',$id)->delete();
    FitmentLocationsAreaCenters::where('state_id',$id)->delete();

    alert()->success('Deleted..!!!');
    return redirect()->back();
  }

}
