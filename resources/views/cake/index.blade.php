

@extends('header')
@if (Auth::user() && Auth::user()->role == 'admin')
    'THIS IS WHAT I WANT ONLY ADMIN USERS TO SEE!'
@else

    @section('body')
        {{--  @include('navigation')  --}}
        <div class="cointainer">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{URL::to('cake')}}">Cakes list</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{URL::to('cake')}}"> All cakes</a></li>
                    <li><a href="{{URL::to('cake/create')}}"> Create new cake</a></li>
                </ul>
            </nav>
            <h2>All Cakes</h2>
            <table class="table table-striped table-bordered">
                <thread>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Storage</td>
                    </tr>
                </thread>
                <tbody>
                    @foreach($cakes as $cake =>$value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->Name}}</td>
                        <td>{{$value->Price}}</td>
                        <td>{{$value->Storage}}</td> 
                        <td>
                            <a class="btn btn-small btn-success" href="{{URL::to('cakes/'.$value.id)}}">Show detail</a>
                            <a class="btn btn-small btn-info" href="{{URL::to('cakes/'.$value.id.'/edit')}}">Edit detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    @endsection

@endif