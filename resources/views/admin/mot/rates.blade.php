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
    <form method="post" action="{{route('admin-mote-rate-save')}}">
      {{csrf_field()}}
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-success">Save</button>
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
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Outsourced</td>
                  <td><button class="btn btn-danger btn-xs" disabled>X</button></td>
                </tr>
                <tr>
                  <td>Retail</td>
                  <td><button class="btn btn-danger btn-xs" disabled>X</button></td>
                </tr>
                <tr>
                  <td>Trade</td>
                  <td><button class="btn btn-danger btn-xs" disabled>X</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-9">
            
            <div class="row">
              <div class="col-md-8 input-group">
                <div class="form-line">
                  <label>Type</label>
                  <input type="text" name="type" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4">
                <button class="btn btn-success">Set As Default</button>
              </div>
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Description</label>
                  <input type="text" name="description" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-12 input-group">
                <label class="col-md-12">Total Gross</label>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-line">
                      <label>Full</label>
                      <input type="text" name="total_gross[]" class="form-control" >
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-4">
                    <div class="form-line">
                      <label>Retest</label>
                      <input type="text" name="total_gross[]" class="form-control" >
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-4">
                    <div class="form-line">
                      <label>Duplicate</label>
                      <input type="text" name="total_gross[]" class="form-control" >
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                </div>
              </div>



                  <div class="col-md-4  input-group">
                    <div class="form-line">
                      <label>Tax Code</label>
                      <input type="text" name="tax_code" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>      


                  <div class="col-md-4 input-group">
                
                  <div class="demo-checkbox">
                  <input type="checkbox" name="outsourced" value="1" id="md_checkbox_ousourced" class="chk-col-red" />
                  <label for="md_checkbox_ousourced">Outsourced</label>
                </div>
              
              </div>    


               <div class="col-md-4 input-group">
                
                  <a target="_blank" href="https://www.gov.uk/guidance/vat-guide-notice-700#mot-test-charges">HRMC Guidelines</a>
              
              </div>        
              <div class="col-md-4 input-group">
                
                  <div class="demo-checkbox">
                  <input type="checkbox" name="applytax" value="1" id="applytax" class="chk-col-red" />
                  <label for="applytax">Apply Tax To Total</label>
                </div>
              
              </div>
              <div class="col-md-12 input-group">
                <label class="col-md-12">Cost</label>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-line">
                      <label>Full</label>
                      <input type="text" name="cost[]" class="form-control" >
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-4">
                    <div class="form-line">
                      <label>Retest</label>
                      <input type="text" name="cost[]" class="form-control" >
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-4">
                    <div class="form-line">
                      <label>Duplicate</label>
                      <input type="text" name="cost[]" class="form-control" >
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                </div>
              </div>

              <div class="col-md-4 ">
                   <label>Technician</label>
                   <select class="form-control" name="technician">
               <option value="{{Null}}"> Choose</option>
                <option value="">Technicn1</option>
                   </select>
                 
                </div>
        <hr style="width: 100%">              
              </div>

              </form>

              <div class="row" style="margin-top:30px;">
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
    </div>
    
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script src="{{asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/advanced-form-elements.js')}}"></script>
@endsection()