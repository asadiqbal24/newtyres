<div class="row">


<div class="col-md-12">

<table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                
                                                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                                                <th>Decription</th>
                                                
                                                <th><input type="checkbox" name="">Action</th>
                                              </tr>
                                            </thead>
                                            @php $i=1
                                            @endphp
                                            @foreach($adivsory as $a)
                                            <tr>
                                              <td>{{$i++}}</td>
                                              <td>{{$a->description}}</td>
                                              <td><a href="{{route('admin-adivsory-edit',['id'=>$a->id])}}" class="btn btn-success">Edit</a></td>
                                            </tr>
                                            @endforeach()

                                            
                                            
                                       </table>

</div>

</div>

  