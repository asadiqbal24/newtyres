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
                        <li class="breadcrumb-item"><a href="{{route('admin.dealer.signup')}}">Dealers</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Dealers Signup</h4>              

            </div>

<div class="card">

                    <div class="body">
                        <div class="table-responsive">
                            <table id="tech-companies-1" class="table  table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-priority="3">Name</th>
                                                <th data-priority="1">Position</th>
                                                <th data-priority="3">Organization</th>
                                                <th data-priority="3">Address</th>
                                                <th data-priority="6">City / State</th>
                                                <th data-priority="6">Post Code</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                    @php $i=$dealer->firstItem(); @endphp                                                                                   
                                          @foreach($dealer as $ur)      
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$ur->first_name.' '.$ur->last_name}}</td>
                                                <td>{{$ur->position}}</td>
                                                <td>{{$ur->organization}}</td>
                                                <td>{{$ur->address}}</td>
                                                <td>{{$ur->city.' / '.$ur->state}}</td>
                                                <td>{{$ur->post_code}}</td>                                                
                                            </tr>
                                           @endforeach 
                                            </tbody>
                                        </table>
                            {{$dealer->links('pagination::bootstrap-4')}}
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
