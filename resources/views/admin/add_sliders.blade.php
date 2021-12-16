@extends('partials.default')
@section('content')  
<!-- Colorpicker Css -->
<link href="{{asset('public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" />    

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.add_sliders')}}">Sliders</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                      <div class="col-lg-12 col-md-12 col-sm-12">                                      
                        <form method="post" enctype="multipart/form-data" action="{{route('admin.slider.save')}}">
                            {{csrf_field()}}
                             <div class="col-lg-12 col-sm-12 col-md-12 input-group"> 
                                            <label class="col-lg-12 col-sm-12 col-md-12">Select Files (multiple allowed)</label>
                                            <input type="file" name="files[]" multiple="true">
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group"> 

                                            <input type="radio" name="type" style="position: relative;left: 0px;opacity: 1" value="full">Full
                                                <input type="radio" name="type" style="position: relative;left: 0px;opacity: 1" value="mobile">Mobile
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  


                              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <input type="submit" name="submit" value="Save" class="btn  btn-raised btn-success waves-effect">
                            </div> 
                        </form>
                      </div>
                      <div class="clearfix"></div>
                      <div class="row">

                            @foreach($sliders as $t)
                            <div class="col-lg-4 col-md-6">
                              <div class="card">
                                  <div class="body">
                                      <div class="member-card-2 ">                            
                                          <div class=" member-thumb">
                                              <img src="{{$t->file}}" class="img-thumbnail" alt="profile-image">  

                                             <div class="col-md-12" id="form{{$t->id}}" style="display: none">

                                              <form method="post"  action="{{route('admin.update.slider.image')}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$t->id}}">
                                                <input type="file" name="image" >
                                               
                                                <input type="radio" name="type" style="position: relative;left: 0px;opacity: 1" value="full" <?php if($t->name=='full') echo 'checked="checked"'; ?>  >Full
                                                <input type="radio" name="type" style="position: relative;left: 0px;opacity: 1" value="mobile" <?php if($t->name=='mobile') echo 'checked="checked"'; ?>  >Mobile

                                                <input type="submit" name="submit" value="Save" class="btn btn-success">
                                              </form>

                                             </div>                             
                                          </div>
                                          <button href="#" class="edit-image btn btn-primary" data-form='form{{$t->id}}'>Edit</button>
                                          <a class="sweet-approve btn btn-danger" href="#" data-url="{{route('admin.slider.delete.image',['id'=>$t->id])}}">Delete</a>                                            
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @endforeach

                         </div>

                    </div>
                </div>
            </div>

        </div>               
    </div>
</section>
@endsection()
@section('jsOutside')
  <script type="text/javascript">
    
    $('.edit-image').click(function(){

      form = $(this).attr('data-form');

      $('#'+form).toggle();

    });

  </script>
@endsection()
