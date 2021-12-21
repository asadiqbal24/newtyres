<?php

namespace App\Http\Controllers;

use App\Estimates;
use App\DepartmentModel;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Alert;
use Auth;
use App\Models\Vehicles;
use App\Models\VehiclesMake;
use App\Models\EstimateData;
use App\Models\Department;
use App\Models\EstimatePart;
use App\Models\EstimateAdvisory;
use App\Models\EstimateWorkDescription;
use App\Models\DocumentTemplateSeting;
use App\Models\EstimateGlobalNotes;

class EstimatesController extends Controller
{

    public function index(Request $request)
    { 

        $page_title = 'Estimates';
        $estimates = new Estimates();

        if($request->created_type){

        }

        if(isset($request->from) && isset($request->to)){

          $estimates = $estimates->whereBetween('date_reg',array($request->from,$request->to));

        }


        if(isset($request->today)){

          $estimates = $estimates->where('date_reg',$request->today);

        }

        if(isset($request->custom_date_range)){

          $date_range = get_custom_date_range($request->custom_date_range);
          $estimates = $estimates->whereBetween('date_reg',array($date_range[0],$date_range[1]));          

        }


        if(isset($request->status)){

/*          $estimates = $estimates->whereDate('date_reg',$request->today);*/

        }

        $estimates = $estimates->with('modal')->paginate(25);
        // dd($estimates);
        $requestData = $request;
          


        return view('admin.estimates',compact('page_title','estimates','requestData'));
    }

    public function save_starting_no($type,Request $request)
    {
        $number = $request->starting_from;
        if($type=='invoice'){
        return redirect()->route('admin.add-new-invoice');
        }else{
        return redirect()->route('admin.add-new-estimate');            
        }

    }

    public function add_new_estimate(Request $request)
    {

        $page_title = 'Add New Estimate';
        $vehicles = Vehicles::all();
        $models = VehiclesMake::all();
        $labour=EstimateData::get();
        $part=EstimatePart::get();
        $adivsory=EstimateAdvisory::get();
        return view('admin.add_new_estimate',compact('page_title','vehicles','models','request','labour','part','adivsory'));
    }

    public function save_department(Request $r)
    {
        $new = new Department();
       $new->dep_name = $r->dep_name;
       $new->dep_no = $r->dep_no;
       $new->docs_prefix = $r->docs_prefix;
       $new->active = $r->active;
       $new->save();
       
       return back();
    }
    public function delete_department($id)
    {
        $depart=Department::find($id);
        $depart->delete();
        return back();
    }

    public function edit_department($id)
    {
        $page_title='Documents Template Settings';
        $depart=Department::find($id);
        return view('admin.documents.edit-department',[ 'depart' =>  $depart ,'page_title' => $page_title]);
    }
    public function save_edit_department(Request $request,$id)
    {
        

        
            $result = Department::where('id', $request->id)->update([
    
                   'dep_name' => $request->dep_name,
                   'dep_no' => $request->dep_no,
                   'docs_prefix' => $request->docs_prefix,
                   'active' => $request->active,
                   
                 
                
                ]);
                return back();
          


    }

    public function customstatusoptions()
    {
        $page_title='Documents Template Settings';
        $setting=DocumentTemplateSeting::paginate(10);
        
        return view('admin.documents.customstatusoption',['page_title' => $page_title],compact('setting'));
    
        
    }

