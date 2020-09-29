<h1>Confirmation</h1>
<p>{{$msg}}</p>
<p>発注日:{{$orderDay}}</p>
<p>納品日:{{$delivery}}</p>
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
     <p>合計金額:¥{{$price}}</p>
<button><a href="/order">戻る</a></button>
