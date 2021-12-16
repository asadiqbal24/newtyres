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
                        <li class="breadcrumb-item"><a href="{{route('admin.settings',['id'=>'all'])}}">Settings</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                    <h4>Settings</h4>                       
                        <form method="POST" action="{{route('admin.settings.save')}}" enctype="multipart/form-data">
                              {{csrf_field()}}

                              <div class="row">
                           

                         <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='app_name')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>App Name</label>
                                            <input type="text" class="form-control" name="app_name" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                             <div class="col-lg-4 col-sm-4 col-md-4 input-group colorpicker icon after_span">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='color_scheme')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Color Scheme</label>                                            
                                            <input type="text" class="form-control" name="color_scheme" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group colorpicker icon after_span">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='icon_color')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Icon Color</label>                                            
                                            <input type="text" class="form-control" name="icon_color" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

<!--                             <div class="col-lg-6 col-sm-6 col-md-6 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='currency')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Currency</label>                                            
                                            <input type="text" class="form-control" name="currency" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  -->


                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='terms_condition')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Terms & Conditions</label>                                            
                                            <textarea type="text" class="form-control" name="terms_condition" value="{{$value}}">{{$value}}</textarea> 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 



                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='about_us')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>About Us</label>                                            
                                            <textarea type="text" class="form-control" name="about_us" value="{{$value}}">{{$value}}</textarea> 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='privacy_policy')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Privacy Policy</label>                                            
                                            <textarea type="text" class="form-control" name="privacy_policy" value="{{$value}}">{{$value}}</textarea> 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='main_image')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 

                                       <div class="col-lg-12 col-md-12">
                                        <img src="{{$value}}" style="width: 100%">
                                       </div>
                                        <div class="form-line">
                                            <label>Main Page Image</label>                                            
                                            <input type="file" name="main_image">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='desc_below_image')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Desc. Below Image</label>                                            
                                            <textarea type="text" class="form-control" name="desc_below_image" value="{{$value}}">{{$value}}</textarea> 
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
<script src="{{asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<!-- <script src="{{asset('public/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script> 
<script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> 
<script src="{{asset('public/assets/plugins/jquery-spinner/js/jquery.spinner.js')}}"></script> 
<script src="{{asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('public/assets/plugins/nouislider/nouislider.js')}}"></script> -->
    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
<script src="{{asset('public/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
<!-- Bootstrap Colorpicker Js -->
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'terms_condition' );
      CKEDITOR.replace( 'about_us' );
      CKEDITOR.replace( 'mission' );
      CKEDITOR.replace( 'vision' );
      CKEDITOR.replace( 'privacy_policy' );      
      CKEDITOR.replace( 'desc_below_image' );

</script>
@endsection()
