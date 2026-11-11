<?php 

try{

    echo 5/0;
}catch(DivisionByZeroError $e){
    echo "Impossible de diviser par 0 a la ligne ".__LINE__." dans le fichier:". __FILE__;
}

// $db = new PDO("mysql:host=localhost;dbname=ndgatech", "root", "");