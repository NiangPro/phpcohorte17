<?php 

$a = 5;
$b = 3;

$somme = $a + $b;
$difference = $a - $b;
$produit = $a * $b;
$dif = $a / $b; //division decimale 
$dent = intval($a / $b); //division entiere 
$power = $a**$b;
$modulo = $a % $b;

echo "$a + $b = $somme <br>";
echo "$a - $b = $difference <br>";
echo "$a x $b = $produit <br>";
echo "$a<sup>$b</sup> = $power <br>";

$age  = 24;
$note = 12;

if($age >= 18){
    echo "Vous etes majeur <br>";

    if($note >= 10){
        echo "passant <br>";
    }else{
        echo "redoublant <br>";
    }
}else if($age < 18){
    echo "Vous etes mineur <br>";
}