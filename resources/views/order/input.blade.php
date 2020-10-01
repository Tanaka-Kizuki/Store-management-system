@extends('layouts.app')

@push('css')
     <link rel="stylesheet" href="{{asset('/css/order.css')}}">
@endpush

@section('content')
<h1 class="main-title">Order</h1>
<div class="date">
     <p>発注日:{{$orderDay}}</p>
     <p>納品日:{{$delivery}}</p>
</div>

<div class="input_form">
     <form action="/order/confirmation" method="post">
          @csrf
          <table class="input_table">
               <thead>
                    <tr>
                         <th>商品名</th>
                         <th>適正数値/日</th>
                         <th>単価</th>
                         <th>在庫</th>
                    </tr>
               </thead>
               <tbody>
               @foreach($items as $item)
                    <tr>
                         <th><p>{{$item->name}}</p></th>
                         <th>{{$item->base}}</th>
                         <th>{{$item->price}}</th>
                         <th><input type="number" step="0.1" name="{{$item->id}}[count]"></th>
                         <input type="hidden" name="{{$item->id}}[name]" value="{{$item->name}}">
                    </tr>
               @endforeach
               </tbody>
          </table>
          <input class="confirm" type="submit" value="発注確定">
          <a class="button" href="/order">戻る</a>
     </form>
</div>

@endsection