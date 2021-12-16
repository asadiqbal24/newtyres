<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicles;
use App\Models\VehiclesModels;
use App\Models\VehiclesSeries;
use App\Models\VehicleDetails;
use App\Models\VehiclesMake;
use App\Models\Customer;
use App\Models\VehicleDocuments;




class VehiclesController extends Controller
{
	public function index(Request $request){
		$page_title = 'Admin::Vehicles';
        $vehicles = Vehicles::select();

         if($request->search){
            $vehicles = $vehicles->where('name', 'like', $request->search.'%');           
         }


        if($request->customer_search){
            $vehicles = $vehicles->where('name', 'like', '%'.$request->vehicle_search.'%');           
        }         

        $vehicles = $vehicles->orderBy('id','desc');

        if($request->records){
            if($request->records=='all'){
                $vehicles = $vehicles->paginate($vehicles->count());
            }else{
                $vehicles = $vehicles->paginate($request->records);                
            }

        }else{
            $vehicles = $vehicles->paginate(30);            
        }


    	return view('admin.vehicles.index',compact('page_title','vehicles','request'));
	}

	public function vehicles(){
		$page_title = 'Admin::Vehicles';
		return view('admin.vehicles',compact('page_title','vehicles'));
	}


	public function add_new_vehicle(Request $request)
	{
        $customers = Customer::all();
        $make = Vehicles::all();
		$page_title = 'Admin::Add Vehicles';
		return view('admin.vehicles.add_vehicles',compact('page_title', 'customers','request','make'));

	}


  public function edit_vehicle($id)
  {
   
    $vehicle = Vehicles::where('id',$id)->first();
    $vehicle_details = VehicleDetails::where('vehicle_id',$id)->first();
    $make = VehiclesMake::where('id',$id)->first();
    $page_title = 'Admin::Edit Vehicles';
    $customers = Customer::all();
    return view('admin.vehicles.edit_vehicle',compact('page_title','vehicle','make','vehicle_details', 'customers'));

  }



	public function vehicles_model(){


		$page_title = 'Admin::Vehicles-Models';
		$models = VehiclesMake::with('vehicle_d')->paginate(25);
       // dd($models);
		$vehicles = Vehicles::all();

		return view('admin.vehicles_model',compact('page_title','models','vehicles'));


	}


	public function vehicles_model_series(){


		$page_title = 'Admin::Vehicles-Models-Series';
		$models = VehiclesModels::all();
		$series = VehiclesSeries::with('vehicle_d','model_d')->paginate(25);
		$vehicles = Vehicles::all();

		return view('admin.vehicles_model_series',compact('page_title','models','vehicles','series'));


	}




