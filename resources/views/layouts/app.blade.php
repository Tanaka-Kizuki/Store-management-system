<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  @stack('css')
</head>
<body>
  <div class="top-right links slide">
    @if (Route::has('login'))
    <p>{{ Auth::user()->name }} ▼</a>
    <div  class="item_box">
        <a class="item" href="/home">Home</a>
        <a class="item" href="/logout">Log Out</a>
        <a class="item" href="/register">Sign up</a>
    </div>
    @endif
  </div>

  @yield('content')
  
  <script src="{{asset('/js/auth.js')}}"></script>
</body>
</html>