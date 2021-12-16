@extends('partials.default')
@section('content')  
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.inqueries')}}">Queries</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Queries</h4>              

            </div>

<div class="card">

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>                                        
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Replied ? </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Replied ? </th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                   @if($queries->count() > 0) 
                                     @php $i=$queries->firstItem(); @endphp
                                        @foreach($queries as $query)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$query->created_at}}</td>
                                                <td>{{$query->name}}</td>
                                                <td>{{$query->subject}}</td>
                                                <td>{{$query->email}}</td>
                                                <td>{{$query->replied}}</td>
                                                <td>
                                                        
                                                   <button data-toggle="modal" data-backdrop="false" data-target="#replyModal" class="btn btn-success view_details" data-id="{{$query->id}}" data-text="{{$query->message}}" data-reply="{{$query->reply}}">View</button>     

                                                </td>
                                            </tr>
                                        @endforeach 
                                   @else
                                        <tr><td colspan="6">no record found</td></tr>
                                   @endif     
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{ $queries->links('pagination::bootstrap-4') }}

          </div>  
        </div>

                    <div class="modal fade" id="replyModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <form method="post" action="{{route('admin.save_query_reply')}}">
                                  {{csrf_field()}}  
                                  <input type="hidden" name="id" id="query_id">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="largeModalLabel">Query # <span id="query_no"></span></h4>
                                </div>
                                <div class="modal-body">
                                        
                                        <h6 style="color: black">Query</h6>
                                        <p style="color: black" id="query_text"></p>
                                        <hr>
                                        <h6 style="color: black">Reply</h6>
                                        
                                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                            <div class="form-line">
                                                    <textarea class="form-control" id="query_reply" name="query_reply" required="required"></textarea>
                                            </div>
                                            <span class="input-group-addon"> <i></i> </span>
                                        </div> 
                                        <div class="clearfix"></div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


        </div>               
    </div>
</section>


@endsection()
@section('jsOutside')
    <script type="text/javascript">
        $('.view_details').click(function (){
            id = $(this).attr('data-id');
            text = $(this).attr('data-text');
            reply = $(this).attr('data-reply');

            $('#query_no').html(id);
            $('#query_id').val(id);
            $('#query_text').html(text);
            $('#query_reply').text(reply);
            $('#query_reply').val(reply);
            
        })
    </script>
@endsection()
