@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{asset('/css/performance.css')}}">
@endpush

@section('content')
<h1 class="main-title">Performance</h1>
<div class="search">
  <form action="/time/performance" method="post">
    @csrf
    <select name="year" class="year">
      @for($i=2019; $i <= 2030; $i++)
      <option>{{$i}}</option>
      @endfor
    </select>

    <p class="year">年</p>

    <select name="month" class="month">
      @for($i=1; $i <= 12; $i++)
      <option>{{$i}}</option>
      @endfor
    </select>

    <p class="month">月</p>
    <input type="submit" value="選択">
  </form>
  <a class="return" href="/time"><button>戻る</button></a>
</div>

<div class="container">
    @foreach ($itmes as $itme)
    <div class="attendance">
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
@endsection