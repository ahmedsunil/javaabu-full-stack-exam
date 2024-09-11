<?php

namespace App\Actions;

use App\Models\Photo;
use Illuminate\Http\UploadedFile;

class StorePhotoAction
{
    /**
     * Create a new class instance.
     */
    public function handle(UploadedFile $file, string $description, $userId): Photo
    {
        $imageName = time().'.'.$file->extension();
        $imagePath = $file->storeAs('images', $imageName, 'public');

        $photo = new Photo;
        $photo->description = $description;
        $photo->image = $imagePath;
        $photo->user_id = $userId;
        $photo->save();

        return $photo;
    }
}
