<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Players extends Model
{
    //

    protected $fillable = [
         'PlayerName', 'PlayerNickName', 'PlayerEmail','PlayerPassword','LastLogin',
    ];
   



      public function playergames(){


        return $this->hasMany('App\PlayerGames');


    }

     public function gamesplays(){


        return $this->hasMany('App\GamesPlay');


    }

    public function games(){


        return $this->belongsTo('App\Games');


    }

        public function ratings()
    {
      return $this->hasMany('App\Rating');
    }
}
