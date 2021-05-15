<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class,'sender');
    }

    public function files()
    {
        return $this->morphMany(File::class,'fileable');
    }
}
