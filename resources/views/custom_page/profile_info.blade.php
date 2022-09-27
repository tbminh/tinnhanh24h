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
    <form action="">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Profile picture upload button-->
                        <div style="height:0px;overflow:hidden">
                            <input type="file" id="fileInput" name="fileInput" />
                         </div>
                        <button class="btn btn-primary" type="button" onclick="chooseFile();">Upload new image</button>
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
                            <input class="form-control" id="inputName" type="text" placeholder="Nhập họ tên" value="{{ Auth::user()->full_name }}">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmail">Email </label>
                            <input class="form-control" id="inputEmail" type="email" placeholder="Nhập email" value="{{ Auth::user()->email }}">
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Mật Khẩu Cũ</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Nhập mật khẩu cũ" >
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Mật Khẩu Mới</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="Nhập mật khẩu mới">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Điện Thoại</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Nhập địa chỉ" value="0{{ Auth::user()->phone_number }}">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    function chooseFile() {
      $("#fileInput").click();
    }
</script>
@endsection