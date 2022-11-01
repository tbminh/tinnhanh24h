@extends('layout.layout')
@section('title','Trang thông tin cá nhân')
@section('content')

<style>
    body{margin-top:20px;
    background-color:#f2f6fc;
    color:#69707a;
    }
    .img-account-profile {
        height: 10rem;
    }
    .rounded-circle {
        border-radius: 50% !important;
    }
    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }
    .card .card-header {
        font-weight: 500;
    }
    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }
    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }
    .form-control, .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }
    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }
</style>

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <br>
    <hr class="mt-0 mb-4">
    <form action="{{ url('change-profile/'.Auth::id()) }}" method="POST">
    @method('PUT')
    @csrf
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Ảnh đại diện</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="{{ url('public/upload/'.Auth::user()->avatar) }}">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">{{ Auth::user()->full_name }}</div>
                        <!-- Profile picture upload button-->
                        <div style="height:0px;overflow:hidden">
                            <input class="form-control" type="file" id="inputFileImage" name="inputFileImage" />
                         </div>
                        <button class="btn btn-primary" type="button" onclick="chooseFile();">Thay đổi ảnh đại diện</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Thông tin cá nhân</div>
                    <div class="card-body"  style="margin: 0 10px 0 10px;">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputName">Họ Tên: </label>
                            <input class="form-control" name="inputName" type="text" placeholder="Nhập họ tên" value="{{ Auth::user()->full_name }}">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmail">Email </label>
                            <input class="form-control" name="inputEmail" type="email" placeholder="Nhập email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputOld">Giới tính &emsp;&emsp;
                                @if (Auth::user()->gender == 0)
                                    <label class="radio-inline">
                                        <input type="radio" name="inputGender" id="male" value="0" checked>  Nam
                                    </label> &emsp;
                                    <label class="radio-inline">
                                        <input type="radio" name="inputGender" id="female" value="1">  Nữ
                                    </label>
                                @else
                                    <label class="radio-inline">
                                        <input type="radio" name="inputGender" id="male" value="0">  Nam
                                    </label> &emsp;
                                    <label class="radio-inline">
                                        <input type="radio" name="inputGender" id="female" value="1" checked>  Nữ
                                    </label>
                                @endif
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputPhone">Điện Thoại</label>
                            <input class="form-control" name="inputPhone" type="text" placeholder="Nhập địa chỉ" value="0{{ Auth::user()->phone_number }}">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputOld">Mật Khẩu Cũ </label>
                            <input class="form-control" name="inputOld" type="password" placeholder="Nhập mật khẩu cũ">
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputNew">Mật Khẩu Mới</label>
                                <input class="form-control" name="inputNew" type="password" placeholder="Nhập mật khẩu mới" >
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputConfirm">Xác Nhận Mật Khẩu</label>
                                <input class="form-control" name="inputConfirm" type="password" placeholder="Xác nhận mật khẩu">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Cập Nhật</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    function chooseFile() {
      $("#inputFileImage").click();
    }
</script>
@endsection