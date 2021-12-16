<div class="row">
  <div class="col-md-5">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Title</th>
          <th>First Name</th>
          <th>Surname</th>
          <th><input type="checkbox" name=""></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="col-md-7" style="border-left: 1px solid #d0d0d0">
    <div class="row" id="div_1">
      <div class="col-md-5">
        <a href="javascript:void(0)" class="btn btn-default add_new_alt_delivery">Add New</a>
      </div>
      <div class="col-md-7">
        <div>
          <p style="font-size: 12px;">Notes:<br><br>
            Alternate delivery addressess are printed on a delivery note.<br><br>
            This allows you to retain the invoice address of the owner whilst storing the address to where the vehicle should be delivered if you offer such a service.
            <br><br>
            i.e<br>
            Mr Smith's company vehicle is in for repairs.<br>
            The company will be invoiced, but the vehicle delivered to Mr Smiths home address.<br><br>
            Alternate delivery addresses do not print on invoices.
          </p>
        </div>
      </div>
    </div>
    <div class="row" id="div_2" style="display: none">
      <div class="col-md-12">
        
        <div class="row">
          <div class="col-md-4 input-group">
            <div class="form-line">
              <label>Name</label>
              <input type="text" name="name[]" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
          <div class="col-md-4 input-group">
            <div class="form-line">
              <label></label>
              <input type="text" name="name[]" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
          <div class="col-md-4 input-group">
            <div class="form-line">
              <label></label>
              <input type="text" name="name[]" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 input-group">
            <div class="form-line">
              <label>House No</label>
              <input type="text" name="house_no" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
          <div class="col-md-6 input-group">
            <div class="form-line">
              <label>PostCode</label>
              <input type="text" name="postcode" required class="form-control">
              <div class="input-group-prepend">
                
                <button type="button" class="btn btn-primary btn-xs"><i class="zmdi zmdi-search"></i></button>
              </div>
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 input-group">
            <div class="form-line">
              <label>Road</label>
              <input type="text" name="road" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>


           <div class="col-md-6 input-group">
            <div class="form-line">
              <label>Locality</label>
              <input type="text" name="locality" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>


        </div>
        
        <div class="row">
          <div class="col-md-6 input-group">
            <div class="form-line">
              <label>Town</label>
              <input type="text" name="town" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>


          <div class="col-md-6 input-group">
            <div class="form-line">
              <label>County</label>
              <input type="text" name="county" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 input-group">
            <div class="form-line">
              <label>Telephone</label>
              <input type="text" name="telephone" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>

          <div class="col-md-6 input-group">
            <div class="form-line">
              <label>Mobile</label>
              <input type="text" name="mobile" required class="form-control">
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 input-group">          
          <button class="btn btn-default" type="submit">Add New</button>
        </div>
        </div>

        
      </div>
    </div>
  </div>
</div>