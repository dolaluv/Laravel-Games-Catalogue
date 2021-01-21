<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamesPlay extends Model
{
    //


      public function players(){


        return $this->hasMany('App\Players');

    }
}
