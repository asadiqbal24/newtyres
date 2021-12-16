<div class="row">


<div class="col-md-12">

<table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th></th>
                                                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                                                <th>Decription</th>
                                                <th>Name</th>
                                                <th>Qty</th>
                                                <th>Unit Price</th>
                                                
                                                <th>Vat</th>
                                                <th>Subtotal</th>
                                                <th><input type="checkbox" name="">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              @php $i=1
                                              @endphp
                                              @foreach($labour as $l)
                                              <tr>
                                                <td></td>
                                                <td>{{$i++}}</td>
                                                <td>{{$l->description}}</td>
                                                <td>{{$l->name}}</td>
                                                <td>{{$l->qty}}</td>
                                                <td>{{$l->unit_price}}</td>
                                                <td>{{$l->vat}}</td>
                                                <td>{{$l->subtotal}}</td>
                                                <td><a href="{{route('admin-labour-edit',['id'=>$l->id])}}" class="btn btn-success">Open</a></td>
                                              </tr>
                                              @endforeach()
                                            </tbody>
                                       </table>

</div>

</div>

