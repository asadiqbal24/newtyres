@extends('partials.default')
@section('content')  
<!-- Colorpicker Css -->
<link href="{{asset('public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" /> 
<link href="{{asset('public/assets/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />   

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.html">Settings</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                    <h4>Sections Settings</h4>                       
                        <form method="POST" action="{{route('admin.sections.settings.page3.save')}}" enctype="multipart/form-data">
                              {{csrf_field()}}

                    <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                    
                                            <label>Area</label>
                                            <select class="form-control show-tick" required="required" name="id">
                                                 @foreach($area as $a)
                                                    @if($a->id==$id)
                                                      <option selected="selected" value="{{$a->id}}">{{$a->name}} {{$a->country_name->name}}</option>
                                                    @else
                                                      <option value="{{$a->id}}">{{$a->name}} {{$a->country_name->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                               

                         <div class="col-lg-8 col-sm-8 col-md-8 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_instagram_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section Instagram Title</label>
                                            <input type="text" class="form-control" name="section_instagram_title" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_tenth_desc')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 10th Desc</label>                                            
                                            <input type="text" class="form-control" name="section_tenth_desc" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 







                             <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_footer')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section Footer</label>
                                            <textarea type="text" class="form-control" name="section_footer" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>
 


                             
                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <input type="submit" name="submit" value="Save" class="btn  btn-raised btn-success waves-effect">
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
<script src="{{asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<!-- <script src="{{asset('public/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> 
<script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> 
<script src="{{asset('public/assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script> 
<script src="{{asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('public/assets/plugins/nouislider/nouislider.js')}}"></script> -->
<script src="{{asset('public/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
<!-- Bootstrap Colorpicker Js -->
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'section_footer' );
</script>
@endsection()
