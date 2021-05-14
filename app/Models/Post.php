<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'body' ,
      'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function getLikesCountAttribute()
    {
        return $this->hasMany(Like::class)->wherePostId($this->id)->count();
    }

    public function trends()
    {
        return $this->belongsToMany(Trend::class);
    }

    public function media()
    {
        return $this->hasOne(Media::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
