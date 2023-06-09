<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companyrep extends Model
{
    use HasFactory;
    protected $fillable = [
    'company_id',
    'first_name',
    'last_name',
    'rep_email',
    'position',
    'rep_phone',
    ];
}
