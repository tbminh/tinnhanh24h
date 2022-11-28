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
                        <li class="breadcrumb-item active">Quản lý bài viết</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
    {{--        Hiển thị dòng thông báo đã thêm thành công--}}
                @if(session()->has('success'))
                    <script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Đã thêm bài viết mới!',
                            showConfirmButton: false,
                            timer: 2000
                        })
                    </script>
                @endif

                @if(session()->has('message'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <!-- TO DO List -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            SẢN PHẨM
                        </h3>
                        {{-- <div class="card-tools">
                            <a  href=" {{url('page-add-post')}} " class="btn btn-primary btn-sm" >
                                <i class="fa fa-plus-circle"></i> Thêm bài viết
                            </a>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Loại bài viết</th>
                                    <th>Tác giả</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Trạng Thái</th>
                                    <th>Hình ảnh</th>
                                    <th scope="col" colspan="3">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($show_posts as $key => $data)
                                    <tr>
                                        <td> {{ ++$key }}</td>
                                        <td>
                                            @php($get_cate = DB::table('categories')->where('id',$data->cate_id)->first())
                                             {{ $get_cate->cate_name }} 
                                        </td>
                                        <td>
                                            @php($get_author = DB::table('users')->where('id',$data->author)->first())
                                            {{$get_author->full_name}}
                                        </td>
                                        <td>
                                            {{$data->title}}
                                        </td>
                                        <td> {{substr($data->content,0,100)."....."}} </td>
                                        <td>
                                            @if ($data->post_status == 0)
                                                <b style="color: red;"> Chưa duyệt</b>
                                            @else
                                                <b style="color: green;">Đã duyệt</b>
                                            @endif
                                        </td>
                                        <td>
                                            <img src="{{ url('public/upload/'.$data->image) }}"
                                            class="img-circle elevation-2" alt="Post Image " width="60px" height="50px">
                                        </td>
                                        @if ($data->post_status == 0)
                                            <td>
                                                <a class="btn btn-success btn-sm" href=" {{url('check-post/'.$data->id)}} ">
                                                    <i class="fa fa-check"></i> Duyệt
                                                </a>
                                            </td>
                                        @else
                                            <td>
                                                <a class="btn btn-danger btn-sm" href=" {{url('cancel-post/'.$data->id)}} ">
                                                    <i class="fa fa-trash"></i> Hủy
                                                </a>
                                            </td>
                                        @endif
                                        <td>
                                            <a class="btn btn-danger btn-sm" href=" {{url('delete-post/'.$data->id)}} "  onclick="return confirm('Bạn có chắc muốn xóa không?');">
                                                <i class="fa fa-trash"></i> Xóa
                                            </a>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#edit{{ $data->id }}">
                                                <i class="fas fa-edit"></i> Đổi
                                            </button>
                                        </td>
                                    </tr>
                                    {{-- <div class="modal fade" id="edit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Sửa sản phẩm</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('update-product/'.$data->id.'/'.$get_product_suppliers->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="">Tên sản phẩm:</label>
                                                        <input type="text" name="inputName" class="form-control" placeholder="Nhập tên sản phẩm..."
                                                        value="{{ $data->product_name }}">
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label for="">Nhà cung cấp:</label>
                                                        <select name="inputSupplier" class="form-control">
                                                            <option value="{{ $get_suppliers->id }}">{{ $get_suppliers->supplier_name }}</option>
                                                            <option value=""> --Chọn--</option>
                                                            @php($supplier = DB::table('suppliers')->get())
                                                            @foreach($supplier as $value)
                                                                @if ($value->id == $get_suppliers->id)
                                                                    @continue
                                                                @else
                                                                    <option value="{{ $value->id }}">
                                                                        {{$value->supplier_name}}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                    
                                                    <div class="form-group">
                                                        <label for="">Hình ảnh: </label>
                                                        <input type='file' name="inputFileImage">
                                                        <img id="blah" src="{{ url('public/home/upload_img/'.$data->product_img)}}" title="{{ $data->product_name }}" alt="Hình Ảnh" style="max-width:100%; height:80px; border: 2px solid #bdc3c7;"/>
                                                    </div>
                    
                                                    <div class="form-group col-md-10">
                                                        <label for="">Giá sản phẩm:</label>
                                                        <input type="number" name="inputPrice" class="form-control" placeholder="Nhập giá sản phẩm..."
                                                        value="{{ ($data->product_price) }}">
                                                    </div>
                    
                                                    <div class="form-group col-md-10">
                                                        <label for="">Số lượng:</label>
                                                        <input type="number" name="inputQuantity" class="form-control" placeholder="Nhập số lượng..."
                                                         value="{{ $data->product_quantity }}">
                                                    </div>
                    
                                                    <div class="form-group col-md-10">
                                                        <label for="">Đơn vị tính:</label>
                                                        <input type="text" name="inputUnit" class="form-control" placeholder="Nhập đơn vị tính..."
                                                        value="{{ $data->unit_price }}">
                                                    </div>
                    
                                                    <div class="form-group col-md-10">
                                                        <label for="">Giảm giá (%):</label>
                                                        <input type="number" name="inputDiscount" class="form-control" placeholder="Nhập giá chiết khấu..."
                                                        value="{{ $data->product_discount }}">
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <div class="col-12 text-right">
                                                            <button type="submit" class="btn btn-primary btn-sm">Cập nhật</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div> --}}
                                @endforeach
                            </tbody>
                        </table>

                        <ul class="pagination justify-content-xl-end" style="margin:20px 0">
                            {{ $show_posts->links() }}
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </section>
    {{-- Modal thêm mới sản phẩm --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('post-product') }}" method="POST" enctype="multipart/form-data">
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
                            @php($get_author = DB::table('users')->get())
                            @foreach($get_author as $value)
                                <option value="{{ $value->id }}">
                                    {{$value->full_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Tiêu Đề</label>
                        <input type="number" name="inputQuantity" class="form-control" placeholder="Nhập số lượng">
                    </div>
                    <div class="form-group">
                        <label>Nội dung </label>
                        <textarea name="inputContent" id="" cols="60" rows="20" placeholder="Nhập nội dung bài viết"></textarea>
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
            </div>
          </div>
        </div>
    </div>

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

        $(document).ready(function() {
            $("#success-alert").fadeTo(2000, 1000).slideUp(1000, function(){
            $("#success-alert").alert('close');
            });
        });
    </script>
@endsection

