<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        //
        return ArticleResource::collection(Article::with(['author', 'category'])->latest()->paginate(4));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->validated());
        return response()->json(
            [
                "message" => "Article has been created successfully!",
                "data" => new ArticleResource($article)
            ]
        );
    }

    /**
     * Display the specified resource.
     */


    public function show(Article $article)
    {
        return ArticleResource::make($article);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->validate());
        return response()->json(
            [
                "message" => "Article has been updated successfully",
                "data" => new ArticleResource($article)
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(["message" => "Articel has been deleted succesfullt!"]);
    }
}
