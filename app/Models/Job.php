<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    // category
    public function category(){
        return $this->belongsTo(Category::class);
    }


    // Applicants
    public function applicants(){
        return $this->hasMany(Application::class);
    }

    protected $casts = [
        'deadline' => 'datetime'
    ];
}
