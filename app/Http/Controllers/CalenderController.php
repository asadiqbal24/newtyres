<?php

namespace App\Http\Controllers;

use App\Models\Calender;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Customer;
use App\Bay;
use App\Models\Appointments;
use App\Models\NotesData;
use Carbon\Carbon;
use DateTime;
use App\Models\BaySettings;

class CalenderController extends Controller
{

    public function index(Request $request)
    {
        
        $page_title = 'Calender';
        $categories_s = Categories::all();
        if($request->date){
            $date = $request->date;
        }else{
            $date = date('Y-m-d');            
        }

        $apt = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$date." 00:00:00", $date." 23:59:59"]
        );

        if($request->type){
            $apt = $apt->where('bay',$request->type);               
        }


            $apt = $apt->get();   

        $bays = BaySettings::all();



        $mstart = date('Y-m-1');
        $mfinish = date('Y-m-t');



        $weekly_data = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$mstart." 00:00:00", $mfinish." 23:59:59"]
        );


          if($request->type){
            $weekly_data = $weekly_data->where('bay',$request->type);               
        }
            $weekly_data = $weekly_data->get();


        $start_date = $mstart;
        $monthly = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$mstart." 00:00:00", $mfinish." 23:59:59"]
        );


         if($request->type){
            $monthly = $monthly->where('bay',$request->type);               
        }
            $monthly = $monthly->get();

        $monthly_data = [];
        foreach($monthly as $key => $a){

            $elapsed = strtotime(date('Y-m-d H:i',strtotime($a->to_date.' '.$a->time_to))) - strtotime(date('Y-m-d H:i',strtotime($a->from_date.' '.$a->time_from)));

            $start_time = new \DateTime($a->from_date.' '.$a->time_from);
            $end_time = new \DateTime($a->to_date.' '.$a->time_to);            
            $since_start = $start_time->diff(new \DateTime($a->to_date.' '.$a->time_to));
            $diff = $since_start->h.'h '.$since_start->i.'m';    
            $monthly_data[$key]['id'] = $a->id;
            $monthly_data[$key]['title'] = '~ ('.$diff.')';            
            $monthly_data[$key]['start'] = $a->from_date.' '.$a->time_from;            
            $monthly_data[$key]['end'] = $a->to_date.' '.$a->time_to;
            $monthly_data[$key]['backgroundColor'] = 'yellow';
            $monthly_data[$key]['resourcId'] = 1;
            $monthly_data[$key]['allDay'] = false;
        }  
             
        $appointments = Appointments::select();


        $yesterday = $request->date_yes;

        if($yesterday){
            $appointments = $appointments->whereDate('created_at', $yesterday);
        }
        $tomorrow = $request->date_tom;
        if($tomorrow){
            $appointments = $appointments->whereDate('created_at', $tomorrow);
        }
        $search = $request->search;
        if($search){
            $appointments = $appointments->where('bay', 'LIKE', "%$search%")->orWhere('status', 'LIKE', "%$search%");
        }

        if($request->type){
            $appointments = $appointments->where('bay', $request->type);
        }

        if(!$request->date_yes && !$request->date_tom){
            $appointments = $appointments->whereDate('created_at', Carbon::today());                     
        }

        $appointments = $appointments->get();

         $searched = isset($result)? $result: "";
         

        $global_notes = NotesData::where('type','global')->where('page','calender')->first();         
        $user_notes = NotesData::where('type','user')->where('page','calender')->first();                 
        return view('calender.index',compact('request','page_title','categories_s','apt','weekly_data','bays','monthly_data','date', 'appointments', 'searched','global_notes','user_notes'));
    }
    

    public function new_appointment(Request $request)
    {
        $page_title = 'Calender';
        $categories_s = Categories::all();
        $customers = Customer::all();
        
        return view('calender.new_appointment',compact('page_title','categories_s','customers','request'));
    }
    
    

    public function get_customer_details(Request $request)
    {
        if($request->val){
        $customer = Customer::where('id',$request->val)->first();
        }
        elseif($request->code){
            $customer = Customer::where('postal_code',$request->code)->first();
        }
        else{
            
         $customer = Customer::where('id',$request->remove)->delete();
         $customer = "your owner deleted successfully";
        }
        return $customer;
    }

    public function edit_appointment(Request $r){
        
        $page_title = 'Calender';
        // $categories_s = Categories::all();
        // $customers = Customer::all();
        
        $data = Appointments::where('id', $r->id)->first();
        
        return view('calender.edit_appointment', compact('data', 'page_title'));
    }
    
    public function save_new_appointment(Request $r)
    {
       $new = new Appointments();
       $new->bay = $r->bay;
       $new->from_date = $r->from_date;
       $new->time_from = $r->time_from;
       $new->status = $r->status;
       $new->to_date = $r->to_date;
       $new->time_to = $r->time_to;
       $new->account_number = $r->account_number;
       $new->make = $r->make;
       $new->model = $r->model;
       $new->derivative = $r->derivative;
       $new->chassis_number = $r->chassis_number;
       $new->engine_cc = $r->engine_cc;
       $new->fuel_type = $r->fuel_type;
       $new->engine_no = $r->engine_no;
       $new->color = $r->color;
       $new->paint_code = $r->paint_code;
       $new->key_code = $r->key_code;
       $new->radio_code = $r->radio_code;
       $new->acc_number = $r->acc_number;
       $new->company = $r->company;
       $new->first_name = $r->first_name;
       $new->middle_name = $r->middle_name;
       $new->last_name = $r->last_name;
       $new->house_no = $r->house_no;
       $new->postcode = $r->postcode; 
       $new->road = $r->road;
       $new->locality = $r->locality;
       $new->town = $r->town;
       $new->county = $r->county;
       $new->telephone = $r->telephone;
       $new->mobile = $r->mobile;
       $new->email = $r->email;
       $new->description = $r->description;
       $new->save();

       return redirect()->route('admin.calender');
    }


    public function update_new_appointment(Request $request){
        
        try{
        
        $result = Appointments::where('id', $request->id)->update([

               'bay' => $request->bay,
               'from_date' => $request->from_date,
               'time_from' => $request->time_from,
               'status' => $request->status,
               'to_date' => $request->to_date,
               'time_to' => $request->time_to,
               'account_number' => $request->account_number,
               'make' => $request->make,
               'model' => $request->model,
               'derivative' => $request->derivative,
               'chassis_number' => $request->chassis_number,
               'engine_cc' => $request->engine_cc,
               'fuel_type' => $request->fuel_type,
               'engine_no' => $request->engine_no,
               'color' => $request->color,
               'paint_code' => $request->paint_code,
               'key_code' => $request->key_code,
               'radio_code' => $request->radio_code,
               'acc_number' => $request->acc_number,
               'company' => $request->company,
               'first_name' => $request->first_name,
               'middle_name' => $request->middle_name,
               'last_name' => $request->last_name,
               'house_no' => $request->house_no,
               'postcode' => $request->postcode, 
               'road' => $request->road,
               'locality' => $request->locality,
               'town' => $request->town,
               'county' => $request->county,
               'telephone' => $request->telephone,
               'mobile' => $request->mobile,
               'email' => $request->email,
               'description' => $request->description,
            
            ]);
        
        return redirect()->route('admin.calender');
        
                } catch (\Exception $e) {
        
            return redirect()->back()->with('message', 'Something went wrong!');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index_new(Request $request)
    {
  
        if($request->ajax()) {
       
             $data = Appointments::whereDate('from_date', '>=', $request->start)
                       ->whereDate('to_date',   '<=', $request->end)
                       ->get();
  
             return response()->json($data);
        }
        $page_title = 'a';
        return view('calender.fullcalender');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
 
        switch ($request->type) {
           case 'add':
              $event = Appointments::create([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'update':
              $event = Appointments::find($request->id)->update([
                  'title' => $request->title,
                  'start' => $request->start,
                  'end' => $request->end,
              ]);
 
              return response()->json($event);
             break;
  
           case 'delete':
              $event = Appointments::find($request->id)->delete();
  
              return response()->json($event);
             break;
             
           default:
             # code...
             break;
        }
    }


    public function calender_save_notes(Request $request)
    {
        $data = NotesData::where('type',$request->type)->where('page','calender')->first();
        if(empty($data)){
            $data = new NotesData();
            $data->type = $request->type;
            $data->page = 'calender';
        }

            $data->data = $request->data;
            $data->save();
    
            return 1;

    }




public function calender_week(Request $request)
    {
        
        $page_title = 'Calender';
        $categories_s = Categories::all();
        if($request->date){
            $date = $request->date;
        }else{
            $date = date('Y-m-d');            
        }

        $apt = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$date." 00:00:00", $date." 23:59:59"]
        );

        if($request->type){
            $apt = $apt->where('bay',$request->type);               
        }


        $apt = $apt->get();   
        $bays = BaySettings::orderBy('sort_order')->get();            

        $wstart = (date('D') != 'Mon') ? date('Y-m-d', strtotime('last Monday')) : date('Y-m-d');
        $wfinish = (date('D') != 'Sat') ? date('Y-m-d', strtotime('next Sunday')) : date('Y-m-d');



        $weekly_data = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$wstart." 00:00:00", $wfinish." 23:59:59"]
        );

        if($request->type){
            $weekly_data = $weekly_data->where('bay',$request->type);               
        }
            $weekly_data = $weekly_data->get();
        $week_dates = [];

        $start_date = $wstart;
        while (strtotime($start_date) <= strtotime($wfinish)) {
            $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
            array_push($week_dates,$start_date);
        }


        $mstart = date('Y-m-1');
        $mfinish = date('Y-m-t');



        $weekly_data = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$mstart." 00:00:00", $mfinish." 23:59:59"]
        );


          if($request->type){
            $weekly_data = $weekly_data->where('bay',$request->type);               
        }
            $weekly_data = $weekly_data->get();


        $start_date = $mstart;
             
        $appointments = Appointments::select();


        $yesterday = $request->date_yes;

        if($yesterday){
            $appointments = $appointments->whereDate('created_at', $yesterday);
        }
        $tomorrow = $request->date_tom;
        if($tomorrow){
            $appointments = $appointments->whereDate('created_at', $tomorrow);
        }
        $search = $request->search;
        if($search){
            $appointments = $appointments->where('bay', 'LIKE', "%$search%")->orWhere('status', 'LIKE', "%$search%");
        }

        if($request->type){
            $appointments = $appointments->where('bay', $request->type);
        }

        if(!$request->date_yes && !$request->date_tom){
            $appointments = $appointments->whereDate('created_at', Carbon::today());                     
        }

        $appointments = $appointments->get();

         $searched = isset($result)? $result: "";
         

        $global_notes = NotesData::where('type','global')->where('page','calender')->first();         
        $user_notes = NotesData::where('type','user')->where('page','calender')->first();                 


        return view('calender.week',compact('request','page_title','categories_s','apt','weekly_data','bays','week_dates','date', 'appointments', 'searched','global_notes','user_notes'));
    }




