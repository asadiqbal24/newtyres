<?php

namespace App\Http\Controllers;

use App\JobSheets;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Alert;
use App\Models\EstimateData;
use App\Models\EstimatePart;
use App\Models\EstimateAdvisory;
use Auth;
use App\Models\Vehicles;
class JobSheetsController extends Controller
{

    public function index(Request $request)
    {


      $jobsheets = JobSheets::select();

        if($request->created_type){

        }

        if(isset($request->from) && isset($request->to)){

          $jobsheets = $jobsheets->whereBetween('date_reg',array($request->from,$request->to));

        }


        if(isset($request->today)){

          $jobsheets = $jobsheets->where('date_reg',$request->today);

        }

        if(isset($request->custom_date_range)){

          $date_range = get_custom_date_range($request->custom_date_range);
          $jobsheets = $jobsheets->whereBetween('date_reg',array($date_range[0],$date_range[1]));          

        }


        if(isset($request->status)){

                $jobsheets = $jobsheets->where('status',$request->status);

        }


        $page_title = 'Job Sheets';
        $jobsheets = $jobsheets->paginate(25);
        $requestData = $request;
                
        return view('admin.jobs.job_sheet',compact('page_title','jobsheets','requestData'));
    }

    public function create(Request $r)
    {

        $page_title = 'New Job Sheets';
        $labour=EstimateData::get();
        $vehicles = Vehicles::all();  
        $part=EstimatePart::get();
        $adivsory=EstimateAdvisory::get();
        return view('admin.jobs.add_job_sheet',compact('page_title','r','labour','part','adivsory','vehicles'));

    }

