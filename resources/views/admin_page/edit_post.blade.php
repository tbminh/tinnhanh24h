@extends('layout.layout_admin')
@section('title', 'Trang danh sách sản phẩm')
<script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<style>
    .form-group{
        margin-left: 20px;
    }
</style>
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{'page-admin'}}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
<form action="{{ url('update-post/'.$get_post->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="">Loại bài viết</label>
        <select name="inputCategoryId" class="form-control">
            @php($get_cate = DB::table('categories')->where('id',$get_post->cate_id)->first())
            <option value="{{ $get_cate->id }}"> {{ $get_cate->cate_name }}</option>
            <option value=""> --Chọn--</option>
            @php($get_categories = DB::table('categories')->get())
            @foreach($get_categories as $value)
                <option value="{{ $value->id }}">
                    {{ $value->cate_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Tác giả</label>
        <select name="inputAuthor" class="form-control">
            @php($get_user = DB::table('users')->where('id',$get_post->author)->first())
            <option value="{{ $get_user->id }}">{{ $get_user->user_name }}</option>
        </select>
    </div>

    <div class="form-group">
        <label for="">Tiêu Đề</label>
        <input type="text" name="inputTitle" value="{{ $get_post->title }}" class="form-control" placeholder="Nhập tiêu đề...">
    </div>

    <div class="form-group">
        <label for="">Nội Dung</label>
        <textarea name="inputContent" cols="200" rows="20">{{ $get_post->content }}</textarea>
    </div>

    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input type="file" class="form-control-file" id="imgInp" name="inputFileImage">
        <img id="blah" src="#" style="max-width:100%;height:50px;border-radius:5px;"/>
    </div>

    <div class="form-group row">
        <div class="col-12 text-right">
            <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
        </div>
    </div>
</form>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.config.autoParagraph = false;
    CKEDITOR.replace('inputContent');
</script>
@endsection