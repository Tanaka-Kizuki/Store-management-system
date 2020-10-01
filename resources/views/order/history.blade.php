@extends('layouts.app')

@push('css')
     <link rel="stylesheet" href="{{asset('/css/order.css')}}">
@endpush


@section('title','Order')

@section('content')
<h1 class="main-title">Order:History</h1>
<div class="input_form">
     <form action="/order/history" method="post">
     @csrf
          <label for="order">発注</label>
          <input type="date" id="order" name="date">
          <input type="submit" value="検索">
     </form>
</div>

<p class="msg">{{$msg}}</p>
<div class="input_form">
     <table class="input_table">
          <thead>
               <tr>
                    <th>商品名</th>
                    <th>発注数</th>
                    <th>合計金額</th>
               </tr>
          </thead>
          <tbody>
          @foreach($items as $item)
               <tr>
                    <th>{{$item->name}}</th>
                    <th>{{$item->order_count}}個</th>
                    <th>¥{{$item->total}}</th>
               </tr>
          @endforeach
          </tbody>
     </table>
     <p class="totalPrice">合計金額:¥{{$price}}</p>
     <button class="back"><a href="/order">戻る</a></button>
</div>
@endsection
