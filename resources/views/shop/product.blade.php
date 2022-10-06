@extends('layouts.main')
@section('content')

<!-- section -->
<div class="section padding_layout_1 product_detail">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12">
              <div class="product_detail_img ">
                <div class="product_img"> <img src="{{Voyager::image($product->image)}}" alt="#" /> </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 product_detail_side detail_style1">
              <div class="product-heading">
                <h2>{{$product->name}}</h2>
              </div>
              <div class="product-detail-side"> <span><del>KSH{{$product->price}}</del></span><span class="new-price">KSH{{$product->price}}</span> <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span> <span class="review">(5 customer review)</span> </div>
              <div class="detail-contant">
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                  Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.<br>
                  <span class="stock">2 in stock</span> </p>
                <form class="cart" method="POST" action="{{route('cart.store')}}">
                  <div class="quantity">
                    <input step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" type="number">
                  </div>
                  @csrf
                  <input type="hidden" name="product_id" value="{{$product->id}}">
                  <input type="hidden" name="name" value="{{$product->name}}">
                  <input type="hidden" name="price" value="{{$product->price}}">
                  <input type="hidden" name="quantity" value="1">
                  <button type="submit" class="btn sqaure_bt">Add to cart</button>
                </form>
              </div>
              <div class="share-post"> <a href="#" class="share-text">Share</a>
                <ul class="social_icons">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="full">
                <div class="tab_bar_section">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#description">Description</a> </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="description" class="tab-pane active">
                      <div class="product_desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac elementum elit. Morbi eu arcu ipsum. Aliquam lobortis accumsan quam ac convallis. 
                          Fusce elit mauris, aliquet at odio vel, convallis vehicula nisi. Morbi vitae porttitor dolor. Integer eget metus sem. Nam venenatis mauris vel leo pulvinar, 
                          id rutrum dui varius. Nunc ac varius quam, non convallis magna. Donec suscipit commodo dapibus.<br>
                          <br>
                          Vestibulum et ullamcorper ligula. Morbi bibendum tempor rutrum. 
                          Pelle tesque auctor purus id molestie ornare.Donec eu lobortis risus. Pellentesque sed aliquam lorem. Praesent pulvinar lorem vel mauris ultrices posuere. 
                          Phasellus elit ex, gravida a semper ut, venenatis vitae diam. Nullam eget leo massa. Aenean eu consequat arcu, vitae scelerisque quam. Suspendisse risus turpis, 
                          pharetra a finibus vitae, lobortis et mi.</p>
                      </div>
                    </div>
                    <div id="reviews" class="tab-pane fade">
                      <div class="product_review">
                        <h3>Reviews (2)</h3>
                        <div class="commant-text row">
                          <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="profile"> <img class="img-responsive" src="images/it_service/client1.png" alt="#"> </div>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-8">
                            <h5>David</h5>
                            <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                            <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                              The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. </p>
                          </div>
                        </div>
                        <div class="commant-text row">
                          <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="profile"> <img class="img-responsive" src="images/it_service/client2.png" alt="#"> </div>
                          </div>
                          <div class="col-lg-10 col-md-10 col-sm-8">
                            <h5>Jack</h5>
                            <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                            <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="full review_bt_section">
                              <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                            </div>
                            <div class="full">
                              <div id="collapseExample" class="full collapse commant_box">
                                <form accept-charset="UTF-8" action="index.html" method="post">
                                  <input id="ratings-hidden" name="rating" type="hidden">
                                  <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                  <div class="full_bt center">
                                    <button class="btn sqaure_bt" type="submit">Save</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="full">
                <div class="tab_bar_section">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#reviews">Reviews (2)</a> </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="reviews" class="tab-pane active">
                      <div class="product_review">
                        <h3>Reviews (2)</h3>
                        <div class="commant-text row">
                          
                          <div class="col-lg-10 col-md-10 col-sm-8">
                            <h5>David</h5>
                            <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                            <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            <p class="msg">ThisThis book is a treatise on the theory of ethics, very popular during the Renaissance. 
                              The first line of Lorem Ipsum, “Lorem ipsum dolor sit amet.. </p>
                          </div>
                        </div>
                        <div class="commant-text row">
                          
                          <div class="col-lg-10 col-md-10 col-sm-8">
                            <h5>Jack</h5>
                            <p><span class="c_date">March 2, 2018</span> | <span><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></span></p>
                            <span class="rating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </span>
                            <p class="msg">Nunc augue purus, posuere in accumsan sodales ac, euismod at est. Nunc faccumsan ermentum consectetur metus placerat mattis. Praesent mollis justo felis, accumsan faucibus mi maximus et. Nam hendrerit mauris id scelerisque placerat. Nam vitae imperdiet turpis</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="full review_bt_section">
                              <div class="float-right"> <a class="btn sqaure_bt" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Leave a Review</a> </div>
                            </div>
                            <div class="full">
                              <div id="collapseExample" class="full collapse commant_box">
                                <form accept-charset="UTF-8" action="index.html" method="post">
                                  <input id="ratings-hidden" name="rating" type="hidden">
                                  <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." required=""></textarea>
                                  <div class="full_bt center">
                                    <button class="btn sqaure_bt" type="submit">Save</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @include('partials._related')
        </div>
        <div class="col-md-3">
          <div class="side_bar">
            <div class="side_bar_blog">
              <h4>SEARCH</h4>
              <div class="side_bar_search">
                <div class="input-group stylish-input-group">
                  <input class="form-control" placeholder="Search" type="text">
                  <span class="input-group-addon">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> </div>
              </div>
            </div>
            <div class="side_bar_blog">
              <h4>GET A QUOTE</h4>
              <p>An duo lorem altera gloriatur. No imperdiet adver sarium pro. No sit sumo lorem. Mei ea eius elitr consequ unturimperdiet.</p>
              <a class="btn sqaure_bt" href="it_service.html">View Service</a> </div>
            <div class="side_bar_blog">
              <h4>OUR SERVICE</h4>
              <div class="categary">
                <ul>
                  <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                  <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                  <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                  <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                  <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
                </ul>
              </div>
            </div>
            <div class="side_bar_blog">
              <h4>RECENT NEWS</h4>
              <div class="categary">
                <ul>
                  <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Land lights let be divided</a></li>
                  <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Seasons over bearing air</a></li>
                  <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Greater open after grass</a></li>
                  <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Gathered was divide second</a></li>
                </ul>
              </div>
            </div>
            <div class="side_bar_blog">
              <h4>TAG</h4>
              <div class="tags">
                <ul>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">HTML5</a></li>
                  <li><a href="#">Wordpress</a></li>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">HTML5</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section -->

@endsection