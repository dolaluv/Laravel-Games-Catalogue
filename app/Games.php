<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    

    //
   public function playergames(){


        return $this->hasMany('App\PlayerGames');


    }

 public function gamesversions(){


        return $this->hasMany('App\GamesVersion');


    }

}
