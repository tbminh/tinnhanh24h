<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Tech Blog - Stylish Magazine Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{asset('public/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{asset('public/css/responsive.css')}}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{asset('public/css/colors.css')}}" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href=" {{asset('public/css/version/tech.css')}} " rel="stylesheet">


</head>
<body>
    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="tech-index.html"><img src="public/images/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Trang Chủ</a>
                            </li>
                            {{-- <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin Tức</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <li>
                                        <div class="container">
                                            <div class="mega-menu-content clearfix">
                                                <div class="tab">
                                                    <button class="tablinks active" onclick="openCategory(event, 'cat01')">Khoa Học</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat02')">Công Nghệ</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat03')">Block Chain</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat04')">Xe hơi</button>
                                                    <button class="tablinks" onclick="openCategory(event, 'cat05')">Kinh Tế Số</button>
                                                </div>

                                                <div class="tab-details clearfix">
                                                    <div id="cat01" class="tabcontent active">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_01.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Top 10+ care advice for your toenails</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_02.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The secret of your beauty is handmade soap</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_03.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Benefits of face mask made from mud</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_04.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Science</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Relax with the unique warmth of candle flavor</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat02" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_05.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">2017 summer stamp will have design models here</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_06.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Which color is the most suitable color for you?</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_07.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Subscribe to these sites to keep an eye on the fashion</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_08.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Technology</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The most trends of this year with color combination</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat03" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_09.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">I visited the architects of Istanbul for you</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_10.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Prepared handmade dish dish in the Netherlands</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_11.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">I recommend you visit the fairy chimneys</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_12.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Social Media</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">One of the most beautiful ports in the world</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat04" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_13.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">A collection of the most beautiful shop designs</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_14.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">America's and Canada's most beautiful wine houses</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_15.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The most professional ways to color your walls</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_16.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Car News</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Stylish cabinet designs and furnitures</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div id="cat05" class="tabcontent">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_17.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Grilled vegetable with fish prepared with fish</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_18.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">The world's finest and clean meat restaurants</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_19.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Fried veal and vegetable dish</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="tech-single.html" title="">
                                                                            <img src="public/upload/tech_menu_20.jpg" alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span class="menucat">Worldwide</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="tech-single.html" title="">Tasty pasta sauces and recipes</a></h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        </div><!-- end row -->
                                                    </div>
                                                </div><!-- end tab-details -->
                                            </div><!-- end mega-menu-content -->
                                        </div>
                                    </li>
                                </ul>
                            </li>        --}}
                            <li class="nav-item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     Tin Tức
                                    </button>
                                    <div class="dropdown-menu">
                                        @php($get_cate = DB::table('categories')->get())
                                        @foreach ($get_cate as $data)
                                            <a class="dropdown-item" href=" {{url('list-post/'.$data->id)}} "> {{$data->cate_name}} </a>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tech-category-03.html">Về Chúng Tôi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('page-contact') }}">Liên Hệ</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                           @if (Auth::check())
                            <li class="nav-item">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user"></i>  {{ Auth::user()->full_name}}
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#"><i class="fa fa-info"></i>  Thông Tin Cá Nhân</a>
                                      <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i>Đăng Xuất</a>
                                    </div>
                                </div>
                            </li>
                           @else
                                <li class="nav-item">
                                    <button type="button" class="btn btn-light btn-round" data-toggle="modal" data-target="#loginModal">
                                        <i class="fa fa-sign-in"></i>  Đăng Nhập
                                    </button> 
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-light btn-round" data-toggle="modal" data-target="#signupModal">
                                        <i class="fa fa-check"></i>  Đăng Ký
                                    </button> 
                                </li>
                           @endif
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
        {{-- Modal login --}}
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="form-title text-center">
                    <h4>Đăng Nhập</h4>
                  </div>
                  <div class="d-flex flex-column text-center">
                    <form action="{{ url('post-login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Nhập email...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Mật Khẩu...">
                        </div>
                        <button type="submit" class="btn btn-block btn-round" style="border-radius: 3rem;"><b>Đăng Nhập</b></button>
                    </form>
                    
                    <div class="text-center text-muted delimiter">Hoặc đăng nhập bằng:</div>
                    <div class="d-flex justify-content-center social-buttons">
                      <a href="#" style="background: #d63031 !important; border-radius: 3rem;" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Google">
                        <i class="fa fa-google"></i>
                      </a>&emsp;
                      <a href="#" style="background: #0984e3 #important;  border-radius: 3rem;" class="btn btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Chưa có tài khoản? <a href="#a" class="text-info"> Đăng Ký</a>.</div>
                </div>
              </div>
            </div>
        </div>
          {{-- End modal login --}}
            @yield('content')
           {{-- Modal signup --}}
           <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-title text-center">
                                <h4>Đăng Ký</h4>
                            </div>
                            <div class="d-flex flex-column text-center">
                                <form class="form-login" action="{{ url('post-signup') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fullname" placeholder="Nhập họ tên...">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Nhập email...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm" placeholder="Xác nhận mật khẩu...">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" placeholder="Nhập số điện thoại...">
                                    </div>
                                    <div class="form-check">
                                        <label for="" style="display: inline;">Giới tính</label>
                                        <input type="radio" class="form-control" name="gender" id="male" value="0"> Nam
                                        <input type="radio" class="form-control" name="gender" id="female" value="1"> Nữ
                                    </div>
                                    <div class="form-check">
                                        <label for="">Hình ảnh</label>
                                        <input type="file" class="form-control-file" name="inputFileImage">
                                        <img id="blah" src="#" style="max-width:100%;height:50px;border-radius:5px;"/>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-round" style="border-radius: 3rem;"><b>Đăng Ký</b></button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="signup-section">Bạn đã có tài khoản <a href="#a" class="text-info"> Đăng Nhập</a>.</div>
                        </div>
                    </div>
                </div>
          </div>
          {{-- end modal sign up  --}}
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html"><img src="images/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                                <p>Tech Blog là trang blog về công nghệ, chúng tôi chia sẽ những tin tức, bài viết và kiến thức về công nghệ bạn cần.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <hr class="invis">
                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Copyrights</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="#">Trademark</a></li>
                                    <li><a href="#">License & Help</a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Tech Blog. Design: <a href="http://html.design">HTML Design</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">
            {{-- <img src="public/images/top_icon.png" width="50" height="50"> --}}
        </div>
    </div><!-- end wrapper -->
    <!-- Core JavaScript ================================================== -->
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
    </script>
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/js/tether.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('public/js/custom.js')}} "></script>
</body>
</html>