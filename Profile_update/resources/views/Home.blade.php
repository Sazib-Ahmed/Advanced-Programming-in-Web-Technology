@extends('layouts.User')
@section('title')
Home
@endsection


@section('body')
@if (Cookie::get('background')!== null)
<body id="{{Cookie::get('background')}}">
@else
<body id="backgrounddefault">
@endif

@endsection


@section('content')
<h1>Welcome to Home </h1>
{{session('registration_message')}}
@endsection