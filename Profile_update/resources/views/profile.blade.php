@extends('layouts.app')
@section('title')
Profile
@endsection
@section('content')

<center> 
    @if (session()->has('status'))
        Update was successful
        <br>
    @else
    @endif

    User ID: {{session()->get('id')}}
    <form action="/getupdate" method="POST">
            {{csrf_field()}}
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="{{session()->get('name')}}"></td>
                <td>@if ($errors->has('name'))
                {{ $errors->first('name') }}
                @endif</td>
            </tr>

            <tr>
                <td>Age</td>
                <td><input type="number" name="age" value="{{session()->get('age')}}"> </td>
                <td>@if ($errors->has('age'))
                {{ $errors->first('age') }}
                @endif</td>
            </tr>


            <tr>
                <td>Mobile No.</td>
                <td><input type="number" name="mobile" value="{{session()->get('mobile')}}"> </td>
                <td>@if ($errors->has('mobile'))
                {{ $errors->first('mobile') }}
                @endif</td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{session()->get('email')}}"> </td>
                <td>@if ($errors->has('email'))
                {{ $errors->first('email') }}
                @endif</td>
            </tr>

            <tr>
                <td>Address</td>
                <td>
                <textarea placeholder='Enter address...' name="address" rows="4" cols="25" >{{session()->get('address')}}</textarea>
                </td>
                <td>@if ($errors->has('address'))
                {{ $errors->first('address') }}
                @endif</td>
            </tr>

            <tr>
                <td>Image</td>
                <td>
                <input type="file" name="image">
                </td>
                <td>@if ($errors->has('image'))
                {{ $errors->first('image') }}
                @endif</td>

            </tr>

        </table>
        <button type="submit">Submit</button>
        </form>
</center>        

@endsection