<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>
  <div id="login">
    <p class=title>Cafe fe Drip</p>
    <p class=message>{{$title}}</p>
    <form action="/auth" method="post">
      @csrf
      <div class="mail_box">
        <div class="mail_inner">
          <input id="mail" type="text" name="email">
          <div class="mail_string">Write mail</div>
        </div>
      </div>
      <div class="password_box">
        <div class="password_inner">
          <input id="password" type="password" name="password">
          <div class="password_string">Write password</div>
        </div>
      </div>
      <div class="container">
        <input class="btn-gradation" type="submit" value="Login">
      </div>
    </form>
  </div>
</body>
</html>