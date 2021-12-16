@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">

@section('content')  
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.bank')}}">Banks</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Banks</h4>              
              <a href="#" data-toggle="modal" data-target="#add_bank" data-backdrop='false' class="btn btn-raised btn-success waves-effect float-right"><i class="zmdi zmdi-plus"></i> Add Bank</a>
            </div>

            <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>A/c Name</th>
                                        <th>A/c No</th>
                                        <th>Default</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>A/c Name</th>
                                        <th>A/c No</th>
                                        <th>Default</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @if($banks->count()>0)

                                        @foreach($banks as $bank)
                                            <tr>
                                                <td>{{$bank->name}}</td>
                                                <td>{{$bank->acount_name}}</td>
                                                <td>{{$bank->account_no}}</td>
                                                <td>@if($bank->default_b==1) {{'Yes'}} @else {{'No'}} @endif</td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">                                                           

                                                             <li><a href="javascript:void(0);" class="edit_modal" data-toggle="modal" data-id='{{$bank->id}}' data-name='{{$bank->name}}' data-account_name='{{$bank->acount_name}}' data-account_no='{{$bank->account_no}}' data-bsb='{{$bank->bsb}}' data-backdrop="false" data-target="#edit_modal">Edit</a></li>

                                                             <li><a class="sweet-approve" href="#" data-url="{{route('admin.bank-delete',['id'=>$bank->id])}}">Delete</a></li>    

                                                              <li><a class="sweet-approve" href="#" data-url="{{route('admin.bank-default',['id'=>$bank->id])}}">Make Default</a></li>                                                            
                                                        </ul>
                                                    </div>      

                                                </td>
                                            </tr>
                                        @endforeach

                                    @else
                                       <tr><td colspan="3">No Record Found</td></tr> 
                                    @endif    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                    <div class="modal fade" id="add_bank" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="largeModalLabel">Add Bank</h4>
                                    </div>
                                    <form method="post" action="{{route('admin.add_bank')}}">
                                    {{csrf_field()}} 
                                    <div class="modal-body"> 

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>Bank Name</b> </p>
                                                        <input type="text" name="name" class="form-control" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>Account Name</b> </p>
                                                        <input type="text" name="account_name" class="form-control" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>Account No</b> </p>
                                                        <input type="text" name="account_no" class="form-control" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>BSB</b> </p>
                                                        <input type="text" name="bsb" class="form-control" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div> 


                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-link waves-effect">SAVE</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                   </form>
                                </div>
                            </div>
                        </div>


                  

                    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="largeModalLabel">Add Bank</h4>
                                    </div>
                                    <form method="post" action="{{route('admin.edit_bank')}}">
                                    {{csrf_field()}} 
                                    <input type="hidden" name="bank_id" id="bank_id">
                                    <div class="modal-body"> 

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>Bank Name</b> </p>
                                                        <input type="text" name="name" class="form-control" required="required" id="bank_name">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>Account Name</b> </p>
                                                        <input type="text" name="account_name" class="form-control" required="required" id="bank_account_name">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>Account No</b> </p>
                                                        <input type="text" name="account_no" class="form-control" required="required" id="bank_account_no">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div>

                                                    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                        <div class="form-line">
                                                        <p class="m-t-10"> <b>BSB</b> </p>
                                                        <input type="text" name="bsb" class="form-control" id="bank_bsb" required="required">
                                                        </div>
                                                        <span class="input-group-addon"> <i></i> </span>
                                                    </div> 


                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success btn-link waves-effect">SAVE</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                    </div>
                                   </form>
                                </div>
                            </div>
                        </div>



          </div>  
        </div>

        </div>               
    </div>
</section>


@endsection()

@section('jsOutside')
    @include('partials.datatableScripts')

<script type="text/javascript">
    

    $('.edit_modal').click(function(){


        var bank_id = $(this).attr('data-id');
        var bank_name = $(this).attr('data-name');
        var bank_account_name = $(this).attr('data-account_name');
        var bank_account_no = $(this).attr('data-account_no');
        var bank_bsb = $(this).attr('data-bsb');


        $('#bank_id').val(bank_id);
        $('#bank_name').val(bank_name);
        $('#bank_account_name').val(bank_account_name);
        $('#bank_account_no').val(bank_account_no);
        $('#bank_bsb').val(bank_bsb);

    });

</script>


@endsection()

