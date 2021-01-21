<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerGames extends Model
{
    //

      protected $fillable = [

        'game_id '
        
        
 

    ];

       public function players(){


        return $this->hasMany('App\Players');

    }

    public function games(){


        return $this->belongsTo('App\Games');


    }


    
}
