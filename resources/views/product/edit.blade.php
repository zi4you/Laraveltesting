@extends('layouts.app')
@section('content')
<form action="/edit/{{$product->id}}" method="POST">
    {{ csrf_field() }}
    product name: <input type="text" name="name" value="{{$product->name}}" placeholder="Enter name product">
    </br>
    product price: <input type="text" name="price"  value="{{$product->price}}" placeholder="Enter price product">
    </br>
    <input type="submit" value="Edit product">

</form>

@endsection