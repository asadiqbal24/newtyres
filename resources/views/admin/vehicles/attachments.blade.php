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

		<form method="post" action="{{route('admin.attach-documents')}}" enctype="multipart/form-data" id="submit_attachment">
			      {{csrf_field()}}
		
		<div class="row">
			
			<div class="col-lg-8">
				<div class="container">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 input-group">
									<div class="form-line">
										<label>Date</label>
										<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
									</div>
									<span class="input-group-addon"> <i></i> </span>
								</div>
								<div class="col-md-6 input-group">
									<div class="form-line">
										<label>Attach Documents </label>
										<input type="file" name="file" />
									</div>
									<span class="input-group-addon"> <i></i> </span>
								</div>
								<div class="col-md-12 input-group">
									<div class="form-line">
										<label>Notes </label>
										<textarea class="form-control" name="notes"> </textarea>
									</div>
									<span class="input-group-addon"> <i></i> </span>
								</div>
								
								
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-1">
				
			</div>
		</div>

		<div class="row clearfix" style="margin:0px;">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-4">
				<a id="submit_customer_form"  class="btn btn-success">Save</a>
				<a href="" class="btn btn-danger">Exit</a>
			</div>
		</div>


		</form>
		
	</div>
</section>


@endsection()

@section('jsOutside')
<script type="text/javascript">
$('#submit_customer_form').click(function(){
  $('#submit_attachment').submit();

});
</script>

@endsection()