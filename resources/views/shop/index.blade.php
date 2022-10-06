@extends('layouts.main')
@section('content')
@include('partials._hero')


<!-- section -->
<div class="section padding_layout_1 product_list_main">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 col-sm-6 col-xs-12 margin_bottom_30_all">
             
              <div class="product_list">
                
                <div class="product_img"> <img class="img-responsive" src="{{Voyager::image($product->image)}}" alt=""> </div>
                <div class="product_detail_btm">
                  <div class="center">
                    <h4><a href="/product/{{$product->slug}}">{{$product->name}}</a></h4>
                  </div>
                  <div class="product_price">
                    <p><span class="new_price">${{$product->price}}</span></p>
                  </div>
                  <div class="starratin">
                    <div class="center"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                  </div>
                  <div class="center">
                    <form action="" method="POST">
                      @csrf
                      <input type="hidden" name="product_id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <input type="hidden" name="quantity" value="1">
                      <button class="btn bg-primary" type="submit">add to cart</button>
                    </form>
                    
                  </div>
                  
                </div>
                
                
              </div>
              
            </div>
            @endforeach

            <div class="center">
              <ul class="pagination style_1">
                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="it_blog_grid.html">2</a></li>
                <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 position-sticky">
          <div class="side_bar">
            <div class="side_bar_blog">
              <h4>SEARCH</h4>
              <div class="side_bar_search">
                <div class="input-group stylish-input-group">
                  <input class="form-control" placeholder="Search" type="text">
                  <span class="input-group-addon">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span> 
                </div>
              </div>
            </div>
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