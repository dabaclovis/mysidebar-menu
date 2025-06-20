<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'images';
    public function imagesable()
    {
        return $this->morphTo();
    }
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->attributes['url']);
    }
}
