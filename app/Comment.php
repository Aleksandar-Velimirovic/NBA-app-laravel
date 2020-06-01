<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Team;

class Comment extends Model
{
    protected $fillable = [
        'author','content', 'team_id', 'user_id'
    ];

    public function user () {

        return $this->belongsTo(User::class);

    }

    public function team () {

        return $this->belongsTo(Team::class);

    }
}
