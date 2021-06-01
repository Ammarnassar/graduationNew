<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostGroup;


class Group extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function users(){
        return $this->belongsToMany(User::class,'joins');
    }

    public function posts(){
        return $this->hasMany(PostGroup::class);
    }

    public function getPhotoAttribute()
    {
        if ($this->attributes['photo'])
            return 'storage/'.$this->attributes['photo'];
        else
            return 'temp/html/images/page-img/profile-bg1.jpg';
    }


}