    public function save_new_estimate(Request $request)
    {
        
        if($request->update){
            
            $result = Estimates::where('id', $request->id)->update([
            
                'registration_no' => $request->registration_no,
                'model' =>$request->model,
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
                
            if ($result) {
                
                alert()->success('Saved');
                return redirect()->route('admin.estimates')->with('success', 'Updated');
            
            } else {
                alert()->error('Registration Exists');
                return redirect()->back()->with('error', 'Something went Wrong');
            }
            
            
        }else{
        
        $validator = Validator::make(
                [
                      "registration_no" => $request->registration_no,
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
                  return redirect()->back()->withError([$validator->errors()])->withInput(Input::all());                
            }else{


                $str = md5(date('Y-m-d').microtime());

                $str = substr($str, 0,7);

                if($request->id){

                    $email_check = Estimates::where('registration_no',$request->registration_no)->where('id','!=',$request->id)->first();

                    if(!empty($email_check)){
                        Alert::error('Registration Exists');        
                        return redirect()->back()->withError([$validator->errors()])->withInput(Input::all());       
                    }

                    $new = Estimates::where('id',$request->id)->first();                    
                }else{

                    $email_check = Estimates::where('registration_no',$request->registration_no)->first();

                    if(!empty($email_check)){
                        Alert::error('Registration Exists');        
                        return redirect()->back()->withError([$validator->errors()])->withInput(Input::all());       
                    }
                    $new = new Estimates();                        
                }


                $new->registration_no = $request->registration_no;
                $new->model = $request->model;
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
                return redirect()->back();     
            }
    

    }
}


    public function estimate_view($id)
    {
        $vehicles = Vehicles::all();
        $estimate = Estimates::find($id);
        $labour = EstimateData::all();
         $part = EstimatePart::all();
        $adivsory=EstimateAdvisory::get();
        $page_title = 'Add New Estimate';
        return view('admin.add_new_estimate',compact('page_title','estimate','labour','part', 'vehicles','adivsory'));
    }
    
    public function get_estimate_details(Request $request){
        
         if ($request->account) {
            $response = Estimates::where('acc_number', $request->account)->first();
        } else {
            $response = Estimates::where('post_code', $request->val)->first();;
            
        }
        return $response;
    }

    public function admin_add_labour_rates()
    {

        $page_title = "Add Labour Rates";
        return view('admin.estimate.add_labour_rate',compact('page_title'));
    }


    public function admin_labour_rate_save(Request $request)
    {
        dd($request);

        $new = new EstimateData();
        $new->name=$request->name;
        $new->description=$request->description;
        $new->qty=$request->qty;
        $new->unit_price=$request->unit_price;
        $new->vat=$request->vat;
        $new->subtotal=$request->total;
        $new->save();
        alert()->success('Labour Rates is Inserted SuccessFully');
        return redirect()->route('admin.add-new-estimate');
    }


    public function admin_labour_edit($id)
    {
        $page_title= "Labour Edit";
        $edit=EstimateData::where('id',$id)->first();
        return view('admin.estimate.edit_labour',compact('edit','page_title'));
    }

    public function labour_update(Request $request)
    {
        $updates=EstimateData::where('id',$request->id)->first();
        if (!empty($updates)) {
          $updates->name=$request->name;
          $updates->description=$request->description;
          $updates->qty=$request->qty;
          $updates->unit_price=$request->unit_price;
          $updates->vat=$request->vat;
          $updates->subtotal=$request->total;
          $updates->save();
        }
         alert()->success('Labour Rates is Inserted SuccessFully');
          return redirect()->route('admin.add-new-estimate');
        
    }


    public function admin_add_part_rates()
    {
        $page_title= "Labour Edit";
         return view('admin.estimate.admin_add_part_rates',compact('page_title'));
    }


    public function admin_part_rate_save(Request $request)
    {
      
        $new = new EstimatePart();
        $new->part_name=$request->part_name;
        $new->description=$request->description;
        $new->cost=$request->cost;
        $new->qty=$request->qty;
        $new->unit_price=$request->unit_price;
        $new->vat=$request->vat;
        $new->total=$request->total;
        $new->save(); 
        alert()->success('Labour Rates is Inserted SuccessFully');
        return redirect()->route('admin.add-new-estimate'); 
    }

    public function admin_part_edit($id)
    {
       
        $page_title= "Labour Edit";
        $edit=EstimatePart::where('id',$id)->first();
        return view('admin.estimate.admin_part_edit',compact('edit','page_title'));
    }

    public function admin_part_update(Request $request)
    {
       $update=EstimatePart::where('id',$request->id)->first();
       if (!empty($update)) {
           $update->part_name=$request->part_name;
           $update->description=$request->description;
           $update->cost=$request->cost;
           $update->qty=$request->qty;
           $update->unit_price=$request->unit_price;
           $update->vat=$request->vat;
           $update->total=$request->total;
           $update->save();
       }
        alert()->success('Labour Rates is Inserted SuccessFully');
        return redirect()->route('admin.add-new-estimate');
    }

    public function admin_add_advisories()
    {
         $page_title= "Add Advisories";
          return view('admin.estimate.admin_add_advisories',compact('page_title'));

    }

    public function admin_advisory_save(Request $request)
    {
        $new= new EstimateAdvisory();
        $new->description=$request->description;
        $new->save();
        alert()->success('New Advisories is Inserted SuccessFully');
        return redirect()->route('admin.add-new-estimate');
    }

    public function admin_adivsory_edit($id)
    {
       $page_title= "Edit Advisories";
       $edit=EstimateAdvisory::where('id',$id)->first();
       return view('admin.estimate.admin_adivsory_edit',compact('page_title','edit'));

    }

    public function admin_advisory_update(Request $request)
    {
      $updates=EstimateAdvisory::where('id',$request->id)->first();
        
      if(!empty($updates)){
        $updates->description =$request->description;
        $updates->save();
         }
         alert()->success('New Advisories is Updated SuccessFully');
         return redirect()->route('admin.add-new-estimate');    
    }               


    public function admin_description_list()
    {
        $page_title="Description List";
        $work=EstimateWorkDescription::paginate(10);
        return view('admin.estimate.admin_description_list',compact('page_title','work'));
    }
    


    public function admin_work_description()
    {
         $page_title="Work Description";
          return view('admin.estimate.admin_work_description',compact('page_title'));

    }


    public function admin_work_description_save(Request $request)
    {
       $new = new EstimateWorkDescription();
       $new->name=$request->name;
       $new->description=$request->description;
       $new->save();
       alert()->success('New Work is Updated SuccessFully');
       return redirect()->route('admin.add-new-estimate');
    }


    public function admin_work_description_edit($id)
    {
        $page_title="Work Description Edit";
        $edit=EstimateWorkDescription::where('id',$id)->first();
        return view('admin.estimate.admin_work_description_edit',compact('page_title','edit'));


    }

    public function admin_work_description_update(Request $request)
    {
       $update=EstimateWorkDescription::where('id',$request->id)->first();
       if (!empty($update)) {
          $update->name=$request->name;
           $update->description=$request->description;
           $update->save();             
       }

       alert()->success('New Description is Updated SuccessFully');
      return redirect()->route('admin-description-list');    

    }

    public function admin_document_template_setting_save(Request $request)
    {
        //dd($request);
        $new = new DocumentTemplateSeting();
        $new->calender=$request->Calender;
        $new->estimates=$request->Estimates;
        $new->jobsheet=$request->jobsheet;
        $new->invoice=$request->invoice;
        $new->name=$request->name;
        $new->sort_order=$request->sort_order;
        $new->background_color=$request->background_color;
        $new->text_color=$request->text_color;

        $new->save();
alert()->success('Document Setting  is SuccessFully Saved');
return redirect()->back();

        

    }

    public function admin_document_template_delete($id)
    {
       
          $delete=DocumentTemplateSeting::where('id',$id)->delete();
          alert()->success("Your Document template is Deleted");
          return redirect()->back();

    }


public function admin_work_description_delete($id)
{
 
    $delete=EstimateWorkDescription::where('id',$id)->delete();
    alert()->success("Data Deleted Successfully");
    return redirect()->back();

}

public function estimate_global_notes_save(Request $request)
{
  // dd($request);
   $new=new EstimateGlobalNotes();
   $new->note=$request->global_notes;
   $new->save();
   alert()->success("Data Inserted SuccessFully");
   return redirect()->back();
}






public function admin_estimate_delete($id)
{
   $delete=Estimates::where('id',$id)->delete();
    alert()->success("Data Deleted Successfully");
    return redirect()->back(); 
}



public function admin_labour_delete($id)
{
  $delete=EstimateData::where('id',$id)->delete();
    alert()->success("Data Deleted Successfully");
    return redirect()->back();    
}





public function admin_part_delete($id)
{
   $delete=EstimatePart::where('id',$id)->delete();
    alert()->success("Data Deleted Successfully");
    return redirect()->back();    
}


public function admin_adivsory_delete($id)
{
  $delete=EstimateAdvisory::where('id',$id)->delete();
    alert()->success("Data Deleted Successfully");
    return redirect()->back();   
}







}
