<div class="row">


<div class="col-md-12">

<div class="row">
                        
                        <div class="col-md-2">
                          <label>From</label>
                            <input type="date" name="from" class="form-control" placeholder="From">
                        </div>
                        <div class="col-md-2">
                          <label>To</label>
                            <input type="date" name="to" class="form-control" placeholder="To">
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-info" value="{{date('Y-m-d')}}">Today</button>
                        </div>
                        <div class="col-md-2">

                              <select name="created_type" class="form-control show-tick">
                                <option>Date Range</option>
                                <optgroup>
                                    <option value="yesterday">Yesterday</option>
                                    <option value="today">Today</option>

                                </optgroup>

                                <optgroup>
                                    <option value="last_week">Last Week</option>
                                    <option value="this_week">This Week</option>

                                </optgroup>

                                 <optgroup>
                                    <option value="last_month">Last Month</option>
                                    <option value="this_month">This Month</option>

                                </optgroup>


                                <optgroup>
                                    <option value="last_month">Last Quaster</option>
                                    <option value="this_month">This Quater</option>

                                </optgroup>

                                  <optgroup>
                                    <option value="last_month">Last YTD</option>
                                    <option value="this_month">This YTD</option>

                                </optgroup>


                                 <optgroup>
                                    <option value="last_year">Last Year</option>
                                    <option value="this_year">This Year</option>

                                </optgroup>


                                  <optgroup>
                                    <option value="last_year">Last Financial Year</option>
                                    <option value="this_year">This Financial Year</option>

                                </optgroup>


                                
                            </select>

                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-info" >Sales in Range</button>
                        </div>

                        <div class="col-md-2">
                            <button class="btn btn-info" >5 Yr Overview</button>
                        </div>

                         <div class="col-md-1">
                            <button class="btn btn-default btn-xs" ><i class="zmdi zmdi-print"></i></button>
                            <button class="btn btn-default btn-xs" ><i class="zmdi zmdi-collection-pdf"></i></button>
                            <button class="btn btn-default btn-xs" ><i class="zmdi zmdi-comment-list"></i></button>
                        </div>                        
                       
                    </div>


                    <div class="row">


                      <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>BAR CHART</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="bar_chart" height="150"></canvas>
                    </div>
                </div>
            </div>


                    </div>

</div>

</div>