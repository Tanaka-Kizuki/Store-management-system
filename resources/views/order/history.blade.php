<form action="/order/history" method="post">
@csrf
     <label for="order">発注</label>
     <input type="date" id="order" name="date">
     <input type="submit" value="検索">
</form>

<p>{{$msg}}</p>

<table>
     <thead>
          <tr>
               <th>商品名</th>
               <th>発注数</th>
               <th>合計金額</th>
          </tr>
     </thead>
     <tbody>
     @foreach($items as $item)
          <tr>
               <th>{{$item->name}}</th>
               <th>{{$item->order_count}}個</th>
               <th>¥{{$item->total}}</th>
          </tr>
     @endforeach
     </tbody>
</table>
<a href="/order">戻る</a>

