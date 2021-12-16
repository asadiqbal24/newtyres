@extends('partials.default')
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
            <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>
            <a href="{{route('admin-add-new-payment')}}" class="btn btn-success" >Add New Payment Method</a>
            
          </div>
        </div>
        
      </div>
    </div>









  <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          
          <div class="col-md-12">
            <table class="table table-bordered table-hovered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Group Type</th>
                   <th>Name</th>
                    <th>Bank Nominal</th>
                    <th>Active</th>
                    <th>Surcharge Applicable</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @php $i=1
                @endphp
                @foreach($payment as $p)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$p->group_type}}</td>
                   <td>{{$p->name}}</td>
                    <td>{{$p->bank_nominal}}</td>
                    <td>{{$p->active}}</td>
                    <td>{{$p->surcharge_applicable}}</td>
                    <td><a href="{{route('admin-payment-edit',['id'=>$p->id])}}" class="btn btn-success">Edit</a><a href="{{route('admin-payment-delete',['id'=>$p->id])}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach()
              </tbody>
             
            </table>
          </div>
</div>
</div>
</div>

















  	</div>
  </section>





  @endsection()