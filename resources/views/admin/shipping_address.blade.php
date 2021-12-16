@extends('partials.default')
@section('content')  
<link href="{{asset('public/assets/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.shipping.address')}}">Shipping Address</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                      <h4>Shipping Address</h4>                                            
                      <form method="POST" action="{{route('admin.shipping.address.save')}}" enctype="multipart/form-data">

                              {{csrf_field()}}

                         <div class="row">
                           

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($address))
                                       @php $value=$address->address1; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Address 1</label>
                                            <input type="text" class="form-control" required="required" name="address1" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($address))
                                       @php $value=$address->address1; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" required="required" name="address2" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-3 col-sm-3 col-md-3 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($address))
                                       @php $value=$address->postal_code; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Post Code</label>
                                            <input type="text" class="form-control" required="required" name="postal_code" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                             <div class="col-lg-3 col-sm-3 col-md-3 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($address))
                                       @php $value=$address->city; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>City</label>
                                            <input type="text" class="form-control" required="required" name="city" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-3 col-sm-3 col-md-3 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($address))
                                       @php $value=$address->state; @endphp
                                     @else
                                                @php $value='-1'; @endphp
                                     @endif 
                                            <label>State</label>
                                            <select class="form-control show-tick state" id="state" required="required" name="state">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($regions as $p)
                                                    @if($value==$p->id)
                                                    <option selected="selected" value="{{$p->id}}">{{$p->name}}</option>
                                                    @else
                                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  

                            <div class="col-lg-3 col-sm-3 col-md-3 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($address))
                                       @php $value=$address->country; @endphp
                                     @else
                                                @php $value='-1'; @endphp
                                     @endif 
                                            <label>Country</label>
                                            <select class="form-control show-tick country" id="country" required="required" name="country">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($countries as $p)
                                                    @if($value==$p->id)
                                                    <option selected="selected" value="{{$p->id}}">{{$p->name}}</option>
                                                    @else
                                                    <option value="{{$p->id}}">{{$p->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                                                          
                        
                        <div class="col-lg-3 col-sm-3 col-md-3 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($address))
                                       @php $value=$address->direct_shipment_discount; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Direct Ship Discount ($)</label>
                                            <input type="text" class="form-control" required="required" name="direct_shipment_discount" value="{{$value}}">
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
@endsection()
