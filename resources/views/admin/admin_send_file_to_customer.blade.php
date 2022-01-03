@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
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



<form method="post" action="{{route('admin-file-customer-save')}}" enctype="multipart/form-data">
	 {{csrf_field()}} 


    <div class="row clearfix">
      <div class="col-md-12">

          <a href="" class="btn btn-danger">Exist</a>
          <button  class="btn btn-success" type="submit">Save</button>          

      </div>
    </div>


			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 input-group">
							<div class="form-line">
								<label>Text</label>
								<input list="text" name="text" required class="form-control">
								<datalist id="text">
								
								</datalist>
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>
						
						
						
						
						<div class="col-md-3 input-group">
							<div class="form-line">
								<label>Upload File</label>
								<input type="file" required name="file"  class="form-control">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>
					</div>
					
				</div>
				
			</div>


</form>


    </div>
</section>




@endsection()