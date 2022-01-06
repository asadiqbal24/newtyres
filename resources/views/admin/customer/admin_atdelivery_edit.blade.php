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
     <form method="post" action="{{route('admin-atdelivery-updated')}}">
          {{csrf_field()}}

    <div class="row clearfix">
      <div class="col-lg-12">
       <div class="card">
        <div class="card-body">
          <button  id="submit_customer_form" class="btn btn-success">Save</button>
        
        <a href="#" class="btn btn-danger">Exist</a>        
     
        </div>
        
      </div> 
      </div>
      
      
    </div>



<div class="row" style="margin:0px;">
    <div class="col-lg-12">
      <div class="card">

       

   <input type="hidden" name="id" value="{{$edit->id}}" class="form-control">

            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Name</label>
                  <select class="form-control show-tick" required name="title">
                    <option>Choose</option>
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                  </select>
                  <!--   <input type="text" name="name[]" required class="form-control"> -->
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group" style="margin-top:35px">
                <div class="form-line">
                  <label></label>
                  <input type="text" name="name" value="{{$edit->name}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group" style="margin-top: 35px;">
                <div class="form-line">
                  <label></label>
                  <input type="text" name="surname" value="{{$edit->surname}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>House No</label>
                  <input type="text" name="house_no" value="{{$edit->house_no}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>PostCode</label>
                  <input type="text" name="postcode" value="{{$edit->post_code}}" required class="form-control">
                  
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Road</label>
                  <input type="text" name="road" value="{{$edit->road}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Locality</label>
                  <input type="text" name="locality" value="{{$edit->locality}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Town</label>
                  <input type="text" name="town" value="{{$edit->town}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>County</label>
                  <input type="text" name="county" value="{{$edit->country}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone" value="{{$edit->telephone}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Mobile</label>
                  <input type="text" name="mobile" value="{{$edit->mobile}}" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
    
 
         


      </form>



          






    </div>
  </div>
</div>



  </div>
</section>



@endsection()