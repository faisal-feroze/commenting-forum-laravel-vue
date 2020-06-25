<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use app\User;

class Question extends Model
{
    // defining relationship with other models
    public function user(){
        //return $this->belongsTo(User::class);
        return $this->belongsTo('App\User');
    }

    public function reply(){
        return $this->hasMany(Reply::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    //protected $fillable = ['title','slug','body','category_id','user_id'];
    protected $guarded = [];
    
    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

}
