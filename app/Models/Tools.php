<?php

namespace App\Models;

use App\Models\SubCategories;
use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected $fillable = [
        'id',
        'name',
        'imagePath',
        'description',
        'websitePath',
        'githubPath',
        'sub_categories_id'
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategories::class);
    }
}
