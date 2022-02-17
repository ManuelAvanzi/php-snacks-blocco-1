<?php
/*Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/


if(key_exists("name",$_GET) && key_exists("mail",$_GET) && key_exists("age",$_GET)){

    $name=$_GET["name"];
    $mail=$_GET["mail"];
    $age=$_GET["age"];

    $validName=false;
    $validMail=false;
    $validAge=false;

    //stringa da stampare per l'utente
    $messageForClient="";


    $access=false;

        //controllo il nome con strlen
    if(strlen($name)>3){
         $validName=true;
        $messageForClient.="name valido<br>";
    }

    //controllo l'email con strpos
    if(strpos($mail,'@') !==false && strpos($mail,'.') !==false){
        $validMail=true;
        $messageForClient.="mail valida<br>";
    }
    //controllo l'età
    if(is_numeric($age)){
        $validAge=true;
        $messageForClient.="age valida<br>";
    }

    if($validName && $validMail && $validAge){
        $access=true;
    }

}else{
    echo "<h2> Mancano delle variabili </h2>";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <h1>name - mail - age</h1>
   <?php
   
   echo $messageForClient;

   if($access){
       echo "<h2> Accesso riuscito </h2>";
   }else{
       echo "<h2> Accesso negato </h2>";
   }
?>
    
</body>
</html>