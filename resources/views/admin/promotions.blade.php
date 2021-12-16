@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@section('content')  
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.promotions')}}">Promotions</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Promotions</h4>              
              <a href="{{route('admin.promotions-add')}}" class="btn btn-raised btn-success waves-effect float-right"><i class="zmdi zmdi-plus"></i> Add Promotions</a>
            </div>

<div class="card">

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   @if($promotions->count()>0) 
                                    @php $i=$promotions->firstItem(); @endphp                                   
                                    @foreach($promotions as $promotion)
                                    @php $promotion_date = explode(' ',$promotion->created_at); @endphp                                   

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$promotion->title}}</td>

                                        <td>@if($promotion->active==1) {{'Active'}} @else {{'In-Active'}} @endif</td>

                                        <td>
                                               <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">                                                  
                                                        
                                                    <li><a href="{{route('admin.promotions-edit',['id'=>$promotion->id])}}">Edit</a></li>

                                                     <li><a class="sweet-approve" href="#" data-url="{{route('admin.promotions-delete',['id'=>$promotion->id])}}">Delete</a></li> 

                                                </ul>
                                              </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                   @else
                                        <tr><td colspan="6">No Record Found</td></tr>
                                   @endif 
                                    
                                </tbody>
                            </table>
                            {{$promotions->links('pagination::bootstrap-4')}}
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
@endsection()
