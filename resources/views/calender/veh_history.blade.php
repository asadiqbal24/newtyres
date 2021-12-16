
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prev_docs">Prev Docs</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prev_advisors">Prev Advisors</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prev_labour">Prev Labour</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prev_parts">Prev Parts</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prev_mot">Prev MOT</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane animated flipInX" id="prev_docs">
                                @include('calender.vehicle_history.prev_docs')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="prev_advisors">
                                @include('calender.vehicle_history.prev_advisors')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="prev_labour">
                                @include('calender.vehicle_history.prev_labour')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="prev_parts">
                                @include('calender.vehicle_history.prev_parts')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="prev_mot">
                                @include('calender.vehicle_history.prev_mot')
                            </div>
                        </div>
                    