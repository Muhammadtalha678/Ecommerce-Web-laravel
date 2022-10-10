<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
               @foreach($products as $product)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{ route('frontend.productdetails',$product->slug) }}" class="option1">
                              Product Details
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                           @if($product->product_sale === '1')
                              <a class="option3" >sale</a>
                           @endif
                           <form action="{{ route('frontend.add_cart',$product->slug) }}" method="post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                    <input type="number" min="1" name="product_qty" class="w-100" value="1">
                                 </div>
                                 <div class="col-md-4">
                                    <input type="submit" value="Add To Cart">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="{{ 'assets/images/frontend/products/'.$product->product_img }}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{ $product->product_name }}
                        </h5>
                        <h6 class="text-danger">
                           Rs {{ $product->selling_price }}

                        </h6>
                        <h6 class="text-primary">
                           <s>Rs {{ $product->original_price }}</s>
                        </h6>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
               {{-- {{ $products->links() }} --}}
               @if($products > '3')
               <h6>Pagination</h6>
               {{ $products->links('pagination::bootstrap-4') }}
               @endif
            <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div>
         </div>
      </section>