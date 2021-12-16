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
    <form method="post" action="{{route('admin-bay-setting-save')}}">
      {{csrf_field()}}
    
    <div class="card">
      <div class="card-body">
        <div class="row" style="margin:0px;">
          <div class="col-md-4 input-group">
            <div class="form-line">
              <label>Name</label>
              <input type="text" name="name" style=" height: 30px!important;"   class="form-control">
            </div>
            
          </div>
          <div class="col-md-4 input-group">
            <div class="form-line">
              <label>Sort Order</label>
              <input type="text" name="sort_order" style="height: 30px!important;"   class="form-control">
            </div>
            
          </div>
          <div class="col-lg-4 input-group">
            
            
            <input type="checkbox" id="active" class="filled-in" value="1" name="active">
            <label for="active" style="padding-left:50px;">Active</label>
            <span class="input-group-addon"> <i></i> </span>
          </div>
        </div>

        <div class="row" style="margin:0px;">
          <div class="col-lg-12">
             <a href="{{route('calender-bays-setting')}}" class="btn btn-danger" style="float:right;margin-left: 15px;">Close</a>
            <button type="submit" class="btn btn-primary" style="float:right;">Save</button>
           
          </div>
          
        </div>
      </div>
      
    </div>



    </form>
    
    
  </div>
</section>
@endsection()