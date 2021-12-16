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
                        <li class="breadcrumb-item"><a href="index.html">Settings</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                    <h4>Our Team</h4>     
                      <div class="col-lg-12 col-md-12 col-sm-12">                                      
                        <a href="{{route('admin.add_team')}}" class="btn btn-success float-right">Add Team Members</a>
                      </div>
                      <div class="clearfix"></div>
                      <div class="row">

                            @foreach($team as $t)
                            <div class="col-lg-4 col-md-6">
                              <div class="card">
                                  <div class="body">
                                      <div class="member-card-2 ">                            
                                          <div class=" member-thumb">
                                              <img src="{{$t->image}}" class="img-thumbnail" alt="profile-image">
                                              
                                          </div>

                                          <div class="">
                                              <h4 class="m-b-5">{{$t->name}}</h4>
                                              <p class="text-muted">{{$t->area_name->name}}<span> <a href="#" class="text-pink">{{$t->designation}}</a> </span></p>
                                          </div>

                                          <a href="{{route('admin.edit.team',['id'=>$t->id])}}">Edit</a>
<!--                                           <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                            -->
                                          
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

@endsection()
