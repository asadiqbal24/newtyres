<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TyresBrands;
use App\Models\TyresBrandsPatterns;

class TyresBrandsController extends Controller
{

	public function brands(){
		$brands = TyresBrands::paginate(25);
       $page_title = 'Admin-Tyres-Brands';
       return view('admin.tyres_brands',compact('page_title','brands'));		
	}


	public function brands_save(Request $r){

		$check = TyresBrands::where('name',$r->name)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = new TyresBrands();
                        $newb->name=$r->name;
						$url = str_replace(' ','-',$r->name);
						$newb->description = $r->desc;
                        $newb->url = strtolower($url); 

				        if ($r->hasFile('file')) 
				            {

				            $destinationPath = public_path()."/images/tyres_brands";
				            $extension =  $r->file('file')->getClientOriginalExtension();
				            $fileName = time();
				            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
				            if(!$r->file('file')->move($destinationPath,$fileName))
				            {
				                throw new \Exception("Failed Upload");                    
				            }

				            $picture = asset("/public/images/tyres_brands")."/".$fileName;
				            $newb->image = $picture;

				        }

                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();

	}

	public function brands_update(Request $r){



		$check = TyresBrands::where('name',$r->edit_name)->where('id','!=',$r->id)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = TyresBrands::where('id',$r->id)->first();
                        $newb->name=$r->edit_name;
						$newb->description = $r->edit_desc;                        
                        $url = str_replace(' ','-',$r->edit_name);
                        $newb->url = strtolower($url); 

				        if ($r->hasFile('file')) 
				            {

				            $destinationPath = public_path()."/images/tyres_brands";
				            $extension =  $r->file('file')->getClientOriginalExtension();
				            $fileName = time();
				            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
				            if(!$r->file('file')->move($destinationPath,$fileName))
				            {
				                throw new \Exception("Failed Upload");                    
				            }

				            $picture = asset("/public/images/tyres_brands")."/".$fileName;
				            $newb->image = $picture;

				        }

                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();

	

	}

	public function delete_brand($id){
		
           $br = TyresBrands::where('id',$id)->delete();	
          alert()->success('Deleted...!!!');      
               	            return redirect()->back();

	}

	public function brands_patterns($id){

		$br = TyresBrands::where('id',$id)->first();	
	   $patterns = TyresBrandsPatterns::where('brand_id',$id)->paginate(25);
       $page_title = 'Admin-Tyres-Brands-Patterns';
       return view('admin.tyres_brands_patterns',compact('page_title','br','patterns'));				

	}

}
