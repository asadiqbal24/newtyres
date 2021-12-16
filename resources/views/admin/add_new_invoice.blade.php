@extends('partials.default')
<style type="text/css">
    .rec_time {
        font-size: 10px;
    }

    .total_first {
        border: 1px solid;
        width: 110px;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
        padding-right: 5px;
        margin-bottom: 0px;
    }

    .total_last {
        border: 1px solid;
        width: 110px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        padding-right: 5px;
        margin-bottom: 0px;
    }

    .total_middle {
        border: 1px solid;
        width: 110px;
        padding-right: 5px;
        margin-bottom: 0px;
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

        <div class="row">
            <div class="col-md-12">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-success save-form">Save</a>
                        <a href="" class="btn btn-success">Issue</a>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Draft <span class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                <li><a href="javascript:void(0);">Print Preview</a></li>
                                <li><a href="javascript:void(0);">Print Draft</a></li>
                                <li><a href="javascript:void(0);">Print Advisories</a></li>
                                <li><a href="javascript:void(0);">Email Draft</a></li>
                                <li><a href="javascript:void(0);">Save To PDF</a></li>
                                <li><a href="javascript:void(0);">Print Job Sheet</a></li>
                                <li><a href="javascript:void(0);">Print Checklist</a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Convert <span class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                <li><a href="javascript:void(0);">Convert to JobSheet</a></li>
                                <li><a href="javascript:void(0);">Convert To Invoice</a></li>
                                <li><a href="javascript:void(0);">Copy To Appointment</a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Transactions <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                <li><a href="javascript:void(0);">Payments</a></li>
                                <li><a href="javascript:void(0);">Insurance Excess</a></li>
                                <li><a href="javascript:void(0);">Credit Note</a></li>
                            </ul>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete <span class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                <li><a href="javascript:void(0);">Void Doc</a></li>
                                <li><a href="javascript:void(0);">Delete Doc</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('admin.save.new.invoice')}}" id="estmate_form">
                            {{csrf_field()}} 
                            @if(isset($invoice))
                            <input type="hidden" name="id" value="{{$invoice->id}}" />
                            <input type="hidden" name="update" value="update" />
                            @else
                            <input type="hidden" name="new" value="new" />
                            @endif
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                         
                                        <div class="col-md-5 input-group">
                                            <div class="form-line">
                                                <label>Registration</label>
                                                <input type="text" name="registration_no" value="{{isset($invoice)?$invoice->registration_no:old('registration_no')}}" required class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default waves-effect"><i class="zmdi zmdi-search"></i></button>
                                                <button type="button" class="btn btn-default waves-effect ml-1">VRM Lookup</button>
                                            </div>
                                        </div>
                                          <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Make / Model</label>
                                                <input type="text" name="model" required value="{{isset($invoice)?$invoice->model:old('model')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-3 input-group">-->
                                        <!--    <div class="form-line">-->
                                        <!--        <label></label>-->
                                        <!--        <input type="text" name="model[]" required value="{{isset($model[1])?$model[1]:''}}" class="form-control" />-->
                                        <!--    </div>-->
                                        <!--    <span class="input-group-addon"> <i></i> </span>-->
                                        <!--</div>-->
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Derivative</label>
                                                <input type="text" name="derivative" required value="{{isset($invoice)?$invoice->derivative:old('derivative')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                    
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Chassis</label>
                                                <input type="text" name="chassis" required value="{{isset($invoice)?$invoice->chassis:old('chassis')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                          <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Engince CC</label>
                                                <input type="text" name="engine_cc" required value="{{isset($invoice)?$invoice->engine_cc:old('engine_cc')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                      
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Fuel Type</label>
                                                <input type="text" name="fuel_type" required value="{{isset($invoice)?$invoice->fuel_type:old('fuel_type')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>

                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Engice Code</label>
                                                <input type="text" name="engine_code" required value="{{isset($invoice)?$invoice->engine_code:old('engine_code')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Engine Number</label>
                                                <input type="text" name="engine_no" required value="{{isset($invoice)?$invoice->engine_no:old('engine_no')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Colour</label>
                                                <input type="text" name="color" required value="{{isset($invoice)?$invoice->color:old('color')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                       
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Paint Code</label>
                                                <input type="text" name="paint_code" required value="{{isset($invoice)?$invoice->paint_code:old('paint_code')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Key Code</label>
                                                <input type="text" name="key_code" required value="{{isset($invoice)?$invoice->key_code:old('key_code')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Radio Code</label>
                                                <input type="text" name="radio_code" required value="{{isset($invoice)?$invoice->radio_code:old('radio_code')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Mileage</label>
                                                <input type="text" name="mileage" required value="{{isset($invoice)?$invoice->mileage:old('mileage')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                       
                                        <div class="col-md-3 input-group">
                                            <div class="form-line">
                                                <label>Date Reg</label>
                                                <input type="date" name="date_reg" required value="{{isset($invoice)?$invoice->date_reg:old('date_reg')}}" class="form-control" />
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div>
                                         <div class="col-md-9 input-group">
                                        <button class="btn btn-xs btn-info">MOT Check</button>
                                        <button class="btn btn-xs btn-danger">Technical Data</button>
                                        <button class="btn btn-xs btn-default">VRM Transfer</button>
                                        <button class="btn btn-xs btn-default"><i class="material-icons">attach_file</i></button>
                                        <button class="btn btn-xs btn-default">More</button>
                                    </div>
                                    </div>
                                   
                                </div>
                                <div class="col-md-6">
                             <div class="row">
                            <div class="col-md-5 input-group">
                                <div class="form-line">
                                    <label>Acc Number</label>
                                    <input type="text" name="acc_number" id="acc_number" required value="{{isset($invoice)?$invoice->acc_number:$r->account_number??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-2">
                                
                                <div class="btn-group" role="group">
                                    <button type="button" id="account_search" class="btn btn-default waves-effect"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </div>

                            <div class="col-md-5 input-group">
                                <div class="form-line">
                                    <label>Company</label>
                                    <input type="text" name="company" id="company" required value="{{isset($invoice)?$invoice->company:$r->company??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>

                         @if(isset($estimate->name))
                            @php $name = unserialize($estimate->model); @endphp
                         @else
                            @php $name = [] @endphp                            
                         @endif 

                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Name</label>
                                    <input type="text" name="name[]" id="first_name" required value="{{isset($name[0])?$name[0]:$r->first_name??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label></label>
                                    <input type="text" name="name[]" id="middle_name"  required value="{{isset($invoice->name[1])?$invoice->name[1]:$r->middle_name??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label></label>
                                    <input type="text" name="name[]" id="last_name"  required value="{{isset($invoice->name[2])?$invoice->name[2]:$r->last_name??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>House No</label>
                                    <input type="text" name="house_no" id="house_no" required value="{{isset($invoice)?$invoice->house_no:$r->house_no??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-2 input-group">
                                <div class="form-line">
                                    <label>Post Code</label>
                                    <input type="text" name="post_code" id="postal_code" required value="{{isset($invoice)?$invoice->post_code:$r->postcode??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-1 input-group">
                                <div class="form-line">
                                      <button class="btn btn-success btn-xs" type="button" id="find_postal_code"><i class="material-icons">search</i></button>  
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Road</label>
                                    <input type="text" name="road" id="road" required value="{{isset($invoice)?$invoice->road:$r->road??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Locality</label>
                                    <input type="text" name="locality" id="locality" required value="{{isset($invoice)?$invoice->locality:$r->locality??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Town</label>
                                    <input type="text" name="town" id="town" required value="{{isset($invoice)?$invoice->town:$r->town??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>County</label>
                                    <input type="text" name="county" id="county" required value="{{isset($invoice)?$invoice->county:$r->county??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" id="telephone" required value="{{isset($invoice)?$invoice->telephone:$r->telephone??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" id="mobile" required value="{{isset($invoice)?$invoice->mobile:$r->mobile??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Email</label>
                                    <input type="email" name="email" id="email" required value="{{isset($invoice)?$invoice->email:$r->email??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-2 input-group">
                            @if(isset($invoice))
                                @if($invoice->is_email=='on')
                                    @php $checked = 'checked'; @endphp
                                @else
                                    @php $checked = ''; @endphp
                                @endif
                            @else  
                              @php $checked = 'checked'; @endphp
                            @endif    
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in" name="is_email" {{$checked}} />
                            <label for="basic_checkbox_2">Email</label>

                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-10 input-group">

                              <button class="btn btn-xs btn-info"><i class="material-icons">mode_edit</i></button>
                            <button class="btn btn-xs btn-danger"><i class="material-icons">mail</i></button>
                            <button class="btn btn-xs btn-default"><i class="material-icons">message</i></button>
                            <button class="btn btn-xs btn-default"><i class="material-icons">place</i> </button>
                            <button class="btn btn-xs btn-default">Deliver To</button>
                            <button class="btn btn-xs btn-default"><i class="material-icons">attach_file</i> </button>                            
                            <button class="btn btn-xs btn-default">More</button>                            

                        </div>
                            
                        </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                <div class="card">
                    <div class="card-body">
                        @include('admin.invoices.tabs')
                    </div>
                </div>
            </div>
        </div>

        <aside id="rightsidebar" class="right-sidebar">
            @include('admin.invoices.right_bar')
        </aside>
    </div>
