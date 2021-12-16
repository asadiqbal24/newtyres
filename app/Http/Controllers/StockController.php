<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Suppliers;
use Illuminate\Http\Request;
use App\Models\StockSetting;
use App\Models\FieldRequired;
use App\Models\MiscellaneousSetting;
use App\Models\CashDrawer;
use App\Models\BaySettings;
use App\Models\CalendarGridSettings;

class StockController extends Controller
{

    public function index()
    {
        $page_title = 'Admin Stock';
        $stock = Stock::paginate(10);
        
        return view('admin.stock.index',compact('page_title','stock'));
    }

    public function create()
    {

        $fcategories = Stock::get()->pluck('category')->toArray();   
        $fcategories = array_unique($fcategories);
        $fcategories = array_values($fcategories);


        $fsubcategories = Stock::get()->pluck('sub')->toArray();   
        $fsubcategories = array_unique($fsubcategories);
        $fsubcategories = array_values($fsubcategories);


        $supplier = Suppliers::select('id','name')->get()->toArray();

        $page_title = 'Admin Add Stock';
        return view('admin.stock.add',compact('page_title','fcategories','fsubcategories','supplier'));        

    }

    public function edit($id)
    {
        $stock = Stock::where('id',$id)->first();
        $page_title = 'Admin Edit Stock';
        $fcategories = Stock::get()->pluck('category')->toArray();   
        $fcategories = array_unique($fcategories);
        $fcategories = array_values($fcategories);


        $fsubcategories = Stock::get()->pluck('sub')->toArray();   
        $fsubcategories = array_unique($fsubcategories);
        $fsubcategories = array_values($fsubcategories);


        $supplier = Suppliers::select('id','name')->get()->toArray();


        return view('admin.stock.add',compact('page_title','stock','fcategories','fsubcategories','supplier'));        
    }

    public function store(Request $request)
    {
       // dd($request);

    if($request->id){
        $new = Stock::where('id',$request->id)->first();
    }else{
        $new = new Stock();          
    }    


    $new->supplier = $request->supplier;
    $new->category = $request->category;
    $new->sub = $request->sub;
    $new->manufacturer = $request->manufacturer;
    $new->part_number = $request->part_number;
    $new->barcode = $request->barcode;
    $new->barcode_img = $request->barcode_data;
    $new->description = $request->description;
    $new->cost_net = $request->cost_net;
    $new->select_cost_net = $request->select_cost_net;
    $new->trade_markup = $request->trade_markup;
    $new->trade_net = $request->trade_net;
    $new->taxcode = $request->taxcode;
    $new->retail_markup = $request->retail_markup;
    $new->retail_net = $request->retail_net;
    $new->gurantee = $request->gurantee;
    $new->gurantee_custom = $request->gurantee_custom;
    $new->location = $request->location;
    $new->keywords = $request->keywords;
    $new->class = $request->class;
    $new->width = $request->width;
    $new->economy = $request->economy;
    $new->wet_grip = $request->wet_grip;
    $new->noise = $request->noise;
    $new->level = $request->level;
    $new->track_item = $request->track_item;
    $new->actual_stock_level = $request->actual_stock_level;
    $new->low_stock_below = $request->low_stock_below;
    $new->minimum_order_quantity = $request->minimum_order_quantity;

    $new->low_stock_below = $request->low_stock_below;
    $new->minimum_order_quantity = $request->minimum_order_quantity;    
    $new->info_notes = $request->global_notes; 



                    if ($request->hasFile('image_upload')) 
                            {

                            $destinationPath = public_path()."/images/stock/";
                            $extension =  $request->file('image_upload')->getClientOriginalExtension();
                            $fileName = time();
                            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                            if(!$request->file('image_upload')->move($destinationPath,$fileName))
                            {
                                throw new \Exception("Failed Upload");                    
                            }

                            $picture = asset("/public/images/stock/")."/".$fileName;
                            $new->image = $picture;

                        }

    $new->save();

    alert()->success('Update');
    return redirect()->route('admin.stock');

    }


    public function stock_control_setting()
    {
        $page_title="Stock Control Setting";
        $stock=StockSetting::first();
        return view('admin.stock.stock_control_setting',compact('page_title','stock'));
    }


