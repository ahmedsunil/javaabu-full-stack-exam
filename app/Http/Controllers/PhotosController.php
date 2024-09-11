<?php

namespace App\Http\Controllers;

use App\Actions\StorePhotoAction;
use App\Http\Requests\PhotoRequest;
use App\Models\Photo;
use Gate;
use Storage;

class PhotosController extends Controller
{
    public function index()
    {
        $photos = Photo::paginate();

        return view('photos.index', compact('photos'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(PhotoRequest $request, StorePhotoAction $action)
    {
        $image = $request->file('image');
        $description = $request->input('description');
        $userId = auth()->user()->id;

        $photo = $action->handle($image, $description, $userId);

        return redirect()->route('photos.show', $photo)->with('success', 'Photo Uploaded!');
    }

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    public function destroy(Photo $photo)
    {
        Gate::authorize('delete', $photo);

        Storage::disk('public')->delete($photo->image);

        $photo->delete();

        return to_route('photos.index');
    }
}
