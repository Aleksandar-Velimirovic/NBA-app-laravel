@extends('layouts.master')
@section('title')
    Teams
@endsection
    
@section('content')
    
<style>
    .heading{
        text-align: center;
    }

    .registration_link{

        margin-left:35px;
        margin-top: 10px;
    }

    .login_link{

        margin-left:35px;
        margin-top: 10px;
    }

    .login{

        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        margin-right: 20px;
        margin-left: 20px;
    }

</style>
    
    <div class="login">
        @if(Auth::check())
            <a href="#">{{Auth::user()->name}}</a>
            <a href="/logout">Logout</a>
        @else   
            <a href="/login">Login</a> 
            <a href="/register">Register</a> 
        @endif
    </div>

    <h3 class="heading">Teams</h3>

    <ul>
        @foreach ($teams as $team)
            <li><h4><a href="/teams/{{$team->id}}">{{$team->name}}</a></h4></li>
        @endforeach
    </ul>
