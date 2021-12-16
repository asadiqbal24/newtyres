<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function countries(){
    
        $page_title = 'Admin-Countries';
       $countries=Country::all(); 
       return view('admin.countries',compact('page_title','countries'));

    }


    public function save_countries(Request $r){

        $new = new Country;
        $new->name = $r->name;
        $new->active = $r->active;
        $new->save();

        alert()->success('Saved');
        return redirect()->back();

    }

      public function countries_active($id){

        $area = Country::where('id',$id)->first();
            if($area->active==1){
                $area->active=0;
            }else{
                $area->active=1;                
            }

        $area->save();

         alert()->success('Saved');
        return redirect()->back();

  }

    public function update_countries(Request $r){


                $chk = Country::where('name',$r->edit_name)->where('id','!=',$r->id)->first();
                if(!empty($chk)){
                        alert()->warning('Exists...!!!');            
                }else{
                        $new = Country::where('id',$r->id)->first();
                        $new->name = $r->edit_name;
                        $new->active = $r->edit_active;
                        $new->save();

                        alert()->success('Saved...!!!');            
                }

                return redirect()->back();


  }


  public function country_delete($id){

        $country = Country::where('id',$id)->delete();
         alert()->success('Deleted...!!!');   
                return redirect()->back();
  }

}
