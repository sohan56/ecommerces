@extends('home')
@section('main_content')


<div class="page-head">
	<div class="container">
		<h3>Men's Wear</h3>
	</div>
</div>

		<div style="float: right; margin-top: 30px; margin-bottom: 30px "   >
				    {!! Form::open(['url' => '/search-mproduct','method'=>'post']) !!}
				      <input type="text" name="search_text" size="30" height="10">
				      <input style="color:#FFFFFF; background-color: orange;" type="submit" name="btn" value="Search"   >
				    {!! Form::close() !!}
		</div>
<!-- //banner -->
<!-- mens -->
<div class="men-wear">
	<div class="container">
		<div class="col-md-4 products-left">
			
			<div class="css-treeview">
				<h4>Categories</h4>
				<ul class="tree-list-pad">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Men's Wear</label>
						<?php 
                         $all_publish_category = DB::table('mens_category')
                                 ->where('publication_status',1)
                                 ->get();

                             ?>
							
								<ul>
									 @foreach($all_publish_category as $v_category)
									<li><a href="">{{$v_category->category_name}}</a></li>
									 @endforeach
									
								</ul>
							</li>
							
							
						
					</li>
					
					
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			
			
			<div class="men-wear-top">

						 <?php 
						      $all_publish_eproduct = DB::table('mens_product')
								         ->orderBy('mproduct_id','desc')
								         ->limit(3)
								         ->where('publication_status',1)
						                 ->get();
						    ?>
				<script src="{{asset('public/assets/')}}/js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsive" src="{{asset('public/assets/')}}/images/men1.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{{asset('public/assets/')}}/images/men2.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{{asset('public/assets/')}}/images/men1.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsive" src="{{asset('public/assets/')}}/images/men2.jpg" alt=" "/>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			
				
				
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>

		<div class="single-pro">
			     
			 @foreach($search_mmproduct as $v_mproduct)
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="{{asset($v_mproduct->mproduct_img)}}" alt="" class="pro-image-front">
						<img src="{{asset($v_mproduct->mproduct_img)}}" alt="" class="pro-image-back">
							<div class="men-cart-pro">
								<div class="inner-men-cart-pro">
									<a href="{{'product-mens-details/'.$v_mproduct->mproduct_id}}" class="link-product-add-cart">Quick View</a>
								</div>
							</div>
							<span class="product-new-top">New</span>				
					</div>
					<div class="item-info-product ">
						<h4><a href="{{'product-mens-details/'.$v_mproduct->mproduct_id}}">{{$v_mproduct->mproduct_name}}</a></h4>
						<div class="info-product-price">
							<span class="item_price">${{$v_mproduct->mproduct_price}}</span>
							<del>$69.71</del>
						</div>
						<a href="{{URL::to('/add-to-mcart/' .$v_mproduct->mproduct_id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
					</div>
				</div>
			</div>
			@endforeach
			
			
			<div class="clearfix"></div>
		</div>
		<div class="pagination-grid text-right">
			<ul class="pagination paging">
				<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
				<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
			</ul>
		</div>
	</div>
</div>
@endsection