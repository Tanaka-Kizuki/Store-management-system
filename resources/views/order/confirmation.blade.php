@extends('layouts.app')

@push('css')
     <link rel="stylesheet" href="{{asset('/css/order.css')}}">
@endpush


@section('title','Order')

@section('content')
<h1 class="main-title">Order:Confirmation</h1>
<p class="msg">{{$msg}}</p>
<div class="date">
     <p>発注日:{{$orderDay}}</p>
     <p>納品日:{{$delivery}}</p>
</div>
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
