<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\PostFactory;

class MyPost extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $fillable = ['title', 'description', 'status', 'published_at', 'userid', 'category_id'];
    // protected $guarded = [];

    protected static function newFactory() : Factory
    {
        return PostFactory::new();
    }
}
