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
                        <li class="breadcrumb-item"><a href="{{route('admin.extra.order.items')}}">Extra Order Items</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                     @if($fun_type=='add')
                      <h4>Add Extra Order Items</h4>                                            
                      <form method="POST" action="{{route('admin.extra.order.items.save')}}" enctype="multipart/form-data">
                     @else
                      <h4>Edit Extra Order Items</h4>
                      <form method="POST" action="{{route('admin.extra.order.items.update')}}" enctype="multipart/form-data">
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
                                       @php $value=$method->cost; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Cost</label>
                                            <input type="text" class="form-control" required="required" name="cost" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                                                         


                                <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->price_from; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Price From</label>
                                            <input type="text" class="form-control" required="required" name="price_from" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->price_to; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Price To</label>
                                            <input type="text" class="form-control" required="required" name="price_to" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->description; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Desc.</label>
                                            <input type="text" class="form-control" required="required" name="description" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             


                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($method))
                                       @php $value=$method->image; @endphp
                                       <img src="{{$value}}" style="width: 100px;height: 100px;">
                                     @else
                                                @php $value='-1'; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Image</label>
                                            @if($value=='-1')
                                            <input type="file" class="form-control" required="required" name="image">
                                            @else
                                            <input type="file" class="form-control" name="image">
                                            @endif
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
