	<h1 style="text-align: center;background-image: url('http://safepk.com/public/images/1n.jpg');padding: 40px 0px 40px 0px;background-size: 100%;color: white;font-size: 50px;width: 100%;margin-bottom: 0px;box-shadow: 0px 0px 0px 2px grey">SAFE Password Reset</h1>
	<div style="text-align: center;box-shadow: 0px 0px 0px 2px grey;background-image: url('http://safepk.com/public/images/3.png');padding: 30px 0px 30px 0px;background-size: 100%;color: black;width: 100%">
		<h3>Your Email : {{$data['user_email']}}</h3>
		<p><a href="{{route('reset_password',['uid'=>$data['uid'],'token'=>$data['token'],'email'=>$data['user_email']])}}" target="blank"> Click Here To Reset Password </a></p>
	</div>