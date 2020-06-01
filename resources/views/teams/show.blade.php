@extends('layouts.master')
@section('title',$team->name)
    
@section('content')

<style>
    .heading{
        text-align: center;
    }
    .paragraph{
        text-align: center;
    }
</style>
  
  <h3 class="heading">{{$team->name}}</h3>
    <p class="paragraph"> From:{{$team->city}}</p>
    <p class="paragraph"> Contact:{{$team->email}}</p>
    <p><h4><a href="/">Back to teams!</a></h4></p>
    <h3>Players</h3>
       
    @foreach ($team->players as $player)
        <ul class="list-unstyled">
            <li>
                <p>Player: <a href="/players/{{$player->id}}">{{$player->first_name}} {{$player->last_name}}</a></p>
            </li>
        </ul>
    @endforeach

    @if(count($team->comments))

        <h3>Comments:</h3>

         @foreach ($team->comments as $comment)
           

            <ul class="list-unstyled">
                <li>

                    <p>Author: {{$comment->author}}</p>
                    
                    <p>Content: {{$comment->content}}</p>

                </li>
               
            </ul>
         @endforeach
    @endif

    <form action="{{route('comments-team', $team->id) }}" method="POST">
       
       @csrf
       <div class="form-group">
            <label for="author">Your name:</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>
           
       <div class="form-group">
            <label for="content">Comment</label>
            <input type="text" id="content" name="content" class="form-group">
       </div>

       <div class="form-group">
           <button type="submit" class="btn btn-primary">Submit</button>
       </div>
   </form>