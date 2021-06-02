<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Detail extends Model
{
    protected $fillable = [

        'argument',
        'like',
    ];

    public function post(){

        return $this -> hasOne(Post::class);
    }
}
