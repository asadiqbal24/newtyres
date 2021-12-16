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
                <div class="card-body row">

              <div class="col-md-2">
            <input type="text" name="account_search" class="form-control" placeholder="Vehicle Search">
              </div>
              <div class="col-md-2">
                <button class="btn btn-info"><i class="zmdi zmdi-search"></i></button>
                <button class="btn btn-info"><i class="zmdi zmdi-close"></i></button>
              </div>
            <div class="col-md-6">
                <a href="{{route('admin.add.new.vehicle')}}" class="btn btn-success">New Make</a>
                <a href="{{route('admin.advanced_search')}}" class="btn btn-success">Adv. Search</a>
                <a href="" class="btn btn-success">Print</a>

            </div>

            <div class="col-md-2">
                                    <select class="form-control show-tick">
                                        <optgroup><option>50</option>
                                        <option>100</option>                                        
                                        <option>250</option>                                        
                                        <option>500</option>                                                                                                                        </optgroup>

                                        <optgroup>
                                        <option>1000</option>                                        
                                        <option>5000</option>                                        
                                        </optgroup>

                                         <optgroup>
                                        <option>All</option>                                        
                                        </optgroup>
                                    </select>
                            </div>

        </div>
        </div>
            


            <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="btn btn-primary btn-xs alpha_pad">A</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">B</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">C</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">D</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">E</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">F</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">G</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">H</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">I</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">J</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">K</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">L</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">M</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">N</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">O</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">P</a>                                                
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Q</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">R</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">S</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">T</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">U</a>   
           <a href="#" class="btn btn-primary btn-xs alpha_pad">V</a>   
           <a href="#" class="btn btn-primary btn-xs alpha_pad">W</a>             
            <a href="#" class="btn btn-primary btn-xs alpha_pad">X</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Y</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Z</a>            

          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="get" action="{{route('admin.save-starting-no',['type'=>'estimate'])}}">
            {{csrf_field()}}                
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Starting Document No</h4>
            </div>
            <div class="modal-body"> 

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                            <div class="form-line">             
                                <label class="col-md-12">Starting No</label>
                                <input type="number" class="form-control" name="starting_from" id="starting_from">
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




<div class="modal fade" id="vehicle_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{route('admin.vehicle.save')}}">
            {{csrf_field()}}                
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">New Vehicle</h4>
            </div>
            <div class="modal-body"> 

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                            <div class="form-line">             
                                <label class="col-md-12">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
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


        <div class="card">
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                          
                          <thead>
                              <tr>
                                  <th>S. no</th>
                                  <th>Registration</th>
                                  <th>Make / Model</th>
                                  <th>Customer</th>
                                  <th>Next Reminder</th>
                                  <th>Tot Docs</th>
                                  <th>Last Inc</th>
                                  <th></th>
                              </tr>
                          </thead>  

                          <tbody>

                              @foreach($models as $key => $v)


                                <tr>
                                  <td>{{$key+1}}</td>
                                  <td>{{$v->registration_number}}</td>
                                  <td>{{isset($v->vehicle_d)?$v->vehicle_d->name:''}} / {{$v->model}}</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                    <a href="{{route('admin.edit-vehicle',['id'=>$v->id])}}" class="btn btn-success">Open</a>
                                  </td>
                                </tr>

                              @endforeach
                          </tbody>

                    </table>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
@endsection()
@section('jsOutside')
@endsection()