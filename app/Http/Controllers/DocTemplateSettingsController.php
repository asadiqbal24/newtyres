<?php

namespace App\Http\Controllers;

use App\Models\DocTemplateSettings;
use App\DepartmentModel;
use App\Models\Vehicles;
use App\techniciansModel;
use App\CorrespondenceTemplateModel;
use App\WorkDescriptionModel;
use App\PredefineAdvisoriesModel;
use App\ReferalAdvertisingModel;
use App\TermandConditionModel;
use App\VehicleMakeModel;
use App\Models\Department;
use App\Models\PredefinedJob;
use App\Models\EstimateData;
use App\Models\EstimatePart;
use App\Models\EstimateAdvisory;

use Illuminate\Http\Request;

class DocTemplateSettingsController extends Controller
{

    public function index()
    {
        $page_title='Documents Template Settings';
        return view('admin.documents.template_setttings',compact('page_title'));        
    }

   public function departmentlists(){
    $page_title='Documents Template Settings';
    $users=Department::all();
    return view('admin.documents.departmentlists',compact('page_title'),compact('users'));  

   }

   public function referal_adevertising()
   {
    $page_title='Referals Advertising';
    $users=ReferalAdvertisingModel::all();
    return view('admin.documents.referal_adevertising',compact('page_title'),compact('users'));  
   }

   public function referal_adevertising_create(Request $r)
   {
      
    $new = new ReferalAdvertisingModel();
    $new->name = $r->name;
    $new->initials = $r->initials;
    $new->active = $r->active;

    $new->save();
    return back();
    
   }
   public function referal_adevertising_delete($id)
   {
    $depart=ReferalAdvertisingModel::find($id);
    $depart->delete();
    return back();
   }

   public function edit_referal_adevertising($id)
   {
    $page_title='Documents Template Settings';
    $depart=ReferalAdvertisingModel::find($id);
    return view('admin.documents.edit_referal_adevertising',[ 'depart' =>  $depart ,'page_title' => $page_title]);

   }
 

   public function save_edit_referal_adevertising(Request $request,$id)
    {
        
        $result = ReferalAdvertisingModel::where('id', $request->id)->update([
    
                'name' => $request->name,
                'initials' => $request->initials,
                'active' => $request->active,
                
                   
                 
                
                ]);
                $page_title='Documents Template Settings';
                $users=ReferalAdvertisingModel::all();
                return view('admin.documents.referal_adevertising',compact('page_title'),compact('users'));  
              

    }
    public function technicians()
    {
        $page_title='Technicians Lists';
        $users=techniciansModel::all();
        return view('admin.documents.technicians',compact('page_title'),compact('users'));  
       
    }

    public function technicians_create(Request $r)
    {
        $new = new techniciansModel();
        $new->Employee_name = $r->Employee_name;
        $new->initials = $r->initials;
        $new->mottester = $r->mottester;
    
        $new->save();
        return back();
    }
    
    public function technicians_delete($id)
    {
        $depart=techniciansModel::find($id);
        $depart->delete();
     return back();
    }

    public function technicians_edit($id)
    {
     $page_title='Documents Template Settings';
     $depart=techniciansModel::find($id);
     return view('admin.documents.edit_technicians', [ 'depart' =>  $depart ,'page_title' => $page_title]);
 
    }

    public function technicians_edit_save(Request $request,$id)
    {
        
        $result = techniciansModel::where('id', $request->id)->update([
    
            'Employee_name' => $request->Employee_name,
            'initials' => $request->initials,
            'mottester' => $request->mottester,
            
               
             
            
            ]);
            $page_title='Documents Template Settings';
        $users=techniciansModel::all();
        return view('admin.documents.technicians',compact('page_title'),compact('users'));  
       
    }

    public function correspondance_template()
    {
        $page_title='Correspondance Template';
        $users=CorrespondenceTemplateModel::all();
        return view('admin.documents.correspondance_template',compact('page_title'),compact('users'));  
       
    }

    public function  correspondance_template_create(Request $r)
    {
        //dd($r);
             
    $new = new CorrespondenceTemplateModel();
    $new->name = $r->name;
    $new->print = $r->print;
    $new->email = $r->email;
    $new->sms = $r->sms;
    $new->save();
    return back();
    }

    public function correspondance_template_delete($id)
    {
        $depart=CorrespondenceTemplateModel::find($id);
        $depart->delete();
        return back();
    }
    public function correspondance_template_edit($id)
    {
        $page_title='Documents Template Settings';
        $depart=CorrespondenceTemplateModel::find($id);
        return view('admin.documents.edit_correspondance_template', [ 'depart' =>  $depart ,'page_title' => $page_title]);
 
    }


