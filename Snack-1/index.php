<?php
/*#snack 1: Creiamo un array contenente le partite di basket di 
un’ipotetica tappa del calendario. Ogni array avrà una squadra di 
casa e una squadra ospite, punti fatti dalla squadra di casa e punti 
fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con
 questo schema.*/

 $partite=[
     [
        'homeTeam'=>'Atlanta Hawks',
        'guest'=>'Charlotee Hornets',
        'homeTeamScore'=>22,
        'guestTeamScore'=>33,
     ],
     [
        'homeTeam'=>'ChicagoBulls',
        'guest'=>'Boston Celtics',
        'homeTeamScore'=>42,
        'guestTeamScore'=>90,
     ],
     [
        'homeTeam'=>'Philadelphia 76ERs',
        'guest'=>'Orlando Magic',
        'homeTeamScore'=>42,
        'guestTeamScore'=>90,
     ],
     [
        'homeTeam'=>'Miami Heat',
        'guest'=>'Brocklin Nets',
        'homeTeamScore'=>0,
        'guestTeamScore'=>20,
     ],
     [
        'homeTeam'=>'Dallas maverick',
        'guest'=>'Indiana Pacers',
        'homeTeamScore'=>77,
        'guestTeamScore'=>55,
     ],
     [
        'homeTeam'=>'Denver Nuggets',
        'guest'=>'Golden state warriors',
        'homeTeamScore'=>18,
        'guestTeamScore'=>36,
     ],
     [
        'homeTeam'=>'Dallas maverick',
        'guest'=>'Indiana Pacers',
        'homeTeamScore'=>77,
        'guestTeamScore'=>55,
     ],
     [
        'homeTeam'=>'Utah jazz',
        'guest'=>'New orleans Pelicans',
        'homeTeamScore'=>80,
        'guestTeamScore'=>34,
     ],
     [
        'homeTeam'=>'Sacramento Kings',
        'guest'=>'Oklahoma city',
        'homeTeamScore'=>55,
        'guestTeamScore'=>66,
     ],

 ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php
       echo "<h1> Partite di Basket </h1>";
       
       echo "<ul>";
       for($i=0;$i<count($partite);$i++){
           echo "<li>" .$partite[$i]["homeTeam"] . " VS " .$partite[$i]["guest"]
           ." = "." <h2>".
           $partite[$i]["homeTeamScore"]."-".$partite[$i]["guestTeamScore"]."</h2></li>";
       }
       echo "</ul>";

    ?>
</body>
</html>