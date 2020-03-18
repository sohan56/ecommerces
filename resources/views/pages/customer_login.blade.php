@extends('home')
@section('main_content')


<div class="modal-body modal-spa">
	<div class="login-grids">
		<div class="login">
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
				
				{!! Form::open(['url' => '/customer-login']) !!}


				<div class="sign-in">
					<h4>{{ _lang('Email') }} :</h4>
					<input type="text" value="" name="email_address" required>	
				</div>
				<div class="sign-in">
					<h4>{{ _lang('Password') }} :</h4>
					<input type="password" value=""  name="password" required>
					<a href="{{url('/password-change')}}">{{ _lang('Forgot password') }}?</a>
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