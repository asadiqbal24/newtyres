<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function admin_pages(){
        $page_title = 'Admin-Pages';
        $pages=Pages::paginate(10);        
        return view('admin.pages',compact('page_title','pages'));
    }

    public function pages_data($id){

        $page_title = 'Admin-Pages-Content';
        $pages=Pages::where('id',$id)->with('category')->first();        
        return view('admin.pages_content',compact('page_title','pages'));

    }

    public function page_content_save(Request $r){
        

        $pages=Pages::where('id',$r->id)->first();
        $pages->data = $r->data;
        $pages->meta_tags = $r->meta_tags;
        $pages->save();

        alert()->success('Saved...!!!!');
        return redirect()->back();

    }


    public function admin_pages_delete($id){
        $pages=Pages::where('id',$id)->delete();
        alert()->success('Deleted');
        return redirect()->back();

    }


}
