<div class="row clearfix">
                            <div class="col-sm-12 col-md-12 col-lg-12"> 
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#issued_animation">Issued Docs</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#other_docs">Other Docs</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#appoinment">Appoinments</a></li> 
                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vehicles">Vehicles</a></li>

                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#alt_delivery">Alt Delivery</a></li> 
                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#comms_activity">Comms Activity</a></li>   

                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#overview">Overview</a></li>                                    
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active" id="issued_animation">
                                        @include('admin.customer.issued')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="other_docs">
                                        @include('admin.customer.other_docs')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="appoinment">
                                        @include('admin.customer.appointments')
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated flipInX" id="vehicles">
                                        @include('admin.customer.vehicles')
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated flipInX" id="alt_delivery">

                                        @include('admin.customer.alt_delivery')
                                        
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="comms_activity">
                                        @include('admin.customer.comms_activity')
                                    </div>

                                     <div role="tabpanel" class="tab-pane animated flipInX" id="overview">
                                        @include('admin.customer.overview')
                                    </div>

                                </div>
                            </div>                           
                        </div>