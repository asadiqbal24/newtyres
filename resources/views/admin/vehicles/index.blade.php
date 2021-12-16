@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}

.selected_alpha{
      background-color: blue !important;;
}
</style>
@section('vehicles','active_tab')
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


     <div class="row clearfix">
      <div class="col-md-12">

          <a href="{{route('admin.add.new.vehicle')}}" class="btn btn-success">New Vehicle</a>
          <a class="btn btn-success" data-toggle="modal" data-target="#vehicle_modal" data-backdrop="false" class="btn btn-success">New Vehicle Type</a>
          <a href="{{route('admin.advanced_search')}}" class="btn btn-success">Adv. Search</a>
          <a href="" class="btn btn-success">Print</a>
          <a style="cursor: pointer;" class="btn btn-success open_search" >Search</a>          

      </div>
    </div>
    
    <div class="card" style="display: none;" id="search_div">
      <form method="get" action="{{route('admin.customers')}}" id="search_form">
      <div class="card-body row">
        <div class="col-md-2">
          <input type="text" name="vehicle_search" id="vehicle_search" class="form-control" value="{{$request->vehicle_search}}" placeholder="Vehicle Search" style="border-bottom: 1px solid;padding: 20px;">
        </div>
        <div class="col-md-2">
          <button type="submit"  class="btn btn-info btn-xs"><i class="zmdi zmdi-search"></i></button>
          <button  type="button" id="clear_search" class="btn btn-info btn-xs"><i class="zmdi zmdi-close"></i></button>
        </div>
        <div class="col-md-6">

        </div>
        <div class="col-md-2">
          <select class="form-control show-tick" name="records">
            <optgroup>
            <option <?php if(isset($request) && $request->records=='50') echo 'selected="selected"' ?> >50</option>
            <option <?php if(isset($request) && $request->records=='100') echo 'selected="selected"' ?>>100</option>
            <option <?php if(isset($request) && $request->records=='250') echo 'selected="selected"' ?>>250</option>
            <option <?php if(isset($request) && $request->records=='500') echo 'selected="selected"' ?>>500</option>                                                                                                                        </optgroup>
            <optgroup>
              <option <?php if(isset($request) && $request->records=='1000') echo 'selected="selected"' ?>>1000</option>
              <option <?php if(isset($request) && $request->records=='5000') echo 'selected="selected"' ?>>5000</option>
            </optgroup>
            <optgroup>
              <option <?php if(isset($request) && $request->records=='all') echo 'selected="selected"' ?>>All</option>
            </optgroup>
          </select>
        </div>
      </div>
    </form>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
           <a href="{{route('admin.vehicles')}}?search=A" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='A') { echo 'style="background-color:blue !important"'; } ?> >A</a>
            <a href="{{route('admin.vehicles')}}?search=B" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='B') { echo 'style="background-color:blue !important"'; } ?> >B</a>
            <a href="{{route('admin.vehicles')}}?search=C" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='C') { echo 'style="background-color:blue !important"'; } ?> >C</a>
            <a href="{{route('admin.vehicles')}}?search=D" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='D') { echo 'style="background-color:blue !important"'; } ?> >D</a>
            <a href="{{route('admin.vehicles')}}?search=E" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='E') { echo 'style="background-color:blue !important"'; } ?> >E</a>
            <a href="{{route('admin.vehicles')}}?search=F" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='F') { echo 'style="background-color:blue !important"'; } ?> >F</a>
            <a href="{{route('admin.vehicles')}}?search=G" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='G') { echo 'style="background-color:blue !important"'; } ?> >G</a>
            <a href="{{route('admin.vehicles')}}?search=H" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='H') { echo 'style="background-color:blue !important"'; } ?> >H</a>
            <a href="{{route('admin.vehicles')}}?search=I" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='I') { echo 'style="background-color:blue !important"'; } ?> >I</a>
            <a href="{{route('admin.vehicles')}}?search=J" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='J') { echo 'style="background-color:blue !important"'; } ?> >J</a>
            <a href="{{route('admin.vehicles')}}?search=K" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='K') { echo 'style="background-color:blue !important"'; } ?> >K</a>
            <a href="{{route('admin.vehicles')}}?search=L" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='L') { echo 'style="background-color:blue !important"'; } ?> >L</a>
            <a href="{{route('admin.vehicles')}}?search=M" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='M') { echo 'style="background-color:blue !important"'; } ?> >M</a>
            <a href="{{route('admin.vehicles')}}?search=N" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='N') { echo 'style="background-color:blue !important"'; } ?> >N</a>
            <a href="{{route('admin.vehicles')}}?search=O" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='O') { echo 'style="background-color:blue !important"'; } ?> >O</a>
            <a href="{{route('admin.vehicles')}}?search=P" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='P') { echo 'style="background-color:blue !important"'; } ?> >P</a>
            <a href="{{route('admin.vehicles')}}?search=Q" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='Q') { echo 'style="background-color:blue !important"'; } ?> >Q</a>
            <a href="{{route('admin.vehicles')}}?search=R" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='R') { echo 'style="background-color:blue !important"'; } ?> >R</a>
            <a href="{{route('admin.vehicles')}}?search=S" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='S') { echo 'style="background-color:blue !important"'; } ?> >S</a>
            <a href="{{route('admin.vehicles')}}?search=T" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='T') { echo 'style="background-color:blue !important"'; } ?> >T</a>
            <a href="{{route('admin.vehicles')}}?search=U" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='U') { echo 'style="background-color:blue !important"'; } ?> >U</a>
            <a href="{{route('admin.vehicles')}}?search=V" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='V') { echo 'style="background-color:blue !important"'; } ?> >V</a>
            <a href="{{route('admin.vehicles')}}?search=W" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='W') { echo 'style="background-color:blue !important"'; } ?> >W</a>
            <a href="{{route('admin.vehicles')}}?search=X" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='X') { echo 'style="background-color:blue !important"'; } ?> >X</a>
            <a href="{{route('admin.vehicles')}}?search=Y" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='Y') { echo 'style="background-color:blue !important"'; } ?> >Y</a>
            <a href="{{route('admin.vehicles')}}?search=Z" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='Z') { echo 'style="background-color:blue !important"'; } ?> >Z</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="get" action="{{route('admin.save-starting-no',['type'=>'estimate'])}}">
            {{csrf_field()}}
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
          <form method="POST" id="vehicle_form" action="{{route('admin.vehicle.save')}}">
            {{csrf_field()}}
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
              <h4 class="modal-title" id="defaultModalLabel">New Vehicle</h4>
            </div>
            <div class="modal-body">
              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" id="name" style="color: black !important;">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary waves-effect">SAVE</button>
              <button type="button" class="btn btn-warning waves-effect ml-2" data-dismiss="modal">CLOSE</button>
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
                <th>Name</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($vehicles as $v)
              <tr>
                <td>{{$v->name}}</td>
                <td>
                  <a data-toggle="modal" data-target="#vehicle_modal" data-id="{{$v->id}}" data-name="{{$v->name}}" data-backdrop="false" class="btn btn-success edit_modal">Edit</a>
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
<script type="text/javascript">
$('.edit_modal').click(function(){
id = $(this).data('id');
name = $(this).data('name');
$('#selected_id').val(id)
$('#defaultModalLabel').html('Edit Vehicle');
$('#name').val(name)
})
</script>

<script type="text/javascript">
  
  $('.open_search').click(function(){

      $('#search_div').toggle(100);
/*        if($('#search_div').css('display') != 'none'){
          $(this).text('Hide Search');
        }else{
          $(this).text('Open Search');
        }*/
  });


  
  

  $('#clear_search').click(function(){

      $('#customer_search').val('');
      $('#search_form').submit();

  });

</script>

@endsection()