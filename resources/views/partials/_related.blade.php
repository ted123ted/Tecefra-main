{{-- 
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="main_heading text_align_left" style="margin-bottom: 35px;">
                  <h3>Related products</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            @foreach ($mightAlsoLike as $product)
            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
                <div class="product_list">
                  <div class="product_img"> <img class="img-responsive" src="{{Voyager::image($product->image)}}" alt=""> </div>
                  <div class="product_detail_btm">
                    <div class="center">
                      <h4><a href="/product/{{$product->slug}}">{{$product->name}}</a></h4>
                    </div>
                    <div class="starratin">
                      <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                    </div>
                    <div class="product_price">
                      <p><span class="old_price">$15.00</span> – <span class="new_price">${{$product->price}}</span></p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div> --}}