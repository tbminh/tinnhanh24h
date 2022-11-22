<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Site Metas -->
    <title>@yield('title')</title>
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
                    <a class="navbar-brand" href="{{url('/')}}"><img src=" {{url('public/images/version/tech-logo.png')}} " alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Trang Chủ</a>
                            </li>
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
                                <a class="nav-link" href="{{ url('about-us') }}">Về Chúng Tôi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('page-contact') }}">Phản Hồi</a>
                            </li>
                        </ul>
                        <ul>
                            <div class="search-container" style="margin:5px 200px 0px 0px;">
                                <form action="{{ url('list-post/0') }}">
                                  <input type="text" placeholder="Tìm Kiếm.." name="search" style="width: 250px;">
                                  <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </ul>
                        <ul class="navbar-nav mr-2">
                           @if (Auth::check())
                                <li class="nav-item">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-user"></i>  {{ Auth::User()->full_name}}
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('profile-info/'.Auth::id()) }}"><i class="fa fa-info"></i>  Thông Tin Cá Nhân</a>
                                            <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-sign-out"></i>Đăng Xuất</a>
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
                                <a href=" {{url('auth/redirect/google')}} " style="background: #d63031 !important; border-radius: 3rem;" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Google">
                                    <i class="fa fa-google"></i>
                                </a>&emsp;
                                <a href="{{url('auth/redirect/facebook')}}" style="background: #0984e3 #important;  border-radius: 3rem;" class="btn btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
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
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="modal-body">
                            <div class="form-title text-center">
                                <h4>Đăng Ký</h4>
                            </div>
                            <div class="d-flex flex-column text-center">
                                <form class="form-login" action="{{ url('post-signup') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="fullname"  id="fullname" placeholder="Nhập họ tên...">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Nhập mật khẩu...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Xác nhận mật khẩu...">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại...">
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="float: left;"><b style="margin-right: 100px;">Giới tính:</b>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="male" value="0">Nam
                                            </label> &emsp;
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="female" value="1">Nữ
                                            </label>
                                        </label>
                                    </div><br/>
                                    <div class="form-check">
                                        <label for="">Hình ảnh</label>
                                        <input type="file" class="form-control-file" name="inputFileImage">
                                        <img id="blah" src="#" style="max-width:100%;height:50px;border-radius:5px;"/>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-round" style="border-radius: 3rem;" id="ajaxSubmit"><b>Đăng Ký</b></button>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="signup-section">Bạn đã có tài khoản <a href="#a" class="text-info"> Đăng Nhập</a></div>
                        </div>
                    </div>
                </div>
          </div>
          <script>
            jQuery(document).ready(function(){
               jQuery('#ajaxSubmit').click(function(e){
                  e.preventDefault();
                  $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                     }
                 });
                  jQuery.ajax({
                     url: "{{ url('post-signup') }}",
                     method: 'POST',
                     data: {
                        name: jQuery('#fullname').val(),
                        email: jQuery('#email').val(),
                        password: jQuery('#password').val(),
                        confirm: jQuery('#confirm').val(),
                        phone: jQuery('#phone').val(),
                     },
                    success: function(result){
                         if(result.status == 0)
                         {
                             jQuery('.alert-danger').html('');

                             jQuery.each(result.errors, function(key, val){
                                 jQuery('.alert-danger').show();
                                 jQuery('.alert-danger').append('<li>'+val[0]+'</li>');
                             });
                         }
                         else
                         {
                             jQuery('.alert-danger').hide();
                             $('#myModal').modal('hide');
                         }
                    }});
                  });
               });
         </script>
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
                            <h2 class="widget-title">Loại tin tức</h2>
                            <div class="link-widget">
                                <ul>
                                    @php($get_cate = DB::table('categories')->get())
                                    @foreach ($get_cate as $data)
                                        @php($qty = DB::table('posts')->where('cate_id',$data->id)->count())
                                        <li><a href="{{ url('list-post/'.$data->id) }}">{{ $data->cate_name }} <span>({{ $qty }})</span></a></li>
                                    @endforeach
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
