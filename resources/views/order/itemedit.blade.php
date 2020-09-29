<form action="/order/item/edit" method="post">
@csrf
     <input type="hidden" name="id" value="{{$form->id}}">
     <input type="text" name="name" value="{{$form->name}}">
     <input type="number" name="price" value="{{$form->price}}">
     <input type="number" name="base" value="{{$form->base}}">
     <input type="submit" value="Edit">
</form>