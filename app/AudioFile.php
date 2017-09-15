<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioFile extends Model
{
  public function Song()
  {
    return $this -> belongsTo(Song::class);
  }
}
