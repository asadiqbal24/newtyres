@extends('partials.default')
@section('content')  
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.contact_us')}}">Customer Contact Us</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                      <h4>Reply</h4>                                            

                         <div class="row">

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($queries))
                                       @php $value=$queries->message; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Comments</label>
                                            <p>{{$value}}</p>    
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

            <div class="col-lg-12">
                <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="{{$queries->email}}" readonly>
                                    <label class="form-label">To :</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="subject" value="{{$queries->subject}}">
                                    <label class="form-label">Subject :</label>
                                </div>
                            </div>
                        </div>                        
                        
                        <div class="col-lg-12 m-b-20">
                            <p>Attachment :</p>
                            <img src="{{$queries->attachments}}">
                        </div>    

                        <form method="post" action="{{route('admin.contact-us-reply')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$queries->id}}">
                            <div class="col-lg-12 m-b-20">
                                <p>Reply :</p>
                                <textarea id="ckeditor" name="admin_reply" value='{{$queries->reply_text}}'>{{$queries->reply_text}}</textarea>
                            </div>                        
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-raised btn-success waves-effect">Send Message</button>
                            </div>
                        </form>
                    </div>                    
                </div>
                </div>
            </div>


                         </div>

                    </div>
                </div>
            </div>

        </div>               
    </div>
</section>
@endsection()
@section('jsOutside')
<script src="{{asset('public/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
<!-- Bootstrap Colorpicker Js -->
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

<script type="text/javascript">
            CKEDITOR.replace( 'admin_reply' );;
</script>



@endsection()
