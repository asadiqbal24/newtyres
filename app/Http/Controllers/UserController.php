<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Mail;
use App\Models\User;
use App\Models\UsersReferences;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;
use Illuminate\Support\Facades\Input;
use Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\UserReceipts;
use App\Models\UserCourses;
use App\Models\Settings;
use App\Models\UserBonus;
use App\Models\UserKyc;
use App\Models\Books;
use App\Models\UserBankDetails;
use App\Models\Transactions;
use App\Models\Customer;
use App\Models\ClientInformation;
use App\Models\ReportsDetails;
use App\Models\RequestsDetails;
use App\Models\Requests;
class UserController extends Controller
{


   public function dashboard(){   		

   		$page_title='User-Dashboard';

      $total_requests = Requests::count();
      $total_pending = Requests::where('processed','Pending')->count();
      $total_inpro = Requests::where('processed','Processing')->count();  
      $total_compelted = Requests::where('processed','Completed')->count();
      $my_requests = Requests::where('user_id',Auth::user()->id)->count();      
      $my_processing = Requests::where('user_id',Auth::user()->id)->where('processed','Processing')->count();            
      $my_completed = Requests::where('user_id',Auth::user()->id)->where('processed','Completed')->count();                  
      return view('user.dashboard',compact('page_title','total_requests','total_pending','total_inpro','total_compelted','my_requests','my_processing','my_completed'));

   }   

      public function practitioner_dashboard(){      

      if(Auth::user()->roles[0]->slug=='subadmin'){
      $total_client = ClientInformation::where('practitioner_id',Auth::user()->practitioner_id)->count();
      $total_report = ReportsDetails::where('practitioner_id',Auth::user()->practitioner_id)->groupby('client_report_id')->count();              
      }else{
      $total_client = ClientInformation::where('practitioner_id',Auth::user()->id)->count();
      $total_report = ReportsDetails::where('practitioner_id',Auth::user()->id)->groupby('client_report_id')->count();      
      } 

      $page_title='Practitioner-Dashboard';

      return view('practitioner.dashboard',compact('page_title','total_client','total_report'));
   }   

    public function edit_profile(){

      $page_title = 'Edit Profile';
      $user = User::where('uid',Auth::user()->uid)->first();
      return view('user.edit_profile' ,compact('page_title','user'));

    }

    public function edit_practitioner_profile(){

      $page_title = 'Edit Profile';
      $user = User::where('uid',Auth::user()->uid)->first();
      return view('practitioner.edit_profile' ,compact('page_title','user'));

    }


   public function verify_user($uid){

            $user = User::where('uid',$uid)->first();
            if($user->verified == 1){

              Alert::success('Already Verified');
              return redirect()->back();

            }else{
                  
                  $user->verified = 1;
                  $user->save();

                  Alert::success('Verified');
                  return redirect()->back();

            }
   }


   public function practitioner_user(){
      $page_title = 'Users';
      $users = User::where('practitioner_id',Auth::user()->id)->paginate(15);
      return view('practitioner.users',compact('page_title','users'));

   }

   public function practitioner_add_user(){

        $page_title = 'Add Users';
        return view('practitioner.add_users',compact('page_title'));

   }

   public function add_new_p_user(Request $r){

        $validator = Validator::make(
                [
                    'name' => $r->name,
                    'email' => $r->email,
                    'username' => $r->username,
                    'password' => $r->password,
                ],
                [
                    'name' => 'required',
                    'email' => 'required',
                    'username' => 'required',
                    'password' => 'required',
                ]
            );
    
            if ($validator->fails())
            {

                  Alert::error('Fill All Required Feilds');        
                  return redirect()->back()->withInput(Input::all());                

            }

            $username_check = User::where('username',$r->username)->first();
            if(!empty($username_check)){

                  Alert::error('Username Not Available');        
                  return redirect()->back()->withInput(Input::all());                

            }

            $email_check = User::where('email',$r->email)->first();
            if(!empty($email_check)){

                  Alert::error('Email Exist');        
                  return redirect()->back()->withInput(Input::all());                

            }

        if(strlen($r->password) < 6){
           Alert::error('Password Length Must be Greater than 5');          
           return redirect()->back()->withInput(Input::all());
        }

                if ($r->hasFile('image')) {

                        $validator_img = Validator::make(
                            [
                                'image' => $r->file('image'),
                            ],
                            [
                                'image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                            ]
                        );
                
                        if ($validator_img->fails())
                        {
                              Alert::error('Upload Valid Image File');        
                              return redirect()->back()->withInput(Input::all());                
                        }

                }
      $user = new User();      
      $user->uid =  md5(date('Y-m-d').microtime());      
      $user->name = $r->name;
      $user->email = $r->email;
      $user->email = $r->email;      
      $user->username = $r->username;
      $user->password = bcrypt($password);
      $user->email_token = $email_token;      
      $user->practitioner_id = Auth::user()->id;
      $user->save();
        if ($r->hasFile('image')) {
/*                $file_path = public_path('images/users/'.$user->id.'/'.$user->image);
                unlink($file_path);*/
                $dirname = public_path('images/users/'.$user->id);
                 $file = $r->file('image');            

                 $filename = md5(date('Y-m-d').microtime()).'.'.$file->getClientOriginalExtension();

                    if (!is_dir($dirname)) {
                        mkdir($dirname,0777, true);
                    }

                $file->move($dirname, $filename);
                $user->image = $filename;
            }

        $user->save();
        $user->roles()->attach(4); 

   Alert::success('Saved');
   return redirect()->back();     
    

   }

   public function provider_dashboard(){

      $page_title='Provider-Dashboard';
      $total_requests = Requests::count();
      $total_pending = Requests::where('processed','Pending')->count();
      $total_inpro = Requests::where('processed','Processing')->count();  
      $total_compelted = Requests::where('processed','Completed')->count();
      $my_requests = Requests::where('user_id',Auth::user()->id)->count();      
      $my_processing = Requests::where('user_id',Auth::user()->id)->where('processed','Processing')->count();            
      $my_completed = Requests::where('user_id',Auth::user()->id)->where('processed','Completed')->count();  
      $my_providing = Requests::where('viewed_by',Auth::user()->id)->count();  

      return view('provider.dashboard',compact('page_title','total_requests','total_pending','total_inpro','total_compelted','my_requests','my_processing','my_completed','my_providing'));

   }

   public function user_accounts()
   {
      $page_title = 'User Accounts';
      return view('admin.users.account',compact('page_title'));
   }

   public function get_account_details(Request $request)
   {

        $user = Customer::where('account_number',$request->id)->first();
        return $user;

   }

}
