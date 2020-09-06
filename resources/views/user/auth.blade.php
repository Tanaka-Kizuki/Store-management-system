<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>{{$message}}</p>
  <form action="/user/auth" method="post">
    <table>
      @csrf
      <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
      <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
  </form>
</body>
</html>