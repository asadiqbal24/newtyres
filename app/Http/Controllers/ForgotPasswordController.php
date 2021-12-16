<?php

namespace App\Http\Controllers;

use App\Models\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;
use Mail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function forgot_password(){

        $page_title='::Forgot-Password';
        return view('auth.forgot_password',compact('page_title'));

    }

    public function send_reset_mail(Request $r){

            if(empty($r->email)){
                    Alert::error('Enter Email');  
                    return redirect()->back();      
            }else{
                 $user_check = User::where('email',$r->email)->first();   
                 if(empty($user_check)){
                    Alert::error('Email Invalid'); 
                    return redirect()->back();       
                 }else{
                      

                        $uid = md5(date('Y-m-d').microtime());
                        $token = md5(date('Y-m-d').microtime().$user_check->email);

                     $data = [
                            'uid' => $uid,
                            'token' => $token,
                            'user_email'=>$user_check->email       
                        ];

                        $checkStatus = ForgotPassword::where(['email'=>$user_check->email,'status'=>'0'])->get();
                       // dd($checkStatus);
                            if($checkStatus->count()>0){
                                Alert::error('Link already sent.. Check Mail');
                                return redirect()->back();     
                            }
                            else{
                                
                                ForgotPassword::insert([
                                    'uid'=>$uid,
                                    'email'=>$user_check->email,
                                    'token'=>$token,
                                    'status'=>'0',
                                ]);

                                Mail::send('mails.reset_password',['data'=>$data],function($mail) use ($user_check){
                                    $mail->to($user_check->email,'Admin')->from("no-reply@safepk.com")->subject("Password Reset");
                                });

                                        Alert::success('Please check email we have sent you a password reset email.');
                                        return redirect()->back();

                                }

            }

    }

  }


      public function reset_password($uid,$token,$email){
           
                $checklink = ForgotPassword::where(['email'=>$email,'token'=>$token,'uid'=>$uid,'status'=>'0'])->first();
                if(empty($checklink)){

                     Alert::error('Link Invalid or Expired');
                     return redirect()->back();

                }else{

        
                        $page_title='::Reset-Password';
                        return view('auth.reset_password',compact('page_title','uid'));


                }


      }


      public function submit_reset_password(Request $r){


            $checklink = ForgotPassword::where(['uid'=>$r->uid,'status'=>'0'])->first();
                if(empty($checklink)){

                     Alert::error('Something Went Wrong');
                     return redirect()->back();

                }else{

                        if($r->password!=$r->password_confirm){

                            Alert::error('Password Doesnot Match');
                            return redirect()->back();

                        }elseif(strlen($r->password) < 6){

                            Alert::error('Password Length Must be Equal or Greater Than 6 ');
                            return redirect()->back();

                        }else{

                                $user = User::where('email',$checklink->email)->first();
                                $user->password = Hash::make($r->password);
                                $user->save();

                                $checklink->status = '1';
                                $checklink->save();

                                Alert::success('Password Reset Successful');
                                return redirect()->route('login_here');

                        }

                }
       

      }


}
