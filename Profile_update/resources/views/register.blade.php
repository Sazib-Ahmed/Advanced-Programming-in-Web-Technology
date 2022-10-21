@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<center> 
    <form action="/getregister" method="POST">
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
                <td>Age</td>
                <td><input type="number" name="age" value="{{old('age')}}"> </td>
                <td>@if ($errors->has('age'))
                {{ $errors->first('age') }}
                @endif</td>
            </tr>


            <tr>
                <td>Mobile No.</td>
                <td><input type="number" name="mobile" value="{{old('mobile')}}"> </td>
                <td>@if ($errors->has('mobile'))
                {{ $errors->first('mobile') }}
                @endif</td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{old('email')}}"> </td>
                <td>@if ($errors->has('email'))
                {{ $errors->first('email') }}
                @endif</td>
            </tr>

            

            <tr>
                <td>Address</td>
                <td>
                <textarea placeholder='Enter address...' name="address" rows="4" cols="25">{{old('address')}}</textarea>
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