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

                        <a href="#" data-backdrop="false" data-toggle="modal" data-target="#copyModal" class="btn btn-success">New</a>
                        <div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="get" action="{{route('admin.doc.template.technicians_create')}}">
                                        {{csrf_field()}}
                                    
                                        
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label class="col-md-12">Employee Name</label>
                                                    <input type="text" class="text-info" class="form-control" name="Employee_name" id="starting_from" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label class="col-md-12">Initials</label>
                                                    <input type="text" class="text-info" class="form-control" name="initials" id="starting_from" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>
                                       

                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                               <p style="color:black"> Moteester </p>
                                            <div class="form-check">
  <input class="form-check-input" type="radio" name="mottester" id="flexRadioDefault1" value="1">
  <label class="form-check-label" for="flexRadioDefault1">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="mottester" id="flexRadioDefault2" value="0" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    No
  </label>
</div>
                                            </div>
                                        </div>

                                       
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">SAVE</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left:10px;">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                id
                                            </th>
                                            <th>Employee Name</th>
                                            <th> Initials </th>
                                          
                                            <th>Mot Tester</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <th>{{$user->id}}</th>
                                            <td>{{$user->Employee_name}}</td>
                                            <td>{{$user->initials}}</td>
                                            <td>{{$user->mottester}}</td>
                            
                                            <td>     <a href="{{route('admin.doc.template.technicians_edit',['id'=>$user->id])}}" type="button" class="btn btn-primary">Edit</a>
                                            <a href="{{route('admin.doc.template.technicians_delete',['id'=>$user->id])}}" type="button" class="btn btn-danger">Delete</a>
                                       </td>
                                        </tr>
                                        @endforeach

                                    
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
@endsection() @section('jsOutside') @endsection()
