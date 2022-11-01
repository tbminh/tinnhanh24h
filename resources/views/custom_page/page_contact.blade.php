@extends('layout.layout')
@section('content')
<script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<div class="page-title lb single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-envelope-open-o bg-orange"></i> Liên hệ chúng tôi<small class="hidden-xs-down hidden-sm-down">Những phản hồi của bạn sẽ được chuyển. </small></h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Liên hệ</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-wrapper">
                    <div class="row">
                        <div class="col-lg-5">
                            <h4>Who we are</h4>
                            <p>Tech Blog is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p>

                            <h4>How we help?</h4>
                            <p>Etiam vulputate urna id libero auctor maximus. Nulla dignissim ligula diam, in sollicitudin ligula congue quis turpis dui urna nibhs. </p>

                            <h4>Pre-Sale Question</h4>
                            <p>Fusce dapibus nunc quis quam tempor vestibulum sit amet consequat enim. Pellentesque blandit hendrerit placerat. Integertis non.</p>
                        </div>
                        <div class="col-lg-7">
                            <form class="form-wrapper" action="{{ route('post.feedback') }}" method="POST">
                                @csrf
                                <input type="text" class="form-control" name="inputName" placeholder="Tên của bạn">
                                <input type="text" class="form-control" name="inputEmail" placeholder="Email">
                                <input type="text" class="form-control" name="inputPhone" placeholder="Điện thoại">
                                <input type="text" class="form-control" name="inputTitle" placeholder="Tiêu Đề">     
                                <textarea name="inputText" id="editor1" rows="10" cols="80"></textarea>
                                <button type="submit" class="btn btn-primary">Gửi <i class="fa fa-envelope-open-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- end page-wrapper -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'inputText' );
</script>
@endsection
