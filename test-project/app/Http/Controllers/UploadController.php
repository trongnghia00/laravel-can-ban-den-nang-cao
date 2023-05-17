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

    public function handleUpload(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:100', 'mimes:png,jpg,gif']
        ]);

        $request->image->storeAs('/images', 'new_image.jpg');

        return redirect()->back();
    }

    public function download()
    {
        return response()->download(public_path('/images/new_image.jpg'));
    }
}
