<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(SearchRequest $request){
        $query=Article::query()->orderBy('created_at', 'desc');

        if($nom_article=$request->validated('nom_article')){

            $query=$query->where('nom_article', 'like', "%{$nom_article}%");
            
        }

        return view('back.pages.public.search', [
            'articles'=>$query->paginate(16),
            'input'=>$request->validated(),
        ]);

    }
}
