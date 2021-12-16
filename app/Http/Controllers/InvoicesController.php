<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Suppliers;
use Validator;
use Illuminate\Support\Facades\Input;
use Alert;
use Auth;
use DB;
use App\Models\Invoices;
use App\Models\EstimateData;
use App\Models\EstimatePart;
use App\Models\EstimateAdvisory;

class InvoicesController extends Controller
{
	public function index(Request $request)
	{
		$page_title = 'Invoice';
        $invoices = new Invoice();
        
        if($request->created_type){
        }

        if(isset($request->from) && isset($request->to)){
          $invoices = $invoices->whereBetween('date_reg',array($request->from,$request->to));
        }

        if(isset($request->today)){

          $invoices = $invoices->where('date_reg',$request->today);

        }

        if(isset($request->custom_date_range)){

          $date_range = get_custom_date_range($request->custom_date_range);
          $invoices = $invoices->whereBetween('date_reg',array($date_range[0],$date_range[1]));          

        }

        if(isset($request->status)){

/*          $invoices = $invoices->whereDate('date_reg',$request->today);*/

        }

        $invoices = $invoices->paginate(25);
        $requestData = $request;
        
		return view('admin.invoice',compact('page_title','invoices','requestData'));
	}

    public function add_new_invoice(Request $r)
    {
        $page_title = 'Add New Invoice';
        $time = [];
        for ($i = 6; $i <= 23; $i++)
		{
		    for ($j = 0; $j <= 45; $j+=15)
		      array_push($time, echo_datelist($i, $j));


		}

		for ($i = 0; $i <= 5; $i++)
		{
		    for ($j = 0; $j <= 45; $j+=15)
		      array_push($time, echo_datelist($i, $j));
		}

		$time_array = [];
		$tx = 0;
		foreach($time as $tm){
			if($tx==0){
				$x = '<optgroup><option class="rec_time" value="'.date('h:i A',strtotime($tm)).'">'.date('h:i A',strtotime($tm)).'</option>';			
			}elseif($tx==3){
				$x = '<optgroup><option class="rec_time" value="'.date('h:i A',strtotime($tm)).'">'.date('h:i A',strtotime($tm)).'</option></optgroup>';				
			}else{
				$x = '<option class="rec_time" value="'.date('h:i A',strtotime($tm)).'">'.date('h:i A',strtotime($tm)).'</option>';				
			}

			array_push($time_array, $x);
			if($tx==3){
				$tx = 0;
			}else{
				$tx++;
			}
		}


    $labour=EstimateData::get();

        $part=EstimatePart::get();
        $adivsory=EstimateAdvisory::get();

        return view('admin.add_new_invoice',compact('page_title','time_array','r','labour','part','adivsory'));
    }


    public function invoice_new()
    {
    		$page_title = 'New Invoice';
    		return view('admin.invoices.new',compact('page_title'));
        }
    
        public function invoice_open($id)
        {
            $page_title = 'Edit Invoice';
            $time = [];
            for ($i = 6; $i <= 23; $i++)
            {
                for ($j = 0; $j <= 45; $j+=15)
                  array_push($time, echo_datelist($i, $j));
            }
            
            for ($i = 0; $i <= 5; $i++)
            {
                for ($j = 0; $j <= 45; $j+=15)
                  array_push($time, echo_datelist($i, $j));
            }
        
            $time_array = [];
            $tx = 0;
            foreach($time as $tm){
              if($tx==0){
                $x = '<optgroup><option class="rec_time" value="'.date('h:i A',strtotime($tm)).'">'.date('h:i A',strtotime($tm)).'</option>';     
              }elseif($tx==3){
                $x = '<optgroup><option class="rec_time" value="'.date('h:i A',strtotime($tm)).'">'.date('h:i A',strtotime($tm)).'</option></optgroup>';        
              }else{
                $x = '<option class="rec_time" value="'.date('h:i A',strtotime($tm)).'">'.date('h:i A',strtotime($tm)).'</option>';       
              }
        
              array_push($time_array, $x);
              if($tx==3){
                $tx = 0;
              }else{
                $tx++;
              }
            }
    
        $invoice = Invoice::where('id', $id)->first();
        return view('admin.add_new_invoice',compact('page_title','time_array', 'invoice'));
    

    }

    public function new_credit_expense()
    {
		$page_title = 'Expense Credit Note';
		return view('admin.invoices.expense_credit',compact('page_title'));
    }


    public function expense_archive()
    {
		$page_title = 'Expense Archive';
		return view('admin.invoices.expense_archive',compact('page_title'));
    }

    public function save_invoice(Request $request)
    {

      //dd($request);
    	$new = new Invoices();
    	$new->supplier = $request->supplier;
    	$new->account_number = $request->account_number;
    	$new->contact_name = $request->contact_name;
    	$new->address = serialize($request->address);
    	$new->post_code = $request->post_code;
    	$new->telephone = $request->telephone;
    	$new->fax = $request->fax;
    	$new->invoice_date = $request->invoice_date;
    	$new->invoice_number = $request->invoice_number;
    	$new->nominal_category = $request->nominal_category;
    	$new->nominal_code = $request->nominal_code;
    	$new->reference = $request->reference;
    	$new->description = $request->desc;
    	$new->t_code = $request->t_code;
    	$new->gross = $request->gross;
    	$new->net = $request->net;
    	$new->t_code_net = $request->t_code_net;
    	$new->vat_net = $request->vat_net;
    	$new->receipts = $request->receipts;
    	$new->balance = $request->balance;
    	$new->save();

    	return redirect()->back();
    }


    public function new_credit()
    {
              $suppliers = Suppliers::all();        
            $page_title = 'Credit Invoice';
        return view('admin.expense.new_credit',compact('page_title','suppliers'));
    }



    public function store(Request $request)
    {

        //dd($request);
        
                  $new = new Invoice();                       
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

                  alert()->success('Saved'); 
                   return redirect()->route('admin.invoices'); 
     
    
}    
      public function get_invoice_details(Request $request){
          
          if($request->account){
               $response = Invoice::where('acc_number', $request->account)->first();
          }else{
            $response = Invoice::where('post_code', $request->val)->first();   
          }
       
       return $response;   
      }


      public function admin_invoice_view_detail($id)
      {
          $page_title = 'Edit Invoice';
          $edit = Invoice::where('id', $id)->first();
          return view('admin.admin_invoice_view_detail',compact('edit','page_title'));
      }


      public function admin_save_invoice_update(Request $request)
      {
       // dd($request);

          $result =  Invoice::where('id', $request->id)->update([
                
                'registration_no' => $request->registration_no,
                'model' => $request->model,
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

         alert()->success('Saved');    
         return redirect()->route('admin.invoices');
                   

      }

}
