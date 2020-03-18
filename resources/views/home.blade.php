<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>{{ _lang('SHOPIFY STORE ') }}</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('public/assets/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- pignose css -->
<link href="{{asset('public/assets/')}}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{asset('public/assets/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{asset('public/assets/')}}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{asset('public/assets/')}}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('public/assets/')}}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{asset('public/assets/')}}/js/jquery.easing.min.js"></script>
</head>
@if (Session::get('success'))
<script type="text/javascript">
alert('{{ Session::get('success') }}');
</script>
@endif
</head>
<body>
<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>{{ _lang('Free and Fast Delivery') }}</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>{{ _lang('Free shipping On all orders') }}</li>

			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
				<?php
				$customer_id = Session::get('coustomer_id');
				if ($customer_id!=NULL) {
				?>
				<a href=""><?php echo Session::get('customer_name')  ?></a></li>
				<?php } else {?>
				<a href="mailto:info@example.com">Welcome Guest</a></li>
				<?php } ?>
				

		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="{{url('/')}}"><img src="{{asset('public/')}}/logo2.jpg"></a></h1>
		</div>
		<?php
					$all_product=DB::table('tbl_product')
					          ->where('publication_status',1)
					          ->orderBy('product_id','desc')
					          ->get();
				 ?>
		<div class="col-md-6 header-middle">
			{!! Form::open(['url' => '/search-product','method'=>'post']) !!}
				<div class="search">
					<input type="search" name="search_text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				

				<div class="sear-sub">
				
					<input type="submit" value=" ">
				
				</div>
				<div class="clearfix"></div>
			{!! Form::close() !!}
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				
				
				<?php
				$customer_id = Session::get('coustomer_id');
				if ($customer_id!=NULL) {
					
				
				?>
				<li><a  href="{{url('/customer-profile')}}">Profile</a></li>
				&nbsp; &nbsp; &nbsp; | 
				<li><a href="{{url('/customer-logout')}}">{{ _lang('Logout') }}</a></li>
				<?php } else {?>
				<li><a href="{{url('/login')}}">{{ _lang('Login') }}</a></li>
				    &nbsp; | &nbsp;
				<li><a href="{{url('/registretion')}}">{{ _lang('Register') }}</a></li>
				<?php } ?>

				
					
				
				<!-- <li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li> -->
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="{{url('/')}}">{{ _lang('Home') }} <span class="sr-only">(current)</span></a></li>	
					<li class=" menu__item"><a class="menu__link" href="{{url('/mens-wear')}}">{{ _lang('MENS  FASHION') }}</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{url('/womens-wear')}}">{{ _lang('WOMENS  FASHION') }}</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{url('/electronics')}}">{{ _lang('Electronics') }}</a></li>
					<li class=" menu__item"><a class="menu__link" href="{{url('/contact')}}">{{ _lang('contact') }}</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
				
						<a href="{{url('/show-cart')}}">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total">{{Cart::total()}}</span>({{Cart::count()}} {{ _lang('item') }})</div>
								@if (Cart::count() == 0)
									@php
										Cart::destroy();
									@endphp
								@endif
								
							</h3>
						</a>
						<p><a href="{{url('/empty-cart')}}" class="simpleCart_empty">{{ _lang('Empty Cart') }}</a></p>
						
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->




<!-- product-nav -->

@yield('main_content')
<!-- //product-nav -->

<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>{{ _lang('Buy your product in a simple way') }}</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>{{ _lang('LOGIN TO YOUR ACCOUNT') }}</h4>
				<p>{{ _lang('Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.') }}</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>{{ _lang('SELECT YOUR ITEM') }}</h4>
				<p>{{ _lang('Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.') }}</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>{{ _lang('MAKE PAYMENT') }}</h4>
				<p>{{ _lang('Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.') }}</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="{{url('/')}}"><img src="{{asset('public/')}}/logo2.jpg" alt=" " /></a></h2>
			<p>{{ _lang('i)	Promotion E-Commerce globally. 
			             ii)	Reduce the tram section as much as possible to the bank. 
		                iii)	Fast delivery of product. 
	                     iv)	To ensure customer satisfaction. 
                          v)	Save time and money.
                         vi)	Service 24/7') }}</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>{{ _lang('SIGN UP FOR NEWSLETTER !') }}</h3>
			</div>
			<div class="col-sm-6 newsright">
				
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					
					<h4>{{ _lang('Information') }}</h4>
					<ul>
						<li><a href="{{url('/')}}">{{ _lang('Home') }}</a></li>
						<li><a href="{{url('/mens-wear')}}">{{ _lang('MENS  FASHION') }}</a></li>
						<li><a href="{{url('/womens-wear')}}">{{ _lang('WOMEN FASHION') }}</a></li>
						<li><a href="{{url('/electronics')}}">{{ _lang('Electronics') }}</a></li>
						<li><a href="{{url('/contact')}}">{{ _lang('Contact') }}</a></li>
						
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>{{ _lang('Store Information') }}</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Dhaka Uttara.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">Shopifysttore@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +8801768284056</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="#"><img src="{{asset('public/assets/')}}/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2019 Shopify Store. All rights reserved | <a href=""></a></p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			{{-- <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
<!-- //login -->
</body>
</html>
