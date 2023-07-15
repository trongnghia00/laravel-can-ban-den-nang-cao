<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        $this->authorize('is_admin');

        return "<h1>This is create page</h1>";
    }
}
