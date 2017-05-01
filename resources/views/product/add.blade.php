@extends('layouts.app')
@section('content')
    @if( count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach

            </ul>
        </div>
     @endif
<form action="add" method="POST">
    {{ csrf_field() }}

product name: <input type="text" value="{{Request:: old('name')}}" class="form-control" name="name" placeholder="Enter name product">
    </br>
 product price: <input type="text" value="{{Request:: old('price')}}" class="form-control" name="price" placeholder="Enter price product">
</br>
    <input type="submit" class="btn btn-primary"  value="Add product">

</form>
@endsection