	public function vehicles_save(Request $r){


      if(isset($r->selected_id)){
          $check = Vehicles::where('name',$r->name)->where('id','!=',$r->selected_id)->first();
      }else{
        $check = Vehicles::where('name',$r->name)->first();        
      }

        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{



               if(isset($r->selected_id)){
                    $newb = Vehicles::where('id',$r->selected_id)->first();
                }else{
                    $newb = new Vehicles();
                }
                        
                        $newb->name=$r->name;
/*                        $newb->type=$r->type;
                        $newb->description = $r->desc;*/
                        $url = str_replace(' ','-',$r->name);


/*				        if ($r->hasFile('file')) 
				            {

				            $destinationPath = public_path()."/images/vehicles";
				            $extension =  $r->file('file')->getClientOriginalExtension();
				            $fileName = time();
				            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
				            if(!$r->file('file')->move($destinationPath,$fileName))
				            {
				                throw new \Exception("Failed Upload");                    
				            }

				            $picture = asset("/public/images/vehicles")."/".$fileName;
				            $newb->image = $picture;

				        }*/


/*                        $newb->url = strtolower($url);                        */
                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();

	}



	public function vehicles_model_save(Request $r){

				$check = VehiclesModels::where('name',$r->name)->where('vehicle_id',$r->vehicle_id)->where('year',$r->year)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = new VehiclesModels();
                        $newb->name=$r->name;
                        $newb->vehicle_id = $r->vehicle_id;
                        $newb->year = $r->year;
                        $url = str_replace(' ','-',$r->name);
                        $newb->url = strtolower($url);                        
                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();

	}


		public function vehicles_model_series_save(Request $r){


		$check = VehiclesSeries::where('name',$r->name)->where('vehicle_id',$r->vehicle_id)->where('model_id',$r->model)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = new VehiclesSeries();
                        $newb->name=$r->name;
                        $newb->vehicle_id = $r->vehicle_id;
                        $newb->model_id = $r->model;
                        $url = str_replace(' ','-',$r->name);
                        $newb->url = strtolower($url);                        
                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();

		}


		public function admin_vehicle_delete($id){


			Vehicles::where('id',$id)->delete();
			VehiclesSeries::where('vehicle_id',$id)->delete();
			VehiclesModels::where('vehicle_id',$id)->delete();


			alert()->success('Deleted...!!!');
			return redirect()->back();

		}


		public function vehicles_update(Request $r){

		
		$check = Vehicles::where('id','!=',$r->id)->where('name',$r->name)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = Vehicles::where('id',$r->id)->first();
                        $newb->name=$r->name;
                        $newb->description = $r->edit_desc;
                        $url = str_replace(' ','-',$r->name);


				        if ($r->hasFile('file')) 
				            {

				            $destinationPath = public_path()."/images/vehicles";
				            $extension =  $r->file('file')->getClientOriginalExtension();
				            $fileName = time();
				            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
				            if(!$r->file('file')->move($destinationPath,$fileName))
				            {
				                throw new \Exception("Failed Upload");                    
				            }

				            $picture = asset("/public/images/vehicles")."/".$fileName;
				            $newb->image = $picture;

				        }


                        $newb->url = strtolower($url);                        
                        $newb->save();
                        alert()->success('Saved...!!!');
            }        

            return redirect()->back();



		}
	

		public function vehicles_model_update(Request $r){

							$check = VehiclesModels::where('id','!=',$r->id)->where('name',$r->name)->where('vehicle_id',$r->vehicle_id)->where('year',$r->year)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = VehiclesModels::where('id',$r->id)->first();
                        $newb->name=$r->name;
                        $newb->vehicle_id = $r->vehicle_id;
                        $newb->year = $r->year;
                        $url = str_replace(' ','-',$r->name);
                        $newb->url = strtolower($url);                        
                        $newb->save();
                        alert()->success('Saved...!!!');
            }        

