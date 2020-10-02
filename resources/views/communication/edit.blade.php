@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="{{asset('/css/communication.css')}}">
@endpush

@section('content')
<h1 class="main-title">communication:Edit</h1>
<div class="edit_form">
  <form action="/communication/edit" method="post">
  @csrf
    <input class="edit_input" type="hidden" name="id" value="{{$form->id}}">
    <p>Title</p>
    <input class="edit_input" type="text" name="title" value="{{$form->title}}">
    <p>Message</p>
    <textarea class="edit_input" cols="50" rows="20" type="text" name="message">{{$form->message}}</textarea>
    <input class="confirm" type="submit" value="write">
    <button class="back"><a href="/communication">戻る</a></button>
  </form>
</div>

@endsection