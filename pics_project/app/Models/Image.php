<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'file', 'dimension', 'user_id', 'slug'];

    public static function makeDirectory() {
        $subFolder = 'images/' . date('Y/m/d');
        Storage::makeDirectory($subFolder);
        return $subFolder;
    }

    public static function getDimension($image) {
        [$width, $height] = getimagesize( Storage::path($image));
        return $width . 'x' . $height;
    }

    public function scopePublished($query) {
        return $query->where('is_published', true);
    }

    public function fileUrl() {
        return Storage::url($this->file);
    }

    public function link() {
        return $this->slug ? route('image.show', $this->slug) : "#";
    }

    public function route($method, $key = 'id') {
        return route("image.$method", $this->$key);
    }

    public function getSlug() {
        $slug = str($this->title)->slug();
        $numSlugs = static::where('slug', 'LIKE', "$slug%")->count();
        if ($numSlugs > 0) {
            return $slug . '-' . $numSlugs + 1;
        }
        return $slug;
    }

    protected static function booted() {
        static::creating(function ($image) {
            if ($image->title) {
                $image->slug = $image->getSlug();
                $image->is_published = true;
            }
        });

        static::updating(function ($image) {
            if ($image->title && !$image->slug) {
                $image->slug = $image->getSlug();
                $image->is_published = true;
            }
        });

        static::deleted(function ($image) {
            Storage::delete($image->file);
        });
    }
}
