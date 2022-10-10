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
									<h2>Page <small>Edit SubCategory</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{route('storeEditsubcategroy')}}" method="POST">
										@csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SubCategory Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name"  class="form-control " placeholder="SubCategory Name" name="subcategory_name" value="{{$subcategories->subcategory_name}}">
												<span class="text-danger" id="error">{{ $errors->first('subcategory_name') }}</span>
											</div>
										</div>
										<input type="hidden" name="id" value="{{$subcategories->id}}">
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Update SubCategory</button>
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
@endsection