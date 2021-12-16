@extends('partials.default')
@section('content')  
<!-- Colorpicker Css -->
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />    

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin/users-list')}}">Add Users</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
                <h4>Add User</h4>

                <form method="POST" action="{{route('admin.user.save_new_user')}}" enctype="multipart/form-data">
                      {{csrf_field()}}

                        <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Name</b> </p>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Smith" value="{{old('name')}}" required="required">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div> 

                        <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Username</b> </p>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Smith1234" value="{{old('username')}}" required="required">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>


                        <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Email</b> </p>
                                <input type="em ail" class="form-control" id="email" name="email" placeholder="Smith@example.com" value="{{old('email')}}" required="required">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Gender</b> </p>
                                 <select class="form-control show-tick" name="gender">
                                    <option value="M">Male</option>
                                    <option value="F">FeMale</option>
                                 </select>  
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                           
                        <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Image</b> </p>
                               <input type="file" name="image" class="form-control" required> 
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                           <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Password</b> </p>
                              <input type="password" name="password" class="form-control" required> 
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Gender</b> </p>
                                 <select class="form-control show-tick" name="parent_user">
                                    <option value="">Select</option>
                                    @foreach($users as $u)
                                        <option value="{{$u->id}}">{{$u->username}}</option>
                                    @endforeach
                                 </select>  
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-md-6 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Position</b> </p>
                                 <select class="form-control show-tick" name="position">
                                    <option value="left">Left</option>
                                    <option value="right">Right</option>
                                    <option value="gold">Gold</option>
                                 </select>  
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>



                        <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                            <button type="submit" class="btn  btn-raised btn-success waves-effect float-right">Save</button>
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

@endsection()
