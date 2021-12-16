@extends('partials.default')
@section('content')
<!-- Main Content -->
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
        <form method="post" action="{{route('admin-new-predefined-save')}}">
            {{csrf_field()}}
        <div class="row" style="margin:0px;">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">SAVE</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">CLOSE</button>
            </div>
            
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                
                                    
                                    <div class="row">
                                        
                                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                            <div class="form-line">
                                                <label class="col-md-12">Category</label>
                                                <input type="text" required style="color: white;!important;"  class="form-control" name="category" >
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                            <div class="form-line">
                                                <label class="col-md-12">SubCategory</label>
                                                <input type="text" required style="color: white;!important;"  class="form-control" name="subcategory" >
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                            <div class="form-line">
                                                <label class="col-md-12">Job Code</label>
                                                <input type="text" required  style="    color: white!important;" class="form-control" name="job_code" >
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                            <div class="form-line">
                                                <label class="col-md-12">BarCode No</label>
                                                <input type="text" required style="color: white!important;" id="barcode_val"  class="form-control" name="barcode_no" >
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3 input-group">
                                            <label></label>
                                            <input type="button" name="generate_barcode" id="generate_barcode" value="Generate" class="btn btn-info" style="height: 35px;">
                                            
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                            
                                            <label class="col-md-12">OverRide Stock price</label>
                                            
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="override_stock" id="flexRadioDefault1" value="1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="override_stock" id="flexRadioDefault2" value="0" checked="">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-4 col-md-4 input-group">
                                            <div class="form-line">
                                                <label class="col-md-12">Description</label>
                                                <input type="text" required  class="form-control" name="description" >
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>


<div class="row" style="margin:0px">
    <div class="col-lg-9">
        <div class="card">

      <div class="card-body">
        @include('admin.predefinedjob.tab')
      </div>
    </div>
    </div>
    
<div class="col-lg-3">
    <form method="post" action="{{route('admin-extra-save')}}">
        {{csrf_field()}}
        <div class="col-md-12">
                                          <div class="card">
                                            <div class="card-header">
                                              Extra
                                              <span style="float: right"><i class="zmdi zmdi-caret-down-circle"></i></span>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Sundaries</label>                                                            
                                                    </div>
                                                    
                                                     <div class="col-md-12">
                                                        <input type="number" value="{{isset($sundaries)?$sundaries:''}}" name="sundaries" style="display:inline;width: 100%;" placeholder="Sundaries"> 
                                                                                                    
                                                     </div> 
                                                         
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Lubricant</label>                                                            
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="number" value="{{isset($lubricant)?$lubricant:''}}"  style="width:100%;" name="lubricant" placeholder="Lubricant">    
                                                    </div>
                                                          
                                                </div>

                                                 

                                                    <div class="row">
                                                     <div class="col-md-12">
                                                        <label>Paint & Mat</label>
                                                        </div>
                                                      <div class="col-md-12">     
                                                        <input type="number" value="{{isset($paint_mat)?:''}}" name="paint_mat" style="    width: 100%;" placeholder="Paint & Mat">  
                                                    </div>
                                                 </div>
                                                 <div class="row">
                                                     <div class="col-md-12">
                                                        <button type="submit" style="float:right;" class="btn btn-primary">Save</button>
                                                        </div>
                                                      
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
@section('jsOutside')
<script type="text/javascript">
$('#generate_barcode').click(function(){
$.ajax({
type:'get',
url:'{{route("admin.generate_barcode")}}',
data:{_token: "{{ csrf_token() }}"
},
success: function( msg ) {
$('#barcode_val').val(msg['random_number']);

}
});
});
</script>
@endsection()