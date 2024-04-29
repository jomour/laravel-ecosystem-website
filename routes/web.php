<?php

use App\Models\Categories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $toolsList = Categories::with(['subCategories' => function($query){
        $query->with('tools');
    }])->get()->toArray();

    return view('landscape',['toolsList' => $toolsList]);
});
