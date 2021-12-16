@extends('partials.default')
@section('content')  
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.tyres')}}">Tyres</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                     @if($fun_type=='add')
                      <h4>Add Tyre</h4>                                            
                      <form method="POST" action="{{route('admin.tyre.save')}}" enctype="multipart/form-data">
                     @else
                      <h4>Edit Tyre</h4>
                      <form method="POST" action="{{route('admin.tyre.update')}}" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="{{$tyre->id}}">  
                     @endif 


                              {{csrf_field()}}

                         <div class="row">
                           
                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->fitment_in; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Fitment In</label>
                                            <select class="form-control show-tick" required="required" name="fitment_in">
                                                <option value="{{'all'}}">All</option>
                                                @foreach($regions as $r)
                                                    @if($value==$r->id)
                                                    <option selected="selected" value="{{$r->id}}">{{$r->name}}</option>
                                                    @else
                                                    <option value="{{$r->id}}">{{$r->name}}</option>                                                    
                                                    @endif
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                           

                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->tyre_category_id; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Category</label>
                                            <select class="form-control show-tick" required="required" name="tyre_category_id">
                                                <option value="{{NULL}}">Select</option>                                                
                                                @foreach($categories as $c)
                                                    @if($value==$c->id)
                                                     <option selected="selected" value="{{$c->id}}">{{$c->name}}</option>
                                                    @else
                                                        <option value="{{$c->id}}">{{$c->name}}</option>              
                                                    @endif

                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                          <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->brand_id; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Brand</label>
                                            <select class="form-control show-tick brand_id" id="brand_id" required="required" name="brands">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($brands as $b)
                                                @if($value==$b->id)
                                                    <option selected="selected" value="{{$b->url}}">{{$b->name}}</option>
                                                    @else
                                                    <option value="{{$b->url}}">{{$b->name}}</option>
                                                    @endif

                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                          <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->pattern_id; @endphp
                                     @else
                                                @php $value='-1'; @endphp
                                     @endif 
                                            <label>Pattern</label>
                                            <select class="form-control show-tick pattern_id" id="pattern_id" required="required" name="pattern">
                                                <option value="{{NULL}}">Select</option>

                                                @foreach($patterns as $p)
                                                    @if($value==$p->id)
                                                       <option selected="selected" value="{{$p->id}}">{{$p->name}}</option>
                                                    @endif
                                                @endforeach    

                                                @foreach($patterns as $p)
                                                    <option style="display: none" value="{{$p->id}}">{{$p->name}}</option>
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->vehicle_id; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Make</label>
                                            <select class="form-control show-tick" required="required" id="vehicle" name="vehicle">
                                                <option value="{{NULL}}">Select</option>                                                    
                                                @foreach($vehicles as $v)   
                                                    
                                                    @if($value==$v->id)
                                                    <option selected="selected" value="{{$v->id}}">{{$v->name}}</option>
                                                    @else
                                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                                    @endif

                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->make_id; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Model</label>
                                        <select class="form-control show-tick" required="required" id="make" name="make">
                                                <option value="{{NULL}}">Select</option>                                            
                                            @foreach($model as $m)        
                                             @if($value==$m->id)
                                                    <option selected="selected" value="{{$m->id}}">{{$m->name}}</option>
                                                    @else
                                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                                    @endif
                                              @endforeach      

                                               
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             


                          <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->series_id; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Series</label>
                                            <select class="form-control show-tick" required="required" name="series" id="series">
                                                <option value="{{NULL}}">Select</option>                                                
                                                @foreach($series as $s)
    
                                                    @if($value==$s->id)
                                                    <option selected="selected" value="{{$s->id}}">{{$s->name}}</option>
                                                    @else
                                                    <option value="{{$s->id}}">{{$s->name}}</option>
                                                    @endif

                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 
                           



                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->attributes; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Tyre Attributes</label>
                                            <select class="form-control show-tick" required="required" name="tyreattributes">
                                                <option value="{{NULL}}">Select</option>                                                
                                                @foreach($attributes as $a)
    
                                                    @if($value==$a->id)
                                                    <option selected="selected" value="{{$a->id}}">{{$a->name}}</option>
                                                    @else
                                                    <option value="{{$a->id}}">{{$a->name}}</option>
                                                    @endif

                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->tyre_size; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Tyre Sizes</label>
                                            <select class="form-control show-tick" required="required" name="tyre_size">
                                                <option value="{{NULL}}">Select</option>                                                
                                                @foreach($sizes as $s)

                                                    @if($value==$s->id)
                                                    <option selected="selected" value="{{$s->id}}">{{$s->name}}</option>
                                                    @else
                                                    <option value="{{$s->id}}">{{$s->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             


                          <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->name; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required="required" name="name" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 
                                                      

                                                        

                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->truck; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>In Truck ? </label>
                                            <select class="form-control show-tick" required="required" name="truck">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                                <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->otr; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>In Otr ?</label>
                                            <select class="form-control show-tick" required="required" name="otr">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div> 





                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->width; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Width</label>
                                            <input type="text" class="form-control" required="required" name="width" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->profile; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Profile</label>
                                            <input type="text" class="form-control" required="required" name="profile" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 



                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->rim_size; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Rim Size</label>
                                            <input type="text" class="form-control" required="required" name="rim_size" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->load_index; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Load Index</label>
                                            <input type="text" class="form-control" required="required" name="load_index" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->speed_index; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Speed Index</label>
                                            <input type="text" class="form-control" required="required" name="speed_index" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->price; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Price</label>
                                            <input type="text" class="form-control" required="required" name="price" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->quantity; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" required="required" name="quantity" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->year; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Manufactured Year</label>
                                            <select class="form-control show-tick" required="required" name="year">
                                                <option value="{{NULL}}">Select</option>    

                                                @for($i=date('Y');$i>1950;$i--)
                                                    @if($i==$value)
                                                        <option selected="selected" value="{{$i}}">{{$i}}</option>
                                                     @else
                                                         <option value="{{$i}}">{{$i}}</option>
                                                     @endif   
                                                @endfor    
                                            </select>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->min_quantity; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Min Order Quantity</label>
                                            <input type="number" class="form-control" required="required" name="min_quantity" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                              <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->max_order_quantity; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Max Order Quantity</label>
                                            <input type="number" class="form-control" required="required" name="max_order_quantity" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->stock_low_quantity_notify_to_user; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Stock Low Quantity Alert To User</label>
                                            <input type="number" class="form-control" required="required" name="stock_low_quantity_notify_to_user" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->run_flat; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Run Flat ?</label>
                                            <select class="form-control show-tick" required="required" name="run_flat">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div> 


                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->suv_tyre; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Suv Tyre ?</label>
                                            <select class="form-control show-tick" required="required" name="suv_tyre">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>                              


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->fuel_efficient_tyre; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Fuel Efficient Tyre ?</label>
                                            <select class="form-control show-tick" required="required" name="fuel_efficient_tyre">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>


                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->sale_percentage; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>On Sale ?</label>
                                            <select class="form-control show-tick" required="required" name="on_sale">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>


                <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value='0'; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->sale_percentage; @endphp
                                     @else
                                                @php $value='0'; @endphp
                                     @endif 
                                              <div class="form-line">
                                            <label>Sale Percentage</label>
                                            <input type="text" class="form-control" required="required" name="sale_percentage" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>                             


                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->recommend; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Recommended ?</label>
                                            <select class="form-control show-tick" required="required" name="recommend">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>                             
                           

                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->our_pick; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Our Pick ?</label>
                                            <select class="form-control show-tick" required="required" name="our_pick">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>         

                           <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->ceo_choice; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Ceo Choice ?</label>
                                            <select class="form-control show-tick" required="required" name="ceo_choice">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>         

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->fit_tomorrow; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Click & Fit Tomorrow ?</label>
                                            <select class="form-control show-tick" required="required" name="fit_tomorrow">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>

                           <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->recommend_type; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                     <div class="form-line">
                                            <label>Recommended Offer Title ?</label>
                                           <input type="text" class="form-control" name="recommend_type" value="{{$value}}">
                                       </div>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>         


                           <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->tra_code; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                     <div class="form-line">
                                            <label>Tra Code</label>
                                           <input type="text" class="form-control" name="tra_code" value="{{$value}}">
                                       </div>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>  

                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->gst; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                     <div class="form-line">
                                            <label>Gst Per Item</label>
                                           <input type="text" class="form-control" name="gst" value="{{$value}}">
                                       </div>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>         

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->position; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Position</label>
                                            <select class="form-control show-tick" name="position">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($positions as $pos)
                                                    @if($pos==$value)    
                                                            <option selected="selected" value="{{$pos}}">{{$pos}}</option>      
                                                    @else
                                                            <option value="{{$pos}}">{{$pos}}</option>                                                          
                                                    @endif        

                                                @endforeach

                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>                         

                                <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->eco_freindly; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Eco Freindly ?</label>
                                            <select class="form-control show-tick" required="required" name="eco_freindly">
                                                <option value="{{NULL}}">Select</option>
                                                    @if($value==1)
                                                        <option value="1" selected="selected">Yes</option>
                                                    @else
                                                        <option value="1">Yes</option>
                                                    @endif

                                                     @if($value==0)
                                                        <option value="0" selected="selected">No</option>
                                                    @else
                                                        <option value="0">No</option>
                                                    @endif
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                             </div>


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->description; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 


                                        <div class="form-line">
                                            <label>Description</label>
                                            <textarea type="text" class="form-control" name="description" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->features; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 


                                        <div class="form-line">
                                            <label>Features</label>
                                            <textarea type="text" class="form-control" name="features" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->benefits; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 


                                        <div class="form-line">
                                            <label>Features</label>
                                            <textarea type="text" class="form-control" name="benefits" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             

                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->image; @endphp
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <img src="{{$value}}" style="width: 100%;">
                                        </div>
                                     @else
                                                @php $value=''; @endphp
                                     @endif 


                                        <div class="form-line">
                                            <label>Image</label>
                                            @if($fun_type=='edit')
                                            <input type="file" class="form-control" name="image">
                                            @else
                                            <input type="file" class="form-control" required="required" name="image">
                                            @endif
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-8 col-sm-8 col-md-8 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($tyre))
                                       @php $value=$tyre->video; @endphp
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <iframe src="{{$value}}" style="width: 100%;height: 450px;"></iframe>
                                        </div>
                                     @else
                                                @php $value=''; @endphp
                                     @endif 


                                        <div class="form-line">
                                            <label>Video </label>
                                            <input type="text" class="form-control" name="video">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <input type="submit" name="submit" value="Save" class="btn  btn-raised btn-success waves-effect">
                            </div> 

                         </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>               
    </div>
</section>
@endsection()
@section('jsOutside')
<script src="{{asset('public/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
<!-- Bootstrap Colorpicker Js -->
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script type="text/javascript">
            CKEDITOR.replace( 'description' );
            CKEDITOR.replace( 'features' );            
            
</script>


@endsection()
