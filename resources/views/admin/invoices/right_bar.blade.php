<div class="card">
    
    <div class="card-header" style="background: #948282;color: white;">
        Additional Info
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 input-group">
                <label>Rec Time</label>
                <select class="form-control show-tick rec_time" name="rec_time">
                    @foreach($time_array as $tm)
                    {!!$tm!!}
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 input-group">
                <label>Rec Date</label>
                <input type="date" name="rec_date" value="{{date('Y-m-d')}}" required class="form-control">
                <span class="input-group-addon"> <i></i> </span>
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-6 input-group">
                <label>Due Time</label>
                <select class="form-control show-tick rec_time" name="due_time">
                    @foreach($time_array as $tm)
                    {!!$tm!!}
                    @endforeach
                </select>
                
            </div>
            <div class="col-md-6 input-group">
                <label>Due Date</label>
                <input type="date" name="due_date" value="{{date('Y-m-d')}}" required class="form-control">
                <span class="input-group-addon"> <i></i> </span>
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Invoice Date</label>
                <input type="date" name="invoice_date" required class="form-control">
                <span class="input-group-addon"> <i></i> </span>
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Status</label>
                <select class="form-control show-tick" name="status">
                    <option>~</option>
                    <option>Auth Req</option>
                    <option>Complete</option>
                    <option>MOT</option>
                    <option>Service</option>
                    <option>Agent</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <div class="form-line">
                    <label>Order Ref</label>
                    <input type="text" name="order_ref" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Department</label>
                <select class="form-control show-tick" name="department">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Terms</label>
                <select class="form-control show-tick" name="terms">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Sales Advisor</label>
                <select class="form-control show-tick" name="sales_advisor">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Technician</label>
                <select class="form-control show-tick" name="technician">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Road Tester</label>
                <select class="form-control show-tick" name="road_tester">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
    </div>
</div>
<div class="card">
    
    <div class="card-header" style="background: #948282;color: white;">
        Extras
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 input-group">
                <label>MOT</label>
                <div class="row">
                    <div class="col-md-7">
                        <select class="form-control show-tick" name="mot">
                            <option></option>
                            <option>Full</option>
                            <option>Retest</option>
                            <option>Duplicate</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <div class="form-line">
                            <label></label>
                            <input type="text" name="mot_custom" required class="form-control">
                        </div>
                        <span class="input-group-addon"> <i></i> </span>
                    </div>
                </div>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>MOT Class</label>
                <select class="form-control show-tick" name="mot_class">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>MOT Status</label>
                <select class="form-control show-tick" name="mot_status">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>MOT Tester</label>
                <select class="form-control show-tick" name="mot_tester">
                    <option>~</option>
                </select>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Sundries</label>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-line">
                            <label></label>
                            <input type="text" name="sundries_custom" required class="form-control">
                        </div>
                        <span class="input-group-addon"> <i></i> </span>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control show-tick" name="sundries">
                            <option></option>
                            <option>To Vat Free 0%</option>
                            <option>T1 EXC Vat 20%</option>
                            <option>T5 Custom 20%</option>
                        </select>
                    </div>
                    
                </div>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Lubricants</label>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-line">
                            <label></label>
                            <input type="text" name="lubricants_custom" required class="form-control">
                        </div>
                        <span class="input-group-addon"> <i></i> </span>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control show-tick" name="lubricants">
                            <option></option>
                            <option>To Vat Free 0%</option>
                            <option>T1 EXC Vat 20%</option>
                            <option>T5 Custom 20%</option>
                        </select>
                    </div>
                    
                </div>
                
            </div>
            <hr style="width: 100%">
        </div>
        <div class="row">
            <div class="col-md-12 input-group">
                <label>Paint & Mat.</label>
                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-line">
                            <label></label>
                            <input type="text" name="paint_and_mat_custom" required class="form-control">
                        </div>
                        <span class="input-group-addon"> <i></i> </span>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control show-tick" name="paint_and_mat">
                            <option></option>
                            <option>To Vat Free 0%</option>
                            <option>T1 EXC Vat 20%</option>
                            <option>T5 Custom 20%</option>
                        </select>
                    </div>
                    
                </div>
                
            </div>
            <hr style="width: 100%">
        </div>
    </div>
</div>



<div class="card">
    
    <div class="card-header" style="background: #948282;color: white;">
        Total <span class="float-right">Pending</span>
    </div>
    <div class="card-body">
            
            <div class="row">
                <div class="col-md-4">
                    <label style="margin-bottom:0px;">Subtotal</label>
                </div>

                <div class="col-md-8 text-right">
                    <label class="total_first">0.00</label>                    
                </div>                
            </div>


            <div class="row">
                <div class="col-md-4">
                    <label style="margin-bottom:0px;">VAT</label>
                </div>

                <div class="col-md-8 text-right">
                    <label class="total_middle">0.00</label>                    
                </div>                
            </div>


            <div class="row">
                <div class="col-md-4">
                    <label style="margin-bottom:0px;">MOT</label>
                </div>

                <div class="col-md-8 text-right">
                    <label class="total_middle">0.00</label>                    
                </div>                
            </div>


            <div class="row">
                <div class="col-md-4">
                    <label style="margin-bottom:0px;"><strong>Total</strong></label>
                </div>

                <div class="col-md-8 text-right">
                    <label class="total_middle">0.00</label>                    
                </div>                
            </div>


            <div class="row">
                <div class="col-md-4">
                    <label style="margin-bottom:0px;">Excess</label>
                </div>

                <div class="col-md-8 text-right">
                    <label class="total_middle">0.00</label>                    
                </div>                
            </div>


            <div class="row">
                <div class="col-md-4">
                    <label style="margin-bottom:0px;"><strong>Receipts</strong></label>
                </div>

                <div class="col-md-8 text-right">
                    <label class="total_middle">0.00</label>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label style="margin-bottom:0px;"><strong>Balance</strong></label>
                </div>

                <div class="col-md-8 text-right">
                    <label class="total_last">0.00</label>                    
                </div>                
            </div>


    </div>

    </div>