            return redirect()->back();



		}

		public function get_vehicle_model(Request $r){
	
			$models = VehiclesModels::where('vehicle_id',$r->val)->get();
			return $models;
	}


	public function vehicles_model_series_update(Request $r){

		$check = VehiclesSeries::where('id','!=',$r->id)->where('name',$r->name)->where('vehicle_id',$r->vehicle_id)->where('model_id',$r->model)->first();

        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = VehiclesSeries::where('id',$r->id)->first();
                        $newb->name=$r->name;
                        $newb->vehicle_id = $r->vehicle_id;
                        $newb->model_id = $r->model;
                        $url = str_replace(' ','-',$r->name);
                        $newb->url = strtolower($url);                        
                        $newb->save();
                        alert()->success('Saved...!!!');
            }        

            return redirect()->back();

	}


	public function admin_vehicle_series_delete($id){

			VehiclesSeries::where('id',$id)->delete();
			alert()->success('Deleted...!!!');
			return redirect()->back();

	}


	public function store(Request $request){

       // dd($request);

      if($request->id){
          
        $new = VehiclesMake::where('id',$request->id)->first();
    
      }
      else{
    
      $new = new VehiclesMake();    
    
      }  
        $new->registration_number = $request->register_no;
    	$new->account_number = $request->account_number;
        $new->make = $request->make;
        $new->model = $request->model;
        $new->derivative = $request->derivative;
        $new->chassis_number = $request->chassis_number;
        $new->engine_cc = $request->engine_cc;
        $new->fuel_type = $request->fuel_type;
        $new->engine_no = $request->engine_no;
        $new->color = $request->color;
        $new->paint_code = $request->paint_code;
        $new->key_code = $request->key_code;
        $new->radio_code = $request->radio_code;
        $new->date_manufactured = $request->date_manufactured;
        $new->date_reg = $request->date_reg;
        $new->tyre_size_front = $request->tyre_size_front;
        $new->tyre_size_back = $request->tyre_size_back;
        $new->tyre_depth_front = $request->tyre_depth_front;
        $new->tyre_depth_back = $request->tyre_depth_back;
        $new->save();
    
    
      if($request->id){
        $newd = VehicleDetails::where('vehicle_id',$request->id)->first();
        if(empty($newd)){
           $newd = new VehicleDetails();      
        }
      }else{
       $newd = new VehicleDetails();
      }  
    
       $newd->vehicle_id = $new->id;
       $newd->name = $request->name;
       $newd->general_checkbox = serialize($request->general_checkbox);
       $newd->features = serialize($request->features);
       $newd->telephone = $request->telephone;
       $newd->mobile = $request->mobile;
       $newd->origin = $request->origin;
       $newd->model_series = $request->model_series;
       $newd->seats = $request->seats;
       $newd->body_style = $request->body_style;
       $newd->gears = $request->gears;
       $newd->transmission = $request->transmission;
       $newd->drive_axle = $request->drive_axle;
       $newd->drive_type = $request->drive_type;
       $newd->fuel_delivery = $request->fuel_delivery;
       $newd->aspiration = $request->aspiration;
       $newd->cylinders = serialize($request->cylinders);
       $newd->valves_per_cyl = $request->valves_per_cyl;
       $newd->bore = $request->bore;
       $newd->kerb_weight = $request->kerb_weight;
       $newd->max = $request->max;
       $newd->gross = $request->gross;
       $newd->height_mm = $request->height_mm;
       $newd->width = $request->width;
       $newd->roof = $request->roof;
       $newd->combined = $request->combined;
       $newd->urban = $request->urban;
       $newd->cold = $request->cold;
       $newd->bhp = $request->bhp;
       $newd->torque = $request->torque;
       $newd->top_speed = $request->top_speed;
       $newd->zero_sixty = $request->zero_sixty;
       $newd->c02 = $request->c02;
       $newd->custom_field1 = $request->custom_field1;
       $newd->custom_field2 = $request->custom_field2;
       $newd->custom_field3 = $request->custom_field3;
       $newd->custom_field4 = $request->custom_field4;
       $newd->custom_field5 = $request->custom_field5;
       $newd->custom_field6 = $request->custom_field6;
       $newd->custom_field7 = $request->custom_field7;
       $newd->custom_field8 = $request->custom_field8;
       $newd->notes = $request->notes;
       $newd->type_of_vehicles = $request->type_of_vehicles;
       $newd->last_invoiced = $request->last_invoiced;
       $newd->previous = serialize($request->previous);
       $newd->save();
    
    alert()->success('Saved');
    			return redirect()->back();
    
    	}


        public function attachments_lists()
        {
            $page_title = 'Admin::Vehicles-Attachments';
            return view('admin.vehicles.attachments',compact('page_title'));
        }

        public function admin_attach_documents(Request $request)
        {

            // dd($request);


        $new = new VehicleDocuments();
        $new->date=$request->date;
        if ($request->hasFile('file'))
        {
        $destinationPath = public_path()."/images/vehicles";
        $extension =  $request->file('file')->getClientOriginalExtension();
        $file_name = $request->file('file')->getClientOriginalName();
        $fileName = time();
        $fileName .= rand(11111,99999).'.'.$extension; // renaming image
        if(!$request->file('file')->move($destinationPath,$file_name))
        {
        throw new \Exception("Failed Upload");
        }
        $thumbnail = asset("/public/images/vehicles")."/".$file_name;
         $name = $file_name; 
         
        $new->file = $thumbnail;
        $new->file_name = $name;

        }
        $new->note=$request->notes;
        $new->save();
        alert()->success('Data Inserted success');
        return redirect()->back();

        }




}
