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
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{$page_title}}</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="row clearfix">
      <div class="col-md-12">
        <a href="#" id="submit_customer_form" class="btn btn-success">Close</a>
        <a href="#" data-toggle="modal" data-target="#account_payment_modal" data-backdrop="false" class="btn btn-success">Add Payment</a>
        <a href="#" class="btn btn-success">View Unpaid</a>
        <a href="#" class="btn btn-success">View Paid</a>
        <a href="#" class="btn btn-success">View All</a>
        <a href="" class="btn btn-success">Print</a>
      </div>
    </div>
    
    
    <div class="card">
      <div class="card-body">
        <div class="col-md-12">
          <input type="text" readonly="" disabled="" value="test" class="form-control">
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="col-md-12">
          <table class="table table-bordered table-hovered">
          
              <thead>
              <tr>
                <th colspan="3">Payments & Credits</th>
                <th colspan="9">Accounts Invoices</th>
              </tr>
                <tr>
                  <th>No. / Date</th>
                  <th>Tot / Bal</th>
                  <th></th>
                  <th>Allocate</th>
                  <th>Doc No</th>                  
                  <th>Issue Date</th>
                  <th>Registration</th>
                  <th>Make / Model</th>
                  <th>Total</th>
                  <th>Receipts</th>                  
                  <th>Balance</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($payments as $pay)
                <tr>
                  <td style="text-align: right;">{{$pay->payment_id}}
                    <br>
                    {{$pay->date}}
                  </td>

                  <td style="text-align: right;">{{$pay->amount}}
                    <br>
                    {{$pay->amount}}
                  </td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#account_payment_modal" data-backdrop="false"  data-id="{{$pay->id}}" data-payment_id="{{$pay->payment_id}}" data-method="{{$pay->method}}" data-amount="{{$pay->amount}}"  data-date="{{$pay->date}}"  data-description="{{$pay->description}}" data-allocated="{{$pay->allocated}}" data-balance="{{$pay->balance}}" class="btn btn-info edit_payment">Open</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>


<div class="modal fade" id="account_payment_modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="defaultModalLabel">Account Payment: <span id="payment_id"></span></h4>
            </div>
            <div class="modal-body">
              <div class="col-lg-12 col-sm-12 col-md-12">

                      <a href="#" class="btn btn-success submit_payment_form">Save</a>
                      <a href="#" class="btn btn-success">Undo Allocations</a>
                      <a href="" id="delete_btn" class="btn btn-danger">Delete</a>

              </div>              

              <form method="post" id="payment_form" action="{{route('admin.save.payment')}}">
                 {{csrf_field()}}
                 <input type="hidden" name="selected_id" id="selected_id" value="{{NULL}}">
              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Method</label>
                  <select class="form-control show-tick" name="method">
                    <option value="amex">Amex</option>
                    <option value="bacs">BACS</option>                    
                    <option value="cash">Cash</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="paypal">Paypal</option>
                    <option value="personal_cheque">Personal Cheque</option>                                        
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Amount</label>
                  <input type="number" class="form-control" name="amount" id="amount">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Date</label>
                  <input type="date" class="form-control" name="date" id="date">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Description</label>
                  <input type="text" class="form-control" name="description" id="description">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Allocated</label>
                  <input type="text" class="form-control" name="allocated" id="allocated">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Balance</label>
                  <input type="text" class="form-control" name="balance" id="balance">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


            </form>

            </div>
            
          </form>
        </div>
      </div>
    </div>    
    

  
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript">
$('.add_new_alt_delivery').click(function(){
$('#div_1').hide();
$('#div_2').show();
});
$('.submit_payment_form').click(function(){
$('#payment_form').submit();
});


$('.edit_payment').click(function(){

var id = $(this).data('id');
var payment_id = $(this).data('payment_id');
var method = $(this).data('method');
var amount = $(this).data('amount');
var date = $(this).data('date');
var description = $(this).data('description');
var allocated = $(this).data('allocated');
var balance = $(this).data('balance');


    $('#payment_id').val(payment_id);
    $('#method').val(method);
    $('#amount').val(amount);
    $('#date').val(date);
    $('#description').val(description);
    $('#allocated').val(allocated);
    $('#balance').val(balance);
    $('#selected_id').val(id);

    $('#delete_btn').attr('href','{{route("admin.delete.payment")}}?id='+id)

});

</script>
@endsection()