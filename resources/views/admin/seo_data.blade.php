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
                        <li class="breadcrumb-item"><a href="{{route('admin.pages')}}">SEO</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>SEO Tools <span style="font-size: 10px;"></span></h4>              
            </div>




<div class="card">

                    <div class="body">
                        
                        <form method="post" action="{{route('admin.seo_data.post')}}"> 
                            {{csrf_field()}}
                            <input type="hidden" name="slug" value="{{$slug}}">
                            <div class="col-md-12 input-group">
                                <div class="form-line"> 
                                
                                 <input type="text" name="keywords" class="form-control" placeholder="abc,xyz">
                                </div>
                            </div>


                            <div class="col-md-12 input-group">
                                <div class="form-line"> 
                                
                                 <input type="text" name="title" class="form-control" placeholder="Title">
                                 </div>
                            </div>                        


                            <div class="col-md-12 input-group">
                                <div class="form-line"> 
                                    
                                 <input type="text" name="description" class="form-control" placeholder="Description">
                                 </div>
                            </div>   


                            <div class="col-md-12 input-group">
                                <div class="form-line"> 
                                    
                                 <input type="text" name="handler" class="form-control" placeholder="handler">
                                 </div>
                            </div>                        


                            <div class="col-md-12 input-group">
                                <div class="form-line"> 
                                    
                                 <input type="text" name="writer" class="form-control" placeholder="Writer">
                                 </div>
                            </div>                        


                            <div class="col-md-12">
                                    
                                    <input type="submit" name="Submit" value="Submit" class="btn btn-success">

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

@endsection()
@section('jsOutside')

@endsection()