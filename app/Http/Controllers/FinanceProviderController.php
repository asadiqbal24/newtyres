<?php

namespace App\Http\Controllers;

use App\Models\FinanceProvider;
use Illuminate\Http\Request;

class FinanceProviderController extends Controller
{

    public function finance_provider(){

       $page_title = 'Admin-Finance-Provider';
       $provider=FinanceProvider::get();        
       return view('admin.finance_provider',compact('page_title','provider'));

    }

    public function finance_provider_save(Request $r){


        $check = FinanceProvider::where('name',$r->name)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{

                        $newb = new FinanceProvider();
                        $newb->name=$r->name;;
                        $newb->email = $r->email;
                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();

    }


    public function finance_provider_delete($id){

        FinanceProvider::where('id',$id)->delete();
        alert()->success('Added...!!!');
        return redirect()->back();
    }

    public function finance_provider_update(Request $r){


        $check = FinanceProvider::where('name',$r->edit_name)->where('id','!=',$r->id)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{

                        $newb = FinanceProvider::where('id',$r->id)->first();
                        $newb->name=$r->edit_name;
                        $newb->email = $r->edit_email;
                        $newb->save();
                        alert()->success('Saved...!!!');
            }        

            return redirect()->back();


    }

}
