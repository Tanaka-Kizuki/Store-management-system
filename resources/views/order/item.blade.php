@extends('layouts.app')

@push('css')
     <link rel="stylesheet" href="{{asset('/css/order.css')}}">
@endpush

@section('title','Order')

@section('content')
<h1 class="main-title">Item Create</h1>
<div class="input_form">
     <form action="/order/item" method="post">
          @csrf
          <label for="name">商品名</label>
          <input type="text" name="name" id="name">
          <label for="price">価格</label>
          <input type="number" name="price" id="price">
          <label for="base">適正数値</label>
          <input type="number" step="0.1" name="base" id="base">
          <input class="confirm" type="submit" value="商品登録">
     </form>
</div>

<div class="input_form">
     <table class="input_table">
          <thead>
               <tr>
                    <th>商品名</th>
                    <th>適正数値/日</th>
                    <th>単価</th>
               </tr>
          </thead>
          <tbody>
          @foreach($items as $item)
               <tr>
                    <th><p>{{$item->name}}</p></th>
                    <th>{{$item->base}}</th>
                    <th>{{$item->price}}</th>
                    <th><a class="edit" href="/order/item/edit?id={{$item->id}}"><img src="{{asset('/image/edit.svg')}}"></a></th>
               </tr>
          @endforeach
          </tbody>
     </table>
     <button class="back"><a href="/order">戻る</a></button>
</div>
@endsection