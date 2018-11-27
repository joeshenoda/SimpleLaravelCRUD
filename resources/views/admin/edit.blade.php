@extends('layouts.appyou')
@section('content')
<form action="/edit/{{$product->id}}" method="post">
    {{csrf_field()}}
    name: <input type="text" name="name" value="{{$product->name}}" placeholder="enter name"/>

    std_no: <input type="text" name="std_no" value="{{$product->std_no}}" placeholder="enter id" />
    <input type="submit" value="edit product "/>

</form>

@endsection