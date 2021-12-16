<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Pages;
use Illuminate\Http\Request;
use App\Models\VehicleCategories;

class CategoriesController extends Controller
{

    public function categories()
    {
       $page_title = 'Admin-Categories';
       $categories_list=Categories::with('category_name','subcategory')->paginate(10);
       $sub_categories_list=Categories::with('category_name','subcategory')->get();       
       return view('admin.categories',compact('page_title','categories_list','sub_categories_list'));
    }


    public function add_categories(){
    
       $page_title = 'Admin-Categories';
       $categories_list=Categories::with('category_name','subcategory')->get();
       return view('admin.add_categories',compact('page_title','categories_list'));

    }




    public function edit_categories($id){

       $page_title = 'Admin-Categories';
       $edit_cat = Categories::where('id',$id)->with('category_name','subcategory')->first();

       $categories_list=Categories::with('category_name','subcategory')->get();
       return view('admin.edit_categories',compact('id','page_title','categories_list','edit_cat'));

    }


    public function edit_subcategory($id){


       $page_title = 'Admin-Categories';
       $edit_cat = SubCategories::where('id',$id)->with('category_name.category_name','subcategory')->first();
       dd($edit_cat->category_name->category_name);
       $categories_list=Categories::with('category_name','subcategory')->get();
       return view('admin.edit_sub_categories',compact('id','page_title','categories_list','sub_categories_list','edit_cat'));

    }



    public function vehicle_categories()
    {

       $page_title = 'Admin-Categories';
       $vcategories=VehicleCategories::paginate(10);        
       return view('admin.vehicle_category',compact('page_title','vcategories'));


    }



    public function category_save(Request $r){  
        $check_cat = Categories::where('name',$r->name)->first();
        if(!empty($check_cat)){
            alert()->warning('Exists...!!!');
        }else{

            if(empty($r->subcategory)){
                    $newc = new Categories();
                    $newc->name=$r->name;
                    $newc->category_id=$r->category;
                    $newc->url = $r->url;
                    $newc->url_page = $r->url_page;
                    $newc->save();

                    alert()->success('Added...!!!');
                    if($r->url_page=='0'){
                        $chkp = Pages::where('url',$r->url)->first();

                        if(empty($chkp)){
                            $newp= new Pages();
                            $newp->url = $r->url;
                            $newp->category_id=$newc->id; 
                            $newp->save();
                        }
                    }
            }else{

                $check_scat = SubCategories::where('name',$r->name)->first();
                    if(!empty($check_scat)){
                        alert()->warning('Exists...!!!');
                    }else{

                        $newc = new SubCategories();
                        $newc->name=$r->name;
                        $newc->category_id=$r->subcategory;
                        $newc->url = $r->url;
                        $newc->url_page = $r->url_page;                     
                        $newc->save();
                        alert()->success('Added...!!!');
                            if($r->url_page=='0'){
                                $chkp = Pages::where('url',$r->url)->first();
                                if(empty($chkp)){
                                    $newp= new Pages();
                                    $newp->url = $r->url;
                                    $newp->category_id=$newc->id; 
                                    $newp->save();

                                }
                            }

                    }


            }   

        }


            return redirect()->back();
    }


    public function vehicle_categories_save(Request $r){  
        $check_cat = VehicleCategories::where('name',$r->name)->first();
        if(!empty($check_cat)){
            alert()->warning('Exists...!!!');
        }else{

            if(empty($r->subcategory)){
                    $newc = new VehicleCategories();
                    $newc->name=$r->name;
                    $newc->category_id=$r->category;
                    $newc->url = $r->url;
                    $newc->url_page = $r->url_page;
                    $newc->save();

                    alert()->success('Added...!!!');
                    if($r->url_page=='0'){
                        $chkp = Pages::where('url',$r->url)->first();

                        if(empty($chkp)){
                            $newp= new Pages();
                            $newp->url = $r->url;
                            $newc->category_id=$newc->id; 
                            $newp->save();
                        }
                    }
            }else{

                $check_scat = VehicleCategories::where('name',$r->name)->first();
                    if(!empty($check_scat)){
                        alert()->warning('Exists...!!!');
                    }else{

                        $newc = new VehicleCategories();
                        $newc->name=$r->name;
                        $newc->category_id=$r->subcategory;
                        $newc->url = $r->url;
                        $newc->url_page = $r->url_page;                     
                        $newc->save();
                        alert()->success('Added...!!!');
                            if($r->url_page=='0'){
                                $chkp = Pages::where('url',$r->url)->first();
                                if(empty($chkp)){
                                    $newp= new Pages();
                                    $newp->url = $r->url;
                                    $newc->category_id=$newc->id; 
                                    $newp->save();

                                }
                            }

                    }


            }   

        }


            return redirect()->back();
    }



    public function admin_delete($id){
       Categories::where('id',$id)->delete();
       Categories::where('category_id',$id)->delete(); 
        
        alert()->warning('Deleted...!!!');
            return redirect()->back();      
    }

    public function save_update_categories(Request $r){

  
        $check_cat = Categories::where('name',$r->name)->where('id','!=',$r->id)->first();
        if(!empty($check_cat)){
            alert()->warning('Exists...!!!');
        }else{

            if(empty($r->subcategory)){
                    $newc = Categories::where('id','=',$r->id)->first();
                    $newc->name=$r->name;
                    $newc->category_id=$r->category;
                    $newc->url = $r->url;
                    $newc->url_page = $r->url_page;
                    $newc->save();

                    alert()->success('Added...!!!');
                    if($r->url_page=='0'){
                        $chkp = Pages::where('url',$r->url)->first();

                        if(!empty($chkp)){
                            $chkp= Pages::where('category_id',$r->id)->first();
                            $chkp->url = $r->url;
                            $chkp->save();
                        }else{

                            $newp= new Pages();
                            $newp->url = $r->url;
                            $newp->category_id=$newc->id; 
                            $newp->save();

                        }
                    }
            }else{

                $check_scat = SubCategories::where('name',$r->name)->where('id','!=',$r->id)->first();
                    if(!empty($check_scat)){
                        alert()->warning('Exists...!!!');
                    }else{

                        $newc = SubCategories::where('id','=',$r->id)->first();
                        $newc->name=$r->name;
                        $newc->category_id=$r->subcategory;
                        $newc->url = $r->url;
                        $newc->url_page = $r->url_page;                     
                        $newc->save();
                        alert()->success('Added...!!!');
                            if($r->url_page=='0'){
                                $chkp = Pages::where('category_id',$r->id)->first();
                                if(empty($chkp)){
                                    $newp= new Pages();
                                    $newp->url = $r->url;
                                    $newp->category_id=$r->id; 
                                    $newp->save();

                                }else{

                                    $chkp->url = $r->url;
                                    $chkp->category_id=$r->id; 
                                    $chkp->save();


                                }
                            }

                    }


            }   

        }


            return redirect()->back();
    

    }

}
