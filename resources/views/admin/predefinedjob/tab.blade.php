<div class="row clearfix">
                            <div class="col-sm-12 col-md-12 col-lg-12"> 
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#issued_animation">Description</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#other_docs">Labour</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#appoinment">Parts</a></li> 
                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vehicles">Advisiores</a></li>
                                                                        
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active" id="issued_animation">
                                        @include('admin.predefinedjob.description')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="other_docs">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="{{route('admin-add-labour-rates')}}" class="btn btn-success">Add Labour Rate</a>
                                            </div>
                                        </div>
                                        @include('admin.predefinedjob.labour')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="appoinment">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="{{route('admin-add-part-rates')}}" class="btn btn-success">Add Parts Rate</a>
                                            </div>
                                        </div>
                                        @include('admin.predefinedjob.part')
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated flipInX" id="vehicles">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="{{route('admin-add-advisories')}}" class="btn btn-success">Add Advisories</a>
                                            </div>
                                        </div>
                                        @include('admin.predefinedjob.advisories')
                                    </div>

                                    

                                    
                                    

                                     

                                </div>
                            </div>                           
                        </div>