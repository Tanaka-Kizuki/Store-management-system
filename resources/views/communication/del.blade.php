<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>削除ページ</h2>
  <div>
    <form action="/communication/del" method="post">
    @csrf
      <input type="hidden" name="id" value="{{$form->id}}">
      <p>{{$form->title}}</p>
      <p>{{$form->name}}</p>
      <p>{{$form->message}}</p>
      <input type="submit" value="delete">
    </form>
  </div>
</body>
</html>