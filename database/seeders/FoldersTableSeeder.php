<?php

namespace Database\Seeders;

use App\Models\GalleryFolder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GalleryFolder::create([
            'slug' => 'some-test-slug',
        ]);
    }
}
