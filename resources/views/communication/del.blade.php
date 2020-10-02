@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="{{asset('/css/communication.css')}}">
@endpush

@section('content')
<h1 class="main-title">communication:Delete</h1>
<div class="del">
  <form action="/communication/del" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <u><p>{{$form->title}}</p></u>
    <div class="body">
      <p>{{$form->message}}</p>
    </div>
    <input class="btn" type="submit" value="delete">
  </form>
</div>
@endsection