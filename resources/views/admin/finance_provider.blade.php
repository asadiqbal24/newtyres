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
                        <li class="breadcrumb-item"><a href="{{route('admin.finance.provider')}}">Finance Provider</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Finance Provider List</h4>              
              <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#defaultModal"><i class="zmdi zmdi-plus"></i> Add Finance Provider</a>
            </div>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.finance.provider.save')}}" enctype="multipart/form-data">
            {{csrf_field()}}                
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Finance Provider</h4>
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
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" required="required">
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
            <form method="post" action="{{route('admin.finance.provider.update')}}" enctype="multipart/form-data">
            {{csrf_field()}}          
            <input type="hidden" name="id" id="edit_id">      
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit Finance Provider</h4>
            </div>
            <div class="modal-body"> 
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="edit_name" required="required" id="edit_name">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  
               


                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="edit_email" required="required" id="edit_email">
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


<div class="card">

                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($provider as $b)
                                        <tr>
                                            <td>{{$b->name}}</td>
                                            <td>{{$b->email}}</td>                                            
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                            
                                                                <li><a href="javascript:void(0);" class="edit_modal" data-toggle="modal" data-id='{{$b->id}}' data-name='{{$b->name}}' data-email='{{$b->email}}' data-backdrop="false" data-target="#edit_modal">Edit</a></li>

                                                             <li><a class="sweet-approve" href="#" data-url="{{route('admin.provider-delete',['id'=>$b->id])}}">Delete</a></li>

                                                        </ul>
                                                    </div>                                                

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

    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

@endsection()
@section('jsOutside')
<script type="text/javascript">
    
      $('.edit_modal').click(function(){

        id = $(this).attr('data-id');
        name = $(this).attr('data-name');
        email = $(this).attr('data-email');  

        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#edit_email').val(email);
    });
</script>
@endsection()