    public function correspondance_template_edit_save(Request $request,$id)
    {
        
        $result = CorrespondenceTemplateModel::where('id', $request->id)->update([
    
            'name' => $request->name,
            'print' => $request->print,
            'email' => $request->email,
            
            'sms' => $request->sms,
               
             
            
            ]);
            $page_title='Documents Template Settings';
             $users=CorrespondenceTemplateModel::all();
             return view('admin.documents.correspondance_template',compact('page_title'),compact('users'));  
       
    }
    public function work_description()
    {
        $page_title='Work Description';
        $users=WorkDescriptionModel::all();
        return view('admin.documents.work_description',compact('page_title'),compact('users'));  
       
    }

    public function work_description_create(Request $r)
    {
        $new = new WorkDescriptionModel();
        $new->name = $r->name;
        $new->description = $r->description;
        
        $new->save();
        return back();

    }

    public function work_description_delete($id)
    {
        $depart=WorkDescriptionModel::find($id);
        $depart->delete();
        return back();


    }

    public function work_description_edit($id)
    {
        $page_title='Documents Template Settings';
        $depart=WorkDescriptionModel::find($id);
        return view('admin.documents.edit_work_description', [ 'depart' =>  $depart ,'page_title' => $page_title]);
 
    }

    public function work_description_edit_save(Request $request,$id)
    {
        $result = WorkDescriptionModel::where('id', $request->id)->update([
    
            'name' => $request->name,
            'description' => $request->description,
            
               
             
            
            ]);
            $page_title='Documents Template Settings';
            $users=WorkDescriptionModel::all();
            return view('admin.documents.work_description',compact('page_title'),compact('users'));  
           
    }

    public function predefine_advisories()
    {
        $page_title='Predefine Advisories';
        $users=PredefineAdvisoriesModel::all();
        return view('admin.documents.predefine_advisories',compact('page_title'),compact('users'));  
       
    }

