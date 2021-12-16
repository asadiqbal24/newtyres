@extends('partials.default')
@section('content')
@section('invoices','active_tab')
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
        <div class="col-md-12">
            <a href="{{route('admin.add-new-invoice')}}"  class="btn btn-success">New Invoice</a>
            <a href="{{route('admin.document.archive')}}?type=invoices" class="btn btn-success">Archive</a>
            <a href="" class="btn btn-success">Print</a>
            <a href="" class="btn btn-success float-right">New Credit</a>
        </div>
    </div>

<div class="card">
        <div class="card-body">
            <form method="get" action="{{route('admin.invoices')}}">
                <div class="row">
                    <div class="col-md-2">
                        <select name="created_type" class="form-control show-tick">
                            <option <?php if(isset($requestData) && $requestData->created_type=='created') echo 'selected'; ?> value="created">Created</option>
                            <option <?php if(isset($requestData) && $requestData->created_type=='due') echo 'selected'; ?> value="due">Due</option>
                            
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="date" name="from" value="{{isset($requestData)?$requestData->from:''}}" class="form-control" placeholder="From">
                    </div>
                    <div class="col-md-2">
                        <input type="date" name="to" value="{{isset($requestData)?$requestData->to:''}}" class="form-control" placeholder="To">
                    </div>
                    <div class="col-md-2">
                        @if(isset($requestData->today))
                        <p>{{$requestData->today}}</p>
                        @endif
                        <button class="btn btn-info today" type="button" name="today" value="{{date('Y-m-d')}}">Today</button>
                    </div>
                    <div class="col-md-2">
                        <select name="custom_date_range" class="form-control show-tick">
                            <option value="{{NULL}}">Date Range</option>
                            <optgroup>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='yesterday') echo 'selected'; ?> value="yesterday">Yesterday</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='today') echo 'selected'; ?> value="today">Today</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='tomorrow') echo 'selected'; ?> value="tomorrow">Tomorrow</option>
                            </optgroup>
                            <optgroup>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='last_week') echo 'selected'; ?> value="last_week">Last Week</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='this_week') echo 'selected'; ?> value="this_week">This Week</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='next_week') echo 'selected'; ?> value="next_week">Next Week</option>
                            </optgroup>
                            <optgroup>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='last_month') echo 'selected'; ?> value="last_month">Last Month</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='this_month') echo 'selected'; ?> value="this_month">This Month</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='next_month') echo 'selected'; ?> value="next_month">Next Month</option>
                            </optgroup>
                            <optgroup>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='last_year') echo 'selected'; ?> value="last_year">Last Year</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='this_year') echo 'selected'; ?> value="this_year">This Year</option>
                                <option <?php if(isset($requestData) && $requestData->custom_date_range=='next_year') echo 'selected'; ?> value="next_year">Next Year</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="status" class="form-control show-tick">
                            <option <?php if(isset($requestData) && $requestData->status=='~') echo 'selected'; ?> value="~">~</option>
                            <option <?php if(isset($requestData) && $requestData->status=='auth-req') echo 'selected'; ?> value="auth-req">Auth Req</option>
                            <option <?php if(isset($requestData) && $requestData->status=='complete') echo 'selected'; ?> value="complete">Complete</option>
                            <option <?php if(isset($requestData) && $requestData->status=='mot') echo 'selected'; ?> value="mot">Mot</option>
                            <option <?php if(isset($requestData) && $requestData->status=='service') echo 'selected'; ?> value="service">Service</option>
                            <option <?php if(isset($requestData) && $requestData->status=='urgent') echo 'selected'; ?> value="urgent">Urgent</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <div class="row">

        <div class="col-lg-9">
             <div class="card">
                <div class="card-body">
                
                        <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Doc No</th>
                            <th>Registration No</th>
                            <th>Make & Model</th>
                            <th>Customer</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoices as $e)
                        
                        <tr>
                            <td>{{$e->id}}</td>
                            <td>{{$e->created_at}}</td>
                            <td>{{$e->registration_no}}</td>
                            <td>{{$e->model}}</td>
                            
                            <td>{{'0.00'}}</td>
                            <td>
                                
                                <!-- <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Status <span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">~</a></li>
                                        <li><a href="javascript:void(0);">Auth Req</a></li>
                                        <li><a href="javascript:void(0);">Complete</a></li>
                                        <li><a href="javascript:void(0);">MOT</a></li>
                                        <li><a href="javascript:void(0);">Service</a></li>
                                        <li><a href="javascript:void(0);">Urgent</a></li>
                                    </ul>
                                </div> -->
                                <select data-id="{{$e->id}}" name="status" class="form-control show-tick change_status">
                                    <option <?php if($e->status=='~') echo 'selected'; ?> value="~">~</option>
                                    <option <?php if($e->status=='auth-req') echo 'selected'; ?> value="auth-req">Auth Req</option>
                                    <option <?php if($e->status=='complete') echo 'selected'; ?> value="complete">Complete</option>
                                    <option <?php if($e->status=='mot') echo 'selected'; ?> value="mot">Mot</option>
                                    <option <?php if($e->status=='service') echo 'selected'; ?> value="service">Service</option>
                                    <option <?php if($e->status=='urgent') echo 'selected'; ?> value="urgent">Urgent</option>
                                </select>
                            </td>
                            <td>
                                
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#mobile{{ $e->id }}" data-backdrop="false"><i class="material-icons">phone</i></a>
                                <a href="{{route('admin.invoice.view-detail',['id'=>$e->id])}}" class="btn btn-primary"> Open </a>
                                <div class="modal fade" id="mobile{{ $e->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form method="POST" id="vehicle_form" action="">
                                                {{csrf_field()}}
                                                <input type="hidden" name="selected_id" id="selected_id">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="defaultModalLabel">Contact Information</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                        <label class="mr-2">Name</label>
                                                        <input type="text" class="form-control" name="company" id="company" value="{{ $e->company }}" style="color: black !important;">
                                                    </div>
                                                    
                                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                        <label class="mr-2">Telephone</label>
                                                        <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $e->telephone }}" style="color: black !important;">
                                                        <a href="tel:{{ $e->telephone }}" class="float-right">
                                                            <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                        <label class="mr-2">Mobile</label>
                                                        <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $e->telephone }}" style="color: black !important;">
                                                        <a href="tel:{{ $e->mobile }}" class="float-right">
                                                            <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    
                                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                        <label class="mr-2">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" value="{{ $e->email }}" style="color: black !important;">
                                                        <a href="mailto:{{ $e->email }}" class="btn btn-primary btn-xs  float-right">Email</a>
                                                    </div>
                                                    
                                                    <div>
                                                        <span>Send Message to mobile number</span>
                                                    </div>
                                                    
                                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                        <label class="mr-2">Send SMS</label>
                                                        <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $e->mobile }}" style="color: black !important;">
                                                        <a href="sms:{{ $e->mobile }}">
                                                            <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                                                                <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                                            </svg></a>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning btn-sm waves-effect ml-2" data-dismiss="modal">CLOSE</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

            </div>
        </div>
    </div>



    <div class="col-md-3">

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Reminders
                  <span style="float: right" class="open_right_divs" data-div="reminders"><i class="zmdi zmdi-caret-down-circle"></i></span>
                </div>
                <div class="card-body" style="display: none;" id="reminders_div">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <td width="100%">Due</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Errors</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Failed</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Expired</td>
                      <td width="100%"> </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>



            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Stock Order Info
                  <span style="float: right" class="open_right_divs" data-div="stock_order_info"><i class="zmdi zmdi-caret-down-circle"></i></span>                  
                </div>
                <div class="card-body" style="display: none;" id="stock_order_info_div">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <td width="100%">Due</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Errors</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Failed</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Expired</td>
                      <td width="100%"> </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
                @include('partials.global_notes')                
            </div>

          </div>
</div>


</section>

   @endsection()
    @section('jsOutside')
    <script type="text/javascript">
    $('.today').click(function(){
    
    var value = $(this).val();
    window.location.href = '{{route("admin.estimates")}}?today='+value;
    });
    $('.change_status').change(function(){
    status = $(this).val();
    id = $(this).data('id');
    column = 'status';
    table = 'invoice_table';
    $.ajax({
    type:'GET',
    url:'{{route("change_status")}}',
    data:{status:status,id:id,column:column,table:table
    },
    success: function( msg ) {
    location.reload();
    
    }
    });
    });
    </script>
    @endsection()