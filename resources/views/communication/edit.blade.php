<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    input {display:block}
  </style>
</head>
<body>
  <form action="/communication/edit" method="post">
  @csrf
  <input type="hidden" name="id" value="{{$form->id}}">
  <input type="text" name="title" value="{{$form->title}}">
  <input type="text" name="name" value="{{$form->name}}">
  <input type="text" name="message" value="{{$form->message}}">
  <input type="submit" value="write">
  <a href="/communication">戻る</a>
  </form>
</body>
</html>

