<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNameAttribute()
    {
        $name = $this->attributes['first_name'] .' '.$this->attributes['last_name'];

        return $name;
    }

    public function getAvatarAttribute()
    {
        if ($this->profile_photo)
            return asset('storage/'.$this->profile_photo);
        else
            return 'https://ui-avatars.com/api/?name='.urlencode($this->name);
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->latest();
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }


    public function notifications()
    {
        return $this->hasMany(Notifications::class,'receiver')->latest();
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function mails(){
        return $this->hasMany(Mail::class,'receiver');
    }

    public function trashs(){
        return $this->hasMany(Mail::class,'receiver')->onlyTrashed();
    }

    public function following(){
        return $this->belongsToMany(User::class,'follows','following','follower');
    }

    public function followers(){
        return $this->belongsToMany(User::class,'follows','follower','following');
    }

    public function postsFromFollowing(){
        return $this->hasManyThrough(Post::class,Follow::class,'following','user_id','id'
        ,'follower')->latest();
    }

    public function media()
    {
        return $this->morphMany(Media::class,'mediaable');
    }

}
