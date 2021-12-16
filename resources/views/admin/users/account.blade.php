@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
<link href="{{asset('public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet" />
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
    
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <button class="btn btn-danger">Close</button>
            <button class="btn btn-success">New User</button>
            
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
                  <th>Account</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_1" class="chk-col-red" checked />
                  <label for="md_checkbox_1">Auto Logout</label>
                </div>
              </div>
              <div class="col-md-6">
                <label>After (minutes)</label>
                <select class="form-control show-tick">
                  <option>2 mins</option>
                  <option>5 mins</option>
                  <option>10 mins</option>
                  <option>15 mins</option>
                  <option>20 mins</option>
                  <option>30 mins</option>
                  <option>60 mins</option>
                </select>
              </div>
              <hr style="width: 100%;">
            </div>
            <div class="row">
              <div class="col-md-9 input-group">
                <div class="form-line">
                  <label>Display Name</label>
                  <input type="text" name="display_name" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3">
                <button type="button" class="btn btn-danger">Login Credentials</button>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12 input-group">
                  <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_2" class="chk-col-red" checked />
                  <label for="md_checkbox_2">Account Active</label>
                </div>
              </div>  

              <hr style="width: 100%;">
            </div>

            <div class="row">
              <div class="col-md-12 input-group">
                  <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_3" class="chk-col-red" />
                  <label for="md_checkbox_3">System Administrative <small>No restrictions / ability to override locked records.</small></label>
                </div>
              </div>  

              <hr style="width: 100%;">
            </div>

            <div class="row">

              <div class="col-md-12">
                <button class="btn btn-primary">Presets</button>
                <button class="btn btn-info">Full Access</button>                
                <button class="btn btn-info">Manager</button>
                <button class="btn btn-info">Advanced</button>
                <button class="btn btn-info">General</button>
                <button class="btn btn-info">View Only</button>
              </div>

            </div>



            <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#settings">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#access_restrictions">Access Restrictions</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#record_restrictions">Record Restrictions</a></li>
                  </ul>

                </div>

                <div class="col-md-12">
                <div class="tab-content">
                <div role="tabpanel" class="tab-pane animated flipInX active" id="settings">
                  @include('admin.users.settings')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="access_restrictions">
                  @include('admin.users.access_restrictions')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="record_restrictions">
                  @include('admin.users.record_restrictions')
                </div>
                
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script src="{{asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@endsection()