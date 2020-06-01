<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\User;
use App\Team;

class CommentsController extends Controller
{
    public function __construct(){
      
        $this->middleware('forbidden-comment')->only('store');
    }

    public function store(CommentRequest $request, $teamId){
        $team = Team::find($teamId);

        $team->comments()->create($request->all());
    
        return redirect()->route('teams.show', ['id' => $teamId]);
    }
}
