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
                        <li class="breadcrumb-item"><a href="{{route('admin.site.discount')}}">Site Discount</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                     @if($fun_type=='add')
                      <h4>Site Discount </h4>                                            
                      <form method="POST" action="{{route('admin.save.site.discount')}}" enctype="multipart/form-data">
                     @else
                      <h4>Site Discount</h4>
                        <form method="POST" action="{{route('admin.save.site.discount')}}" enctype="multipart/form-data">
                     @endif     
                     <span>Saving Discounts Will Take Some Time To Take Effect.</span>


                              {{csrf_field()}}

                         <div class="row">
                        

                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($site_discounts))
                                       @php $value=$site_discounts->value; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Discount ?</label>
                                            <select class="form-control show-tick" required="required" name="site_discounts">
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
                                     @if(isset($site_discounts_name))
                                       @php $value=$site_discounts_name->value; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Discount Name?</label>
                                            <input type="text" class="form-control" required="required" name="site_discounts_name" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($site_discounts_value))
                                       @php $value=$site_discounts_value->value; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Discount Value?</label>
                                            <input type="text" class="form-control" required="required" name="site_discounts_value" value="{{$value}}">
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
<script>
      CKEDITOR.replace( 'answer' );
</script>
@endsection()
