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
                        <li class="breadcrumb-item"><a href="{{route('admin.fitment.centers')}}">Fitment Centers</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>{{$fit->name}} / Fitment Centers</h4>  

             @if(isset($reg_name)) 
             <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#defaultModal"><i class="zmdi zmdi-plus"></i> Add Fitment Center</a> 
             @endif                         
            </div>


                <div class="card">
                    <div class="body">
            <form method="post" action="{{route('admin.fitment_center.update')}}">
            {{csrf_field()}}                                        
            <input type="hidden" name="fitment_id" value="{{$fit->id}}">
            <input type="hidden" name="fitment_id" value="{{$fit->id}}">
            <input type="hidden" name="fitment_id" value="{{$fit->id}}">                        
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" required="required" value="{{$fit->name}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" required="required" value="{{$fit->address}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Deals In</label>

                                             <select class="form-control show-tick" multiple="multiple" required="required" name="deals_in[]" id="deals_in">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($vehicles as $veh)
                                                   @if(in_array($veh->id,$deals)) 
                                                    <option selected="selected" value="{{$veh->id}}">{{$veh->name}}</option>
                                                   @else
                                                    <option value="{{$veh->id}}">{{$veh->name}}</option>
                                                   @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   

                            <div class="col-lg-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-success waves-effect">SAVE</button>
                            </div>                            
                        </form>
                    </div>
                </div>


          </div>  
        </div>

        </div>               
    </div>
</section>

    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script type="text/javascript">
            CKEDITOR.replace( 'desc' );            
</script>
@endsection()
@section('jsOutside')
<script type="text/javascript">
    $('.editModal').click(function(){

        id = $(this).attr('data-id');
        name = $(this).attr('data-name');        
        desc = $(this).attr('data-desc');        
        post = $(this).attr('data-post');

$('#fitment_id').val(id);
$('#name').val(name)
$('#post_code').val(post);
$('#desc').val(desc);
$('#desc').text(desc);
CKEDITOR.instances.desc.setData(desc);
    });
</script>
@endsection()