@extends('home')
@section('main_content')


				  <div class="modal-body modal-spa" >
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom" >
										<h3>Shipping Information</h3>
										<hr >
										 {!! Form::open(['url' => '/save-shipping','method'=>'post']) !!}
											<div class="sign-up">
												<h4>Name :</h4>
												<input style="color:blue;" type="text" value="" required="" name="shipping_name" placeholder="Full Name">	
											</div>
											
											<div class="sign-up">
												<h4>Email :</h4>
												<input style="color:blue;" type="text" value=""  required  name="email_address" placeholder="Email Address">	
											</div>
											
											
											<div class="sign-up">
												<h4>Mobile Number :</h4>
												<input style="color:blue;" type="text" value="" required name="" placeholder="Mobile Number" name="	mobile_number">
												
											</div>
											<div class="sign-up">
												<h4>Address :</h4>
												<input style="color:blue;" type="text" value="" required placeholder="Address" name="address">
												
											</div>
											<div class="sign-up">
												<h4>city :</h4>
												<input style="color:blue;" type="text" value=""  required placeholder="city" name="city" >
												
											</div>
											<div class="sign-up">
												<h4>country :</h4>
												<input style="color:blue;" type="text" value="" required placeholder="country" name="country">
												
											</div>
											<div class="sign-up">
												<h4>Zip Code :</h4>
												<br>
												<input style="color:blue;" type="number" value=""  required placeholder="Zip Code" name="zip_code">
												
											</div>
											<br>
											<div class="sign-up">
												<input type="submit" value="Save Shipping" >
											</div>
											
										{!! Form::close() !!}
									</div>
								
									<div class="clearfix"></div>
									
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>

@endsection