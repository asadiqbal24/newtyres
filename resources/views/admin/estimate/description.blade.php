<div class="row">

	 						<div class="col-md-5 input-group">
                                <div class="form-line">
                                    <label>Pre-set Descriptions</label>
                                     <select class="form-control show-tick" required="required" name="predined_description">
                                                <option value="{{NULL}}">Choose</option>
                                            </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-1 input-group">
                            	<a href="{{route('admin-description-list')}}" class="btn btn-default" type="button"><i class="zmdi zmdi-plus"></i></a>
                            </div>

</div>

<div class="row">


	 						<div class="col-md-12 input-group">
                                <div class="form-line">
                                	<textarea class="form-control" name="descriptions"></textarea>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-md-12 input-group" style="text-align: center;">
                            	<p style="font-size: 13px;margin: 0 auto;"><i>This area is designed for breif descriptions of work, approximately 35 lines of content will print.<br>	
                            		If you require more, use zero quantity/priced labour lines instead, using Shift + Enter to go to a new line, when required.</i>
                            	</p>
                            </div>


</div>