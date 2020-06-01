@extends('layouts.master')
@section('title',$player->first_name)
    
@section('content')

<style>
    .heading{
        text-align: center;
    }
    .paragraph{
        text-align: center;
    }
</style>

<h3 class="heading">{{$player->first_name}} {{$player->last_name}}</h3>
<p class="paragraph"> Contact:{{$player->email}}</p>
<p><h4><a href="/teams/{{$player->team_id}}">Back to team!</a></h4></p>