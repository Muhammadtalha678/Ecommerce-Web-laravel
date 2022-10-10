@extends('admin.layouts.master')
@section('page-title')
	Add Product
@endsection
@section('main-content')
	<div class="right_col" role="main">
		<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Page <small>Edit Product</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{route('editproductsimage')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<input type="hidden" name="id" value="{{$product->id}}">
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<img src="/assets/images/frontend/products/{{$product->product_img}}" height="300">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upload Product Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="product_img" class="form-control">
												<span class="text-danger" id="error">{{ $errors->first('product_img') }}</span>
											</div>
										</div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Update Product</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
		</div>

	</div>
@endsection