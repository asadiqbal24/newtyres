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
                    <h2 class="text-white">Dashboard</h2>
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
                        <button class="btn btn-success add-new">Print</button>
                        <button class="btn btn-success float-right">Validate Mot Dates</button>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hovered">
                            
                            <thead>
                                <tr>
                                    <th>Err</th>
                                    <th>Type</th>
                                    <th>Work Due</th>
                                    <th>Print Due</th>
                                    <th>Email Due</th>
                                    <th>SMS Due</th>
                                    <th>Registration</th>
                                    <th>Make</th>
                                    <th>Customer</th>
                                    <th>Last Invoiced</th>
                                </tr>
                            </thead>
                        </table>
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