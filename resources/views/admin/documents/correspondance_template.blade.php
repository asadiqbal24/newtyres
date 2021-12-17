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
                        <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>

                        <a href="#" data-backdrop="false" data-toggle="modal" data-target="#copyModal" class="btn btn-success">New</a>
                        <div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="get" action="{{route('admin.doc.template.correspondance_template_create')}}">
                                        {{csrf_field()}}

                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label class="col-md-12">Type / Name</label>
                                                    <input type="text" class="text-info" class="form-control" name="name" id="starting_from" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>

                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <p style="color: black;">Enable Print Option</p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="print" id="flexRadioDefault1" value="1" />
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="print" id="flexRadioDefault2" value="0" checked />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <p style="color: black;">Enable Email Option</p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email" id="flexRadioDefault1" value="1" />
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="email" id="flexRadioDefault2" value="0" checked />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <p style="color: black;">Enable SMS Option</p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sms" id="flexRadioDefault1" value="1" />
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="sms" id="flexRadioDefault2" value="0" checked />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">SAVE</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left:20px;">CLOSE</button>
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
                                            <th>Type / Name</th>
                                            <th>Print</th>
                                            <th>Email</th>
                                            <th>SMS</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <th>{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->print}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->sms}}</td>
                                           
                                            <td>     <a href="{{route('admin.doc.template.correspondance_template_edit',['id'=>$user->id])}}" type="button" class="btn btn-primary">Edit</a>
                                            <a href="{{route('admin.doc.template.correspondance_template_delete',['id'=>$user->id])}}" type="button" class="btn btn-danger">Delete</a>
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