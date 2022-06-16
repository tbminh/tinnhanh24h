@extends('admin_page.page_profile')

@section('content-change')
    <div class="col-md-9">

        @if(session()->has('message'))
            <div class="alert alert-success" id="alert-message">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#">Thông tin cập nhật</a></li>
                </ul>
            </div>
            <div class="card-body">
                <form action="{{ url('update-profile/'.$infor_user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="">Họ và tên:</label>
                        <input type="text" name="inputFullname" class="form-control" placeholder="Nhập họ và tên" value="{{ $infor_user->full_name }}">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Email:</label>
                        <input type="email" class="form-control" name="inputEmail" value="{{ $infor_user->email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="">Giới tính</label><br>
                        @if ($infor_user->gender == '0')
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

                    <div class="form-group ">
                        <label for="inputPhone"> Điện thoại </label>
                        <input type="number" class="form-control" name="inputPhone" placeholder="Nhập số điện thoại" value="0{{ $infor_user->phone_number}}">
                    </div>

                    <div class="form-group">
                        <label for="inputImg">Ảnh đại diện</label><br>
                        <input type="file" name="inputFileImage">
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-danger">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

@endsection


