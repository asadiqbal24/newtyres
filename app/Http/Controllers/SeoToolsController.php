<?php

namespace App\Http\Controllers;

use App\Models\SeoTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SeoToolsController extends Controller
{



    public function seo_tools(){



        $routeCollection = Route::getRoutes();

        $routes = [];
        foreach ($routeCollection as $value) {
          if($value->methods()[0]=='GET'){  
                array_push($routes, $value->uri());
          }
        }

        $seo = SeoTools::all();

        foreach($routes as $s){
            
            $seo = SeoTools::where('route',$s)->first();

            if(!empty($seo)){

            }else{

                    $ns = new SeoTools();
                    $ns->route = $s;
                    $ns->save();
            }
        }

        $page_title = 'Admin-SEO-Tools';
        $pages=SeoTools::paginate(10);        
        return view('admin.seo',compact('page_title','pages'));
    }


    public function seo_data(){

        $slug = $_GET['slug'];
        $seo = SeoTools::where('route',$slug)->first();

        $page_title = 'Admin-SEO-Tools';
        return view('admin.seo_data',compact('page_title','seo','slug'));



    }

    public function seo_data_post(Request $request){
        $seo = SeoTools::where('route',$request->slug)->first();  

        $seo->keywords = $request->keywords;
        $seo->title = $request->title;
        $seo->description = $request->description;
        $seo->handler = $request->handler;
        $seo->writer = $request->writer;
        $seo->save();

        alert()->success('Success');
        return redirect()->back();

    }

}
