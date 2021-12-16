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
                        <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">Category</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Categoies List</h4>              
              <a href="{{route('admin.add.categories')}}" class="btn btn-raised btn-success waves-effect float-right"><i class="zmdi zmdi-plus"></i> Add Category</a>
            </div>





<div class="card">

                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Parent Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($categories_list as $c)
                                        <tr>
                                            <td>{{$c->name}}</td>
                                            <td>{{isset($c->category_name)?$c->category_name->name:''}}</td>
                                            <td>@if($c->active==1)<span class="label bg-green">Yes</span>@else<span class="label bg-orange">No</span>@endif</td>
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby=" btnGroupVerticalDrop1">

                                                            <li><a href="{{route('admin.edit.category',['id'=>$c->id])}}">Edit</a></li> 

                                                            <li><a class="sweet-approve" href="#" data-url="{{route('admin.category.delete',['id'=>$c->id])}}">Delete</a></li> 

        
                                                        </ul>
                                                    </div>                                                

                                            </td>
                                        </tr>

                                        @foreach($c->subcategory as $sc)

                                         <tr>
                                            <td>{{$sc->name}}</td>
                                            <td>{{$c->name}}</td>
                                            <td>@if($sc->active==1)<span class="label bg-green">Yes</span>@else<span class="label bg-orange">No</span>@endif</td>
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                                   

                                                            <li><a href="{{route('admin.edit.subcategory',['id'=>$sc->id])}}" >Edit</a></li>                                                                                    
                                                            <li><a class="sweet-approve" href="#" data-url="{{route('admin.category.delete',['id'=>$c->id])}}">Delete</a></li> 


                                                        </ul>
                                                    </div>                                                

                                            </td>
                                        </tr>

                                        @endforeach    
                                    @endforeach
                                </tbody>
                            </table>

                            {{ $categories_list->links('pagination::bootstrap-4') }}
                            
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

@endsection()