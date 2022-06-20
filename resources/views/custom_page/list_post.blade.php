@extends('layout.layout')
@section('content')

<div class="page-title lb single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-gears bg-orange"></i> {{ $get_cate->cate_name }}
                     <small class="hidden-xs-down hidden-sm-down">
                        {{ $get_cate->cate_note }}
                    </small>
                </h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Tin Tức</a></li>
                    <li class="breadcrumb-item active"> {{ $get_cate->cate_name }} </li>
                </ol>
            </div><!-- end col -->                    
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-custom-build">

                        <hr class="invis">
                        {{-- @php($get_list = DB::table('posts')->where('cate_id',15)->get()) --}}
                        @foreach ($get_list as $data)
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href=" {{url('post-detail/'.$data->id)}} " title="">
                                        <img src=" {{url('public/upload/'.$data->image)}} " alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div>
                                    </a>
                                </div>
                                <!-- end media -->
                                <div class="blog-meta big-meta text-center">
                                    <div class="post-sharing">
                                        <ul class="list-inline">
                                            <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                            <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                            <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div><!-- end post-sharing -->
                                    <h4><a href="{{url('post-detail/'.$data->id)}}" title=""> {{$data->title}} </a></h4>
                                    <p>  {{substr($data->content,0,100)."....."}} </p>
                                    <small><a href="#" title="">Videos</a></small>
                                    <small><a href="#" title="">18 July, 2017</a></small>
                                    <small><a href="#" title="">by Amanda</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        @endforeach
                        <hr class="invis">
<!-- end blog-box -->
                    </div><!-- end blog-custom-build -->
                </div><!-- end page-wrapper -->

                <hr class="invis">
                {{$get_list->links('layout.my-paginate')}}
                <!-- end row -->
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="public/upload/banner_07.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Bài Viết Có Liên Quan</h2>
                        <div class="trend-videos">
                            <div class="blog-box">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="public/upload/tech_video_01.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect">
                                            <span class="videohover"></span>
                                        </div><!-- end hover -->
                                    </a>
                                </div><!-- end media -->
                                <div class="blog-meta">
                                    <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                </div><!-- end meta -->
                            </div><!-- end blog-box --><!-- end blog-box -->
                        </div><!-- end videos -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Bài Viết Phổ Biến</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="public/upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                        <small>12 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="public/upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Let's make an introduction for..</h5>
                                        <small>11 Jan, 2016</small>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="public/upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Did you see the most beautiful..</h5>
                                        <small>07 Jan, 2016</small>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Follow Us</h2>
                        <div class="row text-center">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button facebook-button">
                                    <i class="fa fa-facebook"></i>
                                    <p>27k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button twitter-button">
                                    <i class="fa fa-twitter"></i>
                                    <p>98k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button google-button">
                                    <i class="fa fa-google-plus"></i>
                                    <p>17k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button youtube-button">
                                    <i class="fa fa-youtube"></i>
                                    <p>22k</p>
                                </a>
                            </div>
                        </div>
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div>
    </div><!-- end container -->
</section>

@endsection