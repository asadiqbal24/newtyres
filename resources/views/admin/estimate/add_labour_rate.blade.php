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
       <form method="Post" action="{{route('admin-labour-rate-save')}}">
        {{csrf_field()}}
        <div class="row clearfix">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success save-form">Save</button>
                        <a href="" class="btn btn-success">Issue</a>
                        
                        
                        
                        
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                 
                                            
                                                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Name</label>
                                                <input type="text" name="name" required="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-9 input-group">
                                            <div class="form-line">
                                                <label>Description</label>
                                                <input type="text" name="description" value="" required="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        
                                          
                                    </div>
                                    
                                    
                                   
                                    <div class="row">
                                       
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Quantity</label>
                                                <input type="text" id="qty" name="qty" required="" value="" class="form-control multiplier">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Unit Price</label>
                                                <input type="text" id="price" onkeyup="total_value(this)"  name="unit_price" required="" class="form-control unit_price invoice_data row1 multiplier">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>VAT</label>
                                                <input type="text" name="vat" required="" value="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group" id="results">
                                            <div class="form-line">
                                                <label>Total</label>
                                                <input type="number" id="results"  name="total" value="" class="form-control total invoice_data row1">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>


                                       
                                        </div>
                                    </div>
                                   

                  
                  
                                    
                                   
                                </div>
                                
                        </div>
                   
                </div>
          

            </div>

             </form>
    </div>
</section>

@endsection()



