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
                <div class="card">
                    <div class="header">
                        <h2>Orders Detail</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Print Invoices</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li><a href="javascript:void(0);">Export to XLS</a></li>
                                    <li><a href="javascript:void(0);">Export to CSV</a></li>
                                    <li><a href="javascript:void(0);">Export to XML</a></li>                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-2 col-sm-4">
                                <h4><img src="{{$orders->tyres->image}}" width="70" alt="velonic"></h4>                                                
                            </div>
                            <div class="col-md-10 col-sm-8">
                                <h4>Invoice #
                                    <strong>{{$orders->reference_id}}</strong>
                                </h4>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h6>Customer Details</h6>
                                <address>
                                    <strong>{{$orders->customer_details->first_name}} {{$orders->customer_details->last_name}}</strong><br>
                                    {{$orders->customer_details->company}}<br>
                                    {{$orders->customer_details->email}}<br> {{$orders->customer_details->make}} {{$orders->customer_details->model}} {{$orders->customer_details->registration}}<br>
                                    <abbr title="Phone">P:</abbr> {{$orders->customer_details->phone_number}}
                                </address>
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p><strong>Order Date: </strong> {{date('d F, Y', strtotime($orders->created_at))}}</p>
                                <p class="m-t-10"><strong>Order Status: </strong> 

                                    @if($orders->order_completed==0 || $orders->order_completed==1)
                                    <span class="badge bg-orange">Pending</span>                  @else
                                    <span class="badge bg-success">Completed</span>
                                    @endif
                                
                                <p class="m-t-10"><strong>Order ID: </strong> #{{$orders->id}}</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h6>Home Delivery Details</h6>
                                <address>
                                    <strong>{{$orders->customer->first_name}} {{$orders->customer->last_name}}</strong><br>
                                    {{$orders->customer->address1}}<br>
                                    {{$orders->customer->address2}} {{$orders->customer->supurb}} {{$orders->customer->state}} {{$orders->customer->postcode}}<br>
                                    <abbr title="Phone">P:</abbr> {{$orders->customer_details->phone_number}}
                                </address>
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                               <h6>Payment Via</h6>
                               @if(!empty($orders->bank_details))
                               <h6>Bank</h6>
                                <address>
                                    <strong>{{$orders->bank_details->name}}<br>

                                        {{$orders->bank_details->acount_name}}
                                    </strong><br>
                                </address>
                                @elseif(!empty($orders->finance_provider_details))
                                <h6>Finance Provider</h6>
                                <address>
                                    <strong>{{$orders->finance_provider_details->name}}<br>

                                        {{$orders->finance_provider_details->email}}
                                    </strong><br>
                                </address>

                                @endif
                            </div>
                        </div>                        


                        <div class="mt-40"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="mainTable" class="table table-striped" style="cursor: pointer;">
                                        <thead>
                                            <tr><th>#</th>
                                            <th>Item</th>
                                            <th>Description</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost</th>
                                            <th>Total</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>{{$orders->tyres->name}}</td>
                                                <td>{{$orders->tyre_brands->name}} {{$orders->tyre_pattern->name}} {{$orders->tyres->tyre_category->name}} {{$orders->tyres->tyre_sizes->name}}</td>
                                                <td>{{$orders->quantity}}</td>
                                                <td>${{$orders->tyres->price}}</td>
                                                <td>${{$orders->quantity * $orders->tyres->price}}</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row" style="border-radius: 0px;">
                            <div class="col-md-12 text-right">
                                <p class="text-right"><b>Sub-total:</b> ${{$orders->price}}</p>
                                <p class="text-right">Discout: {{$orders->discount_percentage}}%</p>
                                <p class="text-right">VAT: 12.9%</p>
                                <hr>
                                
                                <h3 class="text-right">$ {{$orders->price}}</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="hidden-print col-md-12 text-right">
                            <a href="javascript:window.print()" class="btn btn-raised btn-success"><i class="zmdi zmdi-print"></i></a>
                            <a href="{{route('admin.order.completed',['id'=>$orders])}}" class="btn btn-raised btn-default">Submit</a>
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

