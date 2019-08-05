@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Chi tiết sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="/">Home</a> / <span>Chi tiết sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-4">

							<img src="source/image/product/{{$detail->img}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$detail->name}}</p>
								<p class="single-item-price">
									<span>{{$detail->price}}</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$detail->detail}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Size</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
								<select class="wc-select" name="color">
									<option>Số lượng </option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="/addproduct/{{$detail->id}}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm cùng loại</h4>
						<div class="row">
							@forelse($spcungloai as $id)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="/productdetail/{{$id->id}}"><img src="source/image/product/{{$id->img}}" alt="" width="200px" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$id->name}}</p>
											<p class="single-item-price">
												<span>{{$id->price}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="/addproduct/{{$id->id}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="/productdetail/{{$id->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@empty
								<div style="padding-left: 30px">Không có kết quả</div>
							@endforelse
						</div>
					</div> <!-- .beta-products-list -->
				</div> <!-- #content -->
		
					
				</div>
			</div>

	</div> <!-- .container -->
@endsection