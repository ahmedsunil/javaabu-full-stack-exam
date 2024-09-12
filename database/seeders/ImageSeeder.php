<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function run()
    {
        $numberOfImages = 26; // Generate 26 photos
        $extension = 'png'; // Use only PNG format

        for ($i = 1; $i <= $numberOfImages; $i++) {
            DB::table('photos')->insert([
                'image' => "images/photo{$i}.{$extension}",
                'description' => "Description for image {$i}",
                'user_id' => 1, // Assuming user IDs range from 1 to 5
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
