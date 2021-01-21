<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('gamecatalogue');
});

 

Route::get('api/DisplayAllgames', 'CatalogueController@index')->name('allgames');  // return all games

Route::get('api/DisplayAllPlayersGames', 'CatalogueController@gamesummary')->name('allplayers');  // Return all the players, their games and their gameplays (overall and for each game)

Route::get('api/DisplayGamesPerDay', 'CatalogueController@gamesplayperday')->name('dailygames');  //Return all the games played per day and their players


Route::get('api/GameWithinDateRange/{StartDate}/{EndDate}', 'CatalogueController@gamesrange')->name('gamesrange');  // Return all the games played within a date range

Route::get('/GameWithinSampleDateRange', 'CatalogueController@gamesrangesample')->name('gamesrangesample');  // Return all the games played within a date range


Route::get('/top', 'CatalogueController@index')->name('allplayers');  // Return the top 100 players month by month with a link to see the games they 

Route::fallback(function(){
    return response()->json([
        'message' => 'Oh!! The Url does not exist. '], 404);
});