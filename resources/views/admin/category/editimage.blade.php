@extends('admin.layouts.master')
@section('title')
	Edit Category Image
@endsection
@section('main-content')
		<div class="right_col" role="main">
		<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Page <small>Edit Category</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{route('EditImagecategory')}}" method="POST"
									enctype="multipart/form-data">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<img src="/assets/images/frontend/category/{{$cat->cat_img}}" height="300">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Update Category Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" name="cat_img" class="form-control">
										<span class="text-danger" id="error">{{ $errors->first('cat_img') }}</span>
											</div>
										</div>
										<script>
											$("#error").show();
											setTimeout(function() {
											    $("#error").hide();
											}, 5000);
											// this can also be use $("#eee").show().delay(5000).fadeOut();

										</script>
										<input type="hidden" name="id" value="{{$cat->id}}">
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a class="btn btn-primary" type="button" href="{{route('allCategory')}}">Cancel</a>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Update Category</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
		</div>
	</div>
	<script>
		$("#error").show();
		setTimeout(function() {
		    $("#error").hide();
		}, 5000);
@endsection