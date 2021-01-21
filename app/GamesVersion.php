<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamesVersion extends Model
{
    //

    public function games(){


        return $this->hasMany('App\Games');


    }

}
