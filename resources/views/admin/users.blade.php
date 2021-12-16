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
                        <li class="breadcrumb-item"><a href="{{route('admin/users-list')}}">Users</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Users</h4>              

            </div>

<div class="card">

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Reg. Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Reg. Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   @if($users->count()>0) 
                                    @php $i=$users->firstItem(); @endphp                                   
                                    @foreach($users as $user)
                                    @php $user_date = explode(' ',$user->created_at); @endphp                                   

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{date('d F l, Y',strtotime($user_date[0]))}}</td>
                                        <td>{{$user->name}}</td>

                                        <td>{{$user->email}}</td>

                                        <td>
                                               <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Actions
                                                <span class="caret"></span></button>
                                                <ul class="dropdown-menu">                                                  
                                                        
                                                     <li><a class="sweet-approve" href="#" data-url="{{route('admin.user-delete',['id'=>$user->id])}}">Delete</a></li> 

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
                            {{$users->links('pagination::bootstrap-4')}}
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
