<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Trend extends Model
{
    use HasFactory;
    protected $fillable = [
      'post_id',
      'name'
    ];

    public function getPostsCountAttribute()
    {
        $count = Trend::where('name' , $this->attributes['name'])->count();

        return $count;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
