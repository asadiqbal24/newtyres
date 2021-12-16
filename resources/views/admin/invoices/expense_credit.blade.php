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
    
    <div class="card">
      <div class="card-body row">
        
        <div class="col-md-12">
          <a href="{{route('admin.add.new.customer')}}" class="btn btn-success">Save</a>
          <a href="#" data-toggle="modal" data-target="#copyModal" data-backdrop="false" class="btn btn-success">Refund</a>
          <a href="{{route('admin.advanced_search')}}" class="btn btn-danger float-right">Delete</a>
        </div>
      </div>
    </div>


<div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form method="get" action="{{route('admin.new.invoice',['type'=>'new_invoice'])}}">
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Refund</h4>
            </div>
            <div class="modal-body"> 

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                            <button class="btn btn-danger" type="submit">Close</button>
                          </div>                          
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group" style="border: 1px solid grey;box-shadow: 0px 0px 10px 0px;padding: 35px;">
                              <h5>Oustanding Balance</label><br>
                              <h6>0.00</h6>
                          </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                              <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th>Transactions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>

                                      <td>Method</td>
                                      <td>Date</td>                                      
                                      <td>Amount</td>                                                                            
                                      <td>Note</td>                                                                                                                  
                                    </tr>
                                </tbody>

                              </table>

                            </div>

            </div>
            <div class="modal-footer">

            </div>
        </form>
        </div>
    </div>
</div>  

    
    <div class="card">
      <div class="card-body">
        <div class="row">
          
          <div class="col-md-6">
            
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Supplier</label>
                  <select class="form-control show-tick" name="supplier">
                    <option>Choose</option>
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Acc Number</label>
                  <input type="text" name="acc_number" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Contact Name</label>
                  <input type="text" name="contact_name" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <hr style="width: 100%">
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Address</label>
                  <input type="text" name="address[]" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <input type="text" name="address[]" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <input type="text" name="address[]" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <input type="text" name="address[]" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Post Code</label>
                  <input type="text" name="post_code" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Fax</label>
                  <input type="text" name="fax" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Invoice Date</label>
                  <input type="date" name="invoice_date" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Invoice Number</label>
                  <input type="date" name="invoice_number" placeholder="Optional" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Nominal Category</label>
                  <select class="form-control show-tick" name="nominal_category">
                    <option>Choose</option>
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Nominal Code</label>
                  <select class="form-control show-tick" name="nomical_code">
                    <option value="5000">5000 | General</option>
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <hr style="width: 100%">
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Reference</label>
                  <input type="text" name="reference" placeholder="Optional" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Description <small>Optional</small></label>
                  <input type="text" name="description" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <hr style="width: 100%">
            </div>
            <div class="row">
              <div class="col-md-4 input-group">
                <h6>Calc Net from Gross</h6>
                <div class="row">
                  <div class="col-md-12 input-group">
                    <div class="form-line">
                      <label>T Code</label>
                      <select class="form-control show-tick" name="t_code">
                        <option>T0 VAT Free 0%</option>
                        <option>T1 EXC VAT 20%</option>
                        <option>T5 Custom 20%</option>
                      </select>
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-12 input-group">
                    <div class="form-line">
                      <label>Gross</label>
                      <select class="form-control show-tick" name="nominal_category">
                        <option>Choose</option>
                      </select>
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                </div>
              </div>
              <div class="col-md-8 input-group">
                <div class="row">
                  <div class="col-md-12 input-group">
                    <div class="form-line">
                      <label>Net</label>
                      <input type="text" name="net" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>VAT</label>
                    
                    <div class="row">
                      <div class="col-md-3">
                        <select class="form-control show-tick" name="nominal_category">
                          <option>T0 VAT Free 0%</option>
                          <option>T1 EXC VAT 20%</option>
                          <option>T5 Custom 20%</option>
                        </select>
                      </div>
                      <div class="col-md-9 input-group">
                        <div class="form-line">
                          <input type="text" name="vat" class="form-control">
                        </div>
                        <span class="input-group-addon"> <i></i> </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 input-group">
                    <label>Gross</label>
                    <div class="form-line">
                      <input type="text" name="gross_net" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <hr style="width: 100%">
        </div>


        <div class="row">
                  <div class="col-md-8"></div>
                  <div class="col-md-4 input-group">
                    <label>Receipts</label>
                    <div class="form-line">
                      <input type="text" name="receipts" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                </div>
        <div class="row">
                  <div class="col-md-8"></div>
                  <div class="col-md-4 input-group">
                    <label>Balance</label>
                    <div class="form-line">
                      <input type="text" name="balance" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
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
@endsection()