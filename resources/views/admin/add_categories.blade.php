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
                        <li class="breadcrumb-item"><a href="{{route('admin.categories')}}">Category</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Add Category</h4>              
              <a href="{{route('admin.add.categories')}}" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#defaultModal"><i class="zmdi zmdi-plus"></i> Add Category</a>
            </div>





                <div class="card">

                    <div class="body">
                        

        <form method="post" action="{{route('admin.category.save')}}">
            {{csrf_field()}}                
            <div class="modal-body"> 
                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Parent Category(If Any)</label>
                                            <select class="form-control show-tick" name="category">
                                            <option value="{{NULL}}">Select</option>    
                                            @foreach($categories_list as $c)
                                                @if(empty($c->category_id))
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                @endif
                                            @endforeach    
                                            </select>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Sub-Parent Category(If Any)</label>
                                            <select class="form-control show-tick" name="subcategory">
                                            <option value="{{NULL}}">Select</option>    
                                            @foreach($categories_list as $c)
                                                @if(!empty($c->category_id))
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
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

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                    
                                            <label>Url Page?</label>
                                            <select class="form-control show-tick" required="required" name="url_page">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Url</label>
                                            <input type="text" class="form-control" name="url">
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
        </div>

        </div>               
    </div>
</section>

    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

@endsection()
@section('jsOutside')

@endsection()