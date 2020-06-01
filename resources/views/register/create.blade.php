@extends('layouts.master')
@section('title','Register')
    
@section('content')

<h2>Register user</h2>

<form method="POST" action="/register" >

    @csrf

    <div class="form-group">
        <label for="name">Name: </label>
            <input type="text" class="form-control" id="name" name="name"/>
        </label>
    </div>
    
    <div class="form-group">
        <label for="email">Email: </label>
            <input type="text" class="form-control" id="email" name="email"/>
        </label>
    </div>

    <div class="form-group">
        <label for="password">Password: </label>
            <input type="password" class="form-control" id="password" name="password">
        </label>
    </div>

    <div class="form-group">
        <button type="submit" class=" btn btn-primary">Submit</button>
    </div>

</form>