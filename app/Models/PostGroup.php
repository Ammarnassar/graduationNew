<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGroup extends Model
{
    use HasFactory;
    protected $guarded=[];

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
        return $this->morphMany(Media::class,'mediaable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

}
