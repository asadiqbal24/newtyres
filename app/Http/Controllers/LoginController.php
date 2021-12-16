<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Alert;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\UsersReferences;
use DB;
use Session;
class LoginController extends Controller
{
    public function login(){
      $page_title = '::Login';          
    	return view('auth.login',compact('page_title'));
    }
    public function post_login(Request $request){
       
       $this->validate($request,[
          'email' => 'required|max:255|min:4',
          'password' => 'required|min:6'
       ]);


       $username = $request->input('email');
       $password = $request->input('password');
       
       if(User::where(['email'=>$request->input('username'),'verified'=>'0'])->count()){

          Alert::error('You have not activate your account please first activate your...');        
        return redirect()->back();
       }

       $user = User::where('email',$request->input('email'))->first();


       if($user && $user->freeze_acc == '1'){

          Alert::error('Your account has been blocked by the Administrator.Please contact with the Support Team.');                
         return redirect()->back();
       }

       if(!Auth::attempt($request->only(['email','password']),$request->has('remember'))){
          
         //Session::put('danger','Email & Password combination doesn\'t not match');       
          alert()->error('Email & Password combination doesn\'t not match');
          return redirect()->back();
        
        } 

 
        if(Auth::user()->hasAccess(['admin'])){
          Alert::success('WELCOME '.Auth::user()->username.'...');          
          return redirect()->route('admin.dashboard');
        }elseif(Auth::user()->hasAccess(['user'])){
          Alert::success('WELCOME '.Auth::user()->username.'...');          
          return redirect()->route('home'); 
        }else{
          Alert::error('Something went wrong please try again...');          
          return redirect()->back();
        }
        
    }

    public function register_post(Request $r){

      $email_chk = User::where('email',$r->Email)->first();
      if(!empty($email_chk)){
                   alert()->error('Email Exists...!!!');          
           return redirect()->back()->withInput(Input::all());

      }


      if(empty($r->FirstName)){
           alert()->error('Name is Required');          
           return redirect()->back()->withInput(Input::all());
      }

      if(empty($r->Email)){
           alert()->error('Email is Required');          
           return redirect()->back()->withInput(Input::all());
      }

      if(empty($r->Password)){
           alert()->error('Password is Required');          
           return redirect()->back()->withInput(Input::all());
      }


            $email_token = md5(date('Y-m-d').microtime());
            $user=new User();
            $user->name = $r->FirstName;
            $user->uid = md5(date('Y-m-d').microtime());
            $user->email = $r->Email;
            $user->password = bcrypt($r->Password);
            $user->email_token = $email_token;
            $user->verified = 0;
            $user->save();

            $role = DB::table('roles')->where('slug','user')->first();

            $user->roles()->attach($role->id); 
  
                $data = ['username'=>$r->username,'email'=>$r->email,'password'=>$r->password,'uid'=>$email_token];

                if(Mail::send('mails.login_credentials',['data'=>$data],function($mail) use ($r){
                    $mail->to($r->email,'SAFE User')->from("no-reply@safepk.com")->subject("SAFE Account Credentials");
                })){}

           alert()->success('Registration Successfull. Verification Mail has been Sent.');          
           return redirect()->route('register');        

    }

    public function logout(){
      Auth::logout();
      return redirect()->route('home')->with('info','You are now logout.');
    }

    public function account_verify($uid){

        $user_check = User::where('email_token',$uid)->first();
        if(empty($user_check)){
                  Alert::error('Verification Link not Valid');          
                  return redirect()->route('login_here');        
        }elseif($user_check->verified==1){
                  Alert::error('Your Account is Already Active');          
                  return redirect()->route('login_here');        
        }else{

              $user_check->verified=1;
              $user_check->save();
              Alert::success('Verification Successfull');          
              return redirect()->route('login_here');        
        }

    }

}
