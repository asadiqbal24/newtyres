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
    <form method="post" action="{{route('admin-tax-rates-save')}}">
       {{csrf_field()}}
    
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>
            <button class="btn btn-success" >Save</button>
            
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
                  <th>Code</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tax as $t)
                <tr>
                  <td>{{$t->tax_code}}</td>
                  <td>{{$t->description}}</td>
                  <td><a href="{{route('admin-taxes-rate-edit',['id'=>$t->id])}}" class="btn btn-success">Edit</a>
                    <a href="{{route('admin-tax-rate-delete',['id'=>$t->id])}}" class="btn btn-danger btn-xs" >X</button></td>
                </tr>
                @endforeach()
                
                
              </tbody>
            </table>
          </div>
          <div class="col-md-9">
            
            <div class="row">
              <div class="col-md-8 input-group">
                <div class="form-line">
                  <label>Tax Code</label>
                  <input type="text"  name="tax_code" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4">
                <button class="btn btn-success">Set As Default</button>
              </div>
              <div class="col-md-8 input-group">
                <div class="form-line">
                  <label>Description</label>
                  <input type="text" name="description" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Rate</label>
                  <input type="text" name="rate" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

          <hr style="width: 100%">              
              </div>

              <div class="row">
          <div class="col-md-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.>
          </div>
        </div>
              
            </div>
          </div>

        </div>
        
      </div>


      </form>
    </div>
    
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script src="{{asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@endsection()