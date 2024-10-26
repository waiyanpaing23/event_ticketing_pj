@extends('organizer.layouts.master')

@section('title', 'Home')

@section('content')

{{ Auth::user()->name }}

<h1>This is organizer home page.</h1>
@endsection
