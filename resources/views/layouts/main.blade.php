<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>tecefra</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}" />
    <!-- Site css -->
    <link rel="stylesheet" href="{{asset ('css/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset ('css/responsive.css')}}" />
    <!-- colors css -->
    <link rel="stylesheet" href="{{asset ('css/colors1.css')}}" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="{{asset ('css/animate.css')}}" />
    </head>
<body>
      <!-- header -->
    <header id="default_header" class="header_style_1">
      <!-- header bottom -->
      <div class="header_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
              <!-- logo start -->
              <div class="logo"> <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a> </div>
              <!-- logo end -->
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
              <!-- menu start -->
              <div class="menu_side">
                <div id="navbar_menu">
                  <ul class="first-ul">


                    <li>
                      <div class="side_bar_blog">
                        <div class="">
                          <div class="input-group stylish-input-group">
                            <input class="form-control" placeholder="Search" type="search">
                            <span class="input-group-addon">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span> 
                          </div>
                        </div>
                      </div>
                    </li>
                    <li> <a href="/blog">Blog</a>
                      <ul>
                        <li><a href="it_blog.html">Blog List</a></li>
                        <li><a href="it_blog_detail.html">Blog Detail</a></li>
                      </ul>
                    </li>
                    <li> <a href="/"><i class="fa fa-shopping-cart" aria-hidden="false"></i> ({{ Cart::getTotalQuantity()}})</a>
                      <ul>
                        <li><a href="it_shop.html">Shop List</a></li>
                        <li><a href="it_shop_detail.html">Shop Detail</a></li>
                        <li><a href="/cart">Shopping Cart</a></li>
                        <li><a href="it_checkout.html">Checkout</a></li>
                      </ul>
                    </li>
                    @auth
                    <li> <a href="">{{auth()->user()->name}}<i class="fa fa-user"></i></a>
                      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                          <li><a href="{{ url('/dashboard') }}" class="nav-link"><i class="fa fa-user-circle"></i> Dashboard</a></li>
                          <li>
                            <form method="POST" action="/logout">
                              @csrf
                              <button type="submit" class="btn main_bt">
                                <i class="fa fa-sign-out"></i> logout
                              </button>
                            </form>
                            {{-- <a href="{{ url('/logout') }}" class="nav-link"><i class="fa fa-sign-out"></i> logout</a> --}}
                          </li>
                      @else
                          <li><a href="{{ url('/login') }}" class="nav-link"><i class="fa fa-sign-in"></i> login</a></li>
                          <li><a href="{{ url('/register') }}" class="nav-link"><i class="fa fa-user-plus"></i> Register</a></li> 
                      </ul>
                    </li>
                    @endauth
                  </ul>
                </div>
              </div>
              <!-- menu end -->
            </div>
          </div>
        </div>
      </div>
      <!-- header bottom end -->
    </header>
    <!-- end header -->
            <div id="wrapper">
                @yield('content')
            </div>

<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>It Next Theme</h2>
            </div>
            <p>Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> News</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Services</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
              <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
              <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
              <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
              <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>123 Second Street Fifth Avenue,<br>
              Manhattan, New York<br>
              <span style="font-size:18px;"><a href="tel:+9876543210">+987 654 3210</a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>ItNext © Copyrights 2019 Design by html.design</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
</body>
</html>