@extends('home')
@section('main_content')


<div class="modal-body modal-spa" >
	<div class="login-grids">
		<div class="login">
			<div class="login-bottom" >
				<h3>{{ _lang('Order Payment') }}</h3>
				<hr >
				{!! Form::open(['url' => '/saveorder','method'=>'post']) !!}
				<div class="sign-up">
					<h4>{{ _lang('') }} </h4>
					<input style="color:blue;" class="payment_type" type="radio" value="Cash" name="payment_type" checked>	<img src="{{asset('public/assets/')}}/images/cash.jpg" >
				</div>

				<div class="sign-up">
					<h4>{{ _lang('') }} </h4>
					<input style="color:blue;"  class="payment_type" type="radio" value="Card" name="payment_type">	<img src="{{asset('public/assets/')}}/images/card.png">
				</div>

				<br>
				<div class="sign-up">
					<input type="submit" class="order_now" value="Order Now" >
				</div>
				{!! Form::close() !!}
				<style>
					.stripe-button-el{width: 100% !important;display: none;}
				</style>
				<form action="{{ url('payment_with_card') }}" class="stripe" method="POST">
					{{ csrf_field() }}
					<script
					src="https://checkout.stripe.com/checkout.js" class="stripe-button"
					data-key="{{ get_option('stripe_publishable_key') }}"
					data-amount="{{ Cart::total() * 100 }}"
					data-name="Payment"
					data-description="Payment"
					data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
					data-locale="auto">
				</script>
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.payment_type').on('change', function(){
			if($(this).val() == 'Card'){
				$('.stripe-button-el').css('display', 'block');
				$('.order_now').css('display', 'none');
			}else{
				$('.stripe-button-el').css('display', 'none');
				$('.order_now').css('display', 'block');
			}
		});
	});
</script>

@endsection