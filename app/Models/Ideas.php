<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ideas extends Model
{
    protected $fillable = [
        'title',
        'improvement'
    ];
}
