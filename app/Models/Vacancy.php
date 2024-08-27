<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable = [
        'position', 
        'location', 
        'description', 
        'schedule', 
        'requirements', 
        'category_id', 
        'user_id'
    ];
}
