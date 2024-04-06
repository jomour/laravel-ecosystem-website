<?php

namespace App\Models;

use App\Models\SubCategories;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    public function subCategories()
    {
        return $this->hasMany(SubCategories::class);
    }
}
