<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class PhotosController extends Controller
{
    public function index()
    {
        return view('photos.index');
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store() {}

    public function show()
    {
        return view('photos.show');
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        return to_route('photos.index');
    }
}
