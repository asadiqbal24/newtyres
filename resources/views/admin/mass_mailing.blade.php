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

    <div class="row clearfix">
      <div class="col-md-12">

          <a href="" class="btn btn-danger">Exist</a>
          <a href="{{route('admin-send-file-to-customer')}}" class="btn btn-success">Send File To Customer</a>          

      </div>
    </div>


    <div class="card">
      <div class="card-body">
        <div class="row">
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>#</th>
                <th>Customer Name</th>
                <th>Account Number</th>
                <th>Mobile Number</th>
                <th>Country</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php $i=1
              @endphp
              @foreach($customer as $c)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$c->first_name}} {{$c->middle_name}} {{$c->last_name}}</td>
                <td>{{$c->account_number}}</td>
                <td>{{$c->mobile}}</td>
                <td>{{$c->county}}</td>
                <td>{{$c->email}}</td>
                <td><a href="{{route('admin-cutomer-delete',['id'=>$c->id])}}" class="btn btn-success">Delete</a></td>
              </tr>
              @endforeach()
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection()