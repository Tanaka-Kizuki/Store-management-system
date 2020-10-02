@extends('layouts.app')
@push('css')
  <link rel="stylesheet" href="{{asset('/css/attendance.css')}}">
@endpush

@section('content')
<h1 class="main-title">Attendance</h1>
<p class="day">{{$day}}</p>
<output class="realtime"></output>
<p>{{session('message')}}</p>
<form class="timestamp" action="/time/timein" method="post">
@csrf
  <button class="button1">出勤</button>
</form>

<form class="timestamp" action="/time/timeout" method="post">
@csrf
  <button class="button2">退勤</button>
</form>

<form class="timestamp" action="/time/breakin" method="post">
@csrf
  <button class="button3">休憩開始</button>
</form>

<form class="timestamp" action="/time/breakout" method="post">
@csrf
  <button class="button4">休憩終了</button>
</form>

<a href="/time/performance">
  <button class="button5">勤怠実績</button>
</a>

@if(Auth::user()->admin == 0)
<a href="/time/daily">
  <button class="button6">日次勤怠</button>
</a>
@endif

<div class="container">
  @foreach ($itmes as $itme)
  <div class="attendance">
    <p class="name">{{$itme->user_name}}</p>
    <table>
      <tr><td>出勤</td><td>{{$itme->punchIn}}</td></tr>
      <tr><td>休憩開始</td><td>{{$itme->breakIn}}</td></tr>
      <tr><td>休憩終了</td><td>{{$itme->breakOut}}</td></tr>
      <tr><td>退勤</td><td>{{$itme->punchOut}}</td></tr>
      <tr><td>勤務時間</td><td>{{$itme->workTime}}</td></tr>
    </table>
  </div>
  @endforeach
</div>
<script src="{{asset('/js/time.js')}}"></script>
@endsection
