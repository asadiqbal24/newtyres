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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hovered">
                            <thead>
                                <tr>
                                    <th colspan="2">Refferal</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr>
                                    <td>Existing Customer</td>
                                    <td><a class="btn btn-danger btn-xs">X</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-9 input-group" style="display: inline;">
                            <div class="form-line">

                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>


                        <div class="col-md-3 input-group" style="display: inline;">
                            <div class="form-line">

                                <label>Initials</label>
                                <input type="text" name="initials" class="form-control" />
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                        <div class="col-md-12 input-group">
                            <div class="form-line">
                                <label class="col-md-12"><strong>Active</strong></label>
                                
                                <input type="radio" id="md_checkbox_1" class="chk-col-red" name="active" value="1" checked />
                                <label for="md_checkbox_1">Yes</label>
                                <br>
                                <input type="radio" id="md_checkbox_2" class="chk-col-red" name="active" value="0" />
                                <label for="md_checkbox_2">No</label>
                                <br>
                                
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
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