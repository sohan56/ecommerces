@extends('home')
@section('main_content')


<div class="modal-body modal-spa">
	<div class="login-grids">
		<div class="login">
			<div class="login-bottom">
				<h3>{{ _lang('Customer Registration') }}</h3>
				<hr >
				{!! Form::open(['url' => '/register-customer','method'=>'post']) !!}


						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif



				<div class="sign-up">
					<h4>{{ _lang('Name') }} :</h4>
					<input type="text"   name="customer_name" required>	
				</div>
				
				<div class="sign-up">
					<h4>{{ _lang('Email') }} :</h4>
					<input type="text"  type="Email"  name="email_address" required>	
				</div>
				
				<div class="sign-up">
					<h4>{{ _lang('Password') }} :</h4>
					<input type="password"   name="password" required>
					
				</div>
				<div class="sign-up">
					<h4>{{ _lang('Re-type Password') }} :</h4>
					<input type="password"   equals="Password" required>
					
				</div>
				<div class="sign-up">
					<input type="submit" value="REGISTER NOW" >
				</div>
				
				{!! Form::close() !!}
			</div>
			<div class="login-right">
				<h3>{{ _lang('Customer Login') }}</h3>
				<div style="color: yellow">
					<h3>
						<?php
						$exceotion = Session::get('exception');

						if($exceotion)
						{
							echo $exceotion;
							Session::put('exception','');
						}

						?>
					</h3>
					
				</div>
				<div style="color: green">
					<h3>
						<?php
						$message = Session::get('message');

						if($message)
						{
							echo $message;
							Session::put('message','');
						}

						?>
					</h3>
					
				</div>
				
				{!! Form::open(['url' => '/customer-logins']) !!}


				<div class="sign-in">
					<h4>{{ _lang('Email') }} :</h4>
					<input type="text" value="" name="email_address" required>	
				</div>
				<div class="sign-in">
					<h4>{{ _lang('Password') }} :</h4>
					<input type="password" value=""  name="password" required>
					<a href="{{url('/forget-password')}}">{{ _lang('Forgot password') }}?</a>
				</div>
				<div class="single-bottom">
					<input type="checkbox"  id="brand" value="">
					<label for="brand"><span></span>{{ _lang('Remember Me') }}.</label>
				</div>
				<div class="sign-in">
					<input type="submit" value="SIGNIN" >
				</div>
				{!! Form::close() !!}
			</div>
			<div class="clearfix"></div>
		</div>
		<p>{{ _lang('By logging in you agree to our') }} <a href="#">{{ _lang('Terms and Conditions') }}</a> {{ _lang('and') }} <a href="#">{{ _lang('Privacy Policy') }}</a></p>
	</div>
</div>

@endsection