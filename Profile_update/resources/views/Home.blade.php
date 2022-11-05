@extends('layouts.User')
@section('title')
Home
@endsection
@section('body')
<body id="userloginbody">
@endsection
@section('content')
<h1>Welcome to Home </h1>
{{session('registration_message')}}
@endsection