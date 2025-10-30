<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieAPIController extends Controller
{
    function index()
    {
        $categories = Categorie::all();
        return response(['message'=> 'Catégories récupérées avec succès','data' => $categories]);
    }

    function store(Request $request)
    {
        Categorie::create($request->all());
        return response(['message'=> 'Catégorie ajoutée avec succès' ]);
    }

    function update($id, Request $request)
    {
        $categorie = Categorie::find($id);
        $categorie->update($request->all());
        return response(['message'=> 'Catégorie modifiée avec succès' ]);
    }
}
