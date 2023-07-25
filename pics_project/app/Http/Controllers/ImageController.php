<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index() {
        // $images = Image::published()->latest()->paginate(15);
        $images = Image::latest()->paginate(15);

        return view('image.index', compact('images'));
    }

    public function show(Image $image) {
        return view('image.show', compact('image'));
    }

    public function create() {
        return view('image.create');
    }

    public function store(ImageRequest $request) {
        Image::create($request->getData());
        return redirect()->route('image.index')->with('message', 'Image has been uploaded !');
    }
}
