@extends('layout.layout_admin')
@section('title','Trang loại sản phẩm')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('page-admin') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Loại sản phẩm</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection


@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <section class="col-lg-6 connectedSortable">
                    {{-- Hiển thị thông báo đã thêm loại sp mới --}}
                    @if(Session()->has('message1'))
                        <script>
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Đã thêm thành công',
                                showConfirmButton: false,
                                timer: 2000
                            })
                        </script>
                    @endif
                        {{-- Đã xóa sản phẩm --}}
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                THÊM LOẠI
                            </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-3">
                            <form action="{{ url('post-add-category') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-3">
                                        <label for="">Tên loại:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="inputName" class="form-control" placeholder="Nhập tên loại">
                                        <small class="text-danger">{{ $errors->first('inputCategory') }}</small>
                                    </div>
                                    <br><br>
                                    <div class="col-3">
                                        <label for="">Mô tả:</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" name="inputNote" class="form-control" placeholder="Nhập tên loại">
                                        <small class="text-danger">{{ $errors->first('inputNote') }}</small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>


                <section class="col-lg-6 connectedSortable">
                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                LOẠI SẢN PHẨM
                            </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th> 
                                        <th>Tên loại</th> 
                                        <th>Ghi Chú</th>
                                        <th scope="col" colspan="2">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($show_categories as $key => $data)
                                    <tr>
                                        <td> {{ ++$key }}</td>
                                        <td> {{$data->cate_name}}</td>
                                        <td> {{$data->cate_note}}</td>
                                        <td>
                                            <button class="btn btn-primary btn-xs" role="button"
                                                    data-toggle="modal" data-id="{{$data->id}}" data-target="#edit_{{ $data->id }}">
                                                <i class="fas fa-edit"></i> Đổi
                                            </button>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger btn-xs"
                                            href="{{ url('delete-category/'.$data->id) }}" role="button" onclick="return confirm('Bạn có chắc muốn xóa không?')">
                                                <i class="fa fa-trash"></i> Xóa
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="edit_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Đổi</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('edit-category/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="">Tên loại sản phẩm</label>
                                                            <input type="text" name="inputName" class="form-control" value="{{ $data->cate_name }}">
                                                            <div class="invalid-feedback">Chưa nhập tên sản phẩm </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Ghi Chú</label>
                                                            <input type="text" name="inputNote" class="form-control" value="{{ $data->cate_note }}">
                                                            <div class="invalid-feedback">Chưa nhập tên sản phẩm </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="">Hình ảnh</label>
                                                            <input type="file" class="form-control-file" id="imgInp" name="inputFileImage">
                                                            <img id="blah" src="{{ asset('public/home/upload_img/'.$data->category_image) }}" style="max-width:100%;height:50px;border-radius:5px;"/>
                                                        </div>
                                
                                                        <div class="form-group row">
                                                            <div class="col-12 text-right">
                                                                <button type="submit" class="btn btn-primary btn-sm">
                                                                    <i class="fas fa-edit"></i> Đổi
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <tr>
                                            <td colspan="10">
                                                <b class="text-danger">Không có dữ liệu </b>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                            <ul class="pagination justify-content-xl-end" style="margin:20px 0">
                                {{ $show_categories->links() }}
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    
    <script>
        CKEDITOR.replace( 'inputDescript' );
    </script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#imgInp").change(function() {
            readURL(this);
        });
    </script>

@endsection
