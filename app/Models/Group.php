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


}
