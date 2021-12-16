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
                        <li class="breadcrumb-item"><a href="{{route('admin.tyre-not-found')}}"> Tyres Not Found Queries</a></li>                       
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Tyres Not Found Queries List</h4>              
            </div>


<div class="card">

                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Make</th>
                                        <th>Postcode</th>
                                        <th>Answered ? </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Make</th>
                                        <th>Postcode</th>
                                        <th>Answered ? </th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($queries as $q)
                                        <tr>
                                            <td>{{$q->name}}</td>
                                            <td>{{$q->email}}</td>
                                            <td>{{$q->phone}}</td>
                                            <td>{{isset($q->vehicle_d)?$q->vehicle_d->name:''}}</td>
                                            <td>{{$q->poscode}}</td>
                                            <td>@if($q->admin_reply==1) Yes @else No @endif</td>
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">                                                           

                                                             <li><a href="{{route('admin.tyres-not-found-reply',['id'=>$q->id])}}">View Details</a></li>

                                                             <li><a class="sweet-approve" href="#" data-url="{{route('admin.tyres-not-found-delete',['id'=>$q->id])}}">Delete</a></li>                                                            
                                                        </ul>
                                                    </div>                                                

                                            </td>
                                        </tr>

                                        @endforeach    
                                </tbody>
                            </table>
                                {{ $queries->links('pagination::bootstrap-4') }}  
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
        $('#edit_id').val(id);
        $('#edit_name').val(name);
    });
</script>
@endsection()