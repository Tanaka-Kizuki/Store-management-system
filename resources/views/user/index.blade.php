<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
  @if(Auth::check())
  <p>USER: {{$user->name . '(' . $user->email . ')'}}</p>
  @else
  <p>※ログインしていません。(<a href="/login">ログイン</a>|
  <a href="/register">登録</a>)</p>
  @endif
  </div>
</body>
</html>