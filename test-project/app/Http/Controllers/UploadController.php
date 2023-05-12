<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UploadController extends Controller
{
    public function index()
    {
        return View('upload');
    }

    public function handleUpload()
    {
        return 'Hello';
    }
}
