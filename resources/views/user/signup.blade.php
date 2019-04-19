@extends('layout.master')
@section('content')
<div class="row" style="margin-top:180px;">
<div class="col-md-6 col-md-offset-6 ">
<!--<h1 style="text-align:center;">Sign Up</h1>-->
@if(count($errors)>0)
<div class="alert alert-danger">
@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach
</div>
@endif
</div>
</div>
</div>
<form action="/signup" method="post">
{{csrf_field()}}

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Register</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
            <div class="group">
					<label for="pass" class="label">Full Name</label>
					<input id="pass" type="text" name="fullname" class="input">
				</div><div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email"  name="email"class="input" required>
				</div>
           
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password"  name="password"class="input" data-type="password">
				</div>
				
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
               
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
			
			</div>
		</div>
	</div>
</div>
</form>


@endsection