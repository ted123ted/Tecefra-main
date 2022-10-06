@extends('layouts.main')
@section('content')


<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section hidden-md">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="full">
            <div class="title-holder">
              <div class="title-holder-cell text-left">
                <h1 class="page-title">Tecefra Blog</h1>
                <ol class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Blog</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end inner page banner -->
  <!-- section -->
  <div class="section padding_layout_1 service_list">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            @foreach ($posts as $post )
            <div class="col-md-6 service_blog margin_bottom_50">
                <div class="full">
                  <div class="service_img"> <img class="img-responsive" src="{{Voyager::image($post->image)}}" alt="#" /> </div>
                  <div class="service_cont">
                    <h3 class="service_head"><a href="/post/{{$post->slug}}">{{$post->title}}</a></h3>
                    <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    <div class=""> <a class="" href="{{$post->slug}}">read more</a> </div>
                  </div>
                </div>
            </div>
            @endforeach


          </div>
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

