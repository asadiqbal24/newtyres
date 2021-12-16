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
                        <li class="breadcrumb-item"><a href="{{route('admin.promo.codes')}}">Promotion</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                     @if($fun_type=='add')
                      <h4>Add Promo Codes</h4>                                            
                      <form method="POST" action="{{route('admin.promo-code.save')}}" enctype="multipart/form-data">
                     @else
                      <h4>Edit Promo Codes</h4>
                      <form method="POST" action="{{route('admin.promo-code.update')}}" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="{{$promotion->id}}">  
                     @endif 


                              {{csrf_field()}}

                         <div class="row">
                        




                          <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($promotion))
                                       @php $value=$promotion->title; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Title</label>
                                            <input type="text" class="form-control" required="required" name="name" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($promotion))
                                       @php $value=$promotion->value; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Value (%)</label>
                                            <input type="text" class="form-control" required="required" name="value" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($promotion))
                                       @php $value=$promotion->from; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>From</label>
                                            <input type="date" class="form-control" required="required" name="from" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($promotion))
                                       @php $value=$promotion->to; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>To</label>
                                            <input type="date" class="form-control" required="required" name="to" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($promotion))
                                       @php $value=$promotion->quantity; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            @if($fun_type=='edit')
                                            <label>Generate New Codes</label>
                                            @php $value='0'; @endphp
                                            @else
                                            <label>Quantity</label>
                                            @endif
                                            <input type="number" class="form-control" required="required" name="quantity" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 



                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <input type="submit" name="submit" value="Save" class="btn  btn-raised btn-success waves-effect">
                            </div> 

                         </div>

                        </form>


                        <div class="clearfix"></div>
                        @if($fun_type=='edit')
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Used ?</th>
                                        <th>Used Date</th>
                                        <th>Used By</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Used ?</th>
                                        <th>Used Date</th>
                                        <th>Used By</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   @if($promocodes->count()>0) 
                                    @php $i=1; @endphp                                   
                                    @foreach($promocodes as $promotion)
                                    @php $promotion_date = explode(' ',$promotion->created_at); @endphp
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$promotion->value}}</td>
                                        <td>@if($promotion->status==1) {{'Yes'}} @else {{'No'}} @endif</td>
                                        <td>{{$promotion->promotion_date}}</td>
                                        <td>{{$promotion->username}}</td>
                                        
                                    </tr>
                                    @endforeach
                                   @else
                                        <tr><td colspan="6">No Record Found</td></tr>
                                   @endif 
                                    
                                </tbody>
                            </table>
                        </div>

                        </div>
                        @endif

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
            CKEDITOR.replace( 'description' );;
</script>



@endsection()
