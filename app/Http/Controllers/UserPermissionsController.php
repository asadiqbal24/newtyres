<?php

namespace App\Http\Controllers;

use App\models\UserPermissions;
use App\models\User;
use Illuminate\Http\Request;
use Alert;

class UserPermissionsController extends Controller
{

    public function set_permissions($uid){
        $page_title = 'Users Permissions';
        $user_id = User::where('uid',$uid)->first();
        $per = UserPermissions::where('user_id',$user_id->id)->get();        
        return view('practitioner.users_permissions',compact('page_title','uid','per'));

    }

    public function add_user_permission(Request $r){
        $user_id = User::where('uid',$r->uid)->first();
        $per = UserPermissions::where('user_id',$user_id->id)->where('permission_type','reports')->first();
        if(empty($per)){
            $per = new UserPermissions;            
        }        

        $per->user_id = $user_id->id;
        $per->permission_type = 'reports';

        if(!empty($r->reports)){

            $per->status = 'true';

        }else{
            $per->status = 'false';
        }

            $per->save();


        $per = UserPermissions::where('user_id',$user_id->id)->where('permission_type','reports_add')->first();
        if(empty($per)){
            $per = new UserPermissions;            
        }        
        $per->user_id = $user_id->id;
        $per->permission_type = 'reports_add';

        if(!empty($r->reports_add)){

            $per->status = 'true';

        }else{
            
            $per->status = 'false';

        }
        
            $per->save();

        $per = UserPermissions::where('user_id',$user_id->id)->where('permission_type','reports_view')->first();
        if(empty($per)){
            $per = new UserPermissions;            
        }        
        $per->user_id = $user_id->id;
        $per->permission_type = 'reports_view';


        if(!empty($r->reports_view)){
            $per->status = 'true';
        }else{
            $per->status = 'false';            
        }

            $per->save();

        $per = UserPermissions::where('user_id',$user_id->id)->where('permission_type','reports_pdf')->first();
        if(empty($per)){
            $per = new UserPermissions;            
        }        
        $per->user_id = $user_id->id;
        $per->permission_type = 'reports_pdf';

        if(!empty($r->reports_pdf)){
            $per->status = 'true';
        }else{
            $per->status = 'false';            
        }        
            $per->save();

        $per = UserPermissions::where('user_id',$user_id->id)->where('permission_type','users')->first();
        if(empty($per)){
            $per = new UserPermissions;            
        }        
        $per->user_id = $user_id->id;
        $per->permission_type = 'users';

        if(!empty($r->users)){
            $per->status = 'true';
        }else{
            $per->status = 'false';            
        }                
            $per->save();


        $per = UserPermissions::where('user_id',$user_id->id)->where('permission_type','settings')->first();
        if(empty($per)){
            $per = new UserPermissions;            
        }        
        $per->user_id = $user_id->id;
        $per->permission_type = 'settings';

        if(!empty($r->settings)){
            $per->status = 'true';
        }else{
            $per->status = 'false';            
        }   
        
            $per->save();


                  Alert::success('Saved');
                  return redirect()->back();

    }

}
