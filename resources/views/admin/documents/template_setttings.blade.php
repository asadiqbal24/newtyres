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
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12 input-group">
                                <div class="form-line">
                                    <label>Demonstration Company Name</label>
                                    <input type="text" name="document_company_name" required class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-12 input-group">
                                <div class="">
                                    <button class="btn btn-primary">
                                    <i class="material-icons">edit</i> Document Headings
                                    </button>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-12">
                                
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Registration
                                            </th>
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>Chassis</th>
                                            <th>Mileage</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-md-12">
                                
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                Engine No
                                            </th>
                                            <th>Engine Code</th>
                                            <th>Key Code</th>
                                            <th>Date of Reg</th>
                                            <th>Paint Code</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>


                                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">


                            <div class="row">
                <div class="col-md-12">

                    <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#std_invoice">Std Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#acc_invoice">Acc Invoice</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#estimate">Estimate</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#job_sheet">Job Sheet</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#surcharge">Surcharge</a></li>                    
                  </ul>

                </div>

                <div class="col-md-12">
                <div class="tab-content">
                <div role="tabpanel" class="tab-pane animated flipInX active" id="std_invoice">
                  @include('admin.documents.std_invoice')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="acc_invoice">
                  @include('admin.documents.acc_invoice')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="estimate">
                  @include('admin.documents.estimate')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="job_sheet">
                  @include('admin.documents.job_sheet')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="surcharge">
                  @include('admin.documents.surcharge')
                </div>
                
              </div>
            </div>

            </div>


                        </div>
                    </div>
                </div>



                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">

                            <div class="col-md-12 input-group">
                                <div class="form-line">
                                  <textarea type="text" name="description" required class="form-control"></textarea>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                              </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-4">
                

                <div class="row">

                    <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#logos">Logos</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#watermark">Watermark</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#options">Options</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#misc">Misc.</a></li>
                  </ul>


                <div class="col-md-12">
                <div class="tab-content">
                <div role="tabpanel" class="tab-pane animated flipInX active" id="logos">
                  @include('admin.documents.logos')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="watermark">
                  @include('admin.documents.watermark')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="options">
                  @include('admin.documents.options')
                </div>
                <div role="tabpanel" class="tab-pane animated flipInX" id="misc">
                  @include('admin.documents.misc')
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