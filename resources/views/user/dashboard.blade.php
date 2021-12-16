  @extends('partials.default')

  @section('content')       
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>




          <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                  
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info">{{$total_requests}}</h3>
                                Total Requests
                            </div>
                        </div>
                    </div>
                   

                     <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple">{{$total_pending}}</h3>
                                Pending
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple">{{$total_inpro}}</h3>
                                In Progress
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary">{{$total_compelted}}</h3>
                                Completed
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger">{{$my_requests}}</h3>
                                My Added Requests
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger">{{$my_processing}}</h3>
                                My Processing Requests
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="card text-center m-b-30">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger">{{$my_completed}}</h3>
                                My Completed Requests
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->



@endsection()

@section('jsOutside')
@endsection()