@extends('layouts.UserHome')
@section('title')
Profile
@endsection
@section('body')
<body id="userloginbody">

@endsection

@section('content')
    <form action="/user/profile/update" class="box" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <img src="/storage/{{session()->get('u_profile_pic')}}" class="avatar">
            <br>
            <h1>Profile</h1>
                
               <h2>ID: {{session()->get('u_id')}}</h2>

                <h2>Name:</h2>
                <input type="text" name="u_name" placeholder="Enter Name" value="{{session()->get('u_name')}}" >
                <h3>@if ($errors->has('u_name'))
                {{ $errors->first('u_name') }}
                @endif
                </h3>

                <h2>Date of Birth:</h2>
                <input type="text" name="u_dob" placeholder="{{session()->get('u_dob')}}" min="1930-11-07" max="2015-11-07" onfocus="(this.type='date')" value="{{session()->get('u_dob')}}" >
                <h3>
                @if ($errors->has('u_dob'))
                {{ $errors->first('u_dob') }}
                @endif
                </h3>

                <h2>Age:{{session()->get('u_age')}}</h2>
                <h2>Phone:</h2>
                <input type="number" name="u_phone" placeholder="Enter Phone" value="{{session()->get('u_phone')}}" >
                <h3>
                @if ($errors->has('u_phone'))
                {{ $errors->first('u_phone') }}
                @endif
                </h3>

                <h2>Email:</h2>
                <input type="text" name="u_email" placeholder="Enter Email" value="{{session()->get('u_email')}}" >
                <h3>
                @if ($errors->has('u_email'))
                {{ $errors->first('u_email') }}
                @endif
                </h3>
                
                <h2>Address 1:</h2>
                <input type="text"  name="u_address1" placeholder="Enter Address 1"  value="{{session()->get('u_address1')}}" >
                <h3>
                @if ($errors->has('u_address1'))
                {{ $errors->first('u_address1') }}
                @endif
                </h3>
                
                <h2>Address 2:</h2>
                <input type="text"  name="u_address2" placeholder="Enter Address 2"  value="/storage/{{session()->get('u_profile_pic')}}" >
                <h3>
                @if ($errors->has('u_address2'))
                {{ $errors->first('u_address2') }}
                @endif
                </h3>

                <h2>Password</h2>
                <input type="text" onfocus="(this.type='password')" name="u_password" placeholder="Enter Password to Update" value="{{old('u_password')}}">
                <h3>
                @if ($errors->has('u_password'))
                {{ $errors->first('u_password') }}
                @endif
                </h3>
                
                <h2>Profile Picture</h2>
                <input type="text" onfocus="(this.type='file')" placeholder="Choose Picture to Update" name="u_profile_pic" value="{{old('u_profile_pic')}}">
                <h3>
                @if ($errors->has('u_profile_pic'))
                {{ $errors->first('u_profile_pic') }}
                @endif
                </h3>

                <input type="submit" name="" value="Update">
        </form>   
@endsection