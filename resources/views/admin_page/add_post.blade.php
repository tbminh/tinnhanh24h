@extends('layout.layout_admin')
@section('title', 'Trang danh sách sản phẩm')


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

<form action="{{ url('add-posts') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Loại bài viết</label>
        <select name="inputCategoryId" class="form-control">
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
            <option value=""> --Chọn--</option>
            @php($get_author = DB::table('users')->where('role_id',2)->get())
            @foreach($get_author as $value)
                <option value="{{ $value->id }}">
                    {{$value->full_name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Tiêu Đề</label>
        <input type="text" name="inputTitle" class="form-control" placeholder="Nhập tiêu đề...">
    </div>

    <div class="form-group">
        &emsp;&emsp;<textarea name="inputContent" id="" cols="80" rows="20" placeholder="Nhập nội dung bài viết..."></textarea>
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

@endsection