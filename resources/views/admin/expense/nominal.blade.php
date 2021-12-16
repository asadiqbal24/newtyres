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
            <button class="btn btn-success">New</button>
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          
          <div class="col-md-6">
            <table class="table table-bordered table-hovered">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Code</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            
            <div class="row">
              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Category</label>
                  <select class="form-control show-tick">
                    
                    <option>General</option>
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Description</label>
                  <input type="text" name="description" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Code</label>
                  <input type="text" name="code" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>



              <div class="col-md-6 input-group">
                

                
                  <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_active" class="chk-col-red" checked />
                  <label for="md_checkbox_active">Active</label>
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