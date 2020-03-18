@extends('home')
@section('main_content')


<div class="modal-body modal-spa">
	<div class="login-grids">
		<div class="login">
			<div class="login-bottom">
				<h3>{{ _lang('Customer Registration') }}</h3>
				<hr >
				{!! Form::open(['url' => '/save-registretion','method'=>'post']) !!}


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
			
			<div class="clearfix"></div>
		</div>
		<p>{{ _lang('By logging in you agree to our') }} <a href="#">{{ _lang('Terms and Conditions') }}</a> {{ _lang('and') }} <a href="#">{{ _lang('Privacy Policy') }}</a></p>
	</div>
</div>

@endsection