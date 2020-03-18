@extends('home')
@section('main_content')


<div class="modal-body modal-spa" >
	<div class="login-grids">
		<div class="login">
			<div class="login-bottom" >
				<h3>{{ _lang('Customer Information') }}</h3>
				<hr >
				{!! Form::open(['url' => '/information','method'=>'post']) !!}
				@php
				$customer = DB::table('tbl_customer')->where('coustomer_id', Session::get('coustomer_id'))->first();
				@endphp
				<div class="sign-up">
					<h4>{{ _lang('Name') }} :</h4>
					<input style="color:blue;" type="text" value="{{ $customer->customer_name }}" required="" name="customer_name" placeholder="Full Name">	
				</div>

				<div class="sign-up">
					<h4>{{ _lang('Email') }} :</h4>
					<input style="color:blue;" type="text" value="{{ $customer->email_address }}"  required  name="email_address" placeholder="Email Address">	
				</div>
				<div class="sign-up">
					<h4>{{ _lang('Mobile Number') }} :</h4>
					<input style="color:blue;" type="text" value="{{ $customer->mobile_number }}" required name="mobile_number" placeholder="Mobile Number" name="	mobile_number">

				</div>
				<div class="sign-up">
					<h4>{{ _lang('Address') }} :</h4>
					<input style="color:blue;" type="text" value="{{ $customer->address }}" required placeholder="Address" name="address">

				</div>
				<div class="sign-up">
					<h4>{{ _lang('city') }} :</h4>
					<input style="color:blue;" type="text" value="{{ $customer->city }}"  required placeholder="city" name="city" >

				</div>
				<div class="sign-up">
					<h4>{{ _lang('country') }} :</h4>
					<input style="color:blue;" type="text" value="{{ $customer->country }}" required placeholder="country" name="country">

				</div>
				<div class="sign-up">
					<h4>{{ _lang('Zip Code') }} :</h4>
					<br>
					<input style="color:blue;" type="number" value="{{ $customer->zip_code }}"  required placeholder="Zip Code" name="zip_code">

				</div>
				<br>
				<div class="sign-up">
					<input type="submit" value="Next" >
				</div>

				{!! Form::close() !!}
			</div>

			<div class="clearfix"></div>
		</div>
		<p>{{ _lang('By logging in you agree to our') }} <a href="#">{{ _lang('Terms and Conditions') }}</a> {{ _lang('and') }} <a href="#">{{ _lang('Privacy Policy') }}</a></p>
	</div>
</div>

@endsection