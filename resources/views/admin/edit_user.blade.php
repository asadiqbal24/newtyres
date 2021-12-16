@extends('partials.default')
@section('content')
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{route('admin/save-profile')}}" enctype="multipart/form-data">
                <div class="row">

                {{csrf_field()}}
                <input type="hidden" name="uid" value="{{$user->uid}}">                    
                <div class="col-9">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Profile</h4>
                                
                        <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Name</b> </p>
                                 <input class="form-control" type="text" value="{{$user->name}}" required id="name" name="name">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>                                 


                        <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Email</b> </p>
                                 <input class="form-control" type="email" value="{{$user->email}}" required id="email" name="email">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>                                  


                        <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Phone Number</b> </p>
                                 <input class="form-control" type="number" value="{{$user->phone}}"  required id="phone" name="phone">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>


                        <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>New Password</b> </p>
                                 <input class="form-control" type="password" id="password" name="password">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>                                                            


                        <div class="col-lg-12 col-sm-12 col-md-12 input-group float-left">
                            <div class="form-line">
                            <p class="m-t-10"> <b>Confirm Password</b> </p>
                                 <input class="form-control" type="password" id="confirm_password" name="confirm_password">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>                                                             
                                                            
                            
                            </div>
                        </div>
                    </div>

                    <div class="col-3">

                        <div class="card m-b-20">
                            <div class="card-body">

                                    <div class="form-group">
                                                <center><img src="{{asset('public/images/users/'.$user->id.'/'.$user->image)}}"></center>
                                    </div>

                                    <div class="form-group">
                                        <label>Profile Image</label>
                                        <input type="file" style="opacity: 1" name="file" class="filestyle" data-buttonname="btn-secondary">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Update</button>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->
                </form>

            </div>
        </div>

    </div>
</section>

@endsection()
@section('jsOutside')

@endsection()