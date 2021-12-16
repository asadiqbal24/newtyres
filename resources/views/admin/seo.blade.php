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
                        <li class="breadcrumb-item"><a href="{{route('admin.pages')}}">Category</a></li>
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
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>Handler</th>
                                        <th>Writer</th>
                                        <th>Desc.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Keywords</th>
                                        <th>Handler</th>
                                        <th>Writer</th>
                                        <th>Desc.</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach($pages as $c)
                                        <tr>

                                            <td>{{$c->route}}</td>
                                            <td>{{$c->title}}</td>
                                            <td>{{$c->keywords}}</td>
                                            <td>{{$c->handler}}</td>
                                            <td>{{$c->writer}}</td> 
                                            <td>{{$c->description}}</td>                                          
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                            <li><a href="{{route('admin.seo-data')}}?slug={{$c->route}}">Seo Settings</a></li>  
                         
                                                        </ul>
                                                    </div>                                                

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pages->links('pagination::bootstrap-4') }}  
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

@endsection()