<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryFolder extends Model
{
    protected $fillable = [
        'title',
        'slug',
    ];

//    public function albums(): HasMany
//    {
//        return $this->hasMany(GalleryAlbum::class);
//    }

    public static function booted()
    {
//        static::deleting(function (GalleryFolder $galleryFolder) {
//            $galleryFolder->albums->each->delete();
//        });
    }
}
