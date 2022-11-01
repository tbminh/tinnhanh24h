@extends('layout.layout')
@section('title','Trang tác giả')

@section('content')

<div class="page-title lb single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-star bg-orange"></i> Tác Giả: {{ $get_author->user_name }}</h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Author</a></li>
                    <li class="breadcrumb-item active">{{ $get_author->full_name }}</li>
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
                    <div class="custombox authorbox clearfix">
                        <h4 class="small-title">Giới Thiệu</h4>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <img src="public/upload/author.jpg" class="img-fluid rounded-circle"> 
                            </div><!-- end col -->

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <h4><a href="#">{{ $get_author->user_name }}</a></h4>
                                <p>{{ $get_author->about }}</p>

                                <div class="topsocial">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                </div><!-- end social -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end author-box -->

                    <hr class="invis1">
                    @foreach ($get_page as $data)
                        <div class="blog-list clearfix">
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="{{ url('public/upload/'.$data->image) }}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="{{ url('post-detail/'.$data->id) }}" title="">{{ $data->title }}</a></h4>
                                    <p>{{substr($data->content,0,200)."....."}}</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Reviews</a></small>
                                    <small><a href="{{ url('post-detail/'.$data->id) }}" title="">{{$data->created_at->format('d M 20y')}}</a></small>
                                    <small><a href="{{ url('post-detail/'.$data->id) }}" title="">{{ $data->full_name }}</a></small>
                                    <small><a href="{{ url('post-detail/'.$data->id) }}" title=""><i class="fa fa-eye"></i> {{ $data->view }}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end blog-list -->
                    @endforeach
                </div><!-- end page-wrapper -->

                <hr class="invis">
                {{$get_page->links('layout.my-paginate')}}
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Theo Dõi Chúng Tôi</h2>

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
                    
                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/banner_07.jpg" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Bài Viết Phổ Biến</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                @foreach ($populars as $data)
                                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{ url('public/upload/'.$data->image) }}" class="img-fluid float-left">
                                            <h5 class="mb-1">{{ $data->title }}</h5>
                                            <small>{{$data->created_at}}</small>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection