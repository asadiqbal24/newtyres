<?php

namespace App\Http\Controllers;

use App\Models\Sliders;
use App\Models\Regions;
use App\Models\Area;
use Illuminate\Http\Request;
use Alert;
use Intervention\Image\ImageManagerStatic as Image;

class SlidersController extends Controller
{

    public function admin_sliders()
    {

            $page_title = 'Admin-Sliders';
            $areas=Regions::with('country_name')->get();  
            return view('admin.sliders',compact('page_title','areas'));

    }

    public function add_sliders(){
            $page_title = 'Admin-Sliders';
            $sliders=Sliders::all(); 
            return view('admin.add_sliders',compact('page_title','sliders'));
    }


    public function slider_save(Request $r){        


        $files = $r->file('files');
        for($i=0;$i<sizeof($files);$i++){

            $newS  = new Sliders();
            $newS->name = $r->type;
            $destinationPath = public_path()."/images/front/sliders/";
            $extension =  $files[$i]->getClientOriginalExtension();
            $fileName = time();
            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
            if(!$files[$i]->move($destinationPath,$fileName))
            {
                throw new \Exception("Failed Upload");                    
            }

            $picture = asset("/public/images/front/sliders/")."/".$fileName;
            $newS->file = $picture ;
            $newS->save();
        }

        alert()->success('Updated');
        return redirect()->back();

    }


        public function slider_delete_image($id){
    
        $del = Sliders::where('id',$id)->delete();
        alert()->success('Deleted...!!!');
        return redirect()->back();


    }


    public function slider_update(Request $r){

        $newS  = Sliders::where('id',$r->id)->first();
        if($r->hasfile('image')){
        $files = $r->file('image');

         
            $destinationPath = public_path()."/images/front/sliders/";
            $extension =  $r->file('image')->getClientOriginalExtension();
            $fileName = time();
            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
            if(!$r->file('image')->move($destinationPath,$fileName))
            {
                throw new \Exception("Failed Upload");                    
            }

            $picture = asset("/public/images/front/sliders/")."/".$fileName;
            $newS->file = $picture ;            
        }
            $newS->name = $r->type;
            $newS->save();

        alert()->success('Updated...!!!');
        return redirect()->back();

    }

}
