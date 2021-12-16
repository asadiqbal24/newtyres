<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use App\Models\Area;
use App\Models\Settings;
use Illuminate\Http\Request;

class FaqsController extends Controller
{

    public function faqs(){

        if(isset($_GET['type'])){
            $top = $_GET['type'];
            $faqs = Faqs::where('top_category',$top)->where('active','1')->get()->groupBy('category');
        }else{
            $faqs = Faqs::where('top_category','Faqs')->where('active','1')->get()->groupBy('category'); 
            $top = 'FAQs';               
        }

        $page_title = 'Faqs';                        
        return view('home.faqs',compact('faqs','page_title','top'));

    }


    public function help_search(Request $r){

        $faqs = Faqs::where('question', 'like', '%' . $r->query . '%')->where('active','1')->get();
        $page_title = 'Faqs';                        
        return view('home.faqs_search',compact('faqs','page_title','top'));        

    }

    public function faqs_section(){

            dd($url);

    }


    public function faqs_section_article($slug){

        $faqs = Faqs::where('url',$slug)->first();
        $page_title = 'Faqs-'.$faqs->question;                        
        return view('home.faqs_article',compact('faqs','page_title'));

    }




    public function admin_faqs(){

                $faqs = Faqs::all();
                $page_title = 'Faqs';
              return view('admin.faqs',compact('page_title','faqs'));
    }

    public function add_faqs(){

              $page_title = 'Add-Faqs';
              $faq = NULL;
              $fun_type = 'add';
              return view('admin.add_faqs',compact('page_title','faq','fun_type'));

    }

    public function save_faq(Request $r){


        $newF = new Faqs();
        $newF->question = $r->question;
        $newF->answer = $r->answer;
        $newF->save();

        alert()->success('Saved');
        return redirect()->back();

    }

}
