<section class="product_section layout_padding" id="product-section">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Menu <span>Kita</span>
               </h2>
            </div>
            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <input type="number" name="quantity" value="1" min="1" style="width: 100px;">
                           <a href="{{ route('login') }}" class="option1">
                           Add To Cart
                           </a>
                           <form action="{{url('add_cart', $products->id)}}" method="Post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                              
                                 </div>
                                 <div class="col-md-4">
                  
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount_price!=null)
                        <h6 style="color: red">
                        Discount price
                        <br>
                           Rp {{$products->discount_price}}
                        </h6>

                        <h6 style="text-decoration: line-through;">
                           Rp {{$products->price}}
                        </h6>


                        @else

                        <h6 style="color: black;">
                        Price
                        <br>
                           Rp {{$products->price}}
                        </h6>

                        @endif
                     </div>
                  </div>
               </div>
               @endforeach
               <span style="padding-top: 20px;">
               {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
               </span>
               
         </div>
      </section>