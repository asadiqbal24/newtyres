@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
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
<div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <button class="btn btn-danger">Close</button>
            <button class="btn btn-success"  onClick='submitDetailsForm()'>Save</button>
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="card">
      <div class="card-body">
       <div class="col-md-12">
            
          <form method="post" action="{{route('expense-nomial-update')}}" id="form">
            {{csrf_field()}}
            <input type="hidden" name="id" class="form-control" value="{{$edit->id}}">
            <div class="row">
              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Category</label>
                  <select class="form-control show-tick" name="main_category">
                    <option value="{{NUll}}">Choose</option>
                    <option value="General"<?php if($edit->category=='General')echo"selected='selected'";?>>General</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Description</label>
                  <input type="text" name="description" value="{{$edit->description}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Code</label>
                  <input type="text" value="{{$edit->code}}" name="code" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>



              <div class="col-md-6 input-group">
                

                
                  <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_active" name="active"  class="chk-col-red" @if($edit->active) checked @endif />
                  <label for="md_checkbox_active">Active</label>
                </div>
              
              

              </div>
            </div>
            
          </div> 
          </form>
      </div>
      
    </div>
    
          
  </div>
</section>


<script language="javascript" type="text/javascript">
    function submitDetailsForm() {
       $("#form").submit();
    }
</script>
@endsection()