 public function store(Request $request){


                // dd($request);
        if($request->update){
            
            $result = JobSheets::where('id', $request->id)->update([
            
                'registration_no' => $request->registration_no,
                'model' => serialize($request->model),
                'derivative' => $request->derivative,
                'chassis' => $request->chassis,
                'engine_cc' => $request->engine_cc,
                'fuel_type' => $request->fuel_type,
                'engine_code' => $request->engine_code,
                'engine_no' => $request->engine_no,
                'color' => $request->color,
                'paint_code' => $request->paint_code,
                'key_code' => $request->key_code,
                'radio_code' => $request->radio_code,
                'mileage' => $request->mileage,
                'date_reg' => $request->date_reg,
                'acc_number' => $request->acc_number,
                'company' => $request->company,
                'name' => serialize($request->name),
                'house_no' => $request->house_no,
                'post_code' => $request->post_code,
                'road' => $request->road,
                'locality' => $request->locality,
                'town' => $request->town,
                'county' => $request->county,
                'telephone' => $request->telephone,
                'mobile' => $request->mobile,
                'is_email' => $request->is_email,
                'email' => $request->email,
                
                ]);
                
                 if($result){
                alert()->success('Saved');
                return redirect()->route('admin.jobsheets')->with('success','Updated');
            }else{
                alert()->error('Registration Exists');
                return redirect()->back()->with('errors_val',$validator->errors())->withInput(Input::all());
            }
            
        }else{
        
        $validator = Validator::make(
                [
                   "registration_no" => $request->registration_no,
                      "model" => $request->model,
                      "derivative" => $request->derivative,
                      "chassis" => $request->chassis,
                      "engine_cc" => $request->engine_cc,
                      "fuel_type" => $request->fuel_type,
                      "engine_code" => $request->engine_code,
                      "engine_no" => $request->engine_no,
                      "color" => $request->color,
                      "paint_code" => $request->paint_code,
                      "key_code" => $request->key_code,
                      "radio_code" => $request->radio_code,
                      "mileage" => $request->mileage,
                      "date_reg" => $request->date_reg,
                      "acc_number" => $request->acc_number,
                      "company" => $request->company,
                      "name" => $request->name,
                      "house_no" => $request->house_no,
                      "post_code" => $request->post_code,
                      "road" => $request->road,
                      "locality" => $request->locality,
                      "town" => $request->town,
                      "county" => $request->county,
                      "telephone" => $request->telephone,
                      "mobile" => $request->mobile,
                      "email" => $request->email,

                ],
                [
             
                  "registration_no" => 'required',
                  "model" => 'required',
                  "derivative" => 'required',
                  "chassis" => 'required',
                  "engine_cc" => 'required',
                  "fuel_type" => 'required',
                  "engine_code" => 'required',
                  "engine_no" => 'required',
                  "color" => 'required',
                  "paint_code" => 'required',
                  "key_code" => 'required',
                  "radio_code" => 'required',
                  "mileage" => 'required',
                  "date_reg" => 'required',
                  "acc_number" => 'required',
                  "company" => 'required',
                  "name" => 'required',
                  "house_no" => 'required',
                  "post_code" => 'required',
                  "road" => 'required',
                  "locality" => 'required',
                  "town" => 'required',
                  "county" => 'required',
                  "telephone" => 'required',
                  "mobile" => 'required',
                  "email" => 'required',
                ]
            );

            if ($validator->fails())
            { 

                  Alert::error('Fill All Required Feilds');        
                  return redirect()->back()->withInput(Input::all())->with('errors_val',$validator->errors());
                  
            }else{


                $str = md5(date('Y-m-d').microtime());

                $str = substr($str, 0,7);

                if($request->id){

                    $email_check = JobSheets::where('registration_no',$request->registration_no)->where('id','!=',$request->id)->first();

                    if(!empty($email_check)){
                        Alert::error('Registration Exists');        
                        return redirect()->back()->with('errors_val',$validator->errors())->withInput(Input::all());       
                    }

                    $new = JobSheets::where('id',$request->id)->first();                    
                }else{

                    $email_check = JobSheets::where('registration_no',$request->registration_no)->first();

                    if(!empty($email_check)){
                        Alert::error('Registration Exists');        
                        return redirect()->back()->with('errors_val',$validator->errors())->withInput(Input::all());       
                    }
                    $new = new JobSheets();                        
                }


                $new->registration_no = $request->registration_no;
                $new->model = serialize($request->model);
                $new->derivative = $request->derivative;
                $new->chassis = $request->chassis;
                $new->engine_cc = $request->engine_cc;
                $new->fuel_type = $request->fuel_type;
                $new->engine_code = $request->engine_code;
                $new->engine_no = $request->engine_no;
                $new->color = $request->color;
                $new->paint_code = $request->paint_code;
                $new->key_code = $request->key_code;
                $new->radio_code = $request->radio_code;
                $new->mileage = $request->mileage;
                $new->date_reg = $request->date_reg;
                $new->acc_number = $request->acc_number;
                $new->company = $request->company;
                $new->name = serialize($request->name);
                $new->house_no = $request->house_no;
                $new->post_code = $request->post_code;
                $new->road = $request->road;
                $new->locality = $request->locality;
                $new->town = $request->town;
                $new->county = $request->county;
                $new->telephone = $request->telephone;
                $new->mobile = $request->mobile;
                $new->is_email = $request->is_email;
                $new->email = $request->email;

                 $new->save();

                
                  alert()->success("Data Inserted SuccessFully");
                  return redirect()->route('admin.jobsheets');     
            }
      }
}

   public function jobsheet_view($id)
    {
       $jobSheet = JobSheets::find($id);
         $labour=EstimateData::get();
        $part=EstimatePart::get();
        $adivsory=EstimateAdvisory::get();
        $page_title = 'Add New Estimate';


        return view('admin.jobs.add_job_sheet',compact('page_title','jobSheet','labour','part','adivsory'));
    }

    public function get_jobsheet_details(Request $request){
        
         if($request->account){
            $response = JobSheets::where('acc_number', $request->account)->first();
            
        }else{
            $response = JobSheets::where('post_code', $request->val)->first();
        }

        return $response;
    
    }

}
