@extends('layouts.app')
@push('css')
  <link rel="stylesheet" href="{{secure_asset('/css/communication.css')}}">
@endpush

@section('content')
  <h1 class="main-title">communication</h1>
  <section class="form-area">
    <form action="/communication" method="post">
      @csrf
        <div class="form-field col x-50">
          <p>Title:</p>
         <input class="input_text" type="text" name="title">
        </div>
        <div class="form-field col x-50">
          <p>Name:</p>
          <input class="input_text" type="text" name="name" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-field col x-100">
          <p>Message</p>
         <textarea class="input_text textarea" type="text" name="message"></textarea>
        </div>
        <div class="text-align x-100">
          <input class="submit-btn" type="submit" value="Write">
        </div>
    </form>
  </section>
  <hr>
  @foreach ($items as $item)
  <div class="items {{$item->id}}">
    <div class="header">
        <p class="id">{{$item->id}}</p>
        <p class="title">{{$item->title}}</p>
    </div>
    <div class="message">
      {!!nl2br(e($item->message))!!}
    </div>
    <div class="footer" id="app">
      <p class="name">担当: {{$item->name}}</p>
      <a class="edit" href="/communication/edit?id={{$item->id}}"><img src="{{asset('/image/edit.svg')}}"></a>
      <a class="dust" href="/communication/del?id={{$item->id}}"><img src="{{asset('/image/dust.svg')}}"></a></a>
      <like-component :post_id="{{$item->id}}"></like-component>
      <p class="date">{{$item->updated_at}}</p>
    </div>
  </div>
  @endforeach

  {{$items->links()}}

  <script src="js/communication.js"></script>
@endsection