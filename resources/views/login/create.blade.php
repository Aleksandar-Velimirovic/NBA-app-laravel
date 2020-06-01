@extends('layouts.master')
@section('title')
    Login
@endsection
    
@section('content')

<form method="POST" action="/login" >

    @csrf

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

@if (count($errors->all()) > 0)

    @foreach($errors->all() as $error)
        <div class="form-group">
            <div class="alert alert-danger">
                <li>{{ $error }}</li>
            </div>
        </div>
    @endforeach

@endif