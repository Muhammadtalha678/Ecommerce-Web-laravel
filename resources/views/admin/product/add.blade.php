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
									<h2>Page <small>Add New Product</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name"  class="form-control " placeholder="Product Name" name="product_name" value="{{old('product_name')}}">
												<span class="text-danger" id="error">{{ $errors->first('product_name') }}</span>
											</div>
										</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Original Price <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Original Price" name="selling_price" value="{{old('selling_price')}}">
												<span class="text-danger" id="error">{{ $errors->first('selling_price') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Selling Price <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Selling Price" name="original_price" value="{{old('original_price')}}">
												<span class="text-danger" id="error">{{ $errors->first('original_price') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Tax <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Tax" name="tax" value="{{old('tax')}}">
												<span class="text-danger" id="error">{{ $errors->first('tax') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Quantity <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name"  class="form-control " placeholder="Product Quantity" name="qty" value="{{old('qty')}}">
												<span class="text-danger" id="error">{{ $errors->first('qty') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Short Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="product_short_des"class="form-control" placeholder="Short Description">
													{{old('product_short_des')}}
												</textarea>
												<span class="text-danger" id="error">{{ $errors->first('product_short_des') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Long Description <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea name="product_long_des"class="form-control" placeholder="Long Description">
													{{old('product_long_des')}}
												</textarea>
												<span class="text-danger" id="error">{{ $errors->first('product_long_des') }}</span>
											</div>
										</div>
										

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Select Category<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="category_id">
													<option value="">Choose option</option>
													<?php foreach ($categories as $key => $category): ?>
													<option value="{{$category->id}}">{{$category->category_name}}</option>
													<?php endforeach ?>
												</select>
												<span class="text-danger" id="error">{{ $errors->first('category_id') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Select SubCategory<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="subcategory_id">
													<option value="">Choose option</option>
													<?php foreach ($subcategories as $key => $subcategory): ?>
														
													<option value="{{$subcategory->id}}">{{$subcategory->subcategory_name}}</option>
													<?php endforeach ?>
												</select>
												<span class="text-danger" id="error">{{ $errors->first('subcategory_id') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Status<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox" name="status" class="form-control" >
												<span class="text-danger" id="error">{{ $errors->first('status') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Trending<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox" name="trending" class="form-control" >
												<span class="text-danger" id="error">{{ $errors->first('trending') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Sale<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox" name="product_sale" class="form-control" >
												<span class="text-danger" id="error">{{ $errors->first('product_sale') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product New<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="checkbox" name="product_new" class="form-control" >
												<span class="text-danger" id="error">{{ $errors->first('product_new') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Upload Product Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="product_img" class="form-control" value="{{old('product_img')}}">
												<span class="text-danger" id="error">{{ $errors->first('product_img') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Add Category</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
		</div>

	</div>
@endsection