<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function AudioFile()
    {
      return $this -> hasMany(AudioFile::class);
    }
}
