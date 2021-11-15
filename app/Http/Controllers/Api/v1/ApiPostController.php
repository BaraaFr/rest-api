<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\PostResource;
use App\Post;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function show(Post $post)
    {
        $data = PostResource::make($post);
        return response()->json($data,200);
    }

    public function index()
    {
        $posts  =   Post::all();
        $data   =   PostResource::collection($posts);
        return response()->json($data);
    }

    public function store(Request  $request)
    {
        $post = Post::create($request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]));
        $data=PostResource::make($post);
        return response()->json($data,201);
    }

    public function update(Post $post, Request $request)
    {
        $post->update($request->all());
        $data=PostResource::make($post);
        return response()->json($data,200);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(null,204);
    }
}
