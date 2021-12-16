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
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          
          <div class="col-md-8">
            <table class="table table-bordered table-hovered">
              <thead>
                <tr>
                  <th></th>
                  <th style="text-align: center;">Standard</th>
                  <th style="text-align: center;">Account</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Labour</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="labour_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="labour_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Labour (Sublet)</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="labour_sublet_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="labour_sublet_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Parts</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="parts_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="parts_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>MOT</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="mot_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="mot_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>MOT (sublet)</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="mot_sublet_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="mot_sublet_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>Sundries</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="sundries_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="sundries_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Lubricants</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="lubricants_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="lubricants_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Paint & Mat.</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="paint_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="paint_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>Excess</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="excess_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="excess_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>Vehicle Part Exchange</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="vehicle_exchange_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="vehicle_exchange_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>


                <tr>
                  <td>Vehicle Purchase</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="vehicle_purchase_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="vehicle_purchase_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>Vehicle Sale</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="vehicle_sale_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="vehicle_sale_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>SURCHARGE</td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="surcharge_standard" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                  <td style="width: 25%;text-align: center;">
                    
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <input type="text" name="surcharge_account" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-4">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.l
            </p>
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