    public function predefine_advisories_create(Request $r)
    {
        $new = new PredefineAdvisoriesModel();
        $new->advisor_code = $r->advisor_code;
        $new->description = $r->description;
        $new->save();
        return back();   
    }
public function predefine_advisories_delete($id)
{
    $depart=PredefineAdvisoriesModel::find($id);
    $depart->delete();
    return back();


}
public function predefine_advisories_edit($id)
{
    $page_title='Documents Template Settings';
    $depart=PredefineAdvisoriesModel::find($id);
    return view('admin.documents.edit_predefine_advisories', [ 'depart' =>  $depart ,'page_title' => $page_title]);


}

public function predefine_advisories_edit_save(Request $request,$id)
{
    $result = PredefineAdvisoriesModel::where('id', $request->id)->update([
    
        'advisor_code' => $request->advisor_code,
        'description' => $request->description,
        
           
         
        
        ]);
        $page_title='Documents Template Settings';
        $users=PredefineAdvisoriesModel::all();
        return view('admin.documents.predefine_advisories',compact('page_title'),compact('users'));  
       
}

public function termandcontion()
{
    $page_title='Term and Condition';
    $users=TermandConditionModel::all();
    return view('admin.documents.termandcondition',compact('page_title'),compact('users'));  
   
}

public function termandcontion_create(Request $r)
{
    $new = new TermandConditionModel();
    $new->name = $r->name;
    $new->active = $r->active;
    $new->description = $r->description;
    $new->save();
    return back();   
}
public function termandcontion_delete($id)
{
    $depart=TermandConditionModel::find($id);
    $depart->delete();
    return back();


}

public function termandcontion_edit($id)
{
    $page_title='Documents Template Settings';
    $depart=TermandConditionModel::find($id);
    return view('admin.documents.edit_termandcontion', [ 'depart' =>  $depart ,'page_title' => $page_title]);


}

public function termandcontion_edit_save(Request $request,$id)
{
    $result = TermandConditionModel::where('id', $request->id)->update([
    
        'name' => $request->name,
        'active' => $request->active,
        'description' => $request->description,
        
        ]);
        $page_title='Documents Template Settings';
        $users=TermandConditionModel::all();
        return view('admin.documents.termandcondition',compact('page_title'),compact('users'));  
       
}



public function vehiclesmakeandmodel()
{
    $page_title='Vechicle Make Models';
    $vehicles=Vehicles::orderBy('id','desc')->with('vehicle_models')->paginate(50);
    return view('admin.documents.vehiclesmakeandmodel',compact('page_title'),compact('vehicles'));  
   
}


public function vehiclesmakeandmodel_create(Request $r)
{
    //dd($r);

    $vehicleNew = Vehicles::where('name',$r->make)->first();
    if(empty($vehicleNew)){

    $vehicleNew = new Vehicles();
    $vehicleNew->name = $r->make;
     $vehicleNew->type = $r->sellect;
    $vehicleNew->save();
    }
        $new = new VehicleMakeModel();
        $new->make = $vehicleNew->id;
        $new->model = $r->model;
        $new->type = $r->sellect;
        $new->save();

    alert()->success('Saved');    
    return redirect()->back();   
}

public function vehiclesmakeandmodel_delete($id,$type)
{

    if($type=='make'){
    Vehicles::whereId($id)->delete();
    VehicleMakeModel::where('make',$id)->delete();    
    }else{
    VehicleMakeModel::where('id',$id)->delete();    
    }

    alert()->success('Deleted Successfully');
    return redirect()->back();


}

public function vehiclesmakeandmodel_edit($id)
{
    $page_title='Documents Template Settings';
    $depart=VehicleMakeModel::find($id);
    return view('admin.documents.edit_vehiclesmakeandmodel', [ 'depart' =>  $depart ,'page_title' => $page_title]);


}

public function vehiclesmakeandmodel_edit_save(Request $request,$id)
{

    if($request->type=='make'){

     $vehicleNew = Vehicles::where('id',$r->editId)->first();
        if(!empty($vehicleNew)){

           $vehicleNew->name = $r->editMake;
           $vehicleNew->type = $r->editType;
           $vehicleNew->save();
        }else{

             $vehicleNew = new Vehicles();
           $vehicleNew->name = $r->editMake;
           $vehicleNew->type = $r->editType;
            $vehicleNew->save();

        }

    }else{
            

            $vehicleNew = Vehicles::where('name',$r->editMake)->first();    
           $vehicleNew->name = $r->editMake;
           $vehicleNew->type = $r->editType;
               $vehicleNew->save();        
            

            $new = VehicleMakeModel::where('id',$r->editId)->first();
            if(empty($new)){

                   $new = new VehicleMakeModel();
                    $new->make = $vehicleNew->id;
                    $new->model = $r->editModel;
                    $new->type = $r->editType;
                    $new->save();

            }else{
                $new->make = $vehicleNew->id;
                    $new->model = $r->editModel;
                    $new->type = $r->editType;
                $new->save();                
            }


    }


        alert()->success('Saved');    
        return redirect()->back();   


        return view('admin.documents.vehiclesmakeandmodel',compact('page_title'),compact('users'));  
       
}

public function predefinedjobs()
{
    $page_title='Predefined Job';
    //$users=VehicleMakeModel::all();
    $job=PredefinedJob::all();
    return view('admin.documents.predefinedjobs',compact('page_title','job'));  
   
}


public function predefinedjobs_form()
{
    $page_title='Documents Template Settings';
    //$users=VehicleMakeModel::all();
    return view('admin.documents.predefinedjobs_form',compact('page_title'));  
   
}

public function admin_new_predefined()
{
    $page_title='New Predefined';
    $labour=EstimateData::get();
    $part=EstimatePart::get();
    $adivsory =EstimateAdvisory::get();
    return view('admin.documents.admin_new_predefined',compact('page_title','labour','part','adivsory'));
}


public function admin_new_predefined_save(Request $request)
{
   // dd($request);
    $new=new PredefinedJob();
    $new->category=$request->category;
    $new->job_code=$request->job_code;
    $new->barcode_no=$request->barcode_no;
     $new->description=$request->description;
      $new->override_stock=$request->override_stock;
      $new->sub_category=$request->subcategory;
      $new->save();
      alert()->success("Predefined Job Save Successfully ");
      return redirect()->route('admin.doc.template.predefinedjobs');
    
}

public function admin_edit_predefined($id)
{
    $page_title="Predefined Edit";
   $edit=PredefinedJob::where('id',$id)->first();
   return view('admin.documents.admin_edit_predefined',compact('edit','page_title'));
}


public function admin_predefined_update(Request $request)
{
   
    $updates=PredefinedJob::where('id',$request->id)->first();
    if(!empty($updates)){
      $updates->category=$request->category;
    $updates->job_code=$request->job_code;
    $updates->barcode_no=$request->barcode_no;
     $updates->description=$request->description;
      $updates->override_stock=$request->override_stock;
      $updates->sub_category=$request->subcategory;
      $updates->save();
    }
      alert()->success("Predefined Job Save Updated ");
       return redirect()->route('admin.doc.template.predefinedjobs');

}


public function admin_predefined_delete($id)
{
  $delete=PredefinedJob::where('id',$id)->delete();
  alert()->success("Predefined Job Save Deleted Successfully");
  return redirect()->back();
}

public function admin_extra_save(Request $request)
{
  $page_title="New Predefined"; 

   $labour=EstimateData::get();
    $part=EstimatePart::get();
    $adivsory =EstimateAdvisory::get();

    $sundaries=$request->sundaries;
    $lubricant=$request->lubricant;
    $paint_mat=$request->paint_mat;

    $total=$sundaries+$lubricant+$paint_mat;

    return view('admin.documents.admin_new_predefined',compact('sundaries','lubricant','paint_mat','page_title','labour','part','adivsory','lubricant','paint_mat'));

}










    
}
