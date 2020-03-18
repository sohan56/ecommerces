@extends('home')
@section('main_content')

<div class="page-head">
	<div class="container">
		<h3>{{ _lang('Electronics') }}</h3>
	</div>
</div>
<!-- //banner -->
<!-- Electronics -->

 <?php 
      $all_publish_eproduct = DB::table('tbl_electronics')
		         ->orderBy('eproduct_id','desc')
		         ->limit(1)
		         ->where('publication_status',1)
                 ->get();
    ?>
<div class="electronics">
	<div class="container">
		<div class="col-md-8 electro-left text-center">
			 @foreach($all_publish_eproduct as $v_eproduct)
			<div class="electro-img-left mask">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img src="{{asset($v_eproduct->eproduct_img)}}" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content electro-text simpleCart_shelfItem">
								<h4>{{$v_eproduct->eproduct_name}}</h4>
								<span class="separator"></span>
								<p><span class="item_price">${{$v_eproduct->eproduct_price}}</span></p>
								<span class="separator"></span>
								<a class="item_add hvr-outline-out button2" href="{{URL::to('/add-to-ecart/' .$v_eproduct->eproduct_id)}}">add to cart </a>
							</div>
						</div>
				</div>
			</div>
			@endforeach
			
			
			<div class="clearfix"></div>
		</div>
					<div style="float: right; margin-bottom: 45px;"   >
				    {!! Form::open(['url' => '/search-eproduct','method'=>'post']) !!}
				      <input type="text" name="search_text" size="30" height="10" placeholder="Search Electronic's Product">
				      <input style="color:#FFFFFF; background-color: orange;" type="submit" name="btn" value="Search"   >
				    {!! Form::close() !!}
			 </div>
		
		<div class="clearfix"></div>
			<div class="ele-bottom-grid">
				
				 <?php 
					      $all_publish_eproduct = DB::table('tbl_electronics')
							         ->orderBy('eproduct_id','desc')
							         ->where('publication_status',1)
					                 ->get();
					   ?>

				<h3><span>{{ _lang('Latest') }} </span>{{ _lang('Collections') }}</h3>
				
				@foreach($all_publish_eproduct as $v_eproduct)
					<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="{{asset($v_eproduct->eproduct_img)}}" alt="" class="pro-image-front">
									<img src="{{asset($v_eproduct->eproduct_img)}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{URL::to('/add-to-ecart/' .$v_eproduct->eproduct_id)}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="{{'product-e-details/'.$v_eproduct->eproduct_id}}">{{$v_eproduct->eproduct_name}}</a></h4>
									<div class="info-product-price">
										<span class="item_price">${{$v_eproduct->eproduct_price}}</span>
										
									</div>
									<a href="{{URL::to('/add-to-ecart/' .$v_eproduct->eproduct_id)}}" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						@endforeach
						
						
						
						<div class="clearfix"></div>
			</div>
	</div>
</div>
@endsection