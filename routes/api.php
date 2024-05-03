<?php 

use App\Models\Ideas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/send-improvement', function (Request $request) {

    Ideas::create($request->all());

    return response()->json(['message' => 'Idea send successfully'], 200);
});

