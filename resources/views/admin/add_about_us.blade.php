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
                    <h4>About Us</h4>                       
                        <form method="POST" action="{{route('admin.about_us.save')}}" enctype="multipart/form-data">
                              {{csrf_field()}}
<!--                          <input type="hidden" name="id" value="{{$id}}">      -->
                         <div class="row">     
                         <div class="col-lg-8 col-sm-8 col-md-8 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='about_us_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>About Us Title</label>
                                            <input type="text" class="form-control" name="about_us_title" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 



                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                    
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


                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='description')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
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
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='second_section_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Title 2nd Section</label>                                            
                                            <input type="text" name="second_section_title" class="form-control" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Title 3rd Section</label>                                            
                                            <input type="text" name="third_section_title" class="form-control" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                         <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_sub_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Sub Title 3rd Section</label>                                            
                                            <input type="text" name="third_section_sub_title" class="form-control" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_desc')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Desc. 3rd Section</label>                                            
                                            <textarea type="text" class="form-control" name="third_section_desc" value="{{$value}}">{{$value}}</textarea> 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                             <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_image1')
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
                                            <label>3rd Section Image 1</label>                                            
                                            <input type="file" name="third_section_image1">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                           <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_image2')
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
                                            <label>3rd Section Image 2</label>                                            
                                            <input type="file" name="third_section_image2">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_image3')
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
                                            <label>3rd Section Image 3</label>                                            
                                            <input type="file" name="third_section_image3">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_image1_text')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>3rd Section Image 1 Text</label>                                            
                                            <input type="text" name="third_section_image1_text" class="form-control" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_image2_text')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>3rd Section Image 2 Text</label>                                            
                                            <input type="text" name="third_section_image2_text" class="form-control" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='third_section_image3_text')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>3rd Section Image 3 Text</label>                                            
                                            <input type="text" name="third_section_image3_text" class="form-control" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             
                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='our_team_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Our Team Title</label>                                            
                                            <input type="text" name="our_team_title" class="form-control" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='fourth_section_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Title 4th Section</label>                                            
                                            <input type="text" name="fourth_section_title" class="form-control" value="{{$value}}">
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
                                            <label>Main Image</label>                                            
                                            <input type="file" name="main_image">
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
        CKEDITOR.replace( 'description' );;
        CKEDITOR.replace( 'third_section_desc' );      
        CKEDITOR.replace( 'desc_below_image' );

  </script>
@endsection()
