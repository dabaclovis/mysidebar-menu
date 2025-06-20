<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'fname',
        'lname',
        'email',
        'roles',
        'person_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }
    /**
     * Get the user's full name with username.
     *
     * @return string
     */
    public function getFullNameWithUsernameAttribute()
    {
        return "{$this->fname} {$this->lname} ({$this->username})";
    }
    public function phones()
    {
        return $this->morphOne(Phone::class, 'phonesable');
    }
    public function abouts()
    {
        return $this->morphOne(About::class, 'aboutsable');
    }
    public function posts()
    {
        return $this->hasMany(Post::class,'postsable');
    }
    public function images()
    {
        return $this->morphOne(Image::class, 'imagesable');
    }
    public function contacts()
    {
        return $this->morphOne(Contact::class, 'contactsable');
    }
}
