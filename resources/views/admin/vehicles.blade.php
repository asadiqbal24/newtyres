@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
<link href="{{asset('public/assets/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@section('content')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.vehicles')}}">Vehicles</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                        <h4>Vehicles List</h4>
                        <a href="javascript:void(0);" data-toggle="modal" data-backdrop="false" data-target="#defaultModal" class="btn btn-raised btn-success waves-effect float-right"><i class="zmdi zmdi-plus"></i> Add Vehicle</a>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form method="post" action="{{route('admin.vehicle.save')}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="defaultModalLabel">Add Vehicle</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                            <label>Type</label>
                                                            <select name="type" class="form-control show-tick">
                                                                <option value="car">Car</option>
                                                                <option value="motorcycle">Motorcycle</option>
                                                                <option value="truck">Truck</option>
                                                            </select>
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                            <label>Image</label>
                                                            <input type="file" class="form-control" name="file" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                            <label>Description</label>
                                                            <textarea type="text" class="form-control" name="desc"></textarea>
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form method="post" action="{{route('admin.vehicle.update')}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" id="edit_id">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="defaultModalLabel">Add Vehicle</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name" id="edit_name" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>
                                                    <select name="type" class="form-control show-tick">
                                                        <option value="car">Car</option>
                                                        <option value="motorcycle">Motorcycle</option>
                                                        <option value="truck">Truck</option>
                                                    </select>
                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                            <label>Image</label>
                                                            <input type="file" class="form-control" name="file">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                            <label>Description</label>
                                                            <textarea type="text" class="form-control" name="edit_desc" id="edit_desc"></textarea>
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Desc.</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Desc.</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($vehicles as $v)
                                        <tr>
                                            <td><img src="{{$v->image}}" style="width: 100px;height: 100px;"></td>
                                            <td>{{$v->name}}</td>
                                            <td>{!! $v->description !!}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                        <li><a href="javascript:void(0);" class="edit_modal" data-toggle="modal" data-id='{{$v->id}}' data-name='{{$v->name}}' data-image='{{$v->image}}' data-desc='{{$v->description}}' data-backdrop="false" data-target="#edit_modal">Edit</a></li>
                                                        <li><a class="sweet-approve" href="#" data-url="{{route('admin.vehicles-delete',['id'=>$v->id])}}">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $vehicles->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
@endsection()
@section('jsOutside')
<script type="text/javascript">

$('.edit_modal').click(function(){
id = $(this).attr('data-id');
name = $(this).attr('data-name');
image = $(this).attr('data-image');
desc = $(this).attr('data-desc');
$('#edit_id').val(id);
$('#edit_name').val(name);
$('#edit_desc').val(desc);
$('#edit_desc').text(desc);
CKEDITOR.instances.edit_desc.setData(desc);
});
</script>
<script src="https://cdn.ckeditor.com/4.13.0/basic/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'desc' );
CKEDITOR.replace( 'edit_desc' );
</script>
@endsection()