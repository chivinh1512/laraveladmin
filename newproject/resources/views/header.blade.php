<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 780 Hưng Phú, phường 10, quận 8</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0903459065</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if (Auth::check())
						  <li><a href="/profile"><i class="fa fa-user"></i>Xin chào:{{Auth::user()->name}}</a></li>
						<li><a href="/logout">Đăng xuất</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="/" id="logo"><img style=" border-radius: 50%;" src="source/image/logo/logo.jpg" width="150px" alt=""></a>
				</div>
				<br>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{'search'}} ">
					        <input type="text" value="" name="key" id="s" placeholder="Tìm tên sản phẩm hoặc giá..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								@php $total = 0; @endphp
								@if((Session::get('cart')))
								@foreach (Session::get('cart') as $products)
										@foreach ($products as $product)
											<div class="cart-item">
												<div class="media">
													<a class="pull-left" href="#"><img src="source/image/product/{{$product['img']}}" alt=""></a>
													<div class="media-body">
														<span class="cart-item-title">{{$product['name']}} </span>
														<span class="cart-item-amount"><span>{{$product['amount']}} x </span><span>{{number_format($product['price'])}}đ</span> = <span>{{number_format($product['amount']*$product['price'])}}đ </span>
													</div>
												</div>
											</div>
											@php $total = $total + $product['amount']*$product['price'] @endphp
										@endforeach
								@endforeach
								@endif
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value"> {{ number_format($total)}}đ </span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="/shoppingcart" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #FCD208;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="/">Trang chủ</a></li>
						<li><a href="/product">Sản phẩm</a>
							<ul class="sub-menu">
								@foreach ($category as $cate)
								<li><a href="product/{{$cate->id}}">{{$cate->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="/about">Giới thiệu</a></li>
						<li><a href="/contact">Liên hệ</a></li>
						@if((Auth::user()->level == 1))
						<li><a href="/admin">Quản trị website</a></li>
						@endif
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	</div>
	<div class="col-md-1"></div>
</div>