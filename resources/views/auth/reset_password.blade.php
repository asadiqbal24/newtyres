
<!DOCTYPE html>
<html>
<head>
	<title>{{$app_name->value}}{{$page_title}}</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/login.css')}}">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
<div class="container">

	<div class="d-flex justify-content-center h-100">
		<div class="card">

			<div class="card-header">	
				<h3>Reset Password</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="{{route('submit.reset_password')}}">
					{!! csrf_field() !!}
					
					<input type="hidden" name="uid" value="{{$uid}}">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="password" class="form-control" name="password" required="required" placeholder="Password">
						
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="password" class="form-control" name="password_confirm" required="required" placeholder="Re-Type Password">
						
					</div>


					<div class="form-group">
						<input type="submit" value="Submit" class="btn btn-block login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="{{route('register')}}">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="{{route('login_here')}}">Login Here</a>
				</div>
			</div>
		</div>
	</div>
</div>

  <script src="{{asset('public/js/sweetalert.min.js')}}"></script>                       
  @include('sweet.views.alert')        
</body>
</html>