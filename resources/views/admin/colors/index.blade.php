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
            <div class="card-body">
                
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <button class="btn btn-danger">Close</button>
                        <button class="btn btn-success add-new">New</button>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row clearfix">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hovered">
                            <thead>
                                <tr>
                                    <th>Avail For</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr>
                                    <td>
                                        <a class="btn btn-warning">C</a>
                                        <a class="btn btn-primary">JS</a>
                                        <a class="btn btn-success">ES</a>
                                        <a class="btn btn-info">SI</a>
                                    </td>
                                    <td>Urgent</td>
                                    <td>10</td>
                                    <td><a class="btn btn-danger btn-xs">X</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="col-md-12 input-group">
                            <div class="form-line">
                                <label class="col-md-12"><strong>Available For</strong></label>
                                
                                <input type="checkbox" id="md_checkbox_1" class="chk-col-red" value="calender" />
                                <label for="md_checkbox_1">Calender</label>
                                <br>
                                <input type="checkbox" id="md_checkbox_2" class="chk-col-red" value="estimate" />
                                <label for="md_checkbox_2">Estimate</label>
                                <br>
                                <input type="checkbox" id="md_checkbox_3" class="chk-col-red" value="job_sheet" />
                                <label for="md_checkbox_3">Job Sheet</label>
                                <br>
                                <input type="checkbox" id="md_checkbox_4" class="chk-col-red" value="invoice" />
                                <label for="md_checkbox_4">Invoice</label>
                                
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>


                        <div class="col-md-12 input-group">
                            <div class="form-line">

                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>


                        <div class="col-md-4 input-group" style="display: inline;">
                            <div class="form-line">

                                <label>Sort Order</label>
                                <input type="text" name="sort_order" class="form-control" value="1" />
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                        <div class="col-md-4 input-group" style="display: inline;">
                            <div class="form-line">

                                <label>Color</label>
                                <input type="text" name="color" class="form-control" value="1" />
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                        <div class="col-md-4 input-group" style="display: inline;">
                            <div class="form-line">

                                <label>Text Color</label>
                                <input type="text" name="color" class="form-control" value="1" />
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>

                        <div class="col-md-4 input-group" style="display: inline;">
                            <div class="form-line">

                                <label>Notes: </label>
                                <p>When renaming a status any records which are using that status will be automatically adjusted to use the new name.
                                 <br>
                                 
                                 To make use of the sort order, enter values such as:<br>
                                 </p>
                                 <p><strong>100<span class="ml-2">to push a document to the top of a list</span></strong></p>
                                 <p><strong>0<span class="ml-2">for no special sorting</span></strong></p>                                    
                                 <p><strong>-50<span class="ml-2"></span></strong></p> 
                                 <p><strong>-100<span class="ml-2">to push a document to the bottom</span></strong></p>                                                                     
                                  <p>Using the same number more than once will cause a grouping effect. Sorting does not apply to Calender records.</p>  
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript">
$('.add-new').click(function(){
var length = $('.new_tr').length;
length = length + 1;
var x = `<tr class="new_tr`+length+`">
    <td>
        <a class="btn btn-default">C</a>
        <a class="btn btn-default">JS</a>
        <a class="btn btn-default">ES</a>
        <a class="btn btn-default">SI</a>
    </td>
    <td></td>
    <td></td>
    <td><a onclick="remove_tr('new_tr`+length+`')" class="btn btn-danger btn-xs">X</a></td>
</tr>`;
$('#tbody').append(x);
});
function remove_tr(tr) {
$('.'+tr).remove();
}
</script>
@endsection()