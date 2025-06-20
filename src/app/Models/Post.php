<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'posts';
    public function images()
    {
        return $this->morphOne(Image::class, 'imagesable');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentsable');
    }
}
