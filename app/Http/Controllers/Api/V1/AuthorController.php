<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Author;
use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorResource;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.s
     */
    public function index()
    {
        return AuthorResource::collection(Author::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->validated());
        return response()->json(
            [
                "message" => "Author has been created successfully!",
                "data" => new AuthorResource($author)
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return AuthorResource::make($author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());
        return response()->json(
            [
                "message" => "Author has been updated successfully!",
                "data" => new AuthorResource($author)
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return response()->json(["messege" => "Author has been deleted successfully!"]);
    }
}
