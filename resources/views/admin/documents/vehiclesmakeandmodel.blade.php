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
                <div class="row clearfix" style="margin:0px;">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <a href="{{route('admin.dashboard')}}" class="btn btn-danger" >Close</a>

                        <a href="#" data-backdrop="false" data-toggle="modal" data-target="#copyModal" class="btn btn-success">New</a>
                        <div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="get" action="{{route('admin.doc.template.vehiclesmakeandmodel_create')}}">
                                        {{csrf_field()}}

                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group" style="margin-top:10px;">
                                                <div class="form-line">
                                                    <label> Make</label>
                                                    <br>
                                                    <input type="text" class="text-info" class="form-control" name="make" id="starting_from" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>

                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label> Model</label>
                                                    <br>
                                                    <input type="text" class="text-info" class="form-control" name="model" id="starting_from" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label> Type</label>                                                    
                                                    <select class="form-control show-tick" name="sellect">
                                                        <option value="Car">Car</option>
                                                        <option value="Motorcycle">Motorcycle</option>
                                                        <option value="Truck">Truck</option>
                                                    </select>
                                                </div>

                                                <span class="input-group-addon"> <i></i> </span>
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
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Type</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1
                                        @endphp
                                        @foreach($vehicles as $v)
                                        <tr>
                                            <th>{{$i++}}</th>
                                            <td>{{$v->name}}</td>
                                            <td></td>
                                            <td>{{$v->type}}</td>

                                            <td>

                                                     <a href="javascript:void(0)" data-id="{{$v->id}}" data-make="{{$v->name}}" data-model="" data-type="{{$v->type}}" data-edittype="make" data-toggle="modal" data-target="#editModal" data-backdrop="false" type="button" class="btn btn-primary editModal">Edit</a>

                                                <a href="{{route('admin.doc.template.vehiclesmakeandmodel_delete',['id'=>$v->id,'type'=>'make'])}}" type="button" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                            @foreach($v->vehicle_models as $vm)

                                                     <tr>
                                                    <th>{{$i++}}</th>
                                                    <td>{{$v->name}}</td>
                                                    <td>{{$vm->model}}</td>
                                                    <td>{{$vm->type}}</td>

                                                    <td>
                                                        <a href="javascript:void(0)" data-id="{{$v->id}}" data-make="{{$v->name}}" data-model="{{$vm->model}}" data-type="{{$vm->type}}" data-edittype="model" data-toggle="modal" data-target="#editModal" data-backdrop="false" type="button" class="btn btn-primary editModal">Edit</a>


                                                        <a href="{{route('admin.doc.template.vehiclesmakeandmodel_delete',['id'=>$vm->id,'type'=>'model'])}}" type="button" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>

                                            @endforeach 
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>



                <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document" style="margin-top:10%;">
                                <div class="modal-content">
                                    <form method="get" action="{{route('admin.doc.template.vehiclesmakeandmodel_edit_save')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="editId" id="editId">
                                        <input type="hidden" name="type" id="type">
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group" >
                                                <div class="form-line">
                                                    <label> Make</label>
                                                    <br>
                                                    <input type="text" class="text-info" id="editMake" class="form-control" name="make" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>

                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label> Model</label>
                                                    <br>
                                                    <input type="text" class="text-info" class="form-control" name="model" id="editModel" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label> Type</label>                                                    
                                                    <select class="form-control show-tick" name="sellect" id="editType">
                                                        <option value="Car">Car</option>
                                                        <option value="Motorcycle">Motorcycle</option>
                                                        <option value="Truck">Truck</option>
                                                    </select>
                                                </div>

                                                <span class="input-group-addon"> <i></i> </span>
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
    </div>
</section>
@endsection()


 @section('jsOutside') 


 <script type="text/javascript">
     

    $('.editModal').click(function(){


        $('#editId').val($(this).data('id'));
        $('#editMake').val($(this).data('make'));
        $('#editModel').val($(this).data('model'));
        $('#editType').val($(this).data('type'));
        $('#type').val($(this).data('edittype'));
        editType
    })

 </script>


 @endsection()
