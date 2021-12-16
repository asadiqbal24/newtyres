@extends('partials.default')
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

                        <a href="{{route('admin.doc.template.predefinedjobs_form')}}" class="btn btn-success">New</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                            <form method="get" action="{{route('admin.doc.template.termandcontion_create')}}">
                                        {{csrf_field()}}

                                      
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label class="col-md-12"> Name</label>
                                                    <input type="text" class="text-info" class="form-control" name="name" id="starting_from" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        

                                        
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <p style="color: black;">Active</p>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" value="1" />
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2" value="0" checked />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        
                                       
                                            <div class="form-floating">
                                                <textarea class="text-info" class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
                                                <label for="floatingTextarea2">Comments</label>
                                            </div>
              
                                        
                                            <button type="submit" class="btn btn-primary">SAVE</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">CLOSE</button>
                                       
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection() @section('jsOutside') @endsection()