public function calender_monthly(Request $request)
    {
        
        $page_title = 'Calender';
        $categories_s = Categories::all();
        if($request->date){
            $date = $request->date;
        }else{
            $date = date('Y-m-d');            
        }

        $apt = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$date." 00:00:00", $date." 23:59:59"]
        );

        if($request->type){
            $apt = $apt->where('bay',$request->type);               
        }


        $apt = $apt->get();   
        $bays = BaySettings::orderBy('sort_order')->get();            

        $mstart = date('Y-m-1');
        $mfinish = date('Y-m-t');

        $start_date = $mstart;
        $monthly = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$mstart." 00:00:00", $mfinish." 23:59:59"]
        );


         if($request->type){
            $monthly = $monthly->where('bay',$request->type);               
        }
            $monthly = $monthly->get();

        $monthly_data = [];
        foreach($monthly as $key => $a){

            $elapsed = strtotime(date('Y-m-d H:i',strtotime($a->to_date.' '.$a->time_to))) - strtotime(date('Y-m-d H:i',strtotime($a->from_date.' '.$a->time_from)));

            $start_time = new \DateTime($a->from_date.' '.$a->time_from);
            $end_time = new \DateTime($a->to_date.' '.$a->time_to);            
            $since_start = $start_time->diff(new \DateTime($a->to_date.' '.$a->time_to));
            $diff = $since_start->h.'h '.$since_start->i.'m';    
            $monthly_data[$key]['id'] = $a->id;
            $monthly_data[$key]['title'] = '~ ('.$diff.')';            
            $monthly_data[$key]['start'] = $a->from_date.' '.$a->time_from;            
            $monthly_data[$key]['end'] = $a->to_date.' '.$a->time_to;
            $monthly_data[$key]['backgroundColor'] = 'yellow';
            $monthly_data[$key]['resourcId'] = 1;
            $monthly_data[$key]['allDay'] = false;
        }  
             
        $appointments = Appointments::select();


        $yesterday = $request->date_yes;

        if($yesterday){
            $appointments = $appointments->whereDate('created_at', $yesterday);
        }
        $tomorrow = $request->date_tom;
        if($tomorrow){
            $appointments = $appointments->whereDate('created_at', $tomorrow);
        }
        $search = $request->search;
        if($search){
            $appointments = $appointments->where('bay', 'LIKE', "%$search%")->orWhere('status', 'LIKE', "%$search%");
        }

        if($request->type){
            $appointments = $appointments->where('bay', $request->type);
        }

        if(!$request->date_yes && !$request->date_tom){
            $appointments = $appointments->whereDate('created_at', Carbon::today());                     
        }

        $appointments = $appointments->get();

         $searched = isset($result)? $result: "";
         

        $global_notes = NotesData::where('type','global')->where('page','calender')->first();         
        $user_notes = NotesData::where('type','user')->where('page','calender')->first();                 


        return view('calender.monthly',compact('request','page_title','categories_s','apt','bays','monthly_data','date', 'appointments', 'searched','global_notes','user_notes'));
    }



