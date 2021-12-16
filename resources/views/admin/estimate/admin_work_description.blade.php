@extends('partials.default')
@section('content')
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




<form method="post" action="{{route('admin-work-description-save')}}">
                           {{csrf_field()}}
        <div class="row clearfix">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success save-form">Save</button>
                        <a href="{{route('admin-description-list')}}" class="btn btn-danger">Exit</a>
                        
                        
                        
                        
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                 
                                            
                                                        
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="row">
                                         <div class="col-md-12 input-group">
                                            <div class="form-line">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        
                                        
                                          
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                         <div class="col-md-12 input-group">
                                            <div class="form-line">
                                                <label>Description</label>
                                                <textarea type="text" cols="5" rows="5" name="description" required="" class="form-control"></textarea>
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        
                                        
                                          
                                    </div>
                                    
                                    
                                   
                                    
                                   

                  
                  
                                    
                                   
                                </div>
                                
                        </div>
                    </form>










    </div>

</section>

@endsection()