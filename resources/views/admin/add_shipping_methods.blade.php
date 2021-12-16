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
                        <li class="breadcrumb-item"><a href="{{route('admin.shipping.methods')}}">Shipping Methods</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                     @if($fun_type=='add')
                      <h4>Add Shipping Method</h4>                                            
                      <form method="POST" action="{{route('admin.shipping.method.save')}}" enctype="multipart/form-data">
                     @else
                      <h4>Edit Shipping Method</h4>
                      <form method="POST" action="{{route('admin.shipping.method.update')}}" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="{{$method->id}}">  
                     @endif 


                              {{csrf_field()}}

                         <div class="row">
                           

                          <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->name; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required="required" name="name" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 



                                <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->price; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Price</label>
                                            <input type="text" class="form-control" required="required" name="price" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                                                         


                                <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->distance_from; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Distance From (Km)</label>
                                            <input type="text" class="form-control" required="required" name="distance_from" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                                <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->distance_to; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Distance To (Km)</label>
                                            <input type="text" class="form-control" required="required" name="distance_to" value="{{$value}}">
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
