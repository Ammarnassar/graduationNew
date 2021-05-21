<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function fileable()
    {
        return $this->morphTo();
    }

    public function getIconAttribute() {

        $extensions = array(
            'jpg' => 'ri-image-line',
            'png' => 'ri-image-line',
            'jpeg' => 'ri-image-line',
            'pdf' => 'ri-file-text-line',
            'txt' => 'ri-file-text-line',
            'doc' => 'ri-file-text-line',
        );


        if (in_array($this->attributes['extension'] , ['jpg' , 'png' , 'jpg' , 'jpeg' , 'pdf' , 'txt' , 'doc']))
        {
            return $extensions[$this->attributes['extension']];
        }

        return 'ri-file-text-line';

    }
}