    public function admin_stock_setting_save(Request $request)
    {




    $new=StockSetting::where('id',$request->id)->first();
    //dd($new);
    if (empty($new)) {
        
         $new = new StockSetting();
        $new->new_item=$request->new_entry;
        $new->default_stock=$request->defaultstock;
        $new->stock_item=$request->new_stock_item;
        $new->home_screen=$request->home_screen;
        $new->auto_lookup=$request->auto_lookup;
        $new->gross_figure=$request->gross_figure;
        $new->update_stock_price=$request->update_stock_pricing;
        $new->barcode_scanning=$request->enable_barcode;
        $new->stock_older_system=$request->stock_older_system;
        $new->stock_order=$request->stock_order;
        $new->negative_stock=$request->allow_negative_stock;
        $new->save(); 
    }else{

         $new->new_item=$request->new_entry;
        $new->default_stock=$request->defaultstock;
        $new->stock_item=$request->new_stock_item;
        $new->home_screen=$request->home_screen;
        $new->auto_lookup=$request->auto_lookup;
        $new->gross_figure=$request->gross_figure;
        $new->update_stock_price=$request->update_stock_pricing;
        $new->barcode_scanning=$request->enable_barcode;
        $new->stock_older_system=$request->stock_older_system;
        $new->stock_order=$request->stock_order;
        $new->negative_stock=$request->allow_negative_stock;
        $new->save(); 

    }

 

        alert()->success("Stock Setting Save");
        return redirect()->back();

}

public function required_fields()
{
   $page_title="Required Fields";
   $field=FieldRequired::first();
   return view('admin.stock.required_fields',compact('page_title','field'));
}



public function admin_required_field_save(Request $request)
{
    

    $new=FieldRequired::where('id',$request->id)->first();
    //dd($new);
    if(empty($new)){
          $new = new FieldRequired();
        $new->registration=$request->registration;
        $new->derivative=$request->derivative;
        $new->make_model=$request->make_model;
        $new->chassis_no=$request->chassis_no;
        $new->fuel_type=$request->fuel_type;
        $new->engine_cc=$request->engine_cc;
        $new->engine_code=$request->engine_code;
        $new->colour=$request->color;
        $new->engine_number=$request->engine_number;
        $new->paint_code=$request->paint_code;
        $new->key_code=$request->key_code;
        $new->radio_code=$request->radio_code;
        $new->mileage=$request->milage;
        $new->date_reg=$request->date_reg;
        $new->name=$request->full_name;
        $new->house_no=$request->house_no;
        $new->road=$request->road;
        $new->locality=$request->locality;
        $new->town=$request->town;
        $new->country=$request->country;
        $new->post_code=$request->post_code;
        $new->telephone=$request->telephone;
        $new->email=$request->email;
        $new->mobile=$request->mobile;
        $new->referral=$request->refferal;
        $new->fp1_sundries=$request->sundaries;
        $new->fp2_lubricants=$request->lubricant;
        $new->fp3_paint_mat=$request->pant_mat;
        $new->department=$request->department;
        $new->order_ref=$request->order_ref;
        $new->terms=$request->term;
        $new->sales_person=$request->sale_person;
        $new->qc_technician=$request->qc_technician;
        $new->road_tester=$request->road_tester;
        $new->mot_status=$request->mot_status;
        $new->mot_technician=$request->mot_technician;
        $new->technician_for_all=$request->technician_all_labour;
        $new->cost_price_for_all_part=$request->cost_price_for_all_part;
        $new->mot_reminder=$request->mot_reminder;
        $new->service_reminder=$request->services_reminder;
        $new->cambelt_reminder=$request->cambelt_reminder;
        $new->carry_out=$request->carry_out;
        $new->replace_cambelt=$request->replace_cambelt;
        $new->mot_reminder_select=$request->mot_reminder_select;
        $new->services_reminder_select=$request->services_reminder_select;
        $new->camblet_reminder_select=$request->camblet_reminder_select;
        $new->save();

    }else{

        $new->registration=$request->registration;
        $new->derivative=$request->derivative;
        $new->make_model=$request->make_model;
        $new->chassis_no=$request->chassis_no;
        $new->fuel_type=$request->fuel_type;
        $new->engine_cc=$request->engine_cc;
        $new->engine_code=$request->engine_code;
        $new->colour=$request->color;
        $new->engine_number=$request->engine_number;
        $new->paint_code=$request->paint_code;
        $new->key_code=$request->key_code;
        $new->radio_code=$request->radio_code;
        $new->mileage=$request->milage;
        $new->date_reg=$request->date_reg;
        $new->name=$request->full_name;
        $new->house_no=$request->house_no;
        $new->road=$request->road;
        $new->locality=$request->locality;
        $new->town=$request->town;
        $new->country=$request->country;
        $new->post_code=$request->post_code;
        $new->telephone=$request->telephone;
        $new->email=$request->email;
        $new->mobile=$request->mobile;
        $new->referral=$request->refferal;
        $new->fp1_sundries=$request->sundaries;
        $new->fp2_lubricants=$request->lubricant;
        $new->fp3_paint_mat=$request->pant_mat;
        $new->department=$request->department;
        $new->order_ref=$request->order_ref;
        $new->terms=$request->term;
        $new->sales_person=$request->sale_person;
        $new->qc_technician=$request->qc_technician;
        $new->road_tester=$request->road_tester;
        $new->mot_status=$request->mot_status;
        $new->mot_technician=$request->mot_technician;
        $new->technician_for_all=$request->technician_all_labour;
        $new->cost_price_for_all_part=$request->cost_price_for_all_part;
        $new->mot_reminder=$request->mot_reminder;
        $new->service_reminder=$request->services_reminder;
        $new->cambelt_reminder=$request->cambelt_reminder;
        $new->carry_out=$request->carry_out;
        $new->replace_cambelt=$request->replace_cambelt;
        $new->mot_reminder_select=$request->mot_reminder_select;
        $new->services_reminder_select=$request->services_reminder_select;
        $new->camblet_reminder_select=$request->camblet_reminder_select;
        $new->save();
    }

    alert()->success("Data Insert Successffuly");
    return redirect()->back();

}

public function miscellaneous_settings()
{
    $page_title="Miscellaneous Setting";
    $settings=MiscellaneousSetting::first();
    return view('admin.stock.miscellaneous_settings',compact('page_title','settings'));
}

public function admin_miscellaneous_setting(Request $request)
{
  // dd($request);


   $new=MiscellaneousSetting::where('id',$request->id)->first();
   //dd($new);
   if (empty($new)) {

     $new = new MiscellaneousSetting();
        $new->day=$request->day;
        $new->month=$request->month;
        $new->character_case=$request->character_case;
        $new->date_display=$request->date_display;
        $new->default_sort=$request->default_sort;
        $new->automaticlly_formt=$request->automaticlly_formt;
        $new->default_vehical=$request->default_vehical;
        $new->highlight_last=$request->highlight_last;

        $new->repeat_last=$request->repeat_last;
        $new->keep_orignal=$request->keep_orignal;
        $new->time_until=$request->time_until;
        $new->display_doc=$request->display_doc;
        $new->output_printed=$request->output_printed;


        $new->print_account=$request->print_account;
        $new->statement_footer=$request->statement_footer;




        $new->prefix_customer=$request->prefix_customer;
        $new->suggest_matching=$request->suggest_matching;
        $new->reminders=$request->reminders;
        $new->mass_mailing=$request->mass_mailing;
        $new->email=$request->email;
        $new->sms=$request->sms;
        $new->save();

       
   }else{
        $new->day=$request->day;
        $new->month=$request->month;
        $new->character_case=$request->character_case;
        $new->date_display=$request->date_display;
        $new->default_sort=$request->default_sort;
        $new->automaticlly_formt=$request->automaticlly_formt;
        $new->default_vehical=$request->default_vehical;
        $new->highlight_last=$request->highlight_last;
        $new->repeat_last=$request->repeat_last;
        $new->keep_orignal=$request->keep_orignal;
        $new->time_until=$request->time_until;
        $new->display_doc=$request->display_doc;
        $new->output_printed=$request->output_printed;
        $new->print_account=$request->print_account;
        $new->statement_footer=$request->statement_footer;
        $new->prefix_customer=$request->prefix_customer;
        $new->suggest_matching=$request->suggest_matching;
        $new->reminders=$request->reminders;
        $new->mass_mailing=$request->mass_mailing;
        $new->email=$request->email;
        $new->sms=$request->sms;
        $new->save();



   }
   alert()->success("Data Insert Successffuly");
   return redirect()->back();
}



public function admin_cash_drawer()
{
   $page_title="Miscellaneous Setting";
   $cashdrawer=CashDrawer::first();
   return view('admin.stock.admin_cash_drawer',compact('page_title','cashdrawer'));
}


public function admin_cash_drawer_save(Request $request)
{
    $new=CashDrawer::where('id',$request->id)->first();
    if (empty($new)) {
        $new = new CashDrawer();
        $new->port_mode=$request->port_mode;
        $new->open_command=$request->open_command;
        $new->enable_opening=$request->enable_opening;
        $new->save();
        
    }else{
        $new->port_mode=$request->port_mode;
        $new->open_command=$request->open_command;
        $new->enable_opening=$request->enable_opening;
        $new->save();
    }
    alert()->success("Data Insert Successffuly");
    return redirect()->back();
}



public function calender_bays_setting()
{
    $page_title="Calender Bay Settings";
    $bay=BaySettings::all();
    $calender=CalendarGridSettings::first();
    return view('admin.bayssetting.calender_bays_setting',compact('page_title','bay','calender'));
}


public function admin_new_bay_add()
{
 
    $page_title="New Bay Added";
    return view('admin.bayssetting.admin_new_bay_add',compact('page_title')); 
}


public function admin_bay_setting_save(Request $request)
{

    $new= new BaySettings();
    $new->bay_name=$request->name;
    $new->sort_order=$request->sort_order;
    $new->active=$request->active;
    $new->save();
    alert()->success("Bay Setting Saved");
    return redirect()->route('calender-bays-setting');
}


public function admin_bay_setting_edit($id)
{
 
    $page_title="Edit Bay";
    $edit=BaySettings::where('id',$id)->first();
    return view('admin.bayssetting.admin_bay_setting_edit',compact('page_title','edit'));   
}


public function admin_bay_update(Request $request)
{
    $update=BaySettings::where('id',$request->id)->first();

    if (!empty($update)) {
        $update->bay_name=$request->name;
        $update->sort_order=$request->sort_order;
        $update->active=$request->active;
        $update->save();
    }
    alert()->success("Data Updated SuccessFully");
    return redirect()->route('calender-bays-setting');

}

public function admin_bay_delete($id)
{
     $bay_delete=BaySettings::where('id',$id)->delete();
     alert()->success("Data Deleted Successfully");
     return redirect()->back();

}



public function admin_calender_grid_system_save(Request $request)
{

    //dd($request);
  $new=CalendarGridSettings::where('id',$request->id)->first();
  if (empty($new)) {
    $new = new CalendarGridSettings();
    $new->grid_start_time=$request->grid_start_time;
    $new->grid_end_time=$request->grid_end_time;
    $new->work_start_time=$request->work_start_time;
    $new->work_end_time=$request->work_end_time;
    $new->lunch_start_time=$request->lunch_start_time;
    $new->lunch_end_time=$request->lunch_end_time;
    $new->interval_time=$request->interval_time;
    $new->default_calender=$request->default_calender;
    $new->calender_display_setting=$request->calender_display_setting;
    $new->appointment_date=$request->appointment_date;
    $new->booking_notes=$request->booking_notes;   
    $new->save();
      
  }else{
    $new->grid_start_time=$request->grid_start_time;
    $new->grid_end_time=$request->grid_end_time;
    $new->work_start_time=$request->work_start_time;
    $new->work_end_time=$request->work_end_time;
    $new->lunch_start_time=$request->lunch_start_time;
    $new->lunch_end_time=$request->lunch_end_time;
    $new->interval_time=$request->interval_time;
    $new->default_calender=$request->default_calender;
    $new->calender_display_setting=$request->calender_display_setting;
    $new->appointment_date=$request->appointment_date;
    $new->booking_notes=$request->booking_notes;   
    $new->save();
  }
  alert()->success("Data Inserted SuccessFully");
  return redirect()->back();
}




}


