<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'comments';
    public function commentsable()
    {
        return $this->morphTo();
    }
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }
    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }public function replies()
    {
        return $this->morphMany(Reply::class, 'repliesable');
    }
}
