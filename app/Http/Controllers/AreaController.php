<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Settings;
use App\Models\Sliders;
use App\Models\OurTeam;
use App\Models\Country;
use App\Models\Products;
use App\Models\AreaRange;
use App\Models\Regions;

class AreaController extends Controller
{

    public function area(){

       $page_title = 'Admin-Regions';
       $areas=Area::with('country_name')->select('id','region','country')->groupBy('region')->get(); 
       $countries=Country::all();        
       return view('admin.regions',compact('page_title','areas','countries'));

    }

    public function save_area(Request $r){

        if($r->type=='manually'){

            if(empty($r->name)){
                alert()->warning('Name Required...!!!');
                return redirect()->back();
            }

            if(empty($r->post_code)){
                alert()->warning('Post Code Required...!!!');
                return redirect()->back();
            }

        }else{
        
            if(empty($r->url)){
                alert()->warning('URL Required...!!!');
                return redirect()->back();
            }else{

                $url = str_replace('/', '`', $r->url);
                return redirect()->route('crawl',['url'=>$url,'country_id'=>$r->country,'region_id'=>$r->region_name]);

            }


        }
        $area_chk = Area::where('name',$r->name)->where('region',$r->region_name)->first();
        if(!empty($area_chk)){
            $post_codes = unserialize($area_chk->post_code);            
            if(in_array($r->post_code, $post_codes)){
                alert()->warning('Area & Post Code Exists...!!!');
                return redirect()->back();
            }else{

                array_push($post_code,$r->post_code);
                $area_chk->post_code = serialize($post_codes);
                $area_chk->save();
                alert()->success('Area Exists & Post Code Updated...!!!');
                return redirect()->back();
            }    
        }else{
        
            $codes = array();
            array_push($codes, $r->post_code);                
            $new = new Area;
            $new->name = $r->name;
            $new->region = $r->region_name;
            $new->country = $r->country;
            $new->post_code = serialize($codes);        
            $new->active = $r->active;
            $new->save();
             alert()->success('Saved');
            return redirect()->back();

        }


    }


    public function copy_area(Request $r){

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


  public function area_active($id){

        $area = Area::where('id',$id)->first();
            if($area->active==1){
                $area->active=0;
            }else{
                $area->active=1;                
            }

        $area->save();

         alert()->success('Saved');
        return redirect()->back();

  }


  public function view_region_areas($id){


       $region_name = Regions::where('id',$id)->first(); 
       $page_title = 'Admin-Regions';
       $areas=Area::with('country_name')->where('region',$id)->get(); 
       $countries=Country::all();        
       return view('admin.areas',compact('page_title','areas','countries','region_name'));

  }


  public function view_region_range($id){

       $range = AreaRange::where('area_id',$id)->get(); 
       $area_name = Regions::where('id',$id)->select('name')->first(); 
       $page_title = 'Admin-Regions-Code-Ranges';
       return view('admin.region_range',compact('page_title','range','id','area_name'));

  }

}
