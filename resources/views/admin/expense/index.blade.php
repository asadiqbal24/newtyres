@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
@section('content')
<!-- Main Content -->
<section class="content home">
  <div class="container-fluid">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
          <h2>Dashboard</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{$page_title}}</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body row">
        <div class="col-md-2">
          <input type="text" name="account_search" class="form-control" placeholder="Supplier Search">
        </div>
        <div class="col-md-1" style="padding: 0px;">
          <button class="btn btn-info btn-xs"><i class="zmdi zmdi-search"></i></button>
          <button class="btn btn-info btn-xs"><i class="zmdi zmdi-close"></i></button>
        </div>
        <div class="col-md-9">
          <a href="{{route('admin.add.new.supplier')}}" class="btn btn-success btn-xs">New Supplier</a>
          <a href="#" data-toggle="modal" data-target="#copyModal" data-backdrop="false" class="btn btn-success btn-xs">New Invoice</a>
          <a href="{{route('admin.add.new.credit')}}" class="btn btn-success btn-xs">New Credit</a>
          <a href="{{route('admin.expense.archive')}}" class="btn btn-success btn-xs">Archives</a>
          <a href="{{route('admin.advanced_search')}}" class="btn btn-success btn-xs">Outstanding</a>
          <a href="" class="btn btn-success btn-xs">Print</a>
          <a data-toggle="modal" data-target="#expense_categories" data-backdrop="false" class="btn btn-success btn-xs">Nominals</a>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="btn btn-primary btn-xs alpha_pad">A</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">B</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">C</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">D</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">E</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">F</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">G</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">H</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">I</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">J</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">K</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">L</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">M</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">N</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">O</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">P</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Q</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">R</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">S</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">T</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">U</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">V</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">W</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">X</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Y</a>
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Z</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="get" action="{{route('admin.new.invoice',['type'=>'new_invoice'])}}">
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
              <h4 class="modal-title" id="defaultModalLabel">Starting Document No</h4>
            </div>
            <div class="modal-body">
              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Starting No</label>
                  <input type="number" class="form-control" value="1000" name="starting_from" id="starting_from">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-link waves-effect">SAVE</button>
              <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="creditNote" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form method="get" action="{{route('admin.new.expense.invoice',['type'=>'new_invoice'])}}">
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
              <h4 class="modal-title" id="defaultModalLabel" style="color: black;">Starting Document No</h4>
            </div>
            <div class="modal-body">
              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <p class="col-md-12">Please specify your preffered initial expense document number Numbering will then continue in sequence automatically.
                    <br><br>  
                    Only numeric values will be used.

                    <br>
                  </p>
                  <label class="col-md-12">Starting No</label>
                  <input type="number" class="form-control" style="color: black!important;" value="1000" name="starting_from" id="starting_from">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-link waves-effect" style="background-color: black;">SAVE</button>
              <button type="button" style="background-color: black;    margin-left: 10px;" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="expense_categories" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form method="get" action="{{route('admin.new.credit_expense',['type'=>'new_invoice'])}}">
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
              <h4 class="modal-title" id="defaultModalLabel">Expense Categories / Nominal codes (For Accounts Exports)</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                  <button class="btn btn-default" type="button">Close</button>
                  <button class="btn btn-default" type="button">New</button>
                </div>
                
                <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                  
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Code</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                  
                  <div style="min-height: 300px;border: 1px solid #e2d7d7;width: 100%;">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-link waves-effect">SAVE</button>
              <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>Acc Number</th>
                <th>Company</th>
                <th>Credit Limit</th>
                <th>To Allocate</th>
                <th>Balance</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($suppliers as $c)
              <tr>
                <td>{{$c->account_number}}</td>
                <td>{{$c->company}}</td>
                <td>{{$c->credit_limit}}</td>
                <td>{{$c->postal_code}}</td>
                <td>0</td>
                <td>1</td>

                <td>
                  <button data-toggle="modal" data-target="#creditNote" data-backdrop='false' class="btn btn-info invoice-select" data-id="{{$c->id}}">Invoice</button>
                  <button class="btn btn-info">Credit</button>                  
                  <button class="btn btn-info">Manage Receipts</button>
                  <a class="btn btn-info" href="{{route('admin.edit.supplier',['id'=>$c->id])}}">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript">
  
    $('.invoice-select').click(function(){

      $('#selected_id').val($(this).data('id'));

    });

</script>
@endsection()