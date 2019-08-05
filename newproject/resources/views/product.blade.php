@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="/">Home</a> / <span>Tất cả sản phẩm</span>
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
							<h4>Tất cả sản phẩm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($allproduct)}} sản phẩm </p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@forelse($allproduct as $pro)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="/productdetail/{{$pro->id}}"><img src="source/image/product/{{$pro->img}}" alt="" width="200px" height="200px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$pro->name}}</p>
											<p class="single-item-price">
												<span>{{$pro->price}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="/addproduct/{{$pro->id}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="/productdetail/{{$pro->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								<div class="space50">&nbsp;</div>
								</div>

								@empty
							<div style="padding-left: 30px">Không có kết quả</div>

								@endforelse

							</div>

						<div> {{$allproduct->links()}}</div>

						</div> <!-- .beta-products-list -->

						
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection