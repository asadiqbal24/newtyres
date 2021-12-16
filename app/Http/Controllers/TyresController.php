<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use App\Models\Categories;
use App\Models\Tyres;
use App\Models\TyresCategories;
use App\Models\TyresBrands;
use App\Models\TyresBrandsPatterns;
use App\Models\Vehicles;
use App\Models\Promotions;
use App\Models\TyreAttributes;
use Illuminate\Http\Request;
use App\Models\VehiclesModels;
use App\Models\VehiclesSeries;
use App\Models\TyreSize;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\TyresDiscounts;


class TyresController extends Controller
{
	public function by_tyre_size(){


		$page_title = 'Tyre By Size';
        
        $tyres_cat = TyresCategories::with('tyres')->get();
         	      
		return view('home.tyre_by_size',compact('page_title','tyres_cat'));


	}


public function by_brand_size(){


		$page_title = 'Tyre By Brand Size';
        
        $tyres_cat = TyresCategories::with('tyres')->get();

		$tyres_brands = TyresBrands::all();         	      
		
		return view('home.tyre_by_brands_size',compact('page_title','tyres_brands','tyres_cat'));


	}

	public function by_tyre_brand(){


		$page_title = 'Tyre By Brands';
        
        $tyres_brands = TyresBrands::all();
         	      
		return view('home.tyre_by_brands',compact('page_title','tyres_brands'));


	}


	public function by_tyre_brand_pattern(){


		$page_title = 'Tyre By Brands Patterns';
        
        $tyres_brands = TyresBrands::with('patterns')->get();
         	      
		return view('home.tyre_by_brands_patterns',compact('page_title','tyres_brands'));


	}


	public function by_vehicles(){


		$page_title = 'Tyre By Vehicles';
        
        $vehicles = Vehicles::get()->chunk(4);
        

        $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_vehicles',compact('page_title','vehicles','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));


	}
	

	public function vehicles_make($slug){

		$page_title = 'Tyre By Vehicles Make';
        
        $vehicle = Vehicles::where('url',$slug)->first();

        $models = VehiclesModels::where('vehicle_id',$vehicle->id)->get();
	

               $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];



		return view('home.tyre_by_vehicles_make',compact('page_title','vehicle','models','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));


	}


	public function model_tyres($make,$model,Request $request){

		if(sizeof($_GET) > 0){

		        $vehicle = Vehicles::where('id',$_GET['make'])->first();

		        $models = VehiclesModels::where('id',$_GET['model'])->first();

		        $series = VehiclesSeries::where('vehicle_id',$vehicle->id)->where('model_id',$models->id)->get();
			
                $total = Tyres::where('vehicle_id',$vehicle->id)->where('make_id',$models->id)->where('series_id',$_GET['series'])->where('year',$_GET['year'])->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();

		        $tyres = Tyres::where('vehicle_id',$vehicle->id)->where('make_id',$models->id)->where('series_id',$_GET['series'])->where('year',$_GET['year'])->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->paginate(12);


		}else{

		        $vehicle = Vehicles::where('url',$make)->first();

		        $models = VehiclesModels::where('url',$model)->first();

		        $series = VehiclesSeries::where('vehicle_id',$vehicle->id)->where('model_id',$models->id)->get();

		        $total = Tyres::where('vehicle_id',$vehicle->id)->where('make_id',$models->id)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();  

                $tyres = Tyres::where('vehicle_id',$vehicle->id)->where('make_id',$models->id)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->paginate(12);
		}


		$page_title = $vehicle->name.' '.(isset($models)?$models->name:'').' Tyre By Vehicles Make';

        $allvehicle = Vehicles::get();        


        $allmodels = VehiclesModels::where('vehicle_id',$vehicle->id)->get();        
        

        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();


        $rn = 0;

         $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];


		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','request'));

	}


	public function runflat(Request $request){


		$rn = isset($_GET['rn'])?$_GET['rn']:'0';                        

		$runflat = isset($get['runflat'])?$get['runflat']:'0';  		

        $total = Tyres::where('run_flat',1)->where('make_id','-1')->where('series_id','-1')->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();

		$tyres = Tyres::where('run_flat',1)->where('make_id','-1')->where('series_id','-1')->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->paginate(12);

		$page_title = 'Tyre By Run Flat';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $vehicle = NULL;

        $runbrands = TyresBrands::with('run_flat')->get();

        $series = [];


        $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','runflat','rn','runbrands','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','request'));

	}

		public function tyres_runflat($url){


		$brand_id = TyresBrands::where('url',$url)->first();
				
        $total = Tyres::where('run_flat',1)->where('brand_id',$brand_id->id)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();

		$tyres = Tyres::where('run_flat',1)->where('brand_id',$brand_id->id)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->get();

		$page_title = 'Tyre By '.$brand_id->name.' Run Flat ';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $vehicle = NULL;

        $runbrands = TyresBrands::with('run_flat')->get();

        $rn = 1;

        $series = [];



 $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_brand_flat',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','runflat','rn','runbrands','brand_id','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','count'));


		}


	public function tyres_suv(){


		$rn = isset($_GET['rn'])?$_GET['rn']:'0';                        

		$runflat = isset($get['runflat'])?$get['runflat']:'0';  		

		$tyres = Tyres::where('suv_tyre',1)->where('make_id','-1')->where('series_id','-1')->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->get();

		$page_title = 'Tyre By Suv';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $vehicle = NULL;

        $runbrands = TyresBrands::with('suv_tyres')->get();

        $rn = 1;

        $series = [];


 $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_suv',compact('page_title','vehicle','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','runflat','rn','runbrands','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));

	}


	public function tyres_suv_brand($url){

		$brand_id = TyresBrands::where('url',$url)->first();
				
		$tyres = Tyres::where('suv_tyre','1')->where('brand_id',$brand_id->id)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->get();

		$page_title = 'Tyre By '.$brand_id->name.' Suv Tyres ';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $vehicle = NULL;

        $runbrands = TyresBrands::with('suv_tyres')->get();

        $rn = 1;

        $series = [];


 		$data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];


		return view('home.tyre_by_brand_flat',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','runflat','rn','runbrands','brand_id','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));


	}

	public function vehicle_search(Request $request){

		$get = $_REQUEST;

		//dd($get);		
	
		$syear = isset($get['year'])?$get['year']:date('Y');

		$smodel = isset($get['model'])?$get['model']:'0';

		$smake = isset($get['make'])?$get['make']:'0';

		$seriess = isset($get['series'])?$get['series']:'0';

		$categories = isset($get['categories'])?$get['categories']:'0';

		$brands = isset($get['brands'])?$get['brands']:'0';		

		$pricefrom = isset($get['pricefrom'])?$get['pricefrom']:'0';

        $promotion = isset($get['promotion'])?$get['promotion']:'0';

        $otr = isset($get['otr'])?$get['otr']:'0';

		$priceto = isset($get['priceto'])?$get['priceto']:'0';	

		$runflat = isset($get['runflat'])?$get['runflat']:'0';	

		$sortby = isset($get['sortby'])?$get['sortby']:'0';		

		$delivery = isset($get['delivery'])?$get['delivery']:'0';		
			
		$width = isset($get['width'])?$get['width']:'0';		

		$aspect = isset($get['aspect'])?$get['aspect']:'0';

		$load = isset($get['load'])?$get['load']:'0';

        $width_s = isset($get['width_s'])?$get['width_s']:'0';        

        $aspect_s = isset($get['aspect_s'])?$get['aspect_s']:'0';

        $rim_s = isset($get['rim_s'])?$get['rim_s']:'0';


        $swidth = isset($get['swidth'])?$get['swidth']:'0';        

        $saspect = isset($get['saspect'])?$get['saspect']:'0';

        $srim = isset($get['srim'])?$get['srim']:'0'; 



		$speed = isset($get['speed'])?$get['speed']:'0';				

		$rim = isset($get['rim'])?$get['rim']:'0';		

		$brand = isset($get['brand'])?$get['brand']:'0';				

	    $pattern = isset($get['pattern'])?$get['pattern']:'0';		

		$tra_code = isset($get['tra_code'])?$get['tra_code']:'0';		

		$attributes = isset($get['attributes'])?$get['attributes']:'0';

        $truck = isset($get['truck'])?$get['truck']:'0';		

/*        dd($truck);*/

		if($aspect=='Profile'){
				$aspect = NULL;
		}

		if($rim=='0'){
				$rim = NULL;
		}

        if($width=='0' || $width==''){
            $width = $width_s;
        }

        if($aspect=='0' || $aspect=='' || $aspect==NULL){
            $aspect = $aspect_s;
        }

        if($rim=='0' || $rim=='' || $rim==NULL){
            $rim = $rim_s;
        }


         if($width=='0' || $width==''){
            $width = $swidth;
        }

        if($aspect=='0' || $aspect=='' || $aspect==NULL){
            $aspect = $saspect;
        }

        if($rim=='0' || $rim=='' || $rim==NULL){
            $rim = $srim;
        }

        //dd($truck);
		if($brand!='0'){
			return redirect()->route('search',['width'=>$width,'aspect'=>$aspect,'rim'=>$rim,'load'=>$load,'speed'=>$speed,'delivery'=>$delivery,'sortby'=>$sortby,'runflat'=>$runflat,'brands'=>$brand,'pattern'=>$pattern,'sel_categories'=>$categories,'pricefrom'=>$pricefrom,'priceto'=>$priceto,'promotion'=>$promotion,'otr'=>$otr,'make'=>$smake,'model'=>$smodel,'series'=>$seriess,'year'=>$syear,'truck'=>$truck]);
		}


		if($width!='0'){
			return redirect()->route('search',['width'=>$width,'aspect'=>$aspect,'rim'=>$rim,'load'=>$load,'speed'=>$speed,'delivery'=>$delivery,'sortby'=>$sortby,'runflat'=>$runflat,'sel_categories'=>$categories,'pricefrom'=>$pricefrom,'priceto'=>$priceto,'promotion'=>$promotion,'otr'=>$otr,'make'=>$smake,'model'=>$smodel,'series'=>$seriess,'year'=>$syear,'truck'=>$truck]);
		}

		$cate = explode(',',$categories);

		$brd = explode(',',$brands);		

		$page_title = 'Tyre By Vehicles Make';

        $allvehicle = Vehicles::get();        

        $vehicle = Vehicles::where('id',$smake)->first();

        $models = VehiclesModels::where('id',$smodel)->where('year',$syear)->first();

        $allmodels = VehiclesModels::where('vehicle_id',$vehicle->id)->get();        
        
        $series = VehiclesSeries::where('vehicle_id',$smake)->where('model_id',$smodel)->get();

        $tyres = Tyres::where('vehicle_id',$vehicle->id)->where('year',$syear);

        if(!empty($models)){
        	$tyres = $tyres->where('make_id',$models->id);
        }

        if(!empty($seriess)){
        	$tyres = $tyres->where('series_id',$seriess);
        }

        if($categories==0){
        	$tyres = $tyres;
        }else{
			$tyres = $tyres->whereIn('attributes',$cate);
        }

        if($brands==0){
        	$tyres = $tyres;
        }else{
			$tyres = $tyres->whereIn('brand_id',$brd);
        }

        if($pricefrom > 0){
        	$tyres = $tyres->whereBetween('price', [$pricefrom, $priceto]);
        }else{
			$tyres = $tyres;
        }        

        if($runflat != '0'){
		
			$tyres = $tyres->where('run_flat','1');

        }else{
			$tyres = $tyres;
        }

        if($truck != '0'){
        
            $tyres = $tyres->where('truck','1');

        }else{
            $tyres = $tyres;
        }


		if($width!='0'){
		
			$tyres = $tyres->where('width',$width);

        }else{
			$tyres = $tyres;
        } 


		if($aspect!='0'){
		
			$tyres = $tyres->where('profile',$aspect);

        }else{
			$tyres = $tyres;
        } 



		if($tra_code!='0'){
		
			$tyres = $tyres->where('tra_code',$tra_code);

        }else{
			$tyres = $tyres;
        } 

        if($promotion!='0'){
        
            $tyres = $tyres->where('on_sale',1);

        }else{
            $tyres = $tyres;
        }        

            if($otr!='0'){
        
            $tyres = $tyres->where('otr',1);

        }else{
            $tyres = $tyres;
        }        



        if($sortby!='0'){


        	if($sortby=='pricehighlow'){
        		$tyres = $tyres->orderBy('price','desc');
        	}elseif($sortby=='pricelowhigh'){
        		$tyres = $tyres->orderBy('price','asc');        		
        	}elseif($sortby=='brandatoz'){
        		$tyres = $tyres->orderBy('brand_id','asc');        		
        	}elseif($sortby=='brandztoa'){
				$tyres = $tyres->orderBy('brand_id','desc'); 
        	}elseif($sortby=='runflat'){
				$tyres = $tyres->where('run_flat','1'); 
        	}


        }

        if($delivery!='0'){
        	$reg_id = Regions::where('nick',$delivery)->first();
        	$tyres = $tyres->where('fitment_in',$reg_id->id)->orWhere('fitment_in','all');
        }

        if($attributes!='0'){
        	$att = TyreAttributes::where('name',$attributes)->first();
			$tyres = $tyres->where('attributes',$att->id);

        }

        $total = $tyres->count();

        if(sizeof($tyres) > 0){
                $tyres = $tyres->paginate(12);        	
            }else{

            	        $tyres = collect();
            }        


        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();   

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();        


         $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','seriess','smodel','syear','smake','speed_index','load_index','brands','tyreattributes','cate','pricefrom','priceto','runflat','brd','sortby','delivery','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','request'));



	}



	public function brand_search(){

		$get = $_REQUEST;

/*		dd($get);		*/
	

		$syear = isset($get['year'])?$get['year']:date('Y');

		$smodel = isset($get['model'])?$get['model']:'0';

		$smake = isset($get['make'])?$get['make']:'0';

		$seriess = isset($get['series'])?$get['series']:'0';

		$categories = isset($get['categories'])?$get['categories']:'0';

		$brands = isset($get['brands'])?$get['brands']:'0';		

		$pricefrom = isset($get['pricefrom'])?$get['pricefrom']:'0';

		$priceto = isset($get['priceto'])?$get['priceto']:'0';	

		$runflat = isset($get['runflat'])?$get['runflat']:'0';	

		$sortby = isset($get['sortby'])?$get['sortby']:'0';		

		$delivery = isset($get['delivery'])?$get['delivery']:'0';		
			
		$width = isset($get['width'])?$get['width']:'0';		

		$aspect = isset($get['aspect'])?$get['aspect']:'0';

		$load = isset($get['load'])?$get['load']:'0';		

		$speed = isset($get['speed'])?$get['speed']:'0';				

		$rim = isset($get['rim'])?$get['rim']:'0';		

		$brand = isset($get['brand'])?$get['brand']:'0';				

	    $pattern = isset($get['pattern'])?$get['pattern']:'0';		

		$tra_code = isset($get['tra_code'])?$get['tra_code']:'0';		

		$attributes = isset($get['attributes'])?$get['attributes']:'0';		


		if($aspect=='Profile'){
				$aspect = NULL;
		}


		if($rim=='0'){
				$rim = NULL;
		}
/*
		if($brand!='0'){
			return redirect()->route('search',['width'=>$width,'aspect'=>$aspect,'rim'=>$rim,'load'=>$load,'speed'=>$speed,'delivery'=>$delivery,'sortby'=>$sortby,'runflat'=>$runflat,'brands'=>$brand,'pattern'=>$pattern]);
		}*/

		$brnd = $brands;
		$ptrn = $pattern;
		if($brands!='0'){
			$brand = TyresBrands::where('url',$brands)->first();
			$tyres = Tyres::where('brand_id',$brand->id);
        }

        if($pattern!='0'){
			$ptr = TyresBrandsPatterns::where('url',$pattern)->first();
			$tyres = Tyres::where('pattern_id',$ptr->id);
        }


		if($width!='0'){
			return redirect()->route('search',['width'=>$width,'aspect'=>$aspect,'rim'=>$rim,'load'=>$load,'speed'=>$speed,'delivery'=>$delivery,'sortby'=>$sortby,'runflat'=>$runflat]);
		}

		$cate = explode(',',$categories);

		$brd = explode(',',$brands);		

		$page_title = 'Tyre By Vehicles Make';

        $allvehicle = Vehicles::get();        

        if($smake!='0'){
	        $vehicle = Vehicles::where('id',$smake)->first();

	        $models = VehiclesModels::where('id',$smodel)->where('year',$syear)->first();

	               
	        
	        $series = VehiclesSeries::where('vehicle_id',$smake)->where('model_id',$smodel)->get();        	

			$tyres = Tyres::where('vehicle_id',$vehicle->id)->where('year',$syear);
        }


        
	 	$allmodels = VehiclesModels::get();
        
	 	$series = VehiclesSeries::get();  

        if(!empty($models)){
        	$tyres = $tyres->where('make_id',$models->id);
        }

        if(!empty($seriess)){
        	$tyres = $tyres->where('series_id',$seriess);
        }

        if($categories==0){
        	$tyres = $tyres;
        }else{
			$tyres = $tyres->whereIn('attributes',$cate);
        }

        

        if($pricefrom > 0){
        	$tyres = $tyres->whereBetween('price', [$pricefrom, $priceto]);
        }else{
			$tyres = $tyres;
        }        

        if($runflat){
		
			$tyres = $tyres->where('run_flat','1');

        }else{
			$tyres = $tyres;
        }


		if($width!='0'){
		
			$tyres = $tyres->where('width',$width);

        }else{
			$tyres = $tyres;
        } 


		if($aspect!='0'){
		
			$tyres = $tyres->where('profile',$aspect);

        }else{
			$tyres = $tyres;
        } 



		if($tra_code!='0'){
		
			$tyres = $tyres->where('tra_code',$tra_code);

        }else{
			$tyres = $tyres;
        }        


        if($sortby!='0'){


        	if($sortby=='pricehighlow'){
        		$tyres = $tyres->orderBy('price','desc');
        	}elseif($sortby=='pricelowhigh'){
        		$tyres = $tyres->orderBy('price','asc');        		
        	}elseif($sortby=='brandatoz'){
        		$tyres = $tyres->orderBy('brand_id','asc');        		
        	}elseif($sortby=='brandztoa'){
				$tyres = $tyres->orderBy('brand_id','desc'); 
        	}elseif($sortby=='runflat'){
				$tyres = $tyres->where('run_flat','1'); 
        	}


        }

        if($delivery!='0'){
        	$reg_id = Regions::where('nick',$delivery)->first();
        	$tyres = $tyres->where('fitment_in',$reg_id->id);
        }

        if($attributes!='0'){
        	$att = TyreAttributes::where('name',$attributes)->first();
			$tyres = $tyres->where('attributes',$att->id);

        }



	if($tyres->count()){
        $tyres = $tyres->paginate(12);        	
		  
    }else{

    	$tyres = collect();
    }        


        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();   

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();        

        $patterns = TyresBrandsPatterns::where('brand_id',$brand->id)->get();

        $rn = 1;

        $runbrands = [];


        $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];


		return view('home.brand_search',compact('page_title','allvehicle','allmodels','series','tyres','seriess','smodel','syear','smake','speed_index','load_index','brands','tyreattributes','cate','pricefrom','priceto','runflat','brd','sortby','delivery','rn','runbrands','brnd','ptrn','patterns','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));



	}


	public function get_model_details(Request $r){

		$allvehicle = Vehicles::get();        
		return $allvehicle;
	}

	public function get_vehicle_model_details(Request $r){

		$models = VehiclesModels::where('vehicle_id',$r->val)->get();        
		return $models;
	}

	public function get_vehicle_model_series(Request $r){

		$series = VehiclesSeries::where('model_id',$r->val)->get();        
		return $series;
	}






	public function by_otr(){
		$page_title = 'Tyre By OTR';
        
        $tyres_cat = TyresCategories::with('otr_tyres')->get();

		$speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();

         $brands = TyresBrands::all();   
        
        $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];


		return view('home.tyre_by_otr',compact('page_title','speed_index','load_index','brands','tyres_cat','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));
	}
	

	public function offers_current_promotions(){


		$page_title = 'Promotions';
        
        $promotions = Promotions::where('active','1')->get();
         	      
		return view('home.promotions',compact('page_title','promotions'));


	}

	public function tyre_roadside_assist(){

		$page_title = 'Tyre Roadside Assist';
        
         	      
		return view('home.tyre_roadside_assist',compact('page_title'));

	}

	public function offers_mobile_fitment(){

		$page_title = 'Offers Mobile Fitment';
        
         	      
		return view('home.offers_mobile_fitment',compact('page_title'));

	}

	public function find_fitment_centres(){

		$page_title = 'Fitment Centres';
		$vehicles = Vehicles::all();
		return view('home.find_fitment_centres',compact('page_title','vehicles'));

	}



	public function customer_service_zipmoney(){
	
		$page_title = 'Zip Money';
        
         	      
		return view('home.zip_payment',compact('page_title'));

	}

	public function price_match_guarantee(){
	
		$page_title = 'Price Match Guarantee';
        
         	      
		return view('home.price_match_guarantee',compact('page_title'));

	}

	public function day_offers(){
	
		$page_title = 'Same Day Next Day Delivery';
        
         	      
		return view('home.day_offers',compact('page_title'));

	}

	public function admin_tyres(){
	   $page_title = 'Admin-Tyres';
       $tyres=Tyres::with('tyre_category','tyre_brands')->paginate(25);        
       return view('admin.tyres',compact('page_title','tyres'));
	}

	public function admin_add_tyres(){

	   $page_title = 'Admin-Add-Tyres';
	   $brands = TyresBrands::all();
	   $categories = TyresCategories::all();
	   $fun_type ='add';
	   $patterns = TyresBrandsPatterns::all(); 
	   $attributes = TyreAttributes::all();
	   $sizes = TyreSize::all();	   
	   $regions = Regions::all();
	   $series = VehiclesSeries::all();	   
	   $tyre = NULL;
	   $vehicles = Vehicles::all();
	   $model = VehiclesModels::get();	   
	   $positions = ['Drive','Steer','Trailer','All Positions'];

       return view('admin.add_tyres',compact('page_title','regions','brands','categories','fun_type','tyre','patterns','attributes','series','vehicles','sizes','model','positions'));

	}



	public function admin_tyres_edit($id){

	   $page_title = 'Admin-Edit-Tyre';
	   $brands = TyresBrands::all();
	   $tyre = Tyres::where('id',$id)->first();
	   $categories = TyresCategories::all();
	   $fun_type ='edit';
	   $patterns = TyresBrandsPatterns::where('brand_id',$tyre->brand_id)->get(); 
	   $attributes = TyreAttributes::all();
	   $sizes = TyreSize::all();	   
	   $regions = Regions::all();
	   $model = VehiclesModels::where('vehicle_id',$tyre->vehicle_id)->get();
	   $series = VehiclesSeries::where('model_id',$tyre->make_id)->get();	   
	   $vehicles = Vehicles::all();
	   $positions = ['Drive','Steer','Trailer','All Positions'];

       return view('admin.add_tyres',compact('page_title','brands','regions','categories','fun_type','tyre','patterns','attributes','series','vehicles','sizes','model','positions'));

	}

	public function tyre_details($slug,Request $request)
	{	

            $url1 = $request->fullUrl();

            $exp = explode('?page', $url1);

            $url = $exp[0];

            $s_width = isset($_GET['width'])?$_GET['width']:NULL;
            $s_aspect = isset($_GET['aspect'])?$_GET['aspect']:NULL;
            $s_rim = isset($_GET['rim'])?$_GET['rim']:NULL;
            $s_region = isset($_GET['delivery'])?$_GET['delivery']:NULL;
            $s_brand = isset($_GET['brands'])?$_GET['brands']:NULL;
            $s_pattern = isset($_GET['pattern'])?$_GET['pattern']:NULL;
            $s_categories = isset($_GET['categories'])?$_GET['categories']:NULL;
            $s_designedfor = isset($_GET['designedfor'])?$_GET['designedfor']:NULL;
            $s_load = isset($_GET['load'])?$_GET['load']:NULL;
            $s_speed = isset($_GET['speed'])?$_GET['speed']:NULL;
            $designedfor = isset($_GET['designedfor'])?$_GET['designedfor']:NULL;            
            $runflat = isset($_GET['runflat'])?$_GET['runflat']:'0';  
            $sortby = isset($_GET['sortby'])?$_GET['sortby']:'0';   
            $brands = TyresBrands::all();
            $patterns  = TyresBrandsPatterns::all();    
            $attributes = TyreAttributes::all();


        $page=1; 
        $total = Tyres::where('url',$slug)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->count(); 

        if(isset($_GET['page'])){

            $pg = 12 * $_GET['page'];  

            $tyres = Tyres::where('url',$slug)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->limit($pg);

            $ceo = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('ceo_choice','1')->where('url',$slug)->limit(3)->orderBy('id','desc');

            $recommend = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('url',$slug)->where('recommend','1')->limit(3)->orderBy('id','desc');  

            $page = $_GET['page']+1;
            }else{
                $tyres = Tyres::where('url',$slug)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->limit(12);

                $ceo = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('ceo_choice','1')->where('url',$slug)->limit(3)->orderBy('id','desc');

                $recommend = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('url',$slug)->where('recommend','1')->limit(3)->orderBy('id','desc');  

                 $page = 2;
            }   


            
            // if(!empty($s_width) && $s_width!='0'){
            // $tyres = Tyres::where('profile',$s_aspect)->where('width',$s_width)->where('rim_size',$s_rim)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts');

            //     $ceo = Tyres::where('profile',$s_aspect)->where('width',$s_width)->where('rim_size',$s_rim)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->where('ceo_choice','1')->limit(3)->orderBy('id','desc');

            //     $recommend = Tyres::where('profile',$s_aspect)->where('width',$s_width)->where('rim_size',$s_rim)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->where('recommend','1')->limit(3)->orderBy('id','desc');                
            // }else{

            //     $size = $slug;
            //     $tyres = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('url',$slug);  
            
            //     $ceo = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('ceo_choice','1')->where('url',$slug)->limit(3)->orderBy('id','desc');

            //     $recommend = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('url',$slug)->where('recommend','1')->limit(3)->orderBy('id','desc');  
            // }


            if(!empty($s_region) && $s_region!='0'){
                $reg_id = Regions::where('nick',$s_region)->first();
                $tyres = $tyres->where('fitment_in',$reg_id->id);
                $ceo = $ceo->where('fitment_in',$reg_id->id);
                $recommend = $recommend->where('fitment_in',$reg_id->id);                
            } 

            if(!empty($s_brand) && $s_brand!='0'){
                $br_id = TyresBrands::where('url',$s_brand)->first();
                $tyres = $tyres->where('brand_id',$br_id->id);
                $ceo = $ceo->where('brand_id',$br_id->id);
                $recommend = $recommend->where('brand_id',$br_id->id);
            }

            if(!empty($s_pattern) && $s_pattern!='0'){
                $pt_id = TyresBrandsPatterns::where('url',$s_pattern)->first();
                $tyres = $tyres->where('brand_id',$pt_id->id);
                $ceo = $ceo->where('brand_id',$pt_id->id);
                $recommend = $recommend->where('brand_id',$pt_id->id);
            }

            if(!empty($s_categories) && $s_categories!='0'){
                $ct_id = TyreAttributes::where('url',$s_categories)->first();
                $tyres = $tyres->where('brand_id',$ct_id->id);
                $ceo = $ceo->where('brand_id',$ct_id->id);
                $recommend = $recommend->where('brand_id',$ct_id->id);                
            }

            if(!empty($s_load) && $s_load!='0'){
                $tyres = $tyres->where('load_index',$s_load);
                $ceo = $ceo->where('load_index',$s_load);
                 $recommend = $recommend->where('load_index',$s_load);
            }

            if(!empty($s_speed) && $s_speed!='0'){
                $tyres = $tyres->where('speed_index',$s_speed);
                $ceo = $ceo->where('speed_index',$s_speed);
                $recommend = $recommend->where('speed_index',$s_speed);                
            }

            if(!empty($designedfor) && $designedfor!='0'){
                $veh = Vehicles::where('url',$designedfor)->select('id')->first();
                $tyres = $tyres->where('vehicle_id',$veh->id);
                $ceo = $ceo->where('vehicle_id',$veh->id);  
                $recommend = $recommend->where('vehicle_id',$veh->id);                
            }   


                if($sortby!='0'){
                if($sortby=='pricehighlow'){
                     $tyres = $tyres->orderBy('price','desc');
                     $ceo = $ceo->orderBy('price','desc');
                     $recommend = $recommend->orderBy('price','desc');
                  }elseif($sortby=='pricelowhigh'){
                        $tyres = $tyres->orderBy('price','asc');
                        $ceo = $ceo->orderBy('price','asc');
                        $recommend = $recommend->orderBy('price','asc');            
                  }elseif($sortby=='brandatoz'){

                         
                         $tyres = $tyres->orderBy('brand_id','asc'); 
                         $ceo = $ceo->orderBy('brand_id','asc');
                         $recommend = $recommend->orderBy('brand_id','asc');          
                  
                  }elseif($sortby=='brandztoa'){
                  
                        $tyres = $tyres->orderBy('brand_id','desc');
                        $ceo = $ceo->orderBy('brand_id','desc');
                         $recommend = $recommend->orderBy('brand_id','desc'); 
                  

                  }elseif($sortby=='runflat'){
                            $tyres = $tyres->where('run_flat','1'); 
                            $ceo = $ceo->where('run_flat','1'); 
                            $recommend = $recommend->where('run_flat','1');                 
                  }


                }


                  if($runflat!='0'){
                
                  $tyres = $tyres->where('run_flat','1');
                  $ceo = $ceo->where('run_flat','1');
                  $recommend = $recommend->where('run_flat','1');
                    }

        //$page=1; 
        // $total = $tyres->count();        
/*        if(isset($_GET['page'])){

            $pg = 12 * $_GET['page'];  

            $tyres = Tyres::where('url',$slug)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->limit($pg)->get();

            $page = $_GET['page']+1;
            }else{
                $tyres = Tyres::where('url',$slug)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->limit(12)->get();
                 $page = 2;
            }  */ 


            $arr = $_GET;
            $param = [];
            foreach ($arr as $key => $value) {
                array_push($param, $key);
            }


            $chk = count($_GET);
            if($chk==1){
                if($param[0]!='page'){
                    $url = $url.'&page='.$page;
                }else{
                    $url = $url.'?page='.$page; 
                }
            }elseif($chk==0){
                $url = $url.'?page='.$page;
            }else{
                               $url = $url.'&page='.$page; 
            }

/*            dd($tyres);*/
            $tyres = $tyres->get(); 

            $ceo = $ceo->where('id','-1')->get();
            $recommend = $recommend->where('id','-1')->get();
            $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();       
            $load_index = Tyres::select('load_index')->groupBy('load_index')->get();                   
            $makes = Vehicles::all();  
            //dd($page);
            return view('home.search',compact('s_width','s_aspect','s_rim','tyres','brands','patterns','attributes','speed_index','load_index','s_region','s_brand','s_pattern','s_categories','s_designedfor','s_load','s_speed','makes','ceo','recommend','page','url','total','request','sortby'));

/*		$page_title = 'Tyre '.$name;
		return view('home.view_tyre',compact('page_title','tyre','page_title'));		*/
	}


	public function admin_tyres_save(Request $r){


		$brand_id = TyresBrands::where('url',$r->brands)->first();

		$newt = new Tyres();
		$newt->name = $r->name;
		$newt->truck = $r->truck;
		$newt->otr = $r->otr;
		$newt->pattern_id = $r->pattern;
		$newt->width = $r->width;
		$newt->profile = $r->profile;
		$newt->rim_size = $r->rim_size;
		$newt->load_index = $r->load_index;
		$newt->speed_index = $r->speed_index;
		$newt->price = $r->price;
		$newt->attributes = $r->tyreattributes;
		$newt->fitment_in = $r->fitment_in;
		$newt->tyre_category_id = $r->tyre_category_id;
		$newt->quantity = $r->quantity;
		$newt->min_quantity = $r->min_quantity;
		$newt->stock_available = $r->quantity;
		$newt->max_order_quantity = $r->max_order_quantity;
		$newt->year = $r->year;
		$newt->vehicle_id = $r->vehicle;
		$newt->make_id = $r->make;
		$newt->brand_id = $brand_id->id;
		$newt->pattern_id = $r->pattern;
		$newt->description = $r->description;
		$newt->features = $r->features;
		$newt->video = $r->video;
		$newt->stock_low_quantity_notify_to_user = $r->stock_low_quantity_notify_to_user;
		$newt->run_flat = $r->run_flat;
		$newt->suv_tyre = $r->suv_tyre;
		$newt->fuel_efficient_tyre = $r->fuel_efficient_tyre;
		$newt->on_sale = $r->on_sale;
		$newt->recommend = $r->recommend;
		$newt->our_pick = $r->our_pick;
		$newt->ceo_choice = $r->ceo_choice;
		$newt->recommend_type = $r->recommend_type;
		$newt->tyre_size = $r->tyre_size;
		$newt->series_id = $r->series;
		$newt->fit_tomorrow = $r->fit_tomorrow;
		$newt->eco_freindly = $r->eco_freindly;		
		$newt->position = $r->position;
		$newt->tra_code = $r->tra_code;		
		$newt->benefits = $r->benefits;

		$url = str_replace(' ','-',$r->name);
		$url = str_replace('/','-',$url);		
		$newt->url = strtolower($url);
        
						if ($r->hasFile('image')) 
				            {

				            $destinationPath = public_path()."/images/tyres/";
				            $extension =  $r->file('image')->getClientOriginalExtension();
				            $fileName = time();
				            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
				            if(!$r->file('image')->move($destinationPath,$fileName))
				            {
				                throw new \Exception("Failed Upload");                    
				            }

				            $picture = asset("/public/images/tyres/")."/".$fileName;
				            $newt->image = $picture;

				        }

		$newt->save();	
		  

        if($r->on_sale=='1'){
            $newd = new TyresDiscounts();
            $newd->tyre_id = $newt->id;
            $newd->discount_name = 'Discount';
            $newd->discount_percent = $r->sale_percentage;
            $newd->active = 1;
            $newd->save();
            $newt->sale_percentage = $r->sale_percentage;
            $newt->save();
        }


		alert()->success('Saved...!!!');
		return redirect()->back();		        

	}


	public function tyres_delete($id){

		$delete = Tyres::where('id',$id)->delete();
		alert()->success('Deleted...!!!');
		return redirect()->back();		        		


	}

	public function by_truck(){


		$page_title = 'Tyre By Truck';
        
        $tyres_cat = TyresCategories::with('truck_tyres')->get();

		$speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();

        $brands = TyresBrands::all();   


        $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_truck',compact('page_title','tyres_cat','speed_index','load_index','brands','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));


	}	



	public function by_truck_size($slug,Request $request){

		$page_title = 'Tyre By Truck Size';

        $total = Tyres::where('url',$slug)->where('truck','1')->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();

		$tyres = Tyres::where('url',$slug)->where('truck','1')->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->paginate(12);

		$allvehicle = Vehicles::get();
		if(isset($tyres[0]->vehicle_id)){
        $vehicle = Vehicles::where('id',$tyres[0]->vehicle_id)->first();
                    $models = VehiclesModels::where('id',$tyres[0]->make_id)->first();

        }else
        {
                    $vehicle = Vehicles::where('id',$allvehicle[0]->id)->first();
                    $models = VehiclesModels::where('vehicle_id',$vehicle->id)->first();

        }

		if(!empty($vehicle)){
	               

					$series = VehiclesSeries::where('vehicle_id',$vehicle->id)->where('model_id',$models->id)->get();
			        $allmodels = VehiclesModels::where('vehicle_id',$vehicle->id)->get();                
		}else{

					$models = NULL;

					$series = [];

			        $allmodels = VehiclesModels::where('vehicle_id',$allvehicle[0]->id)->get();   

		}


               

        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $rn = 0;

 		$data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];




		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','request'));
	}


	public function by_otr_size($slug,Request $request){

		$page_title = 'Tyre By OTR Size';

        $total = Tyres::where('url',$slug)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->where('otr','1')->count();

		$tyres = Tyres::where('url',$slug)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->where('otr','1')->paginate(12);

/*		$size = TyreSize::where('url')*/
		$vehicle = Vehicles::where('id',$tyres[0][0]->vehicle_id)->first();

        $models = VehiclesModels::where('id',$tyres[0][0]->make_id)->first();
        if(!empty($vehicle)){


        $allmodels = VehiclesModels::where('vehicle_id',$vehicle->id)->get();                
        $series = VehiclesSeries::where('vehicle_id',$vehicle->id)->where('model_id',$models->id)->get();

        }else{


        $allmodels = VehiclesModels::all();                
        $series = VehiclesSeries::all();

        }



        $allvehicle = Vehicles::get();        



        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $rn = 0;


                       $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];


        $otr = 1;

		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','otr','total','request'));
	}

	


	public function run_flat_tyre_view($url,Request $request){

        $total = Tyres::where('url',$url)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();

		$tyres = Tyres::where('url',$url)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->paginate(12);

		$page_title = $tyres[0]->name.' Tyre By Run Flat';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
		$series = VehiclesSeries::get();        	

        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();


        $rn = 0;

         $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];


		

		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','request'));


	}


	public function suv_tyre_view($url,Request $request){

		$total = Tyres::where('url',$url)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();

        $tyres = Tyres::where('url',$url)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->paginate(12);

		$page_title = $tyres[0]->name.' Tyre By Run Flat';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
		$series = VehiclesSeries::get();        	

        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $rn = 0;

         $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','request'));

	}

	public function fuelefficient(Request $request){


		$rn = isset($_GET['rn'])?$_GET['rn']:'0';                        

		$runflat = isset($get['runflat'])?$get['runflat']:'0';  		

		$tyres = Tyres::where('fuel_efficient_tyre',1)->where('make_id','-1')->where('series_id','-1')->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->get();

		$page_title = 'Tyre By Fuel Efficient Tyres';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $vehicle = NULL;

        $runbrands = TyresBrands::with('fuel_tyres')->get();

        $rn = 1;

        $series = [];


                $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		

		return view('home.tyre_by_fuel_effiecient',compact('page_title','vehicle','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','runflat','rn','runbrands','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));		
	}

	public function fuelefficient_view_tyre($url,Request $request){

        $total = Tyres::where('url',$url)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->count();

		$tyres = Tyres::where('url',$url)->with('tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->paginate(12);

		$page_title = $tyres[0]->name.' Tyre By Fuel Efficient';

        $allvehicle = Vehicles::get();        

        $allmodels = VehiclesModels::get();        
        
		$series = VehiclesSeries::get();        	

        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();        

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();

        $rn = 0;

         $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','speed_index','load_index','brands','tyreattributes','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','request'));

	}


	public function admin_tyres_update(Request $r){

		$brand_id = TyresBrands::where('url',$r->brands)->first();

		$newt = Tyres::where('id',$r->id)->first();
		$newt->name = $r->name;
		$newt->truck = $r->truck;
		$newt->otr = $r->otr;
		$newt->pattern_id = $r->pattern;
		$newt->width = $r->width;
		$newt->profile = $r->profile;
		$newt->rim_size = $r->rim_size;
		$newt->load_index = $r->load_index;
		$newt->speed_index = $r->speed_index;
		$newt->price = $r->price;
		$newt->attributes = $r->tyreattributes;
		$newt->fitment_in = $r->fitment_in;
		$newt->tyre_category_id = $r->tyre_category_id;
		$newt->quantity = $r->quantity;
		$newt->min_quantity = $r->min_quantity;
		$newt->stock_available = $r->quantity;
		$newt->max_order_quantity = $r->max_order_quantity;
		$newt->year = $r->year;
		$newt->vehicle_id = $r->vehicle;
		$newt->make_id = $r->make;
		$newt->series_id = $r->series;
		$newt->brand_id = $brand_id->id;
		$newt->description = $r->description;
		$newt->features = $r->features;
		$newt->video = $r->video;
		$newt->stock_low_quantity_notify_to_user = $r->stock_low_quantity_notify_to_user;
		$newt->run_flat = $r->run_flat;
		$newt->suv_tyre = $r->suv_tyre;
		$newt->fuel_efficient_tyre = $r->fuel_efficient_tyre;
		$newt->on_sale = $r->on_sale;
		$newt->recommend = $r->recommend;
		$newt->our_pick = $r->our_pick;
		$newt->ceo_choice = $r->ceo_choice;
		$newt->recommend_type = $r->recommend_type;
		$newt->tyre_size = $r->tyre_size;
		
		$newt->fit_tomorrow = $r->fit_tomorrow;
		$newt->eco_freindly = $r->eco_freindly;		
		$newt->position = $r->position;
		$newt->tra_code = $r->tra_code;		
		$newt->benefits = $r->benefits;		

		$url = str_replace(' ','-',$r->name);
		$url = str_replace('/','-',$url);		
		$newt->url = strtolower($url);
						if ($r->hasFile('image')) 
				            {

				            $destinationPath = public_path()."/images/tyres/";
				            $extension =  $r->file('image')->getClientOriginalExtension();
				            $fileName = time();
				            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
				            if(!$r->file('image')->move($destinationPath,$fileName))
				            {
				                throw new \Exception("Failed Upload");                    
				            }

				            $picture = asset("/public/images/tyres/")."/".$fileName;
				            $newt->image = $picture;

				        }

		$newt->save();	
		
		alert()->success('Saved...!!!');
		return redirect()->back();		        

	


	}


	public function otr_search(Request $request)
	{

		$get = $_REQUEST;

/*		dd($get);		*/
	

		$syear = isset($get['year'])?$get['year']:date('Y');

		$smodel = isset($get['model'])?$get['model']:'0';

		$smake = isset($get['make'])?$get['make']:'0';

		$seriess = isset($get['series'])?$get['series']:'0';

		$categories = isset($get['categories'])?$get['categories']:'0';

		$brands = isset($get['brands'])?$get['brands']:'0';		

		$pricefrom = isset($get['pricefrom'])?$get['pricefrom']:'0';

		$priceto = isset($get['priceto'])?$get['priceto']:'0';	

		$runflat = isset($get['runflat'])?$get['runflat']:'0';	

		$sortby = isset($get['sortby'])?$get['sortby']:'0';		

		$delivery = isset($get['delivery'])?$get['delivery']:'0';		
			
		$width = isset($get['width'])?$get['width']:'0';		

		$aspect = isset($get['aspect'])?$get['aspect']:'0';

		$load = isset($get['load'])?$get['load']:'0';		

		$speed = isset($get['speed'])?$get['speed']:'0';				

		$rim = isset($get['rim'])?$get['rim']:'0';		

		$brand = isset($get['brand'])?$get['brand']:'0';				

		$pattern = isset($get['pattern'])?$get['pattern']:'0';		

		$tra_code = isset($get['tra_code'])?$get['tra_code']:'0';		

		$attributes = isset($get['attributes'])?$get['attributes']:'0';		


		if($aspect=='Profile'){
				$aspect = NULL;
		}


		if($rim=='0'){
				$rim = NULL;
		}
/*
		if($brand!='0'){
			return redirect()->route('search',['width'=>$width,'aspect'=>$aspect,'rim'=>$rim,'load'=>$load,'speed'=>$speed,'delivery'=>$delivery,'sortby'=>$sortby,'runflat'=>$runflat,'brands'=>$brand,'pattern'=>$pattern]);
		}


		if($width!='0'){
			return redirect()->route('search',['width'=>$width,'aspect'=>$aspect,'rim'=>$rim,'load'=>$load,'speed'=>$speed,'delivery'=>$delivery,'sortby'=>$sortby,'runflat'=>$runflat]);
		}*/

		$cate = explode(',',$categories);

		$brd = explode(',',$brands);		

		$page_title = 'Tyre By Otr';

        $allvehicle = Vehicles::get();        

        $vehicle = Vehicles::where('id',$smake)->first();

        $models = VehiclesModels::where('id',$smodel)->where('year',$syear)->first();

        $allmodels = VehiclesModels::get();        
        
        $series = VehiclesSeries::where('vehicle_id',$smake)->where('model_id',$smodel)->get();

        $tyres = Tyres::where('otr','1');

        if(!empty($models)){
        	$tyres = $tyres->where('make_id',$models->id);
        }	

        if(!empty($seriess)){
        	$tyres = $tyres->where('series_id',$seriess);
        }

        if($categories==0){
        	$tyres = $tyres;
        }else{
			$tyres = $tyres->whereIn('attributes',$cate);
        }



        if($brands==0){
        	$tyres = $tyres;
        }else{
			$tyres = $tyres->whereIn('brand_id',$brd);
        }



        if($pricefrom > 0){
        	$tyres = $tyres->whereBetween('price', [$pricefrom, $priceto]);
        }else{
			$tyres = $tyres;
        }        

        if($runflat){
		
			$tyres = $tyres->where('run_flat','1');

        }else{
			$tyres = $tyres;
        }


		if($width!='0'){
		
			$tyres = $tyres->where('width',$width);

        }else{
			$tyres = $tyres;
        } 


		if($aspect!='0'){
		
			$tyres = $tyres->where('profile',$aspect);

        }else{
			$tyres = $tyres;
        } 


		if($tra_code!='NULL' && $tra_code!='0' && $tra_code!=''){

			$tyres = $tyres->where('tra_code',$tra_code);

        }else{
			$tyres = $tyres;
        }        

        if($sortby!='0'){


        	if($sortby=='pricehighlow'){
        		$tyres = $tyres->orderBy('price','desc');
        	}elseif($sortby=='pricelowhigh'){
        		$tyres = $tyres->orderBy('price','asc');        		
        	}elseif($sortby=='brandatoz'){
        		$tyres = $tyres->orderBy('brand_id','asc');        		
        	}elseif($sortby=='brandztoa'){
				$tyres = $tyres->orderBy('brand_id','desc'); 
        	}elseif($sortby=='runflat'){
				$tyres = $tyres->where('run_flat','1'); 
        	}


        }


        if($delivery!='0'){
        	$reg_id = Regions::where('nick',$delivery)->first();
        	$tyres = $tyres->where('fitment_in',$reg_id->id);
        }
       
        if($attributes!='0' && $attributes!=''){
        	$att = TyreAttributes::where('name',$attributes)->first();
			$tyres = $tyres->where('attributes',$att->id);

        }

        $total = $tyres->count();

        if($tyres->count() > 0){

        $tyres = $tyres->paginate(12);        	
    }else{

    	        $tyres = collect();
    }


        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();   

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();        

        $rn = 0;

         $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		
        $otr = 1;  

		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','seriess','smodel','syear','smake','speed_index','load_index','brands','tyreattributes','cate','pricefrom','priceto','runflat','brd','sortby','delivery','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','otr','request'));

	}

	public function truck_search(Request $request){


		$get = $_REQUEST;

		$syear = isset($get['year'])?$get['year']:date('Y');

		$smodel = isset($get['model'])?$get['model']:'0';

		$smake = isset($get['make'])?$get['make']:'0';

		$seriess = isset($get['series'])?$get['series']:'0';

		$categories = isset($get['categories'])?$get['categories']:'0';

		$brands = isset($get['brands'])?$get['brands']:'0';		

		$pricefrom = isset($get['pricefrom'])?$get['pricefrom']:'0';

		$priceto = isset($get['priceto'])?$get['priceto']:'0';	

		$runflat = isset($get['runflat'])?$get['runflat']:'0';	

		$sortby = isset($get['sortby'])?$get['sortby']:'0';		

		$delivery = isset($get['delivery'])?$get['delivery']:'0';		
			
		$width = isset($get['width'])?$get['width']:'0';		

		$aspect = isset($get['aspect'])?$get['aspect']:'0';

		$load = isset($get['load'])?$get['load']:'0';		

		$speed = isset($get['speed'])?$get['speed']:'0';				

		$rim = isset($get['rim'])?$get['rim']:'0';		

		$brand = isset($get['brand'])?$get['brand']:'0';				

		$pattern = isset($get['pattern'])?$get['pattern']:'0';		

		$tra_code = isset($get['tra_code'])?$get['tra_code']:'0';		

		$attributes = isset($get['attributes'])?$get['attributes']:'0';		

		$position = isset($get['position'])?$get['position']:'0';

		$eco_freindly = isset($get['eco_freindly'])?$get['eco_freindly']:'0';

		if($aspect=='Profile'){
				$aspect = NULL;
		}


		if($rim=='0'){
				$rim = NULL;
		}

		$cate = explode(',',$categories);

		$brd = explode(',',$brands);		

		$page_title = 'Tyre By Truck';

        $allvehicle = Vehicles::get();        

        $vehicle = Vehicles::where('id',$smake)->first();

        $models = VehiclesModels::where('id',$smodel)->where('year',$syear)->first();

        $allmodels = VehiclesModels::get();        
        
        $series = VehiclesSeries::where('vehicle_id',$smake)->where('model_id',$smodel)->get();

        $tyres = Tyres::where('truck','1');

        if(!empty($models)){
        	$tyres = $tyres->where('make_id',$models->id);
        }	

        if(!empty($seriess)){
        	$tyres = $tyres->where('series_id',$seriess);
        }

        if($categories==0){
        	$tyres = $tyres;
        }else{
			$tyres = $tyres->whereIn('attributes',$cate);
        }


        if($brands==0){
        	$tyres = $tyres;
        }else{
			$tyres = $tyres->whereIn('brand_id',$brd);
        }



        if($pricefrom > 0){
        	$tyres = $tyres->whereBetween('price', [$pricefrom, $priceto]);
        }else{
			$tyres = $tyres;
        }        

        if($runflat){
		
			$tyres = $tyres->where('run_flat','1');

        }else{
			$tyres = $tyres;
        }


        if($eco_freindly!='0'){
		
			$tyres = $tyres->where('eco_freindly','1');

        }else{
			$tyres = $tyres;
        }        


		if($width!='0'){
		
			$tyres = $tyres->where('width',$width);

        }else{
			$tyres = $tyres;
        } 


		if($aspect!='0'){
		
			$tyres = $tyres->where('profile',$aspect);

        }else{
			$tyres = $tyres;
        } 


		if($tra_code!='0'){
		
			$tyres = $tyres->where('tra_code',$tra_code);

        }else{
			$tyres = $tyres;
        }        


		if($position!='0' && $position!=''){
		
			$tyres = $tyres->where('position',$position);

        }else{
			$tyres = $tyres;
        }        


        if($sortby!='0'){


        	if($sortby=='pricehighlow'){
        		$tyres = $tyres->orderBy('price','desc');
        	}elseif($sortby=='pricelowhigh'){
        		$tyres = $tyres->orderBy('price','asc');        		
        	}elseif($sortby=='brandatoz'){
        		$tyres = $tyres->orderBy('brand_id','asc');        		
        	}elseif($sortby=='brandztoa'){
				$tyres = $tyres->orderBy('brand_id','desc'); 
        	}elseif($sortby=='runflat'){
				$tyres = $tyres->where('run_flat','1'); 
        	}


        }


        if($delivery!='0'){
        	$reg_id = Regions::where('nick',$delivery)->first();
        	$tyres = $tyres->where('fitment_in',$reg_id->id);
        }


        if($attributes!='0' && $attributes!=''){
        	$att = TyreAttributes::where('name',$attributes)->first();
			$tyres = $tyres->where('attributes',$att->id);

        }

        if($load!='0' && $load!=''){
            $tyres = $tyres->where('load_index',$load);

        }

        if($speed!='0' && $speed!=''){
            $tyres = $tyres->where('speed_index',$load);

        }        


        $total = $tyres->count();

        if($tyres->count() > 0){
            $tyres = $tyres->paginate(12);        	
    }else{

    	        $tyres = collect();
    }


        $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();

        $load_index = Tyres::select('load_index')->groupBy('load_index')->get();   

        $brands = TyresBrands::all();

        $tyreattributes = TyreAttributes::all();        

        $rn = 0;




        $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

		$all_otr_sizes = $data['all_otr_sizes'];

		$truck = 1;

/*
            $url1 = $request->fullUrl();

            $exp = explode('?', $url1);

            $url = $exp[1];
            //dd($exp);

            $arr = $_GET;
            $param = [];
            foreach ($arr as $key => $value) {
                array_push($param, $key);
            }

    $page = $tyres->currentPage()+1;            
        $chk = count($_GET);
            if($chk==1){
                if($param[0]!='page'){
                    $url = $url.'&page_no='.$page;
                }else{
                    $url = $url.'?page_no='.$page; 
                }
            }elseif($chk==0){
                $url = $url.'?page_no='.$page;
            }else{
                               $url = $url.'&page_no='.$page; 
            }  */          

        ///dd($tyres);
            //dd($url);
		return view('home.tyre_by_vehicles_model',compact('page_title','vehicle','models','allvehicle','allmodels','series','tyres','seriess','smodel','syear','smake','speed_index','load_index','brands','tyreattributes','cate','pricefrom','priceto','runflat','brd','sortby','delivery','rn','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes','total','truck','request'));
	}


	public function upload_tyre_file(Request $r){

		 $path = $r->file('file')->getRealPath();
		$data = (new FastExcel)->import($path);

		foreach($data as $d){

			$brand = $d['BrandName'];
			$pattern = $d['PatternName'];
			$tyresize = $d['TyreSize'];
			$attributes = $d['Attributes'];
			$status = $d['Status'];
			$price = $d['Price'];
			$description = $d['Description'];
			$benefits = $d['Benefits'];
			$features = $d['Features'];
			$designed_for = $d['Designed For'];
			$tyre_image_url = $d['Tyre Image Url'];
			

		$check = TyresBrands::where('name',$brand)->first();

	        if(empty($check)){

	                        $newb = new TyresBrands();
	                        $newb->name=$brand;
	                        $url = str_replace('/','-',$brand);
							$url = str_replace(' ','-',$url);
	                        $newb->url = strtolower($url); 
	                        $newb->save();	        	
	        	$brand_id = $newb->id;
	        }else{
	        	$brand_id = $check->id;
	        }

		
		$checkp = TyresBrandsPatterns::where('name',$pattern)->where('brand_id',$brand_id)->first();

	        if(empty($checkp)){

	                        $newp = new TyresBrandsPatterns();
	                        $newp->name=$pattern;
	                        $newp->brand_id = $brand_id;
							$url = str_replace('/','-',$pattern);
							$url = str_replace(' ','-',$url);
	                        $newp->url = strtolower($url); 
	                        $newp->save();	        	
	        	$pattern_id = $newp->id;
	        }else{
	        	$pattern_id = $checkp->id;
	        }



		   $checks = TyreSize::where('name',$tyresize)->first();

	        if(empty($checks)){

	                        $news = new TyreSize();
	                        $news->name=$tyresize;
	                        $news->save();	      

	        	$tyresize_id = $news->id;
	        }else{
	        	$tyresize_id = $checks->id;
	        }


	        $tcat = explode('R', $tyresize);
	        $tcate = explode(' ', $tcat[1]);

	        $tc = $tcate[0];

		   $checkc = TyresCategories::where('number',$tc)->first();

	        if(empty($checkc)){

	                        $newc = new TyresCategories();
	                        $newc->name=$tc.' Inch Tyre';
	                        $newc->number=$tc;
	                        $newc->save();	      

	        	$tyrecat_id = $newc->id;
	        }else{
	        	$tyrecat_id = $checkc->id;
	        }	        

		   $checka = TyreAttributes::where('name',$attributes)->first();

	        if(empty($checka)){

	                        $newa = new TyreAttributes();
	                        $newa->name=$attributes;
	                        $url = str_replace(' ','-',$attributes);
	                        $newa->url = strtolower($url); 
	                        $newa->save();	      

	        	$tyreatt_id = $newa->id;
	        }else{
	        	$tyreatt_id = $checka->id;
	        }


			$status = $d['Status'];
			$price = $d['Price'];
			$description = $d['Description'];
			$benefits = $d['Benefits'];
			$features = $d['Features'];
			$designed_for = $d['Designed For'];
			$tyre_image_url = $d['Tyre Image Url'];


		$chktyre = Tyres::where('name',$tyresize)->first();
		if(empty($chktyre)){			
		$newt = new Tyres();
		$newt->name = $tyresize;
		$newt->truck = 0;
		$newt->otr = 0;
		$newt->pattern_id = $pattern_id;
		$newt->brand_id = $brand_id;		

		$w = explode('/',$tcat[0]);

		$r = explode(' ',$tcat[1]);
		if(isset($r[1])){
		$ss = explode('/',$r[1]);
		}else{
		$ss = explode('/',$r[0]);			
		}


		if(isset($ss[1])){
			$res = preg_replace("/[^0-9]/", "",$ss[1] );
			$res = preg_replace('/\s/', '', $res);

			$sp = explode($res, $ss[1]);			
		}else{
			$res = preg_replace("/[^0-9]/", "",$ss[0] );
			$res = preg_replace('/\s/', '', $res);			
			$sp = explode($res, $ss[0]);			
		}

		$newt->width = $w[0];
		if(isset($w[1])){
		$newt->profile = $w[1];
		}else{
		$newt->profile = 0;			
		}

		$newt->rim_size = $r[0];

		$newt->load_index = $res;
		$newt->speed_index = $sp[1];

		$newt->price = $price;
		$newt->attributes = $tyreatt_id;
		$newt->fitment_in = 'all';
		$newt->tyre_category_id = $tyrecat_id;

		if(isset($d['Quantity'])){
	

		$newt->quantity = $d['Quantity'];
		$newt->min_quantity = $d['Quantity'];
		$newt->stock_available = $d['Quantity'];
		$newt->max_order_quantity = $d['Quantity'];
		$newt->stock_low_quantity_notify_to_user = 1;			


		}else{


		$newt->quantity = 4;
		$newt->min_quantity = 4;
		$newt->stock_available = 4;
		$newt->max_order_quantity = 4;
		$newt->stock_low_quantity_notify_to_user = 1;			


		}

		
		$newt->year = date('Y-m-d');
		$newt->vehicle_id = 0;
		$newt->make_id = 0;
		$newt->series_id = 0;


		$newt->video = NULL;

		$newt->run_flat = 0;
		$newt->suv_tyre = 0;

		$newt->fuel_efficient_tyre = 0;
		
		$newt->on_sale = 0;
		$newt->recommend = 0;
		$newt->our_pick = 0;
		$newt->ceo_choice = 0;
		$newt->recommend_type = 0;
		$newt->tyre_size = $tyresize_id;

		$newt->fit_tomorrow = 0;
		$newt->eco_freindly = 0;		
		$newt->position = 'all';
		$newt->tra_code = 0;		


		$newt->benefits = $benefits;
		$newt->description = $description;
		$newt->features = $features;
		


		$newt->image = $tyre_image_url;
		$url = str_replace(' ','-',$tyresize);
		$url = str_replace('/','-',$url);		
		$newt->url = strtolower($url);
		$newt->save();	



			}

		}

		alert()->success('Saved...!!!');
		return redirect()->back();
	}

}
