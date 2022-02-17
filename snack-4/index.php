<?php
#Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$list=[];

while(count($list)<15){

    $number=rand(1,16);

    if(!in_array($number, $list)){
        $list[]=$number;
    }
    
}

?>
<!DOCTYPE html>
<html  lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>
<body>
    <h1>Random numbers</h1>
    <?php
       for($i=0;$i<count($list); $i++){
           echo "<span>".$list[$i]." - "."</span>";
       }
    ?>
</body>
</html>