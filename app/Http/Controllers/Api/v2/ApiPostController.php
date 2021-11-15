<?php

namespace App\Http\Controllers\Api\v2;

use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\v2\PostResource;

class ApiPostController extends Controller
{
    public function show(Post $post):PostResource
    {
        return new PostResource($post);
    }
}
