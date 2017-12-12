@extends('header')
@if (Auth::user() && Auth::user()->role == 'admin')
    'THIS IS WHAT I WANT ONLY ADMIN USERS TO SEE!'
@else
    @include('errormessage')
    @section('body')
            @if(isset($cake))
                <h1> {{$cake->Name}}</h1>
                <p>Price: {{$cake->Price}}</p>
                <p>Storage: {{$cake->Storage}}</p>
                <p>Created date: {{$cake->created_at}}</p>
                <p>Latest update: {{$cake->updated_at}}</p>
                <p>
                    
                    <a class="btn btn-small btn-info" href="{{$cake->id}}/edit">Edit detail</a>
                </p>
            @else
                <h1> Cake not found</h1>
            @endif
    @endsection

@endif