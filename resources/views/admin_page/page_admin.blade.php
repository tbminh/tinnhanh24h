@extends('layout.layout_admin')
@section('title', 'Trang nhân viên')


@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 text-right">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="page-admin">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Quản Trị Viên</li>
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
{{--                Hiển thị dòng thông báo đã thêm thành công--}}
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
                            Quản Trị Viên
                        </h3>
                        <div class="card-tools">
                            <button class="btn btn-primary btn-sm"type="button" data-toggle="modal" data-target="#exampleModal" >
                                <i class="fa fa-plus-circle"></i> Thêm mới
                            </button>
                        </div>
                    </div>
                    @include('admin_page.add_user_model')
                    <!-- /.card-header -->
                    <div class="card-body p-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ và tên</th>
                                    <th>Hình ảnh</th>
                                    <th>Email</th>
                                    <th>Điện thoại</th>
                                    <th>Giới tính</th>
                                    <th scope="col" colspan="2">Tùy chọn</th>
                                </tr>
                            </thead>

                            <tbody>
                            @forelse($show_user as $key => $data)
                                <tr>
                                    <td> {{ ++$key }}</td>
                                    <td>{{$data->full_name}}</td>
                                    <td>
                                        <img src="{{ url('public/upload/'.$data->avatar) }}"
                                            class="img-circle elevation-2" alt="User Image " width="30px" height="30px">
                                    </td>
                                    <td>{{$data->email}}</td>
                                    <td>0{{$data->phone_number}}</td>
                                    <td>
                                        @if ($data->gender==0)
                                            <b>Nam</b> 
                                        @else
                                            <b>Nữ</b>     
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-xs"
                                        href="{{ url('delete-user/'.$data->id) }}" role="button" onclick="return confirm('Bạn có chắc muốn xóa không?')">
                                            <i class="fa fa-trash"></i> Xóa
                                        </a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-id="{{$data->id}}"
                                            data-target="#editUser_{{$data->id}}">
                                            <i class="fas fa-exchange-alt"></i> Đổi
                                        </button>
                                    </td>
                                </tr>
                                <div class="modal fade" id="editUser_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <form action="{{ url('update-user/'.$data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">THAY ĐỔI THÔNG TIN</h5>
                                                </div>
                            
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="inputName">Họ tên</label>
                                                        <input type="text" class="form-control" name="inputName"  value="{{ $data->full_name }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputName">Email</label>
                                                        <input type="email" class="form-control" name="inputEmail"  value="{{ $data->email }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputName">Điện Thoại</label>
                                                        <input type="text" class="form-control" name="inputPhone"  value="{{ $data->phone_number }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Giới tính</label><br>
                                                        @if ($data->gender == '0')
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="inputSex" checked value="0">Nam
                                                                </label>
                                                            </div>
                                
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="inputSex" value="1">Nữ
                                                                </label>
                                                            </div>
                                                        @else
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="inputSex" value="0">Nam
                                                                </label>
                                                            </div>
                                
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="inputSex" checked value="1">Nữ
                                                                </label>
                                                            </div>   
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Hình ảnh</label>
                                                        <input type="file" class="form-control-file" id="imgInp" name="inputFileImage">
                                                        <img id="blah" src="#" style="max-width:100%;height:50px;border-radius:5px;"/>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="col-12 text-right">
                                                            <button type="submit" class="btn btn-primary btn-sm">Cập Nhật</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                @empty
                                    <tr>
                                        <td colspan="11">
                                            <b class="text-danger">Không có dữ liệu </b>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <ul class="pagination justify-content-center" style="margin:20px 0">
                            {{ $show_user->links() }}
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

@endsection

