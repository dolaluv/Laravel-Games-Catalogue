<!DOCTYPE html>
<html lang="en">
<head>
  <title>Games Catalog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>Game Catalogue</h1>
  <p>Below are the Endpoint click to see Details</p>
</div>

<div class="container-sm border"> Return all the games[ http://127.0.0.1:8000/api/DisplayAllgames ]</div>
<div class="container-md mt-3 border">Return all the players, their games and their gameplays(Overall) [ http://127.0.0.1:8000/api/DisplayAllPlayersGames ]</div>
<div class="container-lg mt-3 border">Return all the games played per day and their players [ http://127.0.0.1:8000/api/DisplayGamesPerDay]</div>
<div class="container-xl mt-3 border">Return all the games played within a date range [ http://127.0.0.1:8000/api/GameWithinDateRange/{StartDate}/{EndDate} ] Date Format: YYYY:MM:DD</div>

</body>
</html>
