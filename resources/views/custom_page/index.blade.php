@extends('layout.layout')
@section('title','TechBlog tin tức công nghệ')
@section('content')

<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
{{--            <div class="first-slot">--}}
{{--                <div class="masonry-box post-media">--}}
{{--                     <img src="{{ url('public/upload/'.$first_slide->image) }}" alt="" class="img-fluid">--}}
{{--                     <div class="shadoweffect">--}}
{{--                        <div class="shadow-desc">--}}
{{--                            <div class="blog-meta">--}}
{{--                                <span class="bg-orange"><a href="#" title="">{{  $first_slide->cate_name }}</a></span>--}}
{{--                                <h4><a href="{{ url('post-detail/'.$first_slide->id) }}" title="">{{ $first_slide->title }}</a></h4>--}}
{{--                                <small><a href="{{ url('post-detail/'.$first_slide->id) }}" title="">24 July, 2017</a></small>--}}
{{--                                <small><a href="{{ url('post-detail/'.$first_slide->id) }}" title="">by {{ $first_slide->full_name }}</a></small>--}}
{{--                            </div><!-- end meta -->--}}
{{--                        </div><!-- end shadow-desc -->--}}
{{--                    </div><!-- end shadow -->--}}
{{--                </div><!-- end post-media -->--}}
{{--            </div><!-- end first-side -->--}}
{{--            @php($get_sliders = DB::table('posts')->orderBy('id','desc')->take(4)->get())--}}
            @foreach($first_slide as $data)
                <div class="second-slot">
                    <div class="masonry-box post-media">
                        <img src="{{ url('public/upload/'.$data->image) }}"  height="250" width="216">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange">
                                        <a href="{{ url('list-post/'.$data->cate_id) }}"> {{$data->cate_name}}</a> 
                                    </span>
                                    <h4><a href="{{ url('post-detail/'.$data->id) }}" title="">{{$data->title}}</a></h4>
                                    <small><a href="#" title="">{{$data->created_at->format('d M 20y')}}</a></small>
                                    <small><a href="#" title="">by {{$data->full_name}}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
            @endforeach
        </div><!-- end masonry -->
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Tin Mới <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->
                    <div class="blog-list clearfix">
                        @foreach($get_news as $key => $data)
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="{{ url('post-detail/'.$data->id) }}" title="{{ $data->title }}">
                                            <img src="{{ url('public/upload/'.$data->image) }}" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="{{ url('post-detail/'.$data->id) }}">{{ $data->title }}</a></h4>
                                    <p>{{substr($data->content,0,100)."....."}}</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">{{ $data->cate_name }}</a></small>
                                    <small><a href="tech-single.html" title="">{{$data->created_at->format('d M 20y')}}</a></small>
                                    <small><a href="tech-author.html" title="">by {{ $data->full_name }}</a></small>
                                    <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> {{ $data->view }}</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            <br>
                        @endforeach
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">
                {{$get_news->links('layout.my-paginate')}}
            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <h2 class="widget-title">Popular Posts</h2>
                        @foreach ($populars as $data)
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                        <img src="{{ url('public/upload/'.$data->image) }}" class="img-fluid float-left">
                                            <h5 class="mb-1">{{ $data->title }}</h5>
                                            <small>{{$data->created_at}}</small>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        @endforeach
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Bài viết gần đây</h2>
                        <div class="blog-list-widget">
                            <div class="list-group">
                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="public/upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 justify-content-between">
                                        <img src="public/upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">10 practical ways to choose organic..</h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </a>

                                <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="w-100 last-item justify-content-between">
                                        <img src="public/upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                                        <h5 class="mb-1">We are making homemade ravioli..</h5>
                                        <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Tương tác với chúng tôi</h2>
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
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
