<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Famille;
use App\Models\Image;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Sous_categorie;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $familles=Famille::all();
        $categories=Categorie::all();
        $subCategories=Sous_categorie::all();
        $modeles=Modele::all();
        $marques=Marque::all();
        $articles=Article::all();
        $images=Image::all(); 
        
        
        return view('back.pages.plateform',[
            'familles'=>$familles,
            'categories'=>$categories,
            'subCategories'=>$subCategories,
            'modeles'=>$modeles,
            'marques'=>$marques,
            'articles'=>$articles,
            'images'=>$images,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
