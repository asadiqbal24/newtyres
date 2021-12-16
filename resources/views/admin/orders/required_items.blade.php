<div class="row col-md-12">
  <div class="col-md-6">
    <div class="col-lg-12 col-sm-12 col-md-12 input-group">
      <div class="form-line">
        <label class="col-md-12">Suppliers</label>
        <select class="form-control show-tick" name="supplier">
          <option>Select</option>
          @foreach($suppliers as $sub)
          <option value="{{$sub->id}}">{{$sub->name}}</option>
          @endforeach
        </select>
      </div>
      <span class="input-group-addon"> <i></i> </span>
    </div>
  </div>
  <div class="col-md-6" style="text-align: center;">
    <p class="mt-4">Required items originate from job sheets and invoices</p>
  </div>
</div>
<div class="row col-md-12">
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>
        <th>Part Number</th>
        <th>Description</th>
        <th>For</th>
        <th>Qty</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
</div>