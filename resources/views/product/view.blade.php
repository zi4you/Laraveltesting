
@extends('layouts.app')
@section('content')
<table>

@foreach($product as $myproduct)

        <tr>
            <td>
                name:{{ $myproduct->name }}
            </td>
            <td>
                price:{{ $myproduct->price }}
            </td>
            <td>
                <a href="edit/{{$myproduct->id}}">Edit</a>
            </td>
            <td>
               <a href="add/{{$myproduct->id}}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>

    @endsection