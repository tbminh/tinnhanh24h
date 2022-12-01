@extends('layout.layout')
@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Tin Tức</a></li>
                        </ol>

                        <span class="color-orange active">
                            <a href=" {{url('list-post/'.$get_detail->id)}}">{{$get_detail->cate_name}} </a>
                        </span>

                        <h3> {{$get_detail->title}} </h3>

                        <div class="blog-meta big-meta">
                            <small><a href="#" title="">{{$get_detail->created_at->format('d M 20y')}}</a></small>
                            <small><a href="{{ url('list-post/'.$get_detail->author) }}">by {{ $get_detail->full_name }}</a></small>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> {{ $get_detail->view }} </a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&display=popup" target="_blank" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    <div class="single-post-media">
                        <img src=" {{url('public/upload/'.$get_detail->image)}} " alt="" class="img-fluid">
                    </div><!-- end media -->

                    <div class="blog-content">  
                        <div class="pp">
                            <p> {{ $get_detail->content }} </p>
                        </div><!-- end pp -->
                    </div><!-- end content -->

                    <div class="blog-title-area">
                        <div class="tag-cloud-single">
                            <span>Thể Loại</span>
                            @php($cate = DB::table('categories')->where('id','>','0')->get())
                            @foreach ($cate as $data)
                                <small><a href="{{ url('list-post/'.$data->id) }}">{{ $data->cate_name }}</a></small>
                            @endforeach
                        </div><!-- end meta -->
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="{{ url('public/upload/banner_01.jpg') }}" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis1">

                    {{-- <div class="custombox authorbox clearfix">
                        <h4 class="small-title">About author</h4>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <img src="public/upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
                            </div><!-- end col -->

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <h4><a href="#">Jessica</a></h4>
                                <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Tech Blog!</p>

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
                    </div><!-- end author-box --> --}}

                    <hr class="invis1">

                    {{-- <div class="custombox clearfix">
                        <h4 class="small-title">3 Comments</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="comments-list">
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="public/upload/author.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="media-left" href="#">
                                            <img src="public/upload/author_01.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">

                                            <h4 class="media-heading user_name">Baltej Singh <small>5 days ago</small></h4>

                                            <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                        </div>
                                    </div>
                                    <div class="media last-child">
                                        <a class="media-left" href="#">
                                            <img src="public/upload/author_02.jpg" alt="" class="rounded-circle">
                                        </a>
                                        <div class="media-body">

                                            <h4 class="media-heading user_name">Marie Johnson <small>5 days ago</small></h4>
                                            <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end custom-box --> --}}
                </div><!-- end page-wrapper -->
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
                        <h2 class="widget-title">Bài Viết Liên Quan</h2>
                        <div class="blog-list-widget">
                            @php($get_post = DB::table('posts')->where('cate_id',$get_detail->cate_id)->inRandomOrder()->limit(3)->get())
                            @foreach ($get_post as $data)
                                <div class="list-group">
                                    <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="{{ url('public/upload/'.$data->image) }}" class="img-fluid float-left">
                                            <h5 class="mb-1">{{substr($data->content,0,50)."....."}}</h5>
                                            <small> {{$data->created_at}} </small>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->


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
                                <img src="public/upload/banner_03.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection