<h1>Item Create</h1>
<form action="/order/item" method="post">
@csrf
    <label for="name">商品名</label>
    <input type="text" name="name" id="name">
    <label for="price">価格</label>
    <input type="number" name="price" id="price">
    <label for="base">適正数値</label>
    <input type="number" name="base" id="base">

    <input type="submit" value="商品登録">
</form>

<div class="item">
     <table>
          <thead>
               <tr>
                    <th>商品名</th>
                    <th>適正数値/日</th>
                    <th>単価</th>
               </tr>
          </thead>
          <tbody>
          @foreach($items as $item)
               <tr>
                    <th><p>{{$item->name}}</p></th>
                    <th>{{$item->base}}</th>
                    <th>{{$item->price}}</th>
                    <th><a href="/order/item/edit?id={{$item->id}}">Edit</a></th>
               </tr>
          @endforeach
          </tbody>
     </table>
</div>

<a href="/order">戻る</a>

