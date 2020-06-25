<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use app\User;

class Reply extends Model
{
    // defining relationship with other models

    public function qustion(){
        return $this->belongsTo(Question::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function like(){
        return $this->hasMany(Like::class);
    }
}
