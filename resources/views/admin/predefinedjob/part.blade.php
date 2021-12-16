<div class="row">


<div class="col-md-12">

<table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th></th>
                                                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                                                <th>Decription</th>
                                                <th>Name</th>
                                                <th>Cost</th>
                                                <th>Qty</th>
                                                <th>Unit Price</th>
                                                
                                                <th>Vat</th>
                                                <th>Subtotal</th>
                                                <th><input type="checkbox" name="">Action</th>
                                              </tr>
                                            </thead>

                                            <tbody>
                                              @php
                                              $i=1
                                              @endphp
                                              @foreach($part as $p)
                                              <tr>
                                                <td></td>
                                                <td>{{$i++}}</td>
                                                <td>{{$p->part_name}}</td>
                                                  <td>{{$p->description}}</td>
                                                    <td>{{$p->cost}}</td>
                                                    <td>{{$p->qty}}</td>
                                                    <td>{{$p->unit_price}}</td>
                                                    <td>{{$p->vat}}</td>
                                                    <td>{{$p->total}}</td>
                                                    <td><a href="{{route('admin-part-edit',['id'=>$p->id])}}" class="btn btn-success">Edit</a></td>
                                              </tr>
                                              @endforeach()


                                            </tbody>
                                            
                                       </table>

</div>

</div>

