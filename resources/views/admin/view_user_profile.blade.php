@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
<style type="text/css">
    .fa_font_size{
        font-size: 30px !important;
    }
</style>
@section('content')  
<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Profile</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            <div class="profile-image"> <img src="{{asset('public/images/users/'.$user->id.'/'.$user->image)}}" alt=""> </div>
                            <h4 class="mb-0"><strong>{{$user->name}}</strong></h4>
                            <span>{{$user->email}}</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Earnings</h2>
                    </div>
                    <div class="body">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card widget-stat">
                                <div class="body bg-cyan">
                                    <div class="media">
                                        <div class="media-icon bg-cyan">
                                            <i class="fa fa-users fa_font_size"></i>
                                        </div>
                                        <div class="media-text">
                                            <span class="title">Users</span>
                                            <span class="value">{{$user->total_users}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card widget-stat">
                                <div class="body bg-cyan">
                                    <div class="media">
                                        <div class="media-icon bg-cyan">
                                            <i class="fa fa-users fa_font_size"></i>
                                        </div>
                                        <div class="media-text">
                                            <span class="title">Gold Users</span>
                                            <span class="value">{{$user->gold_users}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                         <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card widget-stat">
                                <div class="body bg-green">
                                    <div class="media">
                                        <div class="media-icon bg-green">
                                            <i class="fa fa-money fa_font_size"></i>
                                        </div>
                                        <div class="media-text">
                                            <span class="title">Earned Bonus</span>
                                            <span class="value">{{$currency->value}} {{$user->total_bonus}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card widget-stat">
                                <div class="body bg-orange">
                                    <div class="media">
                                        <div class="media-icon bg-orange">
                                            <i class="fa fa-money fa_font_size"></i>
                                        </div>
                                        <div class="media-text">
                                            <span class="title">Pending Bonus</span>
                                            <span class="value">{{$currency->value}} {{$pending_earning}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card widget-stat">
                                <div class="body bg-indigo">
                                    <div class="media">
                                        <div class="media-icon bg-indigo">
                                            <i class="fa fa-money fa_font_size"></i>
                                        </div>
                                        <div class="media-text">
                                            <span class="title">Total Bonus</span>
                                            <span class="value">{{$currency->value}} {{$pending_earning + $user->total_bonus}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            <div class="col-lg-8 col-md-1">
                <div class="card">
                    <div class="body"> 
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bank">Bank Details</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Bonus</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Transactions</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#courses">Courses</a></li>                            
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="mypost">
                                <div class="wrap-reset">
                                    
                                    <div class="mypost-list">
                                            
                                            <label style="color: black;">Full Name: <?php echo $user->name; ?></label>
                                            <hr>
                                            <label style="color: black;">UserName: <?php echo $user->username; ?></label> 
                                            <hr>
                                            <label style="color: black;">Email: <?php echo $user->email; ?></label> 
                                            <hr>
                                            <label style="color: black;">Gender: <?php if($user->gender=='M'){ echo 'Male';}else{ echo "Female" ; } ?></label>
                                            <hr>
                                            <label style="color: black;">Phone: <?php echo $user->phone; ?></label> 
                                            <hr>
                                            <label style="color: black;">Nic: <?php echo $user->nic; ?></label>   
                                            <hr>
                                            <label style="color: black;">Address: <?php echo $user->address; ?></label> 
                                            <hr>
                                            <label style="color: black;">Nominee: <?php echo $user->nominee; ?></label> 
                                            <hr>
                                            <label style="color: black;">Relation With Nonimee: <?php echo $user->relation_with_monimee; ?></label>
                                            <hr>
                                            <label style="color: black;">KYC Image:</label>
                                            @if(!empty($user_kyc))
                                                <img src="{{asset('public/images/users_kyc/'.$user_kyc->user_id.'/'.$user_kyc->file)}}" style="width: 100%;">                     
                                            @endif    
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="timeline">
                                <div class="timeline-body">
                                    <div class="timeline m-border">
                                        
                                        <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>From</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>From</th>
                                                            <th>Amount</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        @if($earning->count())
                                                            @foreach($earning as $ear)
                                                              <tr>
                                                                  <td>{{$ear->created_at}}</td>
                                                                  <td>{{$ear->from_users->name}}</td>
                                                                  <td>{{$currency->value}} {{$ear->amount}}</td>
                                                                  @if($ear->transfered=='false')
                                                                    <td>Pending</td>
                                                                  @else
                                                                    <td>Recieved</td>
                                                                  @endif
                                                                  
                                                              </tr>  
                                                            @endforeach    
                                                        @else
                                                       <tr><td colspan="4">No Record Found</td></tr>     
                                                        @endif
                                                        
                                                    </tbody>
                                                </table>
                                            </div>

                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="usersettings">
                                
                                <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Date</th>
                                                        <th>Desc.</th>
                                                        <th>Dr.</th>
                                                        <th>Cr.</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                  @php $bal = 0; @endphp   
                                                   @if($transactions->count()>0) 
                                                   @php $i=1; @endphp
                                                    @foreach($transactions as $tr)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$tr->created_at}}</td>
                                                            <td>{{$tr->desc}}</td>
                                                            <td>
                                                                @if($tr->type=='dr')
                                                                {{$tr->amount}}
                                                                @else
                                                                {{'0'}}
                                                                @endif
                                                                {{$currency->value}}
                                                            </td>
                                                            <td>
                                                                @if($tr->type=='cr')
                                                                {{$tr->amount}}
                                                                @else
                                                                {{'0'}}
                                                                @endif
                                                                {{$currency->value}}
                                                            </td>
                                                           
                                                        </tr>
                                                    @endforeach
                                                   @else
                                                        <tr><td colspan="7">No Record Found</td></tr>
                                                   @endif 
                                                    
                                                </tbody>
                                                
                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th>Total</th>
                                                        <th>{{$bal}}</th>
                                                    </tr>
                                                </tfoot>

                                            </table>
                                </div>

                            </div>

                                <div role="tabpanel" class="tab-pane" id="courses">


                                                                    <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Expiry.</th>
                                                        <th>Course</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>

                                                   @if($my_courses->count()>0) 
                                                   @php $i=1; @endphp
                                                    @foreach($my_courses as $tr)
                                                        <tr>
                                                            <td>{{$tr->date}}</td>
                                                            <td>{{$tr->expiry_date}}</td>
                                                            <td>{{$tr->course_detail->name}}</td>                                                           
                                                        </tr>
                                                    @endforeach
                                                   @else
                                                        <tr><td colspan="3">No Record Found</td></tr>
                                                   @endif 
                                                    
                                                </tbody>
                                                
                                            </table>
                                </div>



                                </div>

                            <div role="tabpanel" class="tab-pane" id="bank">
                                <div class="wrap-reset">
                                           @if(!empty($user_bank)) 
                                            <label style="color: black;">Bank Name: <?php echo $user_bank->name; ?></label>
                                            <hr>
                                            <label style="color: black;">Account #: <?php echo $user_bank->account_no; ?></label> 
                                            <hr>
                                            <label style="color: black;">Iban #: <?php echo $user_bank->iban_no; ?></label> 
                                            <hr>
                                            <label style="color: black;">Branch Code: <?php echo $user_bank->branch_code; ?></label> 
                                            <hr>
                                            @endif
                                  </div>          
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
@endsection()

