<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/auth/login', [\App\Http\Controllers\API\AuthController::class,'login']);

//Pour cCatégorie
Route::get('/categories', [\App\Http\Controllers\API\CategorieAPIController::class,'index']);

Route::post('/categories/store', [\App\Http\Controllers\API\CategorieAPIController::class,'store']);

Route::put('/categories/update/{id_categorie}', [\App\Http\Controllers\API\CategorieAPIController::class,'update']);

//Pour Produits s'inspirer des routes de api
