<?php

use App\Http\Controllers\GalleryFolderAlbumsController;
use App\Models\GalleryFolder;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'extranet',
    'as' => 'extranet.',
    'middleware' => 'defaults',
], function () {
    Route::get('{locale}/gallery/{folder:slug}/albums', [GalleryFolderAlbumsController::class, 'index'])->name('gallery-folders.albums.index');
});

Route::get('/', function () {
    $folder = GalleryFolder::query()->first();

    return [
        "expected-route" => "http://127.0.0.1:8000/extranet/de/gallery/$folder->slug/albums",
        "generated-route" =>  route('extranet.gallery-folders.albums.index', $folder),
    ];
});
