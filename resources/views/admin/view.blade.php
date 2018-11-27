





@extends('layouts.appyou')
@section('content')
<table>
    @foreach($product as $myproduct )
    <tr>
        <td>
            name: {{$myproduct->name }}

        </td>

        <td>
            std_no:{{$myproduct->std_no}}

        </td>
        <td>
            name2:{{$myproduct->namerel}}

        </td>
        <td>
            date:{{$myproduct->daterel}}

        </td>

        <td>
            <a href="/add/{{$myproduct->id}} "> delete </a>

        </td>

        <td>
            <a href="/edit/{{$myproduct->id}} "> edit </a>

        </td>

    </tr>
    @endforeach
</table>
 @endsection