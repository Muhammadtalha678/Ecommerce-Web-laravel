@extends('admin.layouts.master')
@section('page-title')
	Add SubCategory
@endsection
@section('main-content')
	<div class="right_col" role="main">
		<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Page <small>Add New SubCategory</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{route('storesubcategory')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SubCategory Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name"  class="form-control " placeholder="SubCategory Name" name="subcategory_name">
												<span class="text-danger" id="error">{{ $errors->first('subcategory_name') }}</span>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Select Category<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="category_id">
													<option selected>Choose option</option>
													<?php foreach ($Category as $Categorys): ?>
														
													<option value="{{$Categorys->id}}">{{$Categorys->category_name}}</option>
													<?php endforeach ?>
												</select>
												<span class="text-danger" id="error">{{ $errors->first('category_id') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SubCategory Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="first-name"  class="form-control " placeholder="SubCategory Image" name="subcat_img">
												<span class="text-danger" id="errorimg">{{ $errors->first('subcat_img') }}</span>
											</div>
										</div>

										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Add SubCategory</button>
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
	    // this can also be use $("#eee").show().delay(5000).fadeOut();

	</script>
	<script>
		    $("#errorimg").show();
	    setTimeout(function() {
	        $("#errorimg").hide();
	    }, 5000);
	    // this can also be use $("#eee").show().delay(5000).fadeOut();

	</script>
@endsection