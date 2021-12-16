  @extends('partials.default')

  @section('content')       
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>




          <div class="wrapper">
            <div class="container-fluid">
                <form method="post" action="{{route('user/save-profile')}}" enctype="multipart/form-data">
                <div class="row">

                {{csrf_field()}}
                <input type="hidden" name="uid" value="{{$user->uid}}">                    
                <div class="col-9">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Profile</h4>
                        
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$user->name}}" required id="name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{$user->email}}" required id="email" name="email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">

                                        <select class="form-control select2" id="gender" name="gender">
                                            <option>Select</option>
                                                @if($user->gender=='Male')
                                                <option selected="selected" value="Male">Male</option>
                                                @else
                                                <option value="Male">Male</option>
                                                @endif

                                                @if($user->gender=='Female')
                                                <option selected="selected" value="Female">Female</option>
                                                @else
                                                <option value="Female">Female</option>
                                                @endif
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="{{$user->phone}}"  required id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date of Birth</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" value="{{$user->dob}}"  required id="dob" name="dob">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Age</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$user->age}}"  required id="age" name="age" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Nic</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$user->nic}}"  required id="nic" name="nic">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{$user->address}}"  required id="address" name="address">
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                    </div>

                    <div class="col-3">

                        <div class="card m-b-20">
                            <div class="card-body">

                                    <div class="form-group">
                                        @if(empty($user->image))
                                                <center><img src="{{asset('public/assets/images/users/avatar-4.jpg')}}"></center>
                                        @else
                                                <center><img src="{{asset('public/images/users/'.$user->id.'/'.$user->image)}}"></center>                                        
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label>Profile Image</label>
                                        <input type="file" name="file" class="filestyle" data-buttonname="btn-secondary">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg btn-block waves-effect waves-light">Update</button>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->
                </form>
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



@endsection()

@section('jsOutside')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script type="text/javascript">
$("#nic").mask("00000-0000000-0");

$('#dob').change(function (){
dob = $(this).val();
dob = new Date(dob);
var today = new Date();
var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
$('#age').val(age+' years');
});

</script>

@endsection()
