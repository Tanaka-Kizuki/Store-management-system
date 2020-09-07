<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cafe de Drip</title>
        <!-- jQuery読み込み -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links slide">
                  <p>{{$user->name}} ▼</a>
                  <div  class="item_box">
                    <a class="item" href="/logout">Log Out</a>
                  </div>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                Cafe de Drip
                </div>

                <div class="links">
                    <a href="#">Docs</a>
                    <a href="#">Laracasts</a>
                    <a href="#">News</a>
                    <a href="#">Blog</a>
                    <a href="#">Nova</a>
                    <a href="#">Forge</a>
                    <a href="#">Vapor</a>
                    <a href="#">GitHub</a>
                </div>
            </div>
        </div>
      <script src="{{asset('/js/auth.js')}}"></script>
    </body>
</html>
