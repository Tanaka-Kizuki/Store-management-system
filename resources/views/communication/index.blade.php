<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Communication</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css//communication.css">
</head>
<body>
  <h1 class="main-title">communication</h1>
  <section class="form-area">
    <form action="/communication" method="post">
      @csrf
        <div class="form-field col x-50">
          <p>Title:</p>
         <input class="input_text" type="text" name="title">
        </div>
        <div class="form-field col x-50">
          <p>Name:</p>
          <input class="input_text" type="text" name="name">
        </div>
        <div class="form-field col x-100">
          <p>Message</p>
         <textarea class="input_text textarea" type="text" name="message"></textarea>
        </div>
        <div class="text-align x-100">
          <input class="submit-btn" type="submit" value="Write">
        </div>
    </form>
  </section>
  <hr>
  @foreach ($items as $item)
  <div class="item {{$item->id}}">
    <div class="header">
        <p class="id">{{$item->id}}</p>
        <p class="title">{{$item->title}}</p>
    </div>
    <div class="message">
      {!!nl2br(e($item->message))!!}
    </div>
    <div class="footer">
      <p class="name">担当: {{$item->name}}</p>
      <a href="/communication/edit?id={{$item->id}}">編集</a>
      <a href="/communication/del?id={{$item->id}}">削除</a>
      <p class="date">{{$item->updated_at}}</p>
    </div>
  </div>
  @endforeach

  {{$items->links()}}

  <script src="js/communication.js"></script>
</body>
</html>
