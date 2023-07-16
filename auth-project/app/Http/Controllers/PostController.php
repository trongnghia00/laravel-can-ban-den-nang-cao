<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        $this->authorize('create', Post::class);

        return "<h1>This is create page</h1>";
    }
}
