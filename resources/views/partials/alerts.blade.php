
@if(Session::has('info'))
  <div class="alert alert-info alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	{{Session::get('info')}}
       {{Session::forget('info')}}
  </div>
@elseif(Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	{{Session::get('success')}}
    {{Session::forget('success')}}
  </div>
@elseif(Session::has('warning'))
  <div class="alert alert-warning alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	{{Session::get('warning')}}
       {{Session::forget('warning')}}
  </div>
 @elseif(Session::has('danger'))
  <div class="alert alert-danger alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	{{Session::get('danger')}}
       {{Session::forget('danger')}}
  </div>  
@endif
