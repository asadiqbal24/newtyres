@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
.input-group-prepend {
position: absolute;
right: 6px;
top: 50%;
transform: translateY(-50%);
}
.bg-deep-purple{
background-color: purple;
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
    
    <div class="row clearfix">
      <div class="col-md-12">
        <a href="#" id="submit_stock_form" class="btn btn-success">Save</a>
<!--         <a href="" class="btn btn-danger float-right">Delete</a> -->
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        @if($errors->any())
        
        @foreach($errors->all() as $error)
        {{ $error }}
        @endforeach
        <div class="alert alert-danger">{{$errors->first()}}</div>
        @endif
        
        <form method="post" action="{{route('admin.save.new.stock')}}" id="stock_form" enctype="multipart/form-data">
          {{csrf_field()}}
          @if(isset($stock))
          <input type="hidden" name="id" value="{{$stock->id}}">
          @endif
          <div class="row">
            <div class="col-md-6">
              
              <div class="row">
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Supplier</label>

                   <input list="supplier_list" name="supplier" class="form-control" required value="{{isset($stock)?$stock->supplier:old('supplier')}}" />
                        <datalist id="supplier_list">
                          @foreach($supplier as $c)
                              <option value="{{$c['name']}}">
                          @endforeach

                        </datalist>  

                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Category</label>


                        <input list="categories" name="category" class="form-control" required value="{{isset($stock)?$stock->category:old('category')}}" />
                        <datalist id="categories">
                          @foreach($fcategories as $c)
                              <option value="{{$c}}">
                          @endforeach

                        </datalist>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Sub</label>                      
                      <input list="csubategories" name="sub" class="form-control" required value="{{isset($stock)?$stock->sub:old('sub')}}" />
                        <datalist id="csubategories">
                          @foreach($fsubcategories as $c)
                              <option value="{{$c}}">
                          @endforeach

                        </datalist>                    



                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Manufacturer</label>
                    <input type="text" name="manufacturer" required value="{{isset($stock)?$stock->manufacturer:old('manufacturer')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Part Number</label>
                    <input type="text" name="part_number" required value="{{isset($stock)?$stock->part_number:old('part_number')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
            
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Barcode Number</label>
                    <input type="text" name="barcode" id="barcode_val" placeholder="Optional (up to 12 digits)" required value="{{isset($stock)?$stock->barcode:old('barcode')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                <div class="col-md-3 input-group">
                  <label></label>
                  <input type="button" name="generate_barcode" id="generate_barcode" value="Generate" class="btn btn-info" style="height: 35px;">
                  <input type="button" name="remove_generate_barcode" id="remove_generate_barcode" value="X" class="btn btn-danger" style="height: 35px;">
                </div>

                <div class="col-md-4 input-group">
                      
                    <div id="barcode_img">@if(isset($stock)) {!! $stock->barcode_img !!} @endif</div>
                    <input type="hidden" name="barcode_data" id="barcode_data">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Description</label>
                    <input type="text" name="description" required value="{{isset($stock)?$stock->description:old('description')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Cost Net</label>
                    <input type="text" name="cost_net" required value="{{isset($stock)?$stock->cost_net:old('cost_net')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                <label>Select</label>
                <div class="col-md-2 input-group">
                
                  <div class="form-line">
                    
                    <select class="form-control show-tick" name="select_cost_net">
                      <option value="t0">T0</option>
                      <option value="t1" selected>T1</option>
                      <option value="t5">T5</option>
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
             
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Trade (Markup) %</label>
                    <input type="text" name="trade_markup" required value="{{isset($stock)?$stock->trade_markup:old('trade_markup')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                </div>
              <div class="row">
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Trade (Net)</label>
                    <input type="text" name="trade_net" required value="{{isset($stock)?$stock->trade_net:old('trade_net')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                <label>TaxCode</label>
                <div class="col-md-2 input-group">
                  <div class="form-line">
                    
                    <select class="form-control show-tick" name="taxcode">
                      <option value="t0">T0</option>
                      <option value="t1" selected>T1</option>
                      <option value="t5">T5</option>
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Retail (Markup) %</label>
                    <input type="text" name="retail_markup" required value="{{isset($stock)?$stock->retail_markup:old('retail_markup')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Retail (Net)</label>
                    <input type="text" name="retail_net" required value="{{isset($stock)?$stock->retail_net:old('retail_net')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                
              </div>
              

              <div class="row">
              <label>Guarantee</label>
                <div class="col-md-2 input-group">
                  <div class="form-line">
                    
                    <select class="form-control show-tick" name="gurantee">
                      <option value="{{NULL}}"></option>
                      <optgroup>
                        <option <?php if(isset($stock) && $stock->gurantee=='7 Days') echo 'selected'; ?> value="7 Days">7 Days</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='14 Days') echo 'selected'; ?> value="14 Days">14 Days</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='28 Days') echo 'selected'; ?> value="28 Days">28 Days</option>
                      </optgroup>
                      <optgroup>
                        <option <?php if(isset($stock) && $stock->gurantee=='1 Month') echo 'selected'; ?> value="1 Month">1 Month</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='3 Month') echo 'selected'; ?> value="3 Month">3 Month</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='6 Month') echo 'selected'; ?> value="6 Month">6 Month</option>
                      </optgroup>
                      <optgroup>
                        <option <?php if(isset($stock) && $stock->gurantee=='1 Year') echo 'selected'; ?> value="1 Year">1 Year</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='2 Years') echo 'selected'; ?> value="2 Years">2 Years</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='3 Years') echo 'selected'; ?> value="3 Years">3 Years</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='5 Years') echo 'selected'; ?> value="5 Years">5 Years</option>
                        <option <?php if(isset($stock) && $stock->gurantee=='10 Years') echo 'selected'; ?> value="10 Years">10 Years</option>
                      </optgroup>
                      <optgroup>
                        <option <?php if(isset($stock) && $stock->gurantee=='Lifetime') echo 'selected'; ?> value="Lifetime">Lifetime</option>
                      </optgroup>
                      <optgroup>
                        <option <?php if(isset($stock) && $stock->gurantee=='Other') echo 'selected'; ?> value="Other">Other</option>
                      </optgroup>
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Type Here</label>
                    <input type="text" name="gurantee_custom" required value="{{isset($stock)?$stock->gurantee_custom:old('gurantee_custom')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                
              
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Location</label>
                    <input type="text" name="location" required value="{{isset($stock)?$stock->location:old('location')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
             
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Keywords</label>
                    <textarea type="text" name="keywords" required value="{{isset($stock)?$stock->keywords:old('keywords')}}" class="form-control" style="height:35px !important; ">{{isset($stock)?$stock->keywords:old('keywords')}}</textarea>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 input-group">
                  <div class="form-line">
                    <label>Tyre Ratings</label>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 input-group">
                  <div class="form-line">
                    <label>Class</label>
                    <select class="form-control show-tick" name="class">
                      <option></option>
                      <option <?php if(isset($stock) && $stock->class=='C1') echo 'selected'; ?> >C1</option>
                      <option <?php if(isset($stock) && $stock->class=='C2') echo 'selected'; ?> >C2</option>
                      <option <?php if(isset($stock) && $stock->class=='C3') echo 'selected'; ?> >C3</option>
                      
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-2 input-group">
                  <div class="form-line">
                    <label>Width</label>
                    <input type="text" name="width" required value="{{isset($stock)?$stock->width:old('width')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-2 input-group">
                  <div class="form-line">
                    <label>Economy</label>
                    <select class="form-control show-tick" name="economy">
                      <option></option>
                      <option <?php if(isset($stock) && $stock->economy=='A') echo 'selected'; ?>>A</option>
                      <option <?php if(isset($stock) && $stock->economy=='B') echo 'selected'; ?>>B</option>
                      <option <?php if(isset($stock) && $stock->economy=='C') echo 'selected'; ?>>C</option>
                      <option <?php if(isset($stock) && $stock->economy=='D') echo 'selected'; ?>>D</option>
                      <option <?php if(isset($stock) && $stock->economy=='E') echo 'selected'; ?>>E</option>
                      <option <?php if(isset($stock) && $stock->economy=='F') echo 'selected'; ?>>F</option>                      
                      <option <?php if(isset($stock) && $stock->economy=='G') echo 'selected'; ?>>G</option>
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-2 input-group">
                  <div class="form-line">
                    <label>Wet Grip</label>
                    <select class="form-control show-tick" name="wet_grip">
                      <option></option>
                      <option <?php if(isset($stock) && $stock->wet_grip=='A') echo 'selected'; ?>>A</option>
                      <option <?php if(isset($stock) && $stock->wet_grip=='B') echo 'selected'; ?>>B</option>
                      <option <?php if(isset($stock) && $stock->wet_grip=='C') echo 'selected'; ?>>C</option>
                      <option <?php if(isset($stock) && $stock->wet_grip=='D') echo 'selected'; ?>>D</option>
                      <option <?php if(isset($stock) && $stock->wet_grip=='E') echo 'selected'; ?>>E</option>
                      <option <?php if(isset($stock) && $stock->wet_grip=='F') echo 'selected'; ?>>F</option>                      
                      <option <?php if(isset($stock) && $stock->wet_grip=='G') echo 'selected'; ?>>G</option>
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-2 input-group">
                  <div class="form-line">
                    <label>Noise</label>
                    <input type="text" name="noise" required value="{{isset($stock)?$stock->noise:old('noise')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>

                <div class="col-md-2 input-group">
                  <div class="form-line">
                    <label>Level</label>
                    <input type="text" name="level" required value="{{isset($stock)?$stock->level:old('level')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>



              </div>
            </div>
            <div class="col-md-6" style="border-left: 1px solid;">

              <div class="row">
              <div class="col-md-12">
                @if(isset($stock_details))
                  @php $check = 'checked'; @endphp                  
                @else
                @if(old('track_item')=='on')
                  @php $check = 'checked'; @endphp
                @else
                  @php $check = 'checked'; @endphp
                @endif 
                @endif 
                <div class="demo-checkbox">
                  <input type="checkbox" value="1" id="md_checkbox_track_item" name="track_item" {{$check}} class="chk-col-red" />
                  <label for="md_checkbox_track_item">Track Item Quantities</label>
                </div>


              </div>

            </div>
              

            <div class="row">
              @if(isset($stock))
                      @php $actual_stock = $stock->actual_stock_level; @endphp
              @else
                 @if(old('actual_stock_level'))
                      @php $actual_stock = old('actual_stock_level'); @endphp
                 @else
                      @php $actual_stock = 0; @endphp
                 @endif 
              @endif
              <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Actual Stock Level</label>
                    <input type="text" name="actual_stock_level" id="actual_stock_level" required value="{{$actual_stock}}" class="form-control">
                  </div>

                  <button type="button" data-toggle="modal" data-target="#adjust_table" data-backdrop="false" class="btn btn-success">+/-</button>
                  <span class="input-group-addon"> <i></i> </span>
                </div>

            </div>


            <div class="row">

              <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Low Stock When Below</label>
                    <input type="number" name="low_stock_below" required value="{{isset($stock)?$stock->low_stock_below:old('low_stock_below')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>

            </div>

            <div class="row">

              <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Minimum Order Quantity</label>
                    <input type="number" name="minimum_order_quantity" required value="{{isset($stock)?$stock->minimum_order_quantity:old('minimum_order_quantity')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>

            </div>


            <div class="row">

              <div class="col-lg-12 col-md-12"> 


              <div class="card">
                <div class="card-header" style="font-size:12px;">
                  <a style="cursor:pointer" class="notes_btn notes_btn_cl" data-type="global">Info Notes</a>
                  <a style="cursor:pointer" class="notes_btn" data-type="user">Image</a>
                  <span style="float: right;font-size: 8px;" class="open_right_divs" data-div="notes_div"><i class="zmdi zmdi-caret-down-circle"></i></span>                  
                </div>
                <div class="card-body notes_div" id="global_notes" style="display: block;">
                  <textarea name="global_notes" id="global_notes_input" rows="10" cols="60">{{isset($stock)?$stock->info_notes:''}}</textarea>
                  


                </div>

                <div class="card-body notes_div" id="user_notes" style="display: none;">
                  <label>Choose Image</label>

                  @if(isset($stock))
                    @if($stock->image!=NULL)
                      <img src="{{$stock->image}}" style="width: 100%;">
                    @endif
                  @endif
                  <input type="file" name="image_upload" value="Choose Image" accept="image/png, image/gif, image/jpeg, image/jpg">
                </div>
              </div>
            </div>



            </div>




            </div>
          </div>
        </form>
      </div>
    </div>



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Supplier</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    



