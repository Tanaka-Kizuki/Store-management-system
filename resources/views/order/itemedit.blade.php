@extends('layouts.app')

@push('css')
     <link rel="stylesheet" href="{{asset('/css/order.css')}}">
@endpush

@section('title','Order')

@section('content')
     <h1 class="main-title">Item Edit</h1>
     <div class="input_form">
          <form action="/order/item/edit" method="post">
               @csrf
               <input class="item_edit" type="hidden" name="id" value="{{$form->id}}">
               <input class="item_edit" type="text" name="name" value="{{$form->name}}">
               <input class="item_edit" type="number" name="price" value="{{$form->price}}">
               <input class="item_edit" type="number" name="base" value="{{$form->base}}">
               <input class="confirm" type="submit" value="Edit">
               <button class="back"><a href="/order/item">戻る</a></button>
          </form>
     </div>
@endsection