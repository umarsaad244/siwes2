<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

   $Amount = $_POST["amount"];
   $Firstcurrency = $_POST["firstcurrency"];
   $Secondcurrency = $_POST["secondcurrency"];

   $nairaindollar = 1630;
   $dollarinnaira = 0.00061;

   $convertintodollar = $Amount*$dollarinnaira;
   $convertintonaira = $Amount*$nairaindollar;

   if($Firstcurrency=="Naira" && $Secondcurrency == "US Dollar"){
    echo "$Amount naira contain $convertintodollar US Dollar";

   }
    elseif($Firstcurrency=="US Dollar" && $Secondcurrency=="Naira"){
        echo "$Amount US Dollar contain $convertintonaira Naira";
    }
    
    else{
        echo "please select another currency to be converted";
    }




   

   
   ?>
</body>
</html>