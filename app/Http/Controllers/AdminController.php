<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tyres;
use App\Models\OrderSummary;
use Auth;
use Alert;
use App\Models\UserPreferences;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use App\Models\Customer;
use App\Models\CutomerFile;
use Mail;

class AdminController extends Controller
{
    public function dashboard(){


      $page_title = 'Dashboard';
      $users = User::count();
      $tyres = Tyres::count();
      $orders = OrderSummary::count();

      $from = date('Y-m-d', strtotime('monday this week'));      
      $to = date('Y-m-d', strtotime('sunday this week'));      

      $latest = OrderSummary::whereBetween('created_at', [$from, $to])->with('customer','tyre_brands','tyre_pattern','tyres')->get();      
      $sales = OrderSummary::sum('price');

    	return view('admin.dashboard' ,compact('page_title','users','tyres','orders','sales','latest'));
    }

    public function edit_profile(){

    	$page_title = 'Edit Profile';
    	$user = User::where('uid',Auth::user()->uid)->first();
    	return view('admin.edit_user' ,compact('page_title','user'));

    }

    public function save_profile(Request $r){
        $validator = Validator::make(
                [
                    'name' => $r->name,
                    'email' => $r->email,
                ],
                [
                    'name' => 'required',
                    'email' => 'required',
                ]
            );
    
            if ($validator->fails())
            {

                  alert()->error('Fill All Required Feilds');        
                  return redirect()->back()->withInput(Input::all());                

            }


                if ($r->hasFile('file')) {

                        $validator_img = Validator::make(
                            [
                                'image' => $r->file('file'),
                            ],
                            [
                                'image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                            ]
                        );
                
                        if ($validator_img->fails())
                        {
                              alert()->error('Upload Valid Image File');        
                              return redirect()->back()->withInput(Input::all());                
                        }

                }

      if(!empty($r->password)){

          if($r->password!=$r->confirm_password){

                alert()->error('Password Doesnot Match');        
                return redirect()->back()->withInput(Input::all());                            

          }elseif(strlen($r->password) < 5){
                alert()->error('Password Length Must Be Greater Than 5');        
                return redirect()->back()->withInput(Input::all());                            

          }

      }                


      $uid =  $r->uid;
      $user = User::where('uid',$uid)->first();      
      $user->name = $r->name;
      $user->email = $r->email;
       if(!empty($r->password)){

        $user->password = bcrypt($r->password);

       }

        if ($r->hasFile('file')) {
/*                $file_path = public_path('images/users/'.$user->id.'/'.$user->image);
                unlink($file_path);*/
                $dirname = public_path('images/users/'.$user->id);
                 $file = $r->file('file');            

                 $filename = md5(date('Y-m-d').microtime()).'.'.$file->getClientOriginalExtension();

                    if (!is_dir($dirname)) {
                        mkdir($dirname,0777, true);
                    }

                $file->move($dirname, $filename);
                $user->image = $filename;
            }

	      $user->save();

	 alert()->success('Updated');
	 return redirect()->back();     
    }

    public function users_list(){
    	$page_title = 'Users';
    	$users = User::paginate(15);      
    	return view('admin.users' ,compact('page_title','users'));
    }


  public function delete_user($id){
      $users = User::where('id',$id)->delete();      
     alert()->success('Deleted');
     return redirect()->back();     
  }

  public function user_preferences()
  {
        $page_title='User Prefernces';
        return view('admin.users.prefernces',compact('page_title'));        
  }
  
  public function database_backup(){
    try{
        
    $get_all_table_query = "SHOW TABLES";
    $result = DB::select(DB::raw($get_all_table_query));

    $tables = [
        'appointments',
        'bank_accounts',
        'bays',
        'categories',
        'checkout_carts',
        'client_informations',
        'countries',
        'current_languages',
        'customers',
        'customer_details',
        'customer_tyre_not_founds',
        'database_backup',
        'dealer_signups',
        'drivers_datas',
        'estimates',
        'extra_order_items',
        'finance_providers',
        'finance_providers',
        'fitment_locations_areas',
        'fitment_locations_area_centers',
        'home_deliveries',
        'inqueries',
        'invoices',
        'invoice_table',
        'jobsheets',
        'languages',
        'migrations',
        'order_summary',
        'pages',
        'payments',
        'pay_pals',
        'postcodes',
        'promotions',
        'promo_codes',
        'promo_codes_values',
        'regions',
        'requests',
        'requests_details',
        'roles',
        'role_users',
        'selected_fitment_centers',
        'seo_tools',
        'settings',
        'shipping_addresses',
        'shipping_methods ',
        'sites',
        'sliders',
        'sms',
        'social_facebook_accounts',
        'stock',
        'sub_categories',
        'supliers',
        'tax_methods',
        'tyres',
        'tyres_brands',
        'tyres_brands_patterns',
        'tyres_discounts',
        'tyre_attributes',
        'tyre_categories',
        'tyre_series',
        'tyre_sizes',
        'users',
        'user_permissions',
        'vehicles',
        'vehicles_models',
        'vehicles_series',
        'vehicle_categories',
        'vehicle_details',
        'vehicle_make ',
        ];

    $structure = '';
    $data = '';
    foreach ($tables as $table) {
        $show_table_query = "SHOW CREATE TABLE " . $table . "";

        $show_table_result = DB::select(DB::raw($show_table_query));

        foreach ($show_table_result as $show_table_row) {
            $show_table_row = (array)$show_table_row;
            $structure .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
        }
        $select_query = "SELECT * FROM " . $table;
        $records = DB::select(DB::raw($select_query));

        foreach ($records as $record) {
            $record = (array)$record;
            $table_column_array = array_keys($record);
            foreach ($table_column_array as $key => $name) {
                $table_column_array[$key] = '`' . $table_column_array[$key] . '`';
            }

            $table_value_array = array_values($record);
            $data .= "\nINSERT INTO $table (";

            $data .= "" . implode(", ", $table_column_array) . ") VALUES \n";

            foreach($table_value_array as $key => $record_column)
                $table_value_array[$key] = addslashes($record_column);

            $data .= "('" . implode("','", $table_value_array) . "');\n";
        }
    }
    
    $path = 'database-backups/database_backup_on_' . date('Y-m-d') . '.sql';
    $file_name = database_path($path);
    $file_handle = fopen($file_name, 'w + ');

    $output = $structure . $data;
    fwrite($file_handle, $output);
    fclose($file_handle);
    
    DB::table('database_backup')->insert([
        'backup_name' => $path,
        ]);
       return redirect()->back()->with('success', 'Database backup save successfuly!');   
      
    } catch (\Exception $e) {

    return redirect()->back()->with('success', 'Something went Wrong');   
    
    }
  }

  public function save_user_preferences(Request $r){


        $validator = Validator::make($r->all(), [
            'home_screen' => 'required',
            'interface_scaling'=>'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('eMessage',$validator->errors()->first());
        }


          $user_preferences = UserPreferences::first();
          if(empty($user_preferences)){
                $user_preferences = new UserPreferences();    
          }  

                $user_preferences->name = $r->display_names;
                $user_preferences->home_screen = $r->home_screen;
                $user_preferences->interface_scaling = $r->interface_scaling;                
                $user_preferences->color_scheme = $r->color_scheme;
                $user_preferences->highligt_doc = $r->highligt_doc;
                $user_preferences->full_width_colors = $r->full_width_colors;
                $user_preferences->archives_info = $r->archives_info;
                $user_preferences->show_predefined = $r->show_predefined;
                $user_preferences->show_stock_category = $r->show_stock_category;
                $user_preferences->save();


        alert()->success('Saved');
        return redirect()->back();                

  }


  public function save_authentication(Request $r){

        //dd($r);

        $user = User::where('email',Auth::user()->email)->first();
        $user->email = $r->email;        
        $user->password = bcrypt($r->password);
        $user->save();        
        alert()->success('Saved');
        return redirect()->back();                

  }


  public function admin_mass_mailing()
  {
    $page_title = 'Mass Mailing';
    $customer=Customer::paginate(10);
    //dd($customer);
    return view('admin.mass_mailing',compact('page_title','customer'));  
  }

  public function admin_cutomer_delete($id)
  {
    $customer=Customer::where('id',$id)->delete();
    $customer_delete=CustomerDetail::where('id',$id)->delete();
    alert()->success('Customer Deleted Successfully');
    return redirect()->back();
  }

  public function admin_send_file_to_customer()
  {
      $page_title = 'File Send To Customer';
      return view('admin.admin_send_file_to_customer',compact('page_title'));
  }


  public function admin_file_customer_save(Request $request)
  {

              if ($request->hasFile('file')) 
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('file')->getClientOriginalExtension();
                    $filename_original =  $request->file('file')->getClientOriginalName();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('file')->move($destinationPath,$filename_original))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $thumbnail = asset("/images/images/")."/".$filename_original;

                    

                }


      $new=new CutomerFile();
      $new->text=$request->text;
      $new->file=$thumbnail;
      $new->save();
      $file=CutomerFile::orderBy('id','Desc')->first();
      if (!empty($file)) {
         $emails = Customer::select('id','email')->get();
                 $array = [];
                 $allmails = [];
                foreach($emails as $key =>  $e){
                     $allmails = array_push($array, $e->email);
                     $file_attachment=$file->file;
                    // dd($file_attachment);
                     Mail::send('admin.emails.new_file',array($allmails),function($mail) use ($e){
                $mail->to($e->email,'New File are Forward To Customer')->from("systems@better1.com")->subject("New File are Forward To Customer");
                   // $mail->attach($file_attachment);

                });
                    
                }

      }
      
      alert()->success("New File are Forward To Customer");
      return redirect()->back();


  }

}
