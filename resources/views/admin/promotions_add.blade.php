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
                        <li class="breadcrumb-item"><a href="{{route('admin.promotions')}}">Promotion</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card widget-stat">
                    <div class="body">
                     @if($fun_type=='add')
                      <h4>Add Promotion</h4>                                            
                      <form method="POST" action="{{route('admin.promotion.save')}}" enctype="multipart/form-data">
                     @else
                      <h4>Edit Promotion</h4>
                      <form method="POST" action="{{route('admin.promotion.update')}}" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="{{$promotion->id}}">  
                     @endif 


                              {{csrf_field()}}

                         <div class="row">
                        




                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($promotion))
                                       @php $value=$promotion->title; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 
                                        <div class="form-line">
                                            <label>Title</label>
                                            <input type="text" class="form-control" required="required" name="name" value="{{$value}}">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                     @php $value=''; @endphp
                                     @if(isset($promotion))
                                       @php $value=$promotion->description; @endphp
                                     @else
                                                @php $value=''; @endphp
                                     @endif 


                                        <div class="form-line">
                                            <label>Description</label>
                                            <textarea type="text" class="form-control" name="description" value="{{$value}}">{{$value}}</textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                <input type="submit" name="submit" value="Save" class="btn  btn-raised btn-success waves-effect">
                            </div> 

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
<script src="{{asset('public/assets/js/pages/forms/advanced-form-elements.js')}}"></script>
    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->
<!-- Bootstrap Colorpicker Js -->
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

<script type="text/javascript">
            CKEDITOR.replace( 'description' );;
</script>



@endsection()
