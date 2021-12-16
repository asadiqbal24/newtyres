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
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Settings</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                     @if($fun_type=='add')
                      <h4>Add Team</h4>                                            
                      <form method="POST" action="{{route('admin.team.save')}}" enctype="multipart/form-data">
                     @else
                      <h4>Edit Team</h4>
                      <form method="POST" action="{{route('admin.team.update')}}" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="{{$team->id}}">  
                     @endif 


                              {{csrf_field()}}

                         <div class="row">
                           
                          <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($team))
                                       @php $value=$team->area_id; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                            <label>Area</label>
                                            <select class="form-control show-tick" required="required" name="area_id">
                                                @foreach($area as $a)
                                                    <option value="{{$a->id}}">{{$a->name}} {{$a->country_name->name}}</option>
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                          <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($team))
                                       @php $value=$team->name; @endphp
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
                                     @if(isset($team))
                                       @php $value=$team->designation; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" required="required" name="designation" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                                                         


                             <div class="col-lg-9 col-sm-9 col-md-9 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($team))
                                       @php $value=$team->about; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>About</label>
                                            <textarea type="text" class="form-control" required="required" name="about" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>                                                           

                             <div class="col-lg-3 col-sm-3 col-md-3 input-group float-left">
                                     @php $value=''; @endphp
                                     @if(isset($team))
                                       @php $value=$team->image; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 

                                       <div class="col-lg-12 col-md-12">
                                        <img src="{{$value}}" style="width: 100%">
                                       </div>
                                        <div class="form-line">
                                            <label>Image</label>                                            
                                            <input type="file" name="image" <?php if(!isset($team)) echo 'required="required"' ?>>
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
      CKEDITOR.replace( 'about' );
</script>
@endsection()
