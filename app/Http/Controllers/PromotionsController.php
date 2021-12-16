<?php

namespace App\Http\Controllers;

use App\Models\Promotions;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{

    public function admin_promotions(){

        $page_title = 'Admin-Promotions';
        $promotions = Promotions::paginate(15);      
        return view('admin.promotions' ,compact('page_title','promotions'));

    }

    public function admin_promotions_delete($id){

        $promotions = Promotions::where('id',$id)->delete();
        alert()->success('Deleted');
        return redirect()->back();      

    }

    public function admin_promotions_add(){

        $page_title = 'Admin-Promotions-Add';        
        $promotion = NULL;
        $fun_type = 'add';
        return view('admin.promotions_add' ,compact('page_title','promotion','fun_type'));     

    }


    public function admin_promotions_edit($id){

        $page_title = 'Admin-Promotions-Edit';        
        $promotion = Promotions::where('id',$id)->first();
        $fun_type = 'edit';
        return view('admin.promotions_add' ,compact('page_title','promotion','fun_type'));     

    }

    public function admin_promotions_save(Request $r){


        $pro = Promotions::where('title',$r->name)->first();
        if(!empty($pro))
        {
            alert()->error('Already Exist');        
            return redirect()->back();                
        }else{
        $prom = new Promotions;
        $prom->title = $r->name;
        $prom->description = $r->description;
        $prom->save();

        alert()->success('Saved');        
        return redirect()->back();                

        }


    }


    public function admin_promotions_update(Request $r){


        $pro = Promotions::where('title',$r->name)->where('id','!=',$r->id)->first();
        if(!empty($pro))
        {
            alert()->error('Already Exist');        
            return redirect()->back();                
        }else{
        $prom = Promotions::where('id',$r->id)->first();
        $prom->title = $r->name;
        $prom->description = $r->description;
        $prom->save();

        alert()->success('Saved');        
        return redirect()->back();                

        }


    }


}
