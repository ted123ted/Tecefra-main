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

</body>
</html>