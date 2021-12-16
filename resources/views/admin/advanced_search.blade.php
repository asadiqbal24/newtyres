@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
.input-group-prepend {
position: absolute;
right: 6px;
top: 50%;
transform: translateY(-50%);
}
.bg-deep-purple{
background-color: purple;
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
            <li class="breadcrumb-item"><a style="color: white !important;" href="#"><strong>Advanced Search</strong>: Searches <strong>documents</strong> and returns results to Customers List</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="row clearfix">
      <div class="col-md-12">
        <a href="#" class="btn btn-success" id="search_btn">Search</a>
        <a href="#" class="btn btn-success">Add Criteria</a>
        <a href="#" class="btn btn-success">Cancel</a>
        <a href="#" class="btn btn-success" style="float: right;">Techniques</a>        




      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
          <form method="get" action="{{route('admin.customers')}}" id="search_form">
              
            <div class="row">
          <div class="col-md-6">
            
            
            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Doc No</label>
                  <input type="text" name="doc_no" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <select class="form-control show-tick" name="type">
                    <option selected="selected">Type</option>
                    <option>Invoice</option>
                    <option>Estimate</option>
                    <option>Job Sheet</option>
                    <option>Credit Note</option>
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Creation Date</label>                  
                  <input type="date" name="creation_date" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3">
                
                <select name="created_date_range" class="form-control show-tick">
                  <option value="{{NULL}}" selected="selected">Date Range</option>
                  <optgroup>
                    <option value="yesterday">Yesterday</option>
                    <option value="today">Today</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_week">Last Week</option>
                    <option value="this_week">This Week</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_month">Last Month</option>
                    <option value="this_month">This Month</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_quarter">Last Quater</option>
                    <option value="this_quarter">This Quater</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_ytd">Last YTD</option>
                    <option value="this_ytd">This YTD</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_year">Last Year</option>
                    <option value="this_year">This Year</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_financial_year">Last Financial Year</option>
                    <option value="this_financial_year">This Financial Year</option>
                  </optgroup>
                  
                </select>
              </div>


            </div>
            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                <label>Issue Date</label>
                  <input type="date" name="issued_date" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-3">
                
                <select name="issued_date_range" class="form-control show-tick">
                  <option value="{{NULL}}" selected="selected">Date Range</option>
                  <optgroup>
                    <option value="yesterday">Yesterday</option>
                    <option value="today">Today</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_week">Last Week</option>
                    <option value="this_week">This Week</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_month">Last Month</option>
                    <option value="this_month">This Month</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_quarter">Last Quater</option>
                    <option value="this_quarter">This Quater</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_ytd">Last YTD</option>
                    <option value="this_ytd">This YTD</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_year">Last Year</option>
                    <option value="this_year">This Year</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_financial_year">Last Financial Year</option>
                    <option value="this_financial_year">This Financial Year</option>
                  </optgroup>
                  
                </select>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                <label>Payment Date</label>
                  <input type="date" name="payment_date" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-3">
                
                <select name="payment_date_range" class="form-control show-tick">
                  <option value="{{NULL}}" selected="selected">Date Range</option>
                  <optgroup>
                    <option value="yesterday">Yesterday</option>
                    <option value="today">Today</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_week">Last Week</option>
                    <option value="this_week">This Week</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_month">Last Month</option>
                    <option value="this_month">This Month</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_quarter">Last Quater</option>
                    <option value="this_quarter">This Quater</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_ytd">Last YTD</option>
                    <option value="this_ytd">This YTD</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_year">Last Year</option>
                    <option value="this_year">This Year</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_financial_year">Last Financial Year</option>
                    <option value="this_financial_year">This Financial Year</option>
                  </optgroup>
                  
                </select>
              </div>


            </div>
            

            <div class="row">
              <div class="col-md-3">
                <select name="deparment" class="form-control show-tick">
                  <option selected="selected">Department</option>
                </select>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Order Ref</label>
                  <input type="text" name="order_ref" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Total Gross</label>
                  <input type="text" name="total_gross" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Total Discount</label>
                  <input type="text" name="total_discount" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

            </div>

            <div class="row">
              <hr style="width: 100%">
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Work Description</label>
                  <input type="text" name="work_description" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              
              <hr style="width: 100%">
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Item Type</label>
                  <input type="radio" checked="checked" id="md_checkbox_1" name="item_type" style="border: 2px solid #f8f8f8 !important" value="all" class="chk-col-red toggle_part_number"  />
                  <label for="md_checkbox_1">All</label>
                  <input type="radio" id="md_checkbox_2" name="item_type" style="border: 2px solid #f8f8f8 !important" value="labour" class="chk-col-red toggle_part_number"  />
                  <label for="md_checkbox_2">Labour</label>
                  <input type="radio" id="md_checkbox_3" name="item_type" style="border: 2px solid #f8f8f8 !important" value="parts" class="chk-col-red toggle_part_number"  />
                  <label for="md_checkbox_3">Parts</label>
                  <input type="radio" id="md_checkbox_4" name="item_type" style="border: 2px solid #f8f8f8 !important" value="advisories" class="chk-col-red toggle_part_number"  />
                  <label for="md_checkbox_4">Advisories</label>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 input-group" id="part_number">
                <div class="form-line">
                  <label>Part Number</label>
                  <input type="text" name="part_number" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Description</label>
                  <input type="text" name="part_description" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Technician</label>
                  <input type="text" name="technician" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>  

            </div>
            
            <div class="row">
              <hr style="width: 100%">
            </div>
            <div class="row" id="part_number">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Supplier</label>
                  <input type="text" name="supplier" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Purchase Date</label>
                  <input type="date" name="purchase_date" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3">
                
                <select name="purchase_date_range" class="form-control show-tick">
                  <option value="{{NULL}}" selected="selected">Date Range</option>
                  <optgroup>
                    <option value="yesterday">Yesterday</option>
                    <option value="today">Today</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_week">Last Week</option>
                    <option value="this_week">This Week</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_month">Last Month</option>
                    <option value="this_month">This Month</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_quarter">Last Quater</option>
                    <option value="this_quarter">This Quater</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_ytd">Last YTD</option>
                    <option value="this_ytd">This YTD</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_year">Last Year</option>
                    <option value="this_year">This Year</option>
                  </optgroup>
                  <optgroup>
                    <option value="last_financial_year">Last Financial Year</option>
                    <option value="this_financial_year">This Financial Year</option>
                  </optgroup>
                  
                </select>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Supplier Invoice</label>
                  <input type="text" name="supplier_invoice" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

            </div>
            
          
            <div class="row">              
              <hr style="width: 100%">
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-line">
                
                <select name="mot" class="form-control show-tick">
                  <optgroup><option value="{{NULL}}" selected="selected">MOT</option></optgroup>
                  <optgroup>
                    <option value="full">Full</option>
                    <option value="retest">Retest</option>
                    <option value="duplicate">Duplicate</option>
                  </optgroup>
                </select>
                <span class="input-group-addon"> <i></i> </span>
              </div>
             </div>

             <div class="col-md-4">
                <div class="form-line">                
                <select name="mot_class" class="form-control show-tick">
                  <option value="{{NULL}}" selected="selected">MOT Class</option>
                  <optgroup>
                    <option value="oursourced">OURSOURCED</option>
                    <option value="retail">RETAIL</option>
                    <option value="trade">TRADE</option>
                  </optgroup>
                </select>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>

            <div class="col-md-4">
                <div class="form-line">                
                <select name="mot_tester" class="form-control show-tick">
                  <optgroup>
                    <option value="{{NULL}}">MOT Tester</option>
                  </optgroup>
                </select>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>

            </div>            
          </div>
          
          <div class="col-md-6" style="border-left: 1px solid;">
            
            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Acc Number</label>
                  <input type="text" name="acc_number" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Company</label>
                  <input type="text" name="acc_number" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Name</label>
                  <input type="text" name="acc_number" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Road</label>
                  <input type="text" name="road" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
 
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Town</label>
                  <input type="text" name="town" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

               <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>County</label>
                  <input type="text" name="county" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Post Code</label>
                  <input type="text" name="county" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>



            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Mobile</label>
                  <input type="text" name="mobile" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Email</label>
                  <input type="text" name="mobile" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">


                  <select name="referal" class="form-control show-tick">
                    <option value="{{NULL}}" selected="selected">Referrals</option>
                  <optgroup>
                    <option>EC Existing Customer</option>
                  </optgroup>
                </select>


                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Registration</label>
                  <input type="text" name="registration" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Make</label>
                  <input type="text" name="make" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Model</label>
                  <input type="text" name="make" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Chassis Number</label>
                  <input type="text" name="chassis_number" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Engine Code</label>
                  <input type="text" name="engine_code" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Engine No</label>
                  <input type="text" name="engine_no" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>

            <div class="row">              
              <hr style="width: 100%">
            </div>
            <div class="row">
              <div class="col-md-4 input-group">
                

                <div class="form-line">
                  <select name="qc_technician" class="form-control show-tick">
                    <option value="{{NULL}}" selected="selected">QC Technician</option>
                  <optgroup>
                    <option>EC Existing Customer</option>
                  </optgroup>
                </select>
                </div>


                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                
                <div class="form-line">
                  <select name="road_tester" class="form-control show-tick">
                    <option value="{{NULL}}" selected="selected">Road Tester</option>
                  <optgroup>
                    <option></option>
                  </optgroup>
                </select>
                </div>

                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-4 input-group">
               
                <div class="form-line">
                  <select name="sales_advisor" class="form-control show-tick">
                    <option value="{{NULL}}" selected="selected">Sales Advisor</option>
                  <optgroup>
                    <option>EC Existing Customer</option>
                  </optgroup>
                </select>
                </div>

                <span class="input-group-addon"> <i></i> </span>
              </div>


            </div>
          </div>
        </div>

          </form>
      </div>
    </div>
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript">
$('.toggle_part_number').click(function(){
if($(this).val()=='all' || $(this).val()=='parts'){
$('#part_number').show();
}else{
$('#part_number').hide();
}
})


$('#search_btn').click(function(){
  $('#search_form').submit();  
})



</script>
@endsection()