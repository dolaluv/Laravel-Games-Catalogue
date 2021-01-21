<?php

namespace App\Http\Controllers;

use App\Players;
use App\PlayerGames;
use App\Games;
use App\GamesPlay;
use App\GamesVersion;
use Config;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Barryvdh\Debugbar\Facade as Debugbar;

class CatalogueController extends Controller
{
 

     public function sendResponse($result)
    {
      Debugbar::stopMeasure('render');


    $Duration = date("H:i:s",microtime(true)-LARAVEL_START);
        $response = [
            'success' => true,
            'response_time' => $Duration,
            'message' =>Debugbar::addMeasure('now', LARAVEL_START, microtime(true)),
            'data' => $result
            
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 400)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }


function randomDate($sStartDate, $sEndDate, $sFormat = 'Y-m-d')
{
    // Convert the supplied date to timestamp
    $fMin = strtotime($sStartDate);
    $fMax = strtotime($sEndDate);

    // Generate a random number from the start and end dates
    $fVal = mt_rand($fMin, $fMax);

    // Convert back to the specified date format
    return date($sFormat, $fVal);
}
 

     public function index(){

      $games = Games::with('gamesversions')->get();


      if ($games) {
        
          return $this->sendResponse($games);
      
      }
      else
      {

        return $this->sendError("Bad Request");

      }

     }

      public function gamesummary(){

        Debugbar::startMeasure('render','Time for rendering');


     $Players_Games =    Players::Select("*")
     ->with([
                   'playergames' => function ($query){
                                    $query->select('player_games.id','games.id','player_games.players_id','games.GameName')->join('games', 'games.id', '=', 'player_games.games_id');
                   },
                    
                   'gamesplays' => function ($query)  {
                                   $query->select('games_plays.id','games.id','games_plays.players_id','games.GameName')->join('games', 'games.id', '=', 'games_plays.games_id');
                   },
            ])->get();


      if ($Players_Games) {
        
          return $this->sendResponse($Players_Games);
      
      }
      else
      {

        return $this->sendError("Bad Request");

      }



     }

      public function gamesplayperday(){

// $time = strtotime('10/16/2003');

// $newformat = date('Y-m-d',$time);
// $startDate= date()
      $FilterDate =  $this->randomDate('2010-01-01','2020-12-12');

     $PlayedGame =    GamesPlay::Select("*")
     ->with([
                   'players' => function ($query){
                                    $query->select('*');
                   },
                    
                  
            ])->join('games', 'games.id', '=', 'games_plays.games_id')->where('games_plays.PlayedDate','=', $FilterDate)->get();


      if ($PlayedGame) {
        
          return $this->sendResponse($PlayedGame);
      
      }
      else
      {

        return $this->sendError("Bad Request");

      }

     }

  
     public function gamesrange($from,  $to){

//if (DateTime::createFromFormat('Y-m-d H:i:s', $from) !== FALSE) return $this->sendError("Invalid Date");
  
              $from = date($from);
              $to = date($to);
 


   $GamesRange = GamesPlay::Select("*")
     ->with([
                   'players' => function ($query){
                                    $query->select('*');
                   },
                    
                  
            ])->join('games', 'games.id', '=', 'games_plays.games_id')->whereBetween('games_plays.PlayedDate', [$from, $to])->get();



      if ($GamesRange) {
        
          return $this->sendResponse($GamesRange);
      
      }
      else
      {

        return $this->sendError("Bad Request");

      }

     }


          public function gamesrangesample(){

               $from = date('2021-01-19');
              $to = date('2021-01-19');


   $GamesRange = GamesPlay::Select("*")
     ->with([
                   'players' => function ($query){
                                    $query->select('*');
                   },
                    
                  
            ])->join('games', 'games.id', '=', 'games_plays.games_id')->whereBetween('games_plays.PlayedDate', [$from, $to])->get();



      if ($GamesRange) {
        
          return $this->sendResponse($GamesRange);
      
      }
      else
      {

        return $this->sendError("Bad Request");

      }

     }


    
}
