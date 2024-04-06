<?php

namespace App\Models;

use App\Models\Tools;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $fillable = [
        'id',
        'name',
        'categories_id'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function tools()
    {
        return $this->hasMany(Tools::class);
    }
}
