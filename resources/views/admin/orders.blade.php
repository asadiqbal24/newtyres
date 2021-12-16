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
                        <li class="breadcrumb-item"><a href="{{route('admin.orders')}}">Orders</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Orders</h4>              

            </div>

            <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Order</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Order</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                                                                <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if($orders->count()>0)

                                        @foreach($orders as $o)
                                            <tr>
                                                <td>{{date('Y-m-d',strtotime($o->created_at))}}</td>
                                                <td>{{isset($o->customer)?$o->customer->first_name:''}} {{isset($o->customer)?$o->customer->last_name:''}}</td>

                                                <td>{{isset($o->tyre_brands)?$o->tyre_brands->name:''}} {{isset($o->tyre_pattern)?$o->tyre_pattern->name:''}}
                                                {{isset($o->tyres)?$o->tyres->name:''}}

                                                </td>

                                                <td>{{$o->quantity}}</td>
                                                <td>{{$o->price}}</td>
                                                 <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">                                                           

                                                             <li><a href="{{route('admin.order.view',['id'=>$o->id])}}">View</a></li>                                                         
                                                        </ul>
                                                    </div>                                                

                                            </td>
                                            </tr>
                                        @endforeach

                                    @else
                                       <tr><td colspan="3">No Record Found</td></tr> 
                                    @endif    
                                </tbody>
                            </table>

                                {{ $orders->links('pagination::bootstrap-4') }}                              
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

