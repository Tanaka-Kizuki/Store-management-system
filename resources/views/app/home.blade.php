@extends('layouts.app')

@section('title','home')

@section('content')
    <style>
    .bgimg {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-image: url('/image/background.jpg');
        background-size: cover;
        z-index:0;
    }
    .bg {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #ffff;
        opacity: 0.3;
        z-index: 0;
    }
    .content {
        position: relative;
        z-index: 2;
        color:rgba(63, 61, 61);
    }
    </style>
    <div class="bgimg"></div>
    <div class="content">
        <div class="title m-b-md">
        Cafe de Drip
        </div>

        <div class="links">
            <a href="/time">Attendance</a>
            <a href="/communication">Communication</a>
            <a href="/order">Order</a>
        </div>
    </div>
    <div class="bg"></div>
@endsection
