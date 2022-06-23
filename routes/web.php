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

    dd(
        route('extranet.gallery-folders.albums.index', $folder)
    );
});
