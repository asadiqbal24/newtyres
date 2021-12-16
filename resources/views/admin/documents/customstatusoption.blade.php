@extends('partials.default')
<header>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">

<link href="{{asset('public/dist/huebee.min.css')}}" rel="stylesheet">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
<link href="dist/huebee.min.css" rel="stylesheet">

</header>
<style type="text/css">
    .alpha_pad {
        padding-left: 5px !important;
        padding-right: 5px !important;
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

                        <a href="#" data-backdrop="false" data-toggle="modal" data-target="#copyModal" class="btn btn-success">New</a>

                        

                        <div class="modal fade" id="copyModal" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document" >
            <div class="modal-content" style="margin-top:15%;">

                    <div class="modal-header">
                        <h4 class="modal-title" style="color: black !important;">Custom Status New</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
        
                    <div class="modal-body">
                    <form method="post" action="{{route('admin-document-template-setting-save')}}">
                    {{csrf_field()}}
                        <div class="row" style="margin-top: 5px;margin-bottom: 5px;">
                            <div class="col-md-12">
                                <label>Available for</label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="Calender" type="checkbox" value="active" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Calender
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="Estimates" type="checkbox" value="active" id="flexCheckDefault2" />
                                    <label class="form-check-label" for="flexCheckDefault2">
                                        Estimates
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="jobsheet" type="checkbox" value="active" id="flexCheckDefault3" />
                                    <label class="form-check-label" for="flexCheckDefault3">
                                        Job Sheet
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" name="invoice" type="checkbox" value="active" id="flexCheckDefault4" />
                                    <label class="form-check-label" for="flexCheckDefault4">
                                        Invoice
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-1 mb-1" style="margin-top: 5px;margin-bottom: 5px;">
                            <div class="col-lg-4 col-sm-3 col-md-4 input-group">
                                <div class="form-line">
                                    <label class="col-md-12">Name</label>
                                    <input type="text" class="text-info" class="form-control" name="name" id="starting_from" />
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                            <div class="col-lg-4 col-sm-12 col-md-4 input-group">
                                <div class="form-line">
                                    <label class="col-md-12">Sort Order</label>
                                    <input type="text" class="text-info" class="form-control" name="sort_order" id="starting_from" />
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-lg-4 col-sm-12 col-md-4 input-group">
                                <div class="form-line">
                                    <label class="col-md-12">Background Color</label>
                                    <input type="text" id="text-field" name="background_color" class="form-control demo" value="#70c24a">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>
                        <div class="row mt-1 mb-1" style="margin-top: 5px;margin-bottom: 5px;">
                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <p style="color: black;">Text Color</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="text_color" id="flexRadioDefault1" value="Black" />
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Black
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="text_color" id="flexRadioDefault2" value="white" checked />
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        White
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-1 mb-1" style="margin-top: 5px;margin-bottom: 5px;">
                            <button type="submit" class="btn btn-primary">SAVE</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">CLOSE</button>                            
                        </div>
                    </form>

                    </div>
                </div>

        </div>
    </div>



                        

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>Calender</th>
                                            <th>Estimates</th>
                                            <th>Jobsheet</th>
                                            <th>Invoice</th>
                                            <th>Document Name</th>
                                            <th>Sort Order</th>
                                            <th>Background Color</th>
                                            <th>Text Color</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1
                                        @endphp
                                        @foreach($setting as $s)
                                        <tr>
                                           <td>{{$i++}}</td>

                                            <td>{{ucwords($s->calender?'Active':'In-Active')}}</td>
                                            <td>{{ucwords($s->estimates?'Active':'In-Active')}}</td>
                                            <td>{{ucwords($s->jobsheet?'Active':'In-Active')}}</td>
                                            <td>{{ucwords($s->invoice?'Active':'In-Active')}}</td>

                                           <td>{{$s->name}}</td>
                                           <td>{{$s->sort_order}}</td>
                                           <td>{{$s->background_color}}</td>
                                           <td>{{$s->text_color}}</td>
                                           <td><a href="{{route('admin-document-template-delete',['id'=>$s->id])}}" class="btn btn-danger">Delete</a></td>
                                           
                                        </tr>
                                        @endforeach()
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <div class="container" >
   <input type="hidden" id="demo" class="form-control" value="#08F">
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="dist/huebee.pkgd.min.js"></script>

<script src="{{asset('public/colorPicker/jquery.minicolors.js')}}"></script>

@endsection() @section('jsOutside') @endsection()
