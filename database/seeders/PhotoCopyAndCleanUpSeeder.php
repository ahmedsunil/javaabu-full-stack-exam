<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PhotoCopyAndCleanUpSeeder extends Seeder
{
    public function run()
    {
        $sourcePath = public_path('photos'); // Adjust this if your source folder is named differently
        $destinationPath = storage_path('app/public/images');

        // Ensure the destination directory exists
        if (! File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }

        // Get all files from the source directory
        $files = File::files($sourcePath);

        foreach ($files as $file) {
            $filename = $file->getFilename();

            // Check if the file is a PNG
            if (strtolower($file->getExtension()) === 'png') {
                // Copy the file to the destination
                File::copy($file->getRealPath(), $destinationPath.'/'.$filename);

                $this->command->info("Copied: {$filename}");
            }
        }

        $this->command->info('All PNG photos have been copied to storage/app/public/images');

        // Delete the source folder
        File::deleteDirectory($sourcePath);
        $this->command->info("Deleted source folder: {$sourcePath}");

        // Create a symbolic link if it doesn't exist
        if (! file_exists(public_path('storage'))) {
            $this->command->call('storage:link');
            $this->command->info('Symbolic link created for public storage');
        }
    }
}