public function calender_list(Request $request)
    {
        
        $page_title = 'Calender';
        $categories_s = Categories::all();
        if($request->date){
            $date = $request->date;
        }else{
            $date = date('Y-m-d');            
        }

        $apt = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$date." 00:00:00", $date." 23:59:59"]
        );

        if($request->type){
            $apt = $apt->where('bay',$request->type);               
        }


        $apt = $apt->get();   
        $bays = BaySettings::orderBy('sort_order')->get();            

        $wstart = (date('D') != 'Mon') ? date('Y-m-d', strtotime('last Monday')) : date('Y-m-d');
        $wfinish = (date('D') != 'Sat') ? date('Y-m-d', strtotime('next Sunday')) : date('Y-m-d');



        $weekly_data = Appointments::whereRaw(
          "(from_date >= ? AND to_date <= ?)", 
          [$wstart." 00:00:00", $wfinish." 23:59:59"]
        );

        if($request->type){
            $weekly_data = $weekly_data->where('bay',$request->type);               
        }
            $weekly_data = $weekly_data->get();
        $week_dates = [];

        $start_date = $wstart;
        while (strtotime($start_date) <= strtotime($wfinish)) {
            $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
            array_push($week_dates,$start_date);
        }


        $mstart = date('Y-m-1');
        $mfinish = date('Y-m-t');
             
        $appointments = Appointments::select();


        $yesterday = $request->date_yes;

        if($yesterday){
            $appointments = $appointments->whereDate('created_at', $yesterday);
        }
        $tomorrow = $request->date_tom;
        if($tomorrow){
            $appointments = $appointments->whereDate('created_at', $tomorrow);
        }
        $search = $request->search;
        if($search){
            $appointments = $appointments->where('bay', 'LIKE', "%$search%")->orWhere('status', 'LIKE', "%$search%");
        }

        if($request->type){
            $appointments = $appointments->where('bay', $request->type);
        }

        if(!$request->date_yes && !$request->date_tom){
            $appointments = $appointments->whereDate('created_at', Carbon::today());                     
        }


        $appointments = $appointments->get();

         $searched = isset($result)? $result: "";
         

        $global_notes = NotesData::where('type','global')->where('page','calender')->first();         
        $user_notes = NotesData::where('type','user')->where('page','calender')->first();                 


        return view('calender.list',compact('request','page_title','categories_s','apt','weekly_data','bays','week_dates','date', 'appointments', 'searched','global_notes','user_notes'));
    }

}
