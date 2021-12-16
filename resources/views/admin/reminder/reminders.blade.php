@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
@section('content')
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
        
        <div class="card">
            <div class="card-body">
                
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-danger">Close</button>
                        <button class="btn btn-success add-new">New</button>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hovered">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        Type
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <a class="btn btn-info btn-xs">P</a>
                                        <a class="btn btn-success btn-xs">E</a>
                                        <a class="btn btn-warning btn-xs">S</a>
                                    </td>
                                    <td>Combined Reminders</td>
                                    <td><a class="btn btn-danger btn-xs">X</a></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">



                        <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#print_template">Print Template</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#email_template">Email Template</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sms_template">SMS Template</a></li>
                  </ul>

                </div>

                <div class="col-md-12">
                <div class="tab-content">
                <div role="tabpanel" class="tab-pane animated flipInX active" id="setting">
                  @include('admin.reminder.setting')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="print_template">
                  @include('admin.reminder.print_template')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="email_template">
                  @include('admin.reminder.email_template')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="sms_template">
                  @include('admin.reminder.sms_template')
                </div>
                
              </div>
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
<script type="text/javascript"></script>
@endsection()