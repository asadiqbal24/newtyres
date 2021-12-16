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
                        <li class="breadcrumb-item"><a href="{{route('admin.pages')}}">Pages</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>{{isset($pages->category)?$pages->category->name:''}} Content <span style="font-size: 10px;">(Pages Can be Added Or Edited in Category Section)</span></h4>              
            </div>




                <div class="card">
                    <div class="body">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <form method="post" action="{{route('admin.page-content.save')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$pages->id}}">     
                                    
                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                        <label>Meta Tags</label>
                                        <textarea class="form-control" value="{{$pages->meta_tags}}" name="meta_tags">{{$pages->meta_tags}}</textarea>
                                        <span class="input-group-addon"> <i></i> </span>
                                      </div>
                                    </div> 

                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                        <label>Content</label>
                                        <textarea class="form-control" value="{{$pages->data}}" name="data">{{$pages->data}}</textarea>
                                        <span class="input-group-addon"> <i></i> </span>
                                      </div>
                                    </div> 


                                 <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <input type="submit" name="submit" value="Save" class="btn  btn-raised btn-success waves-effect">
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

    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

@endsection()
@section('jsOutside')
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'data' );
</script>
@endsection()