@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<center> 
    <form action="/profile" method="POST">
            {{csrf_field()}}
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
                <td>@if ($errors->has('name'))
                {{ $errors->first('name') }}
                @endif</td>
            </tr>

            <tr>
                <td>email</td>
                <td><input type="text" name="email" value="{{old('name')}}"> </td>
                <td>@if ($errors->has('email'))
                {{ $errors->first('email') }}
                @endif</td>
            </tr>

        </table>
        <button type="submit">Submit</button>
        </form>
</center>        

@endsection