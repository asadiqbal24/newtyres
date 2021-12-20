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
        
        <div class="row clearfix">
            <div class="col-md-12">
                <a href="#" class="btn btn-success save-form">Save</a>
                <a href="" class="btn btn-success">Print</a>
                <a href="" class="btn btn-success">Email</a>
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"> Extras <span class="caret"></span> </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                        <li><a href="javascript:void(0);">Print Preview</a></li>
                        <li><a href="javascript:void(0);">Print Advisories</a></li>
                        <li><a href="javascript:void(0);">Save To PDF</a></li>
                        <li><a href="javascript:void(0);">Print Job Sheet</a></li>
                        <li><a href="javascript:void(0);">Print Checklist</a></li>
                    </ul>
                </div>
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"> Convert <span class="caret"></span> </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                        <li><a href="javascript:void(0);">Convert to JobSheet</a></li>
                        <li><a href="javascript:void(0);">Convert To Invoice</a></li>
                        <li><a href="javascript:void(0);">Copy To Appointment</a></li>
                    </ul>
                </div>
                <a href="" class="btn btn-danger float-right">Delete</a>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
                @if(\Session::has('errors_val'))
                @php $errors =  \Session::get('errors_val'); @endphp
                @foreach($errors->messages() as $e)
                <div class="alert alert-danger">
                    <?php print_r($e[0]) ?>
                </div>
                @endforeach
                @endif
                <form method="post" action="{{route('admin.save.new.jobsheet')}}" id="estmate_form">
                    {{csrf_field()}}
                    @if(isset($jobSheet))
                    <input type="hidden" name="id" value="{{$jobSheet->id}}">
                    <input type="hidden" name="update" value="update">
                    @endif
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 input-group">
                                    <div class="form-line">
                                        <label>Registration</label>
                                        <input type="text" name="registration_no" value="{{isset($jobSheet)?$jobSheet->registration_no:old('registration_no')}}" required class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-4 input-group">
                                    <div class="form-line">
                                        <label>Make</label>
                                        <input list="makeList" name="model[]" id="make" value="{{isset($model[0])?$model[0]:''}}" class="form-control">

                                            <datalist id="makeList">
                                                @foreach($vehicles as $vh)
                                                    <option value="{{$vh->id}}">{{$vh->name}}</option>
                                                @endforeach        

                                            </datalist>

                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>

                                 <div class="col-md-4 input-group">
                                    <div class="form-line">
                                        <label>Model</label>
                                        <input type="text" name="model[]" required value="{{isset($model[1])?$model[1]:''}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>

                                
                                
                                @if(isset($jobSheet->model))
                                @php $model = unserialize($jobSheet->model);
                                 @endphp
                                @else
                                @if(old('model')!=null)
                                @php $model = old('model') @endphp
                                @else
                                @php $model = [] @endphp
                                @endif
                                @endif
                                
                                
                            </div>
                            <div class="row">
                                
                                <div class="col-md-3">
                                    
                                    <div  role="group">
                                        <button type="button" class="btn btn-default btn-sm waves-effect"><i class="zmdi zmdi-search"></i></button>
                                        <div>
                                         <button type="button" class="btn btn-default btn-sm waves-effect ml-1">VRM Lookup</button>   
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Derivative</label>
                                        <input type="text" name="derivative" required value="{{isset($jobSheet)?$jobSheet->derivative:old('derivative')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Chassis</label>
                                        <input type="text" name="chassis" required value="{{isset($jobSheet)?$jobSheet->chassis:old('chassis')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                
                                
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Engince CC</label>
                                        <input type="text" name="engine_cc" required value="{{isset($jobSheet)?$jobSheet->engine_cc:old('engine_cc')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Engice Code</label>
                                        <input type="text" name="engine_code" required value="{{isset($jobSheet)?$jobSheet->engine_code:old('engine_code')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Engine Number</label>
                                        <input type="text" name="engine_no" required value="{{isset($jobSheet)?$jobSheet->engine_no:old('engine_no')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Colour</label>
                                        <input type="text" name="color" required value="{{isset($jobSheet)?$jobSheet->color:old('color')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Paint Code</label>
                                        <input type="text" name="paint_code" required value="{{isset($jobSheet)?$jobSheet->paint_code:old('paint_code')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Key Code</label>
                                        <input type="text" name="key_code" required value="{{isset($jobSheet)?$jobSheet->key_code:old('key_code')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Radio Code</label>
                                        <input type="text" name="radio_code" required value="{{isset($jobSheet)?$jobSheet->radio_code:old('radio_code')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Mileage</label>
                                        <input type="text" name="mileage" required value="{{isset($jobSheet)?$jobSheet->mileage:old('mileage')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-3 input-group">
                                    <div class="form-line">
                                        <label>Date Reg</label>
                                        <input type="date" name="date_reg" required value="{{isset($jobSheet)?$jobSheet->date_reg:old('date_reg')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-2 input-group">
                                    <div class="form-line">
                                        <label>Fuel Type</label>
                                        <input type="text" name="fuel_type" required value="{{isset($jobSheet)?$jobSheet->fuel_type:old('fuel_type')}}" class="form-control">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                <div class="col-md-10 input-group">
                                    <button class="btn btn-xs btn-info">MOT Check</button>
                                    <button class="btn btn-xs btn-danger">Technical Data</button>
                                    <button class="btn btn-xs btn-default">VRM Transfer</button>
                                    <button class="btn btn-xs btn-default"><i class="material-icons">attach_file</i> </button>
                                    <button class="btn btn-xs btn-default">More</button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        
                        <div class="row">
                            <div class="col-md-5 input-group">
                                <div class="form-line">
                                    <label>Acc Number</label>
                                    <input type="text" name="acc_number" id="acc_number" required value="{{isset($jobSheet)?$jobSheet->acc_number:$r->account_number??''}}" class="form-control">
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
                                    <input type="text" name="company" id="company" required value="{{isset($jobSheet)?$jobSheet->company:$r->company??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>

                         @if(isset($jobSheet->name))
                            @php $name = unserialize($jobSheet->model); @endphp
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
                                    <input type="text" name="name[]" id="middle_name"  required value="{{isset($name[1])?$name[1]:$r->middle_name??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label></label>
                                    <input type="text" name="name[]" id="last_name"  required value="{{isset($name[2])?$name[2]:$r->last_name??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>House No</label>
                                    <input type="text" name="house_no" id="house_no" required value="{{isset($jobSheet)?$jobSheet->house_no:$r->house_no??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-2 input-group">
                                <div class="form-line">
                                    <label>Post Code</label>
                                    <input type="text" name="post_code" id="postal_code" required value="{{isset($jobSheet)?$jobSheet->post_code:$r->postcode??''}}" class="form-control">
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
                                    <input type="text" name="road" id="road" required value="{{isset($jobSheet)?$jobSheet->road:$r->road??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Locality</label>
                                    <input type="text" name="locality" id="locality" required value="{{isset($jobSheet)?$jobSheet->locality:$r->locality??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Town</label>
                                    <input type="text" name="town" id="town" required value="{{isset($jobSheet)?$jobSheet->town:$r->town??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>County</label>
                                    <input type="text" name="county" id="county" required value="{{isset($jobSheet)?$jobSheet->county:$r->county??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" id="telephone" required value="{{isset($jobSheet)?$jobSheet->telephone:$r->telephone??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" id="mobile" required value="{{isset($jobSheet)?$jobSheet->mobile:$r->mobile??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-1 input-group">
                            @if(isset($jobSheet))
                                @if($jobSheet->is_email=='on')
                                    @php $checked = 'checked'; @endphp
                                @else
                                    @php $checked = ''; @endphp
                                @endif
                            @else                                   
                            @php $checked = 'checked'; @endphp

                            @endif    
                    <input type="checkbox" id="basic_checkbox_2" class="filled-in" name="is_email"  @if(isset($jobSheet)?$jobSheet->is_email:'') checked @endif>
                            <label for="basic_checkbox_2">Email</label>

                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-11 input-group">
                                <div class="form-line">
                                    <label></label>
                                    <input type="email" name="email" id="email" required value="{{isset($jobSheet)?$jobSheet->email:$r->email??''}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>

                        <div class="row">

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
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @include('admin.estimate.tabs')
            </div>
        </div>
    </div>
    
    
    
</div>
</section>
@endsection()
@section('jsOutside')


 <script>

        /** Search accordign to account number */
        $('#account_search').on('click', function(){
            var val = $('#acc_number').val();
            $.ajax({
                type:'GET',
                url:'{{route("get_jobsheet_details")}}',
                data:{account:val },

                success: function( msg ) {

                    if(msg != ''){
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
                url:'{{route("get_jobsheet_details")}}',
                data:{val:val },

                success: function( msg ) {

                    if(msg != ''){

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
$('.save-form').click(function(){
$('#estmate_form').submit();
});
</script>
@endsection()