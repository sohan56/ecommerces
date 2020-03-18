@extends('home')
@section('main_content')
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Check Out</h3>
	</div>
</div>
<!-- //banner -->
<!-- check out -->
<div class="checkout">
	<div class="container">
		<h3>My Shopping Bag</h3>
		<?php

		$contents =Cart::content();

		//echo '<pre>';
		//print_r($contents);
		

		?>

		<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Product</th>
						<th>Quantity</th>
						<th>Product Name</th>
						<th>Price</th>
					</tr>
				</thead>
				@foreach($contents as $v_content)
					<tr class="rem1">
						<td class="invert-closeb">
							<a class="btn-danger" href="{{URL::to('/remove-to-cart/'.$v_content->rowId)}}">Remove</a>
						</td>
						<td class="invert-image"><a href="single.html"><img src="{{$v_content->options['image']}}" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity "> 
								<div class="quantity-select">                           
									 {!! Form::open(['url' => '/update-cart-qty' ,'method'=>'post']) !!}
									<input type="text" name="qty" value="{{$v_content->qty}}">
									<input type="hidden" name="rowId" value="{{$v_content->rowId}}">
									<input type="submit" name="btn" value="Update">
									{!! Form::close() !!}
									
								</div>
							</div>
						</td>
						<td class="invert">{{$v_content->name}}</td>
						<td class="invert">$ {{$v_content->price * $v_content->qty}}</td>
					</tr>
					@endforeach
					
			</table>
		</div>
		<div class="checkout-left">	
				
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="{{URL::to('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
					<a href="{{URL::to('/checkout')}}"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Checkout</a>
				</div>
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Shopping basket</h4>
					<ul>
						<li>Subtotal<i>-</i> <span>${{Cart::subtotal()}}</span></li>
						<li>Tax<i>-</i> <span>$ {{Cart::tax()}}</span></li>
						<?php
						//$Shipping_cost=50.00;

						?>
						<li>Shipping Charge <i>-</i> <span>Free</span></li>
						<li>Total <i>-</i> <span>${{Cart::total()}}</span></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>	
<!-- //check out -->
@endsection