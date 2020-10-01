@extends('layouts.app')

@push('css')
     <link rel="stylesheet" href="{{asset('/css/order.css')}}">
@endpush


@section('title','Order')

@section('content')
     <h1 class="main-title">Order</h1>
     <div class="container">
          <a class="link button1" href="/order/input">発注入力</a>
          <a class="link button2" href="/order/history">発注履歴</a>
          <a class="link button3" href="/order/item">商品設定</a>
     </div>
@endsection