<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'abouts';
    public function aboutsable()
    {
        return $this->morphTo();
    }
}