<div class="modal fade" id="adjust_table" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="get" action="{{route('admin.save-starting-no',['type'=>'estimate'])}}">
            {{csrf_field()}}                
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Quantity to Adjust</h4>
            </div>
            <div class="modal-body"> 
                          <p>Specify the amount you would like to adjust the stock quantity by. Use negative numbers to remove from stock

                            <br><br>

                            This change will be recorded in stock transactions.


                          </p>
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                            <div class="form-line">             
                                <label class="col-md-12">Adjust Amount</label>
                                <input type="number" class="form-control" name="adjust_amount" id="adjust_amount">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                            </div> 

            </div>
            <div class="modal-footer">
                <button type="button" id="" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
                <button type="button" id="update_adjust" class="btn btn-link waves-effect">Update</button>

            </div>
        </form>
        </div>
    </div>
</div>

  </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript">
$('.add_new_alt_delivery').click(function(){
$('#div_1').hide();
$('#div_2').show();
});
$('#submit_stock_form').click(function(){
$('#stock_form').submit();
});


$('#generate_barcode').click(function(){

  $.ajax({
                type:'get',
                url:'{{route("admin.generate_barcode")}}',
                data:{_token: "{{ csrf_token() }}"
                },
                success: function( msg ) {

                  $('#barcode_val').val(msg['random_number']);
                  $('#barcode_img').html(msg['barcode']);
                  $('#barcode_data').val(msg['barcode']);

                }
            });

});

$('#update_adjust').click(function(){

    val = $('#adjust_amount').val();
    actual_stock = $('#actual_stock_level').val();
    total = Number(actual_stock) + Number(val);
    $('#actual_stock_level').val(total);
    $('#adjust_amount').val('');
    $('#adjust_table').modal().hide();

});
</script>
@endsection()