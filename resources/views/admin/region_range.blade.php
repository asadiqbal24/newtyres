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
                        <li class="breadcrumb-item"><a href="index.html">Areas</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>{{$area_name->name}} Range</h4>              
              <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#rangeModal"><i class="zmdi zmdi-plus"></i> Add Range</a>
            </div>



<div class="modal fade" id="rangeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.range.save')}}">
            {{csrf_field()}}                
            <input type="hidden" name="selected_id" id="selected_id" value="{{$id}}">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Range</h4>
            </div>
            <div class="modal-body"> 

                       <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Lower Limit</label>
                                            <input type="text" class="form-control" required="required" name="lower">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   

                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Upper Limit</label>
                                            <input type="text" class="form-control" required="required" name="upper">
                                        </div>
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
                                @foreach($range as $r)
                                    @php $codes = unserialize($r->code_range); @endphp
                                    <ul>
                                         <li>{{$codes[0]}} - {{$codes[1]}}</li>   
                                    </ul>    

                                @endforeach        
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
</script>
@endsection()