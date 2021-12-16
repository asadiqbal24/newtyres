<?php

namespace App\Http\Controllers;

use App\Models\BusinessReports;
use Illuminate\Http\Request;
use App\Models\Employees;


class BusinessReportsController extends Controller
{

    public function business_report()
    {
        $page_title = 'Business Reports';
        return view('admin.business.index',compact('page_title'));
    }

    public function business_chart()
    {
        $page_title = 'Business Charts';
        return view('admin.business.chart',compact('page_title'));
    }

    public function new_employee_save(Request $request)
    {
        dd($request);



        if ($request->hasFile('file')) 
                    {

                    $destinationPath = public_path()."/images/images/";
                    $extension =  $request->file('file')->getClientOriginalExtension();
                    $fileName = time();
                    $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                    if(!$request->file('file')->move($destinationPath,$fileName))
                    {
                        throw new \Exception("Failed Upload");                    
                    }

                    $thumbnail = asset("/images/images/")."/".$fileName;
                    

                }

        $new= new Employees();
        $new->employee_name=$request->employee_name;
        $new->initials=$request->initials;
        $new->is_technician=$request->is_technician;
        $new->is_motor_test=$request->is_motor_test;
        $new->address=$request->address;
        $new->telephone=$request->telephone;
        $new->phone=$request->phone;
        $new->email=$request->email;
        $new->description=$request->description;
        $new->emergency_contact_1=$request->emergency_contact_1;
        $new->emergency_contact_2=$request->emergency_contact_2;
        $new->training_description=serialize($request->training_description);
        $new->date=serialize($request->date);
        $new->dob=$request->dob;
        $new->age=$request->age;
        $new->driving_no=$request->driving_no;
        $new->review_date=$request->review_date;
        $new->tax_code=$request->tax_code;
        $new->motoring_offenece=$request->motoring_offenece;
        $new->start_date=$request->start_date;
        $new->contract_period=$request->contract_period;
        $new->ni_number=$request->ni_number;
        $new->salary=$request->salary;
         $new->save();
         alert()->success("Data Insert Successffuly");
         return redirect()->back();
    }

}
