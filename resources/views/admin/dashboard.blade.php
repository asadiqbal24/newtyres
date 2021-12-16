@extends('partials.default')
<style type="text/css">
    
    .dashboard_btn{
/*    height: 100px;
    width: 100px;
    font-size: 1vw;*/
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
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                
                 @include('partials.adminMenu')

            </div>
        </div>

                
                
        
                
                
               
    </div>
</section>

@endsection()
@section('jsOutside')

@endsection()