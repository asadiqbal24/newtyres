@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
@section('customers','active_tab')
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

          <a href="{{route('admin.add.new.customer')}}" class="btn btn-success">New Customer</a>
          <a href="{{route('admin.advanced_search')}}" class="btn btn-success">Adv. Search</a>
          <a href="" class="btn btn-success">Print</a>
          <a style="cursor: pointer;" class="btn btn-success open_search" >Search</a>          

      </div>
    </div>
    
    <div class="card" style="display: none;" id="search_div">
      <form method="get" action="{{route('admin.customers')}}" id="search_form">
      <div class="card-body row">
        <div class="col-md-2">
          <input type="text" name="customer_search" id="customer_search" class="form-control" value="{{$request->customer_search}}" placeholder="Customer Search" style="border-bottom: 1px solid;padding: 20px;">
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

      <div class="card-body row">
          <div class="col-md-12">
            <a href="{{route('admin.customers')}}?search=A" class="btn btn-primary btn-xs alpha_pad">A</a>
            <a href="{{route('admin.customers')}}?search=B" class="btn btn-primary btn-xs alpha_pad">B</a>
            <a href="{{route('admin.customers')}}?search=C" class="btn btn-primary btn-xs alpha_pad">C</a>
            <a href="{{route('admin.customers')}}?search=D" class="btn btn-primary btn-xs alpha_pad">D</a>
            <a href="{{route('admin.customers')}}?search=E" class="btn btn-primary btn-xs alpha_pad">E</a>
            <a href="{{route('admin.customers')}}?search=F" class="btn btn-primary btn-xs alpha_pad">F</a>
            <a href="{{route('admin.customers')}}?search=G" class="btn btn-primary btn-xs alpha_pad">G</a>
            <a href="{{route('admin.customers')}}?search=H" class="btn btn-primary btn-xs alpha_pad">H</a>
            <a href="{{route('admin.customers')}}?search=I" class="btn btn-primary btn-xs alpha_pad">I</a>
            <a href="{{route('admin.customers')}}?search=J" class="btn btn-primary btn-xs alpha_pad">J</a>
            <a href="{{route('admin.customers')}}?search=K" class="btn btn-primary btn-xs alpha_pad">K</a>
            <a href="{{route('admin.customers')}}?search=L" class="btn btn-primary btn-xs alpha_pad">L</a>
            <a href="{{route('admin.customers')}}?search=M" class="btn btn-primary btn-xs alpha_pad">M</a>
            <a href="{{route('admin.customers')}}?search=N" class="btn btn-primary btn-xs alpha_pad">N</a>
            <a href="{{route('admin.customers')}}?search=O" class="btn btn-primary btn-xs alpha_pad">O</a>
            <a href="{{route('admin.customers')}}?search=P" class="btn btn-primary btn-xs alpha_pad">P</a>
            <a href="{{route('admin.customers')}}?search=Q" class="btn btn-primary btn-xs alpha_pad">Q</a>
            <a href="{{route('admin.customers')}}?search=R" class="btn btn-primary btn-xs alpha_pad">R</a>
            <a href="{{route('admin.customers')}}?search=S" class="btn btn-primary btn-xs alpha_pad">S</a>
            <a href="{{route('admin.customers')}}?search=T" class="btn btn-primary btn-xs alpha_pad">T</a>
            <a href="{{route('admin.customers')}}?search=U" class="btn btn-primary btn-xs alpha_pad">U</a>
            <a href="{{route('admin.customers')}}?search=V" class="btn btn-primary btn-xs alpha_pad">V</a>
            <a href="{{route('admin.customers')}}?search=W" class="btn btn-primary btn-xs alpha_pad">W</a>
            <a href="{{route('admin.customers')}}?search=X" class="btn btn-primary btn-xs alpha_pad">X</a>
            <a href="{{route('admin.customers')}}?search=Y" class="btn btn-primary btn-xs alpha_pad">Y</a>
            <a href="{{route('admin.customers')}}?search=Z" class="btn btn-primary btn-xs alpha_pad">Z</a>
          </div>
        </div>
      </form>
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
    <div class="card">
      <div class="card-body">
        <div class="row">
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>Acc Number</th>
                <th>Name</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>Tot Veh</th>
                <th>Tot Docs</th>
                <th>Last Inc</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($customers as $c)
              <tr>
                <td>{{$c->account_number}}</td>
                <td>{{$c->first_name}} {{$c->middle_name}} {{$c->last_name}}</td>
                <td>{{$c->house_no}} {{$c->road}} {{$c->locality}} {{$c->town}} {{$c->county}}</td>
                <td>{{$c->postal_code}}</td>
                <td>0</td>
                <td>1</td>
                <td>
                  <!--<button class="btn btn-info"><i class="material-icons">phone</i></button>-->
                                       
                   <a href="#" data-toggle="modal" data-target="#mobile{{ $c->id }}" data-backdrop="false">
                   <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
</a> | 
                    <a href="{{ route('admin.edit.appointment', ['id' => $c->id ]) }}" >open</a>
                       <div class="modal fade" id="mobile{{ $c->id }}" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form method="POST" id="vehicle_form" action="">
                                {{csrf_field()}}
                                <input type="hidden" name="selected_id" id="selected_id">
                                <div class="modal-header">
                                  <h4 class="modal-title" id="defaultModalLabel">Contact Information</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                        <label class="mr-2">Company</label>
                                       <input type="text" class="form-control" name="company" id="company" value="{{ $c->company }}" style="color: black !important;">
                                       
                                    </div>
                                    
                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                        <label class="mr-2">Telephone</label>
                                       <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $c->telephone }}" style="color: black !important;">
                                        <a href="tel:{{ $c->telephone }}" class="float-right">
                                                                                                                    <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                                </a>
                                    </div>
                                    
                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                        <label class="mr-2">Mobile</label>
                                       <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $c->mobile }}" style="color: black !important;">
                                        <a href="tel:{{ $c->mobile }}" class="float-right">
                                                                                                                    <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                        </a>
                                    </div>
                                    
                                    <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                        <label class="mr-2">Email</label>
                                       <input type="email" class="form-control" name="email" id="email" value="{{ $c->email }}" style="color: black !important;">
                                        <a href="mailto:{{ $c->email }}" class="btn btn-primary btn-xs  float-right">Email</a>
                                    </div>
                               
                                <div>
                                    <span>Send Message to mobile number</span>
                                </div>
                                
                                <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                        <label class="mr-2">Send SMS</label>
                                          <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $c->mobile }}" style="color: black !important;">
                                       <a href="sms:{{ $c->mobile }}">
                                         <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
<path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
</svg></a>
                                    </div>
                                
                                
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-warning btn-sm waves-effect ml-2" data-dismiss="modal">CLOSE</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
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