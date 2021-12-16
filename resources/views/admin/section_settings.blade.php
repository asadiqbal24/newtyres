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
                        <form method="POST" action="{{route('admin.sections.settings.save')}}" enctype="multipart/form-data">
                              {{csrf_field()}}


                         <div class="col-lg-8 col-sm-8 col-md-8 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_first_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 1st Title</label>
                                            <input type="text" class="form-control" name="section_first_title" value="{{$value}}">
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


                             <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_first_desc')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 1st Desc</label>                                            
                                            <textarea type="text" class="form-control" name="section_first_desc" value="{{$value}}">{{$value}}</textarea> 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 




                         <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_two_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 2nd Title</label>
                                            <input type="text" class="form-control" name="section_two_title" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_two_video_link')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 

                                       <div class="col-md-12">
                                         <iframe src="{{$value}}" style="width: 100%;height: 500px;"></iframe>
                                       </div>
                                        <div class="form-line">
                                            <label>Section 2nd Video Link</label>
                                            <input type="text" class="form-control" name="section_two_video_link" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_two_desc')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 2nd Desc</label>                                            
                                            <textarea type="text" class="form-control" name="section_two_desc" value="{{$value}}">{{$value}}</textarea> 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                             


                           <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 3rd Title</label>
                                            <input type="text" class="form-control" name="section_third_title" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_1')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 3rd Desc. 1</label>
                                            <textarea type="text" class="form-control" name="section_third_sub_1" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_2')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 3rd Desc. 2</label>
                                            <textarea type="text" class="form-control" name="section_third_sub_2" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_3')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 3rd Desc. 3</label>
                                            <textarea type="text" class="form-control" name="section_third_sub_3" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_4')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 3rd Desc. 4</label>
                                            <textarea type="text" class="form-control" name="section_third_sub_4" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_5')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 3rd Desc. 5</label>
                                            <textarea type="text" class="form-control" name="section_third_sub_5" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_6')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 3rd Desc. 6</label>
                                            <textarea type="text" class="form-control" name="section_third_sub_6" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                          <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_image1')
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
                                            <label>Section 3rd Desc. 1 Image</label>                                            
                                            <input type="file" name="section_third_sub_image1">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                          <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_image2')
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
                                            <label>Section 3rd Desc. 2 Image</label>                                            
                                            <input type="file" name="section_third_sub_image2">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  
                            


                          <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_image3')
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
                                            <label>Section 3rd Desc. 3 Image</label>                                            
                                            <input type="file" name="section_third_sub_image3">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 



                          <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_image4')
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
                                            <label>Section 3rd Desc. 4 Image</label>                                            
                                            <input type="file" name="section_third_sub_image4">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                          <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_image5')
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
                                            <label>Section 3rd Desc. 5 Image</label>                                            
                                            <input type="file" name="section_third_sub_image5">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                          <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_third_sub_image6')
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
                                            <label>Section 3rd Desc. 6 Image</label>                                            
                                            <input type="file" name="section_third_sub_image6">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                                                                                   
                          <div class="col-lg-8 col-sm-8 col-md-8 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='section_fourth_title')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Section 4th Title</label>
                                            <input type="text" class="form-control" name="section_fourth_title" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 input-group float-left">
                                     @php $value=''; @endphp
                                      @if($settings->count() > 0)                                     
                                        @foreach($settings as $set)
                                           @if($set->key_term=='expert_numbers')
                                                @php $value=$set->value; @endphp
                                           @endif 
                                        @endforeach
                                       @else
                                                @php $value=''; @endphp
                                       @endif 
                                        <div class="form-line">
                                            <label>Experts Number</label>
                                            <input type="text" class="form-control" name="expert_numbers" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                             
                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                              <a href="{{route('admin.sections.settings.page2',['id'=>$id])}}" class="btn  btn-raised btn-success waves-effect">Next Page</a>
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

<script src="{{asset('public/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
<!-- Bootstrap Colorpicker Js -->
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'section_first_desc' );
      CKEDITOR.replace( 'section_two_desc' );
      CKEDITOR.replace( 'section_third_sub_1' );
      CKEDITOR.replace( 'section_third_sub_2' );
      CKEDITOR.replace( 'section_third_sub_3' );      
      CKEDITOR.replace( 'section_third_sub_4' );
      CKEDITOR.replace( 'section_third_sub_5' );      
      CKEDITOR.replace( 'section_third_sub_6' );      

</script>
@endsection()