</section>

@endsection() @section('jsOutside')

<script>
        
 /** Search accordign to account number */
        $('#account_search').on('click', function(){
            var val = $('#acc_number').val();
            $.ajax({
                type:'GET',
                url:'{{route("get_invoice_details")}}',
                data:{account:val },

                success: function( msg ) {

                    if(msg != null){
                        $('#company').val(msg.company)
                        $('#first_name').val(msg.first_name)
                        $('#middle_name').val(msg.middle_name)
                        $('#last_name').val(msg.last_name)
                        $('#house_no').val(msg.house_no)
                        $('#postal_code').val(msg.post_code)
                        $('#road').val(msg.road)
                        $('#locality').val(msg.locality)
                        $('#town').val(msg.town)
                        $('#county').val(msg.county)
                        $('#telephone').val(msg.telephone)
                        $('#mobile').val(msg.mobile)
                        $('#email').val(msg.email)

                    }else{
                        alert("there is no detail of this account, please enter right account no");
                    }
                }
            });
        });

           /** Search accordign to postal code */
        $('#find_postal_code').on('click', function(){
            var val = $('#postal_code').val();
            $.ajax({
                type:'GET',
                url:'{{route("get_invoice_details")}}',
                data:{val:val },

                success: function( msg ) {
                    
                   if(msg != null){
                       
                        $('#postal_code').val(msg.post_code)
                        $('#road').val(msg.road)
                        $('#locality').val(msg.locality)
                        $('#town').val(msg.town)
                        $('#county').val(msg.county)
                        $('#telephone').val(msg.telephone)
                        $('#mobile').val(msg.mobile)
                        $('#email').val(msg.email)

                   }else{
                       alert('there is no record of this postal code!');
                   }
                }
            });
        });
</script>

<script type="text/javascript">
    $(".save-form").click(function () {
        $("#estmate_form").submit();
    });
</script>
@endsection()
