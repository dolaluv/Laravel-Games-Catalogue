<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Games;
use Illuminate\Support\Facades\Session;

class GamePlayController extends Controller
{


    public function index(){

      

 return  $posts = Games::all();


    

    }
}
