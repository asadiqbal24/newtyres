@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
@section('content')
<!-- Main Content -->
<section class="content home">
  <div class="container-fluid">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
          <h2>Dashboard</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{$page_title}}</a></li>
          </ul>
        </div>
      </div>
    </div>
     <form method="post" action="{{route('new-employee-save')}}" enctype="multipart/form-data">
       {{csrf_field()}}
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <button class="btn btn-danger">Close</button>
            <button class="btn btn-success" type="submit">Save</button>
            
          </div>
        </div>
        
      </div>
    </div>
   
    <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          <div class="col-md-3">
          
              <table class="table table-bordered table-hovered">
                  <thead>
                    <tr>
                      <th colspan="2">Employee</th>
                    </tr>
                  </thead>  

                  <tbody>
                    @foreach($data as $d)
                    <tr>
                       <td width="100px">{{$d->employee_name}}</td> 
                       <td width="20px">
                         
                         <a href=""><i class="zmdi zmdi-device-hub" aria-hidden="true"></i></a>
                         <a href=""><i class="zmdi zmdi-settings"></i></a>
                         <a href="" class="btn btn-danger btn-xs"><i class="zmdi zmdi-delete"></i></a>


                       </td>                        
                    </tr>
                    @endforeach
                  </tbody>
              </table>

          </div>
          <div class="col-md-9" id="add_new_employee">
            <div class="row">
              <div class="col-md-10 input-group">
                <div class="form-line">
                  <label>Employee Name</label>
                  <input type="text" name="employee_name" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-2 input-group">
                <div class="form-line">
                  <label>Initials</label>
                  <input type="text" name="initials" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <hr style="width: 100%">
            </div>
            <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#emergency">Emergency</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#training">Training</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#confidential">Confidential</a></li>
                  </ul>

                </div>

                <div class="col-md-12">
                <div class="tab-content">
                <div role="tabpanel" class="tab-pane animated flipInX active" id="contact">
                  @include('admin.technicians.contact')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="emergency">
                  @include('admin.technicians.emergency')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="training">
                  @include('admin.technicians.training')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="confidential">
                  @include('admin.technicians.confidential')
                </div>
                
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    
    </form>
  </div>
</section>
@endsection()
@section('jsOutside')
@endsection()