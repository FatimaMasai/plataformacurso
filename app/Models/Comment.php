<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];
    
    use HasFactory;

    //relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    //los commentarios van a recibir reaciones
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }

}
