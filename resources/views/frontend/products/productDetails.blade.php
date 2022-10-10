@extends('frontend.layout.front')
@section('title')
Product-Details
@endsection
@section('content')
	<div class="hero_area">
         <!-- header section strats -->
        @include('frontend.layout.frontheader')
         <!-- end header section -->
          <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto;padding: 30px;width: 50%;" >
                 
                     <div class="img-box mb-3">
                        <img src="{{ '/assets/images/frontend/products/'.$product->product_img }}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{ $product->product_name }}
                        </h5>
                        @if($product->selling_price != '')
                        <h6 class="text-danger">
                           Discount Price : Rs {{ $product->selling_price }}

                        </h6>
                        <h6 class="text-primary">
                           Original Price : <s>Rs {{ $product->original_price }}</s>
                        </h6>
                        @else
                        <h6 class="text-primary">
                           Original Price : Rs {{ $product->original_price }}
                        </h6>
                        @endif
                        <h6>Product Category : {{ $product->product_subcategory_name }}</h6>
                        <h6>Product Details : {{ $product->product_short_des }}</h6>
                        <h6>Product Quantity : {{ $product->qty }}</h6>
                        <a href="" type="button" class="btn btn-primary">Add To Cart</a>
                     </div>
                  </div>
               </div>
    </div>
@endsection
