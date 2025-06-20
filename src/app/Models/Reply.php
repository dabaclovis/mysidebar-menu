<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'replies';
    public function repliesable()
    {
        return $this->morphTo();
    }
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }
}
