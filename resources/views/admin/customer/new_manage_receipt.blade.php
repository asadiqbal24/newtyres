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
select { text-align-last:center; }
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
						<li class="breadcrumb-item"><a href="">New Manage Receipt</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12">
				<a href="" class="btn btn-success">Close</a>
				<a   data-backdrop="false" data-toggle="modal" data-target="#copyModal" class="btn btn-success">Add Payment</a>
				<a href="" class="btn btn-success">View UnPaid</a>
				<a href="" class="btn btn-success">View Paid</a>
				<a href="" class="btn btn-success">View All</a>
				<a href="" class="btn btn-success">Print</a>
			</div>
		</div>
		<div class="row clearfix" style="margin-bottom:30px;">
			<div class="col-md-12">
				<div>
					<label>Account Number</label><label style="
					margin-left: 6.6rem;
				">Company Name</label>
			</div>
			<input type="text" readonly name="id" style="background-color: #395f72;
			color: white;    text-align: center;" value="{{isset($customer_account->customer)?$customer_account->customer->account_number:''}}">
			<input type="text" readonly name="id" style="background-color: #395f72;
			color: white; text-align: center;" value="{{isset($customer_account->customer)?$customer_account->customer->company:''}}">
		</div>
		
	</div>
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4">
							<label>Payment & Credit</label>
						</div>
						<div class="col-lg-6">
							<label>Account Invoice</label>
						</div>
					</div>
					
					<table class="table table-bordered">
						
						<thead>
							
							<tr>
								<th>No / Date</th>
								<th>Total Balance</th>
								<th></th>
								<th>Allocate</th>
								<th>Doc No</th>
								<th>Issue Date</th>
								<th>Registration</th>
								<th>Make Model</th>
								<th>Total</th>
								<th>Receipts</th>
								<th>Balance</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach($payment as $p)
							<tr>
								<td>{{$p->payment_id}} <div style="margin-top:10px;">{{$p->date}}</div></td>
								<td style="text-align:center;">{{$p->balance}}</td>
								<td><a href="#"  data-backdrop="false" data-toggle="modal" data-target="#editPayment" data-id='{{$p->id}}' data-amount='{{$p->amount}}' data-date='{{$p->date}}' data-description='{{$p->description}}' data-payment_id='{{$p->payment_id}}'  onclick="editForm(this)" class="btn btn-primary">Open</a></td>
							</tr>
							@endforeach()
						</tbody>
						<tbody>
							
							
						</tbody>
					</table>
					
				</div>
				
				
			</div>
		</div>
	</div>
	<div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			
			<div class="modal-content">
				<div class="row">
					<div class="col-md-6">
						<label style="    color: black;
							font-size: 15px;
							font-weight: bold;
							margin-left: 40px;
						margin-top: 20px;" >Account Payment:</label>
					</div>
					<div class="col-lg-6">
						
					</div>
				</div>
				
				<form method="post" action="{{route('admin-payment-save')}}">
					{{csrf_field()}}
				
				
					<input type="hidden" name="customer_id" value="{{$customer_account->customer_id}}">
					
					<div class="modal-body">
						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Method</label>
								<select name="payment_method"  class="form-control show-tick">


									<option style="text-align:center!important;" value="Amex">AMEX</option>
									<option style="text-align:center!important;" value="BACS">BACS</option>
									<option style="text-align:center!important;" value="BusinessCheck">Business Check</option>
									
									<option style="text-align:center!important;" value="Cash">Cash</option>
									<option style="text-align:center!important;" value="CreditCard">Credit Card</option>
									<option style="text-align:center!important;" value="DebitCard">Debit Card</option>
									<option style="text-align:center!important;" value="Paypal">Paypal</option>
									<option style="text-align:center!important;" value="PersonalCheque">Personal Cheque</option>
									
								</select>
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>
						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Amount</label>
								<input type="number" required class="form-control" style="color: black !important;;" name="amount" id="starting_from">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Date</label>
								<input type="date" value="<?php echo date('Y-m-d'); ?>" required class="form-control" style="color: black !important;;" name="date" >
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Description</label>
								<input type="text" required class="form-control" style="color: black !important;;" name="description" >
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" style="    background-color: black;" class="btn btn-link waves-effect">SAVE</button>
						<button type="button" style="    background-color: #1f1b46;
						margin-left: 10px;" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
			</div>
		</div>
	</div>






	<div class="modal fade" id="editPayment" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			
			<div class="modal-content">
				<div class="row">
					<div class="col-md-6">
						<label style="    color: black;
							font-size: 15px;
							font-weight: bold;
							margin-left: 40px;
						margin-top: 20px;" >Account Payment:</label>
					</div>
					<div class="col-lg-6" style="    margin-top: 21px;">
						<input type="tex" style="border: none;" name="payment_id" id="payment_id">
					</div>
				</div>
				
				<form method="post" action="{{route('admin-payment-update')}}">
					{{csrf_field()}}
				
				
					<input type="hidden" name="id"  id="id">
					
					<div class="modal-body">
						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Method</label>
								<select name="payment_method"  class="form-control show-tick">


									<option style="text-align:center!important;" value="Amex">AMEX</option>
									<option style="text-align:center!important;" value="BACS">BACS</option>
									<option style="text-align:center!important;" value="BusinessCheck">Business Check</option>
									
									<option style="text-align:center!important;" value="Cash">Cash</option>
									<option style="text-align:center!important;" value="CreditCard">Credit Card</option>
									<option style="text-align:center!important;" value="DebitCard">Debit Card</option>
									<option style="text-align:center!important;" value="Paypal">Paypal</option>
									<option style="text-align:center!important;" value="PersonalCheque">Personal Cheque</option>
									
								</select>
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>
						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Amount</label>
								<input type="number" id="amount" required class="form-control" style="color: black !important;;" name="amount" id="starting_from">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Date</label>
								<input type="date" id="date"  required class="form-control" style="color: black !important;;" name="date" >
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

						<div class="col-lg-12 col-sm-12 col-md-12 input-group">
							<div class="form-line">
								<label class="col-md-12">Description</label>
								<input type="text" id="description" required class="form-control" style="color: black !important;;" name="description" >
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" style="    background-color: black;" class="btn btn-link waves-effect">SAVE</button>
						<button type="button" style="    background-color: #1f1b46;
						margin-left: 10px;" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>


<script type="text/javascript">
	
function editForm(aid)
{
	id = $(aid).data("id");
	$('#id').val(id);

	amount = $(aid).data("amount");
	$('#amount').val(amount);
	date = $(aid).data("date");
	$('#date').val(date);

	description = $(aid).data("description");
	$('#description').val(description);

		payment_id = $(aid).data("payment_id");
	$('#payment_id').val(payment_id);

}

</script>

@endsection()