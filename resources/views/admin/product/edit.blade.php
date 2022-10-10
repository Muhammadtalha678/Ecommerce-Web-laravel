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
									<form action="{{route('editproducts')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Category<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control">
													<option value="">{{$categories}}</option>
												</select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">SubCategory<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control">
													<option value="">{{$subcategories}}</option>
												</select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name"  class="form-control " placeholder="Product Name" name="product_name" value="{{$product->product_name}}">
												<span class="text-danger" id="error">{{ $errors->first('product_name') }}</span>
											</div>
										</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Original Price <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Price" name="original_price" value="{{$product->original_price}}">
												<span class="text-danger" id="error">{{ $errors->first('original_price') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Selling Price <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Price" name="selling_price" value="{{$product->selling_price}}">
												<span class="text-danger" id="error">{{ $errors->first('selling_price') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Tax<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Tax" name="tax" value="{{$product->tax}}">
												<span class="text-danger" id="error">{{ $errors->first('tax') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Quantity <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Quantity" name="qty" value="{{$product->qty}}">
												<span class="text-danger" id="error">{{ $errors->first('qty') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Status<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox"  class="form-control" 
												 {{$product->status === 1 ? 'checked' : "0"}} name="status">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Trending<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox" class="form-control" 
												 
												{{$product->trending === 1 ? 'checked' : "0"}} name="trending">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Sale<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox" name="product_sale" class="form-control" {{$product->product_sale === '1' ? 'checked' : "0"}}>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product New<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox" name="product_new" class="form-control" {{$product->product_new === '1' ? 'checked' : "0"}}>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Short Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="product_short_des"class="form-control" placeholder="Short Description">
													{{$product->product_short_des}}
												</textarea>
												<span class="text-danger" id="error">{{ $errors->first('product_short_des') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Long Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="product_long_des"class="form-control" placeholder="Long Description">
													{{$product->product_long_des}}
												</textarea>
												<span class="text-danger" id="error">{{ $errors->first('product_long_des') }}</span>
											</div>
										</div>
										
										<input type="hidden" name="id" value="{{$product->id}}">
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