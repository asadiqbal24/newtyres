<div class="row clearfix">
                            <div class="col-sm-12 col-md-12 col-lg-12"> 
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hisory_animation">History</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#description_animation">Description</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#labour_animation">Labour</a></li> 
                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#parts_animation">Parts</a></li>

                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#advisories_animation">Advisories</a></li> 
                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#acticity_animation">Activity</a></li>                                    
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active" id="hisory_animation">
                                        @include('admin.estimate.history')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="description_animation">
                                        @include('admin.estimate.description')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="labour_animation">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a  href="{{route('admin-add-labour-rates')}}"  class="btn btn-success">Add Labour Rate</a>
                                            </div>
                                        </div>
                                        @include('admin.estimate.labour')
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated flipInX" id="parts_animation">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a  href="{{route('admin-add-part-rates')}}"  class="btn btn-success">Add Parts Rate</a>
                                            </div>
                                        </div>
                                        @include('admin.estimate.parts')
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated flipInX" id="advisories_animation">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a  href="{{route('admin-add-advisories')}}"  class="btn btn-success">Add Advisories</a>
                                            </div>
                                        </div>
                                        @include('admin.estimate.advisories')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="acticity_animation">
                                        @include('admin.estimate.activity')
                                    </div>

                                </div>
                            </div>                           
                        </div>