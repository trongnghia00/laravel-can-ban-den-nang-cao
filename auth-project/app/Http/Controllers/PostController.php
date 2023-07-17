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

    public function delete($id) {
        $post = Post::findOrFail($id);

        $this->authorize('delete', $post);

        return "<h1>Are you sure you want to delete post with id {$post->id}</h1>";
    }
}
