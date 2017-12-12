@extends('header')
@if (Auth::user() && Auth::user()->role == 'admin')
    'THIS IS WHAT I WANT ONLY ADMIN USERS TO SEE!'
@else

    @section('body')
            @if(isset($cake))
                <h1> {{$cake->Name}}</h1>
                <a>Price: {{$cake->Price}}</a>
                <a>Storage: {{$cake->Storage}}</a>
                <a>Createed date: {{$cake->create_at}}</a>
            @else
                <h1> Cake not found</h1>
            @endif
    @endsection

@endif