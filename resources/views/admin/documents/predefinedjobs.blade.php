@extends('partials.default')
<style type="text/css">
    .alpha_pad {
        padding-left: 5px !important;
        padding-right: 5px !important;
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
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-danger">Close</button>

                        <a href="{{route('admin-new-predefined')}}" class="btn btn-success">New Job</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>Categories</th>
                                            <th>Job Code</th>
                                            <th>Descriptions</th>
                                            <th>Lab#</th>
                                            <th>Lab Sub</th>
                                            <th>Part#</th>
                                            <th>Part Sub</th>
                                            <th>Sub Total</th>
                                            <th>Action</th>
                                        </tr>
                                       

                                    </thead>
                                    <tbody>
                                        @php $i=1
                                        @endphp
                                         @foreach($job as $j)
                                         <tr>
                                             <td>{{$i++}}</td>
                                             <td>{{$j->category}}</td>
                                              <td>{{$j->job_code}}</td>
                                              <td>{{$j->description}}</td>
                                              <td>0</td>
                                               <td>0</td>
                                                <td>0</td>
                                                 <td>0</td>
                                                  <td>0</td>
                                                  <td><a href="{{route('admin-edit-predefined',['id'=>$j->id])}}" class="btn btn-success">Edit</a>
                                                  <a href="{{route('admin-predefined-delete',['id'=>$j->id])}}" class="btn btn-danger">Delete</a> </td>
                                         </tr>
                                         @endforeach()
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection() 



@section('jsOutside') @endsection()
