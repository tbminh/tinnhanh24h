@extends('layout.layout')
@section('content')
    
<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            <div class="first-slot">
                <div class="masonry-box post-media">
                     <img src="public/upload/tech_01.jpg" alt="" class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                                <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end first-side -->

            <div class="second-slot">
                <div class="masonry-box post-media">
                     <img src="public/upload/tech_02.jpg" alt="" class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                                <h4><a href="tech-single.html" title="">Do not make mistakes when web hosting</a></h4>
                                <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Jessica</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                     </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end second-side -->

            <div class="last-slot">
                <div class="masonry-box post-media">
                     <img src="public/upload/tech_03.jpg" alt="" class="img-fluid">
                     <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Jessica</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                     </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end second-side -->
        </div><!-- end masonry -->
    </div>
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 500px;">
          <div class="carousel-item active">
            <img class="d-block w-100" src="public/upload/tech_03.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="public/upload/tech_03.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="public/upload/tech_03.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> --}}
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
                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="public/upload/tech_blog_01.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="tech-single.html" title="">Top 10 phone applications and 2017 mobile design awards</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                                <small><a href="tech-single.html" title="">21 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Matilda</a></small>
                                <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="public/upload/banner_01.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="tech-single.html" title="">
                                        <img src="public/upload/tech_blog_10.jpg" alt="" class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="tech-single.html" title="">Google has developed a brand new algorithm. Forget all your knowledge!</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                                <small><a href="tech-single.html" title="">13 July, 2017</a></small>
                                <small><a href="tech-author.html" title="">by Matilda</a></small>
                                <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 3331</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row -->
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
                        <h2 class="widget-title">Popular Posts</h2>
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
                        <h2 class="widget-title">Recent Reviews</h2>
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
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection