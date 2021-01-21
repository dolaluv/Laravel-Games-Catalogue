<p align="center">Laravel Games Catalog API</p>

## About Games Catalogue

Download the file and run the below

composer update

create a database

php artisan migrate


i created playters randomly using the faker class;

i used sql query to created random gamesplay in the database 

Below is the link to generate random Data




The application is written in laravel. It is a rest APi that returns Json Object

-Return all the games[ http://127.0.0.1:8000/api/DisplayAllgames ]
-Return all the players, their games and their gameplays(Overall) [ http://127.0.0.1:8000/api/DisplayAllPlayersGames ]
-Return all the games played per day and their players [ http://127.0.0.1:8000/api/DisplayGamesPerDay]
-Return all the games played within a date range [ http://127.0.0.1:8000/api/GameWithinDateRange/{StartDate}/{EndDate} ] Date Format: YYYY:MM:DD

