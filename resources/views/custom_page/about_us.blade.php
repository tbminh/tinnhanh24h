@extends('layout.layout')
@section('title','Về chúng tôi')

@section('content')

<style>
    .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
    }

    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
    }

    .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
    margin-top: 20px;
    }

    .container {
    padding: 0 16px;
    }

    .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
    }

    .title {
    color: grey;
    }

    .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    }

    .button:hover {
    background-color: #555;
    }

    @media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;
    }
    }
</style>

<div class="about-section" >
    <h1 style="color: #fff;">Về Chúng Tôi</h1>
    <p style="color: #fff;">Tốc độ lĩnh hội được đa dạng kiến thức cũng như các tin tức về đời sống, xã hội của con người ngày càng nhanh và hiệu quả</p>
    <p style="color: #fff;">Nhiệm vụ của chúng tôi là giúp độc giả dễ dàng tiếp cận được những tin tức mới nhất.</p>
</div>
  
  <h2 style="text-align:center">Đội nhóm</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="{{ url('public/upload/mark.jpg') }}" alt="Jane" style="width:100%; height: 300px;">
        <div class="container">
          <h2>Jane Doe</h2>
          <p class="title">CEO & Founder</p>
          <p>Người sáng lập, chịu trách nhiệm vận hành hệ thống</p>
          <p>jane@gmail.com</p>
          <p><button class="button">Liên Hệ</button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="{{ url('public/upload/CZ.jpg') }}" alt="Mike" style="width:100%; height: 300px;">
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title">Excution Director</p>
          <p>Giám đốc nghệ thuật, điều hành nhân sự các cấp.</p>
          <p>mike@gmail.com</p>
          <p><button class="button">Liên Hệ</button></p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img src="{{ url('public/upload/musk.jpeg') }}" alt="John" style="width:100%; height: 300px;">
        <div class="container">
          <h2>John Doe</h2>
          <p class="title">Designer Manager</p>
          <p>Quản lý thiết kế hệ thống, duy trì giao diện</p>
          <p>john@gmail.com</p>
          <p><button class="button">Liên hệ</button></p>
        </div>
      </div>
    </div>
  </div>

@endsection