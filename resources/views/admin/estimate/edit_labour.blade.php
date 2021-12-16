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
       <form method="post" action="{{route('labour-update')}}" id="estmate_form">
                           {{csrf_field()}}
        <div class="row clearfix">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success save-form">Save</button>
                        <a href="" class="btn btn-success">Issue</a>
                        
                        
                        
                        
                    </div>
                </div>
                <input type="hidden" name="id" class="{{$edit->id}}">


                <div class="card">
                    <div class="card-body">
                 
                                            
                                                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Name</label>
                                                <input type="text" value="{{$edit->name}}" name="name" required="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-9 input-group">
                                            <div class="form-line">
                                                <label>Description</label>
                                                <input type="text" value="{{$edit->description}}" name="description" value="" required="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        
                                          
                                    </div>
                                    
                                    
                                   
                                    <div class="row">
                                       
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Quantity</label>
                                                <input type="text" value="{{$edit->qty}}" id="qty" name="qty" required="" value="" class="form-control multiplier">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Unit Price</label>
                                                <input type="text" value="{{$edit->unit_price}}" id="price" onkeyup="total_value(this)"  name="unit_price" required="" class="form-control unit_price invoice_data row1 multiplier">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>VAT</label>
                                                <input type="text" value="{{$edit->vat}}" name="vat" required="" value="" class="form-control">
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group" id="results">
                                            <div class="form-line">
                                                <label>Total</label>
                                                <input type="number"  value="{{$edit->subtotal}}" id="results"  name="total" value="" class="form-control total invoice_data row1">
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
@section('jsOutside')

<script type="text/javascript">
  
  $(document).ready(function(){
/*    $('#qty').keyup(calculate);
    $('#price').keyup(calculate);*/
});
function calculate(e)
{
    // $('#total').val($('#qty').val() * $('#price').val());
}


function calculate_total(th){
  
  var row = $(th).data('row');
  value = $('#qty'+row).val() * $('#price'+row).val();
  $('#total'+row).val($('#qty'+row).val() * $('#price'+row).val());


  total = 0;

  $('.total').each(function(){

    total = total + Number($(this).val());
  });

  $('#subtotal').val(Number(total));

  taxes = $('#taxes').val();
  $('#grand_total').val(Number(total) + Number(taxes));
}

$('#taxes').keyup(function(){

  val = Number($(this).val());
  subtotal = Number($('#subtotal').val());
  total = subtotal * (val / 100);
  $('#grand_total').val(Number(subtotal) + Number(total));
})



</script>

@endsection()



