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
                <div class="row clearfix"></div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <form method="get" action="{{route('admin.doc.template.termandcontion_edit_save',['id'=>$depart->id])}}">
                                    {{csrf_field()}}

                                    <div class="modal-body">
                                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                            <div class="form-line">
                                                <label class="col-md-12">Name</label>
                                                <input type="text" class="text-info" class="form-control" name="name" value="{{$depart->name}}" id="starting_from" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                            <p style="color: black;">Active</p>
                                            <div class="form-check">
                                                @if($depart->active==1)

                                                <input class="form-check-input1" type="radio" name="active" id="flexRadioDefault5" value="1" checked />
                                                @else
                                                <input class="form-check-input1" type="radio" name="active" id="flexRadioDefault5" value="1" />
                                                @endif

                                                <label class="form-check-label1" for="flexRadioDefault5">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                @if($depart->active==0)
                                                <input class="form-check-input2" type="radio" name="active" id="flexRadioDefault6" value="0" checked />
                                                @else
                                                <input class="form-check-input2" type="radio" name="active" id="flexRadioDefault6" value="0" />
                                                @endif
                                                <label class="form-check-label2" for="flexRadioDefault6">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-body">
                                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                            <div class="form-line">
                                                <label class="col-md-12">Descriptions</label>
                                                <input type="text" class="text-info" class="form-control" name="description" value="{{$depart->description}}" id="starting_from" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
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
</section>
@endsection() @section('jsOutside') @endsection()
