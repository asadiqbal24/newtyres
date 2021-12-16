@extends('partials.default')
@section('content')  
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.promo.codes')}}">Send Promo Code</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
         <div class="col-lg-12 col-sm-12 col-md-12">               
               <div class="card">
                   <div class="card-body">
                    <h4>{{$promo->title}}</h4>
                    <p>{{$promovalues->count()}} Codes Available</p>
                        <form method="post" action="{{route('admin.send-promocode')}}">
                            {{csrf_field()}}
                    <div class="row">                            
                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">

                                            <label>Codes</label>
                                            <select class="form-control show-tick" required="required" name="codes[]" multiple="multiple">
                                                <option value="{{NULL}}">Select</option>                                                
                                                @foreach($promovalues as $c)
                                                        <option value="{{$c->id}}">{{$c->value}}</option>              
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-6 col-sm-6 col-md-6 input-group">

                                            <label>User</label>
                                            <select class="form-control show-tick" required="required" name="users[]" multiple="multiple">
                                                <option value="{{NULL}}">Select</option>                                                
                                                @foreach($user as $c)
                                                        <option value="{{$c->id}}">{{$c->email}}</option>              
                                                @endforeach
                                            </select>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Message</label>
                                            <input type="text" class="form-control" required="required" name="message">   
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <input type="submit" name="submit" value="Save" class="btn  btn-raised btn-success waves-effect">
                            </div> 


                        </div>
                        </form>
                    </div>
               </div> 
           </div>

        </div>               
    </div>
</section>
@endsection()
@section('jsOutside')
@endsection()
