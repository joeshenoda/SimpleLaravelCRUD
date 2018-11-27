@extends('layouts.appyou')
@section('content')

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
                @endforeach
        </ul>
    </div>
    @endif

<form action="/product/store" method="post">
    {{csrf_field()}}
    name: <input type="text" name="name" value="{{Request::old('name')}}" placeholder="enter name"/>

    std_no: <input type="text" name="std_no" value="{{Request::old('std_no')}}"  placeholder="enter id"/>
    <input type="submit" value="enter product "/>

</form>
    @endsection

