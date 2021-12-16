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
       <form method="post" action="{{route('admin-part-update')}}">
                           {{csrf_field()}}
                           <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="row clearfix">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success save-form">Save</button>
                        <a href="" class="btn btn-success">Issue</a>
                        
                        
                        
                        
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                 
                                            
                                                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Part Name</label>
                                                <input type="text" name="part_name" value="{{$edit->part_name}}" required="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-9 input-group">
                                            <div class="form-line">
                                                <label>Description</label>
                                                <input type="text" value="{{$edit->description}}" name="description" required="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        
                                          
                                    </div>
                                    
                                    
                                   
                                    <div class="row">
                                       
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Cost</label>
                                                <input type="text" value="{{$edit->cost}}"  name="cost" required="" class="form-control multiplier">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Qty</label>
                                                <input type="text" value="{{$edit->qty}}"   name="qty" required="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Unit Price</label>
                                                <input type="text" value="{{$edit->unit_price}}" name="unit_price" required="" value="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Vat</label>
                                                <input type="text" value="{{$edit->vat}}" name="vat" required=""  class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group" id="results">
                                            <div class="form-line">
                                                <label>Total</label>
                                                <input type="number" value="{{$edit->total}}"  name="total"  class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>


                                       
                                        </div>
                                    </div>
                                   

                  
                  
                                    
                                   
                                </div>
                                
                        </div>
                    </form>
                </div>
            </div>
    </div>
</section>

@endsection()




