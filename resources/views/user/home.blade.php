@extends('layouts.master')

@section('title', 'Home')

@section('content')

{{ Auth::user()->name }}
<h1>This is user home page.</h1>
@endsection
