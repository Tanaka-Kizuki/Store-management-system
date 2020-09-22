<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/auth.css')}}">
</head>
<body>
  <div id="login">
    <p class=title>Cafe de Drip</p>
    <p class=message>{{$title}}</p>
    <form action="/" method="post">
      @csrf
      <div class="mail_box">
        <div class="mail_inner">
          <input class="mail-input" id="mail" type="text" name="email">
          <div class="mail_string">Write mail</div>
        </div>
      </div>
      <div class="password_box">
        <div class="password_inner">
          <input class="password-input" id="password" type="password" name="password">
          <div class="password_string">Write password</div>
        </div>
      </div>
      <div class="container">
        <input class="btn-gradation" type="submit" value="Login">
      </div>
    </form>
  </div>
  <script src="{{asset('/js/auth.js')}}"></script>
</body>
</html>