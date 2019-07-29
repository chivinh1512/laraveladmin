@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="/">Home</a> / <span>Sản phẩm theo loại</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm theo loại</h4>
							<div class="beta-products-details">			
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@forelse($listproduct as $list)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="/productdetail/{{$list->id}}"><img src="source/image/product/{{$list->img}}" alt="" width="200px" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$list->name}}</p>
											<p class="single-item-price">
												<span>{{$list->price}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								<div class="space50">&nbsp;</div>
								</div>
								@empty
							<div style="padding-left: 30px">Không có kết quả</div>
								@endforelse
							</div>
						</div> <!-- .beta-products-list -->			
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection