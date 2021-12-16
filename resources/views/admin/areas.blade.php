@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
<link href="{{asset('public/assets/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@section('content')  
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Areas</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>{{$region_name->name}} List</h4>              
              <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#defaultModal"><i class="zmdi zmdi-plus"></i> Add Area</a>
            </div>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.area.save')}}">
            {{csrf_field()}}                
            <input type="hidden" name="region_name" value="{{$region_name->id}}">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Area</h4>
            </div>
            <div class="modal-body"> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>From</label>
                                            <input name="type" class="type" value='manually' type="radio" id="radio_1" checked />
                            <label for="radio_1">Manually</label>
                            <input name="type" class="type" value='url' type="radio" id="radio_2" />
                            <label for="radio_2">Url</label>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                         <div id="manually">   
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" name="post_code">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   
                        </div>

                        <div id="url" style="display: none">

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Url</label>
                                            <input type="text" class="form-control" name="url">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                          </div>  
                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Country</label>
                                             <select class="form-control show-tick" required="required" name="country">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($countries as $co)
                                                    @if($co->id==$region_name->country_id)
                                                        <option selected="selected" value="{{$co->id}}">{{$co->name}}</option>   
                                                    @endif
                                                @endforeach    
                                            </select>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>      

                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                    
                                            <label>Active</label>
                                            <select class="form-control show-tick" required="required" name="active">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>



<div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.area.copy')}}">
            {{csrf_field()}}                
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Copy Content From</h4>
            </div>
            <div class="modal-body"> 

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                    
                                            <label>Area</label>
                                            <select class="form-control show-tick" required="required" name="area">
                                            @foreach($areas as $a)
                                                <option value="{{$a->id}}">{{$a->name}} {{($a->country_name->name)}}</option>
                                            @endforeach    
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>            

<div class="card">

                    <div class="body">
                        <div class="table-responsive">
                            @foreach($areas as $a)
                                <ul>
                                    <li><strong>{{$a->name}}</strong>
                                    @php $list = unserialize($a->post_code); @endphp
                                    <ul>
                                    @foreach($list as $l)
                                        <li>{{$l}}</li>
                                    @endforeach                                    
                                    </ul>
                                  </li>
                                </ul>
                            @endforeach
                            <!-- <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Postal Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Postal Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($areas as $a)
                                        <tr>
                                            <td>{{$a->name}}</td>
                                            <td>{{$a->country_name->name}}</td>
                                            <td>{{$a->post_code}}</td>
                                            <td>@if($a->active==1)<span class="label bg-green">Yes</span>@else<span class="label bg-orange">No</span>@endif</td>
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                            <li><a href="{{route('admin.area-active',['id'=>$a->id])}}">@if($a->active==1) In-Active @else Active @endif</a></li>
                                                            <li><a href="{{route('admin.add-about-us',['id'=>$a->id])}}">About-Us</a></li>
                                                            <li><a href="javascript:void(0);" class="copy_data" data-toggle="modal" data-id='{{$a->id}}' data-backdrop="false" data-target="#copyModal">Update Content From Other Area</a></li>
                                                        </ul>
                                                    </div>                                                

                                    </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>


          </div>  
        </div>

        </div>               
    </div>
</section>

    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

@endsection()
@section('jsOutside')
<script type="text/javascript">
    $('.copy_data').click(function(){

            var val = $(this).attr('data-id');
            $('#selected_id').val(val);
    });

    $('.type').click(function(){

            var val = $(this).val();
            if(val=='manually'){
                $('#url').hide();
                $('#manually').show();

            }else{
                $('#manually').hide();
                $('#url').show();

            }
    });



</script>
@endsection()