<div class="row">
	<div class="col-md-10">
		<label>
			Combine Invoices & Payments to single<br>
			Audit Trail Transactions export file
		</label>
	</div>
	<div class="col-md-2">
		<div class="demo-checkbox">
			<input type="radio" id="basic_checkbox_1" name="combine_invoice" value="yes" />
			<label for="basic_checkbox_1">Yes</label>
		</div>
		<div class="demo-checkbox">
			<input type="radio" id="basic_checkbox_2" name="combine_invoice" value="0" checked />
			<label for="basic_checkbox_2">No</label>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>General Settings</th>
					<th>Sales</th>
					<th>Expenses</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<label>Simple Export format</label>
						<p>Yes will create one record per invoice containing the grand totals.</p><br>
						<p>No will create multiple records per breakdwon into labour/parts/mot etc.</p>
					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_3" name="simple_export_format" value="1" />
									<label for="basic_checkbox_3">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_4" name="simple_export_format" value="0" checked />
									<label for="basic_checkbox_4">No</label>
								</div>
							</div>
						</div>
						<div class="demo-checkbox">
						</div>
					</td>
					<td>NA</td>
				</tr>
				<tr>
					<td>
						<label>Cash Accounting</label>
						<p>If cash accounting is set only invoices</p><br>
						<p>that are paid in full will be exported. Payments will also include the VAT element, distributed appropriately</p>
					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_5" name="cash_accounting" value="1" />
									<label for="basic_checkbox_5">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_6" name="cash_accounting" value="0" checked />
									<label for="basic_checkbox_6">No</label>
								</div>
							</div>
						</div>
						<div class="demo-checkbox">
						</div>
					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_7" name="cash_accounting_expense" value="yes" />
									<label for="basic_checkbox_7">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_8" name="cash_accounting_expense" value="0" checked />
									<label for="basic_checkbox_8">No</label>
								</div>
							</div>
						</div>
						<div class="demo-checkbox">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label>Export paid in full invoices only</label>
					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_9" name="export_paid" value="yes" />
									<label for="basic_checkbox_9">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_10" name="export_paid" value="0" checked />
									<label for="basic_checkbox_10">No</label>
								</div>
							</div>
						</div>
						<div class="demo-checkbox">
						</div>
					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_11" name="export_paid_expense" value="yes" />
									<label for="basic_checkbox_11">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_12" name="export_paid_expense" value="0" checked />
									<label for="basic_checkbox_12">No</label>
								</div>
							</div>
						</div>
						<div class="demo-checkbox">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label>Department Override</label>
						<p>Sales invoices allow you to choose a department on a per-document basic,<br>
							however, expense documents do not and will default to 1 unless otherwise specified.
						</p>
					</td>
					<td>
						
						NA
						
					</td>
					<td>
						
						<div class="col-md-12 input-group">
							<div class="form-line">
								<input type="text" name="department_override" value="1" required class="form-control">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>
					</td>
				</tr>


				<tr>
					<td>
						<label>Send non account invoices to existing account no.</label>
						<p>These options allow you to pool documents into a single account<br>
						in your third party application, such as all non-account documents into a "Cash Acc"  
					</p>
					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_9" name="export_paid" value="yes" />
									<label for="basic_checkbox_9">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_10" name="export_paid" value="0" checked />
									<label for="basic_checkbox_10">No</label>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 input-group">
							<div class="form-line">
								<input type="text" name="department_override" required class="form-control">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_11" name="export_paid_expense" value="yes" />
									<label for="basic_checkbox_11">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_12" name="export_paid_expense" value="0" checked />
									<label for="basic_checkbox_12">No</label>
								</div>
							</div>
						</div>
						
<div class="col-md-12 input-group">
							<div class="form-line">
								<input type="text" name="department_override" required class="form-control">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

					</td>
				</tr>
			</tbody>


			<thead>
				<tr>
					<th>Used Vehicle Specific Settings</th>
					<th>Part Ex</th>
					<th>Purchase</th>
					
				</tr>
			</thead>

			<tbody>
<tr>
					<td>
						<label>Send ALL Vehicle Part Exchange / Purchases to existing account no.</label>
						<p>These options allow you to pool documents into a single account<br>
						in your third party application  
					</p>
					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_9" name="export_paid" value="yes" />
									<label for="basic_checkbox_9">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_10" name="export_paid" value="0" checked />
									<label for="basic_checkbox_10">No</label>
								</div>
							</div>
						</div>
						
						<div class="col-md-12 input-group">
							<div class="form-line">
								<input type="text" name="department_override" value="PXACC1" required class="form-control">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

					</td>
					<td>
						
						<div class="demo-checkbox">
							<div class="row">
								
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_11" name="export_paid_expense" value="yes" />
									<label for="basic_checkbox_11">Yes</label>
								</div>
								<div class="col-md-12">
									<input type="radio" id="basic_checkbox_12" name="export_paid_expense" value="0" checked />
									<label for="basic_checkbox_12">No</label>
								</div>
							</div>
						</div>
						
<div class="col-md-12 input-group">
							<div class="form-line">
								<input type="text" name="department_override" value="VPACC1" required class="form-control">
							</div>
							<span class="input-group-addon"> <i></i> </span>
						</div>

					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>