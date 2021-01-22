<p align="center">Laravel Games Catalog API</p>

## About Games Catalogue

Download the file and run the below

composer update

create a database

php artisan migrate


i created playters randomly using the faker class;

i used sql query to created random gamesplay in the database 

Below is the link to generate random Data

https://drive.google.com/file/d/1JDBA4J_CXugMxa2YvF1CFyX_e24EGnbv/view?usp=sharing


Below is the url where the application is been published

http://mid4tech.com.ng/Games/


The application is written in laravel. It is a rest APi that returns Json Object

-Return all the games[ http://mid4tech.com.ng/Games/api/DisplayAllgames ]

-Return all the players, their games and their gameplays(Overall) [http://mid4tech.com.ng/Games/api/DisplayAllPlayersGames ]

-Return all the games played per day and their players [http://mid4tech.com.ng/Games/DisplayGamesPerDay]

-Return all the games played within a date range [ http://mid4tech.com.ng/Games/{StartDate}/{EndDate} ] Date Format: YYYY:MM:DD
