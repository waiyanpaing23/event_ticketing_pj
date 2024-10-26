@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="p-5">
        <h1>Sell your tickets online</h1>
        <a href="{{ route('organizer.register') }}" class="btn btn-dark">Register as Organizer</a>
    </div>
</div>

@endsection