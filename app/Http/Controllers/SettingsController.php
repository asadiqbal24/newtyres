<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
Use Alert;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       $page_title = '::Admin-Settings';
       $settings=Settings::all(); 
       return view('admin.settings',compact('page_title','settings'));
    }

    public function update(Request $r){

        $app_name=Settings::where('key_term','app_name')->first();
        
        if(empty($app_name)){
            Settings::insert(['key_term'=>'app_name']);
            Settings::where('key_term','app_name')->update(['value' => $r->app_name]);
        }else{
            Settings::where('key_term','app_name')->update(['value' => $r->app_name]);            
        }


        $color_scheme=Settings::where('key_term','color_scheme')->first();


        if(empty($color_scheme)){
            Settings::insert(['key_term'=>'color_scheme']);
            Settings::where('key_term','color_scheme')->update(['value' => $r->color_scheme]);
        }else{
            Settings::where('key_term','color_scheme')->update(['value' => $r->color_scheme]);            
        }

        $terms_condition=Settings::where('key_term','terms_condition')->first();


        if(empty($terms_condition)){
            Settings::insert(['key_term'=>'terms_condition']);
            Settings::where('key_term','terms_condition')->update(['value' => $r->terms_condition]);
        }else{
            Settings::where('key_term','terms_condition')->update(['value' => $r->terms_condition]);            
        }

        $about_us=Settings::where('key_term','about_us')->first();


        if(empty($about_us)){
            Settings::insert(['key_term'=>'about_us']);
            Settings::where('key_term','about_us')->update(['value' => $r->about_us]);
        }else{
            Settings::where('key_term','about_us')->update(['value' => $r->about_us]);            
        }


        $mission=Settings::where('key_term','mission')->first();


        if(empty($mission)){
            Settings::insert(['key_term'=>'mission']);
            Settings::where('key_term','mission')->update(['value' => $r->mission]);
        }else{
            Settings::where('key_term','mission')->update(['value' => $r->mission]);            
        }


        $vision=Settings::where('key_term','vision')->first();


        if(empty($vision)){
            Settings::insert(['key_term'=>'vision']);
            Settings::where('key_term','vision')->update(['value' => $r->vision]);
        }else{
            Settings::where('key_term','vision')->update(['value' => $r->vision]);            
        }


        $privacy_policy=Settings::where('key_term','privacy_policy')->first();


        if(empty($privacy_policy)){
            Settings::insert(['key_term'=>'privacy_policy']);
            Settings::where('key_term','privacy_policy')->update(['value' => $r->privacy_policy]);
        }else{
            Settings::where('key_term','privacy_policy')->update(['value' => $r->privacy_policy]);            
        }

        $ceo_message=Settings::where('key_term','ceo_message')->first();

        if(empty($ceo_message)){
            Settings::insert(['key_term'=>'ceo_message']);
            Settings::where('key_term','ceo_message')->update(['value' => $r->ceo_message]);
        }else{
            Settings::where('key_term','ceo_message')->update(['value' => $r->ceo_message]);            
        }


        $objective=Settings::where('key_term','objective')->first();

        if(empty($objective)){
            Settings::insert(['key_term'=>'objective']);
            Settings::where('key_term','objective')->update(['value' => $r->objective]);
        }else{
            Settings::where('key_term','objective')->update(['value' => $r->objective]);            
        }



        $core_values=Settings::where('key_term','core_values')->first();

        if(empty($core_values)){
            Settings::insert(['key_term'=>'core_values']);
            Settings::where('key_term','core_values')->update(['value' => $r->core_values]);
        }else{
            Settings::where('key_term','core_values')->update(['value' => $r->core_values]);            
        }

        $icon_color=Settings::where('key_term','icon_color')->first();

        if(empty($icon_color)){
            Settings::insert(['key_term'=>'icon_color']);
            Settings::where('key_term','icon_color')->update(['value' => $r->icon_color]);
        }else{
            Settings::where('key_term','icon_color')->update(['value' => $r->icon_color]);            
        }        


        Alert::success('Updated');
        return redirect()->back();
    }


    public function practitioner_settings(){

       $page_title = 'Practitioner-Settings';
       $settings=Settings::all(); 
       return view('admin.settings',compact('page_title','settings'));


    }
   
}
