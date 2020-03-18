@extends('home')
@section('main_content')


<div class="modal-body modal-spa">
	<div class="login-grids">
		<div class="login">
<div class="login-right">
				<h3>{{ _lang('Reset password') }}</h3>
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
					<h4>{{ _lang('Email Addrss') }} :</h4>
					<input type="text" value="" name="email_address" required>	
				</div>
				
				
				<div class="sign-in">
					<input type="submit" value="Send Password Reset Link" >
				</div>
				{!! Form::close() !!}
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>
</div>

@endsection