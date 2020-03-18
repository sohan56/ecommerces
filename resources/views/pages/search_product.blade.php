@extends('home')
@section('main_content')

<!-- banner -->
<?php
$all_product=DB::table('tbl_product')
          ->where('publication_status',1)
          ->orderBy('product_id','desc')
          ->get();
?>
		
<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="{{asset('public/assets/')}}/images/ba1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{asset('public/assets/')}}/images/ba2.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{asset('public/assets/')}}/images/ba3.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="{{asset('public/assets/')}}/images/baa1.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{asset('public/assets/')}}/images/baa2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{asset('public/assets/')}}/images/baa3.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="{{asset('public/assets/')}}/images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="{{asset('public/assets/')}}/images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="{{asset('public/assets/')}}/images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="{{asset('public/assets/')}}/images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="{{asset('public/assets/')}}/js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->


<!-- //content -->
<!-- content-bottom -->


<!-- //content-bottom -->
<div class="product-easy">
	<div class="container">
		
		<script src="{{asset('public/assets/')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li> 
					
				</ul>				  	 
				<div class="resp-tabs-container">
					
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						 
                          @foreach($search_product as $v_product)
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset($v_product->product_img)}}" alt="" class="pro-image-front">
									<img src="{{asset($v_product->product_img)}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'product-details/'.$v_product->product_id}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{'product-details/'.$v_product->product_id}}">{{$v_product->product_name}}</a></h4>
									<div class="info-product-price">
										<span class="item_price">৳ {{$v_product->product_price}}</span>
										<del>$69.71</del>
									</div>
									<a href="{{URL::to('/add-to-cart/' .$v_product->product_id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						@endforeach
					
					</div>

					<!--Special Offer -->

					
				</div>	
			</div>
		</div>
	</div>
</div>
@endsection