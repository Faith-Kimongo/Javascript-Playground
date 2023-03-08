<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myhustle extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    // comments

    public function comments(){
        return $this->hasMany(Comment::class);
    }


}
