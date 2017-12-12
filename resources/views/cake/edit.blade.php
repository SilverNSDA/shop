@extends('header')
@if (Auth::user() && Auth::user()->role == 'admin')
    'THIS IS WHAT I WANT ONLY ADMIN USERS TO SEE!'
@else
    @include('errormessage')
    @section('body')
        <div class="container"style="">
            @include('cake.navbar')
            <div class="outer">
                <div class="col-sm-8 inner">
                    <h2> Edit a cake's record</h2>
                    {{Html::ul($errors->all())}}
                    {{Form::open(array('url'=>'cakes','action'=>['CakeController@update',$cake->id],'method'=>'POST'))}}
                    <div class="col-sm-8">
                        <div class="form-group" style="text-align:center;">
                            {{Form::label('Name','Name')}}
                            {{Form::text('Name',$cake->Name, array('class'=>'form-control', 'style'=>'width:75%; text-align:center; float: right;'))}}
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group"style="text-align:center;">
                            {{Form::label('Price','Price')}}
                            {{Form::text('Price',$cake->Price, array('class'=>'form-control', 'style'=>'width:75%;text-align:center; float: right;'))}}
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group"style="text-align:center;">
                            {{Form::label('Storage','Storage')}}
                            {{Form::text('Storage',$cake->Storage, array('class'=>'form-control', 'style'=>' width:75%;text-align:center; float: right;'))}}
                        </div>
                        {{--  {{Form::hidden('_method','PUT')}}  --}}
                        {{Form::submit('Update', array('class'=>'btn btn-primary','style'=>' text-align:center; float: right;'))}}
                        {{Form::close()}}
                    </div>
                </div>
            </div>
            
        </div>
    @endsection